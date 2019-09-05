<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="root")
     */
    public function homepage()
    {
        return new Response('First page');
    }

    /**
     * @Route("/{slug}", name="news")
     */
    public function show($slug)
    {
        $comments = [
            'Heyyoooo',
            'Goed bezig man!!',
            'Zekers',
        ];

//        dump($slug, $this);

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}