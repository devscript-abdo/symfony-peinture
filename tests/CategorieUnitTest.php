<?php

namespace App\Tests;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $categorie = new Categorie();
        $categorie->setNom('categorie a')
            ->setDesciption('categorie a description')
            ->setSlug('categorie-a');

        $this->assertTrue($categorie->getNom() === 'categorie a');
        $this->assertTrue($categorie->getDesciption() === 'categorie a description');
        $this->assertTrue($categorie->getSlug() === 'categorie-a');
    }

    public function testIsFalse()
    {
        $categorie = new Categorie();
        $categorie->setNom('categorie a')
            ->setDesciption('categorie a description')
            ->setSlug('categorie-a');

        $this->assertFalse($categorie->getNom() === 'categorie ad');
        $this->assertFalse($categorie->getDesciption() === 'categorie ad description');
        $this->assertFalse($categorie->getSlug() === 'categorie-add');
    }

    public function testIsEmpty()
    {
        $categorie = new Categorie();

        $this->assertEmpty($categorie->getNom());
        $this->assertEmpty($categorie->getDesciption());
        $this->assertEmpty($categorie->getSlug());
    }
}
