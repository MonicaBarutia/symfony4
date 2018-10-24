<?php
/**
 * Created by PhpStorm.
 * User: Monica
 * Date: 10/23/2018
 * Time: 1:24 PM
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends  AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("My first page!");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        #dump($slug, $this);

      return $this->render('article/show.html.twig',[
          'title' => ucwords(str_replace('-',' ', $slug)),
          'comments' => $comments,
      ]);
    }

}