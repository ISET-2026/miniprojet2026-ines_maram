<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\RecetteType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
final class RecettesController extends AbstractController
{
   #[Route('/recettes', name: 'app_recettes')]
   public function index(RecetteRepository $recR): Response
    {
        $recettes = $recR->findAll();
        return $this->render('recettes/index.html.twig', [
            'recettes'=>$recettes ,
        ]);
    }
    #[Route('/recettes/{id}', name: 'app_recette_detail', methods: ['GET'])]
public function details(Recette $recette): Response
{
   
    return $this->render('recettes/detail.html.twig', [
        'recette' => $recette,
    ]);
}
   #[Route('/recettes/nouvelle', name: 'app_recettes_nouvelle')]
       public function nouvelle(Request $request, EntityManagerInterface $em): Response
    {
      
        $recettes = new Recette();

       $form = $this->createForm(RecetteType::class, $recettes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $em->getRepository(User::class)->find(1);
            $recettes->setAuteur($user);
            $em->persist($recettes);
            $em->flush();

            $this->addFlash('success', 'Catégorie "' . $recettes->getTitre() .'" créée !');
           return $this->redirectToRoute('app_recettes');
        }

        return $this->render('recettes/nouvelle.html.twig', [
            'formulaire' => $form,
        ]);
    }
      #[Route('/recettes/{id}/modifier', name: 'app_recettes_modifier', requirements: ['id' => '\d+'])]
    public function modifier(Recette $recette, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(RecetteType::class, $recette);
        $form->handleRequest($request);
        /*if ($recette->getAuteur() !== $this->getUser() /*&& !$this->isGranted('ROLE_ADMIN')) {
        throw $this->createAccessDeniedException('Vous n\'êtes pas l\'auteur de cet recette !');
    }*/
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'recette modifié avec succès !');
           return $this->redirectToRoute('app_recettes');
        }

        return $this->render('recettes/modifier.html.twig', [
            'formulaire' => $form,
            'recettes' => $recette ,
        ]);
    }

  #[Route('/recettes/{id}/supprimer', name: 'app_recettes_supprimer', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function supprimer(Recette $recette, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('supprimer_' . $recette->getId(), $request->request->get('_token'))) {
            $em->remove($recette);
            $em->flush();

            $this->addFlash('success', 'recette supprimé avec succès.');
        } else {
            $this->addFlash('danger', 'Token CSRF invalide. Suppression annulée.');
        }

        return $this->redirectToRoute('app_recettes');
    }
}
