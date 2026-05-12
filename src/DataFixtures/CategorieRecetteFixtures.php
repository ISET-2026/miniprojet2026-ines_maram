<?php
namespace App\DataFixtures;

use App\Entity\CategorieRecette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieRecetteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cats = ['🥗 Entrée', '🍝 Plat', '🍰 Dessert', '🥤 Boisson', '🍕 Snack', '🥣 Soupe'];

        foreach ($cats as $key => $name) {
            $category = new CategorieRecette();
            $category->setNom($name);
            $manager->persist($category);

            $this->addReference('cat_' . $key, $category);
        }

        $manager->flush();
    }
}