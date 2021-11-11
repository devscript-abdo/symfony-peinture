<?php

namespace App\Tests;

use App\Entity\Blog;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use DateTime;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{

    public function testIsTrueForBlog()
    {
        $comment = new Commentaire();
        $post = new Blog();
        $datetime = new DateTime();
        $comment->setAuteur('abdelghafour')
            ->setEmail('abdo@abdo.com')
            ->setContentu('hello')
            ->setCreateAt($datetime)
            ->setBlog($post);
        $this->assertTrue($comment->getAuteur() === 'abdelghafour');
        $this->assertTrue($comment->getEmail() === 'abdo@abdo.com');
        $this->assertTrue($comment->getContentu() === 'hello');
        $this->assertTrue($comment->getCreateAt() === $datetime);
        $this->assertTrue($comment->getBlog() === $post);
    }

    public function testIsFalseForBlog()
    {
        $comment = new Commentaire();
        $post = new Blog();
        $datetime = new DateTime();
        $comment->setAuteur('abdelghafour')
            ->setEmail('abdo@abdo.com')
            ->setContentu('hello')
            ->setCreateAt($datetime)
            ->setBlog($post);
        $this->assertFalse($comment->getAuteur() === 'abdelghafours');
        $this->assertFalse($comment->getEmail() === 'abdo@abdo.coms');
        $this->assertFalse($comment->getContentu() === 'helloss');
        $this->assertFalse($comment->getCreateAt() === new DateTime());
        $this->assertFalse($comment->getBlog() === new Blog());
    }

    public function testIsTrueForPeinture()
    {
        $comment = new Commentaire();
        $peinture = new Peinture();
        $datetime = new DateTime();
        $comment->setAuteur('abdo')
            ->setEmail('abdo@abdoo.com')
            ->setContentu('helloo')
            ->setCreateAt($datetime)
            ->setPeinture($peinture);
        $this->assertTrue($comment->getAuteur() === 'abdo');
        $this->assertTrue($comment->getEmail() === 'abdo@abdoo.com');
        $this->assertTrue($comment->getContentu() === 'helloo');
        $this->assertTrue($comment->getCreateAt() ===  $datetime);
        $this->assertTrue($comment->getPeinture() === $peinture);
    }
    public function testIsFalseForPeinture()
    {
        $comment = new Commentaire();
        $peinture = new Peinture();
        $datetime = new DateTime();
        $comment->setAuteur('abdelghafour')
            ->setEmail('abdo@abdo.com')
            ->setContentu('hello')
            ->setCreateAt($datetime)
            ->setPeinture($peinture);
            
        $this->assertFalse($comment->getAuteur() === 'abdelghafours');
        $this->assertFalse($comment->getEmail() === 'abdo@abdo.coms');
        $this->assertFalse($comment->getContentu() === 'helloss');
        $this->assertFalse($comment->getCreateAt() === new DateTime());
        $this->assertFalse($comment->getPeinture() === new Peinture());
    }
}
