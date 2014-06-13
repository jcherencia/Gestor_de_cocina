<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Gestor_cocina\RecetasBundle\Entity\Ingredientes;


use Gestor_cocina\RecetasBundle\Entity\Photo;
use Symfony\Component\HttpFoundation\File\UploadedFile;
// use File\FileBundle\Models\Document;

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
   
    public function nueva_recetaAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig',array('productos'=>$productos));
    }/*****************************/
    public function editar_recetaAction($receta){
        $em = $this->getDoctrine()->getEntityManager();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        $receta = $em->getRepository('RecetasBundle:Recetas')->find($receta);
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig',array('receta_edit'=>$receta,'productos'=>$productos,'ingredientes'=>$ingredientes));
    }
    /*******************/
    public function borrar_recetaAction($receta)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $receta = $em->getRepository('RecetasBundle:Recetas')->find($receta);
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        foreach ($ingredientes as $key => $ingre) {
           if ($receta->getId()== $ingre->getReceta()->getId()) {
                $em->remove($ingre);
           }
        }
        // $defaul_img="public/img/no_image.png";
        // $url_img=$receta->getFoto();
        // if($url_img!=$defaul_img){
        //     echo __DIR__."../../../../"."../Gestor_de_cocina/web/".$url_img;
        // }
        $em->flush();
        $em->remove($receta);
        $em->flush();

        return $this->redirect($this->generateUrl('recetas')); 
    }
    

    // public function uploadAction(Request $request)
    // {
    //     $peticion = $this->getRequest();
    //     $image = $this->getRequest()->files->get('img');
    //     // print_r($image);
    //     if (($image instanceof UploadedFile) && ($image->getError() == '0')) {

    //                 // $originalName = $image->getClientOriginalName();
    //                 // $name_array = explode('.', $originalName);
    //                 // $file_type = $name_array[sizeof($name_array) - 1];
    //                 // $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');

    //                 $photo = new Photo();
    //                 $photo->setFile($image);
    //                 $photo->upload("/perfil","avion.jpg");
    //                 // $photo->move('perfil');

    //     }
    // }
    

} 