<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_25363b89e7036fb40ec5363b6c54ce9eeeca54f55fd0ea5759d42408c3cc1b6b extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 29,  75 => 28,  62 => 24,  50 => 15,  32 => 6,  26 => 3,  19 => 1,  256 => 102,  251 => 101,  248 => 100,  243 => 99,  236 => 95,  231 => 93,  225 => 91,  214 => 83,  205 => 77,  197 => 72,  192 => 69,  190 => 68,  186 => 66,  180 => 63,  171 => 58,  167 => 56,  163 => 54,  160 => 53,  157 => 52,  146 => 47,  142 => 45,  140 => 44,  134 => 42,  130 => 40,  126 => 38,  123 => 37,  121 => 36,  115 => 34,  111 => 32,  107 => 30,  105 => 29,  91 => 35,  88 => 16,  85 => 15,  78 => 10,  74 => 9,  70 => 26,  66 => 25,  61 => 6,  55 => 5,  48 => 105,  45 => 100,  40 => 15,  36 => 13,  34 => 6,  30 => 5,  24 => 2,  599 => 346,  595 => 345,  591 => 344,  587 => 343,  583 => 342,  578 => 341,  575 => 340,  557 => 325,  535 => 321,  529 => 320,  525 => 319,  521 => 318,  516 => 317,  499 => 316,  474 => 293,  461 => 283,  426 => 251,  419 => 246,  410 => 244,  406 => 243,  362 => 201,  359 => 199,  353 => 196,  350 => 195,  348 => 194,  333 => 182,  323 => 176,  316 => 170,  302 => 158,  279 => 137,  265 => 130,  259 => 127,  249 => 126,  237 => 123,  233 => 122,  229 => 121,  223 => 119,  218 => 118,  201 => 104,  194 => 99,  183 => 97,  179 => 96,  166 => 86,  155 => 78,  150 => 49,  144 => 72,  138 => 63,  129 => 57,  118 => 49,  112 => 45,  106 => 42,  103 => 41,  101 => 40,  86 => 28,  77 => 22,  73 => 21,  65 => 15,  63 => 14,  56 => 9,  53 => 8,  46 => 14,  42 => 12,  37 => 3,  31 => 2,);
    }
}
