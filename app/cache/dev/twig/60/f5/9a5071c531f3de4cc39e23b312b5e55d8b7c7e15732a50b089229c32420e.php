<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_60f59a5071c531f3de4cc39e23b312b5e55d8b7c7e15732a50b089229c32420e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 286,  20 => 1,  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  517 => 404,  202 => 94,  389 => 160,  386 => 159,  367 => 339,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  331 => 140,  321 => 135,  302 => 125,  288 => 118,  265 => 105,  253 => 100,  222 => 83,  184 => 63,  175 => 58,  34 => 5,  391 => 133,  377 => 129,  359 => 123,  356 => 122,  353 => 328,  347 => 119,  324 => 112,  274 => 110,  180 => 70,  161 => 58,  155 => 47,  58 => 14,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  565 => 430,  559 => 427,  553 => 425,  534 => 418,  527 => 408,  514 => 415,  293 => 120,  280 => 194,  251 => 182,  174 => 74,  104 => 37,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  422 => 184,  415 => 180,  408 => 176,  394 => 134,  380 => 158,  373 => 156,  351 => 141,  348 => 140,  342 => 137,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  315 => 131,  289 => 196,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  248 => 97,  233 => 87,  213 => 78,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  84 => 27,  185 => 75,  181 => 65,  172 => 57,  97 => 37,  382 => 131,  378 => 157,  370 => 207,  290 => 119,  276 => 111,  234 => 90,  226 => 84,  165 => 83,  134 => 39,  110 => 38,  100 => 36,  330 => 193,  326 => 138,  317 => 190,  262 => 93,  257 => 141,  242 => 129,  231 => 121,  210 => 77,  192 => 93,  167 => 71,  616 => 440,  612 => 356,  608 => 355,  604 => 354,  600 => 353,  592 => 351,  574 => 431,  552 => 332,  546 => 423,  538 => 329,  533 => 328,  516 => 327,  491 => 304,  410 => 231,  401 => 135,  396 => 224,  371 => 156,  364 => 200,  350 => 327,  327 => 167,  307 => 128,  281 => 114,  271 => 190,  225 => 119,  205 => 100,  190 => 97,  188 => 90,  160 => 77,  124 => 50,  150 => 55,  65 => 17,  237 => 91,  232 => 88,  152 => 46,  146 => 65,  126 => 51,  118 => 49,  113 => 40,  494 => 305,  490 => 304,  486 => 303,  482 => 302,  478 => 294,  473 => 300,  470 => 299,  460 => 292,  448 => 283,  438 => 276,  432 => 273,  429 => 188,  412 => 259,  403 => 136,  400 => 251,  338 => 116,  333 => 115,  325 => 129,  313 => 110,  308 => 287,  303 => 122,  297 => 200,  277 => 151,  272 => 128,  266 => 148,  259 => 103,  244 => 128,  216 => 79,  195 => 94,  186 => 72,  178 => 59,  170 => 84,  300 => 121,  296 => 121,  292 => 162,  287 => 150,  284 => 149,  256 => 96,  249 => 92,  239 => 121,  212 => 111,  207 => 76,  153 => 77,  127 => 35,  114 => 36,  90 => 37,  76 => 28,  81 => 23,  70 => 26,  23 => 1,  906 => 552,  902 => 551,  898 => 550,  894 => 549,  889 => 548,  886 => 547,  868 => 533,  825 => 493,  821 => 492,  817 => 490,  783 => 457,  773 => 453,  764 => 505,  760 => 451,  709 => 402,  700 => 398,  683 => 385,  677 => 465,  673 => 382,  669 => 380,  666 => 379,  662 => 378,  658 => 377,  654 => 376,  650 => 375,  646 => 451,  642 => 449,  637 => 372,  632 => 371,  595 => 352,  586 => 333,  571 => 326,  563 => 429,  556 => 319,  551 => 424,  542 => 421,  536 => 419,  530 => 417,  492 => 276,  483 => 273,  464 => 263,  452 => 257,  443 => 262,  431 => 189,  369 => 206,  361 => 152,  354 => 199,  349 => 197,  340 => 145,  334 => 141,  328 => 139,  282 => 148,  255 => 101,  245 => 134,  228 => 129,  223 => 127,  218 => 110,  137 => 60,  77 => 25,  53 => 17,  480 => 162,  474 => 269,  469 => 158,  461 => 155,  457 => 259,  453 => 199,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 271,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 225,  393 => 216,  387 => 164,  384 => 213,  381 => 212,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 329,  341 => 117,  337 => 103,  322 => 191,  314 => 189,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 163,  285 => 100,  283 => 115,  278 => 106,  268 => 146,  264 => 84,  258 => 187,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 105,  177 => 69,  169 => 118,  140 => 55,  132 => 70,  128 => 42,  107 => 37,  61 => 23,  273 => 141,  269 => 107,  254 => 92,  243 => 88,  240 => 121,  238 => 130,  235 => 89,  230 => 117,  227 => 86,  224 => 71,  221 => 80,  219 => 113,  217 => 113,  208 => 76,  204 => 75,  179 => 69,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 21,  59 => 22,  38 => 7,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 9,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 67,  142 => 62,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 34,  62 => 16,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 29,  72 => 21,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 69,  145 => 74,  139 => 45,  131 => 58,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 15,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 123,  203 => 73,  199 => 93,  193 => 124,  189 => 66,  187 => 90,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 40,  99 => 23,  95 => 39,  92 => 31,  86 => 16,  82 => 26,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
