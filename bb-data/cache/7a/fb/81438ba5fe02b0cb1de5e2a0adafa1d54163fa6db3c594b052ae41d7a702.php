<?php

/* [{{ guest.system_company.name }}] Confirm Password Reset */
class __TwigTemplate_7afb81438ba5fe02b0cb1de5e2a0adafa1d54163fa6db3c594b052ae41d7a702 extends Twig_Template
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
        echo "] Confirm Password Reset";
    }

    public function getTemplateName()
    {
        return "[{{ guest.system_company.name }}] Confirm Password Reset";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  84 => 19,  79 => 17,  75 => 16,  64 => 10,  53 => 4,  50 => 3,  44 => 2,  41 => 1,);
    }
}
