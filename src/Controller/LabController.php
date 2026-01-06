<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\NaytibaLogger;

#[Route('/lab', name: 'lab')]
class LabController extends AbstractController 
{
    #[Route('')]
    public function labMain(): Response
    {
        return $this->render(
               'mainLab.html.twig', []
        );
    }

    #[Route('/first-level', name: 'first-level')]
    public function firstLevel(): Response
    {
        return $this->render(
               'firstLevelLab.html.twig', []
        );
    }

    #[Route('/observe/{slug}', name: 'observe')]
    public function observe(string $slug, NaytibaLogger $nLogger, Request $request): Response
    {

        $nLogger->logInfoAboutNaytiba($slug, $request);

        return $this->render(
            'observe.html.twig', ['naytiba_name' => $slug]
        );
    }
}