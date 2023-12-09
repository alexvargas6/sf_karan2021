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

/* Tab/RefundFacturaCliente.html.twig */
class __TwigTemplate_ee2aa24e6032f0e068cf16742313fb291d74385710b1e58dc39e1d89e462c980 extends Template
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
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 21));
        // line 22
        echo "
<script>
    function refundAll() {
        const refundableQty = document.getElementsByClassName(\"refundable\");
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = refundableQty.item(i).value;
        }
        return false;
    }

    function refundNone() {
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = 0;
        }
        return false;
    }
</script>

";
        // line 42
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "count", [], "any", false, false, false, 42), 0))) {
            // line 43
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover mb-5\">
            <thead>
            <tr>
                <th>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["rectified-invoice"], "method", false, false, false, 47), "html", null, true);
            echo "</th>
                <th>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["number2"], "method", false, false, false, 48), "html", null, true);
            echo "</th>
                <th>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["observations"], "method", false, false, false, 49), "html", null, true);
            echo "</th>
                <th class=\"text-right\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 50), "html", null, true);
            echo "</th>
                <th class=\"text-right\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["date"], "method", false, false, false, 51), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["rectified"]) {
                // line 56
                echo "                <tr class=\"table-danger clickableRow\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rectified"], "url", [], "method", false, false, false, 56), "html", null, true);
                echo "\">
                    <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rectified"], "codigo", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                    <td>";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["rectified"], "numero2", [], "any", false, false, false, 58);
                echo "</td>
                    <td>";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["rectified"], "observaciones", [], "any", false, false, false, 59);
                echo "</td>
                    <td class=\"text-right\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 60), "coins", [], "method", false, false, false, 60), "format", [twig_get_attribute($this->env, $this->source, $context["rectified"], "total", [], "any", false, false, false, 60)], "method", false, false, false, 60), "html", null, true);
                echo "</td>
                    <td class=\"text-right\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rectified"], "fecha", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rectified'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </tbody>
        </table>
    </div>
";
        }
        // line 68
        echo "
<form action=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 69), "url", [], "method", false, false, false, 69), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"action\" value=\"new-refund\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 71), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"idfactura\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 72), "primaryColumnValue", [], "method", false, false, false, 72), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 73), "newToken", [], "method", false, false, false, 73), "html", null, true);
        echo "\"/>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card border-warning shadow mb-4\">
                    <div class=\"card-header bg-warning\">
                        <i class=\"fas fa-share fa-fw\" aria-hidden=\"true\"></i> ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["new-refund"], "method", false, false, false, 79), "html", null, true);
        echo "
                    </div>
                    <div class=\"card-body\">
                        <p>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["rectified-invoice-p"], "method", false, false, false, 82), "html", null, true);
        echo "</p>
                        <div class=\"form-row align-items-end\">
                            <div class=\"col-sm\">
                                <div class=\"form-group\">
                                    ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["serie"], "method", false, false, false, 86), "html", null, true);
        echo "
                                    <select name=\"codserie\" class=\"form-control\">
                                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "series", [], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 89
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["serie"], "tipo", [], "any", false, false, false, 89) === "R")) {
                // line 90
                echo "                                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", ["default", "codserierec", "R"], "method", false, false, false, 90)))) {
                    // line 91
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 91), "html", null, true);
                    echo "\" selected>
                                                        ";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 92), "html", null, true);
                    echo "
                                                    </option>
                                                ";
                } else {
                    // line 95
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 95), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 95), "html", null, true);
                    echo "</option>
                                                ";
                }
                // line 97
                echo "                                            ";
            }
            // line 98
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"form-group\">
                                    ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["date"], "method", false, false, false, 104), "html", null, true);
        echo "
                                    <input type=\"date\" name=\"fecha\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "end", [], "any", false, false, false, 105), "Y-m-d"), "html", null, true);
        echo "\"
                                           class=\"form-control\" required>
                                </div>
                            </div>
                            <div class=\"col-sm text-right\">
                                <div class=\"btn-group mb-3\">
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-check-square fa-fw\"></i> ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select"], "method", false, false, false, 114), "html", null, true);
        echo "
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-right\">
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundNone();\">
                                                <i class=\"far fa-square fa-fw\"></i> ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select-none"], "method", false, false, false, 118), "html", null, true);
        echo "
                                            </a>
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundAll();\">
                                                <i class=\"fas fa-square fa-fw\"></i> ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select-all"], "method", false, false, false, 121), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"btn-group mb-3 ml-3\">
                                    <button type=\"submit\" class=\"btn btn-warning\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["save"], "method", false, false, false, 128), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover mb-0\">
                            <thead>
                            <tr>
                                <th>";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["description"], "method", false, false, false, 138), "html", null, true);
        echo "</th>
                                <th class=\"text-right\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["quantity"], "method", false, false, false, 139), "html", null, true);
        echo "</th>
                                <th class=\"text-right\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["to-refund"], "method", false, false, false, 140), "html", null, true);
        echo "</th>
                                <th class=\"text-right\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["refund-amount"], "method", false, false, false, 141), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 145), "getLines", [], "method", false, false, false, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 146
            echo "                                ";
            $context["refunded"] = twig_get_attribute($this->env, $this->source, $context["line"], "refundedQuantity", [], "method", false, false, false, 146);
            // line 147
            echo "                                <tr>
                                    <td class=\"align-middle\">
                                        <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["line"], "getProducto", [], "method", false, false, false, 149), "url", [], "method", false, false, false, 149), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 149), "html", null, true);
            echo "</a>
                                        ";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["line"], "descripcion", [], "any", false, false, false, 150);
            echo "
                                    </td>
                                    <td class=\"align-middle text-right\">
                                        ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 153), "numbers", [], "method", false, false, false, 153), "format", [twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 153)], "method", false, false, false, 153), "html", null, true);
            echo "
                                    </td>
                                    <td class=\"table-warning\">
                                        <input type=\"hidden\" value=\"";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 156), "html", null, true);
            echo "\" class=\"refundable\">
                                        ";
            // line 157
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 157), 0))) {
                // line 158
                echo "                                            <input type=\"number\" name=\"refund_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "primaryColumnValue", [], "method", false, false, false, 158), "html", null, true);
                echo "\"
                                                   value=\"0\" min=\"0\" max=\"";
                // line 159
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 159) - ($context["refunded"] ?? null)), "html", null, true);
                echo "\" step=\"any\"
                                                   class=\"form-control text-right to_refund\" autocomplete=\"off\"/>
                                        ";
            } else {
                // line 162
                echo "                                            <input type=\"number\" name=\"refund_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "primaryColumnValue", [], "method", false, false, false, 162), "html", null, true);
                echo "\"
                                                   value=\"0\" step=\"any\" class=\"form-control text-right to_refund\"
                                                   autocomplete=\"off\"/>
                                        ";
            }
            // line 166
            echo "                                    </td>
                                    <td class=\"align-middle table-warning text-right\">
                                        ";
            // line 168
            if ((0 === twig_compare(($context["refunded"] ?? null), 0))) {
                // line 169
                echo "                                            -
                                        ";
            } else {
                // line 171
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 171), "numbers", [], "method", false, false, false, 171), "format", [($context["refunded"] ?? null)], "method", false, false, false, 171), "html", null, true);
                echo "
                                        ";
            }
            // line 173
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            <textarea name=\"observaciones\" class=\"form-control\"
                                      placeholder=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["observations"], "method", false, false, false, 182), "html", null, true);
        echo "\"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "Tab/RefundFacturaCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 182,  371 => 176,  363 => 173,  357 => 171,  353 => 169,  351 => 168,  347 => 166,  339 => 162,  333 => 159,  328 => 158,  326 => 157,  322 => 156,  316 => 153,  310 => 150,  304 => 149,  300 => 147,  297 => 146,  293 => 145,  286 => 141,  282 => 140,  278 => 139,  274 => 138,  261 => 128,  251 => 121,  245 => 118,  238 => 114,  226 => 105,  222 => 104,  215 => 99,  209 => 98,  206 => 97,  198 => 95,  192 => 92,  187 => 91,  184 => 90,  181 => 89,  177 => 88,  172 => 86,  165 => 82,  159 => 79,  150 => 73,  146 => 72,  142 => 71,  137 => 69,  134 => 68,  128 => 64,  119 => 61,  115 => 60,  111 => 59,  107 => 58,  103 => 57,  98 => 56,  94 => 55,  87 => 51,  83 => 50,  79 => 49,  75 => 48,  71 => 47,  65 => 43,  63 => 42,  41 => 22,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2018-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
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
{% set firstView = fsc.views | first %}

<script>
    function refundAll() {
        const refundableQty = document.getElementsByClassName(\"refundable\");
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = refundableQty.item(i).value;
        }
        return false;
    }

    function refundNone() {
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = 0;
        }
        return false;
    }
</script>

{% if currentView.count > 0 %}
    <div class=\"table-responsive\">
        <table class=\"table table-hover mb-5\">
            <thead>
            <tr>
                <th>{{ i18n.trans('rectified-invoice') }}</th>
                <th>{{ i18n.trans('number2') }}</th>
                <th>{{ i18n.trans('observations') }}</th>
                <th class=\"text-right\">{{ i18n.trans('total') }}</th>
                <th class=\"text-right\">{{ i18n.trans('date') }}</th>
            </tr>
            </thead>
            <tbody>
            {% for rectified in currentView.cursor %}
                <tr class=\"table-danger clickableRow\" data-href=\"{{ rectified.url() }}\">
                    <td>{{ rectified.codigo }}</td>
                    <td>{{ rectified.numero2 | raw }}</td>
                    <td>{{ rectified.observaciones | raw }}</td>
                    <td class=\"text-right\">{{ fsc.toolBox().coins().format(rectified.total) }}</td>
                    <td class=\"text-right\">{{ rectified.fecha }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endif %}

<form action=\"{{ firstView.model.url() }}\" method=\"post\">
    <input type=\"hidden\" name=\"action\" value=\"new-refund\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
    <input type=\"hidden\" name=\"idfactura\" value=\"{{ firstView.model.primaryColumnValue() }}\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken() }}\"/>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card border-warning shadow mb-4\">
                    <div class=\"card-header bg-warning\">
                        <i class=\"fas fa-share fa-fw\" aria-hidden=\"true\"></i> {{ i18n.trans('new-refund') }}
                    </div>
                    <div class=\"card-body\">
                        <p>{{ i18n.trans('rectified-invoice-p') }}</p>
                        <div class=\"form-row align-items-end\">
                            <div class=\"col-sm\">
                                <div class=\"form-group\">
                                    {{ i18n.trans('serie') }}
                                    <select name=\"codserie\" class=\"form-control\">
                                        {% for serie in fsc.series() %}
                                            {% if serie.tipo is same as('R') %}
                                                {% if serie.codserie == appSettings.get('default','codserierec','R') %}
                                                    <option value=\"{{ serie.codserie }}\" selected>
                                                        {{ serie.descripcion }}
                                                    </option>
                                                {% else %}
                                                    <option value=\"{{ serie.codserie }}\">{{ serie.descripcion }}</option>
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"form-group\">
                                    {{ i18n.trans('date') }}
                                    <input type=\"date\" name=\"fecha\" value=\"{{ task.end | date('Y-m-d') }}\"
                                           class=\"form-control\" required>
                                </div>
                            </div>
                            <div class=\"col-sm text-right\">
                                <div class=\"btn-group mb-3\">
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-check-square fa-fw\"></i> {{ i18n.trans('select') }}
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-right\">
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundNone();\">
                                                <i class=\"far fa-square fa-fw\"></i> {{ i18n.trans('select-none') }}
                                            </a>
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundAll();\">
                                                <i class=\"fas fa-square fa-fw\"></i> {{ i18n.trans('select-all') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"btn-group mb-3 ml-3\">
                                    <button type=\"submit\" class=\"btn btn-warning\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> {{ i18n.trans('save') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover mb-0\">
                            <thead>
                            <tr>
                                <th>{{ i18n.trans('description') }}</th>
                                <th class=\"text-right\">{{ i18n.trans('quantity') }}</th>
                                <th class=\"text-right\">{{ i18n.trans('to-refund') }}</th>
                                <th class=\"text-right\">{{ i18n.trans('refund-amount') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for line in firstView.model.getLines() %}
                                {% set refunded = line.refundedQuantity() %}
                                <tr>
                                    <td class=\"align-middle\">
                                        <a href=\"{{ line.getProducto().url() }}\">{{ line.referencia }}</a>
                                        {{ line.descripcion | raw }}
                                    </td>
                                    <td class=\"align-middle text-right\">
                                        {{ fsc.toolBox().numbers().format(line.cantidad) }}
                                    </td>
                                    <td class=\"table-warning\">
                                        <input type=\"hidden\" value=\"{{ line.cantidad }}\" class=\"refundable\">
                                        {% if line.cantidad > 0 %}
                                            <input type=\"number\" name=\"refund_{{ line.primaryColumnValue() }}\"
                                                   value=\"0\" min=\"0\" max=\"{{ line.cantidad - refunded }}\" step=\"any\"
                                                   class=\"form-control text-right to_refund\" autocomplete=\"off\"/>
                                        {% else %}
                                            <input type=\"number\" name=\"refund_{{ line.primaryColumnValue() }}\"
                                                   value=\"0\" step=\"any\" class=\"form-control text-right to_refund\"
                                                   autocomplete=\"off\"/>
                                        {% endif %}
                                    </td>
                                    <td class=\"align-middle table-warning text-right\">
                                        {% if refunded == 0 %}
                                            -
                                        {% else %}
                                            {{ fsc.toolBox().numbers().format(refunded) }}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            <textarea name=\"observaciones\" class=\"form-control\"
                                      placeholder=\"{{ i18n.trans('observations') }}\"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>", "Tab/RefundFacturaCliente.html.twig", "C:\\xampp\\htdocs\\public\\Core\\View\\Tab\\RefundFacturaCliente.html.twig");
    }
}
