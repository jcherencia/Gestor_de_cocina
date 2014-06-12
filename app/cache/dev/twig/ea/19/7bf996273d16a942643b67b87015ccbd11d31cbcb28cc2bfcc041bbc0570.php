<?php

/* RecetasBundle:Default:nueva_receta.html.twig */
class __TwigTemplate_ea197bf996273d16a942643b67b87015ccbd11d31cbcb28cc2bfcc041bbc0570 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Recetas - Gestor de cocina ";
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 4
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/jasny-bootstrap.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class='content'>
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
        // line 23
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"> Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 26
            echo "\t\t\t\t\t\t<li  class='active'>
\t\t\t\t\t\t\t<a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\"> Mis Recetas</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t\t";
        // line 31
        echo "\t\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("centro_log");
            echo "\"> Centro Logístico</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\"> Almacén</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<ul class='nav navbar-nav navbar-right menu-user'>
\t\t\t\t\t\t<li class='dropdown'>
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>  
\t\t\t\t\t\t\t\t<span>Usuario: <strong>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "</strong></span>
\t\t\t\t\t\t\t\t<span class='caret caret-white'></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class='dropdown-menu complement-1-b'>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("perfil");
        echo "\"> 
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>
\t\t\t\t\t\t\t\t\t\t<span>   Perfil</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
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
\t\t\t";
        // line 70
        if (array_key_exists("receta_edit", $context)) {
            // line 71
            echo "\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t<strong>Editar Recetas</strong>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<form action =\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mod_receta", array("receta" => $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : $this->getContext($context, "receta_edit")), "slug"))), "html", null, true);
            echo "\" id=\"form-recetas\" method=\"post\" role=\"form\" class=\"form form-horizontal\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"receta_id\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : $this->getContext($context, "receta_edit")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nombre\" placeholder=\"Nombre de la receta..\" class=\"form-control\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : $this->getContext($context, "receta_edit")), "nombre"), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Preparación</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<input id=\"hide_descrip\" type=\"hidden\">
\t\t\t\t\t\t\t\t\t<textarea id=\"descrip\" name=\"descripcion\" placeholder=\"Preparación de la receta...\" resizable=\"false\" class=\"form-control\" value=\"\"> ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : $this->getContext($context, "receta_edit")), "descripcion"), "html", null, true);
            echo "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Comensales</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"comensales\" class=\"form-control\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : $this->getContext($context, "receta_edit")), "comensales"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-3 control-label\">Precio</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"precio\" id=\"precioTotal\" class=\"form-control precioTotal\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : $this->getContext($context, "receta_edit")), "precio"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> €</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"precio\"  class=\"precioTotal\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : $this->getContext($context, "receta_edit")), "precio"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3\"></label>
\t\t\t\t\t\t\t\t<button id=\"add_ing\" type=\"button\" class=\"col-md-3 btn btn-primary complement-1-b\" onClick=\"crearListadoIng('list_ingre')\" data-url=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("listar_ing");
            echo "\">Añadir ingredientes</button>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-8\">Ingrediente</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Cantidad</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\"></th>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody id=\"listado_ingr\">

\t\t\t\t\t\t\t\t\t\t\t";
            // line 125
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")));
            foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
                if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "receta"), "id") == $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : $this->getContext($context, "receta_edit")), "id"))) {
                    // line 126
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"ingr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                    echo " ingredientes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nombre\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-undCompra=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "unidadCompra"), "html", null, true);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-precio=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "precio"), "html", null, true);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-unidad=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "unidad"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "nombre"), "html", null, true);
                    echo "<input type=\"hidden\" name=\"id_ing[";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                    echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"cantidad_";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                    echo "\" name=\"cantidad[";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                    echo "]\" class=\"form-control input-sm\" onchange=\"modCantIng(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                    echo ")\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "cantidad"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "unidad"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"eliminarIng(";
                    // line 137
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                    echo ")\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</table>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\"> </label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div id=\"list_ingr\" class=\"col-md-9\"></div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ingredientes\" id=\"ingredientes\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-offset-2 col-md-10 btn-separated\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-disk\"></span>
\t\t\t\t\t\t\t\t\t\t<span> Guardar</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 165
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t<span>  Cancelar</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"info\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 177
            echo "\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t<strong>Crear Recetas</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
            // line 183
            echo "\t\t\t\t\t\t<form id=\"form-recetas\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            echo $this->env->getExtension('routing')->getPath("crear_receta");
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Foto</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_user2.png"), "html", null, true);
            echo "\"  >
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
\t\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t    <span class=\"btn btn-primary btn-file\"><span class=\"fileinput-new\">Selecciona imagen</span>
\t\t\t\t\t\t\t\t\t    <span class=\"fileinput-exists\">Cambiar foto</span>
\t\t\t\t\t\t\t\t\t    <input type=\"file\" name=\"img\"/> </span>
\t\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Eliminar</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 201
            if (array_key_exists("message", $context)) {
                // line 202
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 203
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 206
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 208
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nombre\" placeholder=\"Nombre de la receta..\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Preparación</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<input id=\"hide_descrip\" type=\"hidden\">
\t\t\t\t\t\t\t\t\t<textarea id=\"descrip\" name=\"descripcion\" placeholder=\"Preparación de la receta...\" resizable=\"false\" class=\"form-control\"> </textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Comensales</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"comensales\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-3 control-label\">Precio</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"precioTotal\" class=\"form-control precioTotal\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> €</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"precio\"  class=\"precioTotal\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3\"></label>
\t\t\t\t\t\t\t\t<button id=\"add_ing\" type=\"button\" class=\"col-md-3 btn btn-primary complement-1-b\" onClick=\"crearListadoIng('list_ingre')\" data-url=\"";
            // line 239
            echo $this->env->getExtension('routing')->getPath("listar_ing");
            echo "\">Añadir ingredientes</button>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-8\">Ingrediente</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Cantidad</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\"></th>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody id=\"listado_ingr\"></tbody>
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</table>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\"> </label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div id=\"list_ingr\" class=\"col-md-9\"></div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ingredientes\" id=\"ingredientes\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-offset-2 col-md-10 btn-separated\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-disk\"></span>
\t\t\t\t\t\t\t\t\t\t<span> Guardar</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 271
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t<span>  Cancelar</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"info\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 281
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div> <!--end container-->
\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"list_ingre\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header complement-1-b\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Listado de ingredientes</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"table-container\">
\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<th class=\"col-md-1\"></th>
\t\t\t\t\t\t\t\t<th class=\"col-md-6\">Nombre</th>
\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Stock</th>
\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Precio/Unid</th>

\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 304
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 305
            echo "\t\t\t\t\t\t\t\t<tr class=\"ing_seleccionable\" id=\"ing_seleccionable_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"form-control\" data-value=\"";
            // line 306
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"info_nombre\">";
            // line 307
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "stock"), "html", null, true);
            echo "  <span class=\"unidad\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "</span></td>
\t\t\t\t\t\t\t\t\t<td><span class=\"precio\">";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "precio"), "html", null, true);
            echo "</span> € / <span class=\"und_comp\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidadCompra"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"anadirIngre()\">Guardar</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!--fin modal-->
</div>
";
    }

    // line 328
    public function block_javascript($context, array $blocks = array())
    {
        // line 329
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/validate.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:nueva_receta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 334,  578 => 333,  574 => 332,  570 => 331,  566 => 330,  561 => 329,  558 => 328,  540 => 313,  518 => 309,  512 => 308,  508 => 307,  504 => 306,  499 => 305,  482 => 304,  457 => 281,  444 => 271,  409 => 239,  376 => 208,  373 => 206,  367 => 203,  364 => 202,  362 => 201,  347 => 189,  337 => 183,  330 => 177,  316 => 165,  293 => 144,  279 => 137,  273 => 134,  263 => 133,  251 => 130,  247 => 129,  243 => 128,  237 => 126,  232 => 125,  215 => 111,  206 => 105,  201 => 103,  191 => 96,  182 => 90,  171 => 82,  164 => 78,  160 => 77,  152 => 71,  150 => 70,  133 => 56,  124 => 50,  116 => 45,  109 => 40,  103 => 37,  96 => 33,  93 => 32,  90 => 31,  88 => 30,  82 => 27,  79 => 26,  77 => 25,  72 => 23,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
