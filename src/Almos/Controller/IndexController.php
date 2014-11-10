<?php

namespace Almos\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        return new Response($this->twig->render('index.html.twig'));
    }

    public function indexOutput()
    {
        echo "test!!!";
    }
} 