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

/* ReportTransport.html.twig */
class __TwigTemplate_df74d1e644b17cf96eeed1ab97e50d3ebca921fdaff0ca655d3660b311cf1a9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "ReportTransport.html.twig", 7)->unwrap();
        // line 6
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "ReportTransport.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <br/>
    <br/>
    <br/>
    <br/>
";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\" style=\"margin-top: -70px;\">
        <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 20), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"action\" value=\"export\">
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 22), "newToken", [], "method", false, false, false, 22), "html", null, true);
        echo "\"/>
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h1 class=\"h3 mb-4\">
                        <i class=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 26), "icon", [], "any", false, false, false, 26), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
        echo "
                    </h1>
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                ";
        // line 31
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["modelname", "modelname", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "modelname", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source,         // line 32
($context["fsc"] ?? null), "getModelType", [], "method", false, false, false, 32), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["document"], "method", false, false, false, 32)], 31, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\" for=\"date\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["date"], "method", false, false, false, 37), "html", null, true);
        echo "</label>
                                <input type=\"date\" id=\"date\" name=\"date\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "date", [], "any", false, false, false, 38), "html", null, true);
        echo "\" class=\"form-control\" required>
                            </div>
                        </div>
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                ";
        // line 43
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codalmacen", "codalmacen", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "codalmacen", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source,         // line 44
($context["fsc"] ?? null), "getSelectValues", ["almacenes", "codalmacen", "nombre", true], "method", false, false, false, 44), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["warehouse"], "method", false, false, false, 44)], 43, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                ";
        // line 49
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codtrans", "codtrans", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "codtrans", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source,         // line 50
($context["fsc"] ?? null), "getSelectValues", ["agenciastrans", "codtrans", "nombre", true], "method", false, false, false, 50), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["carrier"], "method", false, false, false, 50)], 49, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                ";
        // line 55
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["format", "format", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "format", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source,         // line 56
($context["fsc"] ?? null), "getFormatExport", [], "method", false, false, false, 56), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["format"], "method", false, false, false, 56)], 55, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-eye mr-2\"></i>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["show"], "method", false, false, false, 63), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ReportTransport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 63,  137 => 56,  136 => 55,  128 => 50,  127 => 49,  119 => 44,  118 => 43,  110 => 38,  106 => 37,  98 => 32,  97 => 31,  87 => 26,  80 => 22,  75 => 20,  69 => 18,  65 => 17,  54 => 10,  50 => 9,  45 => 6,  43 => 7,  36 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
* Copyright (C) 2022 Carlos Garcia Gomez <carlos@facturascripts.com>
* Author Daniel Fernández Giménez <hola@danielfg.es>
#}

{% extends \"Master/MenuBghTemplate.html.twig\" %}
{% import 'Macro/Forms.html.twig' as forms %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    <br/>
    <br/>
    <br/>
    <br/>
{% endblock %}

{% block body %}
    {{ parent() }}
    <div class=\"container\" style=\"margin-top: -70px;\">
        <form action=\"{{ fsc.url() }}\" method=\"post\">
            <input type=\"hidden\" name=\"action\" value=\"export\">
            <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken() }}\"/>
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h1 class=\"h3 mb-4\">
                        <i class=\"{{ fsc.getPageData().icon }}\"></i> {{ fsc.title }}
                    </h1>
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('modelname', 'modelname', fsc.modelname,
                                    fsc.getModelType(), i18n.trans('document')) }}
                            </div>
                        </div>
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\" for=\"date\">{{ i18n.trans('date') }}</label>
                                <input type=\"date\" id=\"date\" name=\"date\" value=\"{{ fsc.date }}\" class=\"form-control\" required>
                            </div>
                        </div>
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('codalmacen', 'codalmacen', fsc.codalmacen,
                                    fsc.getSelectValues('almacenes', 'codalmacen', 'nombre', true), i18n.trans('warehouse')) }}
                            </div>
                        </div>
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('codtrans', 'codtrans', fsc.codtrans,
                                    fsc.getSelectValues('agenciastrans', 'codtrans', 'nombre', true), i18n.trans('carrier')) }}
                            </div>
                        </div>
                        <div class=\"col-12 col-md\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('format', 'format', fsc.format,
                                    fsc.getFormatExport(), i18n.trans('format')) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-eye mr-2\"></i>{{ i18n.trans('show') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
{% endblock %}", "ReportTransport.html.twig", "C:\\xampp\\htdocs\\public\\Plugins\\Informes\\View\\ReportTransport.html.twig");
    }
}
