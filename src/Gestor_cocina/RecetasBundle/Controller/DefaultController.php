<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    // public function indexAction($name)
    // {
    //     return $this->render('RecetasBundle:Default:index.html.twig', array('name' => $name));
    // }
    public function pruebaAction()
    {
    	return new Response('Esto es una pagina de prueba');
    }
}
