<?php

/* CentroLogBundle:Default:index.html.twig */
class __TwigTemplate_1645586bda1f6faa8434eb0dfca90aa1f612f51a239f3083d49bc2ca773fdb0b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/admin.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t
\t<div class=\"admin\">
\t\t<div class=\"col-md-2 complement-1-b\">
\t\t\t<div class=\"complement-1-b side-bar-admin\">\t\t\t\t
\t\t\t\t<ul class=\"nav navbar-nav side-nav\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#\" id=\"pedidos\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-inbox\"></span>
\t\t\t\t\t\t\t<span> Pedidos</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#usuarios\" id=\"usuarios\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-user\"></span>
\t\t\t\t\t\t\t<span> Gestion de usuarios</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li >
\t\t\t\t\t\t<a href=\"#\" id=\"categorias\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-dashboard\"></span>
\t\t\t\t\t\t\t<span>Gestion de categorías</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-10\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"mod_pedidos\" class=\"mod col-md-11\">
\t\t\t\t\t<div id=\"accordion\" class=\"panel-group\">
\t\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse_1\">
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-download-alt\"> </span>
\t\t\t\t\t\t\t\t\t\t<span>  Solicitudes de productos</span>
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapse_1\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Producto</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Cantidad</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">De almacén</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-1\">Fecha</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Solicitante</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Opciones</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"solicitud_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
            echo "\" class=\"solicitud\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nombre\" data-nombre='";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "nombre"), "html", null, true);
            echo "'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-id=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "id"), "html", null, true);
            echo "\"><a href=\"#\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "nombre"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cantidad\" data-unidad='";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
            echo "' data-cantidad='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"prodsust\" data-unidad='";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
            echo "' data-cantidad='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "prodsustraido"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fecha"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "usuario"), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 80
            if (($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad") != 0)) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"button_";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" data-agregado=\"false\"data-idprod=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "id"), "html", null, true);
                echo "\" type=\"button\" class=\"agregarProd btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-id=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo "\" data-idprod=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "id"), "html", null, true);
                echo "\" data-cant=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
                echo "\" data-und=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
                echo "\" type=\"button\" class=\"elimProd btn btn-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"elim_pro glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" data-url=\"";
                // line 89
                echo $this->env->getExtension('routing')->getPath("delSolicitud");
                echo "\" onclick=\"delSolc(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo ",\$(this))\"><span class=\"glyphicon glyphicon-trash\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 93
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" data-url=\"";
                // line 94
                echo $this->env->getExtension('routing')->getPath("delSolicitud");
                echo "\" onclick=\"delSolc(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
                echo ",\$(this))\"><span class=\"glyphicon glyphicon-trash\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay solicitudes pendientes.</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"generarPed\" class=\"btn btn-primary complement-1-b\" >Generar Pedido</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"agrTodos()\" class=\"btn btn-primary complement-1-b \">Agregar Todos</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"borrarTodos()\" class=\"btn btn-primary complement-1-b \">Borrar Todos</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-danger\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse_2\">
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-warning-sign\"> </span>
\t\t\t\t\t\t\t\t\t\t<span>  Pedidos Pendientes</span>
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapse_2\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-4\">Pedido</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Fecha</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Creador</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Opciones</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"ped_pendientes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 147
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            if (($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "pendiente")) {
                // line 148
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"pedPend_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" class=\"showPedido\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "apellidos"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> Pedido pendiente ";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fecha_pend\">";
                // line 154
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"usu_pend\">";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "apellidos"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary edit_pend\" data-id=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger del_ped\" data-id=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("delPedido");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay pedidos pendientes</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-warning\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse_3\">
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-export\"> </span>
\t\t\t\t\t\t\t\t\t\t\t<span>  Pedidos Enviados</span>
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapse_3\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-4\">Pedido</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Fecha</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Creador</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Opciones</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"ped_enviado\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 207
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            if ((($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "enviado") || ($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "validado"))) {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"pedEnv_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" class=\"showPedido\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"Usuario 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> Pedido enviado ";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fecha_env\">";
                // line 214
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"usu_env\">";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "apellidos"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary edit_enviado\" data-id=\"";
                // line 218
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"Usuario 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 224
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 228
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay pedidos enviados</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel panel-success\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-import\"> </span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>  Pedidos Recibidos</span>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapseThree\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\"><div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-4\">Pedido</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Fecha</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Creador</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Opciones</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 267
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            if ((($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "recibido") || ($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "validado"))) {
                // line 268
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"pedRecb_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" class=\"showPedido\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "apellidos"), "html", null, true);
                echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ver pedido\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> Pedido recibido ";
                // line 272
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fecha_recib\">";
                // line 274
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"usu_recib\">";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "apellidos"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 277
                if (($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "recibido")) {
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"validar_pedido\" data-id=\"";
                    // line 279
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                    echo "\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("validarPedido");
                    echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Validar pedido\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary edit_recibido\" data-id=\"";
                    // line 282
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                    echo "\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("findPedido");
                    echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Editar pedido\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger del_ped\" data-id=\"";
                    // line 285
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                    echo "\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("delPedido");
                    echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Borrar pedido\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 290
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 292
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span> Pedido validado
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 297
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 301
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay pedidos recibidos</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div id=\"mod_usuarios\" style=\"display:none\" class=\"mod col-md-10\">
\t\t\t\t<div id=\"panel-grid\" class=\"panel panel-primary panel-view\">
\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t<span> 
\t\t\t\t\t\t\t<strong>Gestion de Usuarios</strong>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-2\">Nombre</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-2\">Apellidos</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-1\">Usuario</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-1\">Email</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-1\">Registro</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-1\">Tipo</th>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 339
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 340
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-4 col-md-1\">Opciones</th>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 342
        echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 345
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 346
            echo "\t\t\t\t\t\t\t\t\t\t<tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 347
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 348
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 349
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 350
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 351
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fechaRegistro"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 352
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
                // line 353
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_USER")) {
                    // line 354
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-info\">Usuario</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_BLOQ")) {
                    // line 356
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-warning\">Bloqueado</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_ADMIN")) {
                    // line 358
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-success\">Admin</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_SUPER_ADMIN")) {
                    // line 360
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-primary\">Super admin</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 362
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 363
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") && ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username") != "admin"))) {
                // line 364
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 366
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
                    // line 367
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 368
                    if (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_BLOQ")) {
                        // line 369
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-success promocionar\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                        echo "\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("editarRol");
                        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Promocionar Usuario\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-up\"></span> Desbloq
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 373
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_USER")) {
                        // line 374
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-danger degradar\" data-id=\"";
                        // line 375
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                        echo "\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("editarRol");
                        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Degradar Usuario\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-down\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-success promocionar\" data-id=\"";
                        // line 378
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                        echo "\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("editarRol");
                        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Promocionar Usuario\"><span class=\"glyphicon glyphicon-thumbs-up\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 382
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_ADMIN")) {
                        // line 383
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-danger degradar\" data-id=\"";
                        // line 384
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                        echo "\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("editarRol");
                        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Degradar Usuario\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-down\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-success promocionar\" data-id=\"";
                        // line 387
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                        echo "\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("editarRol");
                        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Promocionar Usuario\"><span class=\"glyphicon glyphicon-thumbs-up\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 391
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_SUPER_ADMIN")) {
                        // line 392
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-danger degradar\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                        echo "\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("editarRol");
                        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Degradar Usuario\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-down\"></span> Degradar
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 397
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 398
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 402
            echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 404
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay usuarios.</a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>";
        // line 412
        echo "\t\t\t\t\t\t</div>";
        // line 413
        echo "\t\t\t\t\t</div>";
        // line 414
        echo "\t\t\t\t</div>";
        // line 415
        echo "\t\t\t</div>";
        // line 416
        echo "\t\t</div>";
        // line 417
        echo "\t</div>";
        // line 418
        echo "
\t\t";
        // line 424
        echo "

\t\t<div class=\"row\">
\t\t\t<div id=\"mod_categorias\" style=\"display:none\" class=\"mod col-md-10\">
\t\t\t\t<div id=\"panel-grid\" class=\"panel panel-primary panel-view\">
\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t<span> 
\t\t\t\t\t\t\t<strong>Gestion de Categorías</strong>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"url_cenlog\" value=\"";
        // line 438
        echo $this->env->getExtension('routing')->getPath("centro_log");
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"url_addcat\" value=\"";
        // line 439
        echo $this->env->getExtension('routing')->getPath("nueva_categoria");
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"url_editcat\" value=\"";
        // line 440
        echo $this->env->getExtension('routing')->getPath("edit_categoria");
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"url_delcat\" value=\"";
        // line 441
        echo $this->env->getExtension('routing')->getPath("del_categoria");
        echo "\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-8 col-md-2\">Nombre</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-4 col-md-1\">Opciones</th>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 452
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 453
            echo "\t\t\t\t\t\t\t\t\t\t<tr id=\"categ_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"categ\">";
            // line 454
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary complement-1-b\" onclick=\"updCategoria(";
            // line 457
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"), "html", null, true);
            echo ",'edit',\$(this))\"><span class=\"glyphicon glyphicon-edit\"></span> Editar</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" onclick=\"delCategoria(";
            // line 458
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"), "html", null, true);
            echo ")\"><span class=\"glyphicon glyphicon-trash\"></span> Borrar</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 464
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay categorias.</a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>";
        // line 472
        echo "\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t    <div class=\"input-group col-md-4\">
\t\t\t\t\t\t\t      <input type=\"text\" id=\"add_categ\" class=\"form-control\">
\t\t\t\t\t\t\t      <span class=\"input-group-btn\">
\t\t\t\t\t\t\t        <button class=\"btn btn-primary complement-1-b\" type=\"button\" onclick=\"addCategoria()\">Agregar Categoría</button>
\t\t\t\t\t\t\t      </span>
\t\t\t\t\t\t\t    </div><!-- /input-group -->
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>";
        // line 481
        echo "\t\t\t\t\t</div>";
        // line 482
        echo "\t\t\t\t</div>";
        // line 483
        echo "\t\t\t</div>";
        // line 484
        echo "\t\t</div>";
        // line 485
        echo "\t</div>";
        // line 486
        echo "
</div><!--fin_div_admin-->
\t<div id='modal-pedido' class=\"modal fade\" tabindex='-1' role='dialog'  aria-labelledby='ModalLabel' aria-hidden='true'>
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class='modal-content'>
\t\t\t\t\t\t<div class='modal-header complement-1-b'>
\t\t\t\t\t\t\t<button class='close' type='button' data-dismiss='modal' aria-hidden='true'> ×</button>
\t\t\t\t\t\t\t<div  class='modal-title row'>
\t\t\t\t\t\t\t\t<div id='modal-pedido-title' class=\"col-md-7\"></div>
\t\t\t\t\t\t\t\t<div class=\"input-group col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group estado\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t  <label class=\"btn btn-primary complement-1-b\" disabled>Estado</label>
\t\t\t\t\t\t\t\t\t  <label id=\"est_pendiente\" class=\"btn btn-danger btn-status\">
\t\t\t\t\t\t\t\t\t    <input type=\"radio\" name=\"estado\" id=\"pendiente\" value=\"pendiente\">
\t\t\t\t\t\t\t\t\t    \t<span class=\"glyphicon glyphicon glyphicon-warning-sign\"></span>
\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t  <label id=\"est_enviado\" class=\"btn btn-warning btn-status\">
\t\t\t\t\t\t\t\t\t    <input type=\"radio\" name=\"estado\" id=\"enviado\" value=\"enviado\">
\t\t\t\t\t\t\t\t\t    \t<span class=\"glyphicon glyphicon glyphicon-export\"></span>
\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t  <label id=\"est_recibido\" class=\"btn btn-success btn-status\">
\t\t\t\t\t\t\t\t\t    <input type=\"radio\" name=\"estado\" id=\"recibido\" value=\"recibido\">
\t\t\t\t\t\t\t\t\t    \t<span class=\"glyphicon glyphicon glyphicon-import\"></span>
\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='modal-body'>
\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t<div class='col-md-5 bloques'>
\t\t\t\t\t\t\t\t\t<div class=\"bloque_titulo\">
\t\t\t\t\t\t\t\t\t   <span>Añadir Producto</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"list-group scrollable-y\">
\t\t\t\t\t\t\t\t\t\t";
        // line 523
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 524
            echo "\t\t\t\t\t\t\t\t\t\t\t  <a href=\"#\" data-idprod='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"), "html", null, true);
            echo "' data-nombre='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "' data-unid='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "' class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t    ";
            // line 525
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t    <span class=\"glyphicon glyphicon-plus-sign pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 529
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='col-md-7 '>
\t\t\t\t\t\t\t\t\t<div class=\"bloque_titulo\">
\t\t\t\t\t\t\t\t\t  <span>Pedido</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class='scrollable-y'>
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t<tbody id=\"tags\" class=\"list-group \"></tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<label class=\"col-md-5\">
\t\t\t\t\t\t\t\tAgregar Ingredientes
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t    \t  <span id=\"formtag_nombre\" class=\"input-group-addon\"></span>
\t\t\t\t\t\t\t\t      <input id=\"formtag_cantidad\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t      <span id=\"formtag_unid\" class=\"input-group-addon \"></span>
\t\t\t\t\t\t\t\t      <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t        <button class=\"btn btn-primary complement-1-b\" type=\"button\" onclick=\"agregarNuevoProd()\">
\t\t\t\t\t\t\t\t        \t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t        </button>
\t\t\t\t\t\t\t\t      </span>
\t\t\t\t\t\t\t\t    </div><!-- /input-group -->
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 562
        echo "\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class='modal-footer'>
\t\t\t\t\t\t\t<button type=\"button\" id=\"crearPed\" class=\"btn btn-primary complement-1-b\" data-url=\"";
        // line 564
        echo $this->env->getExtension('routing')->getPath("genPedido");
        echo "\">Crear Pedido</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"editPed\" class=\"btn btn-primary complement-1-b hidden\" data-url=\"";
        // line 565
        echo $this->env->getExtension('routing')->getPath("editPedido");
        echo "\">Editar Pedido</button>
\t\t\t\t\t\t\t<button class='btn btn-danger' type='button' data-dismiss='modal' > Cancelar</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t</div>
\t<div id='modal-showpedido' class=\"modal fade\" tabindex='-1' role='dialog'  aria-labelledby='ModalLabel' aria-hidden='true'>
\t\t\t\t<div class=\"modal-dialog\" style=\"width:500px\">
\t\t\t\t\t<div class='modal-content'>
\t\t\t\t\t\t<div class='modal-header complement-1-b'>
\t\t\t\t\t\t\t<button class='close' type='button' data-dismiss='modal' aria-hidden='true'> ×</button>
\t\t\t\t\t\t\t<div class='modal-title'>
\t\t\t\t\t\t\t\t<strong>Nº pedido: </strong><span id=\"showIdPed\"></span>
\t\t\t\t\t\t\t\t<button id=\"generarPDF\" data-url=\"";
        // line 580
        echo $this->env->getExtension('routing')->getPath("findPedido");
        echo "\" type=\"button\"  class=\"btn btn-primary complement-1-b boton-right\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\tPDF
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='modal-body'>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bloque_titulo2\">
\t\t\t\t\t\t\t\t\t\t<strong>Fecha: </strong><span id=\"showFechPed\"> </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Creador: </strong>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"showUsuPed\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div id=\"list_prod\" class=\"list-group scrollable-y\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"control_estado\" class=\"row\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"btn_showPed\" class='modal-footer' data-url='";
        // line 609
        echo $this->env->getExtension('routing')->getPath("editEstado");
        echo "'>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t
\t</div>

\t<div id=\"response\"></div>

\t<a href=\"#\" class=\"scrollup\">Scroll</a>
\t";
    }

    // line 623
    public function block_javascript($context, array $blocks = array())
    {
        // line 624
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/solicitudes.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.confirm.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jsPDF/FileSaver.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jsPDF/jspdf.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/centro_log.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "CentroLogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1145 => 631,  1141 => 630,  1137 => 629,  1133 => 628,  1129 => 627,  1125 => 626,  1121 => 625,  1116 => 624,  1113 => 623,  1095 => 609,  1063 => 580,  1045 => 565,  1041 => 564,  1037 => 562,  1003 => 529,  993 => 525,  984 => 524,  980 => 523,  941 => 486,  939 => 485,  937 => 484,  935 => 483,  933 => 482,  931 => 481,  921 => 472,  916 => 468,  907 => 464,  896 => 458,  892 => 457,  886 => 454,  881 => 453,  876 => 452,  862 => 441,  858 => 440,  854 => 439,  850 => 438,  834 => 424,  831 => 418,  829 => 417,  827 => 416,  825 => 415,  823 => 414,  821 => 413,  819 => 412,  814 => 408,  805 => 404,  799 => 402,  793 => 398,  787 => 397,  776 => 392,  773 => 391,  764 => 387,  756 => 384,  753 => 383,  750 => 382,  741 => 378,  733 => 375,  730 => 374,  727 => 373,  717 => 369,  715 => 368,  712 => 367,  708 => 366,  704 => 364,  701 => 363,  695 => 362,  691 => 360,  687 => 358,  683 => 356,  679 => 354,  676 => 353,  672 => 352,  668 => 351,  664 => 350,  660 => 349,  656 => 348,  652 => 347,  647 => 346,  642 => 345,  637 => 342,  633 => 340,  631 => 339,  594 => 304,  585 => 301,  576 => 297,  569 => 292,  566 => 290,  556 => 285,  548 => 282,  540 => 279,  537 => 278,  535 => 277,  528 => 275,  524 => 274,  519 => 272,  506 => 270,  500 => 268,  494 => 267,  456 => 231,  447 => 228,  438 => 224,  428 => 218,  420 => 215,  416 => 214,  411 => 212,  402 => 210,  396 => 208,  390 => 207,  352 => 171,  343 => 168,  328 => 161,  320 => 158,  312 => 155,  308 => 154,  303 => 152,  290 => 150,  284 => 148,  278 => 147,  232 => 103,  223 => 99,  217 => 97,  209 => 94,  206 => 93,  197 => 89,  185 => 86,  175 => 83,  171 => 81,  169 => 80,  165 => 79,  161 => 78,  151 => 77,  141 => 76,  136 => 74,  131 => 72,  127 => 71,  122 => 70,  117 => 69,  56 => 10,  53 => 9,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
