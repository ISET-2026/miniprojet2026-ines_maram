<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerService
{
    public function __construct(private MailerInterface $mailer) {}

    public function sendWelcomeEmail(string $toEmail): void
    {
        $email = (new Email())
            ->from('no-reply@recettes.com')
            ->to($toEmail)
            ->subject('Bienvenue sur notre plateforme 👨‍🍳')
            ->html('
                <h1>Bienvenue 👨‍🍳</h1>
                <p>Votre compte a été créé avec succès.</p>
                <p>Vous pouvez maintenant vous connecter et explorer nos recettes.</p>
            ');

        $this->mailer->send($email);
    }

    public function sendRecipePublished(string $emailUser, string $titreRecette): void
    {
        $email = (new Email())
            ->from('no-reply@recipehub.com')
            ->to($emailUser)
            ->subject('Nouvelle recette publiée 🍳')
            ->html("
                <h1>Nouvelle recette !</h1>
                <p>La recette <b>$titreRecette</b> est maintenant disponible.</p>
            ");

        $this->mailer->send($email);
    }

    // ✅ New — sent when admin approves a role request
    public function sendRoleApprovedEmail(string $toEmail, string $roleName): void
    {
        $roleLabel = match($roleName) {
            'ROLE_CUISINIER' => 'Cuisinier',
            'ROLE_ADMIN'     => 'Administrateur',
            default          => $roleName,
        };

        $email = (new Email())
            ->from('no-reply@recettes.com')
            ->to($toEmail)
            ->subject('Votre demande de rôle a été acceptée ✅')
            ->html("
                <h1>Félicitations ! 🎉</h1>
                <p>Votre demande pour le rôle <b>$roleLabel</b> a été acceptée par un administrateur.</p>
                <p>Vous pouvez maintenant vous connecter et profiter de vos nouveaux privilèges.</p>
                <br>
                <p>— L'équipe RecipeHub</p>
            ");

        $this->mailer->send($email);
    }

    public function sendRoleRejectedEmail(string $toEmail): void
{
    $email = (new Email())
        ->from('no-reply@recettes.com')
        ->to($toEmail)
        ->subject('Votre demande de rôle a été refusée ❌')
        ->html("
            <h1>Demande refusée</h1>
            <p>Votre demande de rôle a été examinée et refusée par un administrateur.</p>
            <p>Si vous pensez que c'est une erreur, contactez-nous.</p>
            <br>
            <p>— L'équipe RecipeHub</p>
        ");

    $this->mailer->send($email);
}
}