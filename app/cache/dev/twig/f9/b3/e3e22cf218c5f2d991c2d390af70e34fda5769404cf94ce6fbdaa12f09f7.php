<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_f9b3e3e22cf218c5f2d991c2d390af70e34fda5769404cf94ce6fbdaa12f09f7 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 286,  792 => 488,  775 => 485,  746 => 478,  727 => 476,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  660 => 464,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  522 => 406,  517 => 404,  202 => 94,  386 => 159,  378 => 157,  363 => 153,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  321 => 135,  296 => 121,  290 => 119,  288 => 118,  253 => 100,  222 => 83,  184 => 63,  175 => 58,  127 => 35,  391 => 133,  382 => 131,  371 => 156,  356 => 122,  347 => 119,  328 => 139,  313 => 110,  281 => 114,  274 => 110,  234 => 90,  232 => 88,  210 => 77,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  830 => 539,  828 => 538,  815 => 531,  812 => 530,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  742 => 492,  740 => 491,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  640 => 448,  636 => 446,  628 => 444,  616 => 440,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  546 => 423,  536 => 419,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  280 => 194,  276 => 111,  174 => 74,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 135,  394 => 134,  380 => 158,  351 => 141,  342 => 137,  335 => 134,  329 => 131,  325 => 129,  320 => 127,  315 => 131,  303 => 122,  300 => 121,  289 => 196,  286 => 112,  270 => 102,  267 => 101,  262 => 93,  226 => 84,  216 => 79,  213 => 78,  207 => 76,  200 => 72,  178 => 59,  153 => 77,  84 => 27,  58 => 18,  20 => 1,  185 => 75,  181 => 65,  212 => 128,  152 => 46,  137 => 67,  275 => 105,  271 => 190,  266 => 209,  263 => 208,  245 => 196,  113 => 40,  104 => 37,  595 => 345,  591 => 436,  587 => 434,  583 => 342,  578 => 432,  575 => 340,  557 => 325,  535 => 321,  529 => 409,  525 => 319,  516 => 317,  499 => 316,  426 => 251,  419 => 246,  410 => 244,  406 => 243,  359 => 123,  353 => 328,  350 => 327,  348 => 140,  323 => 128,  279 => 212,  265 => 105,  259 => 103,  237 => 91,  223 => 119,  218 => 118,  194 => 68,  155 => 47,  118 => 49,  389 => 160,  377 => 129,  373 => 156,  343 => 146,  338 => 116,  333 => 115,  327 => 211,  324 => 112,  302 => 125,  295 => 189,  233 => 87,  228 => 127,  198 => 118,  172 => 57,  161 => 58,  90 => 37,  81 => 23,  65 => 22,  195 => 91,  191 => 67,  316 => 170,  307 => 128,  304 => 186,  287 => 175,  282 => 172,  165 => 83,  129 => 57,  114 => 36,  100 => 36,  76 => 28,  97 => 37,  77 => 25,  256 => 96,  251 => 182,  248 => 97,  236 => 95,  231 => 93,  225 => 131,  205 => 77,  192 => 102,  190 => 68,  186 => 72,  180 => 70,  167 => 71,  146 => 47,  134 => 39,  70 => 26,  34 => 5,  1044 => 645,  1040 => 610,  1036 => 609,  1032 => 608,  1028 => 607,  1024 => 606,  1019 => 605,  1016 => 604,  998 => 590,  966 => 561,  948 => 546,  944 => 545,  940 => 543,  906 => 510,  896 => 573,  887 => 505,  883 => 504,  844 => 546,  842 => 466,  840 => 465,  838 => 544,  836 => 543,  834 => 462,  824 => 537,  819 => 449,  810 => 492,  799 => 439,  795 => 438,  789 => 435,  784 => 434,  779 => 433,  774 => 509,  752 => 402,  749 => 479,  747 => 395,  745 => 493,  743 => 393,  741 => 392,  739 => 391,  737 => 490,  732 => 487,  723 => 382,  717 => 380,  712 => 377,  710 => 475,  704 => 373,  700 => 371,  692 => 474,  689 => 367,  685 => 365,  677 => 465,  674 => 361,  670 => 360,  666 => 358,  663 => 357,  657 => 356,  653 => 354,  649 => 462,  645 => 350,  642 => 449,  638 => 348,  634 => 456,  630 => 346,  626 => 443,  622 => 452,  618 => 343,  613 => 342,  608 => 341,  603 => 439,  599 => 346,  597 => 335,  560 => 300,  551 => 424,  542 => 421,  539 => 292,  534 => 418,  531 => 281,  521 => 318,  513 => 273,  505 => 270,  502 => 269,  500 => 268,  493 => 266,  489 => 265,  484 => 263,  471 => 261,  465 => 259,  459 => 258,  421 => 222,  412 => 219,  403 => 136,  385 => 242,  376 => 203,  367 => 339,  361 => 152,  317 => 162,  308 => 287,  293 => 120,  277 => 146,  255 => 101,  249 => 92,  197 => 69,  188 => 90,  170 => 84,  160 => 53,  150 => 55,  126 => 59,  53 => 17,  480 => 162,  474 => 293,  469 => 158,  461 => 283,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 209,  387 => 164,  384 => 121,  381 => 241,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 329,  341 => 117,  337 => 103,  322 => 209,  314 => 99,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 143,  264 => 84,  258 => 187,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 83,  177 => 69,  169 => 118,  140 => 44,  132 => 51,  128 => 42,  107 => 46,  61 => 23,  273 => 145,  269 => 107,  254 => 92,  243 => 99,  240 => 86,  238 => 135,  235 => 89,  230 => 82,  227 => 86,  224 => 71,  221 => 80,  219 => 76,  217 => 129,  208 => 76,  204 => 75,  179 => 96,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 9,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 24,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 68,  142 => 125,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 81,  145 => 74,  139 => 66,  131 => 52,  123 => 61,  120 => 31,  115 => 34,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 9,  66 => 25,  55 => 15,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 127,  203 => 73,  199 => 93,  193 => 124,  189 => 66,  187 => 100,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 80,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 119,  116 => 57,  112 => 45,  109 => 52,  106 => 51,  103 => 40,  99 => 23,  95 => 39,  92 => 28,  86 => 28,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
