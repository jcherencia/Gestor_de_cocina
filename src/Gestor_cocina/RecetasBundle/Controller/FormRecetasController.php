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
        // echo "precio ".$campos['precio'];
        $receta->setPrecio($campos['precio']);
        //--------------------------------------------//
        $em = $this->getDoctrine()->getManager();
        $em->persist($receta);
        $em->flush();
        //---------------------------//
        
        $ingredientes[][]=array();
        $i=0;
        foreach ($campos['id_ing'] as $key => $value){

                $ingredientes[0][$i]=$value;
                $i++;
        }
        // echo "<br>";
           $i=0;
        foreach ($campos['cantidad'] as $key => $value){
                $ingredientes[1][$i]=$value;
                $i++;
                
        }
        for ($i=0; $i < count($ingredientes[0]) ; $i++) {
            // echo "--- ".$ingredientes[0][$i];
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
     public function editar_recetaAction($receta)
    {
       echo $id;
        // $campos= array();
        // $peticion = $this->getRequest();
        // $campos= $peticion->request->all();
        // // $receta = $em->getRepository('RecetasBundle:Recetas')->findOneById($campos['receta_id']);
        // echo $campos['nombre'];
        // $receta->setNombre($campos['nombre']);
        // $receta->setSlug(Util::getSlug($campos['nombre']));
        // $receta->setDescripcion($campos['descripcion']);
        // $receta->setComensales($campos['comensales']);
        // // $receta->setFechaCreacion(new \DateTime("now"));
        // // $receta = $em->getRepository('RecetasBundle:Recetas')->findOneBySlug($receta);
        // // echo "precio ".$campos['precio'];
        // $receta->setPrecio($campos['precio']);
        // //--------------------------------------------//
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($receta);
        // $em->flush();
        //---------------------------//
        
        // $ingredientes[][]=array();
        // $i=0;
        // foreach ($campos['id_ing'] as $key => $value){

        //         $ingredientes[0][$i]=$value;
        //         $i++;
        //         // echo $value;
        //       # code...
        //   }
        //    $i=0;
        // foreach ($campos['cantidad'] as $key => $value){
        //         $ingredientes[1][$i]=$value;
        //         echo "-".$i." -> ".$value;
        //          $i++;
                
        // }
        // // echo count($ingredientes);
        // for ($i=0; $i < count($ingredientes) ; $i++) {

        //     $producto= $em->getRepository('AlmacenBundle:Productos')->findOneBy(array(
        //     'id'  => $ingredientes[0][$i]));
        //     $ingr= new Ingredientes();
        //     $ingr->setReceta($receta);
        //     $ingr->setCantidad($ingredientes[1][$i]);
        //     $ingr->setProducto($producto);
        //     // echo "ingre  ".$ingr->getCantidad();
        //     $em = $this->getDoctrine()->getManager();
        //     $em->persist($ingr);
        // }
        // $em->flush();
       // return $this->redirect($this->generateUrl('recetas')); 
       // return $this->render('RecetasBundle:Default:recetas.html.twig');
    }
   
}
