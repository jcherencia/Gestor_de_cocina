<?php

/* RecetasBundle:Default:login.html.twig */
class __TwigTemplate_022dd7d3add4236cfe2045336521311d8283de40d09b51b6ff54296350ebac90 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/login.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"fondo\">
\t<div class=\"container\">
\t\t<div class=\"login\">
\t\t\t<h1>Acceso a Usuarios - Gestor de Cocina</h1>
\t\t\t";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message") == "Bad credentials")) {
                // line 17
                echo "\t\t\t\t\t<h2>Error en el login</h2>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t";
        }
        // line 20
        echo "\t\t\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"inputEmail3\" class=\"col-md-3 control-label\">Usuario</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"Usuario\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"inputPassword3\" class=\"col-md-3 control-label\">Contraseña</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input name=\"_password\" type=\"password\" placeholder=\"Contraseña\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\"></label>
\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t<span>  Mantener sesión iniciada</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"open_id\">
\t\t\t\t\t<h1 id=\"toggle-open_id\" class=\"open_id_header\">
\t\t\t\t\t\tAccede con tu Open Id
\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"open_id_body\"> 
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\"></label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary-dark col-md-12\">Facebook</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\"></label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary col-md-12\">Twitter</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\"></label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger col-md-12\">Google</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success col-md-6\">Inicia Sesión</button>
\t\t\t\t\t<span class=\"col-md-4 registro\">
\t\t\t\t\t\t<span>ó </span><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("registro");
        echo "\">Regístrate</a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\"> </label>
\t\t\t\t\t<span class=\"col-md-10\">¿Has olvidado tu contraseña?</span>
\t\t\t\t\t<label class=\"col-md-2 control-label\"> </label>
\t\t\t\t\t<span class=\"col-md-10\"><a href=\"\">Recordar contraseña.</a></span>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
    }

    // line 84
    public function block_javascript($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 84,  65 => 16,  237 => 137,  232 => 136,  152 => 67,  146 => 65,  126 => 51,  118 => 46,  113 => 43,  494 => 305,  490 => 304,  486 => 303,  482 => 302,  478 => 301,  473 => 300,  470 => 299,  460 => 292,  448 => 283,  438 => 276,  432 => 273,  429 => 272,  412 => 259,  403 => 253,  400 => 251,  338 => 192,  333 => 189,  325 => 183,  313 => 174,  308 => 171,  303 => 167,  297 => 164,  277 => 150,  272 => 147,  266 => 142,  259 => 137,  244 => 128,  216 => 109,  195 => 94,  186 => 88,  178 => 83,  170 => 77,  300 => 153,  296 => 152,  292 => 162,  287 => 150,  284 => 149,  256 => 130,  249 => 126,  239 => 121,  212 => 108,  207 => 107,  153 => 85,  127 => 50,  114 => 42,  90 => 30,  76 => 24,  81 => 26,  70 => 9,  23 => 1,  906 => 552,  902 => 551,  898 => 550,  894 => 549,  889 => 548,  886 => 547,  868 => 533,  825 => 493,  821 => 492,  817 => 490,  783 => 457,  773 => 453,  764 => 452,  760 => 451,  709 => 402,  700 => 398,  683 => 385,  677 => 384,  673 => 382,  669 => 380,  666 => 379,  662 => 378,  658 => 377,  654 => 376,  650 => 375,  646 => 374,  642 => 373,  637 => 372,  632 => 371,  595 => 336,  586 => 333,  571 => 326,  563 => 323,  556 => 319,  551 => 317,  542 => 315,  536 => 313,  530 => 312,  492 => 276,  483 => 273,  464 => 263,  452 => 257,  443 => 280,  431 => 252,  369 => 206,  361 => 203,  354 => 199,  349 => 197,  340 => 195,  334 => 193,  328 => 192,  282 => 148,  255 => 136,  245 => 134,  228 => 129,  223 => 127,  218 => 125,  137 => 60,  77 => 26,  53 => 9,  480 => 162,  474 => 269,  469 => 158,  461 => 155,  457 => 259,  453 => 151,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 271,  423 => 142,  413 => 134,  409 => 132,  407 => 256,  402 => 130,  398 => 129,  393 => 216,  387 => 122,  384 => 213,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 163,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 138,  229 => 135,  220 => 70,  214 => 124,  177 => 65,  169 => 60,  140 => 55,  132 => 70,  128 => 49,  107 => 40,  61 => 13,  273 => 141,  269 => 94,  254 => 92,  243 => 88,  240 => 127,  238 => 130,  235 => 74,  230 => 117,  227 => 117,  224 => 71,  221 => 77,  219 => 113,  217 => 75,  208 => 68,  204 => 122,  179 => 69,  159 => 61,  143 => 56,  135 => 57,  119 => 45,  102 => 36,  71 => 22,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 33,  89 => 17,  85 => 25,  75 => 20,  68 => 17,  56 => 10,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 31,  78 => 25,  46 => 6,  27 => 4,  44 => 21,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 86,  156 => 66,  151 => 63,  142 => 62,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 32,  62 => 7,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 19,  69 => 25,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 90,  157 => 69,  145 => 46,  139 => 45,  131 => 58,  123 => 47,  120 => 50,  115 => 43,  111 => 42,  108 => 39,  101 => 37,  98 => 36,  96 => 35,  83 => 24,  74 => 10,  66 => 8,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 16,  35 => 13,  32 => 4,  29 => 5,  209 => 123,  203 => 105,  199 => 104,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 78,  164 => 59,  162 => 87,  154 => 58,  149 => 51,  147 => 64,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 41,  109 => 34,  106 => 36,  103 => 39,  99 => 31,  95 => 32,  92 => 31,  86 => 16,  82 => 28,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 6,  54 => 10,  51 => 5,  48 => 13,  45 => 17,  42 => 5,  39 => 15,  36 => 5,  33 => 6,  30 => 7,);
    }
}
