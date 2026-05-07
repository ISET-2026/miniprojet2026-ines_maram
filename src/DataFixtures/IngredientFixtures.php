<?php
namespace App\DataFixtures;

use App\Entity\Ingredient;
use App\Entity\Recette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;

class IngredientFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {
            
            $recette = $this->getReference('recette_' . $i,Recette::class );

            $nbIngredients = $faker->numberBetween(3, 8);

            for ($j = 0; $j < $nbIngredients; $j++) {
                $ingredient = new Ingredient();
                $ingredient->setNom($faker->word());
                $ingredient->setQuantite($faker->randomFloat(2, 1, 500)); 
           
                
                $ingredient->setRecette($recette);

                $manager->persist($ingredient);
            }
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            RecetteFixtures::class,
        ];
    }
}