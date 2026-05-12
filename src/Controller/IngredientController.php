<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Ingredient;
use App\Entity\Recette;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\RecetteRepository;
use App\Form\IngredientType;

final class IngredientController extends AbstractController
{
    #[Route('/ingredient', name: 'app_ingredient')]
    public function index(): Response
    {
        return $this->render('ingredient/index.html.twig', [
            'controller_name' => 'IngredientController',
        ]);
    }

    #[Route('/recettes/{recette_id}/ingredients/nouveau', name: 'app_ingredient_nouveau')]
    public function nouveau(int $recette_id, Request $request, EntityManagerInterface $em, RecetteRepository $recR): Response
    {
        $recette = $recR->find($recette_id);
        if (!$recette) {
            throw $this->createNotFoundException('Recette non trouvée');
        }

        $ingredient = new Ingredient();
        $ingredient->setRecette($recette);

        $form = $this->createForm(IngredientType::class, $ingredient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($ingredient);
            $em->flush();

            $this->addFlash('success', 'Ingrédient ajouté ! Ajoutez-en un autre ou terminez.');

            return $this->redirectToRoute('app_ingredient_nouveau', [
                'recette_id' => $recette->getId()
            ]);
        }

        return $this->render('ingredient/nouveau.html.twig', [
            'form' => $form->createView(),
            'recette' => $recette,
        ]);
    }
    #[Route('/recettes/{id}/supprimer', name: 'app_ingredient_supprimer', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function supprimer(Recette $recette, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $recette->getId(), $request->request->get('_token'))) {
            $em->remove($recette);
            $em->flush();
            $this->addFlash('success', 'La recette a été supprimée avec succès !');
        } else {
            $this->addFlash('danger', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_recettes');
    }
} 