<?php

/* RecetasBundle:Default:login.html.twig */
class __TwigTemplate_022dd7d3add4236cfe2045336521311d8283de40d09b51b6ff54296350ebac90 extends Twig_Template
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
\t\t\t<h1>Acceso a Usuarios - Gestor de Cocina</h1>
\t\t\t";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message") == "Bad credentials")) {
                // line 17
                echo "\t\t\t\t\t<h2>Error en el login</h2>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t";
        }
        // line 20
        echo "\t\t\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"inputEmail3\" class=\"col-md-3 control-label\">Usuario</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"Usuario\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"inputPassword3\" class=\"col-md-3 control-label\">Contraseña</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input name=\"_password\" type=\"password\" placeholder=\"Contraseña\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\"></label>
\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t<span>  Mantener sesión iniciada</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"open_id\">
\t\t\t\t\t<h1 id=\"toggle-open_id\" class=\"open_id_header\">
\t\t\t\t\t\tAccede con tu Open Id
\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"open_id_body\"> 
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\"></label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary-dark col-md-12\">Facebook</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\"></label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary col-md-12\">Twitter</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\"></label>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger col-md-12\">Google</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success col-md-6\">Inicia Sesión</button>
\t\t\t\t\t<span class=\"col-md-4 registro\">
\t\t\t\t\t\t<span>ó </span><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("registro");
        echo "\">Regístrate</a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\"> </label>
\t\t\t\t\t<span class=\"col-md-10\">¿Has olvidado tu contraseña?</span>
\t\t\t\t\t<label class=\"col-md-2 control-label\"> </label>
\t\t\t\t\t<span class=\"col-md-10\"><a href=\"\">Recordar contraseña.</a></span>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
    }

    // line 84
    public function block_javascript($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/efectos.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/acciones.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 87,  158 => 86,  153 => 85,  150 => 84,  132 => 70,  83 => 24,  75 => 20,  72 => 19,  68 => 17,  65 => 16,  63 => 15,  56 => 10,  53 => 9,  46 => 6,  42 => 5,  37 => 4,  31 => 3,);
    }
}
