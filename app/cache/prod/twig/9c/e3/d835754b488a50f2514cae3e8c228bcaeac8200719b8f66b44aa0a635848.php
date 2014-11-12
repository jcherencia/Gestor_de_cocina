<?php

/* CentroLogBundle:Default:solicitudes.html.twig */
class __TwigTemplate_9ce3d835754b488a50f2514cae3e8c228bcaeac8200719b8f66b44aa0a635848 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio - Gestor de cocina ";
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 5
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t\t
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/alertas.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t\t<div class='content'>
\t\t

\t\t<div class='container'>
\t\t\t\t<div class='row row-grid'>
\t\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t\t<button id=\"showPedirProd\" class='btn btn-primary complement-1-b'> Pedir productos</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<div class='row row-grid'>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div id='panel-grid' class='panel panel-primary panel-view'>
\t\t\t\t\t\t<div class='panel-heading complement-1-b'>
\t\t\t\t\t\t\t<span> 
\t\t\t\t\t\t\t\t<strong> Mis solicitudes pendientes</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>";
        // line 29
        echo "\t\t\t\t\t\t<div class='panel-body'>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Producto</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Solicitado</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">De Almacén</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Fecha</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            if (($this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "usuario"), "id") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"solicitud_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" class=\"solicitud\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nombre\" data-nombre='";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "nombre"), "html", null, true);
                echo "'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-id=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "id"), "html", null, true);
                echo "\"><a href=\"#\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "nombre"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cantidad\" data-unidad='";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
                echo "' data-cantidad='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"prodsust\" data-unidad='";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
                echo "' data-cantidad='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "prodsustraido"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"date\">";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 57
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"option\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm complement-1-b\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-url=\"";
                // line 60
                echo $this->env->getExtension('routing')->getPath("prodSolicitado");
                echo "\" onclick=\"verProdSolc ('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "',\$(this))\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <span class=\"glyphicon glyphicon-search\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" data-url=\"";
                // line 62
                echo $this->env->getExtension('routing')->getPath("delSolicitud");
                echo "\" onclick=\"delSolc(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo ",\$(this))\"><span class=\"glyphicon glyphicon-trash\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No tienes solicitudes pendientes de revisar.</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>";
        // line 81
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"panel panel-primary\" id=\"info_prod\">
\t\t\t\t\t\t<div class='panel-heading complement-1-b'>
\t\t\t\t\t\t\t<span> 
\t\t\t\t\t\t\t\t<strong><span class=\"nombre\">Inform. producto</span></strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>";
        // line 91
        echo "\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-grid foto text-center\">
\t\t\t\t\t\t\t\t\t<img class=\"img-rounded\" src=\"/Gestor_de_cocina/web/public/img/no_image.png\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Stock</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stock\"></span> <span class=\"unidad\"></span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Stock min</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stockmin\"></span> <span class=\"unidad\"></span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Precio</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"precio\"></span> € /
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"unidcompra\"></span> <span class=\"unidad\"></span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>";
        // line 124
        echo "\t\t\t\t\t<div class=\"panel panel-primary\" id=\"info\">
\t\t\t\t\t\t<div class='panel-heading complement-1-b'>
\t\t\t\t\t\t\t<span> 
\t\t\t\t\t\t\t\t<strong> Información</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>";
        // line 131
        echo "\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<p>Al realizar una solicitud de productos se procederá a comprobar el stock de dicho producto en el almacén, y si fuera necesario se solicitará la cantidad necesaria al Centro Logístico.</p>\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>";
        // line 141
        echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div id='modal-peticiones' class=\"modal fade\" tabindex='-1' role='dialog'  aria-labelledby='ModalLabel' aria-hidden='true'>
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class='modal-content'>
\t\t\t\t\t\t<div class='modal-header complement-1-b'>
\t\t\t\t\t\t\t<button class='close' type='button' data-dismiss='modal' aria-hidden='true'> ×</button>
\t\t\t\t\t\t\t<div  class='modal-title row'>
\t\t\t\t\t\t\t\t<div id='modal-pedido-title' class=\"col-md-7\">Solicitar productos</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='modal-body'>
\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t<div class='col-md-5 bloques'>
\t\t\t\t\t\t\t\t\t<div class=\"bloque_titulo\">
\t\t\t\t\t\t\t\t\t   <span>Añadir Producto</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div  id=\"contAddProd\"  class=\"list-group scrollable-y\">
\t\t\t\t\t\t\t\t\t\t";
        // line 163
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 164
            echo "\t\t\t\t\t\t\t\t\t\t\t  <a href=\"#\" data-idprod='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"), "html", null, true);
            echo "' data-nombre='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "' data-unid='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "' class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t    ";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t    <span class=\"glyphicon glyphicon-plus-sign pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='col-md-7 '>
\t\t\t\t\t\t\t\t\t<div class=\"bloque_titulo\">
\t\t\t\t\t\t\t\t\t  <span>Solicitud</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"solicitudes\" class='scrollable-y'>
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"tags\" class=\"list-group \"></tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row bloque-inferior\">
\t\t\t\t\t\t\t\t<label class=\"col-md-5\">
\t\t\t\t\t\t\t\tAgregar Ingredientes
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t    \t  <span id=\"formtag_nombre\" class=\"input-group-addon\"></span>
\t\t\t\t\t\t\t\t      <input id=\"formtag_cantidad\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t      <span id=\"formtag_unid\" class=\"input-group-addon \"></span>
\t\t\t\t\t\t\t\t      <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t        <button id=\"newProd\" class=\"btn btn-primary complement-1-b\" type=\"button\" >
\t\t\t\t\t\t\t\t        \t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t        </button>
\t\t\t\t\t\t\t\t      </span>
\t\t\t\t\t\t\t\t    </div><!-- /input-group -->
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 202
        echo "\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class='modal-footer'>

\t\t\t\t\t\t\t<button type=\"button\" id=\"solicitar\" class=\"btn btn-primary complement-1-b\" data-url=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("genSolicitud");
        echo "\" data-usu=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo "\">Solicitar</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button class='btn btn-danger' type='button' data-dismiss='modal' > Cancelar</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t</div>

\t";
    }

    // line 216
    public function block_javascript($context, array $blocks = array())
    {
        // line 217
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/solicitudes.js"), "html", null, true);
        echo "\"></script>
\t\t\t
    ";
    }

    public function getTemplateName()
    {
        return "CentroLogBundle:Default:solicitudes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 219,  364 => 218,  359 => 217,  356 => 216,  339 => 205,  334 => 202,  300 => 169,  290 => 165,  281 => 164,  277 => 163,  253 => 141,  242 => 131,  234 => 124,  200 => 91,  189 => 81,  178 => 71,  169 => 67,  156 => 62,  149 => 60,  144 => 57,  140 => 55,  130 => 54,  120 => 53,  115 => 51,  110 => 49,  106 => 48,  101 => 47,  95 => 46,  76 => 29,  57 => 11,  54 => 10,  47 => 7,  42 => 5,  37 => 4,  31 => 3,);
    }
}
