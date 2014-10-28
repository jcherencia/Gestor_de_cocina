<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_711249a6f3315d41cb687d9a66affe3df841fb212737a8cd06a6f862372d6c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  38 => 13,  35 => 7,  26 => 5,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  33 => 6,  30 => 3,  474 => 251,  470 => 250,  465 => 248,  461 => 247,  457 => 246,  453 => 245,  448 => 244,  445 => 243,  427 => 231,  404 => 213,  347 => 158,  334 => 151,  329 => 150,  325 => 148,  321 => 147,  318 => 146,  311 => 144,  295 => 141,  289 => 140,  284 => 138,  280 => 137,  276 => 136,  269 => 134,  265 => 133,  261 => 132,  256 => 130,  252 => 129,  248 => 127,  244 => 126,  220 => 104,  207 => 90,  193 => 83,  189 => 82,  185 => 81,  181 => 80,  177 => 79,  174 => 78,  167 => 76,  151 => 63,  145 => 72,  139 => 70,  134 => 62,  130 => 61,  125 => 59,  121 => 46,  116 => 56,  112 => 42,  108 => 53,  103 => 52,  79 => 18,  64 => 12,  57 => 16,  54 => 21,  46 => 7,  42 => 14,  37 => 3,  31 => 5,);
    }
}
