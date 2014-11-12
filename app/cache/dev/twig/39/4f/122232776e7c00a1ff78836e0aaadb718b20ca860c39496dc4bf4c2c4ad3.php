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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre"), "html", null, true);
        echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<form id=\"form-recetas\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\"  >
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"receta_id\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Foto</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "foto")), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
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
        $context["twig_content_variable"] = $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion");
        // line 53
        echo "\t\t\t\t\t\t\t\t\t";
        $context["replace_value_var"] = "<br />";
        // line 54
        echo "\t\t\t\t\t\t\t\t\t";
        $context["replace_with_value_var"] = "
";
        // line 55
        echo "\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        echo twig_escape_filter($this->env, strtr((isset($context["twig_content_variable"]) ? $context["twig_content_variable"] : $this->getContext($context, "twig_content_variable")), array((isset($context["replace_value_var"]) ? $context["replace_value_var"] : $this->getContext($context, "replace_value_var")) => (isset($context["replace_with_value_var"]) ? $context["replace_with_value_var"] : $this->getContext($context, "replace_with_value_var")))), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Comensales</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "comensales"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "precio"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "tiempo"), "html", null, true);
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
        if ($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "categoria")) {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t    <p class=\"form-control-static\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "categoria"), "nombre"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "notamedia"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
            if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "receta"), "id") == $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"ingr_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                echo " ingredientes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nombre\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-undCompra=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "unidadCompra"), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-precio=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "precio"), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-unidad=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "unidad"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "nombre"), "html", null, true);
                echo "<input type=\"hidden\" name=\"id_ing[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "id"), "html", null, true);
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "cantidad"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : $this->getContext($context, "ingre")), "producto"), "unidad"), "html", null, true);
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
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") == $this->getAttribute($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "creador"), "id")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 144
            echo "\t\t\t\t\t\t\t\t\t";
            // line 145
            echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_receta", array("receta" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id"))), "html", null, true);
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
        return array (  340 => 182,  336 => 181,  332 => 180,  328 => 179,  324 => 178,  319 => 177,  316 => 176,  305 => 168,  291 => 156,  284 => 151,  276 => 146,  273 => 145,  271 => 144,  269 => 143,  250 => 126,  236 => 121,  224 => 118,  220 => 117,  216 => 116,  210 => 114,  205 => 113,  187 => 98,  179 => 92,  175 => 90,  169 => 88,  167 => 87,  156 => 79,  145 => 71,  133 => 62,  122 => 55,  118 => 54,  115 => 53,  113 => 52,  107 => 48,  104 => 39,  98 => 36,  95 => 35,  93 => 34,  84 => 28,  75 => 22,  67 => 17,  63 => 15,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
