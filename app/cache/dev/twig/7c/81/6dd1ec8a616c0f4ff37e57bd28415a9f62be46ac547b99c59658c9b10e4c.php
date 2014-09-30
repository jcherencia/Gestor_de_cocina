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
        return array (  57 => 12,  54 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  618 => 356,  614 => 355,  610 => 354,  606 => 353,  602 => 352,  597 => 351,  594 => 350,  576 => 335,  554 => 331,  548 => 330,  544 => 329,  540 => 328,  535 => 327,  518 => 326,  493 => 303,  480 => 293,  445 => 261,  438 => 256,  429 => 254,  425 => 253,  381 => 211,  378 => 209,  372 => 206,  369 => 205,  367 => 204,  352 => 192,  342 => 186,  335 => 180,  321 => 168,  298 => 147,  284 => 140,  278 => 137,  268 => 136,  256 => 133,  252 => 132,  248 => 131,  242 => 129,  237 => 128,  220 => 114,  213 => 109,  202 => 107,  198 => 106,  185 => 96,  174 => 88,  169 => 86,  163 => 82,  157 => 73,  146 => 65,  143 => 64,  134 => 56,  130 => 55,  127 => 54,  125 => 53,  118 => 49,  112 => 45,  106 => 42,  103 => 41,  101 => 40,  86 => 28,  77 => 22,  73 => 21,  65 => 15,  63 => 14,  56 => 9,  53 => 8,  46 => 5,  42 => 4,  37 => 3,  31 => 2,);
    }
}
