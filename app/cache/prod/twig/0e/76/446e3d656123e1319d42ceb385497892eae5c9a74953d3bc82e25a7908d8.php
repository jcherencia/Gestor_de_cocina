<?php

/* CentroLogBundle:Default:pedir_productos.html.twig */
class __TwigTemplate_0e76446e3d656123e1319d42ceb385497892eae5c9a74953d3bc82e25a7908d8 extends Twig_Template
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

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div id='panel-grid' class='panel panel-primary panel-view'>
\t\t\t\t\t<div class='panel-heading complement-1-b'>
\t\t\t\t\t\t<span> 
\t\t\t\t\t\t\t<strong> Mis solicitudes pendientes</strong>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t
\t\t\t\t\t</div>";
        // line 23
        echo "\t\t\t\t\t<div class='panel-body'>
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nombre\" placeholder=\"Nombre de la receta..\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "nombre"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>";
        // line 34
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
    }

    // line 40
    public function block_javascript($context, array $blocks = array())
    {
        // line 41
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "CentroLogBundle:Default:pedir_productos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  77 => 28,  260 => 103,  256 => 102,  251 => 101,  248 => 100,  236 => 95,  231 => 93,  225 => 91,  205 => 77,  192 => 69,  190 => 68,  186 => 66,  180 => 63,  167 => 56,  160 => 53,  157 => 52,  150 => 49,  146 => 47,  134 => 42,  126 => 38,  74 => 9,  70 => 23,  34 => 6,  1145 => 631,  1141 => 630,  1137 => 629,  1133 => 628,  1129 => 627,  1125 => 626,  1121 => 625,  1116 => 624,  1113 => 623,  1095 => 609,  1063 => 580,  1045 => 565,  1041 => 564,  1037 => 562,  1003 => 529,  993 => 525,  984 => 524,  980 => 523,  941 => 486,  939 => 485,  937 => 484,  935 => 483,  933 => 482,  931 => 481,  921 => 472,  916 => 468,  907 => 464,  896 => 458,  892 => 457,  886 => 454,  881 => 453,  876 => 452,  862 => 441,  858 => 440,  854 => 439,  850 => 438,  834 => 424,  831 => 418,  829 => 417,  827 => 416,  825 => 415,  823 => 414,  821 => 413,  819 => 412,  814 => 408,  805 => 404,  799 => 402,  793 => 398,  787 => 397,  776 => 392,  773 => 391,  764 => 387,  756 => 384,  753 => 383,  750 => 382,  741 => 378,  733 => 375,  730 => 374,  727 => 373,  717 => 369,  715 => 368,  712 => 367,  708 => 366,  704 => 364,  701 => 363,  695 => 362,  691 => 360,  687 => 358,  683 => 356,  679 => 354,  676 => 353,  672 => 352,  668 => 351,  664 => 350,  660 => 349,  656 => 348,  652 => 347,  647 => 346,  642 => 345,  637 => 342,  633 => 340,  631 => 339,  594 => 304,  585 => 301,  576 => 297,  569 => 292,  566 => 290,  556 => 285,  548 => 282,  540 => 279,  537 => 278,  535 => 277,  528 => 275,  524 => 274,  519 => 272,  506 => 270,  500 => 268,  494 => 267,  456 => 231,  447 => 228,  438 => 224,  428 => 218,  420 => 215,  416 => 214,  411 => 212,  396 => 208,  390 => 207,  352 => 171,  343 => 168,  328 => 161,  320 => 158,  308 => 154,  303 => 152,  290 => 150,  284 => 148,  232 => 103,  223 => 99,  206 => 93,  197 => 72,  185 => 86,  175 => 83,  165 => 79,  161 => 78,  127 => 71,  53 => 9,  37 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 210,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 155,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 147,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 83,  177 => 65,  169 => 80,  140 => 44,  132 => 51,  128 => 49,  111 => 32,  107 => 30,  61 => 6,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 97,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 72,  119 => 42,  108 => 36,  102 => 42,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 40,  89 => 20,  85 => 34,  79 => 18,  75 => 17,  68 => 14,  56 => 10,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 5,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 16,  78 => 10,  46 => 6,  27 => 4,  40 => 15,  44 => 12,  35 => 5,  31 => 3,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 58,  166 => 71,  163 => 54,  158 => 67,  156 => 66,  151 => 77,  142 => 45,  138 => 54,  136 => 74,  123 => 37,  121 => 36,  117 => 69,  115 => 34,  105 => 29,  101 => 32,  91 => 17,  69 => 25,  66 => 7,  62 => 23,  49 => 19,  24 => 1,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 94,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 76,  133 => 55,  130 => 40,  125 => 44,  122 => 70,  116 => 41,  112 => 42,  109 => 34,  106 => 43,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 106,  45 => 100,  42 => 5,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
