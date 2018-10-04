<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController  extends AbstractController

{
	/**
      * @Route("/article/homepage")
    */
    public function homepage()
    {
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('article/homepage.html.twig');
    }

    /**
      * @Route("/article/show")
    */
    public function show()
    {
        return $this->render('show/show.html.twig');
        //return new Response('Future page to show one space article! ');
    }
}
