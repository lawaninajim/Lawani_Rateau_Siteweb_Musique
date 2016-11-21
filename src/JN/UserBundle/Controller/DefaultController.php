<?php

namespace JN\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JNUserBundle:Default:index.html.twig');
    }
}
