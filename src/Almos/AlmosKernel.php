<?php

namespace Almos;

class AlmosKernel extends Kernel
{
    public function getRoutes()
    {
        return array(
            ['GET', '/', 'Almos\Controller\IndexController:indexAction'],
            ['GET', "/about", 'Almos\Controller\AboutController:getAboutAction'],
            ['GET', '/contact', 'Almos\Controller\ContactController:getContactAction'],
            ['GET', '/contact/{id}', 'Almos\Controller\ContactController:getIdContactAction']

        );
    }

    public function getTemplateHandler()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../app/views');
        $twig = new \Twig_Environment($loader);

        return $twig;
    }
}
