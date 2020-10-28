<?php

/* 
{% filter markdown %}

Hello {{ c.first_name }} {{ c.last_name }},

Recently a request was submitted to reset your password for the client area.
If you did not request this, please ignore this email. It will expire and will not work in 2 hours time.

To reset your password, please visit the url below:    
{{'client/reset-password-confirm'|link}}/{{ hash }}


When you visit the link above, your password will be reset and a new 
password will be emailed to you.

To login, visit {{'login'|link({'email' : c.email }) }}
Edit your profile at {{'client/me'|link}}

{{ guest.system_company.signature }}

{% endfilter %}
 */
class __TwigTemplate_1babb6581578454b07dde08500bc0b853bd218866789b2fb150d21b9028c11e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_cfa243ca0dd1f1068dd8142238613c6d0ea4d31a3aada6e2552b89492ae719e5' => array($this, 'block___internal_cfa243ca0dd1f1068dd8142238613c6d0ea4d31a3aada6e2552b89492ae719e5'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        echo twig_markdown_filter($this->env, (string) $this->renderBlock("__internal_cfa243ca0dd1f1068dd8142238613c6d0ea4d31a3aada6e2552b89492ae719e5", $context, $blocks));
    }

    public function block___internal_cfa243ca0dd1f1068dd8142238613c6d0ea4d31a3aada6e2552b89492ae719e5($context, array $blocks = array())
    {
        // line 3
        echo "
Hello ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "last_name"), "html", null, true);
        echo ",

Recently a request was submitted to reset your password for the client area.
If you did not request this, please ignore this email. It will expire and will not work in 2 hours time.

To reset your password, please visit the url below:    
";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/reset-password-confirm");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["hash"]) ? $context["hash"] : null), "html", null, true);
        echo "


When you visit the link above, your password will be reset and a new 
password will be emailed to you.

To login, visit ";
        // line 16
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login", array("email" => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "email")));
        echo "
Edit your profile at ";
        // line 17
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/me");
        echo "

";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "signature"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "
{% filter markdown %}

Hello {{ c.first_name }} {{ c.last_name }},

Recently a request was submitted to reset your password for the client area.
If you did not request this, please ignore this email. It will expire and will not work in 2 hours time.

To reset your password, please visit the url below:    
{{'client/reset-password-confirm'|link}}/{{ hash }}


When you visit the link above, your password will be reset and a new 
password will be emailed to you.

To login, visit {{'login'|link({'email' : c.email }) }}
Edit your profile at {{'client/me'|link}}

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
        return array (  84 => 19,  79 => 17,  75 => 16,  64 => 10,  53 => 4,  50 => 3,  44 => 2,  41 => 1,);
    }
}
