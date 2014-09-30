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
        return array (  83 => 30,  79 => 29,  75 => 28,  62 => 24,  50 => 15,  32 => 6,  26 => 3,  19 => 1,  256 => 102,  251 => 101,  248 => 100,  243 => 99,  236 => 95,  231 => 93,  225 => 91,  214 => 83,  205 => 77,  197 => 72,  192 => 69,  190 => 68,  186 => 66,  180 => 63,  171 => 58,  167 => 56,  163 => 54,  160 => 53,  157 => 52,  146 => 47,  142 => 45,  140 => 44,  134 => 42,  130 => 40,  126 => 38,  123 => 37,  121 => 36,  115 => 34,  111 => 32,  107 => 30,  105 => 29,  91 => 35,  88 => 16,  85 => 15,  78 => 10,  74 => 9,  70 => 26,  66 => 25,  61 => 6,  55 => 5,  48 => 105,  45 => 100,  40 => 15,  36 => 13,  34 => 6,  30 => 5,  24 => 2,  599 => 346,  595 => 345,  591 => 344,  587 => 343,  583 => 342,  578 => 341,  575 => 340,  557 => 325,  535 => 321,  529 => 320,  525 => 319,  521 => 318,  516 => 317,  499 => 316,  474 => 293,  461 => 283,  426 => 251,  419 => 246,  410 => 244,  406 => 243,  362 => 201,  359 => 199,  353 => 196,  350 => 195,  348 => 194,  333 => 182,  323 => 176,  316 => 170,  302 => 158,  279 => 137,  265 => 130,  259 => 127,  249 => 126,  237 => 123,  233 => 122,  229 => 121,  223 => 119,  218 => 118,  201 => 104,  194 => 99,  183 => 97,  179 => 96,  166 => 86,  155 => 78,  150 => 49,  144 => 72,  138 => 63,  129 => 57,  118 => 49,  112 => 45,  106 => 42,  103 => 41,  101 => 40,  86 => 28,  77 => 22,  73 => 21,  65 => 15,  63 => 14,  56 => 9,  53 => 8,  46 => 14,  42 => 12,  37 => 3,  31 => 2,);
    }
}
