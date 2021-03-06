<?php

/* ::base.html.twig */
class __TwigTemplate_d4d45e122a816edbbb0fa823333ec26513ecd85c35aa96b2f60607ba8ae8a24c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        echo "</head>
<body>
     ";
        // line 15
        $this->displayBlock('menu', $context, $blocks);
        // line 99
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 106
        echo "</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        echo " 
        <link type='text/css' rel='stylesheet' href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link type='text/css' rel='stylesheet' href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
        <link type='text/css' rel='stylesheet' href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
        <link type='text/css' rel='stylesheet' href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/menu.css"), "html", null, true);
        echo "\">

    ";
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "         ";
        $context["currentPath"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 17
        echo "        <div class='navbar navbar-default complement-1-b'>
            <div class='container'> 
                <div class='navbar-header'>
                    <button class='navbar-toggle' type='button', data-toggle='collapse', data-target='.navbar-collapse'>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand' href='#'> Gestor de cocina </a>
                </div>
                <div class='navbar-collapse collapse'>
                    <ul class='nav navbar-nav menu'>
                        ";
        // line 29
        if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "inicio")) {
            // line 30
            echo "                                    <li class='active'>
                                ";
        } else {
            // line 32
            echo "                                    <li>
                                ";
        }
        // line 34
        echo "                            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\"> Inicio</a>
                        </li>
                        ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 37
            echo "                        ";
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "recetas")) {
                // line 38
                echo "                                    <li class='active'>
                                ";
            } else {
                // line 40
                echo "                                    <li>
                                ";
            }
            // line 42
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("recetas");
            echo "\">Recetas</a>
                        </li>
                        ";
            // line 44
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "solicitudes")) {
                // line 45
                echo "                                    <li class='active'>
                                ";
            } else {
                // line 47
                echo "                                    <li>
                                ";
            }
            // line 49
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("solicitudes");
            echo "\">Solicitudes</a>
                        </li>
                        ";
        }
        // line 52
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "                                ";
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "centro_log")) {
                // line 54
                echo "                                    <li class='active'>
                                ";
            } else {
                // line 56
                echo "                                    <li>
                                ";
            }
            // line 58
            echo "                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("centro_log");
            echo "\"> Centro Logístico</a>
                                
                                </li>
                                
                                <li>
                                    <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("almacen");
            echo "\"> Almacén</a>
                                </li>
                        ";
        }
        // line 66
        echo "                    </ul>
                    <ul class='nav navbar-nav navbar-right menu-user'>
                        ";
        // line 68
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 69
            echo "                                <li class='dropdown'>
                                    <a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>
                                        <span class='glyphicon glyphicon-user'></span>  
                                        <span>Usuario: <strong>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
            echo "</strong></span>
                                        <span class='caret caret-white'></span>
                                    </a>
                                    <ul class='dropdown-menu menu-user complement-1-b'>
                                        <li>
                                            <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("perfil");
            echo "\"> 
                                                <span class='glyphicon glyphicon-user'></span>
                                                <span>   Perfil</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
                                                <span class='glyphicon glyphicon-off'></span>
                                                <span>   Cerrar Sesión</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                        ";
        } else {
            // line 91
            echo "                            <li><a class=\"underline\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a></li>
                            <li><a href=\"\">|</a></li>
                            <li><a class=\"underline\" href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("registro");
            echo "\">Registro</a></li>
                        ";
        }
        // line 95
        echo "                </div>
            </div>
        </div>
     ";
    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
    }

    // line 100
    public function block_javascript($context, array $blocks = array())
    {
        // line 101
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/funciones.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  260 => 103,  256 => 102,  251 => 101,  248 => 100,  243 => 99,  236 => 95,  231 => 93,  214 => 83,  205 => 77,  192 => 69,  190 => 68,  186 => 66,  180 => 63,  171 => 58,  167 => 56,  163 => 54,  160 => 53,  157 => 52,  150 => 49,  146 => 47,  142 => 45,  140 => 44,  134 => 42,  130 => 40,  123 => 37,  121 => 36,  115 => 34,  111 => 32,  107 => 30,  105 => 29,  91 => 17,  88 => 16,  85 => 15,  78 => 10,  74 => 9,  70 => 8,  66 => 7,  61 => 6,  55 => 5,  48 => 106,  45 => 100,  40 => 15,  36 => 13,  34 => 6,  30 => 5,  24 => 1,  225 => 91,  221 => 105,  216 => 104,  213 => 103,  201 => 94,  197 => 72,  194 => 91,  188 => 90,  177 => 88,  173 => 87,  168 => 84,  166 => 83,  152 => 71,  145 => 69,  139 => 68,  132 => 66,  126 => 38,  95 => 39,  82 => 29,  73 => 22,  65 => 16,  62 => 14,  59 => 13,  56 => 12,  46 => 6,  42 => 99,  37 => 4,  31 => 3,);
    }
}
