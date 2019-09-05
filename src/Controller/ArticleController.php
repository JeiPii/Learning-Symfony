<?php


namespace App\Controller;




use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    /**
     * @Route("/", name="root")
     */
    public function homepage()
    {
        return new Response('First page');
    }

    /**
     * @Route("/{slug}", name="swen")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show: %s', $slug));
    }
}