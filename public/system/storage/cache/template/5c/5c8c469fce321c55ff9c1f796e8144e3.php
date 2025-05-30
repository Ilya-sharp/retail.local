<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/checkout/shipping_address.twig */
class __TwigTemplate_9afdcf30aeba594b52587e6ba8068569 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form class=\"form-horizontal\">
  ";
        // line 2
        if (($context["addresses"] ?? null)) {
            // line 3
            echo "  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" />
      ";
            // line 6
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
  </div>
  <div id=\"shipping-existing\">
    <select name=\"address_id\" class=\"form-control\">
     ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 11) == ($context["address_id"] ?? null))) {
                    // line 12
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 12);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 12);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 12);
                    echo "</option>
      ";
                } else {
                    // line 14
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 14);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 14);
                    echo "</option>
      ";
                }
                // line 16
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </select>
  </div>
  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"new\" />
      ";
            // line 22
            echo ($context["text_address_new"] ?? null);
            echo "</label>
  </div>
  ";
        }
        // line 25
        echo "  <br />
  <div id=\"shipping-new\" style=\"display: ";
        // line 26
        if (($context["addresses"] ?? null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-firstname\">";
        // line 28
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 30
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-lastname\">";
        // line 34
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 36
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-company\">";
        // line 40
        echo ($context["entry_company"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 42
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-1\">";
        // line 46
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 48
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-2\">";
        // line 52
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 54
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-city\">";
        // line 58
        echo ($context["entry_city"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 60
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-postcode\">";
        // line 64
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 66
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-country\">";
        // line 70
        echo ($context["entry_country"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
          <option value=\"\">";
        // line 73
        echo ($context["text_select"] ?? null);
        echo "</option>
          ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 75
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 75) == ($context["country_id"] ?? null))) {
                // line 76
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 76);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 76);
                echo "</option>
          ";
            } else {
                // line 78
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 78);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 78);
                echo "</option>
           ";
            }
            // line 80
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </select>
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-zone\">";
        // line 85
        echo ($context["entry_zone"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
        </select>
      </div>
    </div>
   ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 92
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 92) == "select")) {
                // line 93
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 93)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 93);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 94);
                echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"custom_field[";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 96);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                echo "]\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                echo "\" class=\"form-control\">
          <option value=\"\">";
                // line 97
                echo ($context["text_select"] ?? null);
                echo "</option>
          ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 99
                    echo "          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 99);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "        </select>
      </div>
    </div>
    ";
            }
            // line 105
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 105) == "radio")) {
                // line 106
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 106)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 106);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 107);
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                echo "\">
          ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 111
                    echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113);
                    echo "\" />
              ";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 121
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "checkbox")) {
                // line 122
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 122)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 122);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                echo "\">
          ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 126));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 127
                    echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 129);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 129);
                    echo "\" />
              ";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 130);
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 137
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "text")) {
                // line 138
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 138)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 138);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"custom_field[";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 141);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                echo "\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                echo "\" class=\"form-control\" />
      </div>
    </div>
    ";
            }
            // line 145
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 145) == "textarea")) {
                // line 146
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 146)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 146);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                echo "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"custom_field[";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 149);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                echo "\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 149);
                echo "</textarea>
      </div>
    </div>
    ";
            }
            // line 153
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 153) == "file")) {
                // line 154
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 154)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 154);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 155);
                echo "</label>
      <div class=\"col-sm-10\">
        <button type=\"button\" id=\"button-shipping-custom-field";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 158);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                echo "]\" value=\"\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                echo "\" />
      </div>
    </div>
    ";
            }
            // line 162
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 162) == "date")) {
                // line 163
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 163)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 163);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 167);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 167);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 167);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 174
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 174) == "time")) {
                // line 175
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 175)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 175);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 179);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 179);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 179);
                echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 186
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 186) == "datetime")) {
                // line 187
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 187)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 187);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 188);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                // line 191
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 191);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 191);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 191);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 198
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "  </div>
  <div class=\"buttons clearfix\">
    <div class=\"pull-right\">
      <input type=\"button\" value=\"";
        // line 202
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-shipping-address\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_address\\']').on('change', function() {
\tif (this.value == 'new') {
\t\t\$('#shipping-existing').hide();
\t\t\$('#shipping-new').show();
\t} else {
\t\t\$('#shipping-existing').show();
\t\t\$('#shipping-new').hide();
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 291
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 296
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 301
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 324
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 330
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 337
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-shipping-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-shipping-address select[name=\\'country_id\\']').trigger('change');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 337,  802 => 330,  793 => 324,  767 => 301,  759 => 296,  751 => 291,  657 => 202,  652 => 199,  646 => 198,  628 => 191,  620 => 188,  611 => 187,  608 => 186,  590 => 179,  582 => 176,  573 => 175,  570 => 174,  552 => 167,  544 => 164,  535 => 163,  532 => 162,  521 => 158,  513 => 157,  508 => 155,  499 => 154,  496 => 153,  481 => 149,  474 => 147,  465 => 146,  462 => 145,  447 => 141,  440 => 139,  431 => 138,  428 => 137,  422 => 133,  413 => 130,  405 => 129,  401 => 127,  397 => 126,  393 => 125,  388 => 123,  379 => 122,  376 => 121,  370 => 117,  361 => 114,  353 => 113,  349 => 111,  345 => 110,  341 => 109,  336 => 107,  327 => 106,  324 => 105,  318 => 101,  307 => 99,  303 => 98,  299 => 97,  291 => 96,  284 => 94,  275 => 93,  272 => 92,  268 => 91,  259 => 85,  253 => 81,  247 => 80,  239 => 78,  231 => 76,  228 => 75,  224 => 74,  220 => 73,  214 => 70,  205 => 66,  200 => 64,  193 => 60,  188 => 58,  181 => 54,  176 => 52,  169 => 48,  164 => 46,  157 => 42,  152 => 40,  145 => 36,  140 => 34,  133 => 30,  128 => 28,  119 => 26,  116 => 25,  110 => 22,  103 => 17,  97 => 16,  79 => 14,  61 => 12,  58 => 11,  54 => 10,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/shipping_address.twig", "");
    }
}
