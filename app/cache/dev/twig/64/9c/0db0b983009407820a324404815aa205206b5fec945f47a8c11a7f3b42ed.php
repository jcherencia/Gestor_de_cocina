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
\t\t\t<h1>Registro - Gestor de Cocina</h1>
\t\t\t<form role=\"form\" class=\"form-horizontal\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("crear_usuario");
        echo "\" method=\"POST\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Foto</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<img alt=\"Pulsa para Subir tu foto\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_user2.png"), "html", null, true);
        echo "\" id=\"user-photo\" class=\"img-thumbnail\">
\t\t\t\t\t</div>
\t\t\t\t</div>
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
\t\t\t\t\t\t<input type=\"password\" name=\"pass\" placeholder=\"Contraseña\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Repita Contraseña</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"password\" placeholder=\"Contraseña\" class=\"form-control\">
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
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<div id=\"modal-upload\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" class=\"modal fade\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header complement-1-b\">
\t\t\t\t<button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"close\">×</button>
\t\t\t\t<h4 id=\"myModalLabel\" class=\"modal-title\">¡Sube tu foto!</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form role=\"form\" class=\"form-horizontal\" action=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("upload_file");
        echo "\" method=\"POST\">
\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input name=\"foto\" type=\"file\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Subir</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Guardar</button>
\t\t\t\t<button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-default\">Cancelar</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


\t";
    }

    // line 99
    public function block_javascript($context, array $blocks = array())
    {
        // line 100
        echo "\t    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
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
        return array (  160 => 100,  129 => 75,  367 => 206,  358 => 204,  265 => 126,  262 => 125,  239 => 120,  210 => 111,  205 => 109,  197 => 106,  192 => 105,  127 => 55,  110 => 44,  185 => 97,  180 => 96,  148 => 76,  134 => 65,  497 => 295,  493 => 294,  488 => 293,  485 => 292,  467 => 277,  445 => 273,  439 => 272,  426 => 269,  336 => 203,  301 => 171,  280 => 154,  257 => 133,  211 => 118,  207 => 117,  170 => 94,  165 => 101,  114 => 54,  153 => 85,  150 => 84,  65 => 16,  237 => 123,  152 => 67,  126 => 51,  118 => 49,  113 => 43,  124 => 66,  84 => 30,  76 => 28,  58 => 24,  383 => 249,  375 => 247,  371 => 207,  366 => 245,  363 => 205,  353 => 237,  330 => 220,  324 => 216,  263 => 157,  232 => 136,  226 => 130,  215 => 119,  200 => 115,  155 => 85,  146 => 79,  260 => 141,  256 => 140,  244 => 137,  233 => 119,  216 => 118,  190 => 105,  172 => 96,  167 => 95,  104 => 43,  81 => 32,  70 => 19,  23 => 1,  909 => 552,  905 => 551,  901 => 550,  897 => 549,  892 => 548,  889 => 547,  831 => 493,  827 => 492,  823 => 490,  789 => 457,  779 => 453,  770 => 452,  766 => 451,  715 => 402,  706 => 398,  689 => 385,  683 => 384,  679 => 382,  675 => 380,  672 => 379,  668 => 378,  664 => 377,  660 => 376,  656 => 375,  652 => 374,  648 => 373,  643 => 372,  638 => 371,  601 => 336,  592 => 333,  577 => 326,  569 => 323,  562 => 319,  557 => 317,  548 => 315,  542 => 313,  536 => 312,  498 => 276,  489 => 273,  472 => 266,  464 => 263,  452 => 257,  443 => 255,  431 => 270,  369 => 206,  361 => 203,  354 => 199,  349 => 197,  340 => 195,  334 => 193,  328 => 192,  282 => 148,  255 => 123,  245 => 134,  228 => 129,  223 => 115,  218 => 125,  137 => 60,  77 => 26,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 259,  453 => 151,  444 => 149,  440 => 148,  437 => 253,  435 => 271,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 268,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 250,  384 => 245,  381 => 120,  379 => 248,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 203,  341 => 228,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 166,  285 => 89,  283 => 134,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 139,  247 => 138,  241 => 138,  229 => 135,  220 => 70,  214 => 112,  177 => 95,  169 => 102,  140 => 55,  132 => 70,  128 => 67,  107 => 40,  61 => 21,  273 => 144,  269 => 127,  254 => 92,  243 => 126,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 117,  224 => 71,  221 => 77,  219 => 114,  217 => 75,  208 => 68,  204 => 116,  179 => 100,  159 => 92,  143 => 56,  135 => 71,  119 => 42,  102 => 32,  71 => 22,  67 => 24,  63 => 15,  59 => 14,  38 => 6,  94 => 40,  89 => 31,  85 => 25,  75 => 26,  68 => 17,  56 => 10,  87 => 25,  21 => 2,  26 => 6,  93 => 35,  88 => 31,  78 => 21,  46 => 6,  27 => 4,  44 => 21,  31 => 3,  28 => 3,  201 => 108,  196 => 114,  183 => 82,  171 => 61,  166 => 71,  163 => 93,  158 => 74,  156 => 66,  151 => 63,  142 => 62,  138 => 63,  136 => 56,  121 => 46,  117 => 45,  105 => 41,  91 => 39,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 31,  72 => 27,  69 => 23,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 90,  157 => 99,  145 => 46,  139 => 45,  131 => 58,  123 => 47,  120 => 56,  115 => 43,  111 => 42,  108 => 36,  101 => 37,  98 => 36,  96 => 35,  83 => 30,  74 => 30,  66 => 24,  55 => 18,  52 => 21,  50 => 8,  43 => 8,  41 => 16,  35 => 6,  32 => 4,  29 => 5,  209 => 114,  203 => 78,  199 => 109,  193 => 73,  189 => 98,  187 => 105,  182 => 66,  176 => 97,  173 => 65,  168 => 78,  164 => 86,  162 => 87,  154 => 58,  149 => 67,  147 => 58,  144 => 65,  141 => 48,  133 => 55,  130 => 65,  125 => 58,  122 => 43,  116 => 60,  112 => 42,  109 => 34,  106 => 36,  103 => 40,  99 => 38,  95 => 42,  92 => 32,  86 => 31,  82 => 28,  80 => 29,  73 => 27,  64 => 25,  60 => 21,  57 => 6,  54 => 18,  51 => 22,  48 => 13,  45 => 17,  42 => 5,  39 => 5,  36 => 4,  33 => 6,  30 => 2,);
    }
}
