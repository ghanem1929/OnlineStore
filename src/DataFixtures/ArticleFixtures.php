<?php

namespace App\DataFixtures;
use app\Entity\Article;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i =1 ; $i <= 10 ; $i++){
            $article = new article();
            $article -> setTitle("titre de l'article n° $i")
                     -> setimage("http://placehold.it/450x270")
                     -> setPrixacc(800)
                     -> setPrixpr(1000)
                     -> setDescription("pargrafehh ckjbefkbje ");

            $manager->persist($article);
        }

        $manager->flush();
    }
}
