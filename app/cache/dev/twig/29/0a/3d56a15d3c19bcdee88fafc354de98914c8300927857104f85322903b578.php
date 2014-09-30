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
\t\t
\t";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "

\t<div class=\"container\">\t
\t\t<div class=\"row row-grid\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<button  data-href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("nuevo_producto");
        echo "\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\tNuevo Producto
\t\t\t\t</button>
\t\t\t</div>
\t \t</div>
\t\t<div id=\"panel-grid\" class=\"panel panel-primary panel-view\">
\t\t<div class=\"panel-heading complement-1-b\">
\t\t \t<span>Almacén</span>
\t\t \t<div class=\"btn-group pull-right dropdown-head-panel\">
\t\t\t \t<button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle complement-1-b\">Ordenar  
\t\t\t \t\t<span class=\"caret\"></span>
\t\t\t \t</button>
\t\t \t<ul role=\"menu\" class=\"dropdown-menu\">
\t\t\t \t<li>
\t\t\t \t\t<a href=\"#\">Ordenar por:</a>
\t\t\t \t</li>
\t\t\t \t<li class=\"divider\"></li>
\t\t\t \t<li>
\t\t\t \t\t<a href=\"#\">Tipo</a>
\t\t\t \t</li>
\t\t \t\t<li>
\t\t \t\t<a href=\"#\">Fecha</a>
\t\t \t\t</li>
\t \t\t</ul>
\t\t \t</div>
\t \t</div>
\t \t<div class=\"panel-body\">
\t \t\t<div class=\"row row-grid\">
\t \t\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 43
            echo "\t \t\t\t<div class=\"col-sm-6 col-md-3\">
\t \t\t\t\t<figure>
 \t\t\t\t\t\t<img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "foto")), "html", null, true);
            echo "\">
 \t\t\t\t\t\t\t<figcaption>
 \t\t\t\t\t\t\t\t<a href=\"\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "</a>
 \t\t\t\t\t\t\t\t<table class=\"table info_hide\">
 \t\t\t\t\t\t\t\t\t<tr>
 \t\t\t\t\t\t\t\t\t\t<td>Precio</td>
 \t\t\t\t\t\t\t\t\t\t<td>";
            // line 51
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
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "stock"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stock mínimo</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "stockMin"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "<span class=\"pr_total\"></span></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mod_producto", array("producto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"visible_lg\"> Editar</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"";
            // line 68
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
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t \t\t\t
\t\t\t\t</div>
\t\t \t</div>
\t\t</div>

\t
\t</div>
\t";
    }

    // line 87
    public function block_javascript($context, array $blocks = array())
    {
        // line 88
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.confirm.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 91
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
        return array (  195 => 91,  191 => 90,  316 => 189,  307 => 187,  304 => 186,  287 => 175,  282 => 172,  165 => 76,  129 => 53,  114 => 51,  100 => 46,  76 => 29,  97 => 41,  77 => 28,  256 => 102,  251 => 101,  248 => 139,  236 => 95,  231 => 93,  225 => 133,  205 => 77,  192 => 69,  190 => 68,  186 => 66,  180 => 63,  167 => 56,  146 => 47,  134 => 59,  70 => 23,  34 => 6,  1044 => 611,  1040 => 610,  1036 => 609,  1032 => 608,  1028 => 607,  1024 => 606,  1019 => 605,  1016 => 604,  998 => 590,  966 => 561,  948 => 546,  944 => 545,  940 => 543,  906 => 510,  896 => 506,  887 => 505,  883 => 504,  844 => 467,  842 => 466,  840 => 465,  838 => 464,  836 => 463,  834 => 462,  824 => 453,  819 => 449,  810 => 445,  799 => 439,  795 => 438,  789 => 435,  784 => 434,  779 => 433,  774 => 430,  752 => 402,  749 => 396,  747 => 395,  745 => 394,  743 => 393,  741 => 392,  739 => 391,  737 => 390,  732 => 386,  723 => 382,  717 => 380,  712 => 377,  710 => 374,  704 => 373,  700 => 371,  692 => 368,  689 => 367,  685 => 365,  677 => 362,  674 => 361,  670 => 360,  666 => 358,  663 => 357,  657 => 356,  653 => 354,  649 => 352,  645 => 350,  642 => 349,  638 => 348,  634 => 347,  630 => 346,  626 => 345,  622 => 344,  618 => 343,  613 => 342,  608 => 341,  603 => 338,  599 => 336,  597 => 335,  560 => 300,  551 => 297,  542 => 293,  539 => 292,  534 => 283,  531 => 281,  521 => 276,  513 => 273,  505 => 270,  502 => 269,  500 => 268,  493 => 266,  489 => 265,  484 => 263,  471 => 261,  465 => 259,  459 => 258,  421 => 222,  412 => 219,  403 => 215,  385 => 206,  376 => 203,  367 => 201,  361 => 199,  317 => 162,  308 => 159,  293 => 152,  277 => 146,  255 => 141,  249 => 139,  197 => 72,  188 => 90,  170 => 83,  160 => 53,  150 => 49,  126 => 38,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 209,  387 => 122,  384 => 121,  381 => 205,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 198,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 188,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 149,  283 => 88,  278 => 86,  268 => 143,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 134,  220 => 70,  214 => 83,  177 => 65,  169 => 60,  140 => 44,  132 => 51,  128 => 49,  107 => 47,  61 => 6,  273 => 145,  269 => 94,  254 => 92,  243 => 99,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 87,  159 => 61,  143 => 56,  135 => 73,  119 => 52,  102 => 45,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  38 => 6,  94 => 42,  89 => 20,  85 => 34,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 16,  78 => 10,  46 => 5,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 58,  166 => 71,  163 => 54,  158 => 67,  156 => 66,  151 => 68,  142 => 45,  138 => 54,  136 => 56,  121 => 36,  117 => 44,  105 => 47,  91 => 17,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 7,  40 => 15,  37 => 3,  22 => 2,  246 => 90,  157 => 52,  145 => 62,  139 => 45,  131 => 52,  123 => 37,  120 => 40,  115 => 34,  111 => 32,  108 => 36,  101 => 32,  98 => 43,  96 => 31,  83 => 25,  74 => 9,  66 => 7,  55 => 5,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 89,  182 => 88,  176 => 86,  173 => 65,  168 => 79,  164 => 59,  162 => 57,  154 => 66,  149 => 51,  147 => 58,  144 => 64,  141 => 48,  133 => 55,  130 => 40,  125 => 55,  122 => 43,  116 => 68,  112 => 42,  109 => 48,  106 => 43,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 105,  45 => 100,  42 => 4,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
