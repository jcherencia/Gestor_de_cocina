<?php

/* RecetasBundle:Default:index.html.twig */
class __TwigTemplate_62a8e73f167726bd627d580c009ad92bf8992f4a9f9be1661c9ccb585195e205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio - Gestor de cocina ";
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 5
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/notepad.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t\t<div class='content'>
\t\t<div class='navbar navbar-default complement-1-b'>
\t\t\t<div class='container'> 
\t\t\t\t<div class='navbar-header'>
\t\t\t\t\t<button class='navbar-toggle' type='button', data-toggle='collapse', data-target='.navbar-collapse'>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class='navbar-brand' href='#'> Gestor de cocina</a>
\t\t\t\t</div>
\t\t\t\t<div class='navbar-collapse collapse'>
\t\t\t\t\t<ul class='nav navbar-nav menu'>
\t\t\t\t\t\t<li class='active'>
\t\t\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"> Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 26
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 27
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\">Mis Recetas</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("centro_log");
            echo "\"> Centro Logístico</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\"> Almacén</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right menu-user\">
        \t\t\t\t";
        // line 42
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 43
            echo "\t\t\t\t\t\t\t\t<li class='dropdown'>
\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>  
\t\t\t\t\t\t\t\t\t\t<span>Usuario: <strong>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
            echo "</strong></span>
\t\t\t\t\t\t\t\t\t\t<span class='caret caret-white'></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class='dropdown-menu complement-1-b'>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("perfil");
            echo "\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Perfil</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-off'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Cerrar Sesión</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t\t\t\t<li><a class=\"underline\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a></li>
\t\t        \t\t\t\t<li><a href=\"\">|</a></li>
\t\t        \t\t\t\t<li><a class=\"underline\" href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("registro");
            echo "\">Registro</a></li>
\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t
\t\t<div class='container'>
\t\t\t<div class='row'>
\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t<div class='well note taupe'>
\t\t\t\t\t\t<img class='fondo' src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/photo/chef2.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t\t\t\t<h1 class='title'> Gestor de cocina</h1>
\t\t\t\t\t\t\t\t<h2 class='subtitle'> Introduce el nombre de tu receta</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='row search'>
\t\t\t\t\t\t\t<form class='col-md-offset-2 col-md-8'>
\t\t\t\t\t\t\t\t<div class=\"input-group search\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary-dark\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t      
\t\t\t<div class='row'>
\t\t\t\t<div class='col-md-6'>
\t\t\t\t\t<section class='notepad'>
\t\t\t\t\t\t<div class='notepad-heading complement-1-b'>
\t\t\t\t\t\t\t<h1> Añadidas recientemente</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p> The a essence of the independent mind lies not in what it thinks, but in how it thinks.The essence of the independent mind lies not in what it thinks, but in how it thinks.The essence of the independent mind lies not in what it thinks, but in how it thinks.</p>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t\t<div class='col-md-6'>
\t\t\t\t\t<section class='notepad'>
\t\t\t\t\t\t<div class='notepad-heading complement-1-b'>
\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t<!--span.glyphicon.glyphicon-star-->
\t\t\t\t\t\t\t\t<span>  Mis recetas favoritas</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td> 1#</td>
\t\t\t\t\t\t\t\t<td> Receta favorita 1</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td> 2#</td>
\t\t\t\t\t\t\t\t<td> Receta favorita 2</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div><!--end row-->
\t\t</div><!--end container-->
\t</div><!--end content-->
\t";
    }

    // line 135
    public function block_javascript($context, array $blocks = array())
    {
        // line 136
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 138,  237 => 137,  232 => 136,  229 => 135,  168 => 78,  157 => 69,  152 => 67,  146 => 65,  135 => 57,  126 => 51,  118 => 46,  113 => 43,  111 => 42,  107 => 40,  101 => 37,  94 => 33,  91 => 32,  88 => 31,  82 => 28,  79 => 27,  77 => 26,  72 => 24,  56 => 10,  53 => 9,  46 => 6,  42 => 5,  37 => 4,  31 => 3,);
    }
}
