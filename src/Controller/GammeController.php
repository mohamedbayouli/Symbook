<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GammeController extends AbstractController{
    #[Route('/gamme', name: 'app_gamme')]
    public function index(): Response
    {
        $gamme=["ordianteur","videoprojecteur","imprimante","accessoire"];
        return $this->render('gamme/index.html.twig', [
            'gamme' => $gamme,  
        ]);
    }
}
