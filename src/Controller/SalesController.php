<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Commande;
use App\Entity\CommandeLivre;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class SalesController extends AbstractController
{
   
#[Route('/api/sales', name: 'api_sales')]
public function salesData(EntityManagerInterface $em): JsonResponse
{
   $mostSoldBooks = $em->getRepository(CommandeLivre::class)->createQueryBuilder('cl')
    ->select('l.id, l.titre, l.editeur, SUM(cl.quantite) as total_vendu')
    ->join('cl.livre', 'l') 
    ->groupBy('l.id')
    ->orderBy('total_vendu', 'DESC')
    ->setMaxResults(1)
    ->getQuery()
    ->getResult();

    $loyalCustomers = $em->getRepository(USer::class)->createQueryBuilder('cl')
        ->select('cl.id, cl.nom, cl.email, COUNT(co.id) as commande_count')
        ->join('cl.commandes', 'co')
        ->groupBy('cl.id')
        ->having('commande_count >= 3')
        ->orderBy('commande_count', 'DESC')
        ->getQuery()
        ->getResult();

   
        
    $ordersByPeriod = $em->getRepository(Commande::class)->createQueryBuilder('co')
        ->select(
            "SUBSTRING(co.date_commande, 1, 7) as period",
            'COUNT(co.id) as commande_count'
        )
        ->groupBy('period')
        ->orderBy('period', 'ASC')
        ->getQuery()
        ->getResult();

    return $this->json([
        'most_sold_books' => $mostSoldBooks,
        'loyal_customers' => $loyalCustomers,
        'orders_by_period' => $ordersByPeriod,
    ]);
}
    #[Route('/dashboard', name: 'sales_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('sales/index.html.twig');
    }
}
