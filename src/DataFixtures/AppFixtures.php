<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Categorie;
use App\Entity\Produit;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker  =  Factory::create('fr_FR');

        for ($i = 0; $i < 12; $i++) {
            $user = new User();
            $user ->setName($faker->name())
                     ->setFirstname($faker->firstname())
                     ->setEmail($faker->email())
                     ->setRoles([])
                     ->setPassword($faker->password());
                    
            $manager->persist($user);
        }

        for ($j=0; $j<4; $j++) {
            $categorie = new Categorie();
            $categorie->setName($faker->name())
                            ->setDescription($faker->word(3))
                            ->setSlug('');

            $manager -> persist($categorie);

        }
        for ($k=0; $k < 12; $k++) {
            $produit = new Produit();
            $produit ->setName($faker->name())
                          ->setDescription($faker->paragraph())
                          ->setImage($faker ->image())
                          ->addRelation($categorie)
                          ->setUser($user)
                          ->setCreateAt($faker->dateTime());

        }

        $manager->flush();
    }
}
