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

/* Master/EditView.html.twig */
class __TwigTemplate_330b0a6a1a5ab072c4222d1947d69a83abf113b95897e762de27d6561f56fd16 extends Template
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
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["action"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 21), "exists", [], "method", false, false, false, 21)) ? ("edit") : ("insert"));
        // line 22
        $context["fieldCount"] = 0;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 24
            echo "    ";
            $context["fieldCount"] = (($context["fieldCount"] ?? null) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "columns", [], "any", false, false, false, 24)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
<script>
    function editViewDelete(viewName) {
        bootbox.confirm({
            title: \"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["confirm-delete"], "method", false, false, false, 30), "html", null, true);
        echo "\",
            message: \"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["are-you-sure"], "method", false, false, false, 31), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["cancel"], "method", false, false, false, 35), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["confirm"], "method", false, false, false, 38), "html", null, true);
        echo "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#form\" + viewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#form\" + viewName).submit();
                }
            }
        });

        return false;
    }
</script>

";
        // line 55
        echo "<div class=\"row\">
    ";
        // line 56
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 56);
        // line 57
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 57), "", ($context["fsc"] ?? null)], "method", false, false, false, 57);
        echo "
</div>

<form id=\"form";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 60), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"action\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 62), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 63), "primaryColumnValue", [], "method", false, false, false, 63), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 64), "newToken", [], "method", false, false, false, 64), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 65
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 65), "card", [], "any", false, false, false, 65)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 66
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 66), "card", [], "any", false, false, false, 66)) ? ("card-body") : ("container-fluid"));
        echo "\">
            <div class=\"row\">
                <div class=\"col-12 text-right\">
                    ";
        // line 70
        echo "                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 70);
        // line 71
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [($context["fsc"] ?? null)], "method", false, false, false, 71);
        echo "
                    ";
        // line 72
        if (((1 === twig_compare(($context["fieldCount"] ?? null), 30)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 72), "btnSave", [], "any", false, false, false, 72))) {
            // line 73
            echo "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["save"], "method", false, false, false, 75), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 78
        echo "                </div>
            </div>
            <div class=\"form-row\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 82
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 82)], "method", false, false, false, 82);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </div>
            <div class=\"row\">
                ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 86) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 86), "btnDelete", [], "any", false, false, false, 86))) {
            // line 87
            echo "                    <div class=\"col-auto\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                onclick=\"editViewDelete('";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 89), "html", null, true);
            echo "');\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["delete"], "method", false, false, false, 91), "html", null, true);
            echo "</span>
                        </button>
                    </div>
                ";
        }
        // line 95
        echo "                ";
        $context["extraClass"] = (((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 95) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 95), "btnDelete", [], "any", false, false, false, 95))) ? ("text-center") : (""));
        // line 96
        echo "                <div class=\"col ";
        echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 98
        echo "                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 98);
        // line 99
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [false, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 99)], "method", false, false, false, 99);
        echo "
                </div>
                <div class=\"col-auto\">
                    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 102), "btnUndo", [], "any", false, false, false, 102)) {
            // line 103
            echo "                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["undo"], "method", false, false, false, 105), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 108
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 108), "btnSave", [], "any", false, false, false, 108)) {
            // line 109
            echo "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["save"], "method", false, false, false, 111), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 114
        echo "                </div>
            </div>
        </div>
    </div>
</form>

<br/>

";
        // line 123
        echo "<div class=\"row\">
    ";
        // line 124
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 124);
        // line 125
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 125), "", ($context["fsc"] ?? null)], "method", false, false, false, 125);
        echo "
</div>

";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 130
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 130), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 130)], "method", false, false, false, 130);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 130,  263 => 129,  256 => 125,  254 => 124,  251 => 123,  241 => 114,  235 => 111,  231 => 109,  228 => 108,  222 => 105,  218 => 103,  216 => 102,  209 => 99,  206 => 98,  201 => 96,  198 => 95,  191 => 91,  186 => 89,  182 => 87,  180 => 86,  176 => 84,  167 => 82,  163 => 81,  158 => 78,  152 => 75,  148 => 73,  146 => 72,  141 => 71,  138 => 70,  132 => 66,  128 => 65,  124 => 64,  120 => 63,  116 => 62,  112 => 61,  108 => 60,  101 => 57,  99 => 56,  96 => 55,  77 => 38,  71 => 35,  64 => 31,  60 => 30,  54 => 26,  47 => 24,  43 => 23,  41 => 22,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2023 Carlos Garcia Gomez <carlos@facturascripts.com>
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
{% set currentView = fsc.getCurrentView() %}
{% set action = currentView.model.exists() ? 'edit' : 'insert' %}
{% set fieldCount = 0 %}
{% for group in currentView.getColumns() %}
    {% set fieldCount = fieldCount + group.columns | length %}
{% endfor %}

<script>
    function editViewDelete(viewName) {
        bootbox.confirm({
            title: \"{{ i18n.trans('confirm-delete') }}\",
            message: \"{{ i18n.trans('are-you-sure') }}\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> {{ i18n.trans('cancel') }}'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> {{ i18n.trans('confirm') }}',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#form\" + viewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#form\" + viewName).submit();
                }
            }
        });

        return false;
    }
</script>

{# -- Row header -- #}
<div class=\"row\">
    {% set row = currentView.getRow('header') %}
    {{ row.render(currentView.getViewName(), '', fsc) | raw }}
</div>

<form id=\"form{{ currentView.getViewName() }}\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"action\" value=\"{{ action }}\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
    <input type=\"hidden\" name=\"code\" value=\"{{ currentView.model.primaryColumnValue() }}\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken() }}\"/>
    <div class=\"{{ currentView.settings.card ? 'card shadow' : '' }}\">
        <div class=\"{{ currentView.settings.card ? 'card-body' : 'container-fluid' }}\">
            <div class=\"row\">
                <div class=\"col-12 text-right\">
                    {# -- Row statistics -- #}
                    {% set row = currentView.getRow('statistics') %}
                    {{ row.render(fsc) | raw }}
                    {% if fieldCount > 30 and currentView.settings.btnSave %}
                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('save') }}</span>
                        </button>
                    {% endif %}
                </div>
            </div>
            <div class=\"form-row\">
                {% for group in currentView.getColumns() %}
                    {{ group.edit(currentView.model) | raw }}
                {% endfor %}
            </div>
            <div class=\"row\">
                {% if fsc.hasData and currentView.settings.btnDelete %}
                    <div class=\"col-auto\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                onclick=\"editViewDelete('{{ currentView.getViewName() }}');\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('delete') }}</span>
                        </button>
                    </div>
                {% endif %}
                {% set extraClass = fsc.hasData and currentView.settings.btnDelete ? 'text-center' : '' %}
                <div class=\"col {{ extraClass }}\">
                    {# -- Row actions -- #}
                    {% set row = currentView.getRow('actions') %}
                    {{ row.render(false, currentView.getViewName()) | raw }}
                </div>
                <div class=\"col-auto\">
                    {% if currentView.settings.btnUndo %}
                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('undo') }}</span>
                        </button>
                    {% endif %}
                    {% if currentView.settings.btnSave %}
                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('save') }}</span>
                        </button>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</form>

<br/>

{# -- Row footer -- #}
<div class=\"row\">
    {% set row = currentView.getRow('footer') %}
    {{ row.render(currentView.getViewName(), '', fsc) | raw }}
</div>

{# -- Modals -- #}
{% for group in currentView.getModals() %}
    {{ group.modal(currentView.model, currentView.getViewName()) | raw }}
{% endfor %}
", "Master/EditView.html.twig", "C:\\xampp\\htdocs\\sistema2\\Core\\View\\Master\\EditView.html.twig");
    }
}
