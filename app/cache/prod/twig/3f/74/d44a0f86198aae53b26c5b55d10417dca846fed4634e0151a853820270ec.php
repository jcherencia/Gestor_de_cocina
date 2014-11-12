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
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
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
        return array (  181 => 121,  100 => 38,  613 => 297,  609 => 296,  605 => 295,  600 => 293,  596 => 292,  592 => 291,  588 => 290,  584 => 289,  580 => 288,  575 => 287,  553 => 273,  530 => 255,  460 => 188,  419 => 168,  399 => 161,  376 => 156,  370 => 155,  361 => 152,  348 => 147,  335 => 143,  331 => 142,  326 => 140,  306 => 134,  289 => 120,  282 => 118,  279 => 107,  266 => 100,  249 => 91,  244 => 90,  226 => 83,  212 => 128,  153 => 62,  96 => 36,  340 => 182,  336 => 181,  332 => 180,  319 => 138,  316 => 176,  291 => 121,  276 => 146,  271 => 144,  250 => 126,  210 => 114,  113 => 48,  104 => 39,  646 => 364,  638 => 362,  634 => 361,  630 => 360,  625 => 359,  622 => 358,  604 => 343,  582 => 339,  572 => 286,  568 => 336,  563 => 335,  546 => 334,  521 => 311,  508 => 301,  473 => 269,  466 => 264,  455 => 262,  451 => 261,  406 => 163,  403 => 216,  397 => 213,  394 => 212,  392 => 159,  367 => 193,  346 => 146,  323 => 154,  293 => 143,  267 => 136,  262 => 98,  245 => 121,  222 => 82,  211 => 108,  137 => 67,  114 => 47,  216 => 116,  194 => 91,  152 => 79,  145 => 71,  389 => 243,  385 => 242,  377 => 199,  373 => 239,  338 => 218,  333 => 214,  327 => 211,  324 => 178,  307 => 197,  302 => 194,  295 => 189,  233 => 133,  228 => 127,  198 => 118,  139 => 68,  90 => 32,  81 => 25,  65 => 12,  213 => 103,  191 => 80,  188 => 90,  172 => 119,  155 => 58,  148 => 54,  129 => 45,  118 => 54,  84 => 28,  364 => 218,  359 => 217,  356 => 151,  339 => 144,  334 => 202,  300 => 169,  281 => 140,  277 => 139,  253 => 141,  242 => 89,  234 => 124,  200 => 105,  178 => 71,  120 => 51,  110 => 36,  76 => 18,  97 => 37,  77 => 23,  260 => 103,  256 => 102,  251 => 101,  248 => 100,  236 => 121,  231 => 93,  225 => 131,  205 => 113,  192 => 102,  190 => 75,  186 => 66,  180 => 71,  167 => 87,  160 => 53,  157 => 81,  150 => 85,  146 => 47,  134 => 61,  126 => 59,  74 => 9,  70 => 15,  34 => 6,  1145 => 631,  1141 => 630,  1137 => 629,  1133 => 628,  1129 => 627,  1125 => 626,  1121 => 625,  1116 => 624,  1113 => 623,  1095 => 609,  1063 => 580,  1045 => 565,  1041 => 564,  1037 => 562,  1003 => 529,  993 => 525,  984 => 524,  980 => 523,  941 => 486,  939 => 485,  937 => 484,  935 => 483,  933 => 482,  931 => 481,  921 => 472,  916 => 468,  907 => 464,  896 => 458,  892 => 457,  886 => 454,  881 => 453,  876 => 452,  862 => 441,  858 => 440,  854 => 439,  850 => 438,  834 => 424,  831 => 418,  829 => 417,  827 => 416,  825 => 415,  823 => 414,  821 => 413,  819 => 412,  814 => 408,  805 => 404,  799 => 402,  793 => 398,  787 => 397,  776 => 392,  773 => 391,  764 => 387,  756 => 384,  753 => 383,  750 => 382,  741 => 378,  733 => 375,  730 => 374,  727 => 373,  717 => 369,  715 => 368,  712 => 367,  708 => 366,  704 => 364,  701 => 363,  695 => 362,  691 => 360,  687 => 358,  683 => 356,  679 => 354,  676 => 353,  672 => 352,  668 => 351,  664 => 350,  660 => 349,  656 => 348,  652 => 347,  647 => 346,  642 => 363,  637 => 342,  633 => 340,  631 => 339,  594 => 304,  585 => 301,  576 => 338,  569 => 292,  566 => 290,  556 => 285,  548 => 282,  540 => 279,  537 => 278,  535 => 277,  528 => 275,  524 => 274,  519 => 272,  506 => 270,  500 => 268,  494 => 267,  456 => 231,  447 => 228,  438 => 224,  428 => 171,  420 => 215,  416 => 214,  411 => 165,  396 => 208,  390 => 207,  352 => 149,  343 => 221,  328 => 179,  320 => 158,  308 => 154,  303 => 144,  290 => 165,  284 => 151,  232 => 85,  223 => 99,  206 => 93,  197 => 104,  185 => 122,  175 => 90,  165 => 79,  161 => 80,  127 => 71,  53 => 8,  37 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 187,  453 => 151,  444 => 180,  440 => 178,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 170,  413 => 166,  409 => 132,  407 => 131,  402 => 162,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 241,  379 => 119,  374 => 116,  368 => 238,  365 => 153,  362 => 110,  360 => 187,  355 => 230,  341 => 105,  337 => 103,  322 => 139,  314 => 137,  312 => 155,  309 => 147,  305 => 168,  298 => 191,  294 => 90,  285 => 89,  283 => 88,  278 => 147,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 132,  220 => 117,  214 => 83,  177 => 120,  169 => 118,  140 => 55,  132 => 66,  128 => 49,  111 => 47,  107 => 48,  61 => 10,  273 => 145,  269 => 143,  254 => 92,  246 => 90,  243 => 99,  240 => 86,  238 => 87,  235 => 74,  230 => 84,  227 => 81,  224 => 118,  221 => 130,  219 => 81,  217 => 129,  208 => 112,  204 => 83,  179 => 92,  159 => 91,  143 => 59,  135 => 56,  131 => 60,  119 => 43,  108 => 44,  102 => 33,  71 => 19,  67 => 17,  63 => 15,  59 => 13,  47 => 7,  38 => 6,  94 => 36,  89 => 30,  85 => 34,  79 => 18,  75 => 22,  68 => 17,  56 => 9,  50 => 7,  29 => 3,  87 => 31,  72 => 17,  55 => 5,  21 => 2,  26 => 6,  98 => 36,  93 => 34,  88 => 30,  78 => 26,  46 => 6,  27 => 4,  40 => 15,  44 => 12,  35 => 7,  31 => 3,  43 => 8,  41 => 7,  28 => 3,  201 => 94,  196 => 76,  183 => 82,  171 => 58,  166 => 66,  163 => 115,  158 => 79,  156 => 79,  151 => 77,  142 => 45,  138 => 76,  136 => 74,  123 => 37,  121 => 36,  117 => 69,  115 => 53,  105 => 41,  101 => 47,  91 => 33,  69 => 25,  66 => 7,  62 => 13,  49 => 19,  24 => 1,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 127,  203 => 106,  199 => 67,  193 => 124,  189 => 123,  187 => 98,  182 => 66,  176 => 70,  173 => 87,  168 => 93,  164 => 83,  162 => 65,  154 => 80,  149 => 60,  147 => 58,  144 => 57,  141 => 63,  133 => 62,  130 => 54,  125 => 44,  122 => 55,  116 => 41,  112 => 42,  109 => 43,  106 => 35,  103 => 40,  99 => 33,  95 => 35,  92 => 35,  86 => 28,  82 => 28,  80 => 19,  73 => 21,  64 => 11,  60 => 11,  57 => 10,  54 => 7,  51 => 14,  48 => 106,  45 => 100,  42 => 5,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
