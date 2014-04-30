<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Gestor_cocina\RecetasBundle\Entity\Recetas;
use Gestor_cocina\RecetasBundle\Entity\Ingredientes;
use Gestor_cocina\RecetasBundle\Util\Util;
class FormRecetasController extends Controller
{


	
    //Controladores formularios
    public function crear_recetaAction()
    {
       
    	$campos= array();
        $peticion = $this->getRequest();
        $campos= $peticion->request->all();
        $receta = new Recetas();
        $receta->setNombre($campos['nombre']);
        $receta->setSlug(Util::getSlug($campos['nombre']));
        $receta->setDescripcion($campos['descripcion']);
        $receta->setComensales($campos['comensales']);
        $receta->setFechaCreacion(new \DateTime("now"));
        //--------------------------------------------//
        $em = $this->getDoctrine()->getManager();
        $em->persist($receta);
        $em->flush();
        //---------------------------//
        
        $ingredientes[][]=array();
        foreach ($campos['id_ing'] as $key => $value){
                $ingredientes[0][$key]=$value;
              # code...
          }
        foreach ($campos['cantidad'] as $key => $value){
                $ingredientes[1][$key]=$value;
        }
        
        for ($i=0; $i < count($ingredientes) ; $i++) { 
            $producto= $em->getRepository('AlmacenBundle:Productos')->findOneBy(array(
            'id'  => $ingredientes[0][$i]));
            $ingr= new Ingredientes();
            $ingr->setReceta($receta);
            $ingr->setCantidad($ingredientes[1][$i]);
            $ingr->setProducto($producto);
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingr);
        }
        $em->flush();
       return $this->redirect($this->generateUrl('recetas')); 
       // return $this->render('RecetasBundle:Default:recetas.html.twig');
    }
   
}
