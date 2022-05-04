<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Produit;
use App\Entity\Categorie;
use App\Entity\User;
use DateTime;

class ProduitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $produit = new Produit();
        $datetime = new DateTime();
        $categorie = new Categorie();
        $user = new User();
        $produit->setName('true')
                     ->setImage('true')
                     ->setDescription('true')
                     ->setCreateAt($datetime)
                     ->setSlug('slug')
                     ->addRelation($categorie)
                     ->setUser($user);
                     
        $this -> assertTrue($produit->getName() ==='true');
        $this -> assertTrue($produit->getDescription() ==='true');
        $this -> assertTrue($produit-> getSlug() === 'slug');
        $this -> assertTrue($produit-> getImage() ==='true');
        $this -> assertTrue($produit -> getCreateAt() ===$datetime);
       $this -> assertContains($categorie, $produit->getRelation());
        $this ->assertTrue($produit -> getUser() ===$user);
    }

   public function testIsFalse(): void
    {
        $produit = new Produit();
        $datetime = new DateTime();
        $categorie = new Categorie();
        $user = new User();
        $produit->setName('true')
                     ->setImage('true')
                     ->setDescription('true')
                     ->setCreateAt($datetime)
                     ->setSlug('slug')
                   ->addRelation($categorie)
                     ->setUser($user);
                     
        $this -> assertFalse($produit->getName() ==='false');
        $this -> assertFalse($produit-> getImage() ==='false');
        $this -> assertFalse($produit -> getCreateAt() === new Datetime());
         $this -> assertNotContains(new Categorie(), $produit->getRelation());
        $this ->assertFalse($produit -> getUser() === new User());

    }
    public function testIsEmpty()
    {
        $produit = new Produit();
        $this -> assertEmpty($produit -> getName());
        $this -> assertEmpty($produit -> getImage());
        $this -> assertEmpty($produit -> getSlug());
        $this -> assertEmpty($produit -> getDescription());
       $this -> assertEmpty($produit -> getCreateAt());
       $this -> assertEmpty($produit -> getRelation());
        $this -> assertEmpty($produit -> getUser());
    }

}
