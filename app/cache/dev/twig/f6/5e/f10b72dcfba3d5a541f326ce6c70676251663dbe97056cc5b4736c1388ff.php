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
        return array (  233 => 133,  229 => 132,  225 => 131,  221 => 130,  217 => 129,  212 => 128,  209 => 127,  198 => 118,  163 => 84,  157 => 81,  154 => 80,  152 => 79,  137 => 67,  126 => 59,  113 => 48,  109 => 43,  105 => 41,  100 => 38,  96 => 36,  91 => 33,  87 => 31,  82 => 28,  78 => 26,  62 => 13,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
