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
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap-switch.css"), "html", null, true);
        echo "\">
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "

\t<div class=\"container\">\t
\t<div id=\"dataSwitch\"></div>
\t<div id=\"url_ini\" data-url=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"></div>
\t\t<div class=\"row row-grid\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<button  data-href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("nuevo_producto");
        echo "\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\tNuevo Producto
\t\t\t\t</button>
\t\t\t</div>
\t \t</div>
\t\t<div id=\"productos\" class=\"panel panel-primary panel-view\" data-url=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("verproductos");
        echo "\" data-user=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo "\" data-tipo=\"all_productos\">
\t\t<div class=\"panel-heading complement-1-b\">
\t\t \t<span>Almacén</span>
\t\t \t<div class='btn-group pull-right dropdown-head-panel'>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"toggleviews\" data-target=\"productos\" checked>
\t\t\t\t\t\t</div>
\t \t</div>
\t \t<div class=\"panel-body\">
\t \t\t<div class='row row-grid' id=\"cont_productos\">
\t \t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 33
            echo "\t \t\t\t<div class=\"col-sm-6 col-md-3\">
\t \t\t\t\t<figure>
 \t\t\t\t\t\t<img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "foto")), "html", null, true);
            echo "\">
 \t\t\t\t\t\t\t<figcaption>
 \t\t\t\t\t\t\t\t<a href=\"\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "</a>
 \t\t\t\t\t\t\t\t<table class=\"table info_hide\">
 \t\t\t\t\t\t\t\t\t<tr>
 \t\t\t\t\t\t\t\t\t\t<td>Precio</td>
 \t\t\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "precio"), "html", null, true);
            echo " € / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidadCompra"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stock</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "stock"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stock mínimo</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "stockMin"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "<span class=\"pr_total\"></span></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mod_producto", array("producto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"visible_lg\"> Editar</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrar_producto", array("producto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"))), "html", null, true);
            echo "\" data-type=\"delete\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span><span class=\"visible_lg\"> Borrar</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
\t \t\t\t
\t\t\t\t</div> ";
        // line 72
        echo "\t\t\t\t<div id=\"allproductos\" data-user=\"NULL\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("verproductos");
        echo "\" data-tipo=\"all_productos\"></div>
\t\t \t</div>
\t\t</div>

\t
\t</div>
\t";
    }

    // line 79
    public function block_javascript($context, array $blocks = array())
    {
        // line 80
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.confirm.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
        \t
        \t<script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/datatable.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t
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
        return array (  217 => 87,  213 => 86,  209 => 85,  204 => 83,  200 => 82,  196 => 81,  191 => 80,  188 => 79,  176 => 72,  172 => 69,  155 => 58,  148 => 54,  138 => 49,  129 => 45,  118 => 41,  111 => 37,  106 => 35,  102 => 33,  98 => 32,  84 => 23,  76 => 18,  70 => 15,  64 => 11,  61 => 10,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
