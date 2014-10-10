<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Gestor_cocina\RecetasBundle\Entity\Ingredientes;
use Gestor_cocina\RecetasBundle\Entity\Valoraciones;


use Gestor_cocina\RecetasBundle\Entity\Photo;
use Symfony\Component\HttpFoundation\File\UploadedFile;
// use File\FileBundle\Models\Document;

class DefaultController extends Controller
{
    //Creacion de las vistas
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $rec_recientes = $em->getRepository('RecetasBundle:Recetas')->findRecientes();
        
        return $this->render('RecetasBundle:Default:index.html.twig', array('rec_recientes' => $rec_recientes));
         // return $this->render('RecetasBundle:Default:index.html.twig');
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
        $categorias = $em->getRepository('RecetasBundle:Categoria')->findAll();
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig',array('productos'=>$productos,'categorias'=>$categorias));
    }/*****************************/
    public function editar_recetaAction($receta){
        $em = $this->getDoctrine()->getEntityManager();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        $receta = $em->getRepository('RecetasBundle:Recetas')->find($receta);
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        $categorias = $em->getRepository('RecetasBundle:Categoria')->findAll();
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig',array('receta_edit'=>$receta,'productos'=>$productos,'ingredientes'=>$ingredientes,'categorias'=>$categorias));
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
    public function valorarAction()
    {
        $peticion=$this->container->get('request');
        $campos= $peticion->request->all();
        /***********************************/
        $em = $this->getDoctrine()->getManager();
        // if (isset($campos['receta'])) {
            $idreceta=(int)$campos['receta'];
            $idusuario=(int)$campos['usu'];
            $receta= $em->getRepository('RecetasBundle:Recetas')->find($idreceta);
            $usuario= $em->getRepository('RecetasBundle:Usuarios')->find($idusuario);
            $nota= (int)$campos['nota'];
            $valoraciones = $em->getRepository('RecetasBundle:Valoraciones')->findValorado($idreceta,$idusuario);
           if($valoraciones!=0){
                // **** Update valoracion **** // 
                // return new Response("update", Response::HTTP_OK);
                $val = $em->getRepository('RecetasBundle:Valoraciones')->find($valoraciones);
                $val->setPuntuacion($nota);
                $em->persist($val);
                $em->flush();
                $lastId = $val->getId();
                $return=$this->updNotaMedia($lastId,$idreceta);
                return new Response($return, Response::HTTP_OK);
           }else{
            // **** Create valoracion **** // 
            
            $val = new Valoraciones();
            $val->setReceta($receta);
            $val->setPuntuacion($nota);
            $val->setUsuario($usuario);
            $em->persist($val);
            $em->flush();
            $lastId = $val->getId();

            return new Response($lastId, Response::HTTP_OK);
           }
            
        // }
        
        
    }
    public function updNotaMedia($lastId,$idreceta)
    {
        if($lastId!="" AND $lastId!=null){
            $em = $this->getDoctrine()->getManager();
            $val = $em->getRepository('RecetasBundle:Valoraciones')->findNotasByRec($idreceta);
            $numResul=count($val);
            $suma=0;
            for ($i=0; $i < $numResul ; $i++) { 
                $suma+=$val[$i]['puntuacion'];
            }
            $notaMedia=$suma/$numResul;
            // return print_r($val, true);
            if($notaMedia!=""){
                $receta= $em->getRepository('RecetasBundle:Recetas')->find($idreceta);
                $receta->setNotaMedia($notaMedia);
                $em->persist($receta);
                $em->flush();
                return $receta->getNotaMedia();
            }
            
        }
        
    }
    

} 