<?php
namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/favoris')]
final class FavorisController extends AbstractController
{
    #[Route('', name: 'favoris_index', methods: ['GET'])]
    public function index(Request $request, RecetteRepository $repo): Response
    {
        $session = $request->getSession();
        $ids = $session->get('favorites', []);
        $recettes = empty($ids) ? [] : $repo->findBy(['id' => $ids]);

        return $this->render('Favoris/index.html.twig', [
            'recettes' => $recettes
        ]);
    }

    #[Route('/ajouter/{id}', name: 'favoris_add')]
    public function addFavorite(int $id, Request $request): Response
    {
        $session = $request->getSession();
        $favorites = $session->get('favorites', []);

        if (!in_array($id, $favorites)) {
            $favorites[] = $id;
        }

        $session->set('favorites', $favorites);

        // ✅ Stay on recipes page
        return $this->redirectToRoute('app_recettes');
    }

    #[Route('/supprimer/{id}', name: 'favoris_remove')]
    public function removeFavorite(int $id, Request $request): Response
    {
        $session = $request->getSession();
        $favorites = $session->get('favorites', []);
        $favorites = array_values(array_filter($favorites, fn($f) => $f != $id));
        $session->set('favorites', $favorites);

        // ✅ Redirect back to referer (works from both recipes page and favorites page)
        $referer = $request->headers->get('referer');
        return $referer
            ? $this->redirect($referer)
            : $this->redirectToRoute('app_recettes');
    }
}
