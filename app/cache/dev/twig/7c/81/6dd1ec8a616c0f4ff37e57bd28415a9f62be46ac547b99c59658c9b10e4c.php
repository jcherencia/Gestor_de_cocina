<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7c816dd1ec8a616c0f4ff37e57bd28415a9f62be46ac547b99c59658c9b10e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  33 => 4,  30 => 3,  474 => 251,  470 => 250,  465 => 248,  461 => 247,  457 => 246,  453 => 245,  448 => 244,  445 => 243,  427 => 231,  404 => 213,  347 => 158,  334 => 151,  329 => 150,  325 => 148,  321 => 147,  318 => 146,  311 => 144,  295 => 141,  289 => 140,  284 => 138,  280 => 137,  276 => 136,  269 => 134,  265 => 133,  261 => 132,  256 => 130,  252 => 129,  248 => 127,  244 => 126,  220 => 104,  207 => 90,  193 => 83,  189 => 82,  185 => 81,  181 => 80,  177 => 79,  174 => 78,  167 => 76,  151 => 73,  145 => 72,  139 => 70,  134 => 62,  130 => 61,  125 => 59,  121 => 58,  116 => 56,  112 => 55,  108 => 53,  103 => 52,  79 => 30,  64 => 15,  57 => 12,  54 => 11,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
