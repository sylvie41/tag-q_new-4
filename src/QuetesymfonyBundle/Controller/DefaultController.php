<?php

namespace QuetesymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QuetesymfonyBundle:Default:index.html.twig');
    }
}
