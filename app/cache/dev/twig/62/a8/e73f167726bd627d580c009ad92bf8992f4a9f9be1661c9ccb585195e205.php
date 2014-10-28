<?php

/* RecetasBundle:Default:index.html.twig */
class __TwigTemplate_62a8e73f167726bd627d580c009ad92bf8992f4a9f9be1661c9ccb585195e205 extends Twig_Template
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
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/notepad.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t\t<div class='content'>
\t\t
\t\t\t\t\t
\t\t<div class='container'>
\t\t\t<div class='row'>
\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t<div class='well note taupe'>
\t\t\t\t\t\t<img class='fondo' src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/photo/chef2.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t<div class='col-md-12'>
\t\t\t\t\t\t\t\t<h1 class='title'> Gestor de cocina</h1>
\t\t\t\t\t\t\t\t<h2 class='subtitle'> Introduce el nombre de tu receta</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='row search'>
\t\t\t\t\t\t\t<form class='col-md-offset-2 col-md-8'>
\t\t\t\t\t\t\t\t<div class=\"input-group search\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"input_busqueda\" onkeyup=\"buscar()\" data-url=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("buscar");
        echo "\" data-url-rec=\"";
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default complement-1-b\" onclick=\"buscar ()\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"resul_busq\"></div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t      
\t\t\t<div class='row'>
\t\t\t\t<div class='col-md-6'>

\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t  <div class=\"panel-heading complement-1-b\">
\t\t\t\t\t  \t<h4>Recetas recientes</h4>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"panel-body notepad\">
\t\t\t\t\t   \t\t<div class=\"lines\"></div>
\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rec_recientes"]) ? $context["rec_recientes"] : $this->getContext($context, "rec_recientes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            if ((twig_length_filter($this->env, (isset($context["rec_recientes"]) ? $context["rec_recientes"] : $this->getContext($context, "rec_recientes"))) > 0)) {
                // line 54
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
                // line 56
                echo "\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 57
            echo "\t\t\t\t\t\t\t\t<li>No hay recetas.</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class='col-md-6'>
\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t  <div class=\"panel-heading complement-1-b\">
\t\t\t\t\t  \t<h4>Top 5 de recetas</h4>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"panel-body notepad\">
\t\t\t\t\t  \t";
        // line 71
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 72
            echo "\t\t\t\t\t   \t\t<div class=\"lines\"></div>
\t\t\t\t\t\t\t<ol class=\"list\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["favoritas"]) ? $context["favoritas"] : $this->getContext($context, "favoritas")));
            foreach ($context['_seq'] as $context["key"] => $context["fav"]) {
                // line 76
                echo "\t\t\t\t\t\t\t\t\t<li><span class=\"index\">";
                echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
                echo "º</span><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta", array("receta" => $this->getAttribute((isset($context["fav"]) ? $context["fav"] : $this->getContext($context, "fav")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fav"]) ? $context["fav"] : $this->getContext($context, "fav")), "nombre"), "html", null, true);
                echo "</a> <span class=\"fav\">(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fav"]) ? $context["fav"] : $this->getContext($context, "fav")), "notamedia"), "html", null, true);
                echo "<span class=\"glyphicon glyphicon-star\"></span>)</span></li>
\t\t\t\t\t\t\t\t\t";
                // line 78
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['fav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t\t\t\t<h4><a href=\"\">Accede a tu cuenta para ver las recetas favoritas.</a></h4>
\t\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!--end row-->
\t\t</div><!--end container-->
\t</div><!--end content-->
\t";
    }

    // line 91
    public function block_javascript($context, array $blocks = array())
    {
        // line 92
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 94,  204 => 93,  199 => 92,  196 => 91,  184 => 82,  180 => 80,  177 => 79,  171 => 78,  160 => 76,  156 => 75,  151 => 72,  149 => 71,  135 => 59,  128 => 57,  122 => 56,  115 => 54,  109 => 53,  78 => 27,  65 => 17,  56 => 10,  53 => 9,  46 => 6,  42 => 5,  37 => 4,  31 => 3,);
    }
}
