<?php

/* RecetasBundle:Default:perfil.html.twig */
class __TwigTemplate_48104c654eaac8cb71330e2dbf09a3ce463e81c0ab427a1f83e01b722491687a extends Twig_Template
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
        echo "\t<div class='navbar navbar-default complement-1-b'>
\t\t\t<div class='container'> 
\t\t\t\t<div class='navbar-header'>
\t\t\t\t\t<button class='navbar-toggle' type='button', data-toggle='collapse', data-target='.navbar-collapse'>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t\t<span class='icon-bar'></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class='navbar-brand' href='#'> Gestor de cocina</a>
\t\t\t\t</div>
\t\t\t\t<div class='navbar-collapse collapse'>
\t\t\t\t\t<ul class='nav navbar-nav menu'>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"> Inicio</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 24
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 25
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\"> Mis Recetas</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t\t\t";
        // line 30
        echo "\t\t\t\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("centro_log");
            echo "\"> Centro Logístico</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\"> Almacén</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t<ul class='nav navbar-nav navbar-right menu-user'>
\t\t\t\t\t\t";
        // line 41
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 42
            echo "\t\t\t\t\t\t\t\t<li class='dropdown'>
\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>  
\t\t\t\t\t\t\t\t\t\t<span>Usuario: <strong>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
            echo "</strong></span>
\t\t\t\t\t\t\t\t\t\t<span class='caret caret-white'></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class='dropdown-menu complement-1-b'>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("perfil");
            echo "\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-user'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Perfil</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-off'></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>   Cerrar Sesión</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t\t\t\t<li><a class=\"underline\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a></li>
\t\t        \t\t\t\t<li><a href=\"\">|</a></li>
\t\t        \t\t\t\t<li><a class=\"underline\" href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("registro");
            echo "\">Registro</a></li>
\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container\">
\t\t<div class=\"row block-info\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img id=\"user-photo\" alt=\"Pulsa para Subir tu foto\" src=\"";
        // line 75
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
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre"), "html", null, true);
        echo "</span></td>
\t\t\t\t\t\t\t\t";
        // line 90
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"col-md-3\">Apellidos</td>
\t\t\t\t\t\t\t<td><span id=\"perfilApellidos\" class=\"info\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos"), "html", null, true);
        echo "</span></td>
\t\t\t\t\t\t\t\t";
        // line 95
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"col-md-3\">Usuario</td>
\t\t\t\t\t\t\t<td><span id=\"perfilUsuario\" class=\"info\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
        echo "</span></td>
\t\t\t\t\t\t\t";
        // line 100
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"col-md-3\">Email</td>
\t\t\t\t\t\t\t<td><span id=\"perfilEmail\" class=\"info\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email"), "html", null, true);
        echo "</span></td>
\t\t\t\t\t\t\t";
        // line 105
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t";
        // line 110
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
        // line 121
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
        // line 129
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
        // line 141
        if (array_key_exists("message", $context)) {
            // line 142
            echo "\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<span>";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 146
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
        // line 180
        echo "<div class=\"modal-footer\">
\t\t        <button type=\"submit\" class=\"btn btn-primary complement-1-b\">Guardar cambios</button>
\t\t        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
\t\t      </div>
\t      </form>
\t    </div>
\t  </div>
\t</div>";
    }

    // line 189
    public function block_javascript($context, array $blocks = array())
    {
        // line 190
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        \t<script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/validate.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 195,  334 => 194,  330 => 193,  326 => 192,  322 => 191,  317 => 190,  314 => 189,  303 => 180,  268 => 146,  262 => 143,  259 => 142,  257 => 141,  242 => 129,  231 => 121,  218 => 110,  214 => 105,  210 => 103,  205 => 100,  201 => 98,  196 => 95,  192 => 93,  187 => 90,  183 => 88,  167 => 75,  158 => 68,  153 => 66,  147 => 64,  136 => 56,  127 => 50,  119 => 45,  114 => 42,  112 => 41,  108 => 39,  102 => 36,  95 => 32,  92 => 31,  89 => 30,  87 => 29,  81 => 26,  78 => 25,  76 => 24,  71 => 22,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
