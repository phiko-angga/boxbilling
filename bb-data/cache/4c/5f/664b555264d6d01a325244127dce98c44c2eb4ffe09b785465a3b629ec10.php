<?php

/* mod_orderbutton_checkout.phtml */
class __TwigTemplate_4c5f664b555264d6d01a325244127dce98c44c2eb4ffe09b785465a3b629ec10 extends Twig_Template
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
        $context["cart"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get");
        // line 2
        echo "<div class=\"accordion-group\">
    <div class=\"accordion-heading\">
        <a class=\"accordion-toggle\" href=\"#checkout\" data-parent=\"#accordion1\" data-toggle=\"collapse\"><span class=\"awe-shopping-cart\"></span> ";
        // line 4
        echo gettext("Cart");
        echo " <span class=\"label label-warning pull-right\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items")), "html", null, true);
        echo "</span></a>
    </div>
    ";
        // line 6
        if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items")) {
            // line 7
            echo "\t\t";
            $context["cart"] = twig_array_merge((isset($context["cart"]) ? $context["cart"] : null), array("total" => 0));
            // line 8
            echo "\t\t";
            $context["temp_total_discount"] = 0;
            // line 9
            echo "\t\t";
            $context["temp_cart_total"] = 0;
            // line 10
            echo "    <div id=\"checkout\" class=\"accordion-body collapse ";
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "checkout") && (isset($context["client"]) ? $context["client"] : null))) {
                echo "in";
            }
            echo "\">
        <div class=\"accordion-inner\" id=\"checkout-inner\">

            <table class=\"table table-striped table-bordered table-condensed\">
                <thead>
                <tr>
                    <th>";
            // line 16
            echo gettext("Product");
            echo "</th>
                    <th>";
            // line 17
            echo gettext("Price");
            echo "</th>
                    <th style=\"width: 3%; text-align: center\"></th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 23
                echo "\t\t\t\t\t";
                $context["temp_cart_total"] = ((isset($context["temp_cart_total"]) ? $context["temp_cart_total"] : null) + ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity")));
                // line 24
                echo "                <tr>
                    <td>
                        ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "
                        ";
                // line 27
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity") > 1)) {
                    // line 28
                    echo "                        x ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"), "html", null, true);
                    echo "
                        ";
                }
                // line 30
                echo "
                        ";
                // line 31
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "period")) {
                    // line 32
                    echo "                            (";
                    echo twig_period_title($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "period"));
                    echo ")
                        ";
                }
                // line 34
                echo "                    </td>
                    <td>
                        ";
                // line 36
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_price")) {
                    // line 37
                    echo "\t\t\t\t\t\t";
                    $context["temp_discount"] = ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"));
                    // line 38
                    echo "\t\t\t\t\t\t\t";
                    $context["temp_total_discount"] = ((isset($context["temp_total_discount"]) ? $context["temp_total_discount"] : null) + (isset($context["temp_discount"]) ? $context["temp_discount"] : null));
                    // line 39
                    echo "\t\t\t\t\t\t\t";
                    $context["item"] = twig_array_merge((isset($context["item"]) ? $context["item"] : null), array("discount_price" => (isset($context["temp_discount"]) ? $context["temp_discount"] : null)));
                    // line 40
                    echo "\t\t\t\t\t\t\t\t";
                    $context["cart"] = twig_array_merge((isset($context["cart"]) ? $context["cart"] : null), array("discount" => (isset($context["temp_discount"]) ? $context["temp_discount"] : null)));
                    // line 41
                    echo "                            <del>";
                    echo twig_money_convert($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity")));
                    echo "</del>
                            <strong class=\"text-success\">";
                    // line 42
                    echo twig_money_convert($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity")) - $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_price")));
                    echo "</strong>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
                        ";
                } else {
                    // line 46
                    echo "                            ";
                    echo twig_money_convert($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </td>
                    <td><button data-cart-item-id=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "\" class=\"btn btn-inverse btn-mini remove-cart-item\" title=\"";
                echo gettext("Remove item");
                echo "\"><strong><i class=\"awe-remove\"></i></strong></button></td>
                </tr>

                ";
                // line 52
                if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_custom_form_values")) {
                    // line 53
                    echo "                <tr>
                    <td>
                        ";
                    // line 55
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "form_id") && $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "formbuilder")), "method"))) {
                        // line 56
                        echo "                        ";
                        $context["form"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "formbuilder_get", array(0 => array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "form_id"))), "method");
                        // line 57
                        echo "                        ";
                        // line 58
                        echo "                        <div class=\"well\">
                            <dl class=\"dl-horizontal\">
                                ";
                        // line 60
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["item"]) ? $context["item"] : null));
                        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                            // line 61
                            echo "                                    ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields"));
                            foreach ($context['_seq'] as $context["_key"] => $context["form_field"]) {
                                // line 62
                                echo "                                        ";
                                if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                                    // line 63
                                    echo "                                            ";
                                    if (($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "name") == (isset($context["field"]) ? $context["field"] : null))) {
                                        // line 64
                                        echo "                                            <dt>
                                                ";
                                        // line 65
                                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "label"), "html", null, true);
                                        echo "
                                            </dt>
                                            <dd>
                                                ";
                                        // line 68
                                        if (($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "type") == "checkbox")) {
                                            // line 69
                                            echo "                                                    ";
                                            $context['_parent'] = (array) $context;
                                            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
                                            foreach ($context['_seq'] as $context["_key"] => $context["selection"]) {
                                                // line 70
                                                echo "                                                        ";
                                                $context['_parent'] = (array) $context;
                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "options"));
                                                foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                    // line 71
                                                    echo "                                                            ";
                                                    if (((isset($context["field_value"]) ? $context["field_value"] : null) == (isset($context["selection"]) ? $context["selection"] : null))) {
                                                        // line 72
                                                        echo "                                                                ";
                                                        echo twig_escape_filter($this->env, (isset($context["field_key"]) ? $context["field_key"] : null), "html", null, true);
                                                        echo "
                                                            ";
                                                    }
                                                    // line 74
                                                    echo "                                                        ";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 75
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selection'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 76
                                            echo "                                                ";
                                        } elseif ((($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "type") == "select") || ($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "type") == "radio"))) {
                                            // line 77
                                            echo "                                                    ";
                                            $context['_parent'] = (array) $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "options"));
                                            foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                // line 78
                                                echo "                                                        ";
                                                if (((isset($context["field_value"]) ? $context["field_value"] : null) == (isset($context["value"]) ? $context["value"] : null))) {
                                                    // line 79
                                                    echo "                                                            ";
                                                    echo twig_escape_filter($this->env, (isset($context["field_key"]) ? $context["field_key"] : null), "html", null, true);
                                                    echo "
                                                        ";
                                                }
                                                // line 81
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 82
                                            echo "                                                ";
                                        } else {
                                            // line 83
                                            echo "                                                    ";
                                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                                            echo "
                                                ";
                                        }
                                        // line 85
                                        echo "                                            </dd>
                                            ";
                                    }
                                    // line 87
                                    echo "                                        ";
                                }
                                // line 88
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 89
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 90
                        echo "                            </dl>
                        </div>
                        ";
                    }
                    // line 93
                    echo "                    </td>
                    <td></td>
                </tr>
                ";
                }
                // line 97
                echo "
                ";
                // line 98
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price") != 0)) {
                    // line 99
                    echo "                <tr>
                    <td>";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                    echo " ";
                    echo gettext("setup");
                    echo "</td>
                    <td>
                        ";
                    // line 102
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_setup")) {
                        // line 103
                        echo "                        <del>";
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price"));
                        echo "</del>
                        ";
                        // line 104
                        echo twig_money_convert($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price") - $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_setup")));
                        echo "
                        ";
                    } else {
                        // line 106
                        echo "                        ";
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price"));
                        echo "</td>
                    ";
                    }
                    // line 108
                    echo "                </tr>
                ";
                }
                // line 110
                echo "\t\t\t
\t\t\t";
                // line 111
                $context["cart"] = twig_array_merge((isset($context["cart"]) ? $context["cart"] : null), array("total" => (isset($context["temp_cart_total"]) ? $context["temp_cart_total"] : null)));
                // line 112
                echo "\t\t\t";
                $context["cart"] = twig_array_merge((isset($context["cart"]) ? $context["cart"] : null), array("discount" => (isset($context["temp_total_discount"]) ? $context["temp_total_discount"] : null)));
                // line 113
                echo "\t\t\t\t
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                </tbody>
            </table>

            <div class=\"row-fluid\">
                <div class=\"span6\">
                    ";
            // line 120
            if ((!$this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))) {
                // line 121
                echo "                    <a href=\"#\" id=\"show-promo-field\">";
                echo gettext("Have coupon code?");
                echo "</a>
                    ";
            }
            // line 123
            echo "
                    <form action=\"guest/cart/apply_promo\" method=\"post\" class=\"well\" id=\"apply-promo\" data-api-reload=\"1\" ";
            // line 124
            if ((!$this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))) {
                echo "style=\"display:none\"";
            }
            echo ">
                        <div class=\"control-group\">
                            <div class=\"form-controls\">
                                <div class=\"input-append\">
                                    <input class=\"span8\" type=\"text\" name=\"promocode\" id=\"promocode\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "promocode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "promocode"), $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))) : ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "required")) {
                echo "required=\"required\"";
            }
            echo " placeholder=\"";
            echo gettext("Enter code");
            echo "\">
                                    ";
            // line 129
            if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode")) {
                // line 130
                echo "                                    <button class=\"btn\" id=\"remove-promo\" href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/guest/cart/remove_promo");
                echo "\" type=\"button\" data-api-reload=\"1\">";
                echo gettext("Remove");
                echo "</button>
                                    ";
            } else {
                // line 132
                echo "                                    <button class=\"btn\" type=\"submit\">";
                echo gettext("Apply");
                echo "</button>
                                    ";
            }
            // line 134
            echo "                                </div>
                            </div>
                        </div>
                        ";
            // line 145
            echo "                    </form>
                </div>

                <div class=\"span6\">
                    <table class=\"table table-bordered table-striped\">

                        ";
            // line 151
            if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "discount") > 0)) {
                // line 152
                echo "                        <tr>
                            <td><strong>";
                // line 153
                echo gettext("Subtotal:");
                echo "</strong></td>
                            <td><strong>";
                // line 154
                echo twig_money_convert($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total"));
                echo "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>";
                // line 157
                echo gettext("Discount:");
                echo "</strong></td>
                            <td><strong>- ";
                // line 158
                echo twig_money_convert($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "discount"));
                echo "</strong></td>
                        </tr>
                        ";
            }
            // line 161
            echo "
                        ";
            // line 162
            $context["tax_amount"] = 0;
            // line 163
            echo "                        ";
            if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_is_taxable")) {
                // line 164
                echo "                        ";
                $context["tax_rate"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_tax_rate");
                // line 165
                echo "                        ";
                $context["tax_amount"] = (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total") * (isset($context["tax_rate"]) ? $context["tax_rate"] : null)) / 100);
                // line 166
                echo "                        <tr>
                            <td><strong>";
                // line 167
                echo gettext("VAT");
                echo " (";
                echo twig_escape_filter($this->env, (isset($context["tax_rate"]) ? $context["tax_rate"] : null), "html", null, true);
                echo "%) :</strong></td>
                            <td><strong>";
                // line 168
                echo twig_money_convert($this->env, (isset($context["tax_amount"]) ? $context["tax_amount"] : null));
                echo "</strong></td>
                        </tr>
                        ";
            }
            // line 171
            echo "                        <tr>
                            <td><strong>";
            // line 172
            echo gettext("Total:");
            echo "</strong></td>
\t\t\t\t\t\t\t";
            // line 173
            $context["cart"] = twig_array_merge((isset($context["cart"]) ? $context["cart"] : null), array("total" => ((isset($context["temp_cart_total"]) ? $context["temp_cart_total"] : null) - (isset($context["temp_total_discount"]) ? $context["temp_total_discount"] : null))));
            // line 174
            echo "                            <td><strong>";
            echo twig_money_convert($this->env, ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total") + (isset($context["tax_amount"]) ? $context["tax_amount"] : null)));
            echo "</strong></td>
                        </tr>

                    </table>

                    <form method=\"post\" action=\"client/cart/checkout\" class=\"form-horizontal\" id=\"checkout-form\" onsubmit=\"return false;\">
                        <fieldset>
                            ";
            // line 181
            $context["enough_in_balance"] = ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_balance_get_total") >= $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total"));
            // line 182
            echo "                            ";
            if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total") && (!(isset($context["enough_in_balance"]) ? $context["enough_in_balance"] : null)))) {
                // line 183
                echo "                            <div class=\"control-group\">
                                ";
                // line 184
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "invoice_gateways"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                    // line 185
                    echo "                                ";
                    if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "currency"), "code"), $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "accepted_currencies"))) {
                        // line 186
                        echo "                                <label class=\"radio\" for=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                        echo "\">
                                    <input type=\"radio\" name=\"gateway_id\" id=";
                        // line 187
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                        echo "\" ";
                        echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) ? ("checked") : (""));
                        echo "/>
                                    ";
                        // line 188
                        echo gettext("Pay by");
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "title"), "html", null, true);
                        echo "
                                </label>
                                ";
                    }
                    // line 191
                    echo "                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "                            </div>
                            ";
            }
            // line 194
            echo "                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    ";
            // line 196
            if ((isset($context["enough_in_balance"]) ? $context["enough_in_balance"] : null)) {
                // line 197
                echo "                                        <p>";
                echo gettext("Total amount will be deducted from account balance");
                echo "</p>
                                    ";
            }
            // line 199
            echo "                                    <button class=\"btn btn-primary btn-large\" type=\"submit\">";
            echo gettext("Checkout");
            echo "</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 210
        echo "</div>
<script type=\"text/javascript\">
    \$('#remove-promo').click(function(e){
        e.preventDefault();
        bb.post(\"guest/cart/remove_promo\", {}, function(r){
                bb.msg(\"";
        // line 215
        echo gettext("Promo code was removed");
        echo "\");
                location.reload(false);
        });

    });

    \$('.remove-cart-item').click(function(e){
        e.preventDefault();
        var btn = \$(this);
        if (confirm('";
        // line 224
        echo gettext("Are you sure you want to remove this item from cart?");
        echo "')){
            var item_id = \$(btn).attr('data-cart-item-id');
            bb.post(\"guest/cart/remove_item\", {id: item_id}, function(r){
                bb.msg(\"";
        // line 227
        echo gettext("Item was removed from cart");
        echo "\");
                location.reload(false);
            });
        }


    });
</script>";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_checkout.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 227,  589 => 224,  577 => 215,  570 => 210,  555 => 199,  549 => 197,  547 => 196,  543 => 194,  539 => 192,  525 => 191,  517 => 188,  509 => 187,  504 => 186,  501 => 185,  484 => 184,  481 => 183,  478 => 182,  476 => 181,  465 => 174,  463 => 173,  459 => 172,  456 => 171,  450 => 168,  444 => 167,  441 => 166,  438 => 165,  435 => 164,  432 => 163,  430 => 162,  427 => 161,  421 => 158,  417 => 157,  411 => 154,  407 => 153,  404 => 152,  402 => 151,  394 => 145,  389 => 134,  383 => 132,  375 => 130,  373 => 129,  363 => 128,  354 => 124,  351 => 123,  345 => 121,  343 => 120,  336 => 115,  329 => 113,  326 => 112,  324 => 111,  321 => 110,  317 => 108,  311 => 106,  306 => 104,  301 => 103,  299 => 102,  292 => 100,  289 => 99,  287 => 98,  284 => 97,  273 => 90,  267 => 89,  261 => 88,  258 => 87,  254 => 85,  248 => 83,  245 => 82,  239 => 81,  233 => 79,  230 => 78,  225 => 77,  222 => 76,  216 => 75,  210 => 74,  204 => 72,  201 => 71,  196 => 70,  191 => 69,  189 => 68,  183 => 65,  180 => 64,  177 => 63,  174 => 62,  169 => 61,  165 => 60,  161 => 58,  156 => 56,  154 => 55,  148 => 52,  140 => 49,  137 => 48,  113 => 39,  110 => 38,  107 => 37,  105 => 36,  101 => 34,  95 => 32,  93 => 31,  84 => 28,  82 => 27,  74 => 24,  67 => 22,  59 => 17,  55 => 16,  43 => 10,  37 => 8,  171 => 53,  163 => 48,  159 => 57,  153 => 44,  144 => 41,  141 => 40,  136 => 38,  131 => 46,  128 => 36,  112 => 30,  106 => 28,  100 => 26,  96 => 24,  90 => 30,  78 => 26,  75 => 20,  71 => 23,  68 => 18,  63 => 16,  58 => 14,  54 => 13,  40 => 9,  32 => 6,  30 => 6,  21 => 2,  62 => 14,  51 => 12,  48 => 10,  44 => 9,  36 => 6,  24 => 3,  22 => 2,  290 => 179,  278 => 93,  253 => 148,  236 => 138,  232 => 137,  213 => 121,  186 => 97,  170 => 84,  164 => 80,  158 => 77,  155 => 45,  152 => 75,  150 => 53,  138 => 39,  132 => 61,  130 => 60,  127 => 59,  124 => 42,  121 => 34,  119 => 41,  116 => 40,  114 => 54,  111 => 53,  109 => 52,  104 => 49,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 11,  45 => 12,  38 => 8,  34 => 7,  29 => 4,  27 => 4,  25 => 4,  19 => 1,);
    }
}
