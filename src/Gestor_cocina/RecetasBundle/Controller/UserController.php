<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gestor_cocina\RecetasBundle\Entity\Usuarios;
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
        return $this->render('RecetasBundle:Default:perfil.html.twig');
    }
     public function crear_usuarioAction()
    {
      	$campos= array();
        $peticion = $this->getRequest();
        $campos= $peticion->request->all();
        // print_r($campos);
        $user= new Usuarios();
        $user->setNombre($campos['nombre']);
        $user->setApellidos($campos['apellidos']);
        $user->setUsername($campos['usuario']);
        $user->setPassword($campos['pass']) ." - ";
        $user->setEmail($campos['email']);
        $user->setFechaRegistro(new \DateTime("now"));
        $user->setActivo(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return $this->redirect($this->generateUrl('login')); 
    }
    
}
