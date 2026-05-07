<?php
namespace App\Service;

use App\Entity\Recette;
use App\Repository\RecetteRepository;

class RecetteAnalyser
{
    // Injection mta3 el Repository fil constructor
    public function __construct(private RecetteRepository $repo) {}

    public function getTempsTotal(Recette $r): int {
        // prep + cuisson (f-sourat ma 3andek hal les champs)
        return $r->getTempsPreparation() + $r->getTempsCuisson();
    }

    public function getTotalRecettesPubliees(): int {
        return $this->repo->count(['publiee' => true]);
    }

    public function getRecettesParCategorie(): array {
        // Traitement pour retourner un tableau associatif [NomCat => Nombre]
        $recettes = $this->repo->findAll();
        $stats = [];
        foreach ($recettes as $r) {
            $nomCat = $r->getCategorie()->getNom();
if (isset($stats[$nomCat])) {
    $stats[$nomCat] = $stats[$nomCat] + 1;
} else {
    $stats[$nomCat] = 1;
}        }
        return $stats;
    }
    public function getMoyenneIngredients(): float 
{
    $recettes = $this->repo->findAll(); 
    $totalRecettes = count($recettes);

    if ($totalRecettes === 0) {
        return 0; 
    }

    $totalIngredients = 0;
    foreach ($recettes as $r) {
        $totalIngredients += count($r->getIngredients()); 
    }
    return $totalIngredients / $totalRecettes; 
}
}
