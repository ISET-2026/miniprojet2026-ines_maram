<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\AppAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\MailerService;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        Security $security,
        EntityManagerInterface $entityManager,
        MailerService $mailer
    ): Response {

        $user = new User();

        // DEFAULT SAFE ROLE
        $user->setRoles(['ROLE_USER']);
        $user->setRoleRequestStatus('NONE');

        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // PSEUDO
            $user->setPseudo($form->get('pseudo')->getData());

            // PASSWORD HASHING
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword(
                $userPasswordHasher->hashPassword($user, $plainPassword)
            );

            // ROLE REQUEST
            $requestedRole = $form->get('requestedRole')->getData();

            if (!empty($requestedRole)) {
                $user->setRequestedRole($requestedRole);
                $user->setRoleRequestStatus('PENDING');
            } else {
                $user->setRequestedRole(null);
                $user->setRoleRequestStatus('NONE');
            }

            // SAVE USER
            $entityManager->persist($user);
            $entityManager->flush();

            // SEND EMAIL
            $mailer->sendWelcomeEmail($user->getEmail());

            // AUTO LOGIN
            return $security->login($user, AppAuthenticator::class, 'main');
        }

        return $this->render('registration/index.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}