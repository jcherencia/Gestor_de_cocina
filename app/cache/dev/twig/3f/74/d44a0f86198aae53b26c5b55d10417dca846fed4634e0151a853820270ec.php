<?php

/* RecetasBundle:User:registro.html.twig */
class __TwigTemplate_3f74d44a0f86198aae53b26c5b55d10417dca846fed4634e0151a853820270ec extends Twig_Template
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
        return "RecetasBundle:User:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 122,  181 => 121,  212 => 128,  152 => 79,  137 => 67,  275 => 211,  271 => 210,  266 => 209,  263 => 208,  245 => 196,  113 => 48,  104 => 113,  595 => 345,  591 => 344,  587 => 343,  583 => 342,  578 => 341,  575 => 340,  557 => 325,  535 => 321,  529 => 320,  525 => 319,  516 => 317,  499 => 316,  426 => 251,  419 => 246,  410 => 244,  406 => 243,  359 => 199,  353 => 196,  350 => 195,  348 => 194,  323 => 176,  279 => 212,  265 => 130,  259 => 127,  237 => 123,  223 => 119,  218 => 118,  194 => 99,  155 => 78,  118 => 49,  389 => 243,  377 => 240,  373 => 239,  343 => 221,  338 => 218,  333 => 182,  327 => 211,  324 => 210,  302 => 158,  295 => 189,  233 => 133,  228 => 127,  198 => 118,  172 => 119,  161 => 80,  90 => 32,  81 => 26,  65 => 15,  195 => 91,  191 => 90,  316 => 170,  307 => 197,  304 => 186,  287 => 175,  282 => 172,  165 => 130,  129 => 57,  114 => 51,  100 => 38,  76 => 29,  97 => 37,  77 => 23,  256 => 102,  251 => 101,  248 => 139,  236 => 95,  231 => 93,  225 => 131,  205 => 77,  192 => 102,  190 => 68,  186 => 139,  180 => 63,  167 => 85,  146 => 47,  134 => 76,  70 => 23,  34 => 6,  1044 => 611,  1040 => 610,  1036 => 609,  1032 => 608,  1028 => 607,  1024 => 606,  1019 => 605,  1016 => 604,  998 => 590,  966 => 561,  948 => 546,  944 => 545,  940 => 543,  906 => 510,  896 => 506,  887 => 505,  883 => 504,  844 => 467,  842 => 466,  840 => 465,  838 => 464,  836 => 463,  834 => 462,  824 => 453,  819 => 449,  810 => 445,  799 => 439,  795 => 438,  789 => 435,  784 => 434,  779 => 433,  774 => 430,  752 => 402,  749 => 396,  747 => 395,  745 => 394,  743 => 393,  741 => 392,  739 => 391,  737 => 390,  732 => 386,  723 => 382,  717 => 380,  712 => 377,  710 => 374,  704 => 373,  700 => 371,  692 => 368,  689 => 367,  685 => 365,  677 => 362,  674 => 361,  670 => 360,  666 => 358,  663 => 357,  657 => 356,  653 => 354,  649 => 352,  645 => 350,  642 => 349,  638 => 348,  634 => 347,  630 => 346,  626 => 345,  622 => 344,  618 => 343,  613 => 342,  608 => 341,  603 => 338,  599 => 346,  597 => 335,  560 => 300,  551 => 297,  542 => 293,  539 => 292,  534 => 283,  531 => 281,  521 => 318,  513 => 273,  505 => 270,  502 => 269,  500 => 268,  493 => 266,  489 => 265,  484 => 263,  471 => 261,  465 => 259,  459 => 258,  421 => 222,  412 => 219,  403 => 215,  385 => 242,  376 => 203,  367 => 201,  361 => 199,  317 => 162,  308 => 159,  293 => 152,  277 => 146,  255 => 141,  249 => 126,  197 => 72,  188 => 90,  170 => 83,  160 => 53,  150 => 85,  126 => 59,  53 => 8,  480 => 162,  474 => 293,  469 => 158,  461 => 283,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 209,  387 => 122,  384 => 121,  381 => 241,  379 => 119,  374 => 116,  368 => 238,  365 => 237,  362 => 201,  360 => 109,  355 => 230,  341 => 105,  337 => 103,  322 => 209,  314 => 99,  312 => 188,  309 => 97,  305 => 95,  298 => 191,  294 => 90,  285 => 149,  283 => 213,  278 => 86,  268 => 143,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 132,  220 => 121,  214 => 83,  177 => 120,  169 => 118,  140 => 44,  132 => 51,  128 => 49,  107 => 46,  61 => 79,  273 => 145,  269 => 94,  254 => 92,  243 => 99,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 130,  219 => 76,  217 => 129,  208 => 112,  204 => 72,  179 => 96,  159 => 91,  143 => 56,  135 => 65,  119 => 52,  102 => 45,  71 => 19,  67 => 17,  63 => 14,  59 => 14,  38 => 6,  94 => 36,  89 => 30,  85 => 34,  75 => 17,  68 => 17,  56 => 9,  87 => 31,  21 => 2,  26 => 6,  93 => 28,  88 => 16,  78 => 26,  46 => 6,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 104,  196 => 90,  183 => 97,  171 => 58,  166 => 86,  163 => 115,  158 => 128,  156 => 90,  151 => 68,  142 => 125,  138 => 63,  136 => 124,  121 => 36,  117 => 117,  105 => 41,  91 => 33,  62 => 13,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 7,  40 => 15,  37 => 4,  22 => 2,  246 => 90,  157 => 81,  145 => 62,  139 => 66,  131 => 52,  123 => 37,  120 => 40,  115 => 34,  111 => 47,  108 => 114,  101 => 40,  98 => 43,  96 => 36,  83 => 25,  74 => 9,  66 => 7,  55 => 5,  52 => 21,  50 => 7,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 127,  203 => 109,  199 => 67,  193 => 124,  189 => 123,  187 => 100,  182 => 88,  176 => 86,  173 => 65,  168 => 131,  164 => 92,  162 => 57,  154 => 80,  149 => 51,  147 => 58,  144 => 72,  141 => 48,  133 => 55,  130 => 122,  125 => 55,  122 => 119,  116 => 68,  112 => 45,  109 => 43,  106 => 42,  103 => 40,  99 => 31,  95 => 110,  92 => 35,  86 => 28,  82 => 28,  80 => 19,  73 => 21,  64 => 17,  60 => 11,  57 => 10,  54 => 10,  51 => 14,  48 => 105,  45 => 100,  42 => 5,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
