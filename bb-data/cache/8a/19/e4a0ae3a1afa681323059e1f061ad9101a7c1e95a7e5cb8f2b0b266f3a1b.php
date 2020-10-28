<?php

/* mod_orderbutton_currency.phtml */
class __TwigTemplate_8a19e4a0ae3a1afa681323059e1f061ad9101a7c1e95a7e5cb8f2b0b266f3a1b extends Twig_Template
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
        $context["currencies"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs");
        // line 2
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 3
            echo "        <select name=\"currency\" class=\"currency_selector input-mini pull-right\">
            ";
            // line 4
            $context["selected"] = $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get_currency"), "code");
            // line 5
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["title"]) {
                // line 6
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\" class=\"currency_";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\"";
                if (((isset($context["code"]) ? $context["code"] : null) == (isset($context["selected"]) ? $context["selected"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </select>
";
        }
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_currency.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  33 => 6,  28 => 5,  26 => 4,  23 => 3,  595 => 227,  589 => 224,  577 => 215,  570 => 210,  555 => 199,  549 => 197,  547 => 196,  543 => 194,  539 => 192,  525 => 191,  517 => 188,  509 => 187,  504 => 186,  501 => 185,  484 => 184,  481 => 183,  478 => 182,  476 => 181,  465 => 174,  463 => 173,  459 => 172,  456 => 171,  450 => 168,  444 => 167,  441 => 166,  438 => 165,  435 => 164,  432 => 163,  430 => 162,  427 => 161,  421 => 158,  417 => 157,  411 => 154,  407 => 153,  404 => 152,  402 => 151,  394 => 145,  389 => 134,  383 => 132,  375 => 130,  373 => 129,  363 => 128,  354 => 124,  351 => 123,  345 => 121,  343 => 120,  336 => 115,  329 => 113,  326 => 112,  324 => 111,  321 => 110,  317 => 108,  311 => 106,  306 => 104,  301 => 103,  299 => 102,  292 => 100,  289 => 99,  287 => 98,  284 => 97,  273 => 90,  267 => 89,  261 => 88,  258 => 87,  254 => 85,  248 => 83,  245 => 82,  239 => 81,  233 => 79,  230 => 78,  225 => 77,  222 => 76,  216 => 75,  210 => 74,  204 => 72,  201 => 71,  196 => 70,  191 => 69,  189 => 68,  183 => 65,  180 => 64,  177 => 63,  174 => 62,  169 => 61,  165 => 60,  161 => 58,  156 => 56,  154 => 55,  148 => 52,  140 => 49,  137 => 48,  113 => 39,  110 => 38,  107 => 37,  105 => 36,  101 => 34,  95 => 32,  93 => 31,  84 => 28,  82 => 27,  74 => 24,  67 => 22,  59 => 17,  55 => 16,  43 => 10,  37 => 8,  171 => 53,  163 => 48,  159 => 57,  153 => 44,  144 => 41,  141 => 40,  136 => 38,  131 => 46,  128 => 36,  112 => 30,  106 => 28,  100 => 26,  96 => 24,  90 => 30,  78 => 26,  75 => 20,  71 => 23,  68 => 18,  63 => 16,  58 => 14,  54 => 13,  40 => 9,  32 => 6,  30 => 6,  21 => 2,  62 => 14,  51 => 12,  48 => 10,  44 => 9,  36 => 6,  24 => 3,  22 => 2,  290 => 179,  278 => 93,  253 => 148,  236 => 138,  232 => 137,  213 => 121,  186 => 97,  170 => 84,  164 => 80,  158 => 77,  155 => 45,  152 => 75,  150 => 53,  138 => 39,  132 => 61,  130 => 60,  127 => 59,  124 => 42,  121 => 34,  119 => 41,  116 => 40,  114 => 54,  111 => 53,  109 => 52,  104 => 49,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 11,  45 => 12,  38 => 8,  34 => 7,  29 => 4,  27 => 4,  25 => 4,  19 => 1,);
    }
}
