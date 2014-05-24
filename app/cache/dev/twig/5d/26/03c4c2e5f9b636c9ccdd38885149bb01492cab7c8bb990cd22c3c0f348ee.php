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
\t\t\t\t\t\t\t\t<li  class='active'>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("recetas");
        echo "\"> Recetas</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("centro_log");
        echo "\"> Centro Logístico</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("almacen");
        echo "\"> Almacén</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class='nav navbar-nav navbar-right menu-user'>
\t\t\t\t\t\t\t\t<li class='dropdown'>
\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>  
\t\t\t\t\t\t\t\t\t\t<span>   Usuario 1</span>
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
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-off'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Cerrar Sesión</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<div class='container'>
\t\t\t\t<div class='row row-grid'>
\t\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t\t<a href=\"";
        // line 64
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
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 96
            echo "\t\t\t\t\t\t\t<div class='col-sm-6 col-md-3'>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<figure class='receta' data-id=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img class='img-rounded' alt='300x200' src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_image.png"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<a class='nombre' href=\"\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t<p class='description info_hide'>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<div class='info-rec content-hide'>
\t\t\t\t\t\t\t\t\t\t\t<div id='slug_edit'>";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "slug"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div id='slug_del'>";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "slug"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t\t<p class='desc'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class='ingr list-group'>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 109
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
                if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "receta"), "id") == $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))) {
                    // line 110
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
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Not found</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class='precio'>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "precio"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class='comensales'>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "comensales"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
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
\t\t\t\t\t\t\t\t\t\t<button data-href=\"\" id='delete' class='btn btn-danger'>
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
\t\t</div>
\t";
    }

    // line 192
    public function block_javascript($context, array $blocks = array())
    {
        // line 193
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap.touchspin.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 196
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
        return array (  335 => 196,  331 => 195,  327 => 194,  322 => 193,  319 => 192,  248 => 124,  235 => 117,  231 => 116,  228 => 115,  221 => 113,  205 => 110,  199 => 109,  193 => 107,  189 => 105,  185 => 104,  180 => 102,  176 => 101,  171 => 99,  167 => 98,  163 => 96,  159 => 95,  125 => 64,  102 => 44,  87 => 32,  81 => 29,  75 => 26,  69 => 23,  53 => 9,  50 => 8,  42 => 4,  37 => 3,  31 => 2,);
    }
}
