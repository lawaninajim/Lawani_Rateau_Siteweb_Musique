<?php

namespace JN\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JNPlatformBundle:Default:index.html.twig');
    }
}
