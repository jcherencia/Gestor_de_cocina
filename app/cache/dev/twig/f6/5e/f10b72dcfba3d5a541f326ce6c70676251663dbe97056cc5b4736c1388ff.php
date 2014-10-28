<?php

/* RecetasBundle:User:perfil.html.twig */
class __TwigTemplate_f65ef10b72dcfba3d5a541f326ce6c70676251663dbe97056cc5b4736c1388ff extends Twig_Template
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
        echo "Mi Perfil - Gestor de cocina ";
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 4
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t\t\t<link type='text/css' rel='stylesheet' href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/jasny-bootstrap.css"), "html", null, true);
        echo "\">
\t\t
\t";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t
\t<div class=\"container\">
\t\t<div class=\"row block-info\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img id=\"user-photo\" alt=\"Pulsa para Subir tu foto\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "foto")), "html", null, true);
        echo "\"  class=\"img-rounded img-profile\">
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"block-info-title\">
\t\t\t\t\t<span>Informacion Personal</span>
\t\t\t\t\t<button id=\"editPerfil\" class=\"btn btn-primary complement-1-b pull-right\" data-toggle=\"modal\">
\t\t\t\t\t  <span class=\"glyphicon glyphicon-edit\"></span> Editar
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"block-info-content table-responsive col-md-8\">\t
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"col-md-3\">Nombre</td>
\t\t\t\t\t\t\t<td><span id=\"perfilNombre\" class=\"info\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre"), "html", null, true);
        echo "</span></td>
\t\t\t\t\t\t\t\t";
        // line 28
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"col-md-3\">Apellidos</td>
\t\t\t\t\t\t\t<td><span id=\"perfilApellidos\" class=\"info\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos"), "html", null, true);
        echo "</span></td>
\t\t\t\t\t\t\t\t";
        // line 33
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"col-md-3\">Usuario</td>
\t\t\t\t\t\t\t<td><span id=\"perfilUsuario\" class=\"info\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
        echo "</span></td>
\t\t\t\t\t\t\t";
        // line 38
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"col-md-3\">Email</td>
\t\t\t\t\t\t\t<td><span id=\"perfilEmail\" class=\"info\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email"), "html", null, true);
        echo "</span></td>
\t\t\t\t\t\t\t";
        // line 43
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"modal fade\" id=\"modal-editPerfil\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header complement-1-b\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Perfil</h4>
\t      </div>
\t      <form id=\"form-edituser\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_usuario", array("usuario" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\">
\t      <div class=\"modal-body\">
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Foto</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t    <img id=\"editImg\" alt=\"Pulsa para Subir tu foto\"  src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_user2.png"), "html", null, true);
        echo "\"  >
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t    <span class=\"btn btn-primary btn-file\"><span class=\"fileinput-new\">Selecciona imagen</span>
\t\t\t\t\t\t\t    <span class=\"fileinput-exists\">Cambiar foto</span>
\t\t\t\t\t\t\t    <input type=\"file\" name=\"img\"/> </span>
\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Eliminar</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 79
        if (array_key_exists("message", $context)) {
            // line 80
            echo "\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<span>";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Apellidos</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"apellidos\" name=\"apellidos\" placeholder=\"Apellidos\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Email</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Usuario</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"usuario\" name=\"usuario\" placeholder=\"Usuario\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Cambiar contraseña</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<input type=\"password\" id=\"pass\" name=\"pass\" placeholder=\"Contraseña\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t
\t\t      </div>";
        // line 118
        echo "<div class=\"modal-footer\">
\t\t        <button type=\"submit\" class=\"btn btn-primary complement-1-b\">Guardar cambios</button>
\t\t        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
\t\t      </div>
\t      </form>
\t    </div>
\t  </div>
\t</div>";
    }

    // line 127
    public function block_javascript($context, array $blocks = array())
    {
        // line 128
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/validate.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:User:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 128,  152 => 79,  137 => 67,  113 => 48,  470 => 250,  466 => 249,  449 => 244,  441 => 242,  400 => 212,  330 => 150,  326 => 149,  321 => 147,  276 => 136,  272 => 135,  265 => 133,  257 => 131,  216 => 103,  185 => 81,  174 => 78,  315 => 168,  311 => 167,  303 => 165,  299 => 164,  280 => 137,  263 => 138,  244 => 126,  218 => 113,  210 => 111,  181 => 80,  124 => 54,  611 => 351,  603 => 349,  599 => 348,  595 => 347,  590 => 346,  587 => 345,  569 => 330,  547 => 326,  537 => 324,  533 => 323,  528 => 322,  511 => 321,  486 => 298,  473 => 288,  438 => 256,  431 => 251,  422 => 249,  418 => 248,  371 => 204,  345 => 187,  335 => 181,  328 => 175,  291 => 140,  271 => 132,  261 => 132,  245 => 127,  213 => 109,  206 => 104,  178 => 91,  118 => 49,  184 => 82,  389 => 243,  377 => 240,  373 => 239,  343 => 157,  338 => 218,  333 => 214,  327 => 211,  324 => 210,  302 => 194,  295 => 189,  233 => 133,  228 => 127,  198 => 118,  172 => 86,  161 => 80,  90 => 34,  81 => 28,  65 => 15,  195 => 102,  191 => 101,  316 => 189,  307 => 143,  304 => 186,  287 => 175,  282 => 172,  165 => 76,  129 => 58,  114 => 51,  100 => 38,  76 => 29,  97 => 41,  77 => 22,  260 => 103,  256 => 102,  251 => 101,  248 => 128,  236 => 95,  231 => 93,  225 => 131,  205 => 77,  192 => 102,  190 => 68,  186 => 66,  180 => 80,  167 => 76,  146 => 47,  134 => 62,  70 => 23,  34 => 6,  1058 => 603,  1054 => 602,  1050 => 601,  1046 => 600,  1042 => 599,  1038 => 598,  1033 => 597,  1030 => 596,  1012 => 582,  980 => 553,  962 => 538,  958 => 537,  954 => 535,  920 => 502,  910 => 498,  901 => 497,  897 => 496,  858 => 459,  856 => 458,  854 => 457,  852 => 456,  850 => 455,  848 => 454,  838 => 445,  833 => 441,  824 => 437,  813 => 431,  809 => 430,  803 => 427,  798 => 426,  793 => 425,  779 => 414,  775 => 413,  771 => 412,  767 => 411,  751 => 397,  748 => 391,  746 => 390,  744 => 389,  742 => 388,  740 => 387,  738 => 386,  736 => 385,  731 => 381,  722 => 377,  716 => 375,  711 => 372,  709 => 369,  703 => 368,  699 => 366,  691 => 363,  688 => 362,  684 => 360,  676 => 357,  673 => 356,  669 => 355,  665 => 353,  662 => 352,  656 => 351,  652 => 349,  648 => 347,  644 => 345,  641 => 344,  637 => 343,  633 => 342,  629 => 341,  625 => 340,  621 => 339,  617 => 338,  612 => 337,  607 => 350,  602 => 333,  598 => 331,  596 => 330,  559 => 295,  550 => 292,  541 => 325,  534 => 283,  531 => 281,  521 => 276,  513 => 273,  505 => 270,  502 => 269,  500 => 268,  493 => 266,  489 => 265,  484 => 263,  471 => 261,  465 => 259,  459 => 258,  421 => 222,  412 => 219,  403 => 215,  385 => 242,  376 => 203,  367 => 201,  361 => 199,  317 => 146,  308 => 159,  293 => 152,  277 => 135,  255 => 141,  249 => 128,  197 => 72,  188 => 90,  170 => 83,  160 => 76,  150 => 68,  126 => 59,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 247,  457 => 246,  453 => 245,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 230,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 209,  387 => 122,  384 => 121,  381 => 241,  379 => 119,  374 => 206,  368 => 238,  365 => 201,  362 => 200,  360 => 199,  355 => 230,  341 => 105,  337 => 103,  322 => 209,  314 => 145,  312 => 188,  309 => 97,  305 => 95,  298 => 191,  294 => 163,  285 => 139,  283 => 88,  278 => 86,  268 => 143,  264 => 84,  258 => 81,  252 => 129,  247 => 78,  241 => 126,  229 => 132,  220 => 121,  214 => 112,  177 => 79,  169 => 60,  140 => 44,  132 => 59,  128 => 55,  107 => 46,  61 => 6,  273 => 145,  269 => 94,  254 => 92,  243 => 99,  240 => 125,  238 => 135,  235 => 124,  230 => 116,  227 => 81,  224 => 71,  221 => 130,  219 => 76,  217 => 129,  208 => 94,  204 => 109,  179 => 87,  159 => 91,  143 => 56,  135 => 60,  119 => 52,  102 => 45,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 42,  89 => 30,  85 => 34,  75 => 17,  68 => 17,  56 => 9,  87 => 31,  21 => 2,  26 => 6,  93 => 28,  88 => 16,  78 => 26,  46 => 5,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  201 => 92,  196 => 91,  183 => 82,  171 => 78,  166 => 71,  163 => 84,  158 => 67,  156 => 77,  151 => 73,  142 => 45,  138 => 76,  136 => 56,  121 => 58,  117 => 44,  105 => 41,  91 => 33,  62 => 13,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 30,  72 => 22,  69 => 25,  47 => 7,  40 => 15,  37 => 3,  22 => 2,  246 => 90,  157 => 81,  145 => 72,  139 => 70,  131 => 52,  123 => 37,  120 => 40,  115 => 54,  111 => 47,  108 => 53,  101 => 39,  98 => 43,  96 => 36,  83 => 25,  74 => 9,  66 => 7,  55 => 5,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 127,  203 => 89,  199 => 108,  193 => 73,  189 => 82,  187 => 100,  182 => 88,  176 => 86,  173 => 65,  168 => 93,  164 => 92,  162 => 79,  154 => 80,  149 => 71,  147 => 58,  144 => 64,  141 => 48,  133 => 55,  130 => 61,  125 => 59,  122 => 56,  116 => 56,  112 => 55,  109 => 43,  106 => 42,  103 => 52,  99 => 31,  95 => 36,  92 => 35,  86 => 28,  82 => 28,  80 => 19,  73 => 21,  64 => 15,  60 => 6,  57 => 10,  54 => 9,  51 => 14,  48 => 106,  45 => 100,  42 => 4,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
