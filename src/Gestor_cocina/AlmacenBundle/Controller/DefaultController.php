<?php

namespace Gestor_cocina\AlmacenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestor_cocina\RecetasBundle\Entity\Productos;

class DefaultController extends Controller
{
     public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        return $this->render('AlmacenBundle:Default:index.html.twig',array('productos' => $productos));
    }
    public function nuevo_productoAction(){

       
    	 return $this->render('AlmacenBundle:Default:nuevo_producto.html.twig');
    }
    public function mod_productoAction($producto)
    {
         $em = $this->getDoctrine()->getEntityManager();
        $producto = $em->getRepository('AlmacenBundle:Productos')->find($producto);
        return $this->render('AlmacenBundle:Default:nuevo_producto.html.twig',array('producto_edit' => $producto));
    }
}
