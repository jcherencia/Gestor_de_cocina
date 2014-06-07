<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gestor_cocina\RecetasBundle\Entity\Usuarios;
use Symfony\Component\Security\Core\SecurityContext;
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
        $user->setSalt(md5(time()));
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        // echo "string";
        return $this->redirect($this->generateUrl('login')); 
    }
    
}
