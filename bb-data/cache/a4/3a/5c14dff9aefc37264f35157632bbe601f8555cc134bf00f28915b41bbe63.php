<?php

/* mod_currency_settings.phtml */
class __TwigTemplate_a43a5c14dff9aefc37264f35157632bbe601f8555cc134bf00f28915b41bbe63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        // line 3
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Currency settings");
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
        echo gettext("Currency settings");
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-currencies\">";
        // line 20
        echo gettext("Currencies");
        echo "</a></li>
        <li><a href=\"#tab-new-currency\">";
        // line 21
        echo gettext("Add new currency");
        echo "</a></li>
        ";
        // line 23
        echo "    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-currencies\">

            <div class=\"help\">
                <h3>";
        // line 30
        echo gettext("Manage currencies");
        echo "</h3>
                <p>";
        // line 31
        echo gettext("Default currency is the one you manage all your prices in admin area. If your client in client area chooses other than default currency, prices will be recalculated according to conversion rate. You can have only one default currency. You can not add same currency once again. Changing default currency is not recommended when active orders are available. Nothing is recalculated on default currency change. Your income is calculated in default currency. Changing default currency after you have paid invoices will distort income statistics. Currency rates are taken from Yahoo.");
        echo "</p>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 37
        echo gettext("ISO code");
        echo "</th>
                        <th>";
        // line 38
        echo gettext("Title");
        echo "</th>
                        <th>";
        // line 39
        echo gettext("Conversion rate");
        echo "</th>
                        <th>";
        // line 40
        echo gettext("Example price");
        echo "</th>
                        <th style=\"width:17%\">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "currency_get_list"), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 47
            echo "                  <tr>
                      <td>";
            // line 48
            if ($this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "default")) {
                echo "<strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code"), "html", null, true);
                echo "</strong>";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code"), "html", null, true);
            }
            echo "</td>
                      <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "title"), "html", null, true);
            echo "</td>
                      <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "conversion_rate"), "html", null, true);
            echo "</td>
                      <td>";
            // line 51
            echo $context["mf"]->getcurrency_format(1);
            echo " = ";
            echo $context["mf"]->getcurrency(1, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code"));
            echo "</td>
                      <td class=\"actions\">
                          <a class=\"bb-button btn14\" href=\"";
            // line 53
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/currency/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                          <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-redirect=\"";
            // line 54
            echo twig_escape_filter($this->env, (((isset($context["extension"]) ? $context["extension"] : null) / (isset($context["settings"]) ? $context["settings"] : null)) / $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["currency"]) ? $context["currency"] : null))), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/currency/delete", array("code" => $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                          ";
            // line 55
            if ((!$this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "default"))) {
                // line 56
                echo "                          <a class=\"bb-button btn14 api-link\" data-api-redirect=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/currency");
                echo "\" href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/currency/set_default", array("code" => $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code")));
                echo "\" title=\"Set as default\" class=\"rightDir\"><img src=\"images/icons/dark/star.png\" alt=\"\"></a>
                          ";
            }
            // line 58
            echo "                      </td>
                  </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "                  <tr>
                      <td colspan=\"5\">
                          ";
            // line 63
            echo gettext("The list is empty");
            // line 64
            echo "                      </td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <div class=\"aligncenter\">
                                <a href=\"";
        // line 73
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/currency/update_rates");
        echo "\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/currency");
        echo "\" class=\"btn55 mr10 api-link\"><img src=\"images/icons/middlenav/refresh4.png\" alt=\"\"><span>";
        echo gettext("Update Rates");
        echo "</span></a>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-currency\">

            <form method=\"post\" action=\"";
        // line 83
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/currency/create");
        echo "\" class=\"mainForm save api-form\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/currency");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 86
        echo gettext("Code");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 88
        echo $context["mf"]->getselectbox("code", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "currency_get_pairs"), "USD", 1);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 93
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 100
        echo gettext("Conversion rate");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"conversion_rate\" value=\"1\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 107
        echo gettext("Format");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"format\" value=\"";
        // line 109
        echo "{{price}}";
        echo " \$\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 114
        echo gettext("Add");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>


        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-converter\">

            <form method=\"post\" action=\"\" class=\"mainForm\">
                <fieldset>
                    <div class=\"rowElem\">
                        <div class=\"moreFields\">
                            <ul>
                                <li style=\"width: 100px\"><input type=\"text\" name=\"amount\" value=\"\" required=\"required\" onkeyup=\"doConvert();\" placeholder=\"";
        // line 128
        echo gettext("Amount");
        echo "\"></li>
                                <li class=\"sep txt\">";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get"), "code"), "html", null, true);
        echo " = </li>
                                <li class=\"sep txt\"></li>
                                <li style=\"width: 100px\"><input type=\"text\" id=\"converted_result\" value=\"\" placeholder=\"";
        // line 131
        echo gettext("Result");
        echo "\" readonly=\"readonly\"></li>
                                <li class=\"sep txt\"></li>
                                <li style=\"width: 100px\">";
        // line 133
        echo $context["mf"]->getselectbox("to", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"));
        echo "</li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>

";
    }

    // line 147
    public function block_js($context, array $blocks = array())
    {
        // line 148
        echo "<script type=\"text/javascript\">
    function doConvert() {
        var price = \$('input[name=\"amount\"]').val();
        var code = \$('select[name=\"to\"]').val();
        bb.post('guest/currency/format', {price:price, code: code}, function(result){
            \$('#converted_result').val(result);
        });
        return false;
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_currency_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 148,  327 => 147,  310 => 133,  305 => 131,  300 => 129,  296 => 128,  279 => 114,  271 => 109,  266 => 107,  256 => 100,  246 => 93,  238 => 88,  233 => 86,  225 => 83,  208 => 73,  200 => 67,  192 => 64,  190 => 63,  186 => 61,  179 => 58,  171 => 56,  169 => 55,  163 => 54,  157 => 53,  150 => 51,  146 => 50,  142 => 49,  132 => 48,  129 => 47,  124 => 46,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  94 => 31,  90 => 30,  81 => 23,  77 => 21,  73 => 20,  67 => 16,  64 => 15,  57 => 10,  51 => 9,  45 => 8,  42 => 7,  39 => 6,  33 => 4,  28 => 3,  26 => 2,);
    }
}
