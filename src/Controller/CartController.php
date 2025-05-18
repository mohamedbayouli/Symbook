<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Repository\LivreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commande;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\CommandeLivre;

use function Symfony\Component\Clock\now;

class CartController extends AbstractController
{
    #[Route('/user/cart', name: 'cart_index')]
    public function index(SessionInterface $session, LivreRepository $livresRepository)
    {
        $panier = $session->get('panier', []);

        //dd('Current cart contents:', $panier);
        
        $data=[];

        foreach ($panier as $id => $quantity) {
            $livre = $livresRepository->find($id);

            $data[] = [
                'livre' => $livre,
                'quantity' => $quantity,
                'current_date' => (new \DateTime())->format('Y-m-d H:i:s'),
            ];
        }
        return $this->render('cart/index.html.twig', [
            'data' => $data,
            'panier' => $panier
        ]);
    }

    #[Route('/user/cart/add/{id}', name: 'cart_add')]
    public function add(Livre $livre, SessionInterface $session): Response
    {
        $id = $livre->getId();

        $panier = $session->get('panier', []);

        if (empty($panier[$id])) {
            $panier[$id] = 1;
        }
        else {
            $panier[$id]++;
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('cart_index');
    }
    
    #[Route('/user/cart/commander', name: 'cart_commander')]
    public function commander(SessionInterface $session, LivreRepository $livresRepository, EntityManagerInterface $em): Response
    {
        $panier = $session->get('panier', []);

        //dd($panier);
        
        if (empty($panier)) {
            $this->addFlash('error', 'Votre panier est vide');
            return $this->redirectToRoute('cart_index');
        }

        $commande = new Commande();
        $commande->setDateCommande(new \DateTime());
        $commande->setStatus('en attente');
        $commande->setUser($this->getUser());
        
        $total = 0;
        
        foreach ($panier as $id => $quantity) {
            $livre = $livresRepository->find($id);
            
            if ($livre) {
                $commandeLivre = new CommandeLivre();
                $commandeLivre->setLivre($livre);
                $commandeLivre->setQuantite($quantity);
                $commandeLivre->setCommande($commande);
                
                $em->persist($commandeLivre);
                
                $total += $livre->getPrix() * $quantity;
            }
        }
        
        $commande->setTotal($total);
        $em->persist($commande);
        $em->flush();
        
        /*$session->set('panier', []);
        $this->addFlash('success', 'Votre commande a été passée avec succès');
        return $this->redirectToRoute('user_livre_all');*/
        
        return $this->redirectToRoute('app_paiement', ['id' => $commande->getId()]);
    }

    #[Route('/user/cart/update/{id}', name: 'cart_update', methods: ['POST'])]
    public function update(Request $request, Livre $livre, SessionInterface $session): Response
    {
        $quantity = $request->request->get('quantity');
        $id = $livre->getId();
        $panier = $session->get('panier', []);

        if ($quantity > 0) {
            $panier[$id] = (int)$quantity;

        } else {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        dump($session->get('panier'));

        if ($request->isXmlHttpRequest()) {
            return $this->json([
                'success' => true,
                'newQuantity' => $quantity,
                'total' => $livre->getPrix() * $quantity
            ]);
        }

        return $this->redirectToRoute('cart_index');
    }

    #[Route('/user/cart/remove/{id}', name: 'cart_remove')]
    public function remove(Livre $livre, SessionInterface $session): Response
    {
        $id = $livre->getId();
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('cart_index');
    }
}