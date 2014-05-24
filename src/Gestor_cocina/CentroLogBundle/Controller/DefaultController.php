<?php

namespace Gestor_cocina\CentroLogBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestor_cocina\CentroLogBundle\Entity\SolicitudProd;
class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('RecetasBundle:Usuarios')->findAll();
        $solicitudes = $em->getRepository('CentroLogBundle:SolicitudProd')->findAll();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        return $this->render('CentroLogBundle:Default:index.html.twig' , array('usuarios' => $usuarios, 'solicitudes' => $solicitudes,'productos'=>$productos));
    }

    public function genSolicitudAction()
    {
    	$peticion=$this->container->get('request');
		$campos= $peticion->request->all();
    	/***********************************/
    	$em = $this->getDoctrine()->getManager();
    	$id= (int)$campos['id'];
		$receta = $em->getRepository('RecetasBundle:Recetas')->find($id);
    	
    	foreach ($campos['ingr'] as $key => $value) {
    		$index=(int)$key;
    		$producto = $em->getRepository('AlmacenBundle:Productos')->findOneBy(array(
            'id'  => $index));
    		$solicitud_cant=$this->comprobAlmacen($producto,$value);
    		if($solicitud_cant != false){
				$solicitud = new SolicitudProd();
	    		$solicitud->setReceta($receta);
	    		$index=(int)$key;
	    		$solicitud->setProducto($producto);
	    		$solicitud->setCantidad($solicitud_cant);
	    		$solicitud->setFecha(new \DateTime("now"));
	    	    $em->persist($solicitud);
	        	$em->flush();  
    		}
    		
    	}
    	$response = $receta->getNombre();
    	return new Response($response, Response::HTTP_OK);
    	
    }
    public function comprobAlmacen($producto,$cantidad)
    {
    	// echo $producto->getNombre()." -- ".$producto->getStock();
    	$stock=$producto->getStock();
    	$stock_min=$producto->getStockMin();
    	$solicitud=0;
    	if($cantidad >= $stock){
			$solicitud = ($cantidad - $stock) + $stock_min;
			$producto -> setStock(0); 
			$em = $this->getDoctrine()->getManager();
        	$em->persist($producto);
        	$em->flush();
    	}
    	if($cantidad < $stock){
			$restante= $stock - $cantidad;
			$producto -> setStock($restante); 
			$em = $this->getDoctrine()->getManager();
        	$em->persist($producto);
        	$em->flush();
			if( $restante < $stock_min ){
				$solicitud = $stock_min - $restante;
			}
    	}
    		
    	return $solicitud;

    }
}
