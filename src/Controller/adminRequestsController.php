<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
class adminRequestsController extends AbstractController
{
    #[Route('requests', name: 'admin_role_requests')]
    public function index(UserRepository $userRepository): Response
    {
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
        EntityManagerInterface $entityManager
    ): Response {

        $user = $userRepository->find($id);

        if (!$user || !$user->getRequestedRole()) {
            $this->addFlash('error', 'Invalid request.');
            return $this->redirectToRoute('admin_role_requests');
        }

        // Add role safely
        $roles = $user->getRoles();
        $roles[] = $user->getRequestedRole();

        $user->setRoles(array_unique($roles));

        // Update status
        $user->setRoleRequestStatus('APPROVED');
        $user->setRequestedRole(null);

        $entityManager->flush();

        $this->addFlash('success', 'Role approved successfully.');

        return $this->redirectToRoute('admin_role_requests');
    }

    #[Route('/admin/role-requests/reject/{id}', name: 'admin_role_request_reject')]
    public function reject(
        int $id,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response {

        $user = $userRepository->find($id);

        if (!$user) {
            $this->addFlash('error', 'User not found.');
            return $this->redirectToRoute('admin_role_requests');
        }

        // Reject request
        $user->setRoleRequestStatus('REJECTED');
        $user->setRequestedRole(null);

        $entityManager->flush();

        $this->addFlash('warning', 'Role request rejected.');

        return $this->redirectToRoute('admin_role_requests');
    }
}