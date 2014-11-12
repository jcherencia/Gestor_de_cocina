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
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap-switch.css"), "html", null, true);
        echo "\">
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "

\t<div class=\"container\">\t
\t<div id=\"dataSwitch\"></div>
\t<div id=\"url_ini\" data-url=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"></div>
\t\t<div class=\"row row-grid\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<button  data-href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("nuevo_producto");
        echo "\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\tNuevo Producto
\t\t\t\t</button>
\t\t\t</div>
\t \t</div>
\t\t<div id=\"productos\" class=\"panel panel-primary panel-view\" data-url=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("verproductos");
        echo "\" data-user=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id"), "html", null, true);
        echo "\" data-tipo=\"all_productos\">
\t\t<div class=\"panel-heading complement-1-b\">
\t\t \t<span>Almacén</span>
\t\t \t<div class='btn-group pull-right dropdown-head-panel'>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"toggleviews\" data-target=\"productos\" checked>
\t\t\t\t\t\t</div>
\t \t</div>
\t \t<div class=\"panel-body\">
\t \t\t<div class='row row-grid' id=\"cont_productos\">
\t \t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 33
            echo "\t \t\t\t<div class=\"col-sm-6 col-md-3\">
\t \t\t\t\t<figure>
 \t\t\t\t\t\t<img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "foto")), "html", null, true);
            echo "\">
 \t\t\t\t\t\t\t<figcaption>
 \t\t\t\t\t\t\t\t<a href=\"\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "nombre"), "html", null, true);
            echo "</a>
 \t\t\t\t\t\t\t\t<table class=\"table info_hide\">
 \t\t\t\t\t\t\t\t\t<tr>
 \t\t\t\t\t\t\t\t\t\t<td>Precio</td>
 \t\t\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "precio"), "html", null, true);
            echo " € / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "unidadCompra"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stock</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "stock"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stock mínimo</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "stockMin"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "unidad"), "html", null, true);
            echo "<span class=\"pr_total\"></span></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mod_producto", array("producto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"visible_lg\"> Editar</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrar_producto", array("producto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id"))), "html", null, true);
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
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
\t \t\t\t
\t\t\t\t</div> ";
        // line 72
        echo "\t\t\t\t<div id=\"allproductos\" data-user=\"NULL\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("verproductos");
        echo "\" data-tipo=\"all_productos\"></div>
\t\t \t</div>
\t\t</div>

\t
\t</div>
\t";
    }

    // line 79
    public function block_javascript($context, array $blocks = array())
    {
        // line 80
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.confirm.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
        \t
        \t<script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/datatable.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 87
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
        return array (  213 => 86,  191 => 80,  188 => 79,  172 => 69,  155 => 58,  148 => 54,  129 => 45,  118 => 41,  84 => 23,  364 => 218,  359 => 217,  356 => 216,  339 => 205,  334 => 202,  300 => 169,  281 => 164,  277 => 163,  253 => 141,  242 => 131,  234 => 124,  200 => 82,  178 => 71,  120 => 53,  110 => 49,  76 => 18,  97 => 41,  77 => 28,  260 => 103,  256 => 102,  251 => 101,  248 => 100,  236 => 95,  231 => 93,  225 => 91,  205 => 77,  192 => 69,  190 => 68,  186 => 66,  180 => 63,  167 => 56,  160 => 53,  157 => 52,  150 => 49,  146 => 47,  134 => 42,  126 => 38,  74 => 9,  70 => 15,  34 => 6,  1145 => 631,  1141 => 630,  1137 => 629,  1133 => 628,  1129 => 627,  1125 => 626,  1121 => 625,  1116 => 624,  1113 => 623,  1095 => 609,  1063 => 580,  1045 => 565,  1041 => 564,  1037 => 562,  1003 => 529,  993 => 525,  984 => 524,  980 => 523,  941 => 486,  939 => 485,  937 => 484,  935 => 483,  933 => 482,  931 => 481,  921 => 472,  916 => 468,  907 => 464,  896 => 458,  892 => 457,  886 => 454,  881 => 453,  876 => 452,  862 => 441,  858 => 440,  854 => 439,  850 => 438,  834 => 424,  831 => 418,  829 => 417,  827 => 416,  825 => 415,  823 => 414,  821 => 413,  819 => 412,  814 => 408,  805 => 404,  799 => 402,  793 => 398,  787 => 397,  776 => 392,  773 => 391,  764 => 387,  756 => 384,  753 => 383,  750 => 382,  741 => 378,  733 => 375,  730 => 374,  727 => 373,  717 => 369,  715 => 368,  712 => 367,  708 => 366,  704 => 364,  701 => 363,  695 => 362,  691 => 360,  687 => 358,  683 => 356,  679 => 354,  676 => 353,  672 => 352,  668 => 351,  664 => 350,  660 => 349,  656 => 348,  652 => 347,  647 => 346,  642 => 345,  637 => 342,  633 => 340,  631 => 339,  594 => 304,  585 => 301,  576 => 297,  569 => 292,  566 => 290,  556 => 285,  548 => 282,  540 => 279,  537 => 278,  535 => 277,  528 => 275,  524 => 274,  519 => 272,  506 => 270,  500 => 268,  494 => 267,  456 => 231,  447 => 228,  438 => 224,  428 => 218,  420 => 215,  416 => 214,  411 => 212,  396 => 208,  390 => 207,  352 => 171,  343 => 168,  328 => 161,  320 => 158,  308 => 154,  303 => 152,  290 => 165,  284 => 148,  232 => 103,  223 => 99,  206 => 93,  197 => 72,  185 => 86,  175 => 83,  165 => 79,  161 => 78,  127 => 71,  53 => 9,  37 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 210,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 219,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 155,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 147,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 83,  177 => 65,  169 => 67,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 30,  61 => 10,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 87,  208 => 68,  204 => 83,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 72,  119 => 42,  108 => 36,  102 => 33,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 7,  38 => 6,  94 => 40,  89 => 20,  85 => 34,  79 => 18,  75 => 17,  68 => 14,  56 => 10,  50 => 6,  29 => 3,  87 => 25,  72 => 16,  55 => 5,  21 => 2,  26 => 6,  98 => 32,  93 => 28,  88 => 16,  78 => 10,  46 => 5,  27 => 4,  40 => 15,  44 => 12,  35 => 5,  31 => 2,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 81,  183 => 82,  171 => 58,  166 => 71,  163 => 54,  158 => 67,  156 => 62,  151 => 77,  142 => 45,  138 => 49,  136 => 74,  123 => 37,  121 => 36,  117 => 69,  115 => 51,  105 => 29,  101 => 47,  91 => 17,  69 => 25,  66 => 7,  62 => 23,  49 => 19,  24 => 1,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 85,  203 => 78,  199 => 67,  193 => 73,  189 => 81,  187 => 84,  182 => 66,  176 => 72,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 60,  147 => 58,  144 => 57,  141 => 76,  133 => 55,  130 => 54,  125 => 44,  122 => 70,  116 => 41,  112 => 42,  109 => 34,  106 => 35,  103 => 32,  99 => 31,  95 => 46,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 11,  60 => 13,  57 => 11,  54 => 7,  51 => 14,  48 => 106,  45 => 100,  42 => 4,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
