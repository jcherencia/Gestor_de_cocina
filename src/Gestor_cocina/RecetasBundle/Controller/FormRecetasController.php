<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Gestor_cocina\RecetasBundle\Entity\Recetas;
use Gestor_cocina\RecetasBundle\Util\Util;
class FormRecetasController extends Controller
{


	
    //Controladores formularios
    public function crear_recetaAction()
    {
        $fecha_creac=date('Y-m-d : h:m:s');
    	$campos= array();
        // Obtener el objeto de la petición en un controlador
        $peticion = $this->getRequest();
        // $campos['nombre'] = $peticion->request->get('nombre');
        $campos= $peticion->request->all();
       // echo ;
        $receta = new Recetas();
        $receta->setNombre($campos['nombre']);
        $receta->setSlug(Util::getSlug($campos['nombre']));
        $receta->setDescripcion($campos['descripcion']);
        $receta->setComensales($campos['comensales']);
        $receta->setFechaCreacion(new \DateTime("now"));
        // $receta->

        // ... completar todas las propiedades ...
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($receta);
        $em->flush();
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig');
    }
}
