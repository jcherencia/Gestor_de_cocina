<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_6a806963af0e745df56ef5802aef11355884f62da13bff267c2964b4f8f19bb2 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  104 => 42,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  422 => 184,  415 => 180,  408 => 176,  394 => 168,  380 => 160,  373 => 156,  351 => 141,  348 => 140,  342 => 137,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  315 => 125,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  248 => 94,  233 => 87,  213 => 78,  200 => 72,  197 => 71,  194 => 70,  191 => 77,  84 => 24,  185 => 75,  181 => 65,  172 => 62,  97 => 37,  382 => 210,  378 => 209,  370 => 207,  290 => 136,  276 => 129,  234 => 119,  226 => 84,  165 => 60,  134 => 54,  110 => 42,  100 => 37,  330 => 193,  326 => 192,  317 => 190,  262 => 98,  257 => 141,  242 => 129,  231 => 121,  210 => 103,  192 => 93,  167 => 71,  616 => 357,  612 => 356,  608 => 355,  604 => 354,  600 => 353,  592 => 351,  574 => 336,  552 => 332,  546 => 331,  538 => 329,  533 => 328,  516 => 327,  491 => 304,  410 => 231,  401 => 172,  396 => 224,  371 => 206,  364 => 200,  350 => 188,  327 => 167,  307 => 157,  281 => 152,  271 => 149,  225 => 119,  205 => 100,  190 => 97,  188 => 76,  160 => 77,  124 => 50,  150 => 55,  65 => 16,  237 => 137,  232 => 136,  152 => 71,  146 => 65,  126 => 51,  118 => 49,  113 => 48,  494 => 305,  490 => 304,  486 => 303,  482 => 302,  478 => 294,  473 => 300,  470 => 299,  460 => 292,  448 => 283,  438 => 276,  432 => 273,  429 => 188,  412 => 259,  403 => 253,  400 => 251,  338 => 135,  333 => 189,  325 => 129,  313 => 160,  308 => 171,  303 => 122,  297 => 156,  277 => 151,  272 => 128,  266 => 148,  259 => 142,  244 => 128,  216 => 79,  195 => 94,  186 => 88,  178 => 64,  170 => 77,  300 => 121,  296 => 152,  292 => 162,  287 => 150,  284 => 149,  256 => 96,  249 => 134,  239 => 121,  212 => 111,  207 => 75,  153 => 69,  127 => 50,  114 => 42,  90 => 27,  76 => 31,  81 => 23,  70 => 19,  23 => 1,  906 => 552,  902 => 551,  898 => 550,  894 => 549,  889 => 548,  886 => 547,  868 => 533,  825 => 493,  821 => 492,  817 => 490,  783 => 457,  773 => 453,  764 => 452,  760 => 451,  709 => 402,  700 => 398,  683 => 385,  677 => 384,  673 => 382,  669 => 380,  666 => 379,  662 => 378,  658 => 377,  654 => 376,  650 => 375,  646 => 374,  642 => 373,  637 => 372,  632 => 371,  595 => 352,  586 => 333,  571 => 326,  563 => 323,  556 => 319,  551 => 317,  542 => 330,  536 => 313,  530 => 312,  492 => 276,  483 => 273,  464 => 263,  452 => 257,  443 => 262,  431 => 189,  369 => 206,  361 => 146,  354 => 199,  349 => 197,  340 => 195,  334 => 194,  328 => 192,  282 => 148,  255 => 136,  245 => 134,  228 => 129,  223 => 127,  218 => 110,  137 => 60,  77 => 23,  53 => 12,  480 => 162,  474 => 269,  469 => 158,  461 => 155,  457 => 259,  453 => 199,  444 => 149,  440 => 148,  437 => 253,  435 => 146,  430 => 144,  427 => 271,  423 => 142,  413 => 134,  409 => 132,  407 => 229,  402 => 130,  398 => 225,  393 => 216,  387 => 164,  384 => 213,  381 => 212,  379 => 119,  374 => 208,  368 => 112,  365 => 206,  362 => 205,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 191,  314 => 189,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 163,  285 => 153,  283 => 88,  278 => 106,  268 => 146,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 105,  177 => 120,  169 => 118,  140 => 55,  132 => 70,  128 => 49,  107 => 40,  61 => 13,  273 => 141,  269 => 127,  254 => 92,  243 => 88,  240 => 121,  238 => 130,  235 => 126,  230 => 117,  227 => 117,  224 => 71,  221 => 114,  219 => 113,  217 => 113,  208 => 110,  204 => 78,  179 => 69,  159 => 61,  143 => 56,  135 => 57,  119 => 40,  102 => 41,  71 => 22,  67 => 24,  63 => 15,  59 => 14,  38 => 6,  94 => 36,  89 => 30,  85 => 30,  75 => 20,  68 => 17,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 33,  88 => 30,  78 => 25,  46 => 13,  27 => 3,  44 => 21,  31 => 3,  28 => 3,  201 => 98,  196 => 95,  183 => 88,  171 => 73,  166 => 71,  163 => 115,  158 => 68,  156 => 58,  151 => 67,  142 => 62,  138 => 56,  136 => 56,  121 => 50,  117 => 46,  105 => 34,  91 => 32,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 23,  69 => 23,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 93,  157 => 69,  145 => 65,  139 => 45,  131 => 58,  123 => 42,  120 => 50,  115 => 43,  111 => 47,  108 => 39,  101 => 37,  98 => 36,  96 => 37,  83 => 33,  74 => 25,  66 => 8,  55 => 16,  52 => 21,  50 => 7,  43 => 12,  41 => 16,  35 => 6,  32 => 5,  29 => 5,  209 => 123,  203 => 73,  199 => 107,  193 => 124,  189 => 123,  187 => 90,  182 => 66,  176 => 63,  173 => 84,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 56,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 43,  109 => 40,  106 => 40,  103 => 40,  99 => 31,  95 => 32,  92 => 35,  86 => 16,  82 => 27,  80 => 32,  73 => 20,  64 => 23,  60 => 11,  57 => 10,  54 => 10,  51 => 5,  48 => 13,  45 => 10,  42 => 5,  39 => 15,  36 => 5,  33 => 4,  30 => 3,);
    }
}
