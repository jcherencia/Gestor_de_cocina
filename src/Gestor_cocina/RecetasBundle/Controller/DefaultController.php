<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gestor_cocina\RecetasBundle\Entity\Ingredientes;

class DefaultController extends Controller
{
    //Creacion de las vistas
    public function indexAction()
    {
        return $this->render('RecetasBundle:Default:index.html.twig');
    }
    // public function recetasAction()
    // {

    //     $em = $this->getDoctrine()->getEntityManager();
    //     $recetas = $em->getRepository('RecetasBundle:Recetas')->findAll();
        
    // 	return $this->render('RecetasBundle:Default:recetas.html.twig', array('recetas' => $recetas));

    // }
      public function recetasAction()
    {

        $em = $this->getDoctrine()->getEntityManager();
        $recetas = $em->getRepository('RecetasBundle:Recetas')->findAll();
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        
        // foreach ($recetas as $key => $receta) {
            // echo $receta->getId()." - Receta ->".$receta->getNombre()." - ";
            // $ingre = $em->getRepository('RecetasBundle:Ingredientes')->findOneByReceta($receta);
            // $ingre = $em->getRepository('RecetasBundle:Ingredientes')->findBy(array('receta' => $receta ));
            // if(!$ingre){
            //     throw $this->createNotFoundException("no se puede listar");
                
            // }
            // $ingrediente = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
            // foreach ($ingrediente as $key => $ingre) {
            //     if($receta->getId()==$ingre->getReceta()->getId()){
            //         // echo $ingre->getProducto()->getNombre()." =>".$ingre->getCantidad()."</br>";
            //         $ingredientes[0][$key]=$ingre->getProducto()->getNombre();
            //         $ingredientes[1][$key]=$ingre->getCantidad();
            //          }
            //     }
                // echo $receta->getId()." -->".$ingre->getReceta()->getId();
                
           // $repository = $this->getDoctrine()
           //      ->getRepository('RecetasBundle:Ingredientes');
             
           //  $query = $repository->createQueryBuilder('ingr')
           //      ->where('ingr.receta = :receta')
           //      ->setParameter('receta', $receta)
           //      ->getQuery();
 
           //  $ingre = $query->getResult();
            // echo $ingre->getProducto()->getNombre()."</br>";
        // }
       
        
        return $this->render('RecetasBundle:Default:recetas.html.twig', array('recetas' => $recetas,'ingredientes'=>$ingredientes));

    }
    public function perfilAction()
    {
    	return $this->render('RecetasBundle:Default:perfil.html.twig');
    }
    public function nueva_recetaAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig',array('productos'=>$productos));
    }
} 