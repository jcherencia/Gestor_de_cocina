<?php

namespace Gestor_cocina\CentroLogBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestor_cocina\CentroLogBundle\Entity\Pedido;
use Gestor_cocina\CentroLogBundle\Entity\PedidoProducto;
use Gestor_cocina\CentroLogBundle\Entity\SolicitudProd;
class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('RecetasBundle:Usuarios')->findAll();
        $solicitudes = $em->getRepository('CentroLogBundle:SolicitudProd')->findAll();
        $pedidos = $em->getRepository('CentroLogBundle:Pedido')->findAll();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        return $this->render('CentroLogBundle:Default:index.html.twig' , 
        	array('usuarios' => $usuarios, 'solicitudes' => $solicitudes, 'productos'=>$productos , 'pedidos'=>$pedidos));
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
    public function genPedidoAction()
    {
    	$peticion=$this->container->get('request');
		$campos= $peticion->request->all();
		$prod_pedido=$campos['pedido'];
		$borrar_solicit=$campos['solicitudes']; 
		$em = $this->getDoctrine()->getManager();
		$pedido = new Pedido();
		$pedido->setFecha(new \DateTime("now"));
		$pedido->setEstado('pendiente');
		$em->persist($pedido);
        $em->flush();
        //*********************************************//
        
        if ($borrar_solicit !="false") {
        	
			foreach ($borrar_solicit as $key => $solic) {
				$solicitud= $em->getRepository('CentroLogBundle:SolicitudProd')->find($solic);
				$em->remove($solicitud);
			} 
			$em->flush();
		}
		
        //**********************************************//
        foreach ($prod_pedido as $key => $value) {
        	$ped_prod = new PedidoProducto();
        	$prod= $em->getRepository('AlmacenBundle:Productos')->find($key);
        	$ped_prod->setPedido($pedido);
        	$ped_prod->setProducto($prod);
        	$ped_prod->setCantidad($value);
        	$em->persist($ped_prod);

        }
        $em->flush();
		$response="ok";
		return new Response($response, Response::HTTP_OK);
    }
    public function findPedidoAction()
     {
     	$peticion=$this->container->get('request');
     	$response="false";
		$campos= $peticion->request->all();
		$em = $this->getDoctrine()->getManager();
		$id=$campos['id'];
		// $pedidos = $em->getRepository('CentroLogBundle:PedidoProducto')->findAll();
		$pedidos = $em->getRepository('CentroLogBundle:PedidoProducto')->findBy(array(
            'pedido'  => $id));
		
		// print_r($pedidos);
		foreach ($pedidos as $key => $ped) {

			if ($ped->getPedido()->getId()==$id) {
				// echo $key;
				if($key==0){
					$response=$ped->getProducto()->getId().":".$ped->getProducto()->getNombre().":".$ped->getCantidad().":".$ped->getProducto()->getUnidad();
				}else{
					$response.="&".$ped->getProducto()->getId().":".$ped->getProducto()->getNombre().":".$ped->getCantidad().":".$ped->getProducto()->getUnidad();
				}
			}
			
		}
		
		
        // print_r($response);
       // id:valor&id:valor
		return new Response($response, Response::HTTP_OK);
     } 
}
