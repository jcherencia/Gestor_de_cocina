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

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class='navbar navbar-default complement-1-b'>
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
\t\t\t\t\t\t<li >
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
\t\t\t\t\t\t<li class='active'>
\t\t\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("centro_log");
        echo "\"> Centro Logístico</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("almacen");
        echo "\"> Almacén</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class='nav navbar-nav navbar-right menu-user'>
\t\t\t\t\t\t";
        // line 35
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 36
            echo "\t\t\t\t\t\t\t\t<li class='dropdown'>
\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>  
\t\t\t\t\t\t\t\t\t\t<span>Usuario: <strong>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
            echo "</strong></span>
\t\t\t\t\t\t\t\t\t\t<span class='caret caret-white'></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class='dropdown-menu complement-1-b'>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("perfil");
            echo "\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Perfil</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-off'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Cerrar Sesión</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t\t\t<li><a class=\"underline\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a></li>
\t        \t\t\t\t<li><a href=\"\">|</a></li>
\t        \t\t\t\t<li><a class=\"underline\" href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("registro");
            echo "\">Registro</a></li>
\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"admin\">
\t\t<div class=\"col-md-2 complement-1-b\">
\t\t\t<div class=\"complement-1-b side-bar-admin\">\t\t\t\t
\t\t\t\t<ul class=\"nav navbar-nav side-nav\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" id=\"pedidos\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-inbox\"></span>
\t\t\t\t\t\t\t<span> Pedidos</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" id=\"usuarios\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-user\"></span>
\t\t\t\t\t\t\t<span> Gestion de usuarios</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#\" id=\"informacion\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-dashboard\"></span>
\t\t\t\t\t\t\t<span> Info</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-10\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"mod_pedidos\" class=\"mod col-md-10\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-4\">Producto</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Cantidad</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Fecha</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Solicitante</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-1\">Opciones</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 123
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"solicitud_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
            echo "\" class=\"solicitud\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nombre\" data-nombre='";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "nombre"), "html", null, true);
            echo "'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-id=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "id"), "html", null, true);
            echo "\"><a href=\"#\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "nombre"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cantidad\" data-unidad='";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
            echo "' data-cantidad='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cantidad"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "fecha"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Usuario 1</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"button_";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id"), "html", null, true);
            echo "\" data-agregado=\"false\"data-idprod=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "producto"), "id"), "html", null, true);
            echo "\" type=\"button\" class=\"agregarProd btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-id=\"";
            // line 137
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
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay solicitudes pendientes.</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
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
        // line 192
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            if (($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "pendiente")) {
                // line 193
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"pedPend_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" class=\"showPedido\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"Usuario 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> Pedido pendiente ";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fecha_pend\">";
                // line 199
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"usu_pend\">Usuario 1</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary edit_pend\" data-id=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger del_ped\" data-id=\"";
                // line 206
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
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay pedidos pendientes</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
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
        // line 252
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            if (($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "enviado")) {
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"pedEnv_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" class=\"showPedido\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"Usuario 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> Pedido enviado ";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fecha_env\">";
                // line 259
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"usu_env\">Usuario 1</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary edit_enviado\" data-id=\"";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"Usuario 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 273
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay pedidos enviados</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
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
\t\t\t\t\t\t\t<div class=\"panel panel-success\">
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
        // line 312
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            if (($this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "estado") == "recibido")) {
                // line 313
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"pedRecb_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-id=\"";
                // line 315
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\" class=\"showPedido\" data-fecha=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "\" data-usu=\"Usuario 1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ped-tit\"> Pedido recibido ";
                // line 317
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fecha_recib\">";
                // line 319
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fecha"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"usu_recib\">Usuario 1</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary edit_recibido\" data-id=\"";
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("findPedido");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger del_ped\" data-id=\"";
                // line 326
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
            // line 333
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay pedidos recibidos</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-2\">Nombre</th>
\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-2\">Apellidos</th>
\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-1\">Usuario</th>
\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-1\">Email</th>
\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-1\">Registro</th>
\t\t\t\t\t\t\t\t<th class=\"col-sm-6 col-md-1\">Tipo</th>
\t\t\t\t\t\t\t\t<th class=\"col-sm-4 col-md-1\">Opciones</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 371
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 372
            echo "\t\t\t\t\t\t\t<tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<td>";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 374
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 375
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 376
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 377
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fechaRegistro"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 378
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
                // line 379
                echo "\t\t\t\t\t\t\t\t\t";
                if (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_USER")) {
                    // line 380
                    echo "\t\t\t\t\t\t\t\t\t<td>Usuario</td>
\t\t\t\t\t\t\t\t\t";
                } elseif (((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")) == "ROLE_ADMIN")) {
                    // line 382
                    echo "\t\t\t\t\t\t\t\t\t<td>Administrador</td>
\t\t\t\t\t\t\t\t\t";
                }
                // line 384
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t<button data-href=\"\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button data-href=\"\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 398
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\"><a href=\"#\">No hay usuarios.</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t\t<div class=\"row\">
\t\t\t<div id=\"mod_informacion\" style=\"display:none\" class=\"mod col-md-10\">
\t\t\t
\t\t\t</div>
\t\t</div>
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
        // line 451
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 452
            echo "\t\t\t\t\t\t\t\t\t\t\t  <a href=\"#\" data-idprod='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"), "html", null, true);
            echo "' data-nombre='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "' data-unid='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "' class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t    ";
            // line 453
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t    <span class=\"glyphicon glyphicon-plus-sign pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
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
        // line 490
        echo "\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class='modal-footer'>
\t\t\t\t\t\t\t<button type=\"button\" id=\"crearPed\" class=\"btn btn-primary complement-1-b\" data-url=\"";
        // line 492
        echo $this->env->getExtension('routing')->getPath("genPedido");
        echo "\">Crear Pedido</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"editPed\" class=\"btn btn-primary complement-1-b hidden\" data-url=\"";
        // line 493
        echo $this->env->getExtension('routing')->getPath("editPedido");
        echo "\">Editar Pedido</button>
\t\t\t\t\t\t\t<button class='btn btn-danger' type='button' data-dismiss='modal' > Cancelar</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t</div>
\t<div id='modal-showpedido' class=\"modal fade\" tabindex='-1' role='dialog'  aria-labelledby='ModalLabel' aria-hidden='true'>
\t\t\t\t<div class=\"modal-dialog\" style=\"width:400px\">
\t\t\t\t\t<div class='modal-content'>
\t\t\t\t\t\t<div class='modal-header complement-1-b'>
\t\t\t\t\t\t\t<button class='close' type='button' data-dismiss='modal' aria-hidden='true'> ×</button>
\t\t\t\t\t\t\t<div class='modal-title'>
\t\t\t\t\t\t\t\t<strong>Nº pedido: </strong><span id=\"showIdPed\"></span>
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
        // line 533
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

    // line 547
    public function block_javascript($context, array $blocks = array())
    {
        // line 548
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.confirm.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 552
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
        return array (  906 => 552,  902 => 551,  898 => 550,  894 => 549,  889 => 548,  886 => 547,  868 => 533,  825 => 493,  821 => 492,  817 => 490,  783 => 457,  773 => 453,  764 => 452,  760 => 451,  709 => 402,  700 => 398,  683 => 385,  677 => 384,  673 => 382,  669 => 380,  666 => 379,  662 => 378,  658 => 377,  654 => 376,  650 => 375,  646 => 374,  642 => 373,  637 => 372,  632 => 371,  595 => 336,  586 => 333,  571 => 326,  563 => 323,  556 => 319,  551 => 317,  542 => 315,  536 => 313,  530 => 312,  492 => 276,  483 => 273,  474 => 269,  464 => 263,  457 => 259,  452 => 257,  443 => 255,  437 => 253,  431 => 252,  393 => 216,  384 => 213,  369 => 206,  361 => 203,  354 => 199,  349 => 197,  340 => 195,  334 => 193,  328 => 192,  282 => 148,  273 => 144,  255 => 137,  245 => 134,  238 => 130,  228 => 129,  223 => 127,  218 => 125,  214 => 124,  209 => 123,  204 => 122,  142 => 62,  137 => 60,  131 => 58,  120 => 50,  111 => 44,  103 => 39,  98 => 36,  96 => 35,  89 => 31,  83 => 28,  77 => 25,  71 => 22,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
