<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use app\Entity\Article;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);
        $xxx = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'xxx' => $xxx
        ]);
    }
    /**
     * @Route("/",name="home")
     */
    public function home(){
        return $this -> render('blog/home.html.twig');
    }
    /**
     * @Route("/article/12" , name="show")
     */
    public function show(){  
        return $this-> render('blog/show.html.twig');
    }
}

