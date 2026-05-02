<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TagRecettecontrollerController extends AbstractController
{
    #[Route('/tag/recettecontroller', name: 'app_tag_recettecontroller')]
    public function index(): Response
    {
        return $this->render('tag_recettecontroller/index.html.twig', [
            'controller_name' => 'TagRecettecontrollerController',
        ]);
    }
}
