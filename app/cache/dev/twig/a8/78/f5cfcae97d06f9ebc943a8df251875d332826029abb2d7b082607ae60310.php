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
        if ((array_key_exists("producto_edit", $context) && ((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")) != null))) {
            // line 15
            echo "\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t\t<strong>Editar Producto</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<form id=\"form-productos\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_producto", array("producto" => $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "id"))), "html", null, true);
            echo "\" id=\"form-productos\" >
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-4 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre del producto..\" 
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "nombre"), "html", null, true);
            echo "\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"unit\" class=\"col-md-4 control-label\">Unidades</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<select id=\"unit\" id=\"unidad\" name=\"unidad\" class=\"form-control\" data-value=\"";
            // line 32
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
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidadCompra"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 47
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
            // line 55
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
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "stock"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 66
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
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "stockMin"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto_edit"]) ? $context["producto_edit"] : $this->getContext($context, "producto_edit")), "unidad"), "html", null, true);
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
            // line 100
            if (array_key_exists("message", $context)) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 102
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
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
        return array (  389 => 243,  385 => 242,  381 => 241,  377 => 240,  373 => 239,  368 => 238,  365 => 237,  355 => 230,  343 => 221,  338 => 218,  333 => 214,  327 => 211,  324 => 210,  322 => 209,  307 => 197,  302 => 194,  298 => 191,  295 => 189,  233 => 130,  228 => 127,  220 => 121,  208 => 112,  203 => 109,  198 => 105,  192 => 102,  189 => 101,  187 => 100,  172 => 88,  167 => 85,  161 => 80,  154 => 75,  150 => 74,  139 => 66,  135 => 65,  122 => 55,  111 => 47,  107 => 46,  90 => 32,  81 => 26,  73 => 21,  65 => 15,  63 => 14,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
