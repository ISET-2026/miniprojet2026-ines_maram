<?php

namespace App\Controller;

use App\Entity\TagRecette;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\TagrecetteType;
use App\Repository\TagRecetteRepository;
use Symfony\Component\HttpFoundation\Request;

final class TagRecettecontrollerController extends AbstractController
{
    #[Route('tagrecette', name: 'app_tag_recette')]
    public function index(TagRecetteRepository $trecR): Response
    {
        $tagrecettes = $trecR->findAll();
    
        return $this->render('tag_recette/index.html.twig', [
            'tagrecettes'=>$tagrecettes ,
        ]);
    }
    #[Route('/tagrecette/nouvelle', name: 'app_tagrecettes_nouvelle')]
       public function nouvelle(Request $request, EntityManagerInterface $em): Response
    {
      
        $tagrecettes = new TagRecette();

       $form = $this->createForm(TagRecetteType::class, $tagrecettes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tagrecettes);
            $em->flush();

            $this->addFlash('success', 'tagrecette "' . $tagrecettes->getNom() .'" créée !');
           return $this->redirectToRoute('app_tag_recette');
        }

        return $this->render('tag_recette/nouvelle.html.twig', [
            'formulaire' => $form,
        ]);
    }
     #[Route('/recettes/{id}/supprimer', name: 'app_tagrecettes_supprimer', requirements: ['id' => '\d+'],methods: ['GET'])]
    public function supprimer(tagRecette $tagrecette, Request $request, EntityManagerInterface $em): Response
    {
   
            $em->remove($tagrecette);
            $em->flush();

            $this->addFlash('success', 'recette supprimé avec succès.');
        

        return $this->redirectToRoute('app_tag_recette');
    }
    
}
