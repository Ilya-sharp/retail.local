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

/* extension/module/custom.twig */
class __TwigTemplate_9493ae85423994723effb4be3092abf7 extends Template
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
        echo " 
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-latest\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 12
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 19
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo " 
    ";
        // line 23
        if (array_key_exists("success", $context)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">  

        <form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-login\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_login"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-cart\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_cart"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_customer"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-shipping\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_shipping"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-payment\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_payment"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-comment\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_comment"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-module\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_module"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-total\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_total"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-about\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_about"] ?? null);
        echo "</a></li>
\t\t\t</ul>\t\t\t

\t\t\t<div class=\"tab-content\">

\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 54
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"module_custom_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 57
        if (($context["module_custom_status"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 58
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 59
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo " 
\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 61
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 62
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 63
        echo " 
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-general-theme\"><span data-toggle=\"tooltip\" title=\"";
        // line 69
        echo ($context["help_theme"] ?? null);
        echo "\">";
        echo ($context["entry_theme"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"module_custom_general[theme]\" id=\"input-general-theme\" class=\"form-control\" readonly>
\t\t\t\t\t\t\t\t<option value=\"bootstrap3\" selected=\"selected\">Bootstrap 3</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 215
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"tab-pane\" id=\"tab-login\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-login-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 221
        echo ($context["help_login"] ?? null);
        echo "\">";
        echo ($context["entry_view"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"module_custom_login[status]\" id=\"input-login-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 224
        if (twig_get_attribute($this->env, $this->source, ($context["module_custom_login"] ?? null), "status", [], "any", false, false, false, 224)) {
            echo " 
\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 225
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 226
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 227
            echo " 
\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 228
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 229
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 230
        echo " 
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"tab-pane\" id=\"tab-cart\">

\t\t\t\t\t";
        // line 238
        if (($context["error_cart"] ?? null)) {
            // line 239
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_cart"] ?? null);
            echo "
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 243
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cart-status\">";
        // line 245
        echo ($context["entry_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"module_custom_cart[status]\" id=\"input-cart-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 248
        if (twig_get_attribute($this->env, $this->source, ($context["module_custom_cart"] ?? null), "status", [], "any", false, false, false, 248)) {
            echo " 
\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 249
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 250
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 251
            echo " 
\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 252
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 253
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 254
        echo " 
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<br>

\t\t\t\t\t<table id=\"cart-column\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t";
        // line 265
        echo ($context["column_column"] ?? null);
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"56px\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 271
        $context["cartKey"] = 0;
        echo " 
\t\t\t\t\t\t";
        // line 272
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["module_custom_cart"] ?? null), "column", [], "any", false, false, false, 272))) {
            echo " 
\t\t\t\t\t\t";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_cart"] ?? null), "column", [], "any", false, false, false, 273));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                echo " 
\t\t\t\t\t\t\t<tr id=\"cart-column-";
                // line 274
                echo ($context["cartKey"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"module_custom_cart[column][";
                // line 276
                echo ($context["cartKey"] ?? null);
                echo "]\" id=\"input-cart-column-";
                echo ($context["cartKey"] ?? null);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = ($context["module_custom_cart"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["list"] ?? null) : null));
                foreach ($context['_seq'] as $context["name"] => $context["item"]) {
                    echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 279
                    $context["selected"] = "";
                    echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 281
                    if (($context["column"] == $context["name"])) {
                        echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 282
                        $context["selected"] = "selected=\"selected\"";
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 283
                    echo " 

\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    // line 285
                    echo $context["name"];
                    echo "\" ";
                    echo ($context["selected"] ?? null);
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 285);
                    echo "</option>

\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo " 
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#cart-column-";
                // line 291
                echo ($context["cartKey"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["entry_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                // line 294
                $context["cartKey"] = (($context["cartKey"] ?? null) + 1);
                echo " 
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo " 
\t\t\t\t\t\t";
        }
        // line 296
        echo " 
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<td ></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addCartColumn();\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"Добавить поле\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>

\t\t\t\t\t<script>
\t\t\t\t\tvar cartKey = ";
        // line 307
        echo ($context["cartKey"] ?? null);
        echo ";
\t\t\t\t\tfunction addCartColumn(){

\t\t\t\t\t\thtml  = '<tr id=\"cart-column-' + cartKey + '\">';
\t\t\t\t\t\thtml += '<td><select name=\"module_custom_cart[column][' + cartKey + ']\" id=\"input-cart-column-' + cartKey + '\" class=\"form-control\">';
\t\t\t\t\t\t\t";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_3 = ($context["module_custom_cart"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["list"] ?? null) : null));
        foreach ($context['_seq'] as $context["name"] => $context["item"]) {
            echo " 
\t\t\t\t\t\t\t\thtml += '<option value=\"";
            // line 313
            echo $context["name"];
            echo "\" >";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 313);
            echo " ';
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo " 
\t\t\t\t\t\thtml += '</select></td>';

\t\t\t\t\t\thtml += '<td><button type=\"button\" onclick=\"\$(\\'#cart-column-' + cartKey + '\\').remove();\" data-toggle=\"tooltip\" title=\"Удалить\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\t\t\thtml += '</tr>';

\t\t\t\t\t\t\$('#cart-column').append(html);
\t\t\t\t\t\tcartKey++;
\t\t\t\t\t};
\t\t\t\t\t</script>

\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"tab-pane\" id=\"tab-customer\">

\t\t\t\t\t<input type=\"hidden\" name=\"module_custom_customer[status]\" value=\"1\">

\t\t\t\t\t<table id=\"customer-field\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t";
        // line 335
        echo ($context["column_field"] ?? null);
        echo " 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 338
        echo ($context["column_custumer_group"] ?? null);
        echo " 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 341
        echo ($context["column_required"] ?? null);
        echo " 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 344
        echo ($context["column_validation"] ?? null);
        echo " 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"56px\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 350
        $context["customer_key"] = 0;
        // line 351
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["module_custom_customer"] ?? null), "fields", [], "any", false, false, false, 351)) {
            // line 352
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_customer"] ?? null), "fields", [], "any", false, false, false, 352));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 353
                echo "\t\t\t\t\t\t\t<tr id=\"customer-field-";
                echo ($context["customer_key"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"module_custom_customer[fields][";
                // line 355
                echo ($context["customer_key"] ?? null);
                echo "][name]\" id=\"input-customer-fields-";
                echo ($context["customer_key"] ?? null);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                // line 356
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_customer"] ?? null), "list", [], "any", false, false, false, 356));
                foreach ($context['_seq'] as $context["name"] => $context["item"]) {
                    // line 357
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["selected"] = "";
                    // line 358
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 358) == $context["name"])) {
                        // line 359
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["selected"] = "selected=\"selected\"";
                        // line 360
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 361
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["name"];
                    echo "\" ";
                    echo ($context["selected"] ?? null);
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 361);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 363
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 366
                $context["customer_group_row"] = 0;
                // line 367
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 368
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\"><label>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 369
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "customer_group", [], "any", false, false, false, 369) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 369), twig_get_attribute($this->env, $this->source, $context["field"], "customer_group", [], "any", false, false, false, 369)))) {
                        // line 370
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_customer[fields][";
                        echo ($context["customer_key"] ?? null);
                        echo "][customer_group][";
                        echo ($context["customer_group_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 370);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 372
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_customer[fields][";
                        echo ($context["customer_key"] ?? null);
                        echo "][customer_group][";
                        echo ($context["customer_group_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 372);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 374
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 374);
                    echo "
\t\t\t\t\t\t\t\t\t\t</label></div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 376
                    $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
                    // line 377
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 378
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 380
                $context["customer_group_row"] = 0;
                // line 381
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 382
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\"><label>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 383
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 383) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 383), twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 383)))) {
                        // line 384
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_customer[fields][";
                        echo ($context["customer_key"] ?? null);
                        echo "][required][";
                        echo ($context["customer_group_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 384);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 386
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_customer[fields][";
                        echo ($context["customer_key"] ?? null);
                        echo "][required][";
                        echo ($context["customer_group_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 386);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 388
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 388);
                    echo "
\t\t\t\t\t\t\t\t\t\t</label></div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 390
                    $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
                    // line 391
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 392
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_custom_customer[fields][";
                // line 394
                echo ($context["customer_key"] ?? null);
                echo "][validation]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "validation", [], "any", false, false, false, 394);
                echo "\" placeholder=\"";
                echo ($context["entry_validate"] ?? null);
                echo "\" id=\"input-customer-sort\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"jQuery('#customer-field-";
                // line 397
                echo ($context["customer_key"] ?? null);
                echo "').remove()\" data-toggle=\"tooltip\" title=\"";
                echo ($context["entry_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                // line 400
                $context["customer_key"] = (($context["customer_key"] ?? null) + 1);
                // line 401
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 402
            echo "\t\t\t\t\t\t";
        }
        // line 403
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addcustomerField()\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"Добавить поле\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t<script>
\t\t\t\t\t\tvar customerField = ";
        // line 413
        echo ($context["customer_key"] ?? null);
        echo ";
\t\t\t\t\t\tfunction addcustomerField(){

\t\t\t\t\t\t\thtml  = '<tr id=\"customer-field-' + customerField + '\">';
\t\t\t\t\t\t\t
\t\t\t\t\t\t\thtml += '<td><select name=\"module_custom_customer[fields][' + customerField + '][name]\" id=\"input-customer-fields-' + customerField + '\" class=\"form-control\">';
\t\t\t\t\t\t\t\t";
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_customer"] ?? null), "list", [], "any", false, false, false, 419));
        foreach ($context['_seq'] as $context["name"] => $context["item"]) {
            // line 420
            echo "\t\t\t\t\t\t\t\t\thtml += '<option value=\"";
            echo $context["name"];
            echo "\" >";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 420);
            echo "';
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        echo "\t\t\t\t\t\t\thtml += '</select></td>';

\t\t\t\t\t\t\thtml += '<td>';
\t\t\t\t\t\t\t\t";
        // line 425
        $context["customer_group_row"] = 0;
        // line 426
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 427
            echo "\t\t\t\t\t\t\t\t\thtml += '<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_custom_customer[fields][' + customerField + '][customer_group][";
            echo ($context["customer_group_row"] ?? null);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 427);
            echo "\" />";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 427);
            echo "</label></div>';
\t\t\t\t\t\t\t\t\t";
            // line 428
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 429
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "\t\t\t\t\t\t\thtml += '</td>';
\t\t\t\t\t\t\t
\t\t\t\t\t\t\thtml += '<td>';
\t\t\t\t\t\t\t\t";
        // line 433
        $context["customer_group_row"] = 0;
        // line 434
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 435
            echo "\t\t\t\t\t\t\t\t\thtml += '<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_custom_customer[fields][' + customerField + '][required][";
            echo ($context["customer_group_row"] ?? null);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 435);
            echo "\" />";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 435);
            echo "</label></div>';
\t\t\t\t\t\t\t\t\t";
            // line 436
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 437
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "\t\t\t\t\t\t\thtml += '</td>';
\t\t\t\t\t\t\t
\t\t\t\t\t\t\thtml += '<td><input type=\"text\" name=\"module_custom_customer[fields][' + customerField + '][validation]\" placeholder=\"";
        // line 440
        echo ($context["entry_validate"] ?? null);
        echo "\" id=\"input-customer-sort\" class=\"form-control\"/></td>';

\t\t\t\t\t\t\thtml += '<td><button type=\"button\" onclick=\"jQuery(\\'#customer-field-' + customerField + '\\').remove();\" data-toggle=\"tooltip\" title=\"Удалить\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\t\t\t\thtml += '</tr>';

\t\t\t\t\t\t\tjQuery('#customer-field').append(html);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcustomerField++;
\t\t\t\t\t\t};
\t\t\t\t\t</script>

\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"tab-pane\" id=\"tab-shipping\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-status\">";
        // line 456
        echo ($context["entry_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"module_custom_shipping[status]\" id=\"input-shipping-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 459
        if (twig_get_attribute($this->env, $this->source, ($context["module_custom_shipping"] ?? null), "status", [], "any", false, false, false, 459)) {
            // line 460
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 461
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 463
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 464
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 466
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<br>

\t\t\t\t\t<table id=\"shipping-field\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 475
        echo ($context["column_field"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 476
        echo ($context["column_shipping_method"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 477
        echo ($context["column_required"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 478
        echo ($context["column_validation"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td width=\"56px\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 483
        $context["shipping_key"] = 0;
        // line 484
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["module_custom_shipping"] ?? null), "fields", [], "any", false, false, false, 484)) {
            // line 485
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_shipping"] ?? null), "fields", [], "any", false, false, false, 485));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 486
                echo "\t\t\t\t\t\t\t\t<tr id=\"shipping-field-";
                echo ($context["shipping_key"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<select name=\"module_custom_shipping[fields][";
                // line 488
                echo ($context["shipping_key"] ?? null);
                echo "][name]\" id=\"input-shipping-fields-";
                echo ($context["shipping_key"] ?? null);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 489
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_shipping"] ?? null), "list", [], "any", false, false, false, 489));
                foreach ($context['_seq'] as $context["name"] => $context["item"]) {
                    // line 490
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["selected"] = "";
                    // line 491
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 491) == $context["name"])) {
                        // line 492
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["selected"] = "selected=\"selected\"";
                        // line 493
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 494
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["selected"] = (("data-field-name=\"" + twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 494)) + "\"");
                        // line 495
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 496
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["name"];
                    echo "\" ";
                    echo ($context["selected"] ?? null);
                    echo " >";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 496);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 498
                echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 501
                $context["method_row"] = 0;
                // line 502
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_shipping"] ?? null), "methods", [], "any", false, false, false, 502));
                foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                    // line 503
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\"><label>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 504
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "method", [], "any", false, false, false, 504) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 504), twig_get_attribute($this->env, $this->source, $context["field"], "method", [], "any", false, false, false, 504)))) {
                        // line 505
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_shipping[fields][";
                        echo ($context["shipping_key"] ?? null);
                        echo "][method][";
                        echo ($context["method_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 505);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 507
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_shipping[fields][";
                        echo ($context["shipping_key"] ?? null);
                        echo "][method][";
                        echo ($context["method_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 507);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 509
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["method"], "label", [], "any", false, false, false, 509);
                    echo "
\t\t\t\t\t\t\t\t\t\t</label></div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 511
                    $context["method_row"] = (($context["method_row"] ?? null) + 1);
                    // line 512
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 513
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 516
                $context["method_row"] = 0;
                // line 517
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_shipping"] ?? null), "methods", [], "any", false, false, false, 517));
                foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                    // line 518
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\"><label>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 519
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 519) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 519), twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 519)))) {
                        // line 520
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_shipping[fields][";
                        echo ($context["shipping_key"] ?? null);
                        echo "][required][";
                        echo ($context["method_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 520);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 522
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_shipping[fields][";
                        echo ($context["shipping_key"] ?? null);
                        echo "][required][";
                        echo ($context["method_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 522);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 524
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["method"], "label", [], "any", false, false, false, 524);
                    echo "
\t\t\t\t\t\t\t\t\t\t</label></div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 526
                    $context["method_row"] = (($context["method_row"] ?? null) + 1);
                    // line 527
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 528
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_custom_shipping[fields][";
                // line 530
                echo ($context["shipping_key"] ?? null);
                echo "][validation]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "validation", [], "any", false, false, false, 530);
                echo "\" placeholder=\"";
                echo ($context["entry_validate"] ?? null);
                echo "\" id=\"input-shipping-sort\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"jQuery('#shipping-field-";
                // line 533
                echo ($context["shipping_key"] ?? null);
                echo "').remove()\" data-toggle=\"tooltip\" title=\"";
                echo ($context["entry_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                // line 536
                $context["shipping_key"] = (($context["shipping_key"] ?? null) + 1);
                // line 537
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 538
            echo "\t\t\t\t\t\t\t";
        }
        // line 539
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addShippingField()\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"Добавить поле\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t  
\t\t\t\t\t<script>
\t\t\t\t\t\tvar shippingField = ";
        // line 549
        echo ($context["shipping_key"] ?? null);
        echo ";
\t\t\t\t\t\tfunction addShippingField(){

\t\t\t\t\t\t\thtml  = '<tr id=\"shipping-field-' + shippingField + '\">';
\t\t\t\t\t\t\thtml += '<td><select name=\"module_custom_shipping[fields][' + shippingField + '][name]\" id=\"input-shipping-fields-' + shippingField + '\" class=\"form-control\">';
\t\t\t\t\t\t\t\t";
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_shipping"] ?? null), "list", [], "any", false, false, false, 554));
        foreach ($context['_seq'] as $context["name"] => $context["item"]) {
            // line 555
            echo "\t\t\t\t\t\t\t\t\thtml += '<option value=\"";
            echo $context["name"];
            echo "\" >";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 555);
            echo "';
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 557
        echo "\t\t\t\t\t\t\thtml += '</select></td>';

\t\t\t\t\t\t\thtml += '<td>';
\t\t\t\t\t\t\t\t";
        // line 560
        $context["method_row"] = 0;
        // line 561
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_shipping"] ?? null), "methods", [], "any", false, false, false, 561));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 562
            echo "\t\t\t\t\t\t\t\t\thtml += '<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_custom_shipping[fields][' + shippingField + '][method][";
            echo ($context["method_row"] ?? null);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 562);
            echo "\" />";
            echo twig_get_attribute($this->env, $this->source, $context["method"], "label", [], "any", false, false, false, 562);
            echo "</label></div>';
\t\t\t\t\t\t\t\t\t";
            // line 563
            $context["method_row"] = (($context["method_row"] ?? null) + 1);
            // line 564
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 565
        echo "\t\t\t\t\t\t\thtml += '</td>';

\t\t\t\t\t\t\thtml += '<td>';
\t\t\t\t\t\t\t\t";
        // line 568
        $context["method_row"] = 0;
        // line 569
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_shipping"] ?? null), "methods", [], "any", false, false, false, 569));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 570
            echo "\t\t\t\t\t\t\t\t\thtml += '<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_custom_shipping[fields][' + shippingField + '][required][";
            echo ($context["method_row"] ?? null);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 570);
            echo "\" />";
            echo twig_get_attribute($this->env, $this->source, $context["method"], "label", [], "any", false, false, false, 570);
            echo "</label></div>';
\t\t\t\t\t\t\t\t\t";
            // line 571
            $context["method_row"] = (($context["method_row"] ?? null) + 1);
            // line 572
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 573
        echo "\t\t\t\t\t\t\thtml += '</td>';

\t\t\t\t\t\t\thtml += '<td><input type=\"text\" name=\"module_custom_shipping[fields][' + shippingField + '][validation]\" value=\"";
        // line 575
        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "validation", [], "any", false, false, false, 575);
        echo "\" placeholder=\"";
        echo ($context["entry_validate"] ?? null);
        echo "\" id=\"input-shipping-sort\" class=\"form-control\"/></td>';

\t\t\t\t\t\t\thtml += '<td><button type=\"button\" onclick=\"jQuery(\\'#shipping-field-' + shippingField + '\\').remove();\" data-toggle=\"tooltip\" title=\"Удалить\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\t\t\t\thtml += '</tr>';

\t\t\t\t\t\t\tjQuery('#shipping-field').append(html);
\t\t\t\t\t\t\tshippingField++;
\t\t\t\t\t\t\t
\t\t\t\t\t\t};
\t\t\t\t\t</script>

\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"tab-pane\" id=\"tab-payment\">

\t\t\t\t\t<input type=\"hidden\" name=\"module_custom_payment[status]\" value=\"1\">

\t\t\t\t\t<table id=\"payment-methods\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 595
        echo ($context["column_field"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td >";
        // line 596
        echo ($context["column_custumer_group"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td width=\"56px\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 601
        $context["payment_key"] = 0;
        // line 602
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["module_custom_payment"] ?? null), "methods", [], "any", false, false, false, 602)) {
            // line 603
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_payment"] ?? null), "methods", [], "any", false, false, false, 603));
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 604
                echo "\t\t\t\t\t\t\t\t<tr id=\"payment-method-";
                echo ($context["payment_key"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<select name=\"module_custom_payment[methods][";
                // line 606
                echo ($context["payment_key"] ?? null);
                echo "][name]\" id=\"input-customer-method-";
                echo ($context["payment_key"] ?? null);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 607
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_payment"] ?? null), "list", [], "any", false, false, false, 607));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 608
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["selected"] = "";
                    // line 609
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 609) == twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 609))) {
                        // line 610
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["selected"] = "selected=\"selected\"";
                        // line 611
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 612
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 612);
                    echo "\" ";
                    echo ($context["selected"] ?? null);
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 612);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 614
                echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 617
                $context["customer_group_row"] = 0;
                // line 618
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 619
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\"><label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 620
                    if ((twig_get_attribute($this->env, $this->source, $context["method"], "customer_group", [], "any", false, false, false, 620) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 620), twig_get_attribute($this->env, $this->source, $context["method"], "customer_group", [], "any", false, false, false, 620)))) {
                        // line 621
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_payment[methods][";
                        echo ($context["payment_key"] ?? null);
                        echo "][customer_group][";
                        echo ($context["customer_group_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 621);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 623
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_custom_payment[methods][";
                        echo ($context["payment_key"] ?? null);
                        echo "][customer_group][";
                        echo ($context["customer_group_row"] ?? null);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 623);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 625
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 625);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label></div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 627
                    $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
                    // line 628
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 629
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"jQuery('#payment-method-";
                // line 631
                echo ($context["payment_key"] ?? null);
                echo "').remove()\" data-toggle=\"tooltip\" title=\"";
                echo ($context["entry_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                // line 634
                $context["payment_key"] = (($context["payment_key"] ?? null) + 1);
                // line 635
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 636
            echo "\t\t\t\t\t\t\t";
        }
        // line 637
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addPaymentMethod()\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"Добавить поле\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>

\t\t\t\t\t<script>
\t\t\t\t\tvar payment_key = ";
        // line 647
        echo ($context["payment_key"] ?? null);
        echo ";
\t\t\t\t\tfunction addPaymentMethod(){

\t\t\t\t\t\thtml  = '<tr id=\"payment-method-' + payment_key + '\">';
\t\t\t\t\t\thtml += '<td><select name=\"module_custom_payment[methods][' + payment_key + '][name]\" id=\"input-payment-method-' + payment_key + '\" class=\"form-control\">';
\t\t\t\t\t\t\t";
        // line 652
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["module_custom_payment"] ?? null), "list", [], "any", false, false, false, 652));
        foreach ($context['_seq'] as $context["name"] => $context["item"]) {
            // line 653
            echo "\t\t\t\t\t\t\t\thtml += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 653);
            echo "\" >";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 653);
            echo "';
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 655
        echo "\t\t\t\t\t\thtml += '</select></td>';

\t\t\t\t\t\thtml += '<td>';
\t\t\t\t\t\t\t";
        // line 658
        $context["customer_group_row"] = 0;
        // line 659
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 660
            echo "\t\t\t\t\t\t\t\thtml += '<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_custom_payment[methods][' + payment_key + '][customer_group][";
            echo ($context["customer_group_row"] ?? null);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 660);
            echo "\" />";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 660);
            echo "</label></div>';
\t\t\t\t\t\t\t\t";
            // line 661
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 662
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 663
        echo "\t\t\t\t\t\thtml += '</td>';

\t\t\t\t\t\thtml += '<td><button type=\"button\" onclick=\"jQuery(\\'#payment-method-' + payment_key + '\\').remove();\" data-toggle=\"tooltip\" title=\"Удалить\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\t\t\thtml += '</tr>';

\t\t\t\t\t\tjQuery('#payment-methods').append(html);
\t\t\t\t\t\tpayment_key++;
\t\t\t\t\t};
\t\t\t\t\t</script>

\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"tab-pane\" id=\"tab-comment\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-comment-status\">";
        // line 677
        echo ($context["entry_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"module_custom_comment[status]\" id=\"input-comment-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 680
        if (twig_get_attribute($this->env, $this->source, ($context["module_custom_comment"] ?? null), "status", [], "any", false, false, false, 680)) {
            // line 681
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 682
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 684
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 685
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 687
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>  
\t\t\t\t
\t\t\t\t<div class=\"tab-pane\" id=\"tab-module\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-module-status\">";
        // line 694
        echo ($context["entry_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"module_custom_module[status]\" id=\"input-module-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 697
        if (twig_get_attribute($this->env, $this->source, ($context["module_custom_module"] ?? null), "status", [], "any", false, false, false, 697)) {
            // line 698
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 699
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 701
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 702
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 704
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>  

\t\t\t\t<div class=\"tab-pane\" id=\"tab-total\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total-status\">";
        // line 711
        echo ($context["entry_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"module_custom_total[status]\" id=\"input-total-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 714
        if (twig_get_attribute($this->env, $this->source, ($context["module_custom_total"] ?? null), "status", [], "any", false, false, false, 714)) {
            // line 715
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 716
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 718
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 719
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 721
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>  

\t\t\t\t<div class=\"tab-pane\" id=\"tab-about\">
\t\t\t\t\t<p>";
        // line 727
        echo ($context["version"] ?? null);
        echo "</p>
\t\t\t\t\t<p>";
        // line 728
        echo ($context["about_module"] ?? null);
        echo "</p>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t\t
\t    </form>
      </div> 
    </div>    
   
\t
  </div>
</div>
";
        // line 740
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "extension/module/custom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1544 => 740,  1529 => 728,  1525 => 727,  1517 => 721,  1512 => 719,  1507 => 718,  1502 => 716,  1497 => 715,  1495 => 714,  1489 => 711,  1480 => 704,  1475 => 702,  1470 => 701,  1465 => 699,  1460 => 698,  1458 => 697,  1452 => 694,  1443 => 687,  1438 => 685,  1433 => 684,  1428 => 682,  1423 => 681,  1421 => 680,  1415 => 677,  1399 => 663,  1393 => 662,  1391 => 661,  1382 => 660,  1377 => 659,  1375 => 658,  1370 => 655,  1359 => 653,  1355 => 652,  1347 => 647,  1335 => 637,  1332 => 636,  1326 => 635,  1324 => 634,  1316 => 631,  1312 => 629,  1306 => 628,  1304 => 627,  1298 => 625,  1288 => 623,  1278 => 621,  1276 => 620,  1273 => 619,  1268 => 618,  1266 => 617,  1261 => 614,  1248 => 612,  1245 => 611,  1242 => 610,  1239 => 609,  1236 => 608,  1232 => 607,  1226 => 606,  1220 => 604,  1215 => 603,  1212 => 602,  1210 => 601,  1202 => 596,  1198 => 595,  1173 => 575,  1169 => 573,  1163 => 572,  1161 => 571,  1152 => 570,  1147 => 569,  1145 => 568,  1140 => 565,  1134 => 564,  1132 => 563,  1123 => 562,  1118 => 561,  1116 => 560,  1111 => 557,  1100 => 555,  1096 => 554,  1088 => 549,  1076 => 539,  1073 => 538,  1067 => 537,  1065 => 536,  1057 => 533,  1047 => 530,  1043 => 528,  1037 => 527,  1035 => 526,  1029 => 524,  1019 => 522,  1009 => 520,  1007 => 519,  1004 => 518,  999 => 517,  997 => 516,  992 => 513,  986 => 512,  984 => 511,  978 => 509,  968 => 507,  958 => 505,  956 => 504,  953 => 503,  948 => 502,  946 => 501,  941 => 498,  928 => 496,  925 => 495,  922 => 494,  919 => 493,  916 => 492,  913 => 491,  910 => 490,  906 => 489,  900 => 488,  894 => 486,  889 => 485,  886 => 484,  884 => 483,  876 => 478,  872 => 477,  868 => 476,  864 => 475,  853 => 466,  848 => 464,  843 => 463,  838 => 461,  833 => 460,  831 => 459,  825 => 456,  806 => 440,  802 => 438,  796 => 437,  794 => 436,  785 => 435,  780 => 434,  778 => 433,  773 => 430,  767 => 429,  765 => 428,  756 => 427,  751 => 426,  749 => 425,  744 => 422,  733 => 420,  729 => 419,  720 => 413,  708 => 403,  705 => 402,  699 => 401,  697 => 400,  689 => 397,  679 => 394,  675 => 392,  669 => 391,  667 => 390,  661 => 388,  651 => 386,  641 => 384,  639 => 383,  636 => 382,  631 => 381,  629 => 380,  625 => 378,  619 => 377,  617 => 376,  611 => 374,  601 => 372,  591 => 370,  589 => 369,  586 => 368,  581 => 367,  579 => 366,  574 => 363,  561 => 361,  558 => 360,  555 => 359,  552 => 358,  549 => 357,  545 => 356,  539 => 355,  533 => 353,  528 => 352,  525 => 351,  523 => 350,  514 => 344,  508 => 341,  502 => 338,  496 => 335,  473 => 314,  463 => 313,  457 => 312,  449 => 307,  436 => 296,  432 => 295,  424 => 294,  416 => 291,  410 => 287,  397 => 285,  393 => 283,  388 => 282,  384 => 281,  379 => 279,  372 => 277,  366 => 276,  361 => 274,  355 => 273,  351 => 272,  347 => 271,  338 => 265,  325 => 254,  320 => 253,  316 => 252,  313 => 251,  308 => 250,  304 => 249,  300 => 248,  294 => 245,  290 => 243,  282 => 239,  280 => 238,  270 => 230,  265 => 229,  261 => 228,  258 => 227,  253 => 226,  249 => 225,  245 => 224,  237 => 221,  229 => 215,  216 => 69,  208 => 63,  203 => 62,  199 => 61,  196 => 60,  191 => 59,  187 => 58,  183 => 57,  177 => 54,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  124 => 34,  117 => 30,  112 => 27,  105 => 24,  101 => 23,  98 => 22,  91 => 19,  87 => 18,  80 => 13,  70 => 12,  64 => 11,  59 => 9,  53 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/custom.twig", "");
    }
}
