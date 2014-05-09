<?php

namespace Gestor_cocina\AlmacenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gestor_cocina\RecetasBundle\Util\Util;
use Gestor_cocina\AlmacenBundle\Entity\Productos;

class FormProductosController extends Controller
{


	
    //Controladores formularios
    public function crear_productoAction()
    {
       
    	$campos= array();
        $peticion = $this->getRequest();
        $campos= $peticion->request->all();
        $producto = new Productos();
        $producto->setNombre($campos['nombre']);
        $producto->setSlug(Util::getSlug($campos['nombre']));
        $producto->setUnidadCompra($campos['und_compra']);
        $producto->setPrecio($campos['precio']);
        $producto->setUnidad($campos['unidad']);
        $producto->setStock($campos['stock']);
        $producto->setStockMin($campos['stock_min']);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);
        $em->flush();
       return $this->redirect($this->generateUrl('almacen')); 
    }
     public function editar_productoAction($producto)
    {
        $campos= array();
        $peticion = $this->getRequest();
        $campos= $peticion->request->all();
        $em = $this->getDoctrine()->getEntityManager();
        $producto = $em->getRepository('AlmacenBundle:Productos')->findOneBySlug($producto);
        $producto->setNombre($campos['nombre']);
        $producto->setSlug(Util::getSlug($campos['nombre']));
        $producto->setUnidadCompra($campos['und_compra']);
        $producto->setPrecio($campos['precio']);
        $producto->setUnidad($campos['unidad']);
        $producto->setStock($campos['stock']);
        $producto->setStockMin($campos['stock_min']);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);
        $em->flush();
       // return $this->redirect($this->generateUrl('almacen'));
       
    }
     public function borrar_productoAction($producto)
   {
        $em = $this->getDoctrine()->getEntityManager();
        $producto = $em->getRepository('AlmacenBundle:Productos')->findOneBySlug($producto);
        $em->remove($producto);
        $em->flush();
        return $this->redirect($this->generateUrl('almacen')); 
    }
    public function recalculaPrecio($producto)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $ingredientes = $em->getRepository('RecetasBundle:Productos')->findOneByProducto($producto);
        echo $ingredientes;
    }
   
}
