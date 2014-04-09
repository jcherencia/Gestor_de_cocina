<?php

/* RecetasBundle:Default:nuevareceta.html.twig */
class __TwigTemplate_a9051b85ef5e70f69e5d41533c7a4995023694972b3d993cf3b890bac39ad146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t<link type='text/css' rel='stylesheet' href='../../public/css/bootstrap.css'>
\t<link type='text/css' rel='stylesheet' href='../../public/css/bootstrap-theme.css'>
\t<link type='text/css' rel='stylesheet' href='../../public/css/style.css'>
\t<link type='text/css' rel='stylesheet' href='../../public/css/notepad.css'>
\t<link type='text/css' rel='stylesheet' href='../../public/css/login.css'>
\t<link type='text/css' rel='stylesheet' href='../../public/css/menu.css'>
\t<link type='text/css' rel='stylesheet' href='../../public/css/admin.css'>
\t

\t<script type=\"text/javascript\" src=\"../../public/js/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"../../public/js/bootstrap.js\"></script>
\t<script type=\"text/javascript\" src=\"../../public/js/efectos.js\"></script>
\t<script type=\"text/javascript\" src=\"../../public/js/acciones.js\"></script>
\t
</head>
<body>
\t<div class='content'>
\t\t<div class='navbar navbar-default complement-1-b'>
\t\t\t<div class='container'> 
\t\t\t\t<div class='navbar-header'>
\t\t\t\t\t<button class='navbar-toggle' type='button', data-toggle='collapse', data-target='navbar-collapse'>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class='navbar-brand' href='#'> Gestor de cocina</a>
\t\t\t\t</div>
\t\t\t\t<div class='navbar-collapse collapse'>
\t\t\t\t\t<ul class='nav navbar-nav menu'>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"> Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li  class='active'>
\t\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("recetas");
        echo "\"> Recetas</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("centro_log");
        echo "\"> Centro Logístico</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("almacen");
        echo "\"> Almacén</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class='nav navbar-nav navbar-right menu-user'>
\t\t\t\t\t\t<li class='dropdown'>
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>  
\t\t\t\t\t\t\t\t<span>   Usuario 1</span>
\t\t\t\t\t\t\t\t<span class='caret caret-white'></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class='dropdown-menu complement-1-b'>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("perfil");
        echo "\"> 
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>
\t\t\t\t\t\t\t\t\t\t<span>   Perfil</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-off'></span>
\t\t\t\t\t\t\t\t\t\t<span>   Cerrar Sesión</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t<strong>Crear Recetas</strong>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form id=\"form-recetas\" method=\"post\" role=\"form\" class=\"form form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\"><input type=\"text\" name=\"nombre\" placeholder=\"Nombre de la receta..\" class=\"form-control\"></div></div><div class=\"form-group\"><label for=\"\" class=\"col-md-3 control-label\">Preparación</label><div class=\"col-md-6\"><input id=\"hide_descrip\" type=\"hidden\"><textarea id=\"descrip\" name=\"descripcion\" placeholder=\"Preparación de la receta...\" resizable=\"false\" class=\"form-control\"> </textarea></div></div><div class=\"form-group\"><label for=\"\" class=\"col-md-3 control-label\">Comensales</label><div class=\"col-md-2\"><input type=\"text\" name=\"comensales\" class=\"form-control\"></div></div><div class=\"form-group\"><label for=\"precio\" class=\"col-md-3 control-label\">Precio</label><div class=\"col-md-2\"><div class=\"input-group\"><input type=\"text\" name=\"precio\" class=\"form-control\"><span class=\"input-group-addon\"> €</span></div></div></div><div class=\"form-group\"><label for=\"\" class=\"col-md-3 control-label\">Ingredientes</label><div class=\"input-group col-md-4\"><select id=\"sel-ingred\" class=\"form-control form-control-first\"><option value=\"\">Aceite</option><option value=\"\">Arroz</option></select><span class=\"input-group-btn\"><button type=\"button\" onclick=\"agregarIngred();\" class=\"btn btn-primary complement-1-b pull-right\"><span class=\"glyphicon glyphicon-plus\"></span></button></span></div></div><div class=\"form-group\"><label for=\"\" class=\"col-md-3 control-label\"> </label><div class=\"col-md-6\"><div id=\"list_ingr\" class=\"col-md-9\"></div><input type=\"hidden\" name=\"ingredientes\" id=\"ingredientes\"></div></div><div class=\"form-group\"><div class=\"col-md-offset-2 col-md-10 btn-separated\"><button type=\"submit\" class=\"btn btn-primary complement-1-b\"><span class=\"glyphicon glyphicon-floppy-disk\"></span><span> Guardar</span></button><a href=\"/receta\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span><span>  Cancelar</span></a></div></div></form><div class=\"info\"></div></div></div></div></div>
\t</div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:nuevareceta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 54,  71 => 42,  65 => 39,  59 => 36,  53 => 33,  19 => 1,);
    }
}
