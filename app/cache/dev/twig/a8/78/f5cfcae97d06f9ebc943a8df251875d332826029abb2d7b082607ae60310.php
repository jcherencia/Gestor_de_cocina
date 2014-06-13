<?php

/* AlmacenBundle:Default:nuevo_producto.html.twig */
class __TwigTemplate_a878f5cfcae97d06f9ebc943a8df251875d332826029abb2d7b082607ae60310 extends Twig_Template
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
        echo "Centro Logístico - Gestor de cocina ";
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
        echo "<div class='navbar navbar-default complement-1-b'>
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
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"> Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 24
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 25
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\"> Mis Recetas</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("centro_log");
            echo "\"> Centro Logístico</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<li  class='active'>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\"> Almacén</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<ul class='nav navbar-nav navbar-right menu-user'>
\t\t\t\t\t";
        // line 41
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 42
            echo "\t\t\t\t\t\t\t\t<li class='dropdown'>
\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>  
\t\t\t\t\t\t\t\t\t\t<span>Usuario: <strong>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
            echo "</strong></span>
\t\t\t\t\t\t\t\t\t\t<span class='caret caret-white'></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class='dropdown-menu complement-1-b'>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("perfil");
            echo "\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Perfil</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 56
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
            // line 64
            echo "\t\t\t\t\t\t\t\t<li><a class=\"underline\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a></li>
\t\t        \t\t\t\t<li><a href=\"\">|</a></li>
\t\t        \t\t\t\t<li><a class=\"underline\" href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("registro");
            echo "\">Registro</a></li>
\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">\t
\t\t\t<div class=\"row row-grid\">
\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t";
        // line 76
        if ((array_key_exists("producto_edit", $context) && ((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")) != null))) {
            // line 77
            echo "\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t\t<strong>Editar Producto</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<form id=\"form-productos\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_producto", array("producto" => $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "id"))), "html", null, true);
            echo "\" id=\"form-productos\" >
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del producto..\" 
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "nombre"), "html", null, true);
            echo "\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"unit\" class=\"col-md-4 control-label\">Unidades</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<select id=\"unit\" id=\"unidad\" name=\"unidad\" class=\"form-control\" data-value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidad"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Selecciona..</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"kg\">kg</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"gr\">gr</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"L\">l</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ml\">ml</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"und\">unid</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"unid_compra\" class=\"col-md-4 control-label\">Unidad de compra</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"und_compra\" name=\"und_compra\" class=\"form-control\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidadCompra"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidad"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-4 control-label\">Precio / Unidad de compra</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"precio\" name=\"precio\" class=\"form-control\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "precio"), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> €</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Stock</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"stock\" name=\"stock\" class=\"form-control\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "stock"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidad"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Stock mínimo</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"stock_min\" name=\"stock_min\" class=\"form-control\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "stockMin"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidad"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 142
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 147
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "foto")), "html", null, true);
            echo "\"  >
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t\t\t\t    <span class=\"btn btn-primary btn-file\"><span class=\"fileinput-new\">Selecciona imagen</span>
\t\t\t\t\t\t\t\t\t\t\t\t    <span class=\"fileinput-exists\">Cambiar foto</span>
\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"file\" name=\"img\"/> </span>
\t\t\t\t\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Eliminar</a>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 162
            if (array_key_exists("message", $context)) {
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 164
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 167
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"info\" class=\"col-md-10 alert\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>";
            // line 171
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\" onclick=\"\">Guardar</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-href=\"";
            // line 174
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 183
            echo "\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t\t<strong>Crear Producto</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<form id=\"form-productos\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            // line 189
            echo $this->env->getExtension('routing')->getPath("crear_producto");
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t";
            // line 192
            echo "\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            echo $this->env->getExtension('routing')->getPath("crear_producto");
            echo "\">

\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del producto..\" 
\t\t\t\t\t\t\t\t\t\t\tvalue class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"unit\" class=\"col-md-4 control-label\">Unidades</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<select id=\"unit\" id=\"unidad\" name=\"unidad\" class=\"form-control\" data-validate=\"validateNull\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Selecciona..</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"kg\">kg</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"gr\">gr</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"L\">l</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ml\">ml</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"und\">unid</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"unid_compra\" class=\"col-md-4 control-label\">Unidad de compra</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"und_compra\" name=\"und_compra\" class=\"form-control\" data-validate=\"validateNum\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-4 control-label\">Precio / Unidad de compra</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"precio\" name=\"precio\" value class=\"form-control\" data-validate=\"validateNum\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> €</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Stock</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"stock\" name=\"stock\" value class=\"form-control\" data-validate=\"validateNum\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Stock mínimo</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"stock_min\" name=\"stock_min\" value class=\"form-control\" data-validate=\"validateNum\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 251
            echo "
\t\t\t\t\t\t\t\t</div> ";
            // line 253
            echo "\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 256
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_user2.png"), "html", null, true);
            echo "\"  >
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t\t\t\t    <span class=\"btn btn-primary btn-file\"><span class=\"fileinput-new\">Selecciona imagen</span>
\t\t\t\t\t\t\t\t\t\t\t\t    <span class=\"fileinput-exists\">Cambiar foto</span>
\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"file\" name=\"img\"/> </span>
\t\t\t\t\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Eliminar</a>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 271
            if (array_key_exists("message", $context)) {
                // line 272
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 273
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 276
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"info\" class=\"col-md-10 alert\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>";
            // line 280
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\" onclick=\"\">Guardar</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-href=\"";
            // line 283
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 292
        echo "\t\t\t\t</div><!--fin row grid-->

\t\t\t</div>
\t\t</div>


";
    }

    // line 299
    public function block_javascript($context, array $blocks = array())
    {
        // line 300
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/validate.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "AlmacenBundle:Default:nuevo_producto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 305,  490 => 304,  486 => 303,  482 => 302,  478 => 301,  473 => 300,  470 => 299,  460 => 292,  448 => 283,  438 => 276,  432 => 273,  429 => 272,  412 => 259,  403 => 253,  400 => 251,  338 => 192,  333 => 189,  325 => 183,  313 => 174,  308 => 171,  303 => 167,  297 => 164,  277 => 150,  272 => 147,  266 => 142,  259 => 137,  244 => 128,  216 => 109,  195 => 94,  186 => 88,  178 => 83,  170 => 77,  300 => 153,  296 => 152,  292 => 162,  287 => 150,  284 => 149,  256 => 130,  249 => 126,  239 => 121,  212 => 108,  207 => 107,  153 => 66,  127 => 50,  114 => 42,  90 => 30,  76 => 24,  81 => 26,  70 => 9,  23 => 1,  906 => 552,  902 => 551,  898 => 550,  894 => 549,  889 => 548,  886 => 547,  868 => 533,  825 => 493,  821 => 492,  817 => 490,  783 => 457,  773 => 453,  764 => 452,  760 => 451,  709 => 402,  700 => 398,  683 => 385,  677 => 384,  673 => 382,  669 => 380,  666 => 379,  662 => 378,  658 => 377,  654 => 376,  650 => 375,  646 => 374,  642 => 373,  637 => 372,  632 => 371,  595 => 336,  586 => 333,  571 => 326,  563 => 323,  556 => 319,  551 => 317,  542 => 315,  536 => 313,  530 => 312,  492 => 276,  483 => 273,  464 => 263,  452 => 257,  443 => 280,  431 => 252,  369 => 206,  361 => 203,  354 => 199,  349 => 197,  340 => 195,  334 => 193,  328 => 192,  282 => 148,  255 => 136,  245 => 134,  228 => 129,  223 => 127,  218 => 125,  137 => 60,  77 => 25,  53 => 8,  480 => 162,  474 => 269,  469 => 158,  461 => 155,  457 => 259,  453 => 151,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 271,  423 => 142,  413 => 134,  409 => 132,  407 => 256,  402 => 130,  398 => 129,  393 => 216,  387 => 122,  384 => 213,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 163,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 124,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 141,  269 => 94,  254 => 92,  243 => 88,  240 => 127,  238 => 130,  235 => 74,  230 => 117,  227 => 117,  224 => 71,  221 => 77,  219 => 113,  217 => 75,  208 => 68,  204 => 122,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 45,  102 => 36,  71 => 22,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 18,  89 => 17,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 25,  46 => 5,  27 => 4,  44 => 21,  31 => 2,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 68,  156 => 66,  151 => 63,  142 => 62,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 7,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 3,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 58,  123 => 47,  120 => 50,  115 => 43,  111 => 44,  108 => 39,  101 => 32,  98 => 36,  96 => 35,  83 => 28,  74 => 10,  66 => 8,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 16,  35 => 13,  32 => 4,  29 => 5,  209 => 123,  203 => 105,  199 => 104,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 76,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 64,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 41,  109 => 34,  106 => 36,  103 => 39,  99 => 31,  95 => 32,  92 => 31,  86 => 16,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 6,  54 => 10,  51 => 5,  48 => 13,  45 => 17,  42 => 4,  39 => 15,  36 => 5,  33 => 6,  30 => 7,);
    }
}
