<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController{
    #[Route('/article/{nom}', name: 'app_article')]
    public function lister($nom): Response{
        $articles=
        [
           
                ['titre' => 'Le premier article', 'resume' => 'Résumé du premier article', 'date_publication' => '2024-01-01', 'auteur' => 'Meriam'],
                ['titre' => 'Le deuxième article ', 'resume' => 'Résumé du deuxième article', 'date_publication' => '2022-05-15', 'auteur' => 'ahmed'],
                ['titre' => 'Le troisième article ', 'resume' => 'Résumé du troisième resume','date_publication' => '2020-03-10', 'auteur' => 'Nidhal'],
                
        ];
        return $this->render('article/lister.html.twig', [
        'articles' =>$articles,'nom' => $nom
        ]);
        }
}
