<?php

/* RecetasBundle:Default:registro.html.twig */
class __TwigTemplate_649c0db0b983009407820a324404815aa205206b5fec945f47a8c11a7f3b42ed extends Twig_Template
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
\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/jasny-bootstrap.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"fondo\">
\t<div class=\"container\">
\t\t<div class=\"login\">
\t\t\t<h1>Registro - Gestor de Cocina</h1>
\t\t\t";
        // line 17
        echo "\t\t\t<form id=\"form-registro\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
        echo $this->env->getExtension('routing')->getPath("crear_usuario");
        echo "\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Foto</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_user2.png"), "html", null, true);
        echo "\"  >
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
\t\t\t\t\t\t  <div>
\t\t\t\t\t\t    <span class=\"btn btn-primary btn-file\"><span class=\"fileinput-new\">Selecciona imagen</span>
\t\t\t\t\t\t    <span class=\"fileinput-exists\">Cambiar foto</span>
\t\t\t\t\t\t    <input type=\"file\" name=\"img\"/> </span>
\t\t\t\t\t\t    <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Eliminar</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t";
        // line 35
        if (array_key_exists("message", $context)) {
            // line 36
            echo "\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<span>";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"text\" name=\"nombre\" placeholder=\"Nombre\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Apellidos</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"text\" name=\"apellidos\" placeholder=\"Apellidos\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Usuario</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"text\" name=\"usuario\" placeholder=\"Usuario\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Contraseña</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"password\" id=\"pass\" name=\"pass\" placeholder=\"Contraseña\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Repita Contraseña</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"password\" id=\"repeat_pass\" name=\"repeat_pass\" placeholder=\"Contraseña\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Email</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-offset-3 col-sm-6\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success col-md-12\">Registrarse</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t<div class=\"col-md-offset-3 col-sm-6\">
\t\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"btn btn-primary complement-1-b col-md-12\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-log-in\"></span>
\t\t\t\t\t\t\t<span>  Volver al login</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        // line 115
        echo "

\t";
    }

    // line 118
    public function block_javascript($context, array $blocks = array())
    {
        // line 119
        echo "\t    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t    \t<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/validate.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 122,  181 => 121,  172 => 119,  97 => 37,  382 => 210,  378 => 209,  370 => 207,  290 => 136,  276 => 129,  234 => 119,  226 => 116,  165 => 76,  134 => 57,  110 => 42,  100 => 37,  330 => 193,  326 => 192,  317 => 190,  262 => 125,  257 => 141,  242 => 129,  231 => 121,  210 => 103,  192 => 93,  167 => 75,  616 => 357,  612 => 356,  608 => 355,  604 => 354,  600 => 353,  592 => 351,  574 => 336,  552 => 332,  546 => 331,  538 => 329,  533 => 328,  516 => 327,  491 => 304,  410 => 231,  401 => 226,  396 => 224,  371 => 206,  364 => 200,  350 => 188,  327 => 167,  307 => 157,  281 => 152,  271 => 149,  225 => 119,  205 => 100,  190 => 97,  188 => 96,  160 => 77,  124 => 50,  150 => 85,  65 => 16,  237 => 137,  232 => 136,  152 => 71,  146 => 65,  126 => 51,  118 => 46,  113 => 43,  494 => 305,  490 => 304,  486 => 303,  482 => 302,  478 => 294,  473 => 300,  470 => 299,  460 => 292,  448 => 283,  438 => 276,  432 => 273,  429 => 272,  412 => 259,  403 => 253,  400 => 251,  338 => 195,  333 => 189,  325 => 183,  313 => 160,  308 => 171,  303 => 180,  297 => 156,  277 => 151,  272 => 128,  266 => 148,  259 => 142,  244 => 128,  216 => 113,  195 => 94,  186 => 88,  178 => 83,  170 => 77,  300 => 153,  296 => 152,  292 => 162,  287 => 150,  284 => 149,  256 => 130,  249 => 134,  239 => 121,  212 => 111,  207 => 107,  153 => 66,  127 => 50,  114 => 42,  90 => 32,  76 => 26,  81 => 26,  70 => 9,  23 => 1,  906 => 552,  902 => 551,  898 => 550,  894 => 549,  889 => 548,  886 => 547,  868 => 533,  825 => 493,  821 => 492,  817 => 490,  783 => 457,  773 => 453,  764 => 452,  760 => 451,  709 => 402,  700 => 398,  683 => 385,  677 => 384,  673 => 382,  669 => 380,  666 => 379,  662 => 378,  658 => 377,  654 => 376,  650 => 375,  646 => 374,  642 => 373,  637 => 372,  632 => 371,  595 => 352,  586 => 333,  571 => 326,  563 => 323,  556 => 319,  551 => 317,  542 => 330,  536 => 313,  530 => 312,  492 => 276,  483 => 273,  464 => 263,  452 => 257,  443 => 262,  431 => 252,  369 => 206,  361 => 203,  354 => 199,  349 => 197,  340 => 195,  334 => 194,  328 => 192,  282 => 148,  255 => 136,  245 => 134,  228 => 129,  223 => 127,  218 => 110,  137 => 60,  77 => 23,  53 => 9,  480 => 162,  474 => 269,  469 => 158,  461 => 155,  457 => 259,  453 => 151,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 271,  423 => 142,  413 => 134,  409 => 132,  407 => 229,  402 => 130,  398 => 225,  393 => 216,  387 => 122,  384 => 213,  381 => 212,  379 => 119,  374 => 208,  368 => 112,  365 => 206,  362 => 205,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 191,  314 => 189,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 163,  285 => 153,  283 => 88,  278 => 86,  268 => 146,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 138,  229 => 135,  220 => 70,  214 => 105,  177 => 120,  169 => 118,  140 => 55,  132 => 70,  128 => 49,  107 => 40,  61 => 13,  273 => 141,  269 => 127,  254 => 92,  243 => 88,  240 => 121,  238 => 130,  235 => 126,  230 => 117,  227 => 117,  224 => 71,  221 => 114,  219 => 113,  217 => 113,  208 => 110,  204 => 108,  179 => 69,  159 => 61,  143 => 56,  135 => 57,  119 => 45,  102 => 36,  71 => 22,  67 => 17,  63 => 15,  59 => 14,  38 => 6,  94 => 36,  89 => 30,  85 => 30,  75 => 20,  68 => 17,  56 => 9,  87 => 31,  21 => 2,  26 => 6,  93 => 33,  88 => 30,  78 => 25,  46 => 6,  27 => 4,  44 => 21,  31 => 3,  28 => 3,  201 => 98,  196 => 95,  183 => 88,  171 => 61,  166 => 71,  163 => 115,  158 => 68,  156 => 69,  151 => 67,  142 => 62,  138 => 54,  136 => 56,  121 => 46,  117 => 46,  105 => 40,  91 => 32,  62 => 7,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 23,  69 => 23,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 122,  157 => 69,  145 => 65,  139 => 45,  131 => 58,  123 => 47,  120 => 50,  115 => 43,  111 => 42,  108 => 39,  101 => 37,  98 => 36,  96 => 33,  83 => 24,  74 => 25,  66 => 8,  55 => 15,  52 => 21,  50 => 7,  43 => 8,  41 => 16,  35 => 13,  32 => 4,  29 => 5,  209 => 123,  203 => 105,  199 => 107,  193 => 124,  189 => 123,  187 => 90,  182 => 66,  176 => 64,  173 => 84,  168 => 78,  164 => 78,  162 => 87,  154 => 58,  149 => 51,  147 => 64,  144 => 49,  141 => 48,  133 => 56,  130 => 41,  125 => 51,  122 => 43,  116 => 45,  112 => 43,  109 => 40,  106 => 40,  103 => 40,  99 => 31,  95 => 32,  92 => 35,  86 => 16,  82 => 27,  80 => 19,  73 => 19,  64 => 17,  60 => 11,  57 => 10,  54 => 10,  51 => 5,  48 => 13,  45 => 17,  42 => 5,  39 => 15,  36 => 5,  33 => 6,  30 => 7,);
    }
}
