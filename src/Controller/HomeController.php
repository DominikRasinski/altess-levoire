<?php

namespace App\Controller;

use App\Entity\Naytiba;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    #[Route('/')]
    public function home(EntityManagerInterface $em): Response
    {

        $naytiba =  $em->createQuery('SELECT n FROM App\Entity\Naytiba n')->getResult();

        $selectedNaytiba = $naytiba[array_rand($naytiba)];

        return $this->render(
               'home.html.twig', [
                'selectedNaytiba' => $selectedNaytiba,
               ]
        );
    }
    #[Route('/v2')]
    public function homeV2(EntityManagerInterface $em): Response
    {
        $naytiba = $em->createQueryBuilder()
        ->select('s')
        ->from(Naytiba::class, 's')
        ->getQuery()
        ->getResult();

        $selectedNaytiba = $naytiba[array_rand($naytiba)];

        return $this->render(
               'home.html.twig', [
                'selectedNaytiba' => $selectedNaytiba,
               ]
        );
    }
}