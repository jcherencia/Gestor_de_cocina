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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class='content'>
\t\t<div class='navbar navbar-default complement-1-b'>
\t\t\t<div class='container'> 
\t\t\t\t<div class='navbar-header'>
\t\t\t\t\t<button class='navbar-toggle' type='button', data-toggle='collapse', data-target='navbar-collapse'>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class='navbar-brand' href='#'> Gestor de cocina</a>
\t\t\t\t</div>
\t\t\t\t<div class='navbar-collapse collapse'>
\t\t\t\t\t<ul class='nav navbar-nav menu'>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"> Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li  class='active'>
\t\t\t\t\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("recetas");
        echo "\"> Recetas</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("centro_log");
        echo "\"> Centro Logístico</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("almacen");
        echo "\"> Almacén</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class='nav navbar-nav navbar-right menu-user'>
\t\t\t\t\t\t<li class='dropdown'>
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>  
\t\t\t\t\t\t\t\t<span>   Usuario 1</span>
\t\t\t\t\t\t\t\t<span class='caret caret-white'></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class='dropdown-menu complement-1-b'>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("perfil");
        echo "\"> 
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>
\t\t\t\t\t\t\t\t\t\t<span>   Perfil</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-off'></span>
\t\t\t\t\t\t\t\t\t\t<span>   Cerrar Sesión</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading complement-1-b\">
\t\t\t\t\t\t<strong>Crear Recetas</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<form action =\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("crear_receta");
        echo "\" id=\"form-recetas\" method=\"post\" role=\"form\" class=\"form form-horizontal\">
\t\t\t\t\t\t\t<div class=\"form-group\">
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
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"precio\" id=\"precioTotal\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"> €</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3\"></label>
\t\t\t\t\t\t\t\t<button id=\"add_ing\" type=\"button\" class=\"col-md-3 btn btn-primary complement-1-b\" onClick=\"crearListadoIng('list_ingre')\" data-url=\"";
        // line 95
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
        // line 127
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
        // line 159
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
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
            // line 160
            echo "\t\t\t\t\t\t\t\t<tr class=\"ing_seleccionable\" id=\"ing_seleccionable_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"form-control\" data-value=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"info_nombre\">";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "stock"), "html", null, true);
            echo "  <span class=\"unidad\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
            echo "</span></td>
\t\t\t\t\t\t\t\t\t<td><span class=\"precio\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "precio"), "html", null, true);
            echo "</span> € / <span class=\"und_comp\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidadCompra"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "unidad"), "html", null, true);
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
        // line 168
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

    // line 183
    public function block_javascript($context, array $blocks = array())
    {
        // line 184
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
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
        return array (  308 => 186,  304 => 185,  299 => 184,  296 => 183,  278 => 168,  256 => 164,  250 => 163,  246 => 162,  242 => 161,  237 => 160,  220 => 159,  185 => 127,  150 => 95,  116 => 64,  88 => 39,  73 => 27,  67 => 24,  61 => 21,  55 => 18,  39 => 4,  36 => 3,  30 => 2,);
    }
}
