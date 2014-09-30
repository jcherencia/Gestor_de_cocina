<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_b017b81ab391988cadfd82c234aa1559f2d57f9c19ab9ed3d203034b1e07504b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1056 => 293,  1053 => 292,  1029 => 282,  1027 => 281,  1014 => 272,  1012 => 271,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  950 => 250,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  825 => 196,  817 => 192,  814 => 191,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  769 => 171,  767 => 170,  756 => 165,  753 => 164,  751 => 163,  729 => 155,  721 => 153,  715 => 151,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  683 => 135,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  555 => 95,  550 => 94,  547 => 93,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  414 => 52,  405 => 49,  400 => 47,  390 => 43,  388 => 42,  366 => 33,  344 => 24,  332 => 20,  311 => 14,  299 => 8,  260 => 363,  250 => 341,  215 => 280,  124 => 132,  110 => 38,  306 => 286,  792 => 488,  775 => 485,  746 => 161,  727 => 476,  706 => 473,  694 => 138,  690 => 469,  679 => 466,  660 => 464,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  522 => 406,  517 => 404,  202 => 266,  386 => 159,  378 => 157,  363 => 32,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  321 => 135,  296 => 121,  290 => 5,  288 => 4,  253 => 342,  222 => 297,  184 => 233,  175 => 58,  127 => 35,  391 => 133,  382 => 131,  371 => 35,  356 => 122,  347 => 119,  328 => 139,  313 => 15,  281 => 409,  274 => 110,  234 => 90,  232 => 88,  210 => 270,  1077 => 305,  1073 => 656,  1069 => 654,  1064 => 298,  1055 => 648,  1051 => 291,  1048 => 290,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 266,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 257,  967 => 256,  963 => 604,  959 => 602,  955 => 252,  947 => 249,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 236,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 212,  854 => 552,  848 => 548,  830 => 198,  828 => 197,  815 => 531,  812 => 190,  807 => 491,  800 => 523,  796 => 183,  790 => 519,  788 => 486,  780 => 176,  770 => 507,  764 => 169,  762 => 504,  754 => 499,  742 => 492,  740 => 491,  724 => 154,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 140,  686 => 468,  682 => 467,  678 => 133,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  640 => 119,  636 => 446,  628 => 444,  616 => 440,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  546 => 423,  536 => 419,  530 => 417,  527 => 91,  514 => 415,  297 => 200,  280 => 194,  276 => 393,  174 => 217,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 50,  401 => 135,  394 => 134,  380 => 158,  351 => 141,  342 => 23,  335 => 21,  329 => 131,  325 => 129,  320 => 127,  315 => 131,  303 => 122,  300 => 121,  289 => 196,  286 => 112,  270 => 102,  267 => 101,  262 => 93,  226 => 84,  216 => 79,  213 => 78,  207 => 269,  200 => 72,  178 => 59,  153 => 77,  84 => 41,  58 => 15,  20 => 1,  185 => 75,  181 => 232,  212 => 279,  152 => 46,  137 => 67,  275 => 105,  271 => 374,  266 => 366,  263 => 365,  245 => 335,  113 => 40,  104 => 90,  595 => 345,  591 => 436,  587 => 434,  583 => 342,  578 => 432,  575 => 340,  557 => 96,  535 => 321,  529 => 92,  525 => 319,  516 => 317,  499 => 316,  426 => 58,  419 => 246,  410 => 244,  406 => 243,  359 => 123,  353 => 328,  350 => 26,  348 => 140,  323 => 128,  279 => 212,  265 => 105,  259 => 103,  237 => 91,  223 => 119,  218 => 118,  194 => 248,  155 => 47,  118 => 49,  389 => 160,  377 => 37,  373 => 156,  343 => 146,  338 => 116,  333 => 115,  327 => 211,  324 => 112,  302 => 125,  295 => 189,  233 => 304,  228 => 127,  198 => 118,  172 => 57,  161 => 202,  90 => 27,  81 => 40,  65 => 17,  195 => 91,  191 => 246,  316 => 16,  307 => 128,  304 => 186,  287 => 175,  282 => 172,  165 => 83,  129 => 148,  114 => 111,  100 => 36,  76 => 31,  97 => 37,  77 => 25,  256 => 96,  251 => 182,  248 => 336,  236 => 95,  231 => 93,  225 => 298,  205 => 77,  192 => 102,  190 => 68,  186 => 239,  180 => 70,  167 => 71,  146 => 181,  134 => 161,  70 => 19,  34 => 4,  1044 => 645,  1040 => 285,  1036 => 284,  1032 => 283,  1028 => 607,  1024 => 280,  1019 => 605,  1016 => 276,  998 => 590,  966 => 561,  948 => 546,  944 => 545,  940 => 543,  906 => 510,  896 => 573,  887 => 505,  883 => 504,  844 => 204,  842 => 466,  840 => 465,  838 => 544,  836 => 543,  834 => 462,  824 => 537,  819 => 449,  810 => 492,  799 => 439,  795 => 438,  789 => 435,  784 => 434,  779 => 433,  774 => 509,  752 => 402,  749 => 162,  747 => 395,  745 => 493,  743 => 393,  741 => 392,  739 => 156,  737 => 490,  732 => 487,  723 => 382,  717 => 380,  712 => 150,  710 => 149,  704 => 373,  700 => 371,  692 => 474,  689 => 137,  685 => 365,  677 => 465,  674 => 361,  670 => 360,  666 => 126,  663 => 357,  657 => 356,  653 => 354,  649 => 122,  645 => 350,  642 => 449,  638 => 118,  634 => 456,  630 => 346,  626 => 443,  622 => 452,  618 => 343,  613 => 342,  608 => 341,  603 => 439,  599 => 346,  597 => 335,  560 => 300,  551 => 424,  542 => 421,  539 => 292,  534 => 418,  531 => 281,  521 => 318,  513 => 273,  505 => 270,  502 => 269,  500 => 268,  493 => 78,  489 => 265,  484 => 263,  471 => 261,  465 => 259,  459 => 69,  421 => 222,  412 => 219,  403 => 48,  385 => 41,  376 => 203,  367 => 339,  361 => 152,  317 => 162,  308 => 13,  293 => 6,  277 => 146,  255 => 353,  249 => 92,  197 => 249,  188 => 90,  170 => 84,  160 => 53,  150 => 55,  126 => 147,  53 => 11,  480 => 75,  474 => 293,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 209,  387 => 164,  384 => 121,  381 => 241,  379 => 119,  374 => 36,  368 => 34,  365 => 125,  362 => 124,  360 => 109,  355 => 27,  341 => 117,  337 => 22,  322 => 209,  314 => 99,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 3,  283 => 115,  278 => 408,  268 => 373,  264 => 84,  258 => 354,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 290,  214 => 83,  177 => 69,  169 => 210,  140 => 44,  132 => 51,  128 => 42,  107 => 37,  61 => 2,  273 => 392,  269 => 107,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 80,  219 => 76,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 56,  135 => 46,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 125,  138 => 47,  136 => 168,  121 => 131,  117 => 37,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 32,  72 => 21,  69 => 13,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 81,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 127,  203 => 73,  199 => 265,  193 => 124,  189 => 240,  187 => 100,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 45,  130 => 46,  125 => 41,  122 => 119,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 40,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
