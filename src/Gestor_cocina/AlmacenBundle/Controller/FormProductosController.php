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
        $em = $this->getDoctrine()->getManager();
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
       
        $this->recalculaPrecio($producto);
        return $this->redirect($this->generateUrl('almacen'));
    }
     public function borrar_productoAction($producto)
   {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('AlmacenBundle:Productos')->findOneBySlug($producto);
        $em->remove($producto);
        $em->flush();
        return $this->redirect($this->generateUrl('almacen')); 
    }
    public function recalculaPrecio($producto)
    {
        $ingre_prod= $this->findByProducto($producto);
        foreach ($ingre_prod as $key => $ingr) {
           $receta= $ingr->getReceta();
           $producto=$ingr->getProducto();
           $precio_nuevo=$this->calcularPrecio($producto,$ingr->getCantidad());
           $ingre_rec=$this->findByReceta($receta);
           foreach ($ingre_rec as $key => $ingre) {
              if($ingre->getProducto() != $producto){
                               $precio_nuevo+=$this->calcularPrecio($ingre->getProducto(),$ingre->getCantidad());
                              
              }
           }
        $receta->setPrecio($precio_nuevo);

        $em = $this->getDoctrine()->getManager();
        $em->persist($receta);
        $em->flush();
        }
   }
   //**********************************************************************************//
   //*******************************************************************//
   //**********************************************************************************//
   public function calcularPrecio($producto,$cantidad)
   {
        
       return ($cantidad*$producto->getPrecio())/ $producto->getUnidadCompra();
   }
   public function findByReceta($receta)
   {
       $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'I')
           ->add('from', 'RecetasBundle:Ingredientes I')
           ->add('where', 'I.receta = :receta')
           ->setParameter('receta', $receta->getId());
        $query = $qb->getQuery();
        return $query->getResult();
   }
   public function findByProducto($producto)
   {
       $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'I')
           ->add('from', 'RecetasBundle:Ingredientes I')
           ->add('where', 'I.producto = :producto')
           ->setParameter('producto', $producto->getId());
        $query = $qb->getQuery();
        return $query->getResult();
   }
}
