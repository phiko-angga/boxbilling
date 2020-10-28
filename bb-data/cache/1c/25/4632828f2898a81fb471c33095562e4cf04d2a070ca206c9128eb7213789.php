<?php

/* mod_invoice_settings.phtml */
class __TwigTemplate_1c254632828f2898a81fb471c33095562e4cf04d2a070ca206c9128eb7213789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Invoice settings");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo gettext("Invoice settings");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 18
        echo gettext("Invoice settings");
        echo "</h5>
    </div>

    ";
        // line 21
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_get_params");
        // line 22
        echo "    <form method=\"post\" action=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/system/update_params");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"Settings updated\">
        <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 25
        echo gettext("Number of days to generate new invoice before order expiration");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_issue_days_before_expire\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_issue_days_before_expire"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 33
        echo gettext("Invoice due days");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_due_days\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_due_days"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 41
        echo gettext("Auto invoice approval");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"invoice_auto_approval\" value=\"1\" ";
        // line 43
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_auto_approval") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"invoice_auto_approval\" value=\"0\" ";
        // line 44
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_auto_approval") == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        </fieldset>

        <fieldset>
            <legend>";
        // line 51
        echo gettext("Proforma Invoicing / Sequential Invoice Numbering");
        echo "</legend>

        <div class=\"rowElem\">
            <label>";
        // line 54
        echo gettext("Remove unpaid invoices after x days. Set 0 to keep invoices forever");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"remove_after_days\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "remove_after_days", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "remove_after_days"), 0)) : (0)), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 62
        echo gettext("Proforma invoice prefix/series");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_series\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_series"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 70
        echo gettext("Paid invoice prefix/series");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_series_paid\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_series_paid"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 78
        echo gettext("Next paid invoice number");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_starting_number\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_starting_number"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>
        </fieldset>

        <fieldset>
            <legend>";
        // line 87
        echo gettext("Refunds settings");
        echo "</legend>
        <div class=\"rowElem\">
            <label>";
        // line 89
        echo gettext("Refunds logic");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"invoice_refund_logic\" value=\"negative_invoice\" ";
        // line 91
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_refund_logic") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Negative invoice. Generate refund invoice continuing paid invoices numbering</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"invoice_refund_logic\" value=\"credit_note\" ";
        // line 93
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_refund_logic") == "credit_note")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Credit note. Generate credit note with unique numbering</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"invoice_refund_logic\" value=\"manual\" ";
        // line 95
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "invoice_refund_logic") == "manual")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Manual. No actions performed</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        </fieldset>

        <fieldset>
            <legend>";
        // line 102
        echo gettext("Add funds settings");
        echo "</legend>
        <div class=\"rowElem\">
            <label>";
        // line 104
        echo gettext("Minimum amount for add funds invoice");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"funds_min_amount\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "funds_min_amount"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Unlimited");
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 112
        echo gettext("Maximum amount for add funds invoice");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"funds_max_amount\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "funds_max_amount"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Unlimited");
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"";
        // line 119
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 119,  266 => 114,  261 => 112,  250 => 106,  245 => 104,  240 => 102,  228 => 95,  221 => 93,  214 => 91,  209 => 89,  204 => 87,  194 => 80,  189 => 78,  180 => 72,  175 => 70,  166 => 64,  161 => 62,  152 => 56,  147 => 54,  141 => 51,  127 => 44,  119 => 43,  114 => 41,  105 => 35,  100 => 33,  91 => 27,  86 => 25,  79 => 22,  77 => 21,  71 => 18,  66 => 15,  63 => 14,  56 => 10,  50 => 9,  44 => 8,  41 => 7,  38 => 6,  32 => 3,  27 => 4,  25 => 2,);
    }
}
