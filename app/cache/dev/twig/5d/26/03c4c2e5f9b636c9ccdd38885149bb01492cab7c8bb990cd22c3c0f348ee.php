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
\t\t\t\t";
        // line 76
        echo "\t\t\t<div class='container'>
\t\t\t\t<div class='row row-grid'>
\t\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("nueva_receta");
        echo "\">
\t\t\t\t\t\t\t<button class='btn btn-primary complement-1-b'> Nueva Receta</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id='panel-grid' class='panel panel-primary panel-view'>
\t\t\t\t\t<div class='panel-heading complement-1-b'>
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#misrecetas\">
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span>  Mis recetas</span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        // line 94
        echo "\t\t\t\t\t\t<div class='btn-group pull-right dropdown-head-panel'>
\t\t\t\t\t\t\t<button class='btn btn-primary complement-1-b dropdown-toggle' type='button' data-toggle='dropdown'> 
\t\t\t\t\t\t\t\tCategorias  
\t\t\t\t\t\t\t\t<span class='caret'></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class='dropdown-menu' role='menu'>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='#'>  Ver categoría:</a>
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
\t\t\t\t\t<div id=\"misrecetas\" class=\"panel-collapse collapse in\">
\t\t\t\t\t\t<div class='panel-body'>
\t\t\t\t\t\t\t<div class='row row-grid'>
\t\t\t\t\t\t\t";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            if (($this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "creador"), "id") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))) {
                // line 117
                echo "\t\t\t\t\t\t\t\t<div class='col-sm-6 col-md-3'>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<figure class='receta' data-id=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img class='img-rounded' alt='300x200' src=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "foto")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class='nombre' href=\"\">";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<p class='description info_hide'>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<div class='info-rec content-hide'>
\t\t\t\t\t\t\t\t\t\t\t\t<div id='slug_edit'>";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id='slug_del'>";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 134
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class='desc'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class='ingr list-group'>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 136
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
                    if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "receta"), "id") == $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))) {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "nombre"), "html", null, true);
                        echo " <span class=\"badge\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "cantidad"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "unidad"), "html", null, true);
                        echo "</span></li>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_iterated'] = true;
                    }
                }
                if (!$context['_iterated']) {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>No hay ingredientes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='precio'>";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "precio"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='tiempo'>";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "tiempo"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='comensales'>";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "comensales"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id='panel-grid' class='panel panel-primary panel-view'>
\t\t\t\t\t<div class='panel-heading complement-1-b'>
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#recetas\">
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span>  Todas las recetas</span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        // line 166
        echo "\t\t\t\t\t\t<div class='btn-group pull-right dropdown-head-panel'>
\t\t\t\t\t\t\t<button class='btn btn-primary complement-1-b dropdown-toggle' type='button' data-toggle='dropdown'> 
\t\t\t\t\t\t\t\tCategorias  
\t\t\t\t\t\t\t\t<span class='caret'></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class='dropdown-menu' role='menu'>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='#'>  Ver categoría:</a>
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
\t\t\t\t\t<div id=\"recetas\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t<div class='panel-body'>
\t\t\t\t\t\t\t<div class='row row-grid'>
\t\t\t\t\t\t\t";
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 189
            echo "\t\t\t\t\t\t\t\t<div class='col-sm-6 col-md-3'>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<figure class='receta' data-id=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<img class='img-rounded' alt='300x200' src=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "foto")), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class='nombre' href=\"\">";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<p class='description info_hide'>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "creador"), "nombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "creador"), "apellidos"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<div class='info-rec content-hide'>
\t\t\t\t\t\t\t\t\t\t\t\t<div id='slug_edit'>";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id='slug_del'>";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class='desc'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class='ingr list-group'>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 209
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
                if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "receta"), "id") == $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))) {
                    // line 210
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "nombre"), "html", null, true);
                    echo " <span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "cantidad"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "unidad"), "html", null, true);
                    echo "</span></li>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 213
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>No hay ingredientes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='precio'>";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "precio"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='tiempo'>";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "tiempo"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='comensales'>";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "comensales"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t<h4> Ingredientes </h4>
\t\t\t\t\t\t\t\t\t<ul class='ingr'></ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4> Preparación <span class='tiempo'></span></h4>
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

\t\t\t\t\t\t\t<button id=\"prepare_rec\" data-userid=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("genSolicitud");
        echo "\" type='button' class='btn btn-primary complement-1-b'> Preparar</button>
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

    // line 296
    public function block_javascript($context, array $blocks = array())
    {
        // line 297
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap.touchspin.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.confirm.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 301
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
        return array (  432 => 301,  428 => 300,  424 => 299,  420 => 298,  415 => 297,  412 => 296,  394 => 284,  333 => 225,  320 => 218,  316 => 217,  312 => 216,  309 => 215,  302 => 213,  286 => 210,  280 => 209,  274 => 207,  269 => 199,  265 => 198,  258 => 196,  254 => 195,  250 => 194,  245 => 192,  241 => 191,  237 => 189,  233 => 188,  209 => 166,  196 => 152,  182 => 145,  178 => 144,  174 => 143,  171 => 142,  164 => 140,  148 => 137,  142 => 136,  136 => 134,  131 => 126,  127 => 125,  122 => 123,  118 => 122,  113 => 120,  109 => 119,  105 => 117,  100 => 116,  76 => 94,  61 => 79,  56 => 76,  53 => 9,  50 => 8,  42 => 4,  37 => 3,  31 => 2,);
    }
}
