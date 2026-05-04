<?php

namespace App\Entity;

use App\Controller\CategoriesController;
use App\Controller\TagController;
use App\Repository\RecetteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 5)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 30)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private ?string $instructions = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Range(min: 1)]
    private ?int $tempsPreparation = null;

    #[ORM\Column(nullable: true)]
    private ?int $tempsCuisson = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: ['facile', 'moyen', 'difficile'])]
    private ?string $difficulte = null;

    #[ORM\Column]
    #[Assert\Range(min: 1, max: 50)]
    private ?int $nbPersonnes = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column]
    private ?bool $publiee = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;



    #[ORM\ManyToOne(inversedBy: 'recettes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CategoriesController $categorie = null;

    #[ORM\OneToMany(mappedBy: 'recette', targetEntity: Ingredient::class, orphanRemoval: true)]
    private Collection $ingredients;

    #[ORM\ManyToOne(inversedBy: 'recettes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $auteur = null;

    #[ORM\ManyToMany(targetEntity: TagController::class, inversedBy: 'recettes')]
    private Collection $tags;

    public function __construct()
    {
        $this->dateCreation = new \DateTime();
        $this->ingredients = new ArrayCollection();
        $this->tags = new ArrayCollection();
    }


    public function getId(): ?int { return $this->id; }

    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(string $titre): static { $this->titre = $titre; return $this; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(string $description): static { $this->description = $description; return $this; }

    public function getInstructions(): ?string { return $this->instructions; }
    public function setInstructions(string $instructions): static { $this->instructions = $instructions; return $this; }

    public function getTempsPreparation(): ?int { return $this->tempsPreparation; }
    public function setTempsPreparation(int $tempsPreparation): static { $this->tempsPreparation = $tempsPreparation; return $this; }

    public function getTempsCuisson(): ?int { return $this->tempsCuisson; }
    public function setTempsCuisson(?int $tempsCuisson): static { $this->tempsCuisson = $tempsCuisson; return $this; }

    public function getDifficulte(): ?string { return $this->difficulte; }
    public function setDifficulte(string $difficulte): static { $this->difficulte = $difficulte; return $this; }

    public function getNbPersonnes(): ?int { return $this->nbPersonnes; }
    public function setNbPersonnes(int $nbPersonnes): static { $this->nbPersonnes = $nbPersonnes; return $this; }

    public function getDateCreation(): ?\DateTimeInterface { return $this->dateCreation; }
    public function setDateCreation(\DateTimeInterface $dateCreation): static { $this->dateCreation = $dateCreation; return $this; }

    public function isPubliee(): ?bool { return $this->publiee; }
    public function setPubliee(bool $publiee): static { $this->publiee = $publiee; return $this; }

    public function getImageName(): ?string { return $this->imageName; }
    public function setImageName(?string $imageName): static { $this->imageName = $imageName; return $this; }

    public function getCategorie(): ?CategoriesController { return $this->categorie; }
    public function setCategorie(?CategoriesController $categorie): static { $this->categorie = $categorie; return $this; }

    public function getIngredients(): Collection { return $this->ingredients; }
    public function addIngredient(Ingredient $ingredient): static {
        if (!$this->ingredients->contains($ingredient)) { $this->ingredients->add($ingredient); $ingredient->setRecette($this); }
        return $this;
    }

    public function getAuteur(): ?User { return $this->auteur; }
    public function setAuteur(?User $auteur): static { $this->auteur = $auteur; return $this; }

    public function getTags(): Collection { return $this->tags; }
    public function addTag(TagController $tag): static {
        if (!$this->tags->contains($tag)) { $this->tags->add($tag); }
        return $this;
    }
    public function removeTag(TagController $tag): static { $this->tags->removeElement($tag); return $this; }
}