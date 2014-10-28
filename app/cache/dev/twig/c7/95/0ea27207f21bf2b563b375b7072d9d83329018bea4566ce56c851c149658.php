<?php

/* RecetasBundle:Security:login.html.twig */
class __TwigTemplate_c7950ea27207f21bf2b563b375b7072d9d83329018bea4566ce56c851c149658 extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo " 
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Usuario:</label>
    <input id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
    <label for=\"password\">Contraseña:</label>
    <input id=\"password\" type=\"password\" name=\"_password\" /> <input type=\"submit\" name=\"login\" />
</form>";
    }

    public function getTemplateName()
    {
        return "RecetasBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 250,  466 => 249,  449 => 244,  441 => 242,  400 => 212,  330 => 150,  326 => 149,  321 => 147,  276 => 136,  272 => 135,  265 => 133,  257 => 131,  216 => 103,  185 => 81,  174 => 78,  315 => 168,  311 => 167,  303 => 165,  299 => 164,  280 => 137,  263 => 138,  244 => 126,  218 => 113,  210 => 111,  181 => 80,  124 => 54,  611 => 351,  603 => 349,  599 => 348,  595 => 347,  590 => 346,  587 => 345,  569 => 330,  547 => 326,  537 => 324,  533 => 323,  528 => 322,  511 => 321,  486 => 298,  473 => 288,  438 => 256,  431 => 251,  422 => 249,  418 => 248,  371 => 204,  345 => 187,  335 => 181,  328 => 175,  291 => 140,  271 => 132,  261 => 132,  245 => 127,  213 => 109,  206 => 104,  178 => 91,  118 => 49,  184 => 82,  389 => 243,  377 => 240,  373 => 239,  343 => 157,  338 => 218,  333 => 214,  327 => 211,  324 => 210,  302 => 194,  295 => 189,  233 => 130,  228 => 127,  198 => 105,  172 => 86,  161 => 80,  90 => 34,  81 => 28,  65 => 15,  195 => 102,  191 => 101,  316 => 189,  307 => 143,  304 => 186,  287 => 175,  282 => 172,  165 => 76,  129 => 58,  114 => 51,  100 => 46,  76 => 29,  97 => 41,  77 => 22,  260 => 103,  256 => 102,  251 => 101,  248 => 128,  236 => 95,  231 => 93,  225 => 133,  205 => 77,  192 => 102,  190 => 68,  186 => 66,  180 => 80,  167 => 76,  146 => 47,  134 => 62,  70 => 23,  34 => 6,  1058 => 603,  1054 => 602,  1050 => 601,  1046 => 600,  1042 => 599,  1038 => 598,  1033 => 597,  1030 => 596,  1012 => 582,  980 => 553,  962 => 538,  958 => 537,  954 => 535,  920 => 502,  910 => 498,  901 => 497,  897 => 496,  858 => 459,  856 => 458,  854 => 457,  852 => 456,  850 => 455,  848 => 454,  838 => 445,  833 => 441,  824 => 437,  813 => 431,  809 => 430,  803 => 427,  798 => 426,  793 => 425,  779 => 414,  775 => 413,  771 => 412,  767 => 411,  751 => 397,  748 => 391,  746 => 390,  744 => 389,  742 => 388,  740 => 387,  738 => 386,  736 => 385,  731 => 381,  722 => 377,  716 => 375,  711 => 372,  709 => 369,  703 => 368,  699 => 366,  691 => 363,  688 => 362,  684 => 360,  676 => 357,  673 => 356,  669 => 355,  665 => 353,  662 => 352,  656 => 351,  652 => 349,  648 => 347,  644 => 345,  641 => 344,  637 => 343,  633 => 342,  629 => 341,  625 => 340,  621 => 339,  617 => 338,  612 => 337,  607 => 350,  602 => 333,  598 => 331,  596 => 330,  559 => 295,  550 => 292,  541 => 325,  534 => 283,  531 => 281,  521 => 276,  513 => 273,  505 => 270,  502 => 269,  500 => 268,  493 => 266,  489 => 265,  484 => 263,  471 => 261,  465 => 259,  459 => 258,  421 => 222,  412 => 219,  403 => 215,  385 => 242,  376 => 203,  367 => 201,  361 => 199,  317 => 146,  308 => 159,  293 => 152,  277 => 135,  255 => 141,  249 => 128,  197 => 72,  188 => 90,  170 => 83,  160 => 76,  150 => 68,  126 => 38,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 247,  457 => 246,  453 => 245,  444 => 243,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 230,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 209,  387 => 122,  384 => 121,  381 => 241,  379 => 119,  374 => 206,  368 => 238,  365 => 201,  362 => 200,  360 => 199,  355 => 230,  341 => 105,  337 => 103,  322 => 209,  314 => 145,  312 => 188,  309 => 97,  305 => 95,  298 => 191,  294 => 163,  285 => 139,  283 => 88,  278 => 86,  268 => 143,  264 => 84,  258 => 81,  252 => 129,  247 => 78,  241 => 126,  229 => 134,  220 => 121,  214 => 112,  177 => 79,  169 => 60,  140 => 44,  132 => 59,  128 => 55,  107 => 46,  61 => 6,  273 => 145,  269 => 94,  254 => 92,  243 => 99,  240 => 125,  238 => 135,  235 => 124,  230 => 116,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 94,  204 => 109,  179 => 87,  159 => 91,  143 => 56,  135 => 60,  119 => 52,  102 => 45,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 42,  89 => 30,  85 => 34,  75 => 17,  68 => 17,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 16,  78 => 25,  46 => 5,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  201 => 92,  196 => 91,  183 => 82,  171 => 78,  166 => 71,  163 => 54,  158 => 67,  156 => 77,  151 => 73,  142 => 45,  138 => 76,  136 => 56,  121 => 58,  117 => 44,  105 => 47,  91 => 17,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 30,  72 => 22,  69 => 25,  47 => 7,  40 => 15,  37 => 3,  22 => 2,  246 => 90,  157 => 52,  145 => 72,  139 => 70,  131 => 52,  123 => 37,  120 => 40,  115 => 54,  111 => 47,  108 => 53,  101 => 39,  98 => 43,  96 => 31,  83 => 25,  74 => 9,  66 => 7,  55 => 5,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 89,  199 => 108,  193 => 73,  189 => 82,  187 => 100,  182 => 88,  176 => 86,  173 => 65,  168 => 93,  164 => 92,  162 => 79,  154 => 75,  149 => 71,  147 => 58,  144 => 64,  141 => 48,  133 => 55,  130 => 61,  125 => 59,  122 => 56,  116 => 56,  112 => 55,  109 => 53,  106 => 42,  103 => 52,  99 => 31,  95 => 36,  92 => 35,  86 => 28,  82 => 22,  80 => 19,  73 => 21,  64 => 15,  60 => 6,  57 => 10,  54 => 9,  51 => 14,  48 => 106,  45 => 100,  42 => 4,  39 => 9,  36 => 13,  33 => 4,  30 => 5,);
    }
}
