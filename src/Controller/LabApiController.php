<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\FirstLevelRepo;

#[Route('/api/lab-first-level')]
class LabApiController extends AbstractController
{
    #[Route('', methods: ['GET'])]
    public function getCollection(FirstLevelRepo $firstLevelRepo): Response
    {
        $data = $firstLevelRepo->findAll();
        return $this->json($data);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, FirstLevelRepo $firstLevelRepo): Response
    {
        $data = $firstLevelRepo->find($id);

        if (!$data) {
            $this->createNotFoundException("Naytiba not found");
        }

        return $this->json($data);
    }

}