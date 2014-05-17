<?php

namespace Gestor_cocina\CentroLogBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $usuarios = $em->getRepository('RecetasBundle:Usuarios')->findAll();
        return $this->render('CentroLogBundle:Default:index.html.twig' , array('usuarios' => $usuarios));
    }
    public function genSolicitudAction()
    {
    	$peticion=$this->container->get('request');
    	$campos= $peticion->request->keys();
    	$campos= $peticion->request->all();
    	foreach ($campos['ingr'] as $key => $value) {
    		# code...
    	}
    	// print_r($campos['id']." - ".$campos['ingr']);
    	// $peticion->isXmlHttpRequest();
    	// echo " dfd" .$peticion->keys();
    	// echo "dfee ".$this->getRequest()->query->get('foo');
  //   	$request = $this->container->get('request');        
		// $data1 = $request->query->get('nombre');
		// echo $peticion->getMethod();
		// echo " dato ".$data1;
    	return new Response($campos['id'], Response::HTTP_OK);
    	
    }
}
