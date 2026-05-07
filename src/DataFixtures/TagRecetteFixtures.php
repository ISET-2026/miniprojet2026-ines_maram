<?php
namespace App\DataFixtures;

use App\Entity\TagRecette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
class TagRecetteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $tags = ['Végétarien', 'Végan', 'Sans Gluten', 'Bio', 'Rapide', 'Familial', 'Festif', 'Économique'];

        foreach ($tags as $key => $name) {
            $tag = new TagRecette();
            $tag->setNom($name);
            $tag->setCouleur($faker->safeHexColor);
            $manager->persist($tag);

            $this->addReference('tag_' . $key, $tag);
        }

        $manager->flush();
    }
}