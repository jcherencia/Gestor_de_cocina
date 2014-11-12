<?php

namespace Gestor_cocina\AlmacenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestor_cocina\RecetasBundle\Entity\Productos;

class DefaultController extends Controller
{
     public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
        // $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findOrderByNombre();
        
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
    public function getProductosAction()
    {
        $peticion=$this->container->get('request');
        // $campos= $peticion->query->all();

        $campos= $peticion->request->all();
        $usuario=$campos['usuario'];
        // // $usuario=19;
        
        // // /***********************************/
        // $em = $this->getDoctrine()->getManager();
        // $result = $em->getRepository('AlmacenBundle:Productos')->findProducts();
        // // $result = $em->getRepository('RecetasBundle:Recetas')->findSearch($busqueda);
        // // return $result;
        // $salida="";
        // for ($i=0; $i < count($result); $i++) { 
        //     $j=0;
        //     foreach ($result[$i] as $key => $value) {
        //         if ($key=="fecha_creacion") {
        //             $value=date_format($value, 'd-m-Y h:m');
        //             // $salida.=$key." = ".$value;
        //             $salida.=$value;

        //         } else{
        //             // $salida.=$key." = ".$value;
        //             $salida.=$value;

        //         }
                
                
        //         if ($j!=count($result[$i])-1) {
        //             $salida.="&";
        //         } 
        //         $j++;
                
        //     }
        //     if ($i!=count($result)-1) {
        //             $salida.="||";
        //         } 
        // }
        // // return print_r($result,TRUE);
        // echo $salida;
        $salida=$usuario;
        // $salida="prueba";
        return new Response($salida, Response::HTTP_OK);
        // return new Response($campos['busqueda'], Response::HTTP_OK);
    }
   // public function verProductosAction()
   //  {
   //      return new Response("ok", Response::HTTP_OK);
   //  } 
}
