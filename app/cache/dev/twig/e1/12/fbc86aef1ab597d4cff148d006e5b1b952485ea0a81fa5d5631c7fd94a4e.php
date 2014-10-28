<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_e112fbc86aef1ab597d4cff148d006e5b1b952485ea0a81fa5d5631c7fd94a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  749 => 479,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  517 => 404,  202 => 94,  386 => 159,  378 => 157,  363 => 153,  358 => 151,  340 => 145,  334 => 141,  331 => 140,  296 => 121,  290 => 119,  288 => 118,  259 => 103,  253 => 100,  222 => 83,  175 => 58,  127 => 35,  391 => 133,  382 => 131,  359 => 123,  356 => 122,  353 => 149,  350 => 120,  347 => 119,  313 => 110,  281 => 114,  274 => 110,  237 => 91,  234 => 90,  232 => 88,  155 => 47,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  844 => 546,  836 => 543,  830 => 539,  828 => 538,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  591 => 436,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  104 => 31,  462 => 202,  446 => 197,  439 => 195,  429 => 188,  415 => 180,  408 => 176,  401 => 135,  394 => 134,  380 => 158,  351 => 141,  348 => 140,  342 => 137,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  300 => 121,  289 => 196,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 93,  226 => 84,  207 => 76,  200 => 72,  194 => 68,  153 => 77,  84 => 27,  58 => 25,  20 => 1,  212 => 128,  152 => 46,  137 => 67,  113 => 48,  470 => 250,  466 => 249,  449 => 198,  441 => 196,  400 => 212,  330 => 150,  326 => 138,  321 => 135,  276 => 111,  272 => 135,  265 => 105,  257 => 131,  216 => 79,  185 => 75,  174 => 74,  315 => 131,  311 => 167,  303 => 122,  299 => 164,  280 => 194,  263 => 138,  244 => 126,  218 => 113,  210 => 77,  181 => 65,  124 => 54,  611 => 351,  603 => 439,  599 => 348,  595 => 347,  590 => 346,  587 => 434,  569 => 330,  547 => 326,  537 => 324,  533 => 323,  528 => 322,  511 => 321,  486 => 298,  473 => 288,  438 => 256,  431 => 189,  422 => 184,  418 => 248,  371 => 156,  345 => 147,  335 => 134,  328 => 139,  291 => 140,  271 => 190,  261 => 132,  245 => 127,  213 => 78,  206 => 104,  178 => 59,  118 => 49,  184 => 63,  389 => 160,  377 => 129,  373 => 156,  343 => 146,  338 => 116,  333 => 115,  327 => 211,  324 => 112,  302 => 125,  295 => 189,  233 => 87,  228 => 127,  198 => 118,  172 => 57,  161 => 58,  90 => 42,  81 => 23,  65 => 11,  195 => 102,  191 => 67,  316 => 189,  307 => 128,  304 => 186,  287 => 175,  282 => 172,  165 => 83,  129 => 58,  114 => 36,  100 => 38,  76 => 34,  97 => 37,  77 => 20,  260 => 103,  256 => 96,  251 => 182,  248 => 97,  236 => 95,  231 => 93,  225 => 131,  205 => 77,  192 => 102,  190 => 68,  186 => 72,  180 => 70,  167 => 71,  146 => 47,  134 => 39,  70 => 15,  34 => 5,  1058 => 603,  1054 => 602,  1050 => 601,  1046 => 600,  1042 => 599,  1038 => 598,  1033 => 597,  1030 => 596,  1012 => 582,  980 => 553,  962 => 538,  958 => 537,  954 => 535,  920 => 502,  910 => 498,  901 => 497,  897 => 496,  858 => 459,  856 => 458,  854 => 552,  852 => 456,  850 => 455,  848 => 548,  838 => 544,  833 => 441,  824 => 537,  813 => 431,  809 => 430,  803 => 427,  798 => 426,  793 => 425,  779 => 414,  775 => 485,  771 => 412,  767 => 411,  751 => 397,  748 => 391,  746 => 478,  744 => 389,  742 => 492,  740 => 491,  738 => 386,  736 => 385,  731 => 381,  722 => 377,  716 => 375,  711 => 372,  709 => 369,  703 => 368,  699 => 366,  691 => 363,  688 => 362,  684 => 360,  676 => 467,  673 => 356,  669 => 355,  665 => 353,  662 => 352,  656 => 351,  652 => 349,  648 => 347,  644 => 345,  641 => 344,  637 => 343,  633 => 342,  629 => 454,  625 => 453,  621 => 339,  617 => 338,  612 => 337,  607 => 350,  602 => 333,  598 => 331,  596 => 330,  559 => 427,  550 => 292,  541 => 325,  534 => 418,  531 => 281,  521 => 276,  513 => 273,  505 => 270,  502 => 269,  500 => 268,  493 => 266,  489 => 265,  484 => 263,  471 => 261,  465 => 259,  459 => 258,  421 => 222,  412 => 219,  403 => 136,  385 => 242,  376 => 203,  367 => 155,  361 => 152,  317 => 146,  308 => 109,  293 => 120,  277 => 135,  255 => 101,  249 => 92,  197 => 69,  188 => 90,  170 => 84,  160 => 76,  150 => 55,  126 => 59,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 247,  457 => 246,  453 => 199,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 230,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 209,  387 => 164,  384 => 121,  381 => 241,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 199,  355 => 150,  341 => 117,  337 => 103,  322 => 209,  314 => 145,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 163,  285 => 100,  283 => 115,  278 => 106,  268 => 143,  264 => 84,  258 => 187,  252 => 129,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 112,  177 => 69,  169 => 118,  140 => 44,  132 => 59,  128 => 42,  107 => 46,  61 => 12,  273 => 145,  269 => 107,  254 => 92,  243 => 99,  240 => 125,  238 => 135,  235 => 89,  230 => 116,  227 => 86,  224 => 71,  221 => 80,  219 => 76,  217 => 129,  208 => 76,  204 => 75,  179 => 87,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 18,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 9,  87 => 41,  21 => 2,  26 => 6,  93 => 27,  88 => 24,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 73,  142 => 45,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 7,  37 => 7,  22 => 2,  246 => 136,  157 => 81,  145 => 74,  139 => 70,  131 => 52,  123 => 61,  120 => 31,  115 => 54,  111 => 47,  108 => 33,  101 => 30,  98 => 45,  96 => 30,  83 => 33,  74 => 9,  66 => 7,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 127,  203 => 73,  199 => 93,  193 => 124,  189 => 66,  187 => 100,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 80,  149 => 71,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 56,  116 => 57,  112 => 55,  109 => 52,  106 => 51,  103 => 40,  99 => 23,  95 => 34,  92 => 28,  86 => 28,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 11,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
