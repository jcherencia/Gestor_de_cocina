<?php

namespace Gestor_cocina\AlmacenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gestor_cocina\RecetasBundle\Util\Util;
use Gestor_cocina\AlmacenBundle\Entity\Productos;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gestor_cocina\RecetasBundle\Entity\Photo;

class FormProductosController extends Controller
{


	
    //Controladores formularios
    public function crear_productoAction()
    {
       
    	$campos= array();
        $peticion = $this->getRequest();
        $campos= $peticion->request->all();
        $producto = new Productos();
        $producto->setNombre($campos['nombre']);
        $producto->setSlug(Util::getSlug($campos['nombre']));
        $producto->setUnidadCompra($campos['und_compra']);
        $producto->setPrecio($campos['precio']);
        $producto->setUnidad($campos['unidad']);
        $producto->setStock($campos['stock']);
        $producto->setStockMin($campos['stock_min']);
        
        $em = $this->getDoctrine()->getManager();
        // $em->persist($producto);
        // $em->flush();

        $image = $this->getRequest()->files->get('img');
        $status = 'success';
            $uploadedURL='';
            $message='';
        print_r($image);
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 2000000000)) {

                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        $em->persist($producto);
                        $em->flush();


                        $newName="producto".$producto->getId()."-".$producto->getSlug().".".$file_type;
                        // $newName="receta.jpg";
                        $dir="uploads/productos/".$newName;
                        $photo = new Photo();
                        $photo->setFile($image);
                        $photo->upload("/productos",$newName);
                        $producto->setFoto($dir);
                        $em->persist($producto);
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
                $dir="public/img/no_image.png";
                $producto->setFoto($dir);
                $em->persist($producto);
                $em->flush();                
            }//FIN INSTANCEOF
       return $this->redirect($this->generateUrl('almacen')); 
    }
     public function editar_productoAction($producto)
    {
        $campos= array();
        $peticion = $this->getRequest();
        $campos= $peticion->request->all();
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('AlmacenBundle:Productos')->find($producto);
        $producto->setNombre($campos['nombre']);
        $producto->setSlug(Util::getSlug($campos['nombre']));
        $producto->setUnidadCompra($campos['und_compra']);
        $producto->setPrecio($campos['precio']);
        $producto->setUnidad($campos['unidad']);
        $producto->setStock($campos['stock']);
        $producto->setStockMin($campos['stock_min']);
       
         $image = $this->getRequest()->files->get('img');
        $status = 'success';
            $uploadedURL='';
            $message='';
        print_r($image);
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 2000000000)) {

                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        $em->persist($producto);
                        $em->flush();


                        $newName="producto".$producto->getId()."-".$producto->getSlug().".".$file_type;
                        // $newName="receta.jpg";
                        $dir="uploads/productos/".$newName;
                        $photo = new Photo();
                        $photo->setFile($image);
                        $photo->upload("/productos",$newName);
                        $producto->setFoto($dir);
                        $em->persist($producto);
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
                // $status = 'failed';
                // $message = 'File Error';
                // $dir="public/img/no_image.png";
                // $producto->setFoto($dir);
                // $em->persist($producto);
                // $em->flush();                
            }//FIN INSTANCEOF
       
        $this->recalculaPrecio($producto);
        return $this->redirect($this->generateUrl('almacen'));
    }
     public function borrar_productoAction($producto)
   {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('AlmacenBundle:Productos')->findOneBySlug($producto);
        $em->remove($producto);
        $em->flush();
        return $this->redirect($this->generateUrl('almacen')); 
    }
    public function recalculaPrecio($producto)
    {
        $ingre_prod= $this->findByProducto($producto);
        foreach ($ingre_prod as $key => $ingr) {
           $receta= $ingr->getReceta();
           $producto=$ingr->getProducto();
           $precio_nuevo=$this->calcularPrecio($producto,$ingr->getCantidad());
           $ingre_rec=$this->findByReceta($receta);
           foreach ($ingre_rec as $key => $ingre) {
              if($ingre->getProducto() != $producto){
                               $precio_nuevo+=$this->calcularPrecio($ingre->getProducto(),$ingre->getCantidad());
                              
              }
           }
        $receta->setPrecio($precio_nuevo);

        $em = $this->getDoctrine()->getManager();
        $em->persist($receta);
        $em->flush();
        }
   }
   //**********************************************************************************//
   //*******************************************************************//
   //**********************************************************************************//
   public function calcularPrecio($producto,$cantidad)
   {
        
       return ($cantidad*$producto->getPrecio())/ $producto->getUnidadCompra();
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
   public function findByProducto($producto)
   {
       $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'I')
           ->add('from', 'RecetasBundle:Ingredientes I')
           ->add('where', 'I.producto = :producto')
           ->setParameter('producto', $producto->getId());
        $query = $qb->getQuery();
        return $query->getResult();
   }
}
