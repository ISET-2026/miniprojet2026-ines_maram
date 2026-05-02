<?php

namespace App\Entity;

use App\Repository\TagRecetteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TagRecetteRepository::class)]
class TagRecette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    #[Assert\NotBlank]
    private ?string $nom = null;

    #[ORM\Column(length: 7)]
    #[Assert\Regex('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/')]
    private ?string $couleur = null;

    #[ORM\ManyToMany(targetEntity: Recette::class, mappedBy: 'tags')]
    private Collection $recettes;

    public function __construct() { 
        $this->recettes = new ArrayCollection(); 
        }

    public function getId(): ?int {
         return $this->id; 
         }
    public function getNom(): ?string { 
        return $this->nom; }
    public function setNom(string $nom): static { $this->nom = $nom; return $this; }
    public function getCouleur(): ?string { return $this->couleur; }
    public function setCouleur(string $couleur): static { $this->couleur = $couleur; return $this; }
    public function getRecettes(): Collection { return $this->recettes; }
}