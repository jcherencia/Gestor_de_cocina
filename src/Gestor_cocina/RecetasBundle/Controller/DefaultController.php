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
    public function recetasAction()
    {

        $em = $this->getDoctrine()->getEntityManager();
        $recetas = $em->getRepository('RecetasBundle:Recetas')->findAll();
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
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
    }/*****************************/
    public function editar_recetaAction($receta){
        $em = $this->getDoctrine()->getEntityManager();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        $receta = $em->getRepository('RecetasBundle:Recetas')->findOneBySlug($receta);
         $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig',array('receta_edit'=>$receta,'productos'=>$productos,'ingredientes'=>$ingredientes));
    }
    /*******************/
    public function borrar_recetaAction($receta)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $receta = $em->getRepository('RecetasBundle:Recetas')->findOneBySlug($receta);
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        foreach ($ingredientes as $key => $ingre) {
           if ($receta->getId()== $ingre->getReceta()->getId()) {
                $em->remove($ingre);
           }
        }
        $em->flush();
        // $receta = $em->getRepository('RecetasBundle:Recetas')->findOneBySlug($receta);
        $em->remove($receta);
        $em->flush();
        return $this->redirect($this->generateUrl('recetas')); 
    }

} 