<?php

namespace App\Controller;

use App\Entity\Categories;
use Doctrine\ORM\EntityManager;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CategorieType;
use Symfony\Component\HttpFoundation\Request;

final class CategoriesController extends AbstractController{
    #[Route('user/categories', name: 'user_categories')]
    public function userindex(CategoriesRepository $rep): Response
    {
        $categories = $rep->findAll();
        return $this->render('categories/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    
    #[Route('admin/categories', name: 'admin_categories')]
    public function index(CategoriesRepository $rep): Response
    {
        $categories = $rep->findAll();
        return $this->render('categories/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    #[Route('admin/categories/create', name: 'admin_categories_create')]
    public function create(EntityManagerInterface $em,Request $request)
    {

        $categories = new Categories();
        $form = $this->createForm(categorieType::class, $categories);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($categories);
            $em->flush(); 
            $this->addFlash('success', 'La catégorie'.$categories->getLibelle().'a été ajoutée avec succès');
            $this->addFlash('success', 'un email a été envoyé à l\'administrateur');

            return $this->redirectToRoute('admin_categories');
        }


        return $this->render('categories/create.html.twig', [
            'f' => $form->createView(),
        ]);

    }
    #[Route('admin/categories/edit/{id}', name: 'admin_categories_edit')]
    public function edit(EntityManagerInterface $em,Request $request,Categories $categories)
    {
        if(!$categories){
            throw $this->createNotFoundException('Categorie de l\'id {$categories->getId()} non trouvé');
        }
        $form = $this->createForm(categorieType::class, $categories);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($categories);
            $em->flush();
            return $this->redirectToRoute('admin_categories');
        }


        return $this->render('categories/edit.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
