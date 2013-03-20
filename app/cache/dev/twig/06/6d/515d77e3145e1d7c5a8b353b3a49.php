<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_066d515d77e3145e1d7c5a8b353b3a49 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  64 => 15,  55 => 14,  53 => 13,  42 => 10,  23 => 4,  104 => 24,  95 => 21,  88 => 19,  82 => 19,  78 => 17,  75 => 16,  71 => 14,  67 => 12,  40 => 7,  38 => 6,  31 => 4,  25 => 5,  22 => 3,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  135 => 50,  131 => 48,  129 => 47,  126 => 46,  117 => 44,  113 => 43,  103 => 36,  99 => 34,  94 => 31,  62 => 24,  59 => 23,  47 => 19,  39 => 9,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  46 => 14,  33 => 7,  24 => 3,  19 => 2,  44 => 11,  41 => 7,  30 => 4,  27 => 3,  147 => 45,  141 => 44,  138 => 43,  127 => 41,  123 => 40,  120 => 45,  116 => 37,  112 => 35,  109 => 34,  107 => 33,  101 => 30,  97 => 22,  93 => 28,  89 => 20,  85 => 26,  81 => 25,  77 => 28,  74 => 27,  70 => 26,  63 => 18,  61 => 17,  57 => 9,  52 => 14,  49 => 12,  45 => 12,  37 => 8,  34 => 11,  32 => 11,  29 => 5,  26 => 3,);
    }
}
