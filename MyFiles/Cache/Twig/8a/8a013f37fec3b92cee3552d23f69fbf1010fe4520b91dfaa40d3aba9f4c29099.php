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

/* Wizard.html.twig */
class __TwigTemplate_e0862411e13f0aeb065c4457d4a974db7569b6a2a059e69b3fae0233380f0a42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"bg-primary pt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 27
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
    </div>
";
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <!-- Macros Template Imports -->
    ";
        // line 39
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard.html.twig", 39)->unwrap();
        // line 40
        echo "    ";
        $context["ciudad"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 40)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 40), "ciudad", [], "any", false, false, false, 40)) : (""));
        // line 41
        echo "    ";
        $context["codpais"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 41)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 41), "codpais", [], "any", false, false, false, 41)) : (twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", ["default", "codpais", "ESP"], "method", false, false, false, 41)));
        // line 42
        echo "    ";
        $context["provincia"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 42)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 42), "provincia", [], "any", false, false, false, 42)) : (""));
        // line 43
        echo "
    <div class=\"container\" style=\"margin-top: -100px;\">
        <div class=\"card shadow mb-5\">
            <div class=\"card-body\">
                <h1 class=\"h3\">
                    <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["wizard"], "method", false, false, false, 48), "html", null, true);
        echo "
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 49), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\"
                       title=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["refresh"], "method", false, false, false, 50), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["wizard-p"], "method", false, false, false, 54), "html", null, true);
        echo "</p>
                <hr/>
                <form method=\"post\" class=\"form\" id=\"formWizard\">
                    <input type=\"hidden\" name=\"action\" value=\"step1\"/>
                    ";
        // line 58
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
                    <div class=\"form-row\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 62
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["empresa", "empresa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 62), "nombre", [], "any", false, false, false, 62), "text", twig_get_attribute($this->env, $this->source,         // line 63
($context["i18n"] ?? null), "trans", ["company-name"], "method", false, false, false, 63), "", ["autofocus" => "", "maxlength" => "100", "required" => ""]], 62, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["type"], "method", false, false, false, 68), "html", null, true);
        echo "</label>
                                <select name=\"personafisica\" class=\"form-control\">
                                    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 70), "personafisica", [], "any", false, false, false, 70)) {
            // line 71
            echo "                                        <option value=\"1\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["is-person"], "method", false, false, false, 71), "html", null, true);
            echo "</option>
                                        <option value=\"0\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["company"], "method", false, false, false, 72), "html", null, true);
            echo "</option>
                                    ";
        } else {
            // line 74
            echo "                                        <option value=\"1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["is-person"], "method", false, false, false, 74), "html", null, true);
            echo "</option>
                                        <option value=\"0\" selected>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["company"], "method", false, false, false, 75), "html", null, true);
            echo "</option>
                                    ";
        }
        // line 77
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 82
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["tipoidfiscal", "tipoidfiscal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 82), "tipoidfiscal", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source,         // line 83
($context["fsc"] ?? null), "getSelectValues", ["IdentificadorFiscal", true], "method", false, false, false, 83), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["fiscal-id"], "method", false, false, false, 83)], 82, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 88
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["cifnif", "cifnif", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 88), "cifnif", [], "any", false, false, false, 88), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["fiscal-number"], "method", false, false, false, 88), "", ["maxlength" => "30"]], 88, $context, $this->getSourceContext());
        // line 89
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 94
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["direccion", "direccion", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 94), "direccion", [], "any", false, false, false, 94), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["address"], "method", false, false, false, 94), "fas fa-map-marked", ["maxlength" => "100"]], 94, $context, $this->getSourceContext());
        // line 95
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 100
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["apartado", "apartado", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 100), "apartado", [], "any", false, false, false, 100), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["post-office-box"], "method", false, false, false, 100), null, ["maxlength" => "10", "placeholder" => twig_get_attribute($this->env, $this->source,         // line 101
($context["i18n"] ?? null), "trans", ["optional"], "method", false, false, false, 101)]], 100, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 106
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["codpostal", "codpostal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 106), "codpostal", [], "any", false, false, false, 106), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["zip-code"], "method", false, false, false, 106), null, ["maxlength" => "10"]], 106, $context, $this->getSourceContext());
        // line 107
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 112
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["ciudad", "ciudad", ($context["ciudad"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["city"], "method", false, false, false, 112), "", ["maxlength" => "100"]], 112, $context, $this->getSourceContext());
        // line 113
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 118
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["provincia", "provincia", ($context["provincia"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["province"], "method", false, false, false, 118), "", ["maxlength" => "100"]], 118, $context, $this->getSourceContext());
        // line 119
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 124
        if (twig_constant_is_defined("FS_INITIAL_CODPAIS")) {
            // line 125
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", ["Pais"], "method", false, false, false, 125), twig_get_attribute($this->env, $this->source,             // line 126
($context["i18n"] ?? null), "trans", ["country"], "method", false, false, false, 126), "fas fa-globe-americas", ["disabled" => ""]], 125, $context, $this->getSourceContext());
            echo "
                                ";
        } else {
            // line 128
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", ["Pais"], "method", false, false, false, 128), twig_get_attribute($this->env, $this->source,             // line 129
($context["i18n"] ?? null), "trans", ["country"], "method", false, false, false, 129), "fas fa-globe-americas"], 128, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 131
        echo "                            </div>
                        </div>
                        ";
        // line 133
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 133), "email", [], "any", false, false, false, 133)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 133), "email", [], "any", false, false, false, 133)))) {
            // line 134
            echo "                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    ";
            // line 136
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["email", "email", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 136), "email", [], "any", false, false, false, 136), "email", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["email"], "method", false, false, false, 136), "fas fa-envelope", ["required" => "", "class" => "form-control"]], 136, $context, $this->getSourceContext());
            // line 137
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 141
        echo "                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 143
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono1", "telefono1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 143), "telefono1", [], "any", false, false, false, 143), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["phone"], "method", false, false, false, 143), "fas fa-phone", ["maxlength" => "30"]], 143, $context, $this->getSourceContext());
        // line 144
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 149
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono2", "telefono2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 149), "telefono2", [], "any", false, false, false, 149), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["phone2"], "method", false, false, false, 149), "fas fa-mobile-alt", ["maxlength" => "30"]], 149, $context, $this->getSourceContext());
        // line 150
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 154
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 154), "verifyPassword", ["admin"], "method", false, false, false, 154)) {
            // line 155
            echo "                        <div class=\"form-row\">
                            <div class=\"col mt-3\">
                                <h3 class=\"h4 text-info\">
                                    <i class=\"fas fa-key\"
                                       aria-hidden=\"true\"></i> ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["you-should-change-passwd"], "method", false, false, false, 159), "html", null, true);
            echo "
                                </h3>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"col-sm-4\">
                                ";
            // line 165
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["user", "user", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 165), "nick", [], "any", false, false, false, 165), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["user"], "method", false, false, false, 165), "fas fa-user", ["readonly" => ""]], 165, $context, $this->getSourceContext());
            echo "
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    ";
            // line 169
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["password", "password", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["new-password"], "method", false, false, false, 169), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source,             // line 170
($context["i18n"] ?? null), "trans", ["optional"], "method", false, false, false, 170)]], 169, $context, $this->getSourceContext());
            echo "
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    ";
            // line 175
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["repassword", "repassword", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["repeat-new-password"], "method", false, false, false, 175), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source,             // line 176
($context["i18n"] ?? null), "trans", ["optional"], "method", false, false, false, 176)]], 175, $context, $this->getSourceContext());
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 181
        echo "                    <div class=\"text-right\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"btnWizard\">
                            ";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["continue"], "method", false, false, false, 183), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <br/>
    </div>
";
    }

    // line 193
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 198
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 199
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/JS/Custom.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$(\"#formWizard\").submit(function () {
                \$(\"#btnWizard\").prop('disabled', true);
                \$(\"#btnWizard\").html('<i class=\"fas fa-circle-notch fa-spin\"></i>');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 201,  370 => 200,  365 => 199,  361 => 198,  355 => 195,  350 => 194,  346 => 193,  333 => 183,  329 => 181,  321 => 176,  320 => 175,  312 => 170,  311 => 169,  304 => 165,  295 => 159,  289 => 155,  287 => 154,  281 => 150,  279 => 149,  272 => 144,  270 => 143,  266 => 141,  260 => 137,  258 => 136,  254 => 134,  252 => 133,  248 => 131,  243 => 129,  241 => 128,  236 => 126,  234 => 125,  232 => 124,  225 => 119,  223 => 118,  216 => 113,  214 => 112,  207 => 107,  205 => 106,  197 => 101,  196 => 100,  189 => 95,  187 => 94,  180 => 89,  178 => 88,  170 => 83,  169 => 82,  162 => 77,  157 => 75,  152 => 74,  147 => 72,  142 => 71,  140 => 70,  135 => 68,  127 => 63,  126 => 62,  119 => 58,  112 => 54,  105 => 50,  101 => 49,  97 => 48,  90 => 43,  87 => 42,  84 => 41,  81 => 40,  79 => 39,  76 => 38,  72 => 37,  59 => 27,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2022 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see http://www.gnu.org/licenses/.
 */
#}
{% extends \"Master/MicroTemplate.html.twig\" %}

{% block messages %}
    <div class=\"bg-primary pt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    {{ parent() }}
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
    </div>
{% endblock %}

{% block body %}
    <!-- Macros Template Imports -->
    {% import 'Macro/Forms.html.twig' as forms %}
    {% set ciudad = fsc.empresa ? fsc.empresa.ciudad : '' %}
    {% set codpais = fsc.empresa ? fsc.empresa.codpais : appSettings.get('default', 'codpais', 'ESP') %}
    {% set provincia = fsc.empresa ? fsc.empresa.provincia : '' %}

    <div class=\"container\" style=\"margin-top: -100px;\">
        <div class=\"card shadow mb-5\">
            <div class=\"card-body\">
                <h1 class=\"h3\">
                    <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> {{ i18n.trans('wizard') }}
                    <a href=\"{{ fsc.url() }}\" class=\"btn btn-sm btn-outline-secondary\"
                       title=\"{{ i18n.trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>{{ i18n.trans('wizard-p') }}</p>
                <hr/>
                <form method=\"post\" class=\"form\" id=\"formWizard\">
                    <input type=\"hidden\" name=\"action\" value=\"step1\"/>
                    {{ formToken() }}
                    <div class=\"form-row\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleInput('empresa', 'empresa', fsc.empresa.nombre, 'text',
                                    i18n.trans('company-name'), '', {'autofocus': '', 'maxlength': '100', 'required': ''}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">{{ i18n.trans('type') }}</label>
                                <select name=\"personafisica\" class=\"form-control\">
                                    {% if fsc.empresa.personafisica %}
                                        <option value=\"1\" selected>{{ i18n.trans('is-person') }}</option>
                                        <option value=\"0\">{{ i18n.trans('company') }}</option>
                                    {% else %}
                                        <option value=\"1\">{{ i18n.trans('is-person') }}</option>
                                        <option value=\"0\" selected>{{ i18n.trans('company') }}</option>
                                    {% endif %}
                                </select>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('tipoidfiscal', 'tipoidfiscal', fsc.empresa.tipoidfiscal,
                                    fsc.getSelectValues('IdentificadorFiscal', true), i18n.trans('fiscal-id')) }}
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleInput('cifnif', 'cifnif', fsc.empresa.cifnif, 'text', i18n.trans('fiscal-number'),
                                    '', {'maxlength': '30'}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ forms.simpleInput('direccion', 'direccion', fsc.empresa.direccion, 'text', i18n.trans('address'),
                                    'fas fa-map-marked', {'maxlength': '100'}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleInput('apartado', 'apartado', fsc.empresa.apartado, 'text', i18n.trans('post-office-box'),
                                    NULL, {'maxlength': '10', 'placeholder': i18n.trans('optional')}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleInput('codpostal', 'codpostal', fsc.empresa.codpostal, 'text', i18n.trans('zip-code'),
                                    NULL, {'maxlength': '10'}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                {{ forms.simpleInput('ciudad', 'ciudad', ciudad, 'text', i18n.trans('city'), '',
                                    {'maxlength': '100'}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                {{ forms.simpleInput('provincia', 'provincia', provincia, 'text', i18n.trans('province'),
                                    '', {'maxlength': '100'}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                {% if constant('FS_INITIAL_CODPAIS') is defined %}
                                    {{ forms.simpleSelect('codpais', 'codpais', codpais, fsc.getSelectValues('Pais'),
                                        i18n.trans('country'), 'fas fa-globe-americas', {'disabled': ''}) }}
                                {% else %}
                                    {{ forms.simpleSelect('codpais', 'codpais', codpais, fsc.getSelectValues('Pais'),
                                        i18n.trans('country'), 'fas fa-globe-americas') }}
                                {% endif %}
                            </div>
                        </div>
                        {% if fsc.empresa.email is empty or fsc.user.email is empty %}
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    {{ forms.simpleInput('email', 'email', fsc.empresa.email, 'email', i18n.trans('email'),
                                        'fas fa-envelope', {'required': '', 'class': 'form-control'}) }}
                                </div>
                            </div>
                        {% endif %}
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                {{ forms.simpleInput('telefono1', 'telefono1', fsc.empresa.telefono1, 'text', i18n.trans('phone'),
                                    'fas fa-phone', {'maxlength': '30'}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                {{ forms.simpleInput('telefono2', 'telefono2', fsc.empresa.telefono2, 'text', i18n.trans('phone2'),
                                    'fas fa-mobile-alt', {'maxlength': '30'}) }}
                            </div>
                        </div>
                    </div>
                    {% if fsc.user.verifyPassword('admin') %}
                        <div class=\"form-row\">
                            <div class=\"col mt-3\">
                                <h3 class=\"h4 text-info\">
                                    <i class=\"fas fa-key\"
                                       aria-hidden=\"true\"></i> {{ i18n.trans('you-should-change-passwd') }}
                                </h3>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"col-sm-4\">
                                {{ forms.simpleInput('user', 'user', fsc.user.nick, 'text', i18n.trans('user'), 'fas fa-user', {'readonly': ''}) }}
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    {{ forms.simpleInput('password', 'password', '', 'password', i18n.trans('new-password'), 'fas fa-key',
                                        {'class': 'form-control', 'placeholder': i18n.trans('optional')}) }}
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    {{ forms.simpleInput('repassword', 'repassword', '', 'password', i18n.trans('repeat-new-password'),
                                        'fas fa-key', {'class': 'form-control', 'placeholder': i18n.trans('optional')}) }}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"text-right\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"btnWizard\">
                            {{ i18n.trans('continue') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <br/>
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('Dinamic/Assets/CSS/custom.css') }}\"/>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('node_modules/pace-js/pace.min.js') }}\"></script>
    <script src=\"{{ asset('Dinamic/Assets/JS/Custom.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            \$(\"#formWizard\").submit(function () {
                \$(\"#btnWizard\").prop('disabled', true);
                \$(\"#btnWizard\").html('<i class=\"fas fa-circle-notch fa-spin\"></i>');
            });
        });
    </script>
{% endblock %}", "Wizard.html.twig", "C:\\xampp\\htdocs\\sistema2\\Core\\View\\Wizard.html.twig");
    }
}
