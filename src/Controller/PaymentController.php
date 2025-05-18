<?php

namespace App\Controller;

use Stripe\Stripe;


use App\Entity\Commande;
use App\Form\PaiementType;
use Stripe\Checkout\Session;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
public function success(
    Commande $commande,
    EntityManagerInterface $em,
    SessionInterface $session,
    MailerInterface $mailer,
    UrlGeneratorInterface $urlGenerator
): Response {
    // Generate a verification token and store it in session
    $verificationToken = bin2hex(random_bytes(32));
    $session->set('payment_verification', [
        'token' => $verificationToken,
        'commande_id' => $commande->getId(),
        'expires_at' => time() + 3600 // 1 hour expiration
    ]);
    
    // Send verification email
    $verificationUrl = $urlGenerator->generate(
        'app_verify_payment',
        ['token' => $verificationToken],
        UrlGeneratorInterface::ABSOLUTE_URL
    );
    
    $email = (new Email())
        ->from('no-reply@votresite.com')
        ->to($commande->getUser()->getEmail())
        ->subject('Veuillez confirmer votre paiement')
        ->html($this->renderView(
            'paiement/verify.html.twig',
            [
                'commande' => $commande,
                'verificationUrl' => $verificationUrl,
                'user' => $commande->getUser()
            ]
        ));
    
    $mailer->send($email);
    
    $this->addFlash('info', 'Un email de vérification a été envoyé. Veuillez confirmer votre paiement.');
    return $this->redirectToRoute('user_livre_all');
}

#[Route('/verify-payment/{token}', name: 'app_verify_payment')]
public function verifyPayment(
    string $token,
    EntityManagerInterface $em,
    SessionInterface $session,
    Request $request
): Response {
    $verificationData = $session->get('payment_verification', []);
    
    // Check if token matches and isn't expired
    if (empty($verificationData) || 
        $verificationData['token'] !== $token || 
        $verificationData['expires_at'] < time()) {
        $this->addFlash('error', 'Lien de vérification invalide ou expiré');
        return $this->redirectToRoute('app_home');
    }
    
    // Get the commande and complete payment
    $commande = $em->getRepository(Commande::class)->find($verificationData['commande_id']);
    if (!$commande) {
        throw $this->createNotFoundException('Commande non trouvée');
    }
    
    $commande->setStatus('payée');
    $em->persist($commande);
    $session->set('panier', []);
    $session->remove('payment_verification'); // Clean up
    $em->flush();
    
    $this->addFlash('success', 'Paiement vérifié et confirmé avec succès !');
    return $this->redirectToRoute('user_commande_show', ['id' => $commande->getId()]);
}
    #[Route('/paiement/cancel/{id}', name: 'app_paiement_cancel')]
    public function cancel(Commande $commande): Response
    {
        return $this->render('paiement/cancel.html.twig', [
            'commande' => $commande
        ]);
    }
    
   
}