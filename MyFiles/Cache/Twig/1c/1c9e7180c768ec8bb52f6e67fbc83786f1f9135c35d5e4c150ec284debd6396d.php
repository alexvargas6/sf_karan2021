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

/* Master/EditListView.html.twig */
class __TwigTemplate_3aa578e9b101e2bdbb8271dfc0d42cfd3ca273b46429ce6725f9f2f53f2296c2 extends Template
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
        echo "
<script>
    var editListViewDeleteCancel = \"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["cancel"], "method", false, false, false, 23), "html", null, true);
        echo "\";
    var editListViewDeleteConfirm = \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["confirm"], "method", false, false, false, 24), "html", null, true);
        echo "\";
    var editListViewDeleteMessage = \"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["are-you-sure"], "method", false, false, false, 25), "html", null, true);
        echo "\";
    var editListViewDeleteTitle = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["confirm-delete"], "method", false, false, false, 26), "html", null, true);
        echo "\";
</script>

<div class=\"";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 29), "card", [], "any", false, false, false, 29)) ? ("") : ("container-fluid"));
        echo "\">
    ";
        // line 31
        echo "    <div class=\"row\">
        ";
        // line 32
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 32);
        // line 33
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 33), "", ($context["fsc"] ?? null)], "method", false, false, false, 33);
        echo "
    </div>

    ";
        // line 37
        echo "    <div>
        ";
        // line 38
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 38);
        // line 39
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [($context["fsc"] ?? null)], "method", false, false, false, 39);
        echo "
    </div>

    ";
        // line 43
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "btnNew", [], "any", false, false, false, 43)) {
            // line 44
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44)) . "New");
            // line 45
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"insert\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 47), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 48), "newToken", [], "method", false, false, false, 48), "html", null, true);
            echo "\"/>
            <div class=\"card border-success shadow mb-2\">
                <div class=\"card-body p-2\">
                    <button class=\"btn btn-sm btn-outline-success\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#";
            // line 52
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\" aria-expanded=\"false\">
                        <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i>
                        ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["add"], "method", false, false, false, 54), "html", null, true);
            echo "
                    </button>
                    &nbsp;
                    ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "title", [], "any", false, false, false, 57), "html", null, true);
            echo "
                </div>
                <div class=\"collapse\" id=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\">
                    <div class=\"card-body border-top\">
                        <div class=\"form-row\">
                            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 63
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 63)], "method", false, false, false, 63);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                            <div class=\"col-12 text-right\">
                                <button class=\"btn btn-sm btn-success\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["save"], "method", false, false, false, 68), "html", null, true);
            echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        // line 77
        echo "
    ";
        // line 79
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["counter"] => $context["model"]) {
            // line 80
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 80)) . $context["counter"]);
            // line 81
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 83), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"code\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 84), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 85), "newToken", [], "method", false, false, false, 85), "html", null, true);
            echo "\"/>
            <div class=\"card shadow mb-2\"";
            // line 86
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "selected", [], "any", false, false, false, 86), twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 86)))) {
                echo " id=\"EditListViewSelected\"";
            }
            echo ">
                <div class=\"card-body\">
                    <div class=\"form-row\">
                        ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 90
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [$context["model"]], "method", false, false, false, 90);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    </div>
                    <div class=\"row\">
                        ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 94), "btnDelete", [], "any", false, false, false, 94)) {
                // line 95
                echo "                            <div class=\"col-auto\">
                                <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                        onclick=\"editListViewDelete('";
                // line 97
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 97) . $context["counter"]), "html", null, true);
                echo "');\">
                                    <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["delete"], "method", false, false, false, 99), "html", null, true);
                echo "</span>
                                </button>
                            </div>
                        ";
            }
            // line 103
            echo "                        <div class=\"col\">
                            ";
            // line 105
            echo "                            ";
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 105);
            // line 106
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [false, (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 106) . $context["counter"])], "method", false, false, false, 106);
            echo "
                        </div>
                        <div class=\"col-auto\">
                            ";
            // line 109
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 109), "btnUndo", [], "any", false, false, false, 109)) {
                // line 110
                echo "                                <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                                    <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["undo"], "method", false, false, false, 112), "html", null, true);
                echo "</span>
                                </button>
                            ";
            }
            // line 115
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 115), "btnSave", [], "any", false, false, false, 115)) {
                // line 116
                echo "                                <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["save"], "method", false, false, false, 118), "html", null, true);
                echo "</span>
                                </button>
                            ";
            }
            // line 121
            echo "                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
    ";
        // line 129
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 129)), 0))) {
            // line 130
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 130)) . "Offset");
            // line 131
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 132), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"offset\" value=\"";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 133), "html", null, true);
            echo "\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group\">
                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 136));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 137
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 137)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 138
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\"
                                onclick=\"editListViewSetOffset('";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 139), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 139), "html", null, true);
                echo "');\">
                            ";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 140), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                </div>
            </div>
        </form>
    ";
        }
        // line 147
        echo "
    ";
        // line 149
        echo "    <div class=\"row\">
        ";
        // line 150
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 150);
        // line 151
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 151), "", ($context["fsc"] ?? null)], "method", false, false, false, 151);
        echo "
    </div>
</div>

";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 157
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 157), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 157)], "method", false, false, false, 157);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditListView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 157,  358 => 156,  350 => 151,  348 => 150,  345 => 149,  342 => 147,  336 => 143,  327 => 140,  321 => 139,  316 => 138,  313 => 137,  309 => 136,  303 => 133,  299 => 132,  294 => 131,  291 => 130,  288 => 129,  285 => 127,  274 => 121,  268 => 118,  264 => 116,  261 => 115,  255 => 112,  251 => 110,  249 => 109,  242 => 106,  239 => 105,  236 => 103,  229 => 99,  224 => 97,  220 => 95,  218 => 94,  214 => 92,  205 => 90,  201 => 89,  193 => 86,  189 => 85,  185 => 84,  181 => 83,  175 => 81,  172 => 80,  167 => 79,  164 => 77,  152 => 68,  147 => 65,  138 => 63,  134 => 62,  128 => 59,  123 => 57,  117 => 54,  112 => 52,  105 => 48,  101 => 47,  95 => 45,  92 => 44,  89 => 43,  82 => 39,  80 => 38,  77 => 37,  70 => 33,  68 => 32,  65 => 31,  61 => 29,  55 => 26,  51 => 25,  47 => 24,  43 => 23,  39 => 21,  37 => 20,);
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

<script>
    var editListViewDeleteCancel = \"{{ i18n.trans('cancel') }}\";
    var editListViewDeleteConfirm = \"{{ i18n.trans('confirm') }}\";
    var editListViewDeleteMessage = \"{{ i18n.trans('are-you-sure') }}\";
    var editListViewDeleteTitle = \"{{ i18n.trans('confirm-delete') }}\";
</script>

<div class=\"{{ currentView.settings.card ? '' : 'container-fluid' }}\">
    {# -- Row header -- #}
    <div class=\"row\">
        {% set row = currentView.getRow('header') %}
        {{ row.render(currentView.getViewName(), '', fsc) | raw }}
    </div>

    {# -- Row statistics -- #}
    <div>
        {% set row = currentView.getRow('statistics') %}
        {{ row.render(fsc) | raw }}
    </div>

    {# -- New form -- #}
    {% if currentView.settings.btnNew %}
        {% set formName = 'form' ~ currentView.getViewName() ~ 'New' %}
        <form id=\"{{ formName }}\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"insert\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken() }}\"/>
            <div class=\"card border-success shadow mb-2\">
                <div class=\"card-body p-2\">
                    <button class=\"btn btn-sm btn-outline-success\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#{{ formName }}Collapse\" aria-expanded=\"false\">
                        <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i>
                        {{ i18n.trans('add') }}
                    </button>
                    &nbsp;
                    {{ currentView.title }}
                </div>
                <div class=\"collapse\" id=\"{{ formName }}Collapse\">
                    <div class=\"card-body border-top\">
                        <div class=\"form-row\">
                            {% for group in currentView.getColumns() %}
                                {{ group.edit(currentView.model) | raw }}
                            {% endfor %}
                            <div class=\"col-12 text-right\">
                                <button class=\"btn btn-sm btn-success\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('save') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    {% endif %}

    {# -- Forms -- #}
    {% for counter, model in currentView.cursor %}
        {% set formName = 'form' ~ currentView.getViewName() ~ counter %}
        <form id=\"{{ formName }}\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
            <input type=\"hidden\" name=\"code\" value=\"{{ model.primaryColumnValue() }}\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken() }}\"/>
            <div class=\"card shadow mb-2\"{% if currentView.selected == model.primaryColumnValue() %} id=\"EditListViewSelected\"{% endif %}>
                <div class=\"card-body\">
                    <div class=\"form-row\">
                        {% for group in currentView.getColumns() %}
                            {{ group.edit(model) | raw }}
                        {% endfor %}
                    </div>
                    <div class=\"row\">
                        {% if currentView.settings.btnDelete %}
                            <div class=\"col-auto\">
                                <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                        onclick=\"editListViewDelete('{{ currentView.getViewName() ~ counter }}');\">
                                    <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('delete') }}</span>
                                </button>
                            </div>
                        {% endif %}
                        <div class=\"col\">
                            {# -- Row actions -- #}
                            {% set row = currentView.getRow('actions') %}
                            {{ row.render(false, currentView.getViewName() ~ counter) | raw }}
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
    {% endfor %}

    {# -- Pagination -- #}
    {% if currentView.getPagination() | length > 0 %}
        {% set formName = 'form' ~ currentView.getViewName() ~ 'Offset' %}
        <form id=\"{{ formName }}\" method=\"post\">
            <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
            <input type=\"hidden\" name=\"offset\" value=\"{{ currentView.offset }}\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group\">
                    {% for page in currentView.getPagination() %}
                        {% set btnClass = page.active ? 'btn btn-outline-dark active' : 'btn btn-outline-dark' %}
                        <button type=\"button\" class=\"{{ btnClass }}\"
                                onclick=\"editListViewSetOffset('{{ currentView.getViewName() }}', '{{ page.offset }}');\">
                            {{ page.num }}
                        </button>
                    {% endfor %}
                </div>
            </div>
        </form>
    {% endif %}

    {# -- Row footer -- #}
    <div class=\"row\">
        {% set row = currentView.getRow('footer') %}
        {{ row.render(currentView.getViewName(), '', fsc) | raw }}
    </div>
</div>

{# -- Modals -- #}
{% for group in currentView.getModals() %}
    {{ group.modal(currentView.model, currentView.getViewName()) | raw }}
{% endfor %}
", "Master/EditListView.html.twig", "C:\\xampp\\htdocs\\public\\Core\\View\\Master\\EditListView.html.twig");
    }
}
