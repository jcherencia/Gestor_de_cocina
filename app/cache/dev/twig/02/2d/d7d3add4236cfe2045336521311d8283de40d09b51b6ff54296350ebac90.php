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
        return array (  153 => 85,  150 => 84,  65 => 16,  237 => 137,  152 => 67,  126 => 51,  118 => 46,  113 => 43,  124 => 50,  84 => 30,  76 => 28,  58 => 24,  383 => 249,  375 => 247,  371 => 246,  366 => 245,  363 => 244,  353 => 237,  330 => 220,  324 => 216,  263 => 157,  232 => 136,  226 => 130,  215 => 124,  200 => 115,  155 => 82,  146 => 65,  260 => 141,  256 => 140,  244 => 137,  233 => 129,  216 => 118,  190 => 105,  172 => 96,  167 => 95,  104 => 43,  81 => 34,  70 => 9,  23 => 1,  909 => 552,  905 => 551,  901 => 550,  897 => 549,  892 => 548,  889 => 547,  831 => 493,  827 => 492,  823 => 490,  789 => 457,  779 => 453,  770 => 452,  766 => 451,  715 => 402,  706 => 398,  689 => 385,  683 => 384,  679 => 382,  675 => 380,  672 => 379,  668 => 378,  664 => 377,  660 => 376,  656 => 375,  652 => 374,  648 => 373,  643 => 372,  638 => 371,  601 => 336,  592 => 333,  577 => 326,  569 => 323,  562 => 319,  557 => 317,  548 => 315,  542 => 313,  536 => 312,  498 => 276,  489 => 273,  472 => 266,  464 => 263,  452 => 257,  443 => 255,  431 => 252,  369 => 206,  361 => 203,  354 => 199,  349 => 197,  340 => 195,  334 => 193,  328 => 192,  282 => 148,  255 => 151,  245 => 134,  228 => 129,  223 => 127,  218 => 125,  137 => 60,  77 => 26,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 259,  453 => 151,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 250,  384 => 213,  381 => 120,  379 => 248,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 228,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 139,  247 => 138,  241 => 138,  229 => 135,  220 => 70,  214 => 124,  177 => 65,  169 => 60,  140 => 55,  132 => 70,  128 => 64,  107 => 40,  61 => 13,  273 => 144,  269 => 94,  254 => 92,  243 => 142,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 125,  217 => 75,  208 => 68,  204 => 116,  179 => 101,  159 => 92,  143 => 56,  135 => 57,  119 => 42,  102 => 32,  71 => 22,  67 => 26,  63 => 15,  59 => 14,  38 => 6,  94 => 33,  89 => 31,  85 => 25,  75 => 20,  68 => 17,  56 => 10,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 31,  78 => 21,  46 => 6,  27 => 4,  44 => 21,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 93,  158 => 86,  156 => 66,  151 => 63,  142 => 62,  138 => 71,  136 => 56,  121 => 46,  117 => 45,  105 => 49,  91 => 32,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 19,  69 => 25,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 90,  157 => 69,  145 => 46,  139 => 45,  131 => 58,  123 => 47,  120 => 58,  115 => 43,  111 => 42,  108 => 36,  101 => 37,  98 => 36,  96 => 35,  83 => 24,  74 => 30,  66 => 8,  55 => 23,  52 => 21,  50 => 10,  43 => 8,  41 => 16,  35 => 6,  32 => 4,  29 => 5,  209 => 114,  203 => 78,  199 => 109,  193 => 73,  189 => 71,  187 => 105,  182 => 66,  176 => 97,  173 => 65,  168 => 78,  164 => 59,  162 => 87,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 65,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 39,  99 => 36,  95 => 42,  92 => 32,  86 => 16,  82 => 28,  80 => 29,  73 => 19,  64 => 25,  60 => 22,  57 => 6,  54 => 10,  51 => 22,  48 => 13,  45 => 17,  42 => 5,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
