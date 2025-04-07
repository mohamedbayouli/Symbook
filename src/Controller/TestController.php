<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TestController extends AbstractController{
    #[Route('/test/{age}', name: 'app_test')]
    public function test($age): Response
    {
        return $this->render('test/test.html.twig', ['age' => $age]);
    }
}
