<?php

/* AlmacenBundle:Default:index.html.twig */
class __TwigTemplate_290a3d56a15d3c19bcdee88fafc354de98914c8300927857104f85322903b578 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
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
        // line 17
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"> Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("recetas");
        echo "\"> Recetas</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("centro_log");
        echo "\"> Centro Logístico</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class='active'>
\t\t\t\t\t\t\t<a href=\"";
        // line 26
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
        // line 38
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

\t<div class=\"container\">\t
\t\t<div class=\"row row-grid\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<a  href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("nuevo_producto");
        echo "\">
\t\t\t\t\t<button class=\"btn btn-primary complement-1-b\">Nuevo Producto</button>
\t\t\t\t</a>
\t\t\t</div>
\t \t</div>
\t\t<div id=\"panel-grid\" class=\"panel panel-primary panel-view\">
\t\t<div class=\"panel-heading complement-1-b\">
\t\t \t<span>Almacén</span>
\t\t \t<div class=\"btn-group pull-right dropdown-head-panel\">
\t\t\t \t<button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle complement-1-b\">Ordenar  
\t\t\t \t\t<span class=\"caret\"></span>
\t\t\t \t</button>
\t\t \t<ul role=\"menu\" class=\"dropdown-menu\">
\t\t\t \t<li>
\t\t\t \t\t<a href=\"#\">Ordenar por:</a>
\t\t\t \t</li>
\t\t\t \t<li class=\"divider\"></li>
\t\t\t \t<li>
\t\t\t \t\t<a href=\"#\">Tipo</a>
\t\t\t \t</li>
\t\t \t\t<li>
\t\t \t\t<a href=\"#\">Fecha</a>
\t\t \t\t</li>
\t \t\t</ul>
\t\t \t</div>
\t \t</div>
\t \t<div class=\"panel-body\">
\t \t\t<div class=\"row row-grid\">
\t \t\t\t<div class=\"col-sm-6 col-md-3\">
\t \t\t\t\t<figure>
 \t\t\t\t\t\t<img src=\"../public/img/no_image.png\">
 \t\t\t\t\t\t\t<figcaption>
 \t\t\t\t\t\t\t\t<a href=\"/receta/editar/\">Pollo</a>
 \t\t\t\t\t\t\t\t<table class=\"table info_hide\">
 \t\t\t\t\t\t\t\t\t<tr>
 \t\t\t\t\t\t\t\t\t\t<td>Precio</td>
 \t\t\t\t\t\t\t\t\t\t<td>1.3 €</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stock</td>
\t\t\t\t\t\t\t\t\t<td>3000 </td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stock mínimo</td>
\t\t\t\t\t\t\t\t\t<td>1000 <span class=\"pr_total\"></span></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"/almacen/editar/\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"visible_lg\"> Editar</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"/almacen/eliminar-producto/\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span><span class=\"visible_lg\"> Borrar</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t \t\t\t<div class=\"col-sm-6 col-md-3\">
\t \t\t\t\t<figure>
 \t\t\t\t\t\t<img src=\"../public/img/no_image.png\">
 \t\t\t\t\t\t\t<figcaption>
 \t\t\t\t\t\t\t\t<a href=\"/receta/editar/\">Arroz</a>
 \t\t\t\t\t\t\t\t<table class=\"table info_hide\">
 \t\t\t\t\t\t\t\t\t<tr>
 \t\t\t\t\t\t\t\t\t\t<td>Precio</td>
 \t\t\t\t\t\t\t\t\t\t<td>1.3 €</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stock</td>
\t\t\t\t\t\t\t\t\t<td>3000 </td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stock mínimo</td>
\t\t\t\t\t\t\t\t\t<td>1000 <span class=\"pr_total\"></span></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"/almacen/editar/\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"visible_lg\"> Editar</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"/almacen/eliminar-producto/\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span><span class=\"visible_lg\"> Borrar</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t \t</div>
\t\t</div>
\t</div>
\t";
    }

    // line 162
    public function block_javascript($context, array $blocks = array())
    {
        // line 163
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "AlmacenBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 165,  226 => 164,  221 => 163,  218 => 162,  111 => 59,  87 => 38,  72 => 26,  66 => 23,  60 => 20,  54 => 17,  39 => 4,  36 => 3,  30 => 2,);
    }
}
