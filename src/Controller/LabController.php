<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LabController extends AbstractController 
{
    #[Route('/first-level', name: 'first-level')]
    public function firstLevel(): Response
    {
        return $this->render(
               'firstLevelLab.html.twig', []
        );
    }
}