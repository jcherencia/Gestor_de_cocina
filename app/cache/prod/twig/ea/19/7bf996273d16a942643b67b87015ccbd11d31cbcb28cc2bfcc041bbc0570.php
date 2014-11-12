<?php

/* RecetasBundle:Default:nueva_receta.html.twig */
class __TwigTemplate_ea197bf996273d16a942643b67b87015ccbd11d31cbcb28cc2bfcc041bbc0570 extends Twig_Template
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
        // line 14
        if (array_key_exists("receta_edit", $context)) {
            // line 15
            echo "\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t<strong>Editar Recetas</strong>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<form id=\"form-recetas\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action =\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mod_receta", array("receta" => $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "slug"))), "html", null, true);
            echo "\" >
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"receta_id\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 25
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Foto</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "foto")), "html", null, true);
            echo "\"  >
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
\t\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t    <span class=\"btn btn-primary btn-file\"><span class=\"fileinput-new\">Selecciona imagen</span>
\t\t\t\t\t\t\t\t\t    <span class=\"fileinput-exists\">Cambiar foto</span>
\t\t\t\t\t\t\t\t\t    <input type=\"file\" name=\"img\"/> </span>
\t\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Eliminar</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 42
            if (array_key_exists("message", $context)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nombre\" placeholder=\"Nombre de la receta..\" class=\"form-control\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "nombre"), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Preparación</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<input id=\"hide_descrip\" type=\"hidden\">
\t\t\t\t\t\t\t\t\t";
            // line 60
            echo "\t\t\t\t\t\t\t\t\t";
            $context["twig_content_variable"] = $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "descripcion");
            // line 61
            echo "\t\t\t\t\t\t\t\t\t";
            $context["replace_value_var"] = "<br />";
            // line 62
            echo "\t\t\t\t\t\t\t\t\t";
            $context["replace_with_value_var"] = "
";
            // line 63
            echo "\t\t\t\t\t\t\t\t\t<textarea id=\"descrip\" name=\"descripcion\" placeholder=\"Preparación de la receta...\" resizable=\"false\" class=\"form-control\" value=\"\" rows=\"5\">";
            echo twig_escape_filter($this->env, strtr((isset($context["twig_content_variable"]) ? $context["twig_content_variable"] : null), array((isset($context["replace_value_var"]) ? $context["replace_value_var"] : null) => (isset($context["replace_with_value_var"]) ? $context["replace_with_value_var"] : null))), "html", null, true);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Comensales</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"comensales\" class=\"form-control\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "comensales"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 79
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-3 control-label\">Precio</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"precio\" id=\"precioTotal\" class=\"form-control precioTotal\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "precio"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> €</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"precio\"  class=\"precioTotal\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "precio"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Tiempo</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"tiempo\" name=\"tiempo\" class=\"form-control\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "tiempo"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> min</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Categoría</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<select name=\"categoria\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Selecciona...</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 103
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "categoria")) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "id") == $this->getAttribute($this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "categoria"), "id"))) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "id"), "html", null, true);
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombre"), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "id"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombre"), "html", null, true);
                        echo "</option>\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombre"), "html", null, true);
                    echo "</option>\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3\"></label>
\t\t\t\t\t\t\t\t<button id=\"add_ing\" type=\"button\" class=\"col-md-3 btn btn-primary complement-1-b\" onClick=\"crearListadoIng('list_ingre')\" data-url=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("listar_ing");
            echo "\">Añadir ingredientes</button>

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
            // line 135
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["ingre"]) {
                if (($this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "receta"), "id") == $this->getAttribute((isset($context["receta_edit"]) ? $context["receta_edit"] : null), "id"))) {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"ingr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "id"), "html", null, true);
                    echo " ingredientes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nombre\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-undCompra=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "unidadCompra"), "html", null, true);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-precio=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "precio"), "html", null, true);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-unidad=\"";
                    // line 140
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"cantidad_";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "id"), "html", null, true);
                    echo "\" name=\"cantidad[";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "id"), "html", null, true);
                    echo "]\" class=\"form-control input-sm\" onchange=\"modCantIng(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "id"), "html", null, true);
                    echo ")\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "cantidad"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "unidad"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"eliminarIng(";
                    // line 147
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingre"]) ? $context["ingre"] : null), "producto"), "id"), "html", null, true);
                    echo ")\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
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
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-disk\"></span>
\t\t\t\t\t\t\t\t\t\t<span> Guardar</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 175
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t<span>  Cancelar</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"info\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 187
            echo "\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t<strong>Crear Recetas</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
            // line 193
            echo "\t\t\t\t\t\t<form id=\"form-recetas\" class=\"form-horizontal\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            echo $this->env->getExtension('routing')->getPath("crear_receta");
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Foto</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
\t\t\t\t\t\t\t\t\t    <img alt=\"Pulsa para Subir tu foto\"  src=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/img/no_image.png"), "html", null, true);
            echo "\"  >
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
\t\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t    <span class=\"btn btn-primary btn-file\"><span class=\"fileinput-new\">Selecciona imagen</span>
\t\t\t\t\t\t\t\t\t    <span class=\"fileinput-exists\">Cambiar foto</span>
\t\t\t\t\t\t\t\t\t    <input type=\"file\" name=\"img\"/> </span>
\t\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Eliminar</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 211
            if (array_key_exists("message", $context)) {
                // line 212
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 213
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 216
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 218
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Nombre</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"nombre\" placeholder=\"Nombre de la receta..\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Preparación</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<input id=\"hide_descrip\" type=\"hidden\">
\t\t\t\t\t\t\t\t\t<textarea id=\"descrip\" name=\"descripcion\" placeholder=\"Preparación de la receta...\" resizable=\"false\" class=\"form-control\"> </textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Comensales</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"comensales\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"precio\" class=\"col-md-3 control-label\">Precio</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"precioTotal\" class=\"form-control precioTotal\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> €</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"precio\"  class=\"precioTotal\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Tiempo</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"tiempo\" name=\"tiempo\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> min</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"\" class=\"col-md-3 control-label\">Categoría</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<select name=\"categoria\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Selecciona...</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 261
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 262
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombre"), "html", null, true);
                echo "</option>\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3\"></label>
\t\t\t\t\t\t\t\t<button id=\"add_ing\" type=\"button\" class=\"col-md-3 btn btn-primary complement-1-b\" onClick=\"crearListadoIng('list_ingre')\" data-url=\"";
            // line 269
            echo $this->env->getExtension('routing')->getPath("listar_ing");
            echo "\">Añadir ingredientes</button>

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
\t\t\t\t\t\t\t\t\t\t<tbody id=\"listado_ingr\"></tbody>
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
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary complement-1-b\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-floppy-disk\"></span>
\t\t\t\t\t\t\t\t\t\t<span> Guardar</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 301
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t<span>  Cancelar</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"info\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 311
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div> <!--end container-->
\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"list_ingre\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header complement-1-b\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Listado de ingredientes</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"table-container\">
\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<th class=\"col-md-1\"></th>
\t\t\t\t\t\t\t\t<th class=\"col-md-6\">Nombre</th>
\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Stock</th>
\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Precio/Unid</th>

\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 334
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 335
            echo "\t\t\t\t\t\t\t\t<tr class=\"ing_seleccionable\" id=\"ing_seleccionable_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"form-control\" data-value=\"";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id"), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"info_nombre\">";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "stock"), "html", null, true);
            echo "  <span class=\"unidad\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "unidad"), "html", null, true);
            echo "</span></td>
\t\t\t\t\t\t\t\t\t<td><span class=\"precio\">";
            // line 339
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "precio"), "html", null, true);
            echo "</span> € / <span class=\"und_comp\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "unidadCompra"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "unidad"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"anadirIngre()\">Guardar</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!--fin modal-->
</div>
";
    }

    // line 358
    public function block_javascript($context, array $blocks = array())
    {
        // line 359
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/validate.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:nueva_receta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 364,  638 => 362,  634 => 361,  630 => 360,  625 => 359,  622 => 358,  604 => 343,  582 => 339,  572 => 337,  568 => 336,  563 => 335,  546 => 334,  521 => 311,  508 => 301,  473 => 269,  466 => 264,  455 => 262,  451 => 261,  406 => 218,  403 => 216,  397 => 213,  394 => 212,  392 => 211,  367 => 193,  346 => 175,  323 => 154,  293 => 143,  267 => 136,  262 => 135,  245 => 121,  222 => 111,  211 => 108,  137 => 62,  114 => 47,  216 => 104,  194 => 91,  152 => 70,  145 => 69,  389 => 243,  385 => 242,  377 => 199,  373 => 239,  338 => 218,  333 => 214,  327 => 211,  324 => 210,  307 => 197,  302 => 194,  295 => 189,  233 => 130,  228 => 127,  198 => 105,  139 => 68,  90 => 32,  81 => 25,  65 => 15,  213 => 103,  191 => 80,  188 => 90,  172 => 88,  155 => 58,  148 => 54,  129 => 45,  118 => 41,  84 => 23,  364 => 218,  359 => 217,  356 => 216,  339 => 205,  334 => 202,  300 => 169,  281 => 140,  277 => 139,  253 => 141,  242 => 131,  234 => 124,  200 => 105,  178 => 71,  120 => 51,  110 => 49,  76 => 18,  97 => 41,  77 => 22,  260 => 103,  256 => 102,  251 => 101,  248 => 100,  236 => 95,  231 => 93,  225 => 106,  205 => 77,  192 => 102,  190 => 68,  186 => 66,  180 => 93,  167 => 85,  160 => 53,  157 => 52,  150 => 74,  146 => 47,  134 => 61,  126 => 65,  74 => 9,  70 => 15,  34 => 6,  1145 => 631,  1141 => 630,  1137 => 629,  1133 => 628,  1129 => 627,  1125 => 626,  1121 => 625,  1116 => 624,  1113 => 623,  1095 => 609,  1063 => 580,  1045 => 565,  1041 => 564,  1037 => 562,  1003 => 529,  993 => 525,  984 => 524,  980 => 523,  941 => 486,  939 => 485,  937 => 484,  935 => 483,  933 => 482,  931 => 481,  921 => 472,  916 => 468,  907 => 464,  896 => 458,  892 => 457,  886 => 454,  881 => 453,  876 => 452,  862 => 441,  858 => 440,  854 => 439,  850 => 438,  834 => 424,  831 => 418,  829 => 417,  827 => 416,  825 => 415,  823 => 414,  821 => 413,  819 => 412,  814 => 408,  805 => 404,  799 => 402,  793 => 398,  787 => 397,  776 => 392,  773 => 391,  764 => 387,  756 => 384,  753 => 383,  750 => 382,  741 => 378,  733 => 375,  730 => 374,  727 => 373,  717 => 369,  715 => 368,  712 => 367,  708 => 366,  704 => 364,  701 => 363,  695 => 362,  691 => 360,  687 => 358,  683 => 356,  679 => 354,  676 => 353,  672 => 352,  668 => 351,  664 => 350,  660 => 349,  656 => 348,  652 => 347,  647 => 346,  642 => 363,  637 => 342,  633 => 340,  631 => 339,  594 => 304,  585 => 301,  576 => 338,  569 => 292,  566 => 290,  556 => 285,  548 => 282,  540 => 279,  537 => 278,  535 => 277,  528 => 275,  524 => 274,  519 => 272,  506 => 270,  500 => 268,  494 => 267,  456 => 231,  447 => 228,  438 => 224,  428 => 218,  420 => 215,  416 => 214,  411 => 212,  396 => 208,  390 => 207,  352 => 171,  343 => 221,  328 => 161,  320 => 158,  308 => 154,  303 => 144,  290 => 165,  284 => 148,  232 => 103,  223 => 99,  206 => 93,  197 => 104,  185 => 86,  175 => 83,  165 => 79,  161 => 80,  127 => 71,  53 => 8,  37 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 210,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 241,  379 => 119,  374 => 116,  368 => 238,  365 => 237,  362 => 110,  360 => 187,  355 => 230,  341 => 105,  337 => 103,  322 => 209,  314 => 99,  312 => 155,  309 => 147,  305 => 95,  298 => 191,  294 => 90,  285 => 89,  283 => 88,  278 => 147,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 121,  214 => 83,  177 => 88,  169 => 85,  140 => 55,  132 => 66,  128 => 49,  111 => 47,  107 => 46,  61 => 10,  273 => 138,  269 => 94,  254 => 92,  246 => 90,  243 => 99,  240 => 86,  238 => 116,  235 => 74,  230 => 113,  227 => 81,  224 => 71,  221 => 105,  219 => 110,  217 => 87,  208 => 112,  204 => 83,  179 => 69,  159 => 91,  143 => 56,  135 => 65,  131 => 60,  119 => 42,  108 => 44,  102 => 33,  71 => 19,  67 => 15,  63 => 14,  59 => 13,  47 => 7,  38 => 6,  94 => 40,  89 => 30,  85 => 34,  79 => 18,  75 => 17,  68 => 17,  56 => 9,  50 => 6,  29 => 3,  87 => 25,  72 => 16,  55 => 5,  21 => 2,  26 => 6,  98 => 32,  93 => 28,  88 => 30,  78 => 25,  46 => 5,  27 => 4,  40 => 15,  44 => 12,  35 => 5,  31 => 2,  43 => 8,  41 => 7,  28 => 3,  201 => 94,  196 => 81,  183 => 82,  171 => 58,  166 => 83,  163 => 54,  158 => 79,  156 => 90,  151 => 77,  142 => 45,  138 => 76,  136 => 74,  123 => 37,  121 => 36,  117 => 69,  115 => 51,  105 => 43,  101 => 47,  91 => 17,  69 => 25,  66 => 7,  62 => 14,  49 => 19,  24 => 1,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 85,  203 => 106,  199 => 67,  193 => 103,  189 => 101,  187 => 100,  182 => 66,  176 => 72,  173 => 87,  168 => 93,  164 => 83,  162 => 59,  154 => 75,  149 => 60,  147 => 58,  144 => 57,  141 => 63,  133 => 55,  130 => 54,  125 => 44,  122 => 55,  116 => 41,  112 => 42,  109 => 34,  106 => 35,  103 => 42,  99 => 31,  95 => 39,  92 => 21,  86 => 28,  82 => 29,  80 => 19,  73 => 21,  64 => 11,  60 => 13,  57 => 11,  54 => 7,  51 => 14,  48 => 106,  45 => 100,  42 => 4,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
