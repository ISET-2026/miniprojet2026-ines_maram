<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/favoris')]
final class FavorisController extends AbstractController
{
    #[Route('', name: 'favoris_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('favoris/index.html.twig');
    }
}