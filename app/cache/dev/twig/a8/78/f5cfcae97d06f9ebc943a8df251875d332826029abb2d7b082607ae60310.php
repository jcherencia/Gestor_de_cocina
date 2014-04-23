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
\t\t<a href=\"#\" onclick=\"generarInforme()\">Generar</a>
\t\t<form id=\"form-productos\" method=\"post\" role=\"form\" class=\"form form-horizontal\">
\t\t\t<div class=\"wizard\" id=\"satellite-wizard\" data-title=\"Añadir Producto\">

\t\t\t<!-- Step 1 Name & FQDN -->
\t\t\t<div class=\"wizard-card\" data-cardname=\"name\">
\t\t\t\t<h3>Nombre y Unidades</h3>

\t\t\t\t<div class=\"wizard-input-section\">
\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nombre\" placeholder=\"Nombre del producto..\" 
\t\t\t\t\t\t\t\tvalue class=\"form-control\" data-validate=\"validateNull\" >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"wizard-input-section\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"unit\" class=\"col-md-3 control-label\">Unidades</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<select id=\"unit\" name=\"unidad\" class=\"form-control\" data-validate=\"validateNull\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Selecciona..</option>
\t\t\t\t\t\t\t\t\t<option value=\"gr\">gr</option>
\t\t\t\t\t\t\t\t\t<option value=\"L\">l</option>
\t\t\t\t\t\t\t\t\t<option value=\"ml\">ml</option>
\t\t\t\t\t\t\t\t\t<option value=\"und\">unid</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t
\t\t\t</div>

\t\t\t<div class=\"wizard-card\" data-cardname=\"unidad\">
\t\t\t\t<h3>Unidad de compra</h3>
\t\t\t\t<div class=\"wizard-input-section\">
\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t<label for=\"unid_compra\" class=\"col-md-3 control-label\">Unidad de compra</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"und_compra\" class=\"form-control\" data-validate=\"validateNum\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bs-callout bs-callout-info\">
\t\t\t\t\t\t<p>* La <strong>unidad de compra</strong> es la cantidad que </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t        
\t\t\t</div>

\t\t\t<div class=\"wizard-card wizard-card-overlay\" data-cardname=\"precio\">
\t\t\t\t<h3>Precio / unid. compra</h3>
\t\t\t\t<div class=\"wizard-input-section\">
\t\t\t\t\t
\t\t\t        <div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-3 control-label\">Precio / Unidad de compra</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"precio\" value class=\"form-control\" data-validate=\"validateNum\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> €</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"wizard-card\" data-cardname=\"stock\">
\t\t\t\t<h3>Stock y Stock Mínimo</h3>

\t\t\t\t<div class=\"wizard-input-section\">
\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Stock</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"stock_min\" value class=\"form-control\" data-validate=\"validateNum\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"wizard-input-section\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"unit\" class=\"col-md-3 control-label\">Stock Mínmo</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"stock_min\" value class=\"form-control\" data-validate=\"validateNum\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon unit\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"wizard-card\" data-cardname=\"photo\">
\t\t\t\t<h3>Cargar foto</h3>

\t\t\t\t<div class=\"wizard-input-section\">
\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<input type=\"file\" name=\"img_producto\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"wizard-card\" data-cardname=\"photo\">
\t\t\t\t<h3>Crear Producto</h3>

\t\t\t\t<div class=\"wizard-input-section\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Nombre</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\" id=\"info_nombre\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Unidad de compra</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\" id=\"info_und_compra\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Stock</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\" id=\"info_stock\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-4 control-label\">Stock Mínmo</label>
\t\t\t\t\t\t\t<div class=\"col-md-6\" id=\"info_stock_min\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#\" onclick=\"generarInforme()\">Generar</a>
\t\t\t\t</div>

\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t\t

\t\t\t
\t\t</div><!--Fin div wizzard-->
\t</form>

";
    }

    // line 159
    public function block_javascript($context, array $blocks = array())
    {
        // line 160
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap-wizard.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/config_wizard.js"), "html", null, true);
        echo "\"></script>



\t\t<script type=\"text/javascript\">
\t\t\t
\t\t</script>
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
        return array (  229 => 164,  225 => 163,  221 => 162,  217 => 161,  212 => 160,  209 => 159,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
