<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivreType;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class LivreController extends AbstractController{
    #[Route('admin/livre/delete/{id}', name: 'app_livre_delete')]
    public function delete(EntityManagerInterface $em, Livre $livre): Response{
        
        if (!$livre){
            throw $this->createNotFoundException('Livre de l\'id  {$livre->getId()} non trouvé');
        }
        $em->remove($livre);
        $em->flush();
       dd($livre);
    }
    #[Route('admin/livres', name: 'app_livre_all')]

    public function all(LivreRepository $rep, PaginatorInterface $paginator, Request $request) : Response {
        $livres=$rep->findAll();
     //  dd($livres);
    $livres = $paginator->paginate($livres, $request->query->getInt('page', 1));
        
        return $this->render('livre/all.html.twig', ['livre'=>$livres]);
    }
    #[Route('admin/livre/show2', name: 'app_livre_show2')]

    public function show2(LivreRepository $rep) : Response {
        $livres=$rep->findOneBy(['titre'=>'titre 1'],['prix'=>'ASC']);
        dd($livres);
        return $this->render('livre/show.html.twig', ['livre'=>$livres]);
    }
    #[Route('admin/livre/show3', name: 'app_livre_show3')]

    public function show3(LivreRepository $rep) : Response {
        $livres=$rep->findBy(['titre'=>'titre 1']);
        dd($livres);
        return $this->render('livre/show.html.twig', ['livre'=>$livres]);
    }
    #[Route('admin/livre/show/{id}', name: 'app_livre_show')]
    public function show(Livre $livre) : Response{
        
        if (!$livre){
            throw $this->createNotFoundException('Livre de l\'id {$livre->getId()} non trouvé');
        }
       
        return $this->render('livre/show.html.twig', ['livre'=>$livre]);
    }
    #[Route('admin/livre', name: 'app_livre_create')]
    public function create(EntityManagerInterface $em): Response
    {
        $livre=new Livre();
        $livre->setTitre('titre 1');
        $livre->setSlug('titre-1');
        $livre->setImage('https://picsum.photos/200');
        $livre->setResume('resume 1');
        $livre->setEditeur('eyrollers'); 
        $livre->setIsbn('isbn 1');
        $livre->setDateEdition(new \DateTime('2021-01-01'));
        $livre->setPrix(10.5);  
        $em->persist($livre);
      
        $em->flush(); 
        dd($livre);
        return new Response('Livre créé');      


               
    }
    #[Route('admin/livre/edit/{id}', name: 'admin_livre_edit')]
    public function edit(EntityManagerInterface $em,Request $request,Livre $livre)
    {
        if(!$livre){
            throw $this->createNotFoundException('Livre de l\'id {$livre->getId()} non trouvé');
        }
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($livre);
            $em->flush();
            return $this->redirectToRoute('app_livre_all');
        }


        return $this->render('livre/edit.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
