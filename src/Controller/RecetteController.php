<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_CUISINIER')]
#[Route('/recettes')]
final class RecetteController extends AbstractController
{
    #[Route('', name: 'recette_index')]
    public function index(): Response
    {
        return $this->render('Recette/index.html.twig');
    }
}