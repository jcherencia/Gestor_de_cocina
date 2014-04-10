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
        echo "Nuevo Producto - Gestor de cocina ";
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
        echo "\t\t<button id=\"open-wizard\" class=\"btn btn-primary\">
\t\t\tOpen wizard
\t\t</button>
\t\t<form id=\"form-productos\" method=\"post\" role=\"form\" class=\"form form-horizontal\">
\t\t\t<div class=\"wizard\" id=\"some-wizard\" data-title=\"Añadir producto\">
\t\t\t 
\t\t\t    <h1 class=\"wizard-title\">Wizard Title</h1>
\t\t\t 
\t\t\t    <div class=\"wizard-card\" id=\"paso2\" data-cardname=\"Paso 1\">
\t\t\t        <h3>Datos básicos</h3>
\t\t\t        \t<div class=\"form-group \">
\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nombre\" placeholder=\"Nombre del producto..\" value class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"unid\" class=\"col-md-3 control-label\">Unidades</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<select id=\"unit\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Selecciona..</option>
\t\t\t\t\t\t\t\t\t<option value=\"gr\">gr</option>
\t\t\t\t\t\t\t\t\t<option value=\"L\">l</option>
\t\t\t\t\t\t\t\t\t<option value=\"ml\">ml</option>
\t\t\t\t\t\t\t\t\t<option value=\"und\">unid</option></select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t    </div>
\t\t\t 
\t\t\t    <div class=\"wizard-card\" data-cardname=\"card2\">
\t\t\t        <h3>Unidad de compra</h3>
\t\t\t        <div class=\"form-group \">
\t\t\t\t\t\t\t<label for=\"unid_compra\" class=\"col-md-3 control-label\">Unidad de compra</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"und_compra\" value class=\"form-control\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t    </div>
\t\t\t    <div class=\"wizard-card\" data-cardname=\"card3\">
\t\t\t        <h3>Precio / unid. compra</h3>
\t\t\t        <div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-3 control-label\">Precio / Unidad de compra</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"precio\" value class=\"form-control\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> €</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t    </div>
\t\t\t    <div class=\"wizard-card\" data-cardname=\"card4\">
\t\t\t        <h3>Stock y Stock Mínimo</h3>
\t\t\t        <div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Stock</label>
\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"stock\" value class=\"form-control\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-2 control-label\">Stock Mínimo</label>
\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"stock_min\" value class=\"form-control\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t    </div>
\t\t\t 
\t\t\t</div>
\t\t</form>

";
    }

    // line 86
    public function block_javascript($context, array $blocks = array())
    {
        // line 87
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap-wizard.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/config_wizard.js"), "html", null, true);
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
        return array (  156 => 91,  152 => 90,  148 => 89,  144 => 88,  139 => 87,  136 => 86,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
