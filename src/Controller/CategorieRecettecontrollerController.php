<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategorieRecettecontrollerController extends AbstractController
{
    #[Route('/categorie/recettecontroller', name: 'app_categorie_recettecontroller')]
    public function index(): Response
    {
        return $this->render('categorie_recettecontroller/index.html.twig', [
            'controller_name' => 'CategorieRecettecontrollerController',
        ]);
    }
}
