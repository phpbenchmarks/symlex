<?php

namespace App\Controller\Web;

use Symfony\Component\HttpFoundation\Response;

/**
 * @see https://github.com/symlex/symlex#controllers
 */
class IndexController
{
    /**
     * Renders the template in app/templates/index/index.twig
     */
    public function indexAction()
    {
        return new Response('Hello World !');
    }
}