<?php

namespace Gestor_cocina\CentroLogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CentroLogBundle:Default:index.html.twig', array('name' => $name));
    }
}
