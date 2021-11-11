<?php

namespace App\Tests;

use App\Entity\Blog;
use DateTime;
use PHPUnit\Framework\TestCase;
use DateTimeImmutable;

class BlogUnitTest extends TestCase
{

    public function testIsTrue()
    {
        $post = new Blog();
        $datetime = new DateTimeImmutable();

        $post->setTitre('hello world')
            ->setSlug('hello-world')
            ->setContenu('hello world im a new devlopper in symfony')
            ->setCreateAt($datetime);


        $this->assertTrue($post->getTitre() === 'hello world');
        $this->assertTrue($post->getSlug() === 'hello-world');
        $this->assertTrue($post->getContenu() === 'hello world im a new devlopper in symfony');
        $this->assertTrue($post->getCreateAt() === $datetime);
    }

    public function testIsFalse()
    {
        $post = new Blog();
        $datetime = new DateTimeImmutable();

        $post->setTitre('hello world')
            ->setSlug('hello-world')
            ->setContenu('hello world im a new devlopper in symfony')
            ->setCreateAt($datetime);


        $this->assertFalse($post->getTitre() === 'hello worlder');
        $this->assertFalse($post->getSlug() === 'hello-worlder');
        $this->assertFalse($post->getContenu() === 'hello world im a new devlopper in symfony okey');
        $this->assertFalse($post->getCreateAt() === new DateTime());
    }

    public function testIsEmpty()
    {
        $post = new Blog();

        $this->assertEmpty($post->getTitre());
        $this->assertEmpty($post->getSlug());
        $this->assertEmpty($post->getContenu());
        $this->assertEmpty($post->getCreateAt());
    }
}
