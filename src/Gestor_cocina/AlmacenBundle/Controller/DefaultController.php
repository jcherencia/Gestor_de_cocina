<?php

namespace Gestor_cocina\AlmacenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
     public function indexAction()
    {
        return $this->render('AlmacenBundle:Default:index.html.twig');
    }
    public function nuevo_productoAction(){
    	 return $this->render('AlmacenBundle:Default:nuevo_producto.html.twig');
    }
}
