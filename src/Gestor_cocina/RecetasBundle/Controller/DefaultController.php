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
        $em = $this->getDoctrine()->getManager();
        $rec_recientes = $em->getRepository('RecetasBundle:Recetas')->findRecientes();
        $fav = $em->getRepository('RecetasBundle:Recetas')->findTop();
        return $this->render('RecetasBundle:Default:index.html.twig', array('rec_recientes' => $rec_recientes,'favoritas' => $fav));
         // return $this->render('RecetasBundle:Default:index.html.twig');
    }
    /****************************************************************/
    public function recetaAction($receta)
    {
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        $receta = $em->getRepository('RecetasBundle:Recetas')->find($receta);
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        $categorias = $em->getRepository('RecetasBundle:Categoria')->findAll();
        return $this->render('RecetasBundle:Default:receta.html.twig',array('receta'=>$receta,'productos'=>$productos,'ingredientes'=>$ingredientes,'categorias'=>$categorias));
    }

    public function filtrarAction($categoria)
    {
        $em = $this->getDoctrine()->getManager();
        $recetas = $em->getRepository('RecetasBundle:Recetas')->findFiltro($categoria);
        $categorias = $em->getRepository('RecetasBundle:Categoria')->findAll();
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        return $this->render('RecetasBundle:Default:recetas.html.twig', array('recetas' => $recetas,'ingredientes'=>$ingredientes,'categorias'=>$categorias));
    }

    /****************************************************************/
    public function buscarAction()
    {
        $peticion=$this->container->get('request');
        $campos= $peticion->request->all();
        $busqueda=$campos['busqueda'];
        // $busqueda="Tortilla";
        /***********************************/
        $em = $this->getDoctrine()->getManager();
        // $result = $em->getRepository('RecetasBundle:Recetas')->findAll();
        $result = $em->getRepository('RecetasBundle:Recetas')->findSearch($busqueda);
        // return $result;
        $salida="";
        for ($i=0; $i < count($result); $i++) { 
            $j=0;
            foreach ($result[$i] as $key => $value) {
                $salida.=$key." = ".$value;
                if ($j!=count($result[$i])-1) {
                    $salida.="&";
                } 
                $j++;
                
            }
            if ($i!=count($result)-1) {
                    $salida.="||";
                } 
        }
        // return print_r($result,TRUE);
        return new Response($salida, Response::HTTP_OK);
        // return new Response($campos['busqueda'], Response::HTTP_OK);
    }

    /****************************************************************/
    public function recetasAction()
    {

        $em = $this->getDoctrine()->getManager();
        $recetas = $em->getRepository('RecetasBundle:Recetas')->findAll();
        
        $categorias = $em->getRepository('RecetasBundle:Categoria')->findOrdenNomb();
        // $categorias = $em->getRepository('RecetasBundle:Categoria')->findAll();
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        return $this->render('RecetasBundle:Default:recetas.html.twig', array('recetas' => $recetas,'ingredientes'=>$ingredientes,'categorias'=>$categorias));

    }
   
    public function nueva_recetaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        $categorias = $em->getRepository('RecetasBundle:Categoria')->findAll();
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig',array('productos'=>$productos,'categorias'=>$categorias));
    }/*****************************/
    public function editar_recetaAction($receta){
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('AlmacenBundle:Productos')->findAll();
        $receta = $em->getRepository('RecetasBundle:Recetas')->find($receta);
        $ingredientes = $em->getRepository('RecetasBundle:Ingredientes')->findAll();
        $categorias = $em->getRepository('RecetasBundle:Categoria')->findAll();
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig',array('receta_edit'=>$receta,'productos'=>$productos,'ingredientes'=>$ingredientes,'categorias'=>$categorias));
    }
    /*******************/
    public function borrar_recetaAction($receta)
    {
        $em = $this->getDoctrine()->getManager();
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