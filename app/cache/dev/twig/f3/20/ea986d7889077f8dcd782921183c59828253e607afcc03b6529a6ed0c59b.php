<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_f320ea986d7889077f8dcd782921183c59828253e607afcc03b6529a6ed0c59b extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  87 => 20,  55 => 13,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 31,  69 => 25,  66 => 15,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 14,  54 => 21,  43 => 8,  40 => 8,  33 => 5,  30 => 3,  618 => 356,  614 => 355,  610 => 354,  606 => 353,  602 => 352,  597 => 351,  594 => 350,  576 => 335,  554 => 331,  548 => 330,  544 => 329,  540 => 328,  535 => 327,  518 => 326,  493 => 303,  480 => 293,  445 => 261,  438 => 256,  429 => 254,  425 => 253,  381 => 211,  378 => 209,  372 => 206,  369 => 205,  367 => 204,  352 => 192,  342 => 186,  335 => 180,  321 => 168,  298 => 147,  284 => 140,  278 => 137,  268 => 136,  256 => 133,  252 => 132,  248 => 131,  242 => 129,  237 => 128,  220 => 114,  213 => 109,  202 => 107,  198 => 106,  185 => 96,  174 => 88,  169 => 86,  163 => 70,  157 => 73,  146 => 65,  143 => 64,  134 => 56,  130 => 55,  127 => 54,  125 => 53,  118 => 49,  112 => 42,  106 => 42,  103 => 41,  101 => 24,  86 => 28,  77 => 22,  73 => 21,  65 => 15,  63 => 14,  56 => 9,  53 => 8,  46 => 7,  42 => 4,  37 => 3,  31 => 5,);
    }
}
