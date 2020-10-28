<?php

/* 
{% filter markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below.


Email: {{c.email}}    
Password: {{password}}

{% if require_email_confirmation %}

Approve your email by clicking on the link below:

{{email_confirmation_link}}

{% endif %}

To login, visit {{'login'|link({'email' : c.email }) }}
Edit your profile at {{'client/me'|link}}

{{ guest.system_company.signature }}

{% endfilter %}
 */
class __TwigTemplate_12206dffff8f0cf9bddf0216894b6cfbc30e0ca816127d542319e9e81f4d819c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_4dd42a27ce85405400bd5141a86c867a204e47d145a703a73a67e7a08f8d079b' => array($this, 'block___internal_4dd42a27ce85405400bd5141a86c867a204e47d145a703a73a67e7a08f8d079b'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        echo twig_markdown_filter($this->env, (string) $this->renderBlock("__internal_4dd42a27ce85405400bd5141a86c867a204e47d145a703a73a67e7a08f8d079b", $context, $blocks));
    }

    public function block___internal_4dd42a27ce85405400bd5141a86c867a204e47d145a703a73a67e7a08f8d079b($context, array $blocks = array())
    {
        // line 3
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "last_name"), "html", null, true);
        echo ",

Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below.


Email: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "email"), "html", null, true);
        echo "    
Password: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
        echo "

";
        // line 11
        if ((isset($context["require_email_confirmation"]) ? $context["require_email_confirmation"] : null)) {
            // line 12
            echo "
Approve your email by clicking on the link below:

";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["email_confirmation_link"]) ? $context["email_confirmation_link"] : null), "html", null, true);
            echo "

";
        }
        // line 18
        echo "
To login, visit ";
        // line 19
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login", array("email" => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "email")));
        echo "
Edit your profile at ";
        // line 20
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/me");
        echo "

";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "signature"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "
{% filter markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below.


Email: {{c.email}}    
Password: {{password}}

{% if require_email_confirmation %}

Approve your email by clicking on the link below:

{{email_confirmation_link}}

{% endif %}

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
        return array (  98 => 22,  93 => 20,  89 => 19,  86 => 18,  80 => 15,  75 => 12,  73 => 11,  68 => 9,  64 => 8,  53 => 3,  47 => 2,  44 => 1,);
    }
}
