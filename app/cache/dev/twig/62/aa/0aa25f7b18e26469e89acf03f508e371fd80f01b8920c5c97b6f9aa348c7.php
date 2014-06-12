<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_62aa0aa25f7b18e26469e89acf03f508e371fd80f01b8920c5c97b6f9aa348c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 286,  20 => 1,  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  694 => 470,  690 => 469,  677 => 465,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  517 => 404,  202 => 94,  389 => 160,  386 => 159,  378 => 157,  331 => 140,  326 => 138,  321 => 135,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  288 => 118,  259 => 103,  253 => 100,  222 => 83,  184 => 63,  175 => 58,  170 => 84,  34 => 4,  403 => 136,  391 => 133,  382 => 131,  377 => 129,  359 => 123,  356 => 122,  350 => 327,  347 => 119,  333 => 115,  313 => 110,  308 => 287,  281 => 114,  234 => 90,  186 => 72,  161 => 58,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  546 => 423,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  293 => 120,  280 => 194,  276 => 111,  271 => 190,  251 => 182,  249 => 92,  188 => 90,  174 => 74,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 135,  394 => 134,  380 => 158,  373 => 156,  351 => 141,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 122,  300 => 121,  289 => 196,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  248 => 97,  207 => 76,  194 => 68,  191 => 67,  181 => 65,  178 => 59,  165 => 83,  160 => 110,  97 => 37,  367 => 339,  358 => 151,  265 => 105,  262 => 93,  239 => 120,  210 => 77,  205 => 109,  197 => 69,  192 => 105,  127 => 35,  110 => 38,  185 => 75,  180 => 70,  148 => 76,  134 => 39,  114 => 36,  555 => 326,  551 => 424,  547 => 324,  539 => 322,  521 => 307,  499 => 303,  493 => 302,  485 => 300,  463 => 298,  438 => 275,  425 => 265,  390 => 233,  357 => 202,  348 => 140,  345 => 147,  343 => 146,  318 => 177,  311 => 171,  297 => 200,  274 => 110,  213 => 78,  100 => 36,  90 => 27,  153 => 77,  150 => 55,  65 => 17,  237 => 91,  152 => 46,  126 => 51,  118 => 49,  113 => 40,  124 => 47,  84 => 25,  76 => 28,  58 => 15,  383 => 249,  375 => 247,  371 => 156,  366 => 245,  363 => 153,  353 => 328,  330 => 220,  324 => 112,  263 => 157,  232 => 88,  226 => 84,  215 => 124,  200 => 72,  155 => 47,  146 => 65,  260 => 131,  256 => 96,  244 => 127,  233 => 87,  216 => 79,  190 => 105,  172 => 57,  167 => 71,  104 => 31,  81 => 24,  70 => 19,  23 => 3,  909 => 580,  905 => 579,  901 => 550,  897 => 549,  892 => 548,  889 => 547,  831 => 493,  827 => 492,  823 => 490,  789 => 457,  779 => 453,  770 => 507,  766 => 451,  715 => 402,  706 => 473,  689 => 385,  683 => 384,  679 => 466,  675 => 380,  672 => 379,  668 => 464,  664 => 463,  660 => 464,  656 => 375,  652 => 374,  648 => 373,  643 => 372,  638 => 371,  601 => 446,  592 => 333,  577 => 326,  569 => 323,  562 => 319,  557 => 317,  548 => 315,  542 => 421,  536 => 419,  498 => 276,  489 => 301,  472 => 266,  464 => 263,  452 => 257,  443 => 255,  431 => 189,  369 => 206,  361 => 152,  354 => 200,  349 => 197,  340 => 145,  334 => 141,  328 => 139,  282 => 148,  255 => 101,  245 => 134,  228 => 123,  223 => 115,  218 => 120,  137 => 60,  77 => 25,  53 => 11,  480 => 299,  474 => 161,  469 => 158,  461 => 155,  457 => 259,  453 => 199,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 216,  387 => 164,  384 => 213,  381 => 120,  379 => 248,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 329,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 187,  252 => 139,  247 => 138,  241 => 93,  229 => 87,  220 => 81,  214 => 112,  177 => 69,  169 => 112,  140 => 55,  132 => 70,  128 => 42,  107 => 37,  61 => 23,  273 => 144,  269 => 107,  254 => 128,  243 => 142,  240 => 86,  238 => 130,  235 => 89,  230 => 82,  227 => 86,  224 => 122,  221 => 80,  219 => 114,  217 => 75,  208 => 76,  204 => 75,  179 => 101,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 21,  59 => 13,  38 => 5,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 106,  142 => 62,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 29,  72 => 18,  69 => 26,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 109,  145 => 74,  139 => 45,  131 => 52,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 114,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 99,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 67,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 40,  99 => 23,  95 => 39,  92 => 31,  86 => 31,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
