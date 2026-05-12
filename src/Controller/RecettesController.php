<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Form\RecetteType;
use App\Repository\RecetteRepository;
use App\Repository\CategorieRecetteRepository;
use App\Service\RecetteAnalyser;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

final class RecettesController extends AbstractController
{
    public function __construct(private RecetteAnalyser $analyser) {}

   #[Route('/recettes', name: 'app_recettes')]
public function index(
    Request $request,
    RecetteRepository $repo,
    CategorieRecetteRepository $catRepo,
    PaginatorInterface $paginator,
RecetteAnalyser $analyser 
): Response {

    $titre = $request->query->get('titre');
    $catId = $request->query->get('categorie');
    $diff = $request->query->get('difficulte');

    $qb = $repo->createQueryBuilder('r');

    if ($titre) {
        $qb->andWhere('r.titre LIKE :titre')
           ->setParameter('titre', '%' . $titre . '%');
    }

    if ($catId) {
        $qb->andWhere('r.categorie = :catId')
           ->setParameter('catId', $catId);
    }

    if ($diff) {
        $qb->andWhere('r.difficulte = :diff')
           ->setParameter('diff', $diff);
    }

    if (!$request->query->has('sort')) {
        $qb->orderBy('r.dateCreation', 'DESC');
    }
 

    $pagination = $paginator->paginate(
        $qb, 
        $request->query->getInt('page', 1),
        9,
        [
        'wrap-queries' => true, 
        'distinct' => false    
    ]
    );

    return $this->render('recettes/index.html.twig', [
        'recettes' => $pagination,
        'categories' => $catRepo->findAll(),
        'total' => $analyser->getTotalRecettesPubliees(),
        'statsCat' => $analyser->getRecettesParCategorie(),
        'moyenne' => $analyser->getMoyenneIngredients(),
    ]);
}
    #[Route('/recettes/nouvelle', name: 'app_recettes_nouvelle')]
    public function nouvelle(Request $request, EntityManagerInterface $em): Response
    {
        $recette = new Recette();

        $recette->setAuteur($this->getUser());

        $form = $this->createForm(RecetteType::class, $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $recette->setDateCreation(new \DateTime());

            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Image upload failed');
                    return $this->redirectToRoute('app_recettes_nouvelle');
                }

                $recette->setImageName($newFilename);
            }

            $em->persist($recette);
            $em->flush();

            $this->addFlash('success', 'Recette ajoutée !');

            return $this->redirectToRoute('app_recettes');
        }

        return $this->render('recettes/nouvelle.html.twig', [
            'formulaire' => $form,
        ]);
    }

    #[Route('/recettes/{id}', name: 'app_recette_detail', methods: ['GET'])]
    public function details(Recette $recette): Response
    {
        return $this->render('recettes/detail.html.twig', [
            'recette' => $recette,
        ]);
    }

    #[Route('/recettes/{id}/modifier', name: 'app_recettes_modifier')]
    public function modifier(Recette $recette, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(RecetteType::class, $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Erreur upload');
                }

                $recette->setImageName($newFilename);
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

    #[Route('/recettes/{id}/supprimer', name: 'app_recettes_supprimer', methods: ['POST'])]
    public function supprimer(Recette $recette, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('supprimer_' . $recette->getId(), $request->request->get('_token'))) {
            $em->remove($recette);
            $em->flush();

            $this->addFlash('success', 'Recette supprimée.');
        }

        return $this->redirectToRoute('app_recettes');
    }

}