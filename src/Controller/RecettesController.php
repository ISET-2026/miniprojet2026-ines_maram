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
use App\Repository\CategorieRecetteRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Service\RecetteAnalyser;


final class RecettesController extends AbstractController
{
    public function __construct(private RecetteAnalyser $analyser) {}
   #[Route('/recettes', name: 'app_recettes')]
   public function index(RecetteRepository $recR,CategorieRecetteRepository $catR): Response
    {
        $recettes = $recR->findAll();
        $categories = $catR->findAll();
        return $this->render('recettes/index.html.twig', [
            'recettes' => $recettes,
            'categories' => $categories,
            'total' => $this->analyser->getTotalRecettesPubliees(),
            'statsCat' => $this->analyser->getRecettesParCategorie(),
            'moyenne' => $this->analyser->getMoyenneIngredients(),
        ]);
        
    }
 
   #[Route('/recettes/nouvelle', name: 'app_recettes_nouvelle')]// src/Controller/RecettesController.php

public function nouvelle(Request $request, EntityManagerInterface $em): Response
{
    $recette = new Recette();
    $form = $this->createForm(RecetteType::class, $recette);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        
        // 1. Traitement mta3 l'image
        $imageFile = $form->get('imageName')->getData(); // Nekhdou el fichier mel form

        if ($imageFile) {
            // Nasn3ou esm jdid unique l-el image
            $newFilename = uniqid().'.'.$imageFile->guessExtension();

            // Nhallou el fichier fi dossier public/uploads/images
            try {
                $imageFile->move(
                    $this->getParameter('images_directory'), // Lezem t-configurih fi services.yaml
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // Nsauviw el esm el jdid fil property imageName mta3 el Entity
            $recette->setImageName($newFilename);
        }

        // 2. Bekiat el logic mte3ek
        $user = $em->getRepository(User::class)->find(1);
        $recette->setAuteur($user);
        
        $em->persist($recette);
        $em->flush();

        $this->addFlash('success', 'Recette créée !');
        return $this->redirectToRoute('app_recettes');
    }

    return $this->render('recettes/nouvelle.html.twig', [
        'formulaire' => $form,
    ]);
}
       #[Route('/recettes/{id}', name: 'app_recette_detail',requirements: ['id' => '\d+'], methods: ['GET'])]
public function details(Recette $recette): Response
{
   
    return $this->render('recettes/detail.html.twig', [
        'recette' => $recette,
    ]);
}
   #[Route('/recettes/{id}/modifier', name: 'app_recettes_modifier', requirements: ['id' => '\d+'])]
public function modifier(Recette $recette, Request $request, EntityManagerInterface $em): Response
{
    $form = $this->createForm(RecetteType::class, $recette);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        
        $imageFile = $form->get('imageName')->getData();
        if ($imageFile) {
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            try {
                $imageFile->move($this->getParameter('images_directory'), $newFilename);
                $recette->setImageName($newFilename); 
            } catch (FileException $e) {
                $this->addFlash('danger', "Erreur upload");
            }
        }

        $em->flush();
        $this->addFlash('success', 'Recette modifiée !');
        return $this->redirectToRoute('app_recettes');
    }

    return $this->render('recettes/modifier.html.twig', [
        'formulaire' => $form,
        'recette' => $recette, 
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
