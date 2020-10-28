<?php

/* [{{ guest.system_company.name }}] Welcome {{ c.first_name }} */
class __TwigTemplate_6f2cbf4dce2868d78962dd5f558782dc39932b94eff5d94a74b4c0b25bd5bc11 extends Twig_Template
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
        echo "] Welcome ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "first_name"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "[{{ guest.system_company.name }}] Welcome {{ c.first_name }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  98 => 22,  93 => 20,  89 => 19,  86 => 18,  80 => 15,  75 => 12,  73 => 11,  68 => 9,  64 => 8,  53 => 3,  47 => 2,  44 => 1,);
    }
}
