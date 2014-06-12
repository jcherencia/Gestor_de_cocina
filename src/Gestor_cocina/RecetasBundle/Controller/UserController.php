<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Gestor_cocina\RecetasBundle\Entity\Usuarios;
use Symfony\Component\Security\Core\SecurityContext;

use Gestor_cocina\RecetasBundle\Entity\Photo;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecetasBundle:Default:login.html.twig');
    }
    public function registroAction()
    {
        return $this->render('RecetasBundle:Default:registro.html.twig');
    }
    public function perfilAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('RecetasBundle:Usuarios')->find($usr);

        return $this->render('RecetasBundle:Default:perfil.html.twig', array('usuario' => $usuario));
    }
     public function crear_usuarioAction()
    {
      	$campos= array();
        $peticion = $this->getRequest();
        $campos= $peticion->request->all();
       //  // print_r($campos);
        $user= new Usuarios();
        $user->setNombre($campos['nombre']);
        $user->setApellidos($campos['apellidos']);
        $user->setUsername($campos['usuario']);
        $user->setPassword($campos['pass']);
        $user->setEmail($campos['email']);
        $user->setFechaRegistro(new \DateTime("now"));
        $user->setActivo(false);
        $user->setRoles("ROLE_USER");
        $user->setSalt('');
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        //***********************SUBIDA DE ARCHIVOS*********************************//
        $image = $this->getRequest()->files->get('img');
        $status = 'success';
            $uploadedURL='';
            $message='';
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 2000000000)) {

                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        $em->persist($user);
                        $em->flush();


                        $newName="perfil".$user->getId()."-".$user->getUsername().".".$file_type;
                        $dir="uploads/perfil/".$newName;
                        $photo = new Photo();
                        $photo->setFile($image);
                        $photo->upload("/perfil",$newName);
                        $user->setFoto($dir);
                        $em->persist($user);
                        $em->flush();
                   } else {
                        $status = 'failed';
                        $message = 'Tipo de archivo inválido.';
                        return $this->render('RecetasBundle:Default:registro.html.twig',array('status'=>$status,'message'=>$message));
                    }//FIN IN ARRAY
                } else {
                    $status = 'failed';
                    $message = 'Tamaño de archivo excedido';

                    return $this->render('RecetasBundle:Default:registro.html.twig',array('status'=>$status,'message'=>$message));
                }//FIN SIZE
            } else {
                // $status = 'failed';
                // $message = 'File Error';
                $dir="public/img/no_user2.png";
                $user->setFoto($dir);
                $em->persist($user);
                $em->flush();                
            }//FIN INSTANCEOF

        
        

        return $this->redirect($this->generateUrl('login'));
    }
    
    
}
