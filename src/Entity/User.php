<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'Email already used')]

class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $pseudo = null;


    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'auteur', targetEntity: Recette::class)]
    private Collection $recettes;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $requestedRole = null;

    public function __construct()
    {
        $this->recettes = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    
    public function getPrenom(): ?string { return $this->pseudo; }
    public function setPrenom(string $pseudo): static { $this->pseudo = $pseudo; return $this; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): static { $this->email = $email; return $this; }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getRecettes(): Collection
    {
        return $this->recettes;
    }
    public function getpseudo(): string
    {
        return $this->pseudo;
    }
    public function setpseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;
        return $this;
    }
    public function getRequestedRole(): ?string
{
    return $this->requestedRole;
}

public function setRequestedRole(?string $requestedRole): self
{
    $this->requestedRole = $requestedRole;
    return $this;
}

    

}