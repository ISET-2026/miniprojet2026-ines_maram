<?php

namespace App\DataFixtures;

use App\Entity\Recette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
  use App\Entity\CategorieRecette;
    use App\Entity\TagRecette;
    use App\Entity\User;
class RecetteFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {
            $recette = new Recette();
            $recette->setTitre($faker->sentence(3))
                    ->setDescription($faker->paragraph(3))
                    ->setTempsPreparation(rand(10, 45))
                    ->setTempsCuisson(rand(10, 120))
                    ->setDifficulte(rand(1, 5))
                    ->setInstructions($faker->text(300))
                    ->setNbPersonnes(rand(2, 8))
                    
                    ->setDateCreation($faker->dateTimeBetween('-6 months'))
                
->setCategorie(
    $this->getReference('cat_' . rand(0, 5), CategorieRecette::class)
)

->setAuteur($this->getReference('user_' . rand(0, 4) ,User::class));
                    


            $nbTags = rand(1, 4);
            for ($j = 0; $j < $nbTags; $j++) {
$recette->addTag( $this->getReference('tag_' . rand(0, 7), TagRecette::class));
            }

            $manager->persist($recette);
            $this->addReference('recette_' . $i, $recette);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            CategorieRecetteFixtures::class,
            TagRecetteFixtures::class,
            UserFixtures::class,
        ];
    }
}