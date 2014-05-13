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
       //**********recogemos los datos generarles******************/
        $campos= array();
        $peticion = $this->getRequest();
        $campos= $peticion->request->all();
        $em = $this->getDoctrine()->getManager();
        $receta = $em->getRepository('RecetasBundle:Recetas')->findOneBySlug($receta);
        $receta->setNombre($campos['nombre']);
        $receta->setSlug(Util::getSlug($campos['nombre']));
        $receta->setDescripcion($campos['descripcion']);
        $receta->setComensales($campos['comensales']);
        $receta->setPrecio($campos['precio']);
        $em = $this->getDoctrine()->getManager();
        $em->persist($receta);
        $em->flush();
        //*******Recogemos los ingredientes que se han añadido a la receta****//
        $ingredientes[][]=array();
        $i=0;
        foreach ($campos['id_ing'] as $key => $value){

                $ingredientes[0][$i]=$value;
                echo "-".$i." -> ".$value;
                $i++;
        }
           $i=0;
        foreach ($campos['cantidad'] as $key => $value){
                $ingredientes[1][$i]=$value;
                // echo "-".$i." -> ".$value;
                 $i++;
                
        }
        //------------------------------------------//
        $ingr_receta=$this->findByReceta($receta);
        foreach ($ingr_receta as $key => $ingre) {
            $em->remove($ingre);
           
        }
         $em->flush();
        for ($i=0; $i < count($ingredientes[0]) ; $i++) {

            $producto= $em->getRepository('AlmacenBundle:Productos')->findOneBy(array(
            'id'  => $ingredientes[0][$i]));
            $ingr= new Ingredientes();
            $ingr->setReceta($receta);
            $ingr->setCantidad($ingredientes[1][$i]);
            $ingr->setProducto($producto);
            // echo "ingre  ".$ingr->getCantidad();
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingr);
        }
        $em->flush();
       return $this->redirect($this->generateUrl('recetas')); 
       // return $this->render('RecetasBundle:Default:recetas.html.twig');
    }
    //  public function addIngr($receta,$producto,$cantidad)
    // {
    //     $ingr= new Ingredientes();
    //     $ingr->setReceta($receta);
    //     $ingr->setCantidad($cantidad);
    //     $ingr->setProducto($producto);
    //     // echo $ingr->getCantidad();
    //     $em = $this->getDoctrine()->getManager();
    //     $em->persist($ingr);
    //     $em->flush();
    // }
    // public function actualizarIng($ingre,$cantidad)
    // {
    //     $em = $this->getDoctrine()->getManager();
    //     $ingr= $em->getRepository('RecetasBundle:Ingredientes')->findOneByProducto($ingre->getProducto());
    //     $ingr->setCantidad($cantidad);
    //      // echo $ingr->getCantidad();
    //     $em->persist($ingr);
    //     $em->flush();
    // }

    // public function borrarIng($ingre)
    // {
    //     # code...
    // }
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
   
}
