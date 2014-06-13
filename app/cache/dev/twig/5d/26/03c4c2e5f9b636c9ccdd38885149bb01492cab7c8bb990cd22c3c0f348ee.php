<?php

/* RecetasBundle:Default:recetas.html.twig */
class __TwigTemplate_5d2603c4c2e5f9b636c9ccdd38885149bb01492cab7c8bb990cd22c3c0f348ee extends Twig_Template
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
        echo "Mis recetas - Gestor de cocina ";
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 4
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t\t
\t\t
\t";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t<div class='content'>
\t\t\t\t<div class='navbar navbar-default complement-1-b'>
\t\t\t\t\t<div class='container'> 
\t\t\t\t\t\t<div class='navbar-header'>
\t\t\t\t\t\t\t<button class='navbar-toggle' type='button', data-toggle='collapse', data-target='navbar-collapse'>
\t\t\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a class='navbar-brand' href='#'> Gestor de cocina</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='navbar-collapse collapse'>
\t\t\t\t\t\t\t<ul class='nav navbar-nav menu'>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"> Inicio</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 26
            echo "\t\t\t\t\t\t\t\t<li  class='active'>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\"> Mis Recetas</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t\t\t\t";
        // line 31
        echo "\t\t\t\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("centro_log");
            echo "\"> Centro Logístico</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\"> Almacén</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class='nav navbar-nav navbar-right menu-user'>
\t\t\t\t\t\t\t";
        // line 42
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 43
            echo "\t\t\t\t\t\t\t\t<li class='dropdown'>
\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>  
\t\t\t\t\t\t\t\t\t\t<span>Usuario: <strong>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
            echo "</strong></span>
\t\t\t\t\t\t\t\t\t\t<span class='caret caret-white'></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class='dropdown-menu complement-1-b'>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("perfil");
            echo "\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Perfil</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-off'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Cerrar Sesión</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t\t\t\t<li><a class=\"underline\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a></li>
\t\t        \t\t\t\t<li><a href=\"\">|</a></li>
\t\t        \t\t\t\t<li><a class=\"underline\" href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("registro");
            echo "\">Registro</a></li>
\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<div class='container'>
\t\t\t\t<div class='row row-grid'>
\t\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t\t<a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("nueva_receta");
        echo "\">
\t\t\t\t\t\t\t<button class='btn btn-primary complement-1-b'> Nueva Receta</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id='panel-grid' class='panel panel-primary panel-view'>
\t\t\t\t\t<div class='panel-heading complement-1-b'>
\t\t\t\t\t\t<span> 
\t\t\t\t\t\t\t<strong> Mis recetas</strong>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class='btn-group pull-right dropdown-head-panel'>
\t\t\t\t\t\t\t<button class='btn btn-primary complement-1-b dropdown-toggle' type='button' data-toggle='dropdown'> 
\t\t\t\t\t\t\t\tOrdenar  
\t\t\t\t\t\t\t\t<span class='caret'></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class='dropdown-menu' role='menu'>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='#'>  Ordenar por:</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class='divider'></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='#'> Tipo</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='#'> Fecha</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='panel-body'>
\t\t\t\t\t\t<div class='row row-grid'>
\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            if (($this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "creador"), "id") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))) {
                // line 108
                echo "\t\t\t\t\t\t\t<div class='col-sm-6 col-md-3'>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<figure class='receta' data-id=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<img class='img-rounded' alt='300x200' src=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "foto")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<a class='nombre' href=\"\">";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t<p class='description info_hide'>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<div class='info-rec content-hide'>
\t\t\t\t\t\t\t\t\t\t\t<div id='slug_edit'>";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div id='slug_del'>";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 119
                echo "\t\t\t\t\t\t\t\t\t\t\t<p class='desc'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class='ingr list-group'>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 121
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
                    if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "receta"), "id") == $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "nombre"), "html", null, true);
                        echo " <span class=\"badge\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "cantidad"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "unidad"), "html", null, true);
                        echo "</span></li>

\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_iterated'] = true;
                    }
                }
                if (!$context['_iterated']) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>No hay ingredientes</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class='precio'>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "precio"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class='comensales'>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "comensales"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id='modal-prepare' class=\"modal fade\" tabindex='-1' role='dialog'  aria-labelledby='ModalLabel' aria-hidden='true'>
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class='modal-content'>
\t\t\t\t\t\t<div class='modal-header complement-1-b'>
\t\t\t\t\t\t\t<button class='close' type='button' data-dismiss='modal' aria-hidden='true'> ×</button>
\t\t\t\t\t\t\t<div class='modal-title'>
\t\t\t\t\t\t\t\t<span id='ModalLabel' class='col-md-9'></span>

\t\t\t\t\t\t\t\t<div class='btn-group btn-group-sm'>
\t\t\t\t\t\t\t\t\t\t<button data-href=\"\" id='edit' class=\"btn btn-primary complement-1-b\">
\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-edit'></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button data-href=\"\" data-type=\"delete\" id='delete' class='btn btn-danger'>
\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-trash' ></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='modal-body'>
\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t<div class='col-md-4'>
\t\t\t\t\t\t\t\t\t<div id='img-rec'></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='col-md-6'>
\t\t\t\t\t\t\t\t\t<h4> Ingredientes</h4>
\t\t\t\t\t\t\t\t\t<ul class='ingr'></ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4> Preparación</h4>
\t\t\t\t\t\t\t<p class='desc'></p>
\t\t\t\t\t\t\t<table class='info_pr_rec table'>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th class='col-md-4'> Precio / pers</th>
\t\t\t\t\t\t\t\t\t\t<th class='col-md-4'> Comensales</th>
\t\t\t\t\t\t\t\t\t\t<th class='col-md-4'> P. Total</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class='precio'></td>
\t\t\t\t\t\t\t\t\t\t<td class='comensales'></td>
\t\t\t\t\t\t\t\t\t\t<td class='pr-total'></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class='modal-footer'>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<input class=\"col-md-4\" name=\"comensales\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<button id=\"prepare_rec\" type='button' class='btn btn-primary complement-1-b'> Preparar</button>
\t\t\t\t\t\t\t<button class='btn btn-danger' type='button' data-dismiss='modal' > Cancelar</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"notification\"></div>
\t\t\t
\t\t</div>
\t";
    }

    // line 205
    public function block_javascript($context, array $blocks = array())
    {
        // line 206
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap.touchspin.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.confirm.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:recetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 210,  378 => 209,  370 => 207,  290 => 136,  276 => 129,  234 => 119,  226 => 116,  165 => 76,  134 => 57,  110 => 42,  100 => 37,  330 => 193,  326 => 192,  317 => 190,  262 => 125,  257 => 141,  242 => 129,  231 => 121,  210 => 103,  192 => 93,  167 => 75,  616 => 357,  612 => 356,  608 => 355,  604 => 354,  600 => 353,  592 => 351,  574 => 336,  552 => 332,  546 => 331,  538 => 329,  533 => 328,  516 => 327,  491 => 304,  410 => 231,  401 => 226,  396 => 224,  371 => 206,  364 => 200,  350 => 188,  327 => 167,  307 => 157,  281 => 152,  271 => 149,  225 => 119,  205 => 100,  190 => 97,  188 => 96,  160 => 77,  124 => 50,  150 => 70,  65 => 16,  237 => 137,  232 => 136,  152 => 71,  146 => 65,  126 => 51,  118 => 46,  113 => 43,  494 => 305,  490 => 304,  486 => 303,  482 => 302,  478 => 294,  473 => 300,  470 => 299,  460 => 292,  448 => 283,  438 => 276,  432 => 273,  429 => 272,  412 => 259,  403 => 253,  400 => 251,  338 => 195,  333 => 189,  325 => 183,  313 => 160,  308 => 171,  303 => 180,  297 => 156,  277 => 151,  272 => 128,  266 => 148,  259 => 142,  244 => 128,  216 => 113,  195 => 94,  186 => 88,  178 => 83,  170 => 77,  300 => 153,  296 => 152,  292 => 162,  287 => 150,  284 => 149,  256 => 130,  249 => 134,  239 => 121,  212 => 111,  207 => 107,  153 => 66,  127 => 50,  114 => 42,  90 => 32,  76 => 26,  81 => 26,  70 => 9,  23 => 1,  906 => 552,  902 => 551,  898 => 550,  894 => 549,  889 => 548,  886 => 547,  868 => 533,  825 => 493,  821 => 492,  817 => 490,  783 => 457,  773 => 453,  764 => 452,  760 => 451,  709 => 402,  700 => 398,  683 => 385,  677 => 384,  673 => 382,  669 => 380,  666 => 379,  662 => 378,  658 => 377,  654 => 376,  650 => 375,  646 => 374,  642 => 373,  637 => 372,  632 => 371,  595 => 352,  586 => 333,  571 => 326,  563 => 323,  556 => 319,  551 => 317,  542 => 330,  536 => 313,  530 => 312,  492 => 276,  483 => 273,  464 => 263,  452 => 257,  443 => 262,  431 => 252,  369 => 206,  361 => 203,  354 => 199,  349 => 197,  340 => 195,  334 => 194,  328 => 192,  282 => 148,  255 => 136,  245 => 134,  228 => 129,  223 => 127,  218 => 110,  137 => 60,  77 => 25,  53 => 9,  480 => 162,  474 => 269,  469 => 158,  461 => 155,  457 => 259,  453 => 151,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 271,  423 => 142,  413 => 134,  409 => 132,  407 => 229,  402 => 130,  398 => 225,  393 => 216,  387 => 122,  384 => 213,  381 => 212,  379 => 119,  374 => 208,  368 => 112,  365 => 206,  362 => 205,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 191,  314 => 189,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 163,  285 => 153,  283 => 88,  278 => 86,  268 => 146,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 138,  229 => 135,  220 => 70,  214 => 105,  177 => 65,  169 => 60,  140 => 55,  132 => 70,  128 => 49,  107 => 40,  61 => 13,  273 => 141,  269 => 127,  254 => 92,  243 => 88,  240 => 121,  238 => 130,  235 => 126,  230 => 117,  227 => 117,  224 => 71,  221 => 114,  219 => 113,  217 => 113,  208 => 110,  204 => 108,  179 => 69,  159 => 61,  143 => 56,  135 => 57,  119 => 45,  102 => 36,  71 => 22,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 33,  89 => 30,  85 => 30,  75 => 20,  68 => 17,  56 => 9,  87 => 31,  21 => 2,  26 => 6,  93 => 33,  88 => 30,  78 => 25,  46 => 5,  27 => 4,  44 => 21,  31 => 2,  28 => 3,  201 => 98,  196 => 95,  183 => 88,  171 => 61,  166 => 71,  163 => 62,  158 => 68,  156 => 69,  151 => 67,  142 => 62,  138 => 54,  136 => 56,  121 => 46,  117 => 46,  105 => 40,  91 => 32,  62 => 7,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 23,  69 => 23,  47 => 9,  40 => 8,  37 => 3,  22 => 2,  246 => 122,  157 => 69,  145 => 65,  139 => 45,  131 => 58,  123 => 47,  120 => 50,  115 => 43,  111 => 42,  108 => 39,  101 => 37,  98 => 36,  96 => 33,  83 => 24,  74 => 25,  66 => 8,  55 => 15,  52 => 21,  50 => 8,  43 => 8,  41 => 16,  35 => 13,  32 => 4,  29 => 5,  209 => 123,  203 => 105,  199 => 107,  193 => 98,  189 => 71,  187 => 90,  182 => 66,  176 => 64,  173 => 84,  168 => 78,  164 => 78,  162 => 87,  154 => 58,  149 => 51,  147 => 64,  144 => 49,  141 => 48,  133 => 56,  130 => 41,  125 => 51,  122 => 43,  116 => 45,  112 => 43,  109 => 40,  106 => 40,  103 => 37,  99 => 31,  95 => 32,  92 => 31,  86 => 16,  82 => 27,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 6,  54 => 10,  51 => 5,  48 => 13,  45 => 17,  42 => 4,  39 => 15,  36 => 5,  33 => 6,  30 => 7,);
    }
}
