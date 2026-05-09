<?php

namespace App\Service;

use App\Entity\Recette;
use App\Repository\RecetteRepository;

class RecetteAnalyser
{
    public function __construct(private RecetteRepository $repo)
    {
    }

    public function getTempsTotal(Recette $r): int
    {
        return $r->getTempsPreparation() + ($r->getTempsCuisson() ?? 0);
    }

    public function getTotalRecettesPubliees(): int
    {
        return $this->repo->count([
            'publiee' => true
        ]);
    }

    public function getRecettesParCategorie(): array
    {
        $recettes = $this->repo->findAll();

        $stats = [];

        foreach ($recettes as $r) {

            $nomCat = $r->getCategorie()->getNom();

            if (isset($stats[$nomCat])) {
                $stats[$nomCat]++;
            } else {
                $stats[$nomCat] = 1;
            }
        }

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