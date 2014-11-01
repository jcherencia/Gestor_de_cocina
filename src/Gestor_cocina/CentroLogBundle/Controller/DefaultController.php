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
        $categorias = $em->getRepository('RecetasBundle:Categoria')->findOrdenNomb();
        $solicitudes = $em->getRepository('CentroLogBundle:SolicitudProd')->findAll();
        $pedidos = $em->getRepository('CentroLogBundle:Pedido')->findAll();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        return $this->render('CentroLogBundle:Default:index.html.twig' , 
        	array('usuarios' => $usuarios, 'solicitudes' => $solicitudes, 'productos'=>$productos , 'pedidos'=>$pedidos, 'categorias'=>$categorias ));
    }
    public function solicitudesAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$solicitudes = $em->getRepository('CentroLogBundle:SolicitudProd')->findAll();
    	$productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
    	return $this->render('CentroLogBundle:Default:solicitudes.html.twig', 
        	array('solicitudes' => $solicitudes, 'productos'=>$productos ));
    }
     public function pedir_productosAction()
    {
    	return $this->render('CentroLogBundle:Default:pedir_productos.html.twig' );
    }
    
    //************************************************************************************//

    public function genSolicitudAction()
    {
    	$peticion=$this->container->get('request');
		$campos= $peticion->request->all();
    	/***********************************/
    	$em = $this->getDoctrine()->getManager();
    	
    	if (isset($campos['id'])) {
    		$id= (int)$campos['id'];
    		$receta = $em->getRepository('RecetasBundle:Recetas')->find($id);
    		$response = $receta->getNombre();
    	} else {
    		$response="true";
    	}
    	
    	
    	
    	$id_usuario= (int)$campos['id_usuario'];
		
    	$usuario = $em->getRepository('RecetasBundle:Usuarios')->find($id_usuario);
    	foreach ($campos['ingr'] as $key => $value) {
    		$index=(int)$key;
    		$producto = $em->getRepository('AlmacenBundle:Productos')->findOneBy(array(
            'id'  => $index));
    		$solicitud_cant=$this->comprobAlmacen($producto,$value);
    		print_r($campos);
    		if($solicitud_cant != false){
				$solicitud = new SolicitudProd();
	    		// $solicitud->setReceta($receta);
	    		// $index=(int)$key;
	    		$solicitud->setProducto($producto);
	    		$solicitud->setCantidad($solicitud_cant);
	    		$solicitud->setFecha(new \DateTime("now"));
	    		$solicitud->setUsuario($usuario);
	    	    $em->persist($solicitud);
	        	
    		}
    		
    	}
    	$em->flush();  
    	// return new Response($response, Response::HTTP_OK);
    	
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
		//********************************************/
		$usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $creador = $em->getRepository('RecetasBundle:Usuarios')->find($usr);
        $pedido->setCreador($creador);
        //*********************************************//
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
		$pedidos = $em->getRepository('CentroLogBundle:PedidoProducto')->findBy(array(
            'pedido'  => $id));
		foreach ($pedidos as $key => $ped) {

			if ($ped->getPedido()->getId()==$id) {
				if($key==0){
					$response=$ped->getProducto()->getId().":".$ped->getProducto()->getNombre().":".$ped->getCantidad().":".$ped->getProducto()->getUnidad();
				}else{
					$response.="&".$ped->getProducto()->getId().":".$ped->getProducto()->getNombre().":".$ped->getCantidad().":".$ped->getProducto()->getUnidad();
				}
			}
			
		}
		return new Response($response, Response::HTTP_OK);
     } 
	public function editPedidoAction(){
			$peticion=$this->container->get('request');
			// print_r($peticion);
			$campos= $peticion->request->all();
			$estado=$campos['estado'];
			$petic_pedido=$campos['pedido'];
			$idpedido=$campos['id'];
			//*****************************************/
			$em = $this->getDoctrine()->getManager();
			$pedido = $em->getRepository('CentroLogBundle:Pedido')->find($idpedido);
			$pedido->setEstado($estado);
			$em->persist($pedido);
        	$em->flush();

			//****************************//
			$pedidoproducto = $em->getRepository('CentroLogBundle:PedidoProducto')->findBy(array(
	            'pedido'  => $idpedido));
			foreach ($pedidoproducto as $key => $p_ped) {
				foreach ($petic_pedido as $idprod => $cant) {
					if ($p_ped->getProducto()->getId()==$idprod) {
						$em->remove($p_ped);
					}
				}

			}
			 $em->flush();

			 //**********************************************//
		
		// echo $pedido->getId();
        foreach ($petic_pedido as $key => $value) {
        	$ped_prod = new PedidoProducto();
        	$prod= $em->getRepository('AlmacenBundle:Productos')->find($key);
			
        	$ped_prod->setPedido($pedido);
        	$ped_prod->setProducto($prod);
        	$ped_prod->setCantidad($value);
        	$em->persist($ped_prod);

        }
        $em->flush();
		$response="true";
		return new Response($response, Response::HTTP_OK);
	 
	}
	public function editEstadoAction()
	{
		$peticion=$this->container->get('request');
		$campos= $peticion->request->all();
		$estado=$campos['estado'];
		$idpedido=$campos['id'];
		$em = $this->getDoctrine()->getManager();
		$pedido = $em->getRepository('CentroLogBundle:Pedido')->find($idpedido);
		$pedido->setEstado($estado);
		$em->persist($pedido);
		$em->flush();
		$response="true";
		return new Response($response, Response::HTTP_OK);
	}
	public function delPedidoAction()
	{
			$peticion=$this->container->get('request');
			$campos= $peticion->request->all();
			$idpedido=$campos['id'];
			$em = $this->getDoctrine()->getManager();
			$pedidoproducto = $em->getRepository('CentroLogBundle:PedidoProducto')->findBy(array(
	            'pedido'  => $idpedido));
			foreach ($pedidoproducto as $key => $p_ped) {
				$em->remove($p_ped);
			}
			$em->flush();
			$pedido = $em->getRepository('CentroLogBundle:Pedido')->find($idpedido);
			$em->remove($pedido);
			$em->flush();
			$response="true";
			return new Response($response, Response::HTTP_OK);
	}
	public function validarPedidoAction(){
		$em = $this->getDoctrine()->getManager();
		$peticion=$this->container->get('request');
		$id= $peticion->request->get('id');
		$pedido = $em->getRepository('CentroLogBundle:Pedido')->find($id);
		$pedido->setEstado('validado');
		$em->persist($pedido);
		//*******************************************************************//
		// $idpedido="6";
		// print_r($id."-");
			$pedidoproducto = $em->getRepository('CentroLogBundle:PedidoProducto')->findBy(array(
	            'pedido'  => $id));
			foreach ($pedidoproducto as $key => $p_ped) {
				// print_r($p_ped->getCantidad()."".$p_ped->getProducto()->getNombre());
				$producto=$p_ped->getProducto();
				$cantidad=$p_ped->getCantidad();
				$newStock=$producto->getStock()+$cantidad;
				$producto->setStock($newStock);
				$em->persist($producto);
				// print_r($newStock."-");
			}
		//*******************************************************************//
		// $em->persist($pedido);
		$em->flush();
		
		$response="true";
		return new Response($response, Response::HTTP_OK);
			// print_r("expression");
	}

}
