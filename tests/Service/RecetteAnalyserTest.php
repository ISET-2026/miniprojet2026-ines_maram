<?php

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\RecetteAnalyser;
use App\Repository\RecetteRepository;
use App\Entity\Recette;

class RecetteAnalyserTest extends TestCase
{
    public function testGetTempsTotal()
    {
        $repo = $this->createMock(RecetteRepository::class);

        $service = new RecetteAnalyser($repo);

        $recette = $this->createMock(Recette::class);

        $recette->method('getTempsPreparation')
                 ->willReturn(10);

        $recette->method('getTempsCuisson')
                 ->willReturn(20);

        $resultat = $service->getTempsTotal($recette);

        $this->assertEquals(30, $resultat);
    }

    public function testGetTempsTotalAvecNull()
    {
        $repo = $this->createMock(RecetteRepository::class);

        $service = new RecetteAnalyser($repo);

        $recette = $this->createMock(Recette::class);

        $recette->method('getTempsPreparation')
                 ->willReturn(15);

        $recette->method('getTempsCuisson')
                 ->willReturn(null);

        $resultat = $service->getTempsTotal($recette);

        $this->assertEquals(15, $resultat);
    }

    public function testGetTotalRecettesPubliees()
    {
        $repo = $this->createMock(RecetteRepository::class);

        $repo->method('count')
             ->willReturn(2);

        $service = new RecetteAnalyser($repo);

        $resultat = $service->getTotalRecettesPubliees();

        $this->assertEquals(2, $resultat);
    }

    public function testGetMoyenneIngredientsVide()
    {
        $repo = $this->createMock(RecetteRepository::class);

        $repo->method('findAll')
             ->willReturn([]);

        $service = new RecetteAnalyser($repo);

        $resultat = $service->getMoyenneIngredients();

        $this->assertEquals(0, $resultat);
    }
}