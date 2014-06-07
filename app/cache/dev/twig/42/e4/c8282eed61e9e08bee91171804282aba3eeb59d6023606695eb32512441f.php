<?php

/* RecetasBundle:Recetas:index.html.twig */
class __TwigTemplate_42e4c8282eed61e9e08bee91171804282aba3eeb59d6023606695eb32512441f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Recetas list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Fecha_creacion</th>
                <th>Descripcion</th>
                <th>Comensales</th>
                <th>Tiempo</th>
                <th>Foto</th>
                <th>Tags</th>
                <th>Precio</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recetascrud_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slug"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechacreacion")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechacreacion"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comensales"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tiempo"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tags"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "precio"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recetascrud_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recetascrud_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("recetascrud_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Recetas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 100,  129 => 75,  367 => 206,  358 => 204,  265 => 126,  262 => 125,  239 => 120,  210 => 111,  205 => 109,  197 => 106,  192 => 105,  127 => 55,  110 => 44,  185 => 97,  180 => 96,  148 => 76,  134 => 65,  497 => 295,  493 => 294,  488 => 293,  485 => 292,  467 => 277,  445 => 273,  439 => 272,  426 => 269,  336 => 203,  301 => 171,  280 => 154,  257 => 133,  211 => 118,  207 => 117,  170 => 94,  165 => 101,  114 => 54,  153 => 85,  150 => 84,  65 => 26,  237 => 123,  152 => 67,  126 => 51,  118 => 49,  113 => 43,  124 => 47,  84 => 30,  76 => 28,  58 => 24,  383 => 249,  375 => 247,  371 => 207,  366 => 245,  363 => 205,  353 => 237,  330 => 220,  324 => 216,  263 => 157,  232 => 136,  226 => 130,  215 => 119,  200 => 115,  155 => 85,  146 => 79,  260 => 141,  256 => 140,  244 => 137,  233 => 119,  216 => 118,  190 => 105,  172 => 96,  167 => 95,  104 => 43,  81 => 32,  70 => 19,  23 => 1,  909 => 552,  905 => 551,  901 => 550,  897 => 549,  892 => 548,  889 => 547,  831 => 493,  827 => 492,  823 => 490,  789 => 457,  779 => 453,  770 => 452,  766 => 451,  715 => 402,  706 => 398,  689 => 385,  683 => 384,  679 => 382,  675 => 380,  672 => 379,  668 => 378,  664 => 377,  660 => 376,  656 => 375,  652 => 374,  648 => 373,  643 => 372,  638 => 371,  601 => 336,  592 => 333,  577 => 326,  569 => 323,  562 => 319,  557 => 317,  548 => 315,  542 => 313,  536 => 312,  498 => 276,  489 => 273,  472 => 266,  464 => 263,  452 => 257,  443 => 255,  431 => 270,  369 => 206,  361 => 203,  354 => 199,  349 => 197,  340 => 195,  334 => 193,  328 => 192,  282 => 148,  255 => 123,  245 => 134,  228 => 129,  223 => 115,  218 => 125,  137 => 60,  77 => 26,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 259,  453 => 151,  444 => 149,  440 => 148,  437 => 253,  435 => 271,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 268,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 250,  384 => 245,  381 => 120,  379 => 248,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 203,  341 => 228,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 166,  285 => 89,  283 => 134,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 139,  247 => 138,  241 => 138,  229 => 135,  220 => 70,  214 => 112,  177 => 95,  169 => 102,  140 => 55,  132 => 70,  128 => 67,  107 => 40,  61 => 21,  273 => 144,  269 => 127,  254 => 92,  243 => 126,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 117,  224 => 71,  221 => 77,  219 => 114,  217 => 75,  208 => 68,  204 => 116,  179 => 100,  159 => 92,  143 => 56,  135 => 71,  119 => 42,  102 => 32,  71 => 22,  67 => 24,  63 => 15,  59 => 25,  38 => 6,  94 => 40,  89 => 31,  85 => 25,  75 => 26,  68 => 17,  56 => 24,  87 => 31,  21 => 2,  26 => 6,  93 => 35,  88 => 31,  78 => 21,  46 => 6,  27 => 4,  44 => 21,  31 => 4,  28 => 3,  201 => 108,  196 => 114,  183 => 82,  171 => 61,  166 => 71,  163 => 93,  158 => 74,  156 => 66,  151 => 63,  142 => 62,  138 => 63,  136 => 56,  121 => 46,  117 => 45,  105 => 41,  91 => 32,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 27,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 90,  157 => 99,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 56,  115 => 43,  111 => 42,  108 => 36,  101 => 37,  98 => 36,  96 => 35,  83 => 30,  74 => 30,  66 => 24,  55 => 18,  52 => 23,  50 => 8,  43 => 8,  41 => 16,  35 => 6,  32 => 4,  29 => 5,  209 => 114,  203 => 78,  199 => 109,  193 => 73,  189 => 98,  187 => 105,  182 => 66,  176 => 97,  173 => 65,  168 => 78,  164 => 86,  162 => 87,  154 => 58,  149 => 67,  147 => 58,  144 => 65,  141 => 48,  133 => 55,  130 => 65,  125 => 58,  122 => 43,  116 => 60,  112 => 41,  109 => 34,  106 => 38,  103 => 40,  99 => 34,  95 => 33,  92 => 32,  86 => 31,  82 => 28,  80 => 29,  73 => 28,  64 => 25,  60 => 21,  57 => 6,  54 => 18,  51 => 22,  48 => 13,  45 => 17,  42 => 10,  39 => 5,  36 => 4,  33 => 6,  30 => 2,);
    }
}