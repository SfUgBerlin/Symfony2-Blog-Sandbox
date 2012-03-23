<?php

namespace App\Blog\Sandbox\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    

    public function indexAction()
    {
        return new Response('<html><body>Hello World!</body></html>');
    }    
    
}
