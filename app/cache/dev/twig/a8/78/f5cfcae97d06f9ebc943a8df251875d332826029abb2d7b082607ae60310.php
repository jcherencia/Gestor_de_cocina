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
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap-wizard.css"), "html", null, true);
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
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("recetas");
        echo "\"> Recetas</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("centro_log");
        echo "\"> Centro Logístico</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class='active'>
\t\t\t\t\t\t\t<a href=\"";
        // line 31
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
        // line 43
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

\t\t<div class=\"container\">\t
\t\t\t<div class=\"row row-grid\">
\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t";
        // line 64
        if ((array_key_exists("producto_edit", $context) && ((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")) != null))) {
            // line 65
            echo "\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t\t<strong>Editar Producto</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_producto", array("producto" => $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "slug"))), "html", null, true);
            echo "\" id=\"form-productos\" method=\"post\" role=\"form\" class=\"form form-horizontal\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del producto..\" 
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "nombre"), "html", null, true);
            echo "\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"unit\" class=\"col-md-4 control-label\">Unidades</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<select id=\"unit\" id=\"unidad\" name=\"unidad\" class=\"form-control\" data-value=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidad"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Selecciona..</option>
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
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidadCompra"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 96
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
            // line 104
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
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "stock"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 115
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
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "stockMin"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidad"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 129
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<figure class=\"col-md-10\">
\t \t\t\t\t\t\t\t\t\t<img src=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_image.png"), "html", null, true);
            echo "\">
\t \t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div id=\"info\" class=\"col-md-10 alert\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\" onclick=\"\">Guardar</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-href=\"";
            // line 141
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 150
            echo "\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t\t<strong>Crear Producto</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 156
            echo $this->env->getExtension('routing')->getPath("crear_producto");
            echo "\" id=\"form-productos\" method=\"post\" role=\"form\" class=\"form form-horizontal\">
\t\t\t\t\t\t\t\t\t
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
            // line 214
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<figure class=\"col-md-10\">
\t \t\t\t\t\t\t\t\t\t<img src=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_image.png"), "html", null, true);
            echo "\">
\t \t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div id=\"info\" class=\"col-md-10 alert\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\" onclick=\"\">Guardar</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-href=\"";
            // line 226
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t</div><!--fin row grid-->

\t\t\t</div>
\t\t</div>


";
    }

    // line 242
    public function block_javascript($context, array $blocks = array())
    {
        // line 243
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap-wizard.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 248
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
        return array (  385 => 248,  381 => 247,  377 => 246,  373 => 245,  369 => 244,  364 => 243,  361 => 242,  351 => 235,  339 => 226,  328 => 218,  322 => 214,  262 => 156,  254 => 150,  242 => 141,  231 => 133,  225 => 129,  218 => 124,  214 => 123,  203 => 115,  199 => 114,  186 => 104,  175 => 96,  171 => 95,  155 => 82,  146 => 76,  138 => 71,  130 => 65,  128 => 64,  104 => 43,  89 => 31,  83 => 28,  77 => 25,  71 => 22,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
