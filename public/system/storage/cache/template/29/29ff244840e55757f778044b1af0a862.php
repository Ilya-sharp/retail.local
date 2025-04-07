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

/* extension/module/retailcrm.twig */
class __TwigTemplate_b5fd802cc0379aa9f566f67ec2173fed extends Template
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
        echo ($context["header"] ?? null);
        echo " ";
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                ";
        // line 6
        if (($context["export_file"] ?? null)) {
            // line 7
            echo "                    <button type=\"button\" id=\"export\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_button_export"] ?? null);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i></button>
                ";
        }
        // line 9
        echo "                <button type=\"button\" id=\"icml\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_button_catalog"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-file-text-o\"></i></button>
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 11
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["module_version"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "            <div class=\"alert alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["error_warning"] ?? null);
            echo "
            </div>
        ";
        }
        // line 27
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 27)) {
            // line 28
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 30
            echo ($context["text_notice"] ?? null);
            echo "
                <a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 31);
            echo "/admin/settings#t-main\">";
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 31);
            echo "/admin/settings#t-main</a>
            </div>
        ";
        }
        // line 34
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <form action=\"";
        // line 36
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 38
        echo ($context["general_tab_text"] ?? null);
        echo "</a></li>
                        ";
        // line 39
        if ((((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 39) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 39)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 39)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 39))) {
            // line 40
            echo "                            <li><a href=\"#tab-references\" data-toggle=\"tab\">";
            echo ($context["references_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-collector\" data-toggle=\"tab\">";
            // line 41
            echo ($context["collector_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-consultant\" data-toggle=\"tab\">";
            // line 42
            echo ($context["consultant_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-custom_fields\" data-toggle=\"tab\"> ";
            // line 43
            echo ($context["custom_fields_tab_text"] ?? null);
            echo " </a></li>
                            <li><a href=\"#tab-logs\" data-toggle=\"tab\">";
            // line 44
            echo ($context["logs_tab_text"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 46
        echo "                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <input type=\"hidden\" name=\"module_retailcrm_status\" value=\"1\">
                            <fieldset>
                                <legend>";
        // line 51
        echo ($context["retailcrm_base_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_url\">";
        // line 53
        echo ($context["retailcrm_url"] ?? null);
        echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input class=\"form-control\" id=\"retailcrm_url\" type=\"text\" name=\"module_retailcrm_url\" value=\"";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 55)) {
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 55);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_apikey\">";
        // line 59
        echo ($context["retailcrm_apikey"] ?? null);
        echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input class=\"form-control\" id=\"retailcrm_apikey\" type=\"text\" name=\"module_retailcrm_apikey\" value=\"";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 61)) {
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 61);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_corporate_enabled\">";
        // line 65
        echo ($context["corporate_enabled_label"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_corporate_enabled\" value=\"1\"
                                                    ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", true, true, false, 69) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", false, false, false, 69) == 1))) {
            // line 70
            echo "                                                        checked
                                                    ";
        }
        // line 71
        echo " />
                                            ";
        // line 72
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_corporate_enabled\" value=\"0\"
                                                    ";
        // line 76
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", true, true, false, 76) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", false, false, false, 76) == 0))) {
            // line 77
            echo "                                                        checked
                                                    ";
        }
        // line 78
        echo " />
                                            ";
        // line 79
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 85
        echo ($context["retailcrm_countries_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\"></label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 91
            echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"module_retailcrm_country[]\" value=\"";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 93);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_country", [], "any", true, true, false, 93) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_country", [], "any", false, false, false, 93)))) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "\">
                                                        ";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 94);
            echo "
                                                    </label>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 103
        echo ($context["icml_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label question-mark\" for=\"module_retailcrm_icml_service_enabled\" title=\"";
        // line 105
        echo ($context["icml_service_description"] ?? null);
        echo "\">";
        echo ($context["icml_service_enabled_label"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_icml_service_enabled\" value=\"1\"
                                                    ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", true, true, false, 109) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", false, false, false, 109) == 1))) {
            // line 110
            echo "                                                        checked
                                                    ";
        }
        // line 111
        echo " />
                                            ";
        // line 112
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_icml_service_enabled\" value=\"0\"
                                                    ";
        // line 116
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", true, true, false, 116) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", false, false, false, 116) == 0))) {
            // line 117
            echo "                                                        checked
                                                    ";
        }
        // line 118
        echo " />
                                            ";
        // line 119
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 124
        echo ($context["text_currency_label"] ?? null);
        echo "</label>
                                    <div class=\"col-md-4 col-sm-10\">
                                        <select id=\"module_retailcrm_currency\" name=\"module_retailcrm_currency\" class=\"form-control\">
                                            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 128
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "status", [], "any", false, false, false, 128) == 1)) {
                // line 129
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 129);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_currency", [], "any", true, true, false, 129) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_currency", [], "any", false, false, false, 129) == twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 129)))) {
                    echo " selected=\"selected\" ";
                }
                echo ">
                                                        ";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 130);
                echo "
                                                    </option>
                                                ";
            }
            // line 133
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 138
        echo ($context["text_lenght_label"] ?? null);
        echo "</label>
                                    <div class=\"col-md-4 col-sm-10\">
                                        <select id=\"module_retailcrm_lenght\" name=\"module_retailcrm_lenght\" class=\"form-control\">
                                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lenghts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lenght"]) {
            // line 142
            echo "                                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["lenght"], "length_class_id", [], "any", false, false, false, 142);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_lenght", [], "any", true, true, false, 142) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_lenght", [], "any", false, false, false, 142) == twig_get_attribute($this->env, $this->source, $context["lenght"], "length_class_id", [], "any", false, false, false, 142)))) {
                echo " selected=\"selected\" ";
            }
            echo ">
                                                    ";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["lenght"], "title", [], "any", false, false, false, 143);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lenght'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 151
        echo ($context["status_changes"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_status_changes\">";
        // line 153
        echo ($context["text_status_changes"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_retailcrm_status_changes\" value=\"1\"
                                            ";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", true, true, false, 157) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", false, false, false, 157) == 1))) {
            // line 158
            echo "                                                checked
                                            ";
        }
        // line 159
        echo " />
                                        ";
        // line 160
        echo ($context["text_yes"] ?? null);
        echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_retailcrm_status_changes\" value=\"0\"
                                        ";
        // line 164
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", true, true, false, 164) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", false, false, false, 164) == 0))) {
            // line 165
            echo "                                            checked
                                        ";
        }
        // line 166
        echo " />
                                        ";
        // line 167
        echo ($context["text_no"] ?? null);
        echo "
                                    </label>
                                  </div>
                                </div>
                            </fieldset>
                            ";
        // line 172
        if ((((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 172) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 172)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 172)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 172))) {
            // line 173
            echo "                            ";
            if (twig_length_filter($this->env, ($context["retailcrm_errors"] ?? null))) {
                // line 174
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["retailcrm_errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["retailcrm_error"]) {
                    // line 175
                    echo "                                <div class=\"warning\">";
                    echo $context["retailcrm_error"];
                    echo "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retailcrm_error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "                            ";
            } else {
                // line 178
                echo "                            <fieldset>
                                <legend>";
                // line 179
                echo ($context["retailcrm_upload_order"] ?? null);
                echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 181
                echo ($context["text_button_export_order"] ?? null);
                echo " № </label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                                <input type=\"text\" name=\"order_id\" class=\"form-control\">
                                            </div>
                                            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                                                <button type=\"button\" id=\"export_order\" data-toggle=\"tooltip\" title=\"";
                // line 188
                echo ($context["text_button_export_order"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 195
                echo ($context["special_price_settings"] ?? null);
                echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    ";
                // line 197
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customerGroups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customerGroup"]) {
                    // line 198
                    echo "                                        ";
                    $context["cud"] = twig_get_attribute($this->env, $this->source, $context["customerGroup"], "customer_group_id", [], "any", false, false, false, 198);
                    // line 199
                    echo "                                        <div class=\"row retailcrm_unit\">
                                            <label class=\"col-sm-2 control-label\" for=\"opencart_customer_group_";
                    // line 200
                    echo ($context["cud"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customerGroup"], "name", [], "any", false, false, false, 200);
                    echo "</label>
                                            <div class=\"col-md-4 col-sm-10\">
                                                <select id=\"module_retailcrm_special_";
                    // line 202
                    echo ($context["cud"] ?? null);
                    echo "\" name=\"module_retailcrm_special_";
                    echo ($context["cud"] ?? null);
                    echo "\" class=\"form-control\">
                                                    <option value=\"\" ";
                    // line 203
                    if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), ("module_retailcrm_special_" . ($context["cud"] ?? null)), [], "array", true, true, false, 203) || twig_test_empty((($__internal_compile_0 = ($context["saved_settings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("module_retailcrm_special_" . ($context["cud"] ?? null))] ?? null) : null)))) {
                        echo "selected";
                    }
                    echo ">---</option>
                                                    ";
                    // line 204
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["priceTypes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["priceType"]) {
                        // line 205
                        echo "                                                        ";
                        if (((twig_get_attribute($this->env, $this->source, $context["priceType"], "active", [], "any", false, false, false, 205) == true) && (twig_get_attribute($this->env, $this->source, $context["priceType"], "default", [], "any", false, false, false, 205) == false))) {
                            // line 206
                            echo "                                                            <option value =\"";
                            echo twig_get_attribute($this->env, $this->source, $context["priceType"], "code", [], "any", false, false, false, 206);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), ("module_retailcrm_special_" . ($context["cud"] ?? null)), [], "array", true, true, false, 206) && (twig_get_attribute($this->env, $this->source, $context["priceType"], "code", [], "any", false, false, false, 206) == (($__internal_compile_1 = ($context["saved_settings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[("module_retailcrm_special_" . ($context["cud"] ?? null))] ?? null) : null)))) {
                                echo " selected=\"selected\" ";
                            }
                            echo ">
                                                                ";
                            // line 207
                            echo twig_get_attribute($this->env, $this->source, $context["priceType"], "name", [], "any", false, false, false, 207);
                            echo "
                                                            </option>
                                                        ";
                        }
                        // line 210
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceType'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "                                                </select>
                                            </div>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customerGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 218
                echo ($context["order_number"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" class=\"col-sm-2 control-label\" for=\"module_retailcrm_order_number\">";
                // line 220
                echo ($context["text_order_number"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_order_number\" value=\"1\"
                                                ";
                // line 224
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", true, true, false, 224) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", false, false, false, 224) == 1))) {
                    // line 225
                    echo "                                                    checked
                                                ";
                }
                // line 226
                echo " />
                                            ";
                // line 227
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_order_number\" value=\"0\"
                                                ";
                // line 231
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", true, true, false, 231) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", false, false, false, 231) == 0))) {
                    // line 232
                    echo "                                                    checked
                                                ";
                }
                // line 233
                echo " />
                                            ";
                // line 234
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 240
                echo ($context["summ_around"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" class=\"col-sm-2 control-label\" for=\"module_retailcrm_summ_around\">";
                // line 242
                echo ($context["text_summ_around"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_summ_around\" value=\"1\"
                                                    ";
                // line 246
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_summ_around", [], "any", true, true, false, 246) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_summ_around", [], "any", false, false, false, 246) == 1))) {
                    // line 247
                    echo "                                                        checked
                                                    ";
                }
                // line 248
                echo " />
                                            ";
                // line 249
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_summ_around\" value=\"0\"
                                                    ";
                // line 253
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_summ_around", [], "any", true, true, false, 253) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_summ_around", [], "any", false, false, false, 253) == 0))) {
                    // line 254
                    echo "                                                        checked
                                                    ";
                }
                // line 255
                echo " />
                                            ";
                // line 256
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 262
                echo ($context["text_retailcrm_discount"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"label_discount\">";
                // line 264
                echo ($context["text_retailcrm_label_discount"] ?? null);
                echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input name=\"module_retailcrm_label_discount\" id=\"label_discount\" class=\"form-control\" value=\"";
                // line 266
                if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_label_discount", [], "any", true, true, false, 266)) {
                    echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_label_discount", [], "any", false, false, false, 266);
                } else {
                    echo ($context["default_retailcrm_label_discount"] ?? null);
                }
                echo "\">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 271
                echo ($context["sum_payment"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_sum_payment\">";
                // line 273
                echo ($context["text_sum_payment"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_sum_payment\" value=\"1\"
                                                    ";
                // line 277
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", true, true, false, 277) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", false, false, false, 277) == 1))) {
                    // line 278
                    echo "                                                        checked
                                                    ";
                }
                // line 279
                echo " >
                                            ";
                // line 280
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_sum_payment\" value=\"0\"
                                                    ";
                // line 284
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", true, true, false, 284) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", false, false, false, 284) == 0))) {
                    // line 285
                    echo "                                                        checked
                                                    ";
                }
                // line 286
                echo " >
                                            ";
                // line 287
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-references\">
                            <fieldset>
                                <legend>";
                // line 295
                echo ($context["retailcrm_dict_settings"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"> ";
                // line 297
                echo ($context["retailcrm_dict_delivery"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            ";
                // line 300
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 300))) {
                    // line 301
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 301));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 302
                        echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:10px;\">
                                                        <div class=\"pm\">";
                        // line 303
                        echo (twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 303) . ":");
                        echo "</div>
                                                        ";
                        // line 304
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                            // line 305
                            echo "                                                            ";
                            if (($context["key"] != "title")) {
                                // line 306
                                echo "                                                                <div class=\"form-group retailcrm_unit\">
                                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                                        <select id=\"retailcrm_delivery_";
                                // line 308
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 308);
                                echo "\" name=\"module_retailcrm_delivery[";
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 308);
                                echo "]\" class=\"form-control\">
                                                                            ";
                                // line 309
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "retailcrm", [], "any", false, false, false, 309));
                                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                                    // line 310
                                    echo "                                                                                <option value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 310);
                                    echo "\" ";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_delivery", [], "any", false, true, false, 310), $context["key"], [], "array", true, true, false, 310) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 310) == (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_delivery", [], "any", false, false, false, 310)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)))) {
                                        echo " selected=\"selected\" ";
                                    }
                                    echo ">
                                                                                    ";
                                    // line 311
                                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 311);
                                    echo "
                                                                                </option>
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 314
                                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                                        <label class=\"control-label\" for=\"retailcrm_pm_";
                                // line 317
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 317);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "title", [], "any", false, false, false, 317);
                                echo "</label>
                                                                    </div>
                                                                </div>
                                                            ";
                            }
                            // line 321
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 322
                        echo "                                                    </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 324
                    echo "                                            ";
                } else {
                    // line 325
                    echo "                                                <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                                    ";
                    // line 327
                    echo ($context["text_error_delivery"] ?? null);
                    echo "
                                                </div>
                                            ";
                }
                // line 330
                echo "                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 334
                echo ($context["retailcrm_dict_status"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        ";
                // line 336
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "opencart", [], "any", false, false, false, 336));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 337
                    echo "                                            ";
                    $context["uid"] = twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 337);
                    // line 338
                    echo "                                            <div class=\"row retailcrm_unit\">
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <select id=\"retailcrm_status_";
                    // line 340
                    echo ($context["uid"] ?? null);
                    echo "\" name=\"module_retailcrm_status[";
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 340);
                    echo "]\" class=\"form-control\">
                                                        ";
                    // line 341
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "retailcrm", [], "any", false, false, false, 341));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 342
                        echo "                                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 342);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status", [], "any", false, true, false, 342), ($context["uid"] ?? null), [], "array", true, true, false, 342) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 342) == (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status", [], "any", false, false, false, 342)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["uid"] ?? null)] ?? null) : null)))) {
                            echo " selected=\"selected\" ";
                        }
                        echo ">
                                                                ";
                        // line 343
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 343);
                        echo "
                                                            </option>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 346
                    echo "                                                    </select>
                                                </div>
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <label class=\"control-label\" for=\"retailcrm_status_";
                    // line 349
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 349);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 349);
                    echo "</label>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 353
                echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 356
                echo ($context["retailcrm_dict_payment"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        ";
                // line 358
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "opencart", [], "any", false, false, false, 358));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 359
                    echo "                                            <div class=\"row retailcrm_unit\">
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <select id=\"retailcrm_payment_";
                    // line 361
                    echo $context["key"];
                    echo "\" name=\"module_retailcrm_payment[";
                    echo $context["key"];
                    echo "]\" class=\"form-control\">
                                                        ";
                    // line 362
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "retailcrm", [], "any", false, false, false, 362));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 363
                        echo "                                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 363);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_payment", [], "any", false, true, false, 363), $context["key"], [], "array", true, true, false, 363) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 363) == (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_payment", [], "any", false, false, false, 363)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)))) {
                            echo " selected=\"selected\" ";
                        }
                        echo ">
                                                                ";
                        // line 364
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 364);
                        echo "
                                                            </option>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 367
                    echo "                                                    </select>
                                                </div>
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <label class=\"control-label\" for=\"retailcrm_payment_";
                    // line 370
                    echo $context["key"];
                    echo "\">";
                    echo $context["value"];
                    echo "</label>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 377
                echo ($context["retailcrm_dict_default"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"retailcrm_unit col-sm-12\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <select id=\"module_retailcrm_default_payment\" name=\"module_retailcrm_default_payment\" class=\"form-control\">
                                                            ";
                // line 384
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "opencart", [], "any", false, false, false, 384));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 385
                    echo "                                                                <option value=\"";
                    echo $context["k"];
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_payment", [], "any", true, true, false, 385) && ($context["k"] == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_payment", [], "any", false, false, false, 385)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                    ";
                    // line 386
                    echo $context["v"];
                    echo "
                                                                </option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 389
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_default_payment\">";
                // line 392
                echo ($context["text_payment"] ?? null);
                echo "</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"retailcrm_unit col-sm-12\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <select id=\"module_retailcrm_default_shipping\" name=\"module_retailcrm_default_shipping\" class=\"form-control\">
                                                            ";
                // line 400
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 400));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 401
                    echo "                                                                <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 401);
                    echo "\">
                                                                    ";
                    // line 402
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 403
                        echo "                                                                        ";
                        if (($context["k"] != "title")) {
                            // line 404
                            echo "                                                                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 404);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_shipping", [], "any", true, true, false, 404) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 404) == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_shipping", [], "any", false, false, false, 404)))) {
                                echo " selected=\"selected\" ";
                            }
                            echo ">
                                                                                ";
                            // line 405
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 405);
                            echo "
                                                                            </option>
                                                                        ";
                        }
                        // line 408
                        echo "                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 409
                    echo "                                                                </optgroup>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 411
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_default_shipping\">";
                // line 414
                echo ($context["text_shipping"] ?? null);
                echo "</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 422
                echo ($context["retailcrm_missing_status"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                <select id=\"retailcrm_missing_status\" name=\"module_retailcrm_missing_status\" class=\"form-control\">
                                                    <option></option>
                                                    ";
                // line 428
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "retailcrm", [], "any", false, false, false, 428));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 429
                    echo "                                                        <option value=\"";
                    echo $context["k"];
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_missing_status", [], "any", true, true, false, 429) && ($context["k"] == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_missing_status", [], "any", false, false, false, 429)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                            ";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 430);
                    echo "
                                                        </option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 433
                echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            ";
            }
            // line 440
            echo "                            ";
        }
        // line 441
        echo "                        </div>
                        <div class=\"tab-pane\" id=\"tab-collector\">
                            <fieldset>
                                <legend>";
        // line 444
        echo ($context["daemon_collector"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector_active\" class=\"col-md-4\">";
        // line 446
        echo ($context["text_collector_activity"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector_active\" value=\"1\" ";
        // line 449
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", true, true, false, 449) && (twig_get_attribute($this->env, $this->source,         // line 450
($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 450) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 451
        echo ">
                                            ";
        // line 452
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector_active\" value=\"0\" ";
        // line 455
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 455) || (twig_get_attribute($this->env, $this->source,         // line 456
($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 456) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 457
        echo ">
                                            ";
        // line 458
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\" class=\"col-md-4\">";
        // line 463
        echo ($context["collector_site_key"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"retailcrm_collector_site_key\" type=\"text\" name=\"module_retailcrm_collector[site_key]\" value=\"";
        // line 465
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 465), "site_key", [], "any", true, true, false, 465)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 465), "site_key", [], "any", false, false, false, 465);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\" class=\"col-md-4\">";
        // line 469
        echo ($context["text_collector_form_capture"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[form_capture]\" value=\"1\" ";
        // line 472
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 472), "form_capture", [], "any", true, true, false, 472) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 473
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 473), "form_capture", [], "any", false, false, false, 473) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 474
        echo ">
                                            ";
        // line 475
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[form_capture]\" value=\"0\" ";
        // line 478
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 478), "form_capture", [], "any", true, true, false, 478) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 479
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 479), "form_capture", [], "any", false, false, false, 479) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 480
        echo ">
                                            ";
        // line 481
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 486
        echo ($context["text_collector_period"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector_period\" type=\"text\" name=\"module_retailcrm_collector[period]\" value=\"";
        // line 488
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 488), "period", [], "any", true, true, false, 488)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 488), "period", [], "any", false, false, false, 488);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 492
        echo ($context["text_label_promo"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector[]\" type=\"text\" name=\"module_retailcrm_collector[label_promo]\" value=\"";
        // line 494
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 494), "label_promo", [], "any", true, true, false, 494)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 494), "label_promo", [], "any", false, false, false, 494);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 498
        echo ($context["text_label_send"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector_label_send\" type=\"text\" name=\"module_retailcrm_collector[label_send]\" value=\"";
        // line 500
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 500), "label_send", [], "any", true, true, false, 500)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 500), "label_send", [], "any", false, false, false, 500);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 504
        echo ($context["collector_custom_text"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[custom_form]\" value=\"1\" ";
        // line 507
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 507), "custom_form", [], "any", true, true, false, 507) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 508
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 508), "custom_form", [], "any", false, false, false, 508) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 509
        echo ">
                                            ";
        // line 510
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[custom_form]\" value=\"0\" ";
        // line 513
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 513), "custom_form", [], "any", true, true, false, 513) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 514
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 514), "custom_form", [], "any", false, false, false, 514) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 515
        echo ">
                                            ";
        // line 516
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                ";
        // line 520
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectorFields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 521
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\">";
            // line 522
            echo $context["label"];
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4 col-sm-6\">
                                                    <input class=\"form-control\" id=\"module_retailcrm_collector\" type=\"text\" name=\"module_retailcrm_collector[custom][";
            // line 526
            echo $context["field"];
            echo "]\" value=\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 526), "custom", [], "any", false, true, false, 526), $context["field"], [], "array", true, true, false, 526)) {
                echo " ";
                echo (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 526), "custom", [], "any", false, false, false, 526)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["field"]] ?? null) : null);
                echo " ";
            }
            echo "\">
                                                </div>
                                                <div class=\"col-md-8 col-sm-6\" style=\"margin-top: 8px;\">
                                                    <input input style=\"margin-top: 0; vertical-align: middle;\" type=\"checkbox\"  name=\"module_retailcrm_collector[require][";
            // line 529
            echo $context["field"];
            echo "_require]\" value=\"1\" ";
            if ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 529), "require", [], "any", false, false, false, 529)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["field"] . "_require")] ?? null) : null)) {
                echo " checked ";
            }
            echo ">
                                                    <label style=\"margin-bottom: 0; vertical-align: middle; margin-left: 5px;\" for=\"retailcrm_collector\">";
            // line 530
            echo ($context["text_require"] ?? null);
            echo "</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 536
        echo "                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-consultant\">
                            <legend>";
        // line 539
        echo ($context["consultant_tab_text"] ?? null);
        echo "</legend>
                            <fieldset>
                                ";
        // line 542
        echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-code\">";
        // line 543
        echo ($context["entry_code"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <textarea name=\"module_retailcrm_online_consultant_code\" rows=\"5\" placeholder=\"";
        // line 545
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"retailcrm_entry_code\" class=\"form-control\">
                                        ";
        // line 546
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_code", [], "any", true, true, false, 546)) {
            // line 547
            echo "                                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_code", [], "any", false, false, false, 547);
        }
        // line 548
        echo "                                        </textarea>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_online_consultant_active\" class=\"col-md-4\">";
        // line 552
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_online_consultant_active\" value=\"1\" ";
        // line 555
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", true, true, false, 555) && (twig_get_attribute($this->env, $this->source,         // line 556
($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 556) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 557
        echo ">
                                            ";
        // line 558
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_online_consultant_active\" value=\"0\" ";
        // line 561
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 561) || (twig_get_attribute($this->env, $this->source,         // line 562
($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 562) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 563
        echo ">
                                            ";
        // line 564
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-custom_fields\">
                            <fieldset>
                                <legend>";
        // line 572
        echo ($context["retailcrm_dict_custom_fields"] ?? null);
        echo "</legend>
                                ";
        // line 573
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 573)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 573)))) {
            // line 574
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"retailcrm_custom_field_active\">";
            // line 575
            echo ($context["text_custom_field_activity"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_retailcrm_custom_field_active\" value=\"1\" ";
            // line 578
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", true, true, false, 578) && (twig_get_attribute($this->env, $this->source,             // line 579
($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", false, false, false, 579) == 1))) {
                // line 580
                echo "                                                    checked ";
            }
            echo " >
                                                ";
            // line 581
            echo ($context["text_yes"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_retailcrm_custom_field_active\" value=\"0\" ";
            // line 584
            if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", true, true, false, 584) || (twig_get_attribute($this->env, $this->source,             // line 585
($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", false, false, false, 585) == 0))) {
                // line 586
                echo "                                                    checked ";
            }
            echo " >
                                                ";
            // line 587
            echo ($context["text_no"] ?? null);
            echo "
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 592
            echo ($context["text_customers_custom_fields"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                ";
            // line 595
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 595));
            foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                // line 596
                echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:5px;\">
                                                        <div class=\"row\">
                                                            ";
                // line 598
                $context["fid"] = ("c_" . twig_get_attribute($this->env, $this->source, $context["customField"], "custom_field_id", [], "any", false, false, false, 598));
                // line 599
                echo "                                                            <div class=\"col-sm-4\">
                                                                <select class=\"form-control\" id=\"module_retailcrm_custom_field_";
                // line 600
                echo ($context["fid"] ?? null);
                echo "\" name=\"module_retailcrm_custom_field[";
                echo ($context["fid"] ?? null);
                echo "]\" >
                                                                    ";
                // line 601
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 601), "customers", [], "any", false, false, false, 601));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 602
                    echo "                                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 602);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, true, false, 602), ($context["fid"] ?? null), [], "array", true, true, false, 602) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 602) == (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, false, false, 602)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["fid"] ?? null)] ?? null) : null)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                            ";
                    // line 603
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 603);
                    echo "
                                                                        </option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 606
                echo "                                                                </select>
                                                            </div>
                                                            <label style=\"padding-top: 9px;\" for=\"module_retailcrm_custom_field_";
                // line 608
                echo ($context["fid"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 608);
                echo "</label>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 612
            echo "                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 616
            echo ($context["text_orders_custom_fields"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                ";
            // line 619
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 619));
            foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                // line 620
                echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:5px;\">
                                                        <div class=\"row\">
                                                            ";
                // line 622
                $context["fid"] = ("o_" . twig_get_attribute($this->env, $this->source, $context["customField"], "custom_field_id", [], "any", false, false, false, 622));
                // line 623
                echo "                                                            <div class=\"col-sm-4\">
                                                                <select class=\"form-control\" id=\"module_retailcrm_custom_field_";
                // line 624
                echo ($context["fid"] ?? null);
                echo "\" name=\"module_retailcrm_custom_field[";
                echo ($context["fid"] ?? null);
                echo "]\" >
                                                                    ";
                // line 625
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 625), "orders", [], "any", false, false, false, 625));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 626
                    echo "                                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 626);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, true, false, 626), ($context["fid"] ?? null), [], "array", true, true, false, 626) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 626) == (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, false, false, 626)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["fid"] ?? null)] ?? null) : null)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                            ";
                    // line 627
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 627);
                    echo "
                                                                        </option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 630
                echo "                                                                </select>
                                                            </div>
                                                            <label style=\"padding-top: 9px;\" for=\"module_retailcrm_custom_field_";
                // line 632
                echo ($context["fid"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 632);
                echo "</label>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 636
            echo "                                            </div>
                                        </div>
                                    </div>
                                ";
        } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 639
($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 639)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 639)))) {
            // line 640
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 642
            echo ($context["text_error_custom_field"] ?? null);
            echo "
                                    </div>
                                ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 644
($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 644))) {
            // line 645
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 647
            echo ($context["text_error_cf_retailcrm"] ?? null);
            echo "
                                    </div>
                                ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 649
($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 649))) {
            // line 650
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 652
            echo ($context["text_error_cf_opencart"] ?? null);
            echo "
                                    </div>
                                ";
        }
        // line 655
        echo "                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-logs\">
                            <fieldset style=\"margin-bottom: 30px;\">
                                <legend>Retailcrm API error log</legend>
                                <div class=\"retailcrm_unit\">
                                    <a onclick=\"confirm('";
        // line 661
        echo ($context["text_confirm_log"] ?? null);
        echo "') ? location.href='";
        echo ($context["clear_retailcrm"] ?? null);
        echo "' : false;\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i></a>
                                </div>
                                ";
        // line 663
        if (twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_log", [], "any", true, true, false, 663)) {
            // line 664
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <textarea wrap=\"off\" rows=\"15\" readonly class=\"form-control\">";
            // line 666
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_log", [], "any", false, false, false, 666);
            echo "</textarea>
                                        </div>
                                    </div>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 669
($context["logs"] ?? null), "retailcrm_error", [], "any", true, true, false, 669)) {
            // line 670
            echo "                                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_error", [], "any", false, false, false, 670);
            echo "
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                    </div>
                                ";
        }
        // line 674
        echo "                            </fieldset>
                            <fieldset>
                                <legend>Opencart API error log</legend>
                                <div class=\"retailcrm_unit\">
                                    <a onclick=\"confirm('";
        // line 678
        echo ($context["text_confirm_log"] ?? null);
        echo "') ? location.href='";
        echo ($context["clear_opencart"] ?? null);
        echo "' : false;\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i></a>
                                </div>
                                ";
        // line 680
        if (twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_api_log", [], "any", true, true, false, 680)) {
            // line 681
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <textarea wrap=\"off\" rows=\"15\" readonly class=\"form-control\">";
            // line 683
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_api_log", [], "any", false, false, false, 683);
            echo "</textarea>
                                        </div>
                                    </div>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 686
($context["logs"] ?? null), "oc_error", [], "any", true, true, false, 686)) {
            // line 687
            echo "                                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_error", [], "any", false, false, false, 687);
            echo "
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                    </div>
                                ";
        }
        // line 691
        echo "                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 699
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\">
    var token = '";
        // line 702
        echo ($context["user_token"] ?? null);
        echo "';
    \$('#icml').on('click', function() {
        \$.ajax({
            url: '";
        // line 705
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/icml&user_token=' + token,
            beforeSend: function() {
                \$('#icml').button('loading');
            },
            complete: function() {
                \$('.alert-success').remove();
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 711
        echo ($context["text_success_catalog"] ?? null);
        echo "</div>');
                \$('#icml').button('reset');
            },
            error: function(){
                alert('error');
            }
        });
    });

    \$('#export').on('click', function() {
        \$.ajax({
            url: '";
        // line 722
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/export&user_token=' + token,
            beforeSend: function() {
                \$('#export').button('loading');
            },
            complete: function() {
                \$('.alert-success').remove();
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 728
        echo ($context["text_success_export"] ?? null);
        echo "</div>');
                \$('#export').button('reset');
            },
            error: function(){
                alert('error');
            }
        });
    });

    \$('#export_order').on('click', function() {
        var order_id = \$('input[name=\\'order_id\\']').val();
        if (order_id && order_id > 0) {
            \$.ajax({
                url: '";
        // line 741
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/exportOrder&user_token=' + token + '&order_id=' + order_id,
                beforeSend: function() {
                    \$('#export_order').button('loading');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                },
                success: function(data, textStatus, jqXHR) {
                    response = JSON.parse(jqXHR['responseText']);

                    if (response['status_code'] == '400') {
                        \$('.alert-danger').remove();
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 753
        echo ($context["text_error_order"] ?? null);
        echo "' + response['error_msg'] + '</div>');
                        \$('#export_order').button('reset');
                    } else {
                        \$('.alert-success').remove();
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 757
        echo ($context["text_success_export_order"] ?? null);
        echo "</div>');
                        \$('#export_order').button('reset');
                        \$('input[name=\\'order_id\\']').val('');
                    }
                }
            });
        } else {
            \$('.alert-danger').remove();
            \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 765
        echo ($context["text_error_order_id"] ?? null);
        echo "</div>');
            \$('#export_order').button('reset');
        }
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "extension/module/retailcrm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1846 => 765,  1835 => 757,  1828 => 753,  1813 => 741,  1797 => 728,  1788 => 722,  1774 => 711,  1765 => 705,  1759 => 702,  1753 => 699,  1743 => 691,  1735 => 687,  1733 => 686,  1727 => 683,  1723 => 681,  1721 => 680,  1712 => 678,  1706 => 674,  1698 => 670,  1696 => 669,  1690 => 666,  1686 => 664,  1684 => 663,  1675 => 661,  1667 => 655,  1661 => 652,  1657 => 650,  1655 => 649,  1650 => 647,  1646 => 645,  1644 => 644,  1639 => 642,  1635 => 640,  1633 => 639,  1628 => 636,  1616 => 632,  1612 => 630,  1603 => 627,  1594 => 626,  1590 => 625,  1584 => 624,  1581 => 623,  1579 => 622,  1575 => 620,  1571 => 619,  1565 => 616,  1559 => 612,  1547 => 608,  1543 => 606,  1534 => 603,  1525 => 602,  1521 => 601,  1515 => 600,  1512 => 599,  1510 => 598,  1506 => 596,  1502 => 595,  1496 => 592,  1488 => 587,  1483 => 586,  1481 => 585,  1480 => 584,  1474 => 581,  1469 => 580,  1467 => 579,  1466 => 578,  1460 => 575,  1457 => 574,  1455 => 573,  1451 => 572,  1440 => 564,  1437 => 563,  1430 => 562,  1429 => 561,  1423 => 558,  1420 => 557,  1413 => 556,  1412 => 555,  1406 => 552,  1400 => 548,  1396 => 547,  1394 => 546,  1390 => 545,  1385 => 543,  1382 => 542,  1377 => 539,  1372 => 536,  1360 => 530,  1352 => 529,  1340 => 526,  1333 => 522,  1330 => 521,  1326 => 520,  1319 => 516,  1316 => 515,  1309 => 514,  1308 => 513,  1302 => 510,  1299 => 509,  1292 => 508,  1291 => 507,  1285 => 504,  1276 => 500,  1271 => 498,  1262 => 494,  1257 => 492,  1248 => 488,  1243 => 486,  1235 => 481,  1232 => 480,  1225 => 479,  1224 => 478,  1218 => 475,  1215 => 474,  1208 => 473,  1207 => 472,  1201 => 469,  1192 => 465,  1187 => 463,  1179 => 458,  1176 => 457,  1169 => 456,  1168 => 455,  1162 => 452,  1159 => 451,  1152 => 450,  1151 => 449,  1145 => 446,  1140 => 444,  1135 => 441,  1132 => 440,  1123 => 433,  1114 => 430,  1105 => 429,  1101 => 428,  1092 => 422,  1081 => 414,  1076 => 411,  1069 => 409,  1063 => 408,  1057 => 405,  1048 => 404,  1045 => 403,  1041 => 402,  1036 => 401,  1032 => 400,  1021 => 392,  1016 => 389,  1007 => 386,  998 => 385,  994 => 384,  984 => 377,  979 => 374,  967 => 370,  962 => 367,  953 => 364,  944 => 363,  940 => 362,  934 => 361,  930 => 359,  926 => 358,  921 => 356,  916 => 353,  904 => 349,  899 => 346,  890 => 343,  881 => 342,  877 => 341,  871 => 340,  867 => 338,  864 => 337,  860 => 336,  855 => 334,  849 => 330,  843 => 327,  839 => 325,  836 => 324,  829 => 322,  823 => 321,  814 => 317,  809 => 314,  800 => 311,  791 => 310,  787 => 309,  781 => 308,  777 => 306,  774 => 305,  770 => 304,  766 => 303,  763 => 302,  758 => 301,  756 => 300,  750 => 297,  745 => 295,  734 => 287,  731 => 286,  727 => 285,  725 => 284,  718 => 280,  715 => 279,  711 => 278,  709 => 277,  702 => 273,  697 => 271,  685 => 266,  680 => 264,  675 => 262,  666 => 256,  663 => 255,  659 => 254,  657 => 253,  650 => 249,  647 => 248,  643 => 247,  641 => 246,  634 => 242,  629 => 240,  620 => 234,  617 => 233,  613 => 232,  611 => 231,  604 => 227,  601 => 226,  597 => 225,  595 => 224,  588 => 220,  583 => 218,  578 => 215,  569 => 211,  563 => 210,  557 => 207,  548 => 206,  545 => 205,  541 => 204,  535 => 203,  529 => 202,  522 => 200,  519 => 199,  516 => 198,  512 => 197,  507 => 195,  497 => 188,  487 => 181,  482 => 179,  479 => 178,  476 => 177,  467 => 175,  462 => 174,  459 => 173,  457 => 172,  449 => 167,  446 => 166,  442 => 165,  440 => 164,  433 => 160,  430 => 159,  426 => 158,  424 => 157,  417 => 153,  412 => 151,  405 => 146,  396 => 143,  387 => 142,  383 => 141,  377 => 138,  371 => 134,  365 => 133,  359 => 130,  350 => 129,  347 => 128,  343 => 127,  337 => 124,  329 => 119,  326 => 118,  322 => 117,  320 => 116,  313 => 112,  310 => 111,  306 => 110,  304 => 109,  295 => 105,  290 => 103,  283 => 98,  273 => 94,  263 => 93,  259 => 91,  255 => 90,  247 => 85,  238 => 79,  235 => 78,  231 => 77,  229 => 76,  222 => 72,  219 => 71,  215 => 70,  213 => 69,  206 => 65,  197 => 61,  192 => 59,  183 => 55,  178 => 53,  173 => 51,  166 => 46,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  144 => 40,  142 => 39,  138 => 38,  133 => 36,  129 => 34,  121 => 31,  117 => 30,  113 => 28,  110 => 27,  104 => 24,  100 => 22,  98 => 21,  92 => 17,  81 => 15,  77 => 14,  70 => 12,  64 => 11,  60 => 10,  55 => 9,  49 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/retailcrm.twig", "");
    }
}
