<?php

/* mod_client_settings.phtml */
class __TwigTemplate_3cbce82718be0d7c692ae1ef1e94eb58ae3e82d047f6419b19c8d06a246ad154 extends Twig_Template
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
        echo "Client settings";
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
        echo gettext("Client settings");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
";
        // line 16
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_client")), "method");
        // line 17
        echo "<form method=\"post\" action=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">

<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 22
        echo gettext("General");
        echo "</a></li>
        <li><a href=\"#tab-custom-fields\">";
        // line 23
        echo gettext("Custom Fields");
        echo "</a></li>
    </ul>
    
    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div id=\"tab-index\" class=\"tab_content nopadding\">

            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 32
        echo gettext("Allow new signups");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"allow_signup\" value=\"1\"";
        // line 34
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "allow_signup")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                        <input type=\"radio\" name=\"allow_signup\" value=\"0\"";
        // line 35
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "allow_signup"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 40
        echo gettext("Require email confirmation");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"require_email_confirmation\" value=\"1\"";
        // line 42
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "require_email_confirmation")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                        <input type=\"radio\" name=\"require_email_confirmation\" value=\"0\"";
        // line 43
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "require_email_confirmation"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                        <span class=\"formNote\">";
        // line 44
        echo gettext("After enabling this feature, all existing users will have to confirm their emails if it was not done before");
        echo ".</span>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
        // line 50
        echo gettext("Allow email change");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"allow_change_email\" value=\"1\"";
        // line 52
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "allow_change_email")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                        <input type=\"radio\" name=\"allow_change_email\" value=\"0\"";
        // line 53
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "allow_change_email"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
        // line 59
        echo gettext("Required fields");
        echo "</label>
                    <div class=\"formRight\">
                        <select multiple=\"multiple\" class=\"multiple\" title=\"";
        // line 61
        echo gettext("Select required fields");
        echo "\" name=\"required[]\">
                            <optgroup label=\"General\">
                            <option value=\"last_name\" ";
        // line 63
        if (twig_in_filter("last_name", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Last Name");
        echo "</option>
                            <option value=\"company\" ";
        // line 64
        if (twig_in_filter("company", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Company");
        echo "</option>
                            <option value=\"gender\" ";
        // line 65
        if (twig_in_filter("gender", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Gender");
        echo "</option>
                            <option value=\"birthday\" ";
        // line 66
        if (twig_in_filter("birthday", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Birthday");
        echo "</option>
                            </optgroup>

                            <optgroup label=\"Address\">
                            <option value=\"country\" ";
        // line 70
        if (twig_in_filter("country", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Country");
        echo "</option>
                            <option value=\"city\" ";
        // line 71
        if (twig_in_filter("city", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("City");
        echo "</option>
                            <option value=\"state\" ";
        // line 72
        if (twig_in_filter("state", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("State");
        echo "</option>
                            <option value=\"address_1\" ";
        // line 73
        if (twig_in_filter("address_1", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Address Line 1");
        echo "</option>
                            <option value=\"address_2\" ";
        // line 74
        if (twig_in_filter("address_2", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Address Line 2");
        echo "</option>
                            <option value=\"postcode\" ";
        // line 75
        if (twig_in_filter("last_name", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Post code");
        echo "</option>
                            <option value=\"phone\" ";
        // line 76
        if (twig_in_filter("phone", $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "required"))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Phone");
        echo "</option>
                            </optgroup>

                        </select>

                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"";
        // line 84
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
            
        </div>
        <div id=\"tab-custom-fields\" class=\"tab_content nopadding\">
                <fieldset>
                    ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 91
            echo "                    ";
            $context["field_name"] = ("custom_" . (isset($context["i"]) ? $context["i"] : null));
            // line 92
            echo "                    ";
            $context["custom_field"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "custom_fields"), (isset($context["field_name"]) ? $context["field_name"] : null));
            // line 93
            echo "                    <div class=\"rowElem noborder\">
                        <label>";
            // line 94
            if ((!twig_test_empty($this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "title")))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "title"), "html", null, true);
                echo " (";
                echo gettext("Custom_");
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo ") ";
            } else {
                echo gettext("Custom_");
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            }
            echo "</label>
                        <div class=\"formRight\">
                            <input type=\"checkbox\" name=\"custom_fields[";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true);
            echo "][active]\" value=\"1\"";
            if ($this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "active")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Active");
            echo "</label>
                            <input type=\"checkbox\" name=\"custom_fields[";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true);
            echo "][required]\" value=\"1\"";
            if ($this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "required")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Required");
            echo "</label>
                            <input type=\"text\" placeholder=\"Field title\" name=\"custom_fields[";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true);
            echo "][title]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field"]) ? $context["custom_field"] : null), "title"), "html", null, true);
            echo "\" style=\"width: 300px\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <hr/>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    <input type=\"submit\" value=\"";
        echo gettext("Update profile");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
        </div>
    </div>
</div>
    
    <input type=\"hidden\" name=\"ext\" value=\"mod_client\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "mod_client_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 104,  344 => 98,  334 => 97,  324 => 96,  309 => 94,  306 => 93,  303 => 92,  300 => 91,  296 => 90,  287 => 84,  272 => 76,  264 => 75,  256 => 74,  248 => 73,  240 => 72,  232 => 71,  224 => 70,  213 => 66,  205 => 65,  197 => 64,  189 => 63,  184 => 61,  179 => 59,  166 => 53,  158 => 52,  153 => 50,  144 => 44,  136 => 43,  128 => 42,  123 => 40,  111 => 35,  103 => 34,  98 => 32,  86 => 23,  82 => 22,  71 => 17,  69 => 16,  66 => 15,  63 => 14,  56 => 10,  50 => 9,  44 => 8,  41 => 7,  38 => 6,  32 => 3,  27 => 4,  25 => 2,);
    }
}
