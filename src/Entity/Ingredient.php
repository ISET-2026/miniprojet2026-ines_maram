<?php

namespace App\Entity;

use App\Repository\IngredientRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: IngredientRepository::class)]
class Ingredient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
<<<<<<< HEAD

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank]
=======
  
   
    #[ORM\Column(length: 100)]
     #[Assert\NotBlank]
>>>>>>> 1056446cbb35853e2b0c46f92514fd70f660b97b
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    private ?string $quantite = null;

    #[ORM\ManyToOne(inversedBy: 'ingredients')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recette $recette = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
<<<<<<< HEAD
=======

>>>>>>> 1056446cbb35853e2b0c46f92514fd70f660b97b
        return $this;
    }

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): static
    {
        $this->quantite = $quantite;
<<<<<<< HEAD
=======

>>>>>>> 1056446cbb35853e2b0c46f92514fd70f660b97b
        return $this;
    }

    public function getRecette(): ?Recette
    {
        return $this->recette;
    }

    public function setRecette(?Recette $recette): static
    {
        $this->recette = $recette;
<<<<<<< HEAD
        return $this;
    }
}
=======

        return $this;
    }
}
>>>>>>> 1056446cbb35853e2b0c46f92514fd70f660b97b
