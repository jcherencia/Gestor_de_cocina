<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecetasBundle:Default:perfil.html.twig');
    }
    
}
