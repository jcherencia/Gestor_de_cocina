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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : $this->getContext($context, "receta_edit")), "nombre"), "html", null, true);
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
        return array (  97 => 41,  77 => 28,  256 => 102,  251 => 101,  248 => 100,  236 => 95,  231 => 93,  225 => 91,  205 => 77,  192 => 69,  190 => 68,  186 => 66,  180 => 63,  167 => 56,  146 => 47,  134 => 42,  70 => 23,  34 => 6,  1044 => 611,  1040 => 610,  1036 => 609,  1032 => 608,  1028 => 607,  1024 => 606,  1019 => 605,  1016 => 604,  998 => 590,  966 => 561,  948 => 546,  944 => 545,  940 => 543,  906 => 510,  896 => 506,  887 => 505,  883 => 504,  844 => 467,  842 => 466,  840 => 465,  838 => 464,  836 => 463,  834 => 462,  824 => 453,  819 => 449,  810 => 445,  799 => 439,  795 => 438,  789 => 435,  784 => 434,  779 => 433,  774 => 430,  752 => 402,  749 => 396,  747 => 395,  745 => 394,  743 => 393,  741 => 392,  739 => 391,  737 => 390,  732 => 386,  723 => 382,  717 => 380,  712 => 377,  710 => 374,  704 => 373,  700 => 371,  692 => 368,  689 => 367,  685 => 365,  677 => 362,  674 => 361,  670 => 360,  666 => 358,  663 => 357,  657 => 356,  653 => 354,  649 => 352,  645 => 350,  642 => 349,  638 => 348,  634 => 347,  630 => 346,  626 => 345,  622 => 344,  618 => 343,  613 => 342,  608 => 341,  603 => 338,  599 => 336,  597 => 335,  560 => 300,  551 => 297,  542 => 293,  539 => 292,  534 => 283,  531 => 281,  521 => 276,  513 => 273,  505 => 270,  502 => 269,  500 => 268,  493 => 266,  489 => 265,  484 => 263,  471 => 261,  465 => 259,  459 => 258,  421 => 222,  412 => 219,  403 => 215,  385 => 206,  376 => 203,  367 => 201,  361 => 199,  317 => 162,  308 => 159,  293 => 152,  277 => 146,  255 => 141,  249 => 139,  197 => 72,  188 => 90,  170 => 83,  160 => 53,  150 => 49,  126 => 38,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 209,  387 => 122,  384 => 121,  381 => 205,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 198,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 149,  283 => 88,  278 => 86,  268 => 143,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 83,  177 => 65,  169 => 60,  140 => 44,  132 => 51,  128 => 49,  107 => 30,  61 => 6,  273 => 145,  269 => 94,  254 => 92,  243 => 99,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 73,  119 => 42,  102 => 42,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 40,  89 => 20,  85 => 34,  75 => 17,  68 => 14,  56 => 10,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 16,  78 => 10,  46 => 6,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 58,  166 => 71,  163 => 54,  158 => 67,  156 => 66,  151 => 63,  142 => 45,  138 => 54,  136 => 56,  121 => 36,  117 => 44,  105 => 29,  91 => 17,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 15,  37 => 4,  22 => 2,  246 => 90,  157 => 52,  145 => 46,  139 => 45,  131 => 52,  123 => 37,  120 => 40,  115 => 34,  111 => 32,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 9,  66 => 7,  55 => 5,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 77,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 40,  125 => 44,  122 => 43,  116 => 68,  112 => 42,  109 => 34,  106 => 43,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 105,  45 => 100,  42 => 5,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
