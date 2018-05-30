<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 03.03.18
 * Time: 1:53
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage() {
        dump($_SERVER['APP_ENV']);
        return new Response(
            "<html><body>".
                     'APP_ENV = '.$_SERVER['APP_ENV'].
                    "</body></html>"
        );
    }

    /**
     * @Route("/news")
     */
    public function show() {
        return new Response(
            "<html><body>".
            'Show = '.$_SERVER['APP_ENV'].
            "</body></html>"
        );
    }
}