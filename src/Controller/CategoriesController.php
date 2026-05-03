<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/categories')]
final class CategoriesController extends AbstractController
{
    #[Route('', name: 'categorie_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('Categorie/index.html.twig');
    }
}