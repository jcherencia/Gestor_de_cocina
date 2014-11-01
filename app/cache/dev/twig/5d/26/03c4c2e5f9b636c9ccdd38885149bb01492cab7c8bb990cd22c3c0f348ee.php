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
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/star-rating.css"), "html", null, true);
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
\t\t
\t";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t<div class='content'>
\t\t\t\t<div id=\"dataSwitch\"></div>
\t\t\t<div class='container'>
\t\t\t\t<div class='row row-grid'>
\t\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("nueva_receta");
        echo "\">
\t\t\t\t\t\t\t<button class='btn btn-primary complement-1-b'><span class=\"glyphicon glyphicon-plus\"></span> Nueva Receta</button>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<div class='btn-group pull-right'>
\t\t\t\t\t\t\t<button class='btn btn-primary complement-1-b dropdown-toggle' type='button' data-toggle='dropdown'> 
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\"></span> Categorias  
\t\t\t\t\t\t\t\t<span class='caret'></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class='dropdown-menu filtro' role='menu'>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("recetas");
        echo "\">Sin filtro</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 32
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filtro_cat", array("categoria" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t\t<div id=\"url_rec\" data-url=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"></div>
\t\t\t\t<div id='panel-grid' class='panel panel-primary panel-view'>
\t\t\t\t\t<div class='panel-heading complement-1-b'>
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#misrecetas\">
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span>  Mis recetas </span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class='btn-group pull-right dropdown-head-panel'>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"toggleviews\" data-target=\"misrecetas\" checked>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"misrecetas\" class=\"panel-collapse collapse in\" data-url=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("getrecetas");
        echo "\" data-user=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class='panel-body'>
\t\t\t\t\t\t\t<div class='row row-grid' id=\"cont_misrecetas\">
\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            if (($this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "creador"), "id") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))) {
                // line 60
                echo "\t\t\t\t\t\t\t\t<div class='col-sm-6 col-md-3'>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<figure class='receta' data-id=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img class='img-rounded' alt='300x200' src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "foto")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class='nombre' href=\"\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<p class='description info_hide'>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<div class='info-rec content-hide'>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"editable\" value=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id='slug_view'>";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id='slug_edit'>";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id='slug_del'>";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<p class='desc'>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class='ingr list-group'>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 75
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
                    if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "receta"), "id") == $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\" data-id=\"";
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
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>No hay ingredientes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='precio'>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "precio"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='tiempo'>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "tiempo"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 84
                if ($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "categoria")) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t    <div class='categoria'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "categoria"), "nombre"), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t \t<div class='categoria'>Sin categoría</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class='comensales'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "comensales"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nota_media\">";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "notamedia"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t<div class='col-sm-6 col-md-3'>
\t\t\t\t\t\t\t\t\t\t\t<figure class='receta' data-id=\"NULL\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class='img-rounded' alt='300x200' src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_image.png"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='nombre' href=\"\">No hay resultados</a>
\t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t\t</figure>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 118
        echo "\t\t\t\t\t\t\t<div id=\"userrecetas\" data-user=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t</div>";
        // line 120
        echo "\t\t\t\t\t</div>";
        // line 121
        echo "\t\t\t\t</div>
\t\t\t\t<div id='panel-grid' class='panel panel-primary panel-view'>
\t\t\t\t\t<div class='panel-heading complement-1-b'>
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#recetas\">
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span>  Todas las recetas</span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class='btn-group pull-right dropdown-head-panel'>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"toggleviews\" data-target=\"recetas\" checked>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"recetas\" class=\"panel-collapse collapse in\" data-url=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("getrecetas");
        echo "\" data-user=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class='panel-body'>
\t\t\t\t\t\t\t<div class='row row-grid' id=\"cont_recetas\">
\t\t\t\t\t\t\t";
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 138
            echo "\t\t\t\t\t\t\t\t<div class='col-sm-6 col-md-3'>
\t\t\t\t\t\t\t\t\t<figure class='receta' data-id=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<img class='img-rounded' alt='300x200' src=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "foto")), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class='nombre' href=\"\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<p class='description info_hide'>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "creador"), "nombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "creador"), "apellidos"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<div class='info-rec content-hide'>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 146
            if (($this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "creador"), "id") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))) {
                // line 147
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"editable\" value=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 149
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"editable\" value=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 151
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div id='slug_edit'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id='slug_del'>";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<p class='desc'>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class='ingr list-group'>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 155
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
                if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "receta"), "id") == $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))) {
                    // line 156
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
                // line 159
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>No hay ingredientes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='precio'>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "precio"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='tiempo'>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "tiempo"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 165
            if ($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "categoria")) {
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t\t\t    <div class='categoria'>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "categoria"), "nombre"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t\t\t \t<div class='categoria'>Sin categoría</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 170
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class='comensales'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "comensales"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nota_media\">";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "notamedia"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t<div class='col-sm-6 col-md-3'>
\t\t\t\t\t\t\t\t\t\t\t<figure class='receta' data-id=\"NULL\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class='img-rounded' alt='300x200' src=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_image.png"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='nombre' href=\"\">No hay resultados</a>
\t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t\t</figure>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"allrecetas\" data-user=\"NULL\"></div>
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

\t\t\t\t\t\t\t\t<div class='btn-group btn-group-sm' id=\"panel-edit\">
\t\t\t\t\t\t\t\t\t\t<button data-href=\"\" id='edit' class=\"btn btn-primary complement-1-b\" >
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
\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t\t\t\t\t<h4> Preparación <span class='tiempo'></span></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t\t\t\t\t<h4> Categoría: <i><span class='categoria'></span></h4></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<input id=\"valoracion\" type=\"number\" class=\"rating\" min=0 max=5 step=1 data-size=\"xs\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"val_receta\" data-url=\"";
        // line 255
        echo $this->env->getExtension('routing')->getPath("valorar");
        echo "\" data-userid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo "\" >
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"notamedia\">
\t\t\t\t\t\t\t\t\t\t<span>Nota media</span>
\t\t\t\t\t\t\t\t\t\t<span id=\"notamedia\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class='modal-footer'>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<input class=\"col-md-4\" name=\"comensales\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<button id=\"prepare_rec\" data-userid=\"";
        // line 273
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
\t\t<a href=\"#\" class=\"scrollup\">Scroll</a>
\t";
    }

    // line 286
    public function block_javascript($context, array $blocks = array())
    {
        // line 287
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap.touchspin.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.confirm.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/star-rating.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/valoracion.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
        \t
        \t<script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/datatable.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 297
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
        return array (  608 => 297,  604 => 296,  600 => 295,  595 => 293,  591 => 292,  587 => 291,  583 => 290,  579 => 289,  575 => 288,  570 => 287,  567 => 286,  548 => 273,  525 => 255,  455 => 187,  442 => 180,  438 => 178,  426 => 171,  421 => 170,  417 => 168,  411 => 166,  409 => 165,  404 => 163,  400 => 162,  397 => 161,  390 => 159,  374 => 156,  368 => 155,  363 => 153,  359 => 152,  354 => 151,  350 => 149,  346 => 147,  344 => 146,  337 => 144,  333 => 143,  329 => 142,  324 => 140,  320 => 139,  317 => 138,  312 => 137,  304 => 134,  289 => 121,  287 => 120,  282 => 118,  279 => 107,  266 => 100,  262 => 98,  249 => 91,  244 => 90,  242 => 89,  238 => 87,  232 => 85,  230 => 84,  226 => 83,  222 => 82,  219 => 81,  212 => 79,  196 => 76,  190 => 75,  185 => 73,  180 => 71,  176 => 70,  172 => 69,  166 => 66,  162 => 65,  157 => 63,  153 => 62,  149 => 60,  143 => 59,  135 => 56,  119 => 43,  110 => 36,  99 => 33,  96 => 32,  92 => 31,  86 => 28,  72 => 17,  65 => 12,  62 => 11,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
