<?php

namespace App\Blog\Sandbox\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    

    public function indexAction()
    {
        return $this->render('SandboxCoreBundle:Frontend:index.html.twig');
    }    
    
}
