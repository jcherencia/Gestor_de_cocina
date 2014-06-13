<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

use Gestor_cocina\RecetasBundle\Entity\Recetas;
use Gestor_cocina\RecetasBundle\Entity\Ingredientes;
use Gestor_cocina\RecetasBundle\Util\Util;


use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gestor_cocina\RecetasBundle\Entity\Photo;
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
        $receta->setPrecio($campos['precio']);
     //    //--------------------------------------------//

        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $creador = $em->getRepository('RecetasBundle:Usuarios')->find($usr);
        $receta->setCreador($creador);
        //--------------------------------------------//
        
        // $em->persist($receta);
        // $em->flush();

    //---------------------------//
        $image = $this->getRequest()->files->get('img');
        $status = 'success';
            $uploadedURL='';
            $message='';
        // print_r($image);
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 2000000000)) {

                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        $em->persist($receta);
                        $em->flush();


                        $newName="receta".$receta->getId()."-".$receta->getSlug().".".$file_type;
                        // $newName="receta.jpg";
                        $dir="uploads/recetas/".$newName;
                        $photo = new Photo();
                        $photo->setFile($image);
                        $photo->upload("/recetas",$newName);
                        $receta->setFoto($dir);
                        $em->persist($receta);
                        $em->flush();
                   } else {
                        $status = 'failed';
                        $message = 'Tipo de archivo inválido.';
                        // return $this->render('RecetasBundle:Default:registro.html.twig',array('status'=>$status,'message'=>$message));
                    }//FIN IN ARRAY
                } else {
                    $status = 'failed';
                    $message = 'Tamaño de archivo excedido';
                    // return $this->render('RecetasBundle:Default:registro.html.twig',array('status'=>$status,'message'=>$message));
                }//FIN SIZE
            } else {
                $status = 'failed';
                $message = 'File Error';
                $dir="public/img/no_user2.png";
                $receta->setFoto($dir);
                $em->persist($receta);
                $em->flush();                
            }//FIN INSTANCEOF


            // echo "<br>".$status;

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
        // $em = $this->getDoctrine()->getManager();
        
        /**************************EDITAR IMAGENES**********************************/
        $image = $this->getRequest()->files->get('img');
        $status = 'success';
            $uploadedURL='';
            $message='';
        // print_r($image);
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 2000000000)) {

                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        $em->persist($receta);
                        $em->flush();


                        $newName="receta".$receta->getId()."-".$receta->getSlug().".".$file_type;
                        // $newName="receta.jpg";
                        $dir="uploads/recetas/".$newName;
                        $photo = new Photo();
                        $photo->setFile($image);
                        $photo->upload("/recetas",$newName);
                        $receta->setFoto($dir);
                        $em->persist($receta);
                        $em->flush();
                   } else {
                        $status = 'failed';
                        $message = 'Tipo de archivo inválido.';
                        
                    }//FIN IN ARRAY
                } else {
                    $status = 'failed';
                    $message = 'Tamaño de archivo excedido';
                    
                }//FIN SIZE
            } else {
                // $status = 'failed';
                // $message = 'File Error';
                // $dir="public/img/no_user2.png";
                // $receta->setFoto($dir);
                // $em->persist($receta);
                // $em->flush();                
            }//FIN INSTANCEOF
        /**************************FIN EDITAR IMAGENES**********************************/
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
