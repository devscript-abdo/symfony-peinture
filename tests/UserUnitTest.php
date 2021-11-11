<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{

    public function testIsTrue()
    {
        $user = new User();
        $user->setEmail('true@test.com')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setPassword('password')
            ->setAPropos('about me')
            ->setInstagram('instagram');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAPropos() === 'about me');
        $this->assertTrue($user->getInstagram() === 'instagram');
    }

    public function testIsFalse()
    {
        $user = new User();
        $user->setEmail('true@test.com')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setPassword('password')
            ->setAPropos('about me')
            ->setInstagram('instagram');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getAPropos() === 'about me false');
        $this->assertFalse($user->getInstagram() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getPrenom());
        //$this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getAPropos());
        $this->assertEmpty($user->getInstagram());
    }
}
