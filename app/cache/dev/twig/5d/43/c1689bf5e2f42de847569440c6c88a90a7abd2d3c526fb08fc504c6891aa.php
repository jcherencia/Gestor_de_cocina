<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_5d43c1689bf5e2f42de847569440c6c88a90a7abd2d3c526fb08fc504c6891aa extends Twig_Template
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
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\">
        Search
    </h3>
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")) == (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"text\" name=\"start\" id=\"start\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"text\" name=\"end\" id=\"end\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                <option";
            echo ((((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")) == (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  517 => 404,  202 => 94,  389 => 160,  386 => 159,  367 => 155,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  331 => 140,  321 => 135,  302 => 125,  288 => 118,  265 => 105,  253 => 100,  222 => 83,  184 => 63,  175 => 58,  34 => 5,  391 => 133,  377 => 129,  359 => 123,  356 => 122,  353 => 149,  347 => 119,  324 => 112,  274 => 110,  180 => 70,  161 => 58,  155 => 47,  58 => 18,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  565 => 430,  559 => 427,  553 => 425,  534 => 418,  527 => 408,  514 => 415,  293 => 120,  280 => 194,  251 => 182,  174 => 74,  104 => 31,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  422 => 184,  415 => 180,  408 => 176,  394 => 134,  380 => 158,  373 => 156,  351 => 141,  348 => 140,  342 => 137,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  315 => 131,  289 => 196,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  248 => 97,  233 => 87,  213 => 78,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  84 => 27,  185 => 75,  181 => 65,  172 => 57,  97 => 37,  382 => 131,  378 => 157,  370 => 207,  290 => 119,  276 => 111,  234 => 90,  226 => 84,  165 => 83,  134 => 39,  110 => 42,  100 => 37,  330 => 193,  326 => 138,  317 => 190,  262 => 93,  257 => 141,  242 => 129,  231 => 121,  210 => 77,  192 => 93,  167 => 71,  616 => 440,  612 => 356,  608 => 355,  604 => 354,  600 => 353,  592 => 351,  574 => 431,  552 => 332,  546 => 423,  538 => 329,  533 => 328,  516 => 327,  491 => 304,  410 => 231,  401 => 135,  396 => 224,  371 => 156,  364 => 200,  350 => 120,  327 => 167,  307 => 128,  281 => 114,  271 => 190,  225 => 119,  205 => 100,  190 => 97,  188 => 90,  160 => 77,  124 => 50,  150 => 55,  65 => 11,  237 => 91,  232 => 88,  152 => 46,  146 => 65,  126 => 51,  118 => 49,  113 => 48,  494 => 305,  490 => 304,  486 => 303,  482 => 302,  478 => 294,  473 => 300,  470 => 299,  460 => 292,  448 => 283,  438 => 276,  432 => 273,  429 => 188,  412 => 259,  403 => 136,  400 => 251,  338 => 116,  333 => 115,  325 => 129,  313 => 110,  308 => 109,  303 => 122,  297 => 200,  277 => 151,  272 => 128,  266 => 148,  259 => 103,  244 => 128,  216 => 79,  195 => 94,  186 => 72,  178 => 59,  170 => 84,  300 => 121,  296 => 121,  292 => 162,  287 => 150,  284 => 149,  256 => 96,  249 => 92,  239 => 121,  212 => 111,  207 => 76,  153 => 77,  127 => 35,  114 => 36,  90 => 42,  76 => 27,  81 => 23,  70 => 24,  23 => 1,  906 => 552,  902 => 551,  898 => 550,  894 => 549,  889 => 548,  886 => 547,  868 => 533,  825 => 493,  821 => 492,  817 => 490,  783 => 457,  773 => 453,  764 => 505,  760 => 451,  709 => 402,  700 => 398,  683 => 385,  677 => 465,  673 => 382,  669 => 380,  666 => 379,  662 => 378,  658 => 377,  654 => 376,  650 => 375,  646 => 451,  642 => 449,  637 => 372,  632 => 371,  595 => 352,  586 => 333,  571 => 326,  563 => 429,  556 => 319,  551 => 424,  542 => 421,  536 => 419,  530 => 417,  492 => 276,  483 => 273,  464 => 263,  452 => 257,  443 => 262,  431 => 189,  369 => 206,  361 => 152,  354 => 199,  349 => 197,  340 => 145,  334 => 141,  328 => 139,  282 => 148,  255 => 101,  245 => 134,  228 => 129,  223 => 127,  218 => 110,  137 => 60,  77 => 20,  53 => 15,  480 => 162,  474 => 269,  469 => 158,  461 => 155,  457 => 259,  453 => 199,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 271,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 225,  393 => 216,  387 => 164,  384 => 213,  381 => 212,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 150,  341 => 117,  337 => 103,  322 => 191,  314 => 189,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 163,  285 => 100,  283 => 115,  278 => 106,  268 => 146,  264 => 84,  258 => 187,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 105,  177 => 69,  169 => 118,  140 => 55,  132 => 70,  128 => 42,  107 => 40,  61 => 12,  273 => 141,  269 => 107,  254 => 92,  243 => 88,  240 => 121,  238 => 130,  235 => 89,  230 => 117,  227 => 86,  224 => 71,  221 => 80,  219 => 113,  217 => 113,  208 => 76,  204 => 75,  179 => 69,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 9,  87 => 32,  21 => 2,  26 => 6,  93 => 27,  88 => 24,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 67,  142 => 62,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 69,  145 => 74,  139 => 45,  131 => 58,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 33,  101 => 30,  98 => 34,  96 => 30,  83 => 31,  74 => 25,  66 => 8,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 123,  203 => 73,  199 => 93,  193 => 124,  189 => 66,  187 => 90,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 57,  112 => 43,  109 => 52,  106 => 51,  103 => 40,  99 => 23,  95 => 34,  92 => 28,  86 => 16,  82 => 19,  80 => 27,  73 => 33,  64 => 21,  60 => 11,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 13,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
