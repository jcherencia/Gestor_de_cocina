<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6ec3f875ebca1e24a19aeb8cf40a612665d8a581938cd82be6a8f5469d3c63c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 76,  174 => 74,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  248 => 94,  213 => 78,  194 => 70,  191 => 77,  181 => 65,  178 => 64,  90 => 27,  160 => 100,  129 => 75,  367 => 206,  358 => 204,  265 => 126,  262 => 98,  239 => 120,  210 => 111,  205 => 109,  197 => 71,  192 => 105,  127 => 62,  110 => 44,  185 => 75,  180 => 96,  148 => 76,  134 => 54,  497 => 295,  493 => 294,  488 => 293,  485 => 292,  467 => 277,  445 => 273,  439 => 195,  426 => 269,  336 => 203,  301 => 171,  280 => 154,  257 => 133,  211 => 118,  207 => 75,  170 => 94,  165 => 60,  114 => 54,  153 => 69,  150 => 55,  65 => 26,  237 => 123,  152 => 67,  126 => 51,  118 => 49,  113 => 48,  124 => 47,  84 => 24,  76 => 25,  58 => 24,  383 => 249,  375 => 247,  371 => 207,  366 => 245,  363 => 205,  353 => 237,  330 => 220,  324 => 216,  263 => 157,  232 => 136,  226 => 84,  215 => 119,  200 => 72,  155 => 85,  146 => 79,  260 => 141,  256 => 96,  244 => 137,  233 => 87,  216 => 79,  190 => 105,  172 => 62,  167 => 71,  104 => 42,  81 => 23,  70 => 19,  23 => 1,  909 => 552,  905 => 551,  901 => 550,  897 => 549,  892 => 548,  889 => 547,  831 => 493,  827 => 492,  823 => 490,  789 => 457,  779 => 453,  770 => 452,  766 => 451,  715 => 402,  706 => 398,  689 => 385,  683 => 384,  679 => 382,  675 => 380,  672 => 379,  668 => 378,  664 => 377,  660 => 376,  656 => 375,  652 => 374,  648 => 373,  643 => 372,  638 => 371,  601 => 336,  592 => 333,  577 => 326,  569 => 323,  562 => 319,  557 => 317,  548 => 315,  542 => 313,  536 => 312,  498 => 276,  489 => 273,  472 => 266,  464 => 263,  452 => 257,  443 => 255,  431 => 189,  369 => 206,  361 => 146,  354 => 199,  349 => 197,  340 => 195,  334 => 193,  328 => 192,  282 => 148,  255 => 123,  245 => 134,  228 => 129,  223 => 115,  218 => 125,  137 => 60,  77 => 26,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 259,  453 => 199,  444 => 149,  440 => 148,  437 => 253,  435 => 271,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 268,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 164,  384 => 245,  381 => 120,  379 => 248,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 228,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 166,  285 => 89,  283 => 134,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 139,  247 => 138,  241 => 90,  229 => 85,  220 => 81,  214 => 112,  177 => 95,  169 => 102,  140 => 55,  132 => 70,  128 => 67,  107 => 40,  61 => 17,  273 => 144,  269 => 127,  254 => 92,  243 => 126,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 117,  224 => 71,  221 => 77,  219 => 114,  217 => 75,  208 => 68,  204 => 78,  179 => 100,  159 => 92,  143 => 56,  135 => 71,  119 => 40,  102 => 41,  71 => 22,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 40,  89 => 31,  85 => 25,  75 => 26,  68 => 17,  56 => 24,  87 => 34,  21 => 2,  26 => 6,  93 => 35,  88 => 32,  78 => 21,  46 => 13,  27 => 3,  44 => 21,  31 => 4,  28 => 3,  201 => 108,  196 => 114,  183 => 82,  171 => 73,  166 => 71,  163 => 93,  158 => 74,  156 => 58,  151 => 63,  142 => 62,  138 => 56,  136 => 56,  121 => 50,  117 => 45,  105 => 34,  91 => 33,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 27,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 93,  157 => 99,  145 => 46,  139 => 45,  131 => 52,  123 => 42,  120 => 58,  115 => 43,  111 => 47,  108 => 36,  101 => 37,  98 => 36,  96 => 37,  83 => 33,  74 => 30,  66 => 24,  55 => 13,  52 => 12,  50 => 8,  43 => 12,  41 => 16,  35 => 6,  32 => 5,  29 => 5,  209 => 114,  203 => 73,  199 => 109,  193 => 73,  189 => 98,  187 => 105,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 67,  147 => 54,  144 => 65,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 53,  109 => 34,  106 => 38,  103 => 40,  99 => 31,  95 => 42,  92 => 32,  86 => 31,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 22,  57 => 6,  54 => 18,  51 => 22,  48 => 13,  45 => 9,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
