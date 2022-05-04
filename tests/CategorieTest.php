<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Categorie;

class CategorieTest extends TestCase
{
    public function testIsTrue(): void
    {
        $categorie = new Categorie();
        $categorie ->setName('sneakers')
                          ->setDescription('Basket2Ville')
                          ->setSlug('sneaker_basket');
        $this -> assertTrue($categorie->getName() === 'sneakers');
        $this -> assertTrue($categorie->getDescription() === 'Basket2Ville');
        $this -> assertTrue($categorie->getSlug() === 'sneaker_basket');

    }
    public function testIsFalse()
    {
        $categorie = new Categorie();
        $categorie->setName('False')
                        ->setDescription('False')
                        ->setSlug('False');
        $this -> assertFalse($categorie->getName() === 'soulier');
        $this -> assertFalse($categorie->getDescription() ==='chaussure2Ville');
        $this-> assertFalse($categorie->getSlug() === 'soulier_ville');
    }
    public function testIsEmpty()
    {
        $categorie = new Categorie();

        $this -> assertEmpty($categorie->getName());
        $this-> assertEmpty($categorie->getDescription());
        $this-> assertEmpty($categorie->getSlug());

    }

}
