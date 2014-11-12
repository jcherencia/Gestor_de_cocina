<?php

/* RecetasBundle:Default:receta.html.twig */
class __TwigTemplate_394f122232776e7c00a1ff78836e0aaadb718b20ca860c39496dc4bf4c2c4ad3 extends Twig_Template
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
        echo "Recetas - Gestor de cocina ";
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
        echo "\t<div class='content'>
\t\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t";
        // line 15
        echo "\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t<strong>Receta: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "nombre"), "html", null, true);
        echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<form id=\"form-recetas\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\"  >
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"receta_id\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "id"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Foto</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "foto")), "html", null, true);
        echo "\"  >
\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 34
        if (array_key_exists("message", $context)) {
            // line 35
            echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Preparación</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 52
        $context["twig_content_variable"] = $this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "descripcion");
        // line 53
        echo "\t\t\t\t\t\t\t\t\t";
        $context["replace_value_var"] = "<br />";
        // line 54
        echo "\t\t\t\t\t\t\t\t\t";
        $context["replace_with_value_var"] = "
";
        // line 55
        echo "\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        echo twig_escape_filter($this->env, strtr((isset($context["twig_content_variable"]) ? $context["twig_content_variable"] : null), array((isset($context["replace_value_var"]) ? $context["replace_value_var"] : null) => (isset($context["replace_with_value_var"]) ? $context["replace_with_value_var"] : null))), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Comensales</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "comensales"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-3 control-label\">Precio</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "precio"), "html", null, true);
        echo " €</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Tiempo</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "tiempo"), "html", null, true);
        echo " min</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Categoría</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 87
        if ($this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "categoria")) {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t    <p class=\"form-control-static\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "categoria"), "nombre"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t \t<p class=\"form-control-static\">Sin categoría.</p>
\t\t\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nota media</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\"><span class=\"fav\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "notamedia"), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-star\"></span></p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-8\">Ingrediente</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-3\">Cantidad</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\"></th>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody id=\"listado_ingr\">

\t\t\t\t\t\t\t\t\t\t\t";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
            if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "receta"), "id") == $this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "id"))) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"ingr_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "id"), "html", null, true);
                echo " ingredientes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nombre\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-undCompra=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "unidadCompra"), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-precio=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "precio"), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-unidad=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "unidad"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "nombre"), "html", null, true);
                echo "<input type=\"hidden\" name=\"id_ing[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "id"), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "id"), "html", null, true);
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "cantidad"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "unidad"), "html", null, true);
                echo "</p>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</table>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\"> </label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div id=\"list_ingr\" class=\"col-md-9\"></div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ingredientes\" id=\"ingredientes\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-offset-2 col-md-10 btn-separated\">
\t\t\t\t\t\t\t\t\t";
        // line 143
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") == $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "creador"), "id")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 144
            echo "\t\t\t\t\t\t\t\t\t";
            // line 145
            echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t<span> Editar</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 151
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary complement-1-b\"disabled>
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t\t<span> Editar</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("recetas");
        echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t<span>  Cerrar</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"info\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t";
        // line 168
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div> <!--end container-->
\t<!-- Modal -->
\t
</div>
";
    }

    // line 176
    public function block_javascript($context, array $blocks = array())
    {
        // line 177
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/validate.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:receta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 182,  336 => 181,  332 => 180,  319 => 177,  316 => 176,  291 => 156,  276 => 146,  271 => 144,  250 => 126,  210 => 114,  113 => 52,  104 => 39,  646 => 364,  638 => 362,  634 => 361,  630 => 360,  625 => 359,  622 => 358,  604 => 343,  582 => 339,  572 => 337,  568 => 336,  563 => 335,  546 => 334,  521 => 311,  508 => 301,  473 => 269,  466 => 264,  455 => 262,  451 => 261,  406 => 218,  403 => 216,  397 => 213,  394 => 212,  392 => 211,  367 => 193,  346 => 175,  323 => 154,  293 => 143,  267 => 136,  262 => 135,  245 => 121,  222 => 111,  211 => 108,  137 => 62,  114 => 47,  216 => 116,  194 => 91,  152 => 70,  145 => 71,  389 => 243,  385 => 242,  377 => 199,  373 => 239,  338 => 218,  333 => 214,  327 => 211,  324 => 178,  307 => 197,  302 => 194,  295 => 189,  233 => 130,  228 => 127,  198 => 105,  139 => 68,  90 => 32,  81 => 25,  65 => 15,  213 => 103,  191 => 80,  188 => 90,  172 => 88,  155 => 58,  148 => 54,  129 => 45,  118 => 54,  84 => 28,  364 => 218,  359 => 217,  356 => 216,  339 => 205,  334 => 202,  300 => 169,  281 => 140,  277 => 139,  253 => 141,  242 => 131,  234 => 124,  200 => 105,  178 => 71,  120 => 51,  110 => 49,  76 => 18,  97 => 41,  77 => 22,  260 => 103,  256 => 102,  251 => 101,  248 => 100,  236 => 121,  231 => 93,  225 => 106,  205 => 113,  192 => 102,  190 => 68,  186 => 66,  180 => 93,  167 => 87,  160 => 53,  157 => 52,  150 => 74,  146 => 47,  134 => 61,  126 => 65,  74 => 9,  70 => 15,  34 => 6,  1145 => 631,  1141 => 630,  1137 => 629,  1133 => 628,  1129 => 627,  1125 => 626,  1121 => 625,  1116 => 624,  1113 => 623,  1095 => 609,  1063 => 580,  1045 => 565,  1041 => 564,  1037 => 562,  1003 => 529,  993 => 525,  984 => 524,  980 => 523,  941 => 486,  939 => 485,  937 => 484,  935 => 483,  933 => 482,  931 => 481,  921 => 472,  916 => 468,  907 => 464,  896 => 458,  892 => 457,  886 => 454,  881 => 453,  876 => 452,  862 => 441,  858 => 440,  854 => 439,  850 => 438,  834 => 424,  831 => 418,  829 => 417,  827 => 416,  825 => 415,  823 => 414,  821 => 413,  819 => 412,  814 => 408,  805 => 404,  799 => 402,  793 => 398,  787 => 397,  776 => 392,  773 => 391,  764 => 387,  756 => 384,  753 => 383,  750 => 382,  741 => 378,  733 => 375,  730 => 374,  727 => 373,  717 => 369,  715 => 368,  712 => 367,  708 => 366,  704 => 364,  701 => 363,  695 => 362,  691 => 360,  687 => 358,  683 => 356,  679 => 354,  676 => 353,  672 => 352,  668 => 351,  664 => 350,  660 => 349,  656 => 348,  652 => 347,  647 => 346,  642 => 363,  637 => 342,  633 => 340,  631 => 339,  594 => 304,  585 => 301,  576 => 338,  569 => 292,  566 => 290,  556 => 285,  548 => 282,  540 => 279,  537 => 278,  535 => 277,  528 => 275,  524 => 274,  519 => 272,  506 => 270,  500 => 268,  494 => 267,  456 => 231,  447 => 228,  438 => 224,  428 => 218,  420 => 215,  416 => 214,  411 => 212,  396 => 208,  390 => 207,  352 => 171,  343 => 221,  328 => 179,  320 => 158,  308 => 154,  303 => 144,  290 => 165,  284 => 151,  232 => 103,  223 => 99,  206 => 93,  197 => 104,  185 => 86,  175 => 90,  165 => 79,  161 => 80,  127 => 71,  53 => 8,  37 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 210,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 241,  379 => 119,  374 => 116,  368 => 238,  365 => 237,  362 => 110,  360 => 187,  355 => 230,  341 => 105,  337 => 103,  322 => 209,  314 => 99,  312 => 155,  309 => 147,  305 => 168,  298 => 191,  294 => 90,  285 => 89,  283 => 88,  278 => 147,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 117,  214 => 83,  177 => 88,  169 => 88,  140 => 55,  132 => 66,  128 => 49,  111 => 47,  107 => 48,  61 => 10,  273 => 145,  269 => 143,  254 => 92,  246 => 90,  243 => 99,  240 => 86,  238 => 116,  235 => 74,  230 => 113,  227 => 81,  224 => 118,  221 => 105,  219 => 110,  217 => 87,  208 => 112,  204 => 83,  179 => 92,  159 => 91,  143 => 56,  135 => 65,  131 => 60,  119 => 42,  108 => 44,  102 => 33,  71 => 19,  67 => 17,  63 => 15,  59 => 13,  47 => 7,  38 => 6,  94 => 40,  89 => 30,  85 => 34,  79 => 18,  75 => 22,  68 => 17,  56 => 9,  50 => 6,  29 => 3,  87 => 25,  72 => 16,  55 => 5,  21 => 2,  26 => 6,  98 => 36,  93 => 34,  88 => 30,  78 => 25,  46 => 5,  27 => 4,  40 => 15,  44 => 12,  35 => 5,  31 => 2,  43 => 8,  41 => 7,  28 => 3,  201 => 94,  196 => 81,  183 => 82,  171 => 58,  166 => 83,  163 => 54,  158 => 79,  156 => 79,  151 => 77,  142 => 45,  138 => 76,  136 => 74,  123 => 37,  121 => 36,  117 => 69,  115 => 53,  105 => 43,  101 => 47,  91 => 17,  69 => 25,  66 => 7,  62 => 14,  49 => 19,  24 => 1,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 85,  203 => 106,  199 => 67,  193 => 103,  189 => 101,  187 => 98,  182 => 66,  176 => 72,  173 => 87,  168 => 93,  164 => 83,  162 => 59,  154 => 75,  149 => 60,  147 => 58,  144 => 57,  141 => 63,  133 => 62,  130 => 54,  125 => 44,  122 => 55,  116 => 41,  112 => 42,  109 => 34,  106 => 35,  103 => 42,  99 => 31,  95 => 35,  92 => 21,  86 => 28,  82 => 29,  80 => 19,  73 => 21,  64 => 11,  60 => 13,  57 => 11,  54 => 7,  51 => 14,  48 => 106,  45 => 100,  42 => 4,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
