<?php

namespace App\Controller;

use App\Repository\PartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PartController extends AbstractController
{
    #[Route('/parts/{id<\d+>}', name: 'app_part_show')]
    public function show(PartRepository $repository, int $id): Response
    {
        $part = $repository->findOne($id);

        if (!$part) {
            throw $this->createNotFoundException('Part not found.');
        }

        return $this->render('part/show.html.twig',[
            'part' => $part,
        ]);
    }
}