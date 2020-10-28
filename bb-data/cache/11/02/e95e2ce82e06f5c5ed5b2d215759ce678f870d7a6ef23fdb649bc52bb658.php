<?php

/* 
{% filter markdown %}
Hi {{ staff.name }},

 *{{ c.first_name }} {{ c.last_name }}* has just signed up with {{ guest.system_company.name }}

Manage client at {{'client/manage'|alink}}/{{c.id}}

{{ guest.system_company.signature }}

{% endfilter %}
 */
class __TwigTemplate_1102e95e2ce82e06f5c5ed5b2d215759ce678f870d7a6ef23fdb649bc52bb658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_48877143fd35c2d5bb4a838376eedae6cbbfaf76aa01c7f70bbf5ce859e35428' => array($this, 'block___internal_48877143fd35c2d5bb4a838376eedae6cbbfaf76aa01c7f70bbf5ce859e35428'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        echo twig_markdown_filter($this->env, (string) $this->renderBlock("__internal_48877143fd35c2d5bb4a838376eedae6cbbfaf76aa01c7f70bbf5ce859e35428", $context, $blocks));
    }

    public function block___internal_48877143fd35c2d5bb4a838376eedae6cbbfaf76aa01c7f70bbf5ce859e35428($context, array $blocks = array())
    {
        // line 3
        echo "Hi ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "name"), "html", null, true);
        echo ",

 *";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "last_name"), "html", null, true);
        echo "* has just signed up with ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "name"), "html", null, true);
        echo "

Manage client at ";
        // line 7
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "id"), "html", null, true);
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "signature"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "
{% filter markdown %}
Hi {{ staff.name }},

 *{{ c.first_name }} {{ c.last_name }}* has just signed up with {{ guest.system_company.name }}

Manage client at {{'client/manage'|alink}}/{{c.id}}

{{ guest.system_company.signature }}

{% endfilter %}
";
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
