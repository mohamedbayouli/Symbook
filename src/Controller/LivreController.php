<?php

namespace App\Controller;

use App\Repository\LivreRepository;
use App\Entity\Livre;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LivreController extends AbstractController{
    #[Route('admin/livre/delete/{id}', name: 'app_livre_delete')]
    public function delete(EntityManagerInterface $em, Livre $livre): Response{
        
        if (!$livre){
            throw $this->createNotFoundException('Livre de l\'id  {$livre->getId()} non trouvé');
        }
        $em->remove($livre);
        $em->flush();
       return $this->redirectToRoute('app_livre_all');
    }

    #[Route('admin/livres', name: 'app_livre_all')]
    public function all(LivreRepository $rep, PaginatorInterface $paginator, Request $request) : Response {
        $livres=$rep->findAll();
       
        $livres = $paginator->paginate($livres, $request->query->getInt('page', 1));
        
        return $this->render('livre/all.html.twig', ['livre'=>$livres]);
    }

    #[Route('/livres', name: 'user_livre_all')]
    public function userall(LivreRepository $rep, PaginatorInterface $paginator, Request $request) : Response {
        //$livres=$rep->findAll();
        $query = $request->query->get('q');
        
        if ($query) {
        $queryBuilder = $rep->createQueryBuilder('l')
            ->leftJoin('l.cat', 'c')
            ->where('l.titre LIKE :query or l.editeur like :query or c.libelle like :query')
            ->setParameter('query', '%'.$query.'%')
            ->getQuery();
        } 
        else {
        $queryBuilder = $rep->createQueryBuilder('l')
            ->getQuery();
        }
       
        $livres = $paginator->paginate($queryBuilder, $request->query->getInt('page', 1),12);
        
        return $this->render('livre/userall.html.twig', ['livre'=>$livres]);
    }

    #[Route('admin/livre/show/{id}', name: 'app_livre_show')]
    public function show(Livre $livre) : Response{
        
        if (!$livre){
            throw $this->createNotFoundException('Livre de l\'id {$livre->getId()} non trouvé');
        }
       
        return $this->render('livre/show.html.twig', ['livre'=>$livre]);
    }

    #[Route('user/livre/show/{id}', name: 'user_livre_show')]
    public function usershow(Livre $livre) : Response{
        
        if (!$livre){
            throw $this->createNotFoundException('Livre de l\'id {$livre->getId()} non trouvé');
        }
       
        return $this->render('livre/usershow.html.twig', ['livre'=>$livre]);
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
}
