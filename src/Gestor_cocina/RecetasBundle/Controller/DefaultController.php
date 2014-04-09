<?php

namespace Gestor_cocina\RecetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecetasBundle:Default:index.html.twig');
    }
    public function recetasAction()
    {
    	return $this->render('RecetasBundle:Default:recetas.html.twig');
    }
    public function perfilAction()
    {
    	return $this->render('RecetasBundle:Default:perfil.html.twig');
    }
    public function nueva_recetaAction()
    {
        return $this->render('RecetasBundle:Default:nueva_receta.html.twig');
    }
}
