<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_198af773b30d485e50c7263de7fae41514eedeba0170a6e9b29775c0148cf12e extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  62 => 24,  50 => 15,  32 => 6,  26 => 3,  19 => 1,  260 => 103,  256 => 102,  251 => 101,  243 => 99,  236 => 95,  231 => 93,  225 => 91,  214 => 83,  205 => 77,  197 => 72,  192 => 69,  190 => 68,  186 => 66,  180 => 63,  171 => 58,  163 => 54,  160 => 53,  157 => 52,  150 => 49,  146 => 47,  142 => 45,  140 => 44,  126 => 38,  123 => 37,  115 => 34,  111 => 32,  107 => 30,  105 => 29,  91 => 35,  88 => 16,  85 => 15,  78 => 10,  74 => 9,  70 => 26,  66 => 25,  61 => 6,  55 => 5,  48 => 106,  45 => 100,  40 => 15,  36 => 13,  34 => 6,  30 => 5,  24 => 2,  470 => 250,  466 => 249,  461 => 247,  457 => 246,  453 => 245,  449 => 244,  444 => 243,  441 => 242,  423 => 230,  400 => 212,  343 => 157,  330 => 150,  325 => 149,  321 => 147,  317 => 146,  314 => 145,  307 => 143,  291 => 140,  285 => 139,  280 => 137,  276 => 136,  272 => 135,  265 => 133,  261 => 132,  257 => 131,  252 => 129,  248 => 100,  244 => 126,  240 => 125,  216 => 103,  203 => 89,  189 => 82,  185 => 81,  181 => 80,  177 => 79,  174 => 78,  167 => 56,  151 => 73,  145 => 72,  139 => 70,  134 => 42,  130 => 40,  125 => 59,  121 => 36,  116 => 56,  112 => 55,  108 => 53,  103 => 52,  79 => 29,  64 => 15,  57 => 10,  54 => 9,  46 => 14,  42 => 12,  37 => 3,  31 => 2,);
    }
}
