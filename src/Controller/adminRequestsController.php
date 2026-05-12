<?php
namespace App\Controller;

use App\Repository\UserRepository;
use App\Service\MailerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


class adminRequestsController extends AbstractController
{
    
    #[Route('requests', name: 'admin_role_requests')]
    public function index(UserRepository $userRepository): Response
    {
         if  (!$this->isGranted('ROLE_ADMIN')) {
      
        return $this->redirectToRoute('app_accueil');
    }
        $users = $userRepository->findBy([
            'roleRequestStatus' => 'PENDING'
        ]);

        return $this->render('adminRequests/index.html.twig', [
            'users' => $users
        ]);
    }

    #[Route('/admin/role-requests/approve/{id}', name: 'admin_role_request_approve')]
    public function approve(
        int $id,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        MailerService $mailer  
    ): Response {
           if  (!$this->isGranted('ROLE_ADMIN')) {
        return $this->redirectToRoute('app_accueil');
    }
        $user = $userRepository->find($id);

        if (!$user || !$user->getRequestedRole()) {
            $this->addFlash('error', 'Invalid request.');
            return $this->redirectToRoute('admin_role_requests');
        }

        $requestedRole = $user->getRequestedRole();

     
       
     $user->setRoles([ $requestedRole]);
        $user->setRoleRequestStatus('APPROVED');
        $user->setRequestedRole(null);

        $entityManager->flush();

        $mailer->sendRoleApprovedEmail($user->getEmail(), $requestedRole);

        $this->addFlash('success', 'Role approved and email sent.');
        return $this->redirectToRoute('admin_role_requests');
    }

    #[Route('/admin/role-requests/reject/{id}', name: 'admin_role_request_reject')]
    public function reject(
        int $id,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        MailerService $mailer  
    ): Response {
           if  (!$this->isGranted('ROLE_ADMIN')) {
        return $this->redirectToRoute('app_accueil');
    }
        $user = $userRepository->find($id);

        if (!$user) {
            $this->addFlash('error', 'User not found.');
            return $this->redirectToRoute('admin_role_requests');
        }

        $user->setRoleRequestStatus('REJECTED');
  
        $user->setRequestedRole(null);
          
        $entityManager->flush();

        $mailer->sendRoleRejectedEmail($user->getEmail());

        $this->addFlash('warning', 'Role request rejected and email sent.');
        return $this->redirectToRoute('admin_role_requests');
    }
}