<?php

/* [{{ guest.system_company.name }}] New Client Signed Up */
class __TwigTemplate_13018c8f888668bbf731367ca3388a34f7170ff213bf1fa07771c375c4aae775 extends Twig_Template
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
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "name"), "html", null, true);
        echo "] New Client Signed Up";
    }

    public function getTemplateName()
    {
        return "[{{ guest.system_company.name }}] New Client Signed Up";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  55 => 7,  46 => 5,  40 => 3,  34 => 2,  31 => 1,  19 => 1,  98 => 22,  93 => 20,  89 => 19,  86 => 18,  80 => 15,  75 => 12,  73 => 11,  68 => 9,  64 => 8,  53 => 3,  47 => 2,  44 => 1,);
    }
}
