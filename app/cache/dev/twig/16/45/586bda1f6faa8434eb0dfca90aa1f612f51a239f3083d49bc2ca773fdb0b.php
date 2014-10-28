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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Fecha</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Solicitante</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Opciones</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"solicitud_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
            echo "\" class=\"solicitud\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nombre\" data-nombre='";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "nombre"), "html", null, true);
            echo "'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-id=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "id"), "html", null, true);
            echo "\"><a href=\"#\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "nombre"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cantidad\" data-unidad='";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
            echo "' data-cantidad='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fecha"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "usuario"), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"button_";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
            echo "\" data-agregado=\"false\"data-idprod=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "id"), "html", null, true);
            echo "\" type=\"button\" class=\"agregarProd btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-id=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
            echo "\" data-idprod=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "id"), "html", null, true);
            echo "\" data-cant=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
            echo "\" data-und=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
            echo "\" type=\"button\" class=\"elimProd btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"elim_pro glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay solicitudes pendientes.</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            if (($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "pendiente")) {
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"pedPend_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                // line 141
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
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fecha_pend\">";
                // line 145
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"usu_pend\">";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "apellidos"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary edit_pend\" data-id=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger del_ped\" data-id=\"";
                // line 152
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
            // line 159
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay pedidos pendientes</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
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
        // line 198
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            if ((($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "enviado") || ($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "validado"))) {
                // line 199
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"pedEnv_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" class=\"showPedido\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"Usuario 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> Pedido enviado ";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fecha_env\">";
                // line 205
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"usu_env\">";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "apellidos"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary edit_enviado\" data-id=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"Usuario 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 215
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 219
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay pedidos enviados</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
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
        // line 258
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            if ((($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "recibido") || ($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "validado"))) {
                // line 259
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"pedRecb_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                // line 261
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
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fecha_recib\">";
                // line 265
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"usu_recib\">";
                // line 266
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "creador"), "apellidos"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 268
                if (($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "recibido")) {
                    // line 269
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"validar_pedido\" data-id=\"";
                    // line 270
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                    echo "\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("validarPedido");
                    echo "\" class=\"btn btn-success\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Validar pedido\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary edit_recibido\" data-id=\"";
                    // line 273
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                    echo "\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("findPedido");
                    echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Editar pedido\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger del_ped\" data-id=\"";
                    // line 276
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                    echo "\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("delPedido");
                    echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Borrar pedido\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 281
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span> Pedido validado
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 288
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 292
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay pedidos recibidos</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
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
        // line 330
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 331
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-sm-4 col-md-1\">Opciones</th>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 333
        echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 336
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 337
            echo "\t\t\t\t\t\t\t\t\t\t<tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 339
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 341
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 342
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fechaRegistro"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 343
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
                // line 344
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_USER")) {
                    // line 345
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Usuario</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_ADMIN")) {
                    // line 347
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Admin</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_SUPER_ADMIN")) {
                    // line 349
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Super admin</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 351
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") && ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id") != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id")))) {
                // line 353
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 355
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
                    // line 356
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_USER")) {
                        // line 357
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-success promocionar\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                        echo "\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("editarRol");
                        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Promocionar Usuario\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-user\"></span> Promocionar
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 360
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 362
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_ADMIN")) {
                        // line 363
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-danger degradar\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                        echo "\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("editarRol");
                        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Degradar Usuario\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-user\"></span> Degradar
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 366
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 368
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 369
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 372
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 375
            echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 377
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay usuarios.</a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>";
        // line 385
        echo "\t\t\t\t\t\t</div>";
        // line 386
        echo "\t\t\t\t\t</div>";
        // line 387
        echo "\t\t\t\t</div>";
        // line 388
        echo "\t\t\t</div>";
        // line 389
        echo "\t\t</div>";
        // line 390
        echo "\t</div>";
        // line 391
        echo "
\t\t";
        // line 397
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
        // line 411
        echo $this->env->getExtension('routing')->getPath("centro_log");
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"url_addcat\" value=\"";
        // line 412
        echo $this->env->getExtension('routing')->getPath("nueva_categoria");
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"url_editcat\" value=\"";
        // line 413
        echo $this->env->getExtension('routing')->getPath("edit_categoria");
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"url_delcat\" value=\"";
        // line 414
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
        // line 425
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 426
            echo "\t\t\t\t\t\t\t\t\t\t<tr id=\"categ_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"categ\">";
            // line 427
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary complement-1-b\" onclick=\"updCategoria(";
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"), "html", null, true);
            echo ",'edit',\$(this))\"><span class=\"glyphicon glyphicon-edit\"></span> Editar</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" onclick=\"delCategoria(";
            // line 431
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
            // line 437
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay categorias.</a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 441
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>";
        // line 445
        echo "\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t    <div class=\"input-group col-md-4\">
\t\t\t\t\t\t\t      <input type=\"text\" id=\"add_categ\" class=\"form-control\">
\t\t\t\t\t\t\t      <span class=\"input-group-btn\">
\t\t\t\t\t\t\t        <button class=\"btn btn-primary complement-1-b\" type=\"button\" onclick=\"addCategoria()\">Agregar Categoría</button>
\t\t\t\t\t\t\t      </span>
\t\t\t\t\t\t\t    </div><!-- /input-group -->
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>";
        // line 454
        echo "\t\t\t\t\t</div>";
        // line 455
        echo "\t\t\t\t</div>";
        // line 456
        echo "\t\t\t</div>";
        // line 457
        echo "\t\t</div>";
        // line 458
        echo "\t</div>";
        // line 459
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
        // line 496
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 497
            echo "\t\t\t\t\t\t\t\t\t\t\t  <a href=\"#\" data-idprod='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"), "html", null, true);
            echo "' data-nombre='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "' data-unid='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "' class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t    ";
            // line 498
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t    <span class=\"glyphicon glyphicon-plus-sign pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 502
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
        // line 535
        echo "\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class='modal-footer'>
\t\t\t\t\t\t\t<button type=\"button\" id=\"crearPed\" class=\"btn btn-primary complement-1-b\" data-url=\"";
        // line 537
        echo $this->env->getExtension('routing')->getPath("genPedido");
        echo "\">Crear Pedido</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"editPed\" class=\"btn btn-primary complement-1-b hidden\" data-url=\"";
        // line 538
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
        // line 553
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
        // line 582
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

    // line 596
    public function block_javascript($context, array $blocks = array())
    {
        // line 597
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.confirm.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jsPDF/FileSaver.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jsPDF/jspdf.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 603
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
        return array (  1058 => 603,  1054 => 602,  1050 => 601,  1046 => 600,  1042 => 599,  1038 => 598,  1033 => 597,  1030 => 596,  1012 => 582,  980 => 553,  962 => 538,  958 => 537,  954 => 535,  920 => 502,  910 => 498,  901 => 497,  897 => 496,  858 => 459,  856 => 458,  854 => 457,  852 => 456,  850 => 455,  848 => 454,  838 => 445,  833 => 441,  824 => 437,  813 => 431,  809 => 430,  803 => 427,  798 => 426,  793 => 425,  779 => 414,  775 => 413,  771 => 412,  767 => 411,  751 => 397,  748 => 391,  746 => 390,  744 => 389,  742 => 388,  740 => 387,  738 => 386,  736 => 385,  731 => 381,  722 => 377,  716 => 375,  711 => 372,  709 => 369,  703 => 368,  699 => 366,  691 => 363,  688 => 362,  684 => 360,  676 => 357,  673 => 356,  669 => 355,  665 => 353,  662 => 352,  656 => 351,  652 => 349,  648 => 347,  644 => 345,  641 => 344,  637 => 343,  633 => 342,  629 => 341,  625 => 340,  621 => 339,  617 => 338,  612 => 337,  607 => 336,  602 => 333,  598 => 331,  596 => 330,  559 => 295,  550 => 292,  541 => 288,  534 => 283,  531 => 281,  521 => 276,  513 => 273,  505 => 270,  502 => 269,  500 => 268,  493 => 266,  489 => 265,  484 => 263,  471 => 261,  465 => 259,  459 => 258,  421 => 222,  412 => 219,  403 => 215,  393 => 209,  385 => 206,  381 => 205,  376 => 203,  367 => 201,  361 => 199,  355 => 198,  317 => 162,  308 => 159,  293 => 152,  285 => 149,  277 => 146,  273 => 145,  268 => 143,  255 => 141,  249 => 139,  243 => 138,  197 => 94,  188 => 90,  170 => 83,  160 => 80,  154 => 77,  150 => 76,  140 => 75,  135 => 73,  130 => 71,  126 => 70,  121 => 69,  116 => 68,  56 => 10,  53 => 9,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
