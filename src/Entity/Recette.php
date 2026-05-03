<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;



#[ORM\Entity(repositoryClass: RecetteRepository::class)]

class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $instructions = null;

    #[ORM\Column]
    private ?int $tempsPreparation = null;

    #[ORM\Column]
    private ?int $tempsCuisson = null;

    #[ORM\Column(length: 50)]
    private ?string $difficulte = null;

    #[ORM\Column]
    private ?int $nbPersonne = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateCreation = null;

    #[ORM\Column]
    private ?bool $publiee = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;


#[ORM\ManyToOne(inversedBy: 'recettes')]
#[ORM\JoinColumn(nullable: false)]


#[ORM\OneToMany(mappedBy: 'recette', targetEntity: Ingredient::class, cascade: ['persist', 'remove'])]
private Collection $ingredients;

    private ?User $auteur = null;


    public function __construct()
{
    $this->ingredients = new ArrayCollection();
}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function setInstructions(string $instructions): static
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function getTempsPreparation(): ?int
    {
        return $this->tempsPreparation;
    }

    public function setTempsPreparation(int $tempsPreparation): static
    {
        $this->tempsPreparation = $tempsPreparation;

        return $this;
    }

    public function getTempsCuisson(): ?int
    {
        return $this->tempsCuisson;
    }

    public function setTempsCuisson(int $tempsCuisson): static
    {
        $this->tempsCuisson = $tempsCuisson;

        return $this;
    }

    public function getDifficulte(): ?string
    {
        return $this->difficulte;
    }

    public function setDifficulte(string $difficulte): static
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    public function getNbPersonne(): ?int
    {
        return $this->nbPersonne;
    }

    public function setNbPersonne(int $nbPersonne): static
    {
        $this->nbPersonne = $nbPersonne;

        return $this;
    }

    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTime $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function isPubliee(): ?bool
    {
        return $this->publiee;
    }

    public function setPubliee(bool $publiee): static
    {
        $this->publiee = $publiee;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): static
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getIngredients(): Collection
{
    return $this->ingredients;
}

public function addIngredient(Ingredient $ingredient): self
{
    if (!$this->ingredients->contains($ingredient)) {
        $this->ingredients->add($ingredient);
        $ingredient->setRecette($this);
    }

    return $this;
}

public function removeIngredient(Ingredient $ingredient): self
{
    if ($this->ingredients->removeElement($ingredient)) {
        if ($ingredient->getRecette() === $this) {
            $ingredient->setRecette(null);
        }
    }

    return $this;
}

    
}
