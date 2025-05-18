<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\Commande;
use App\Repository\UserRepository;
use App\Entity\ResetPasswordRequest;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommandeLivreRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ResetPasswordRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/user')]
final class UserController extends AbstractController{
    #[Route(name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user,CommandeRepository $comrep): Response
    {

        $commande=$comrep->findBy(['user'=>$user]);
        return $this->render('user/show.html.twig', [
            'commande' => $commande,
        ]);
    }
#[Route('/commande/{id}', name: 'app_dommande_detail', methods: ['GET'])]
    public function show2(Commande $commande,CommandeLivreRepository $comrep): Response
    {
       $livre=$comrep->findBy(['commande'=>$commande]);
        return $this->render('user/show2.html.twig', [
            'commande' => $livre,
        ]);
    }
    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager,ResetPasswordRequestRepository $rep): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $commande=$user->getCommandes();
            foreach ($commande as $com){
                $entityManager->remove($com);
            }
          

    
    $resetPassword = $rep->findOneBy(['user' => $user]);

if ($resetPassword !== null) {
    $entityManager->remove($resetPassword);
}
            
            $entityManager->remove($user);

            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}