<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/addRecette')]
final class newRecetteController extends AbstractController
{
    #[Route('/', name: 'addRecette')]
    public function index(): Response
    {
        return $this->render('Recette/new.html.twig');
    }
}