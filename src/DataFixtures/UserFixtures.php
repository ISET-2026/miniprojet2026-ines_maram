<?php
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $hasher) {}

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $admin = new User();
        $admin->setEmail('admin@recipehub.com')
              ->setRoles(['ROLE_ADMIN'])
              ->setPseudo('Admin_Recipe')
              ->setPassword($this->hasher->hashPassword($admin, 'admin123'));
        $manager->persist($admin);
        

        $chef = new User();
        $chef->setEmail('chef@recipehub.com')
             ->setRoles(['ROLE_CUISINIER'])
             ->setPseudo('Chef_Recipe')
             ->setPassword($this->hasher->hashPassword($chef, 'chef123'));
        $manager->persist($chef);

        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->setEmail($faker->email)
                 ->setRoles(['ROLE_USER'])
                 ->setPassword($this->hasher->hashPassword($user, 'password123'))
                 ->setpseudo($faker->userName);
            $manager->persist($user);
            $this->addReference('user_' . $i, $user);
        }

        $manager->flush();
    }
}
