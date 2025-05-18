<?php

namespace App\Controller;

use Stripe\Stripe;
use App\Entity\Commande;
use App\Form\PaiementType;
use Stripe\Checkout\Session;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;

class PaymentController extends AbstractController
{
    #[Route('/paiement/{id}', name: 'app_paiement')]
    public function index(Commande $commande, Request $request, EntityManagerInterface $em, SessionInterface $session): Response {
        
        // Vérifiez que l'utilisateur est bien le propriétaire de la commande
        if ($commande->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        // Vérifiez que la commande n'est pas déjà payée
        if ($commande->getStatus() !== 'en attente') {
            $this->addFlash('warning', 'Cette commande a déjà été traitée.');
            return $this->redirectToRoute('user_livre_all');
        }

        // Créez le formulaire de paiement
        $form = $this->createForm(PaiementType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $method = $form->get('methode')->getData();

            if ($method === 'domicile') {
                /*$commande->setStatus('payée');
                $em->flush();
                $session->set('panier', []);*/
                
                $this->addFlash('success', 'Commande confirmée! Vous paierez à la livraison.');
                return $this->redirectToRoute('app_paiement_success', ['id' => $commande->getId()]);
            } 
            elseif ($method === 'carte') {
                return $this->redirectToRoute('app_paiement_stripe', ['id' => $commande->getId()]);
            }
        }

        return $this->render('paiement/index.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/paiement/stripe/{id}', name: 'app_paiement_stripe')]
    public function stripePayment(Commande $commande): Response
    {
        //Stripe::setApiKey($this->getParameter('STRIPE_SECRET_KEY'));
        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $this->getStripeItems($commande),
            'mode' => 'payment',
            'success_url' => $this->generateUrl('app_paiement_success', ['id' => $commande->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('app_paiement_cancel', ['id' => $commande->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
            'metadata' => [
                'commande_id' => $commande->getId()
            ]
        ]);

        return $this->redirect($session->url, 303);
    }

    private function getStripeItems(Commande $commande): array
    {
        return array_map(function($item) {
            return [
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $item->getLivre()->getTitre(),
                    ],
                    'unit_amount' => $item->getLivre()->getPrix() * 100,
                ],
                'quantity' => $item->getQuantite(),
            ];
        }, $commande->getCommandeLivres()->toArray());
    }

    #[Route('/paiement/success/{id}', name: 'app_paiement_success')]
    public function success(Commande $commande,EntityManagerInterface $em,SessionInterface $session,MailerInterface $mailer): Response{
        $commande->setStatus('payée');
        $em->persist($commande);
        
        $session->set('panier', []);
        
        $em->flush();
        
        $email = (new TemplatedEmail())
            ->from('noreply@Symbook.com')
            ->to($commande->getUser()->getEmail())
            ->subject('votre reçu de commande')
            ->htmlTemplate('paiement/verify.html.twig')
            ->context([
                'commande' => $commande,
                'user' => $commande->getUser(),
            ]);
        $mailer->send($email);
        $this->addFlash('success', 'Paiement confirmé ! Merci pour votre achat.');
        return $this->render('paiement/success.html.twig', [
            'commande' => $commande
        ]);
    }

    #[Route('/paiement/cancel/{id}', name: 'app_paiement_cancel')]
    public function cancel(Commande $commande): Response
    {
        return $this->render('paiement/cancel.html.twig', [
            'commande' => $commande
        ]);
    }
}