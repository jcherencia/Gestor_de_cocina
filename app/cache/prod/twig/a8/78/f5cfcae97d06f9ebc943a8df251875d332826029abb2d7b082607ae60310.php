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
        echo "

\t\t<div class=\"container\">\t
\t\t\t<div class=\"row row-grid\">
\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t";
        // line 14
        if ((array_key_exists("producto_edit", $context) && ((isset($context["producto_edit"]) ? $context["producto_edit"] : null) != null))) {
            // line 15
            echo "\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t\t<strong>Editar Producto</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<form id=\"form-productos\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_producto", array("producto" => $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "id"))), "html", null, true);
            echo "\" id=\"form-productos\" >
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del producto..\" 
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "nombre"), "html", null, true);
            echo "\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"unit\" class=\"col-md-4 control-label\">Unidades</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<select id=\"unit\" id=\"unidad\" name=\"unidad\" class=\"form-control\" data-value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "unidad"), "html", null, true);
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
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "unidadCompra"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "unidad"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-4 control-label\">Precio / Unidad de compra</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"precio\" name=\"precio\" class=\"form-control\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "precio"), "html", null, true);
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
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "stock"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "unidad"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Stock mínimo</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"stock_min\" name=\"stock_min\" class=\"form-control\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "stockMin"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "unidad"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 80
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : null), "foto")), "html", null, true);
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
            // line 100
            if (array_key_exists("message", $context)) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 102
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"info\" class=\"col-md-10 alert\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>";
            // line 109
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\" onclick=\"\">Guardar</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-href=\"";
            // line 112
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
            // line 121
            echo "\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t\t<strong>Crear Producto</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<form id=\"form-productos\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            // line 127
            echo $this->env->getExtension('routing')->getPath("crear_producto");
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t";
            // line 130
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
            // line 189
            echo "
\t\t\t\t\t\t\t\t</div> ";
            // line 191
            echo "\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
            // line 197
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
            // line 209
            if (array_key_exists("message", $context)) {
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 211
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 214
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"info\" class=\"col-md-10 alert\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>";
            // line 218
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\" onclick=\"\">Guardar</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-href=\"";
            // line 221
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
        // line 230
        echo "\t\t\t\t</div><!--fin row grid-->

\t\t\t</div>
\t\t</div>


";
    }

    // line 237
    public function block_javascript($context, array $blocks = array())
    {
        // line 238
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 243
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
        return array (  389 => 243,  385 => 242,  377 => 240,  373 => 239,  338 => 218,  333 => 214,  327 => 211,  324 => 210,  307 => 197,  302 => 194,  295 => 189,  233 => 130,  228 => 127,  198 => 105,  139 => 66,  90 => 32,  81 => 26,  65 => 15,  213 => 86,  191 => 80,  188 => 79,  172 => 88,  155 => 58,  148 => 54,  129 => 45,  118 => 41,  84 => 23,  364 => 218,  359 => 217,  356 => 216,  339 => 205,  334 => 202,  300 => 169,  281 => 164,  277 => 163,  253 => 141,  242 => 131,  234 => 124,  200 => 82,  178 => 71,  120 => 53,  110 => 49,  76 => 18,  97 => 41,  77 => 28,  260 => 103,  256 => 102,  251 => 101,  248 => 100,  236 => 95,  231 => 93,  225 => 91,  205 => 77,  192 => 102,  190 => 68,  186 => 66,  180 => 63,  167 => 85,  160 => 53,  157 => 52,  150 => 74,  146 => 47,  134 => 42,  126 => 38,  74 => 9,  70 => 15,  34 => 6,  1145 => 631,  1141 => 630,  1137 => 629,  1133 => 628,  1129 => 627,  1125 => 626,  1121 => 625,  1116 => 624,  1113 => 623,  1095 => 609,  1063 => 580,  1045 => 565,  1041 => 564,  1037 => 562,  1003 => 529,  993 => 525,  984 => 524,  980 => 523,  941 => 486,  939 => 485,  937 => 484,  935 => 483,  933 => 482,  931 => 481,  921 => 472,  916 => 468,  907 => 464,  896 => 458,  892 => 457,  886 => 454,  881 => 453,  876 => 452,  862 => 441,  858 => 440,  854 => 439,  850 => 438,  834 => 424,  831 => 418,  829 => 417,  827 => 416,  825 => 415,  823 => 414,  821 => 413,  819 => 412,  814 => 408,  805 => 404,  799 => 402,  793 => 398,  787 => 397,  776 => 392,  773 => 391,  764 => 387,  756 => 384,  753 => 383,  750 => 382,  741 => 378,  733 => 375,  730 => 374,  727 => 373,  717 => 369,  715 => 368,  712 => 367,  708 => 366,  704 => 364,  701 => 363,  695 => 362,  691 => 360,  687 => 358,  683 => 356,  679 => 354,  676 => 353,  672 => 352,  668 => 351,  664 => 350,  660 => 349,  656 => 348,  652 => 347,  647 => 346,  642 => 345,  637 => 342,  633 => 340,  631 => 339,  594 => 304,  585 => 301,  576 => 297,  569 => 292,  566 => 290,  556 => 285,  548 => 282,  540 => 279,  537 => 278,  535 => 277,  528 => 275,  524 => 274,  519 => 272,  506 => 270,  500 => 268,  494 => 267,  456 => 231,  447 => 228,  438 => 224,  428 => 218,  420 => 215,  416 => 214,  411 => 212,  396 => 208,  390 => 207,  352 => 171,  343 => 221,  328 => 161,  320 => 158,  308 => 154,  303 => 152,  290 => 165,  284 => 148,  232 => 103,  223 => 99,  206 => 93,  197 => 72,  185 => 86,  175 => 83,  165 => 79,  161 => 80,  127 => 71,  53 => 8,  37 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 210,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 241,  379 => 119,  374 => 116,  368 => 238,  365 => 237,  362 => 110,  360 => 109,  355 => 230,  341 => 105,  337 => 103,  322 => 209,  314 => 99,  312 => 155,  309 => 97,  305 => 95,  298 => 191,  294 => 90,  285 => 89,  283 => 88,  278 => 147,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 121,  214 => 83,  177 => 65,  169 => 67,  140 => 55,  132 => 51,  128 => 49,  111 => 47,  107 => 46,  61 => 10,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 87,  208 => 112,  204 => 83,  179 => 69,  159 => 61,  143 => 56,  135 => 65,  131 => 72,  119 => 42,  108 => 36,  102 => 33,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  47 => 7,  38 => 6,  94 => 40,  89 => 20,  85 => 34,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 6,  29 => 3,  87 => 25,  72 => 16,  55 => 5,  21 => 2,  26 => 6,  98 => 32,  93 => 28,  88 => 16,  78 => 10,  46 => 5,  27 => 4,  40 => 15,  44 => 12,  35 => 5,  31 => 2,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 81,  183 => 82,  171 => 58,  166 => 71,  163 => 54,  158 => 67,  156 => 62,  151 => 77,  142 => 45,  138 => 49,  136 => 74,  123 => 37,  121 => 36,  117 => 69,  115 => 51,  105 => 29,  101 => 47,  91 => 17,  69 => 25,  66 => 7,  62 => 23,  49 => 19,  24 => 1,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 85,  203 => 109,  199 => 67,  193 => 73,  189 => 101,  187 => 100,  182 => 66,  176 => 72,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 75,  149 => 60,  147 => 58,  144 => 57,  141 => 76,  133 => 55,  130 => 54,  125 => 44,  122 => 55,  116 => 41,  112 => 42,  109 => 34,  106 => 35,  103 => 32,  99 => 31,  95 => 46,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 21,  64 => 11,  60 => 13,  57 => 11,  54 => 7,  51 => 14,  48 => 106,  45 => 100,  42 => 4,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
