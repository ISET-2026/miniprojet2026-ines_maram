<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/')]
final class TagController extends AbstractController
{
    #[Route('', name: 'tag_index')]
    public function index(): Response
    {
        return $this->render('tag/index.html.twig');
    }
}