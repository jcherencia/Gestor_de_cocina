<?php

/* AlmacenBundle:Productos:index.html.twig */
class __TwigTemplate_5acb73c923c854cb4b68afb951247285c9345521b3c2132e74b34bf1cb846d37 extends Twig_Template
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
        echo "<h1>Productos list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Precio</th>
                <th>Unidadcompra</th>
                <th>Unidad</th>
                <th>Stock</th>
                <th>Stockmin</th>
                <th>Foto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("almacen_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slug"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "precio"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "unidadCompra"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "unidad"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stock"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stockMin"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("almacen_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("almacen_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 45
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("almacen_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "AlmacenBundle:Productos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  84 => 30,  76 => 28,  58 => 24,  383 => 249,  375 => 247,  371 => 246,  366 => 245,  363 => 244,  353 => 237,  330 => 220,  324 => 216,  263 => 157,  232 => 134,  226 => 130,  215 => 124,  200 => 115,  155 => 82,  146 => 76,  260 => 141,  256 => 140,  244 => 137,  233 => 129,  216 => 118,  190 => 105,  172 => 96,  167 => 95,  104 => 43,  81 => 15,  70 => 9,  23 => 1,  909 => 552,  905 => 551,  901 => 550,  897 => 549,  892 => 548,  889 => 547,  831 => 493,  827 => 492,  823 => 490,  789 => 457,  779 => 453,  770 => 452,  766 => 451,  715 => 402,  706 => 398,  689 => 385,  683 => 384,  679 => 382,  675 => 380,  672 => 379,  668 => 378,  664 => 377,  660 => 376,  656 => 375,  652 => 374,  648 => 373,  643 => 372,  638 => 371,  601 => 336,  592 => 333,  577 => 326,  569 => 323,  562 => 319,  557 => 317,  548 => 315,  542 => 313,  536 => 312,  498 => 276,  489 => 273,  472 => 266,  464 => 263,  452 => 257,  443 => 255,  431 => 252,  369 => 206,  361 => 203,  354 => 199,  349 => 197,  340 => 195,  334 => 193,  328 => 192,  282 => 148,  255 => 151,  245 => 134,  228 => 129,  223 => 127,  218 => 125,  137 => 60,  77 => 25,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 259,  453 => 151,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 250,  384 => 213,  381 => 120,  379 => 248,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 228,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 139,  247 => 138,  241 => 77,  229 => 73,  220 => 70,  214 => 124,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 64,  107 => 36,  61 => 13,  273 => 144,  269 => 94,  254 => 92,  243 => 142,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 125,  217 => 75,  208 => 68,  204 => 116,  179 => 101,  159 => 92,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 22,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 18,  89 => 31,  85 => 25,  75 => 17,  68 => 26,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 31,  78 => 21,  46 => 5,  27 => 4,  44 => 21,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 93,  158 => 67,  156 => 66,  151 => 63,  142 => 62,  138 => 71,  136 => 56,  121 => 46,  117 => 45,  105 => 39,  91 => 27,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 27,  69 => 25,  47 => 9,  40 => 8,  37 => 3,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 58,  123 => 47,  120 => 50,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 36,  96 => 35,  83 => 28,  74 => 10,  66 => 8,  55 => 23,  52 => 21,  50 => 10,  43 => 8,  41 => 16,  35 => 6,  32 => 4,  29 => 5,  209 => 114,  203 => 78,  199 => 109,  193 => 73,  189 => 71,  187 => 105,  182 => 66,  176 => 97,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 65,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 39,  99 => 36,  95 => 28,  92 => 32,  86 => 16,  82 => 22,  80 => 29,  73 => 19,  64 => 25,  60 => 6,  57 => 6,  54 => 10,  51 => 22,  48 => 13,  45 => 17,  42 => 10,  39 => 15,  36 => 5,  33 => 6,  30 => 7,);
    }
}
