<?php

namespace App\Controller;
use App\Entity\CategorieRecette;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CategorieRecetteRepository ;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\CategorieType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormInterface;
final class CategorieRecettecontrollerController extends AbstractController
{
   /* #[Route('/categorie/recettecontroller', name: 'app_categorie_recettecontroller')]
    public function index(): Response
    {
        return $this->render('categorie_recettecontroller/index.html.twig', [
            'controller_name' => 'CategorieRecettecontrollerController',
        ]);
    }
        */
       #[Route('/categories', name: 'app_categories')]
    public function index(CategorieRecetteRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findAll();

        return $this->render('Categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }
     #[Route('//nouvelle', name: 'app_categorie_nouvelle')]
    public function nouvelle(Request $request, EntityManagerInterface $em): Response
    {
      
        $categorie = new CategorieRecette();

       $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($categorie);
            $em->flush();

            $this->addFlash('success', 'Catégorie "' . $categorie->getNom() . '" créée !');
            return $this->redirectToRoute('app_categories');
        }

        return $this->render('Categorie/nouvelle.html.twig', [
            'formulaire' => $form,
        ]);
    }
}
