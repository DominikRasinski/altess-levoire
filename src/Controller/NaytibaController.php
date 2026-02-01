<?php

namespace App\Controller;

use App\Entity\Naytiba;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NaytibaController extends AbstractController
{
    #[Route('/naytiba/{id<\d+>}', name: 'naytiba_show')]
    public function show(int $id, EntityManagerInterface $em): Response
    {
        $naytiba = $em->find(Naytiba::class, $id);

        return $this->render (
            'naytiba.html.twig', ['findNaytiba' => $naytiba]
        );
    }
}