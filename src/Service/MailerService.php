<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerService
{
    public function __construct(private MailerInterface $mailer)
    {
    }

    public function sendWelcomeEmail(string $toEmail): void
    {
        $email = (new Email())
            ->from('no-reply@recettes.com')
            ->to($toEmail)
            ->subject('Bienvenue sur notre plateforme')
            ->html('<h1>Bienvenue 👨‍🍳</h1><p>Votre compte est créé avec succès.</p>');

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


}