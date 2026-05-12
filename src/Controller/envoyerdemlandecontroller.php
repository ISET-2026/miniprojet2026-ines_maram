<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\EnvoyerdemandeFormType; 
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class envoyerdemlandecontroller extends AbstractController
{
    #[Route('/envoyerdemande', name: 'app_envoyer')]
    #[IsGranted('ROLE_USER')] 
    public function envoyer(Request $request, EntityManagerInterface $em): Response
    {
        if  ($this->isGranted('ROLE_ADMIN')) {
        return $this->redirectToRoute('app_accueil');
    }
       // /** @var User $user */
        $user = $this->getUser();

        $form = $this->createForm(EnvoyerdemandeFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $requestedRole = $form->get('requestedRole')->getData();

            if (!empty($requestedRole)) {
                $user->setRequestedRole($requestedRole);
                $user->setRoleRequestStatus('PENDING'); 
                
                $em->persist($user); 
                $em->flush();
                
                $this->addFlash('success', 'Votre demande a été envoyée à l\'administrateur.');
                return $this->redirectToRoute('app_accueil'); 
            }
        }

        return $this->render('envoyer_demande/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}