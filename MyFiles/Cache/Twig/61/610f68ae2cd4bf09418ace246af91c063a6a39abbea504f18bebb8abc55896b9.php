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

/* ReportTreasury.html.twig */
class __TwigTemplate_774b7c73a6ce6db05cbc7ddf95a79860e9749cf8c988a43243d894ce8920459b extends Template
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
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 3);
        // line 1
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "ReportTreasury.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid mb-1 d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 11), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["refresh"], "method", false, false, false, 11), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 14), "html", null, true);
        echo "?defaultPage=TRUE\"
                       title=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["mark-as-homepage"], "method", false, false, false, 15), "html", null, true);
        echo "\">
                        <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-md-5 text-right\">
                <h1 class=\"h4 mb-0 d-none d-md-inline-block\">
                    ";
        // line 23
        $context["title"] = twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [(($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 23)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["title"] ?? null) : null)], "method", false, false, false, 23));
        // line 24
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "<i class=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 24)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["icon"] ?? null) : null), "html", null, true);
        echo " ml-3\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <div class=\"pb-5\">
        <div class=\"h5 text-success text-center\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["exercise"], "method", false, false, false, 30), "html", null, true);
        echo "</div>
        <select class=\"form-control ml-auto mr-auto\" id=\"selectYear\">
            ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getYears", [], "method", false, false, false, 32);
        echo "
        </select>
        <br/>
    </div>
";
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container-fluid\" style=\"margin-top: -50px;\">
        <div class=\"form-row\">
            <div class=\"col-sm-6\">
                <div class=\"card border-info shadow mb-3\">
                    <div class=\"card-header bg-info text-white text-center\">
                        <strong>";
        // line 45
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["treasury"], "method", false, false, false, 45)), "html", null, true);
        echo "</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "cajas", [], "any", false, false, false, 49)) {
            // line 50
            echo "                                <tr>
                                    <td class=\"text-center align-middle\">";
            // line 51
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["boxes"], "method", false, false, false, 51)), "html", null, true);
            echo "
                                        (570xxx)
                                    </td>
                                    <td class=\"p-0\">
                                        <table class=\"table m-0\">
                                            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "cajas", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["caja"]) {
                // line 57
                echo "                                                ";
                echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, $context["caja"], "descripcion", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, $context["caja"], "saldo", [], "any", false, false, false, 57)], 57, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caja'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                                            ";
            echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 59)), (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_tesoreria", [], "any", false, false, false, 59)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["total_cajas"] ?? null) : null)], 59, $context, $this->getSourceContext());
            echo "
                                        </table>
                                    </td>
                                </tr>
                            ";
        }
        // line 64
        echo "
                            ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "bancos", [], "any", false, false, false, 65)) {
            // line 66
            echo "                                <tr>
                                    <td class=\"text-center align-middle\">";
            // line 67
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["banks"], "method", false, false, false, 67)), "html", null, true);
            echo "
                                        (572xxx)
                                    </td>
                                    <td class=\"p-0\">
                                        <table class=\"table m-0\">
                                            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "bancos", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["banco"]) {
                // line 73
                echo "                                                ";
                echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, $context["banco"], "descripcion", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, $context["banco"], "saldo", [], "any", false, false, false, 73)], 73, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banco'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                            ";
            echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 75)), (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_tesoreria", [], "any", false, false, false, 75)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["total_bancos"] ?? null) : null)], 75, $context, $this->getSourceContext());
            echo "
                                        </table>
                                    </td>
                                </tr>
                            ";
        }
        // line 80
        echo "                            <tr>
                                <td class=\"text-center align-middle\">";
        // line 81
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 81)), "html", null, true);
        echo "</td>
                                <td class=\"money\">";
        // line 82
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "show_precio", [(($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_tesoreria", [], "any", false, false, false, 82)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["total_tesoreria"] ?? null) : null)], "method", false, false, false, 82);
        echo "</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"card border-danger shadow mb-3\">
                    <div class=\"card-header bg-danger text-white text-center\">
                        <strong>";
        // line 91
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["pending-expenses-charges"], "method", false, false, false, 91)), "html", null, true);
        echo "</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            ";
        // line 95
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), ("(a) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["expenses-pending-payment"], "method", false, false, false, 95)), (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_gastoscobros", [], "any", false, false, false, 95)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["gastospdtepago"] ?? null) : null)], 95, $context, $this->getSourceContext());
        echo "
                            ";
        // line 96
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), ("(b) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["customers-pending-collection"], "method", false, false, false, 96)), (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_gastoscobros", [], "any", false, false, false, 96)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["clientespdtecobro"] ?? null) : null)], 96, $context, $this->getSourceContext());
        echo "
                            ";
        // line 97
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(c) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["payroll-pending-payment"], "method", false, false, false, 97)) . " (465xxx)"), (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_gastoscobros", [], "any", false, false, false, 97)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["nominaspdtepago"] ?? null) : null)], 97, $context, $this->getSourceContext());
        echo "
                            ";
        // line 98
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(d) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["social-security-pending-payment"], "method", false, false, false, 98)) . " (476xxx)"), (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_gastoscobros", [], "any", false, false, false, 98)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["segsocialpdtepago"] ?? null) : null)], 98, $context, $this->getSourceContext());
        echo "
                            ";
        // line 99
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(e) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["social-security-pending-collection"], "method", false, false, false, 99)) . " (471xxx)"), (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_gastoscobros", [], "any", false, false, false, 99)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["segsocialpdtecobro"] ?? null) : null)], 99, $context, $this->getSourceContext());
        echo "
                            ";
        // line 100
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 100)), (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_gastoscobros", [], "any", false, false, false, 100)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["total_gastoscobros"] ?? null) : null)], 100, $context, $this->getSourceContext());
        echo "
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-sm-6\">
                <div class=\"card border-warning shadow mb-3\">
                    <div class=\"card-header bg-warning text-white text-center\">
                        <strong>";
        // line 110
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["taxes"], "method", false, false, false, 110)), "html", null, true);
        echo "</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            ";
        // line 114
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["irpf"], "method", false, false, false, 114)) . " (4751xxx) (") . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["payroll-professionals-111"], "method", false, false, false, 114)) . ")"), (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 114)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["irpf-mod111"] ?? null) : null)], 114, $context, $this->getSourceContext());
        echo "
                            ";
        // line 115
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["irpf"], "method", false, false, false, 115)) . " (4751xxx) (") . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["rent-office"], "method", false, false, false, 115)) . ")"), (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 115)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["irpf-mod115"] ?? null) : null)], 115, $context, $this->getSourceContext());
        echo "
                            <tr>
                                <td colspan=\"2\"></td>
                            </tr>
                            ";
        // line 119
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(a) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["passed-tax"], "method", false, false, false, 119)) . " (477xxx)"), (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 119)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["iva-repercutido"] ?? null) : null)], 119, $context, $this->getSourceContext());
        echo "
                            ";
        // line 120
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(b) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["input-tax"], "method", false, false, false, 120)) . " (472xxx)"), (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 120)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["iva-soportado"] ?? null) : null)], 120, $context, $this->getSourceContext());
        echo "
                            ";
        // line 121
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(c) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["tax-return-previous-quarters"], "method", false, false, false, 121)) . " (470xxx)"), (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 121)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["iva-devolver"] ?? null) : null)], 121, $context, $this->getSourceContext());
        echo "
                            ";
        // line 122
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["result-tax"], "method", false, false, false, 122)) . " (MOD 303)"), (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 122)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["resultado_iva-mod303"] ?? null) : null)], 122, $context, $this->getSourceContext());
        echo "
                            <tr>
                                <td class=\"text-center\" colspan=\"2\">
                                    <strong>";
        // line 125
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["current-exercise"], "method", false, false, false, 125)), "html", null, true);
        echo "</strong>
                                </td>
                            </tr>
                            ";
        // line 128
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sales"], "method", false, false, false, 128), (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 128)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["ventas_totales"] ?? null) : null)], 128, $context, $this->getSourceContext());
        echo "
                            ";
        // line 129
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["expenses"], "method", false, false, false, 129), (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 129)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["gastos_totales"] ?? null) : null)], 129, $context, $this->getSourceContext());
        echo "
                            ";
        // line 130
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["result"], "method", false, false, false, 130), (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 130)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["resultado"] ?? null) : null)], 130, $context, $this->getSourceContext());
        echo "
                            ";
        // line 131
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), ("(a) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["corporate-tax"], "method", false, false, false, 131)), (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 131)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["sociedades"] ?? null) : null)], 131, $context, $this->getSourceContext());
        echo "
                            ";
        // line 132
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), ("(b) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["payment-previous-periods"], "method", false, false, false, 132)), (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 132)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["pago-ant"] ?? null) : null)], 132, $context, $this->getSourceContext());
        echo "
                            ";
        // line 133
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["fractional-payment-corporation-tax"], "method", false, false, false, 133) . " (MOD 202)"), (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 133)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["pagofraccionado-mod202"] ?? null) : null)], 133, $context, $this->getSourceContext());
        echo "
                            <tr>
                                <td class=\"text-center\" colspan=\"2\">
                                    <strong>";
        // line 136
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["previous-exercise"], "method", false, false, false, 136)), "html", null, true);
        echo "</strong>
                                </td>
                            </tr>
                            ";
        // line 139
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["result"], "method", false, false, false, 139) . " (129xxx)"), (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 139)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["resultado_ejanterior"] ?? null) : null)], 139, $context, $this->getSourceContext());
        echo "
                            ";
        // line 140
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["negative-results-other-exercises"], "method", false, false, false, 140) . " (121xxx)"), (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 140)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["resultado_negotros"] ?? null) : null)], 140, $context, $this->getSourceContext());
        echo "
                            ";
        // line 141
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total-result"], "method", false, false, false, 141), (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 141)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["total"] ?? null) : null)], 141, $context, $this->getSourceContext());
        echo "
                            ";
        // line 142
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), ("(a) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["corporate-tax"], "method", false, false, false, 142)), (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 142)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["sociedades_ant"] ?? null) : null)], 142, $context, $this->getSourceContext());
        echo "
                            ";
        // line 143
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(b) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["corporate-tax-advances"], "method", false, false, false, 143)) . " (4709xxx)"), (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 143)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["sociedades_adelantos"] ?? null) : null)], 143, $context, $this->getSourceContext());
        echo "
                            ";
        // line 144
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total-pay-return-corporate-tax"], "method", false, false, false, 144) . " (MOD 200)"), (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_impuestos", [], "any", false, false, false, 144)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["total-mod200"] ?? null) : null)], 144, $context, $this->getSourceContext());
        echo "
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"card border-success shadow mb-3\">
                    <div class=\"card-header bg-success text-white text-center\">
                        <strong>";
        // line 152
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["short-situation-results"], "method", false, false, false, 152)), "html", null, true);
        echo "</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table mb-0\">
                            ";
        // line 156
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (((((twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 156) . " (") . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["treasury"], "method", false, false, false, 156)) . " + ") . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["expenses-charges"], "method", false, false, false, 156)) . " + MOD 111 + MOD 115 + MOD 303 + MOD 202 + MOD 200)"), (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadosituacion", [], "any", false, false, false, 156)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["total"] ?? null) : null)], 156, $context, $this->getSourceContext());
        echo "
                        </table>
                    </div>
                </div>
                <div class=\"card border-dark shadow mb-3\">
                    <div class=\"card-header bg-dark text-white text-center\">
                        <strong>";
        // line 162
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["reserves-results-exercises"], "method", false, false, false, 162)), "html", null, true);
        echo "</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            ";
        // line 166
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(a) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["legal-reserve"], "method", false, false, false, 166)) . " (112xxx)"), (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_reservasresultados", [], "any", false, false, false, 166)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["reservalegal"] ?? null) : null)], 166, $context, $this->getSourceContext());
        echo "
                            ";
        // line 167
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(b) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["voluntary-reserves"], "method", false, false, false, 167)) . " (113xxx)"), (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_reservasresultados", [], "any", false, false, false, 167)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["reservasvoluntarias"] ?? null) : null)], 167, $context, $this->getSourceContext());
        echo "
                            ";
        // line 168
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (("(c) " . twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["previous-exercise-result"], "method", false, false, false, 168)) . " (129xxx + 121xxx)"), (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_reservasresultados", [], "any", false, false, false, 168)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["resultadoejercicioanterior"] ?? null) : null)], 168, $context, $this->getSourceContext());
        echo "
                            ";
        // line 169
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 169), (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_reservasresultados", [], "any", false, false, false, 169)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["total_reservas"] ?? null) : null)], 169, $context, $this->getSourceContext());
        echo "
                        </table>
                    </div>
                </div>
                <div class=\"card border-primary shadow mb-3\">
                    <div class=\"card-header bg-primary text-white text-center\">
                        <strong>";
        // line 175
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["current-exercise-results"], "method", false, false, false, 175)), "html", null, true);
        echo "</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            ";
        // line 179
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sales"], "method", false, false, false, 179), (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadoejercicioactual", [], "any", false, false, false, 179)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["total_ventas"] ?? null) : null)], 179, $context, $this->getSourceContext());
        echo "
                            ";
        // line 180
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["expenses"], "method", false, false, false, 180), (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadoejercicioactual", [], "any", false, false, false, 180)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["total_gastos"] ?? null) : null)], 180, $context, $this->getSourceContext());
        echo "
                            ";
        // line 181
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["result-exploitation"], "method", false, false, false, 181), (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadoejercicioactual", [], "any", false, false, false, 181)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["resultadoexplotacion"] ?? null) : null)], 181, $context, $this->getSourceContext());
        echo "
                            <tr>
                                <td colspan=\"2\"></td>
                            </tr>
                            ";
        // line 185
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["amortization-intangible-assets"], "method", false, false, false, 185) . " (680xxx)"), (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadoejercicioactual", [], "any", false, false, false, 185)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["amortizacioninmovintang"] ?? null) : null)], 185, $context, $this->getSourceContext());
        echo "
                            ";
        // line 186
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["amortization-intangible-material"], "method", false, false, false, 186) . " (681xxx)"), (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadoejercicioactual", [], "any", false, false, false, 186)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["amortizacioninmovmat"] ?? null) : null)], 186, $context, $this->getSourceContext());
        echo "
                            ";
        // line 187
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total-amortizations"], "method", false, false, false, 187), (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadoejercicioactual", [], "any", false, false, false, 187)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["total_amort"] ?? null) : null)], 187, $context, $this->getSourceContext());
        echo "
                            ";
        // line 188
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["result-before-taxes-rai"], "method", false, false, false, 188), (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadoejercicioactual", [], "any", false, false, false, 188)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["resultado_antes_impuestos"] ?? null) : null)], 188, $context, $this->getSourceContext());
        echo "
                            ";
        // line 189
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["corporate-tax"], "method", false, false, false, 189), (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadoejercicioactual", [], "any", false, false, false, 189)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["impuesto_sociedades"] ?? null) : null)], 189, $context, $this->getSourceContext());
        echo "
                            ";
        // line 190
        echo twig_call_macro($macros["_self"], "macro_showLine", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["result-after-taxes-rdi"], "method", false, false, false, 190), (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "da_resultadoejercicioactual", [], "any", false, false, false, 190)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["resultado_despues_impuestos"] ?? null) : null)], 190, $context, $this->getSourceContext());
        echo "
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 199
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "

    <style>
        #selectYear {
            max-width: 300px;
        }

        .money {
            white-space: nowrap;
            text-align: right;
        }
    </style>
";
    }

    // line 214
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function () {
            \$(document).on('change', '#selectYear', function () {
                window.location = '";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 220), "html", null, true);
        echo "?code=' + \$('#selectYear option:selected').val();
            });
        });
    </script>
";
    }

    // line 226
    public function macro_showLine($__fsc__ = null, $__title__ = null, $__price__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "title" => $__title__,
            "price" => $__price__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 227
            echo "    <tr>
        <td>";
            // line 228
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</td>
        <td class=\"money\">";
            // line 229
            echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "show_precio", [($context["price"] ?? null)], "method", false, false, false, 229);
            echo "</td>
    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "ReportTreasury.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 229,  535 => 228,  532 => 227,  517 => 226,  508 => 220,  499 => 215,  495 => 214,  477 => 200,  473 => 199,  461 => 190,  457 => 189,  453 => 188,  449 => 187,  445 => 186,  441 => 185,  434 => 181,  430 => 180,  426 => 179,  419 => 175,  410 => 169,  406 => 168,  402 => 167,  398 => 166,  391 => 162,  382 => 156,  375 => 152,  364 => 144,  360 => 143,  356 => 142,  352 => 141,  348 => 140,  344 => 139,  338 => 136,  332 => 133,  328 => 132,  324 => 131,  320 => 130,  316 => 129,  312 => 128,  306 => 125,  300 => 122,  296 => 121,  292 => 120,  288 => 119,  281 => 115,  277 => 114,  270 => 110,  257 => 100,  253 => 99,  249 => 98,  245 => 97,  241 => 96,  237 => 95,  230 => 91,  218 => 82,  214 => 81,  211 => 80,  202 => 75,  193 => 73,  189 => 72,  181 => 67,  178 => 66,  176 => 65,  173 => 64,  164 => 59,  155 => 57,  151 => 56,  143 => 51,  140 => 50,  138 => 49,  131 => 45,  121 => 39,  117 => 38,  108 => 32,  103 => 30,  91 => 24,  89 => 23,  78 => 15,  74 => 14,  66 => 11,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuBghTemplate.html.twig\" %}

{% set pageData = fsc.getPageData() %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    <div class=\"container-fluid mb-1 d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}\" title=\"{{ i18n.trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}?defaultPage=TRUE\"
                       title=\"{{ i18n.trans('mark-as-homepage') }}\">
                        <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-md-5 text-right\">
                <h1 class=\"h4 mb-0 d-none d-md-inline-block\">
                    {% set title = i18n.trans(fsc.getPageData()['title']) | capitalize %}
                    {{ title }}<i class=\"{{ fsc.getPageData()['icon'] }} ml-3\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <div class=\"pb-5\">
        <div class=\"h5 text-success text-center\">{{ i18n.trans('exercise') }}</div>
        <select class=\"form-control ml-auto mr-auto\" id=\"selectYear\">
            {{ fsc.getYears() | raw }}
        </select>
        <br/>
    </div>
{% endblock %}

{% block body %}
    {{ parent() }}
    <div class=\"container-fluid\" style=\"margin-top: -50px;\">
        <div class=\"form-row\">
            <div class=\"col-sm-6\">
                <div class=\"card border-info shadow mb-3\">
                    <div class=\"card-header bg-info text-white text-center\">
                        <strong>{{ i18n.trans('treasury')|upper }}</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            {% if fsc.cajas %}
                                <tr>
                                    <td class=\"text-center align-middle\">{{ i18n.trans('boxes')|upper }}
                                        (570xxx)
                                    </td>
                                    <td class=\"p-0\">
                                        <table class=\"table m-0\">
                                            {% for caja in fsc.cajas %}
                                                {{ _self.showLine(fsc, caja.descripcion, caja.saldo) }}
                                            {% endfor %}
                                            {{ _self.showLine(fsc, i18n.trans('total')|upper, fsc.da_tesoreria['total_cajas']) }}
                                        </table>
                                    </td>
                                </tr>
                            {% endif %}

                            {% if fsc.bancos %}
                                <tr>
                                    <td class=\"text-center align-middle\">{{ i18n.trans('banks')|upper }}
                                        (572xxx)
                                    </td>
                                    <td class=\"p-0\">
                                        <table class=\"table m-0\">
                                            {% for banco in fsc.bancos %}
                                                {{ _self.showLine(fsc, banco.descripcion, banco.saldo) }}
                                            {% endfor %}
                                            {{ _self.showLine(fsc, i18n.trans('total')|upper, fsc.da_tesoreria['total_bancos']) }}
                                        </table>
                                    </td>
                                </tr>
                            {% endif %}
                            <tr>
                                <td class=\"text-center align-middle\">{{ i18n.trans('total')|upper }}</td>
                                <td class=\"money\">{{ fsc.show_precio(fsc.da_tesoreria['total_tesoreria'])|raw }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"card border-danger shadow mb-3\">
                    <div class=\"card-header bg-danger text-white text-center\">
                        <strong>{{ i18n.trans('pending-expenses-charges')|upper }}</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            {{ _self.showLine(fsc, '(a) ' ~ i18n.trans('expenses-pending-payment'), fsc.da_gastoscobros['gastospdtepago']) }}
                            {{ _self.showLine(fsc, '(b) ' ~ i18n.trans('customers-pending-collection'), fsc.da_gastoscobros['clientespdtecobro']) }}
                            {{ _self.showLine(fsc, '(c) ' ~ i18n.trans('payroll-pending-payment') ~ ' (465xxx)', fsc.da_gastoscobros['nominaspdtepago']) }}
                            {{ _self.showLine(fsc, '(d) ' ~ i18n.trans('social-security-pending-payment') ~ ' (476xxx)', fsc.da_gastoscobros['segsocialpdtepago']) }}
                            {{ _self.showLine(fsc, '(e) ' ~ i18n.trans('social-security-pending-collection') ~ ' (471xxx)', fsc.da_gastoscobros['segsocialpdtecobro']) }}
                            {{ _self.showLine(fsc, i18n.trans('total')|upper, fsc.da_gastoscobros['total_gastoscobros']) }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-sm-6\">
                <div class=\"card border-warning shadow mb-3\">
                    <div class=\"card-header bg-warning text-white text-center\">
                        <strong>{{ i18n.trans('taxes')|upper }}</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            {{ _self.showLine(fsc, i18n.trans('irpf')|upper ~ ' (4751xxx) (' ~ i18n.trans('payroll-professionals-111') ~ ')', fsc.da_impuestos['irpf-mod111']) }}
                            {{ _self.showLine(fsc, i18n.trans('irpf')|upper ~ ' (4751xxx) (' ~ i18n.trans('rent-office') ~ ')', fsc.da_impuestos['irpf-mod115']) }}
                            <tr>
                                <td colspan=\"2\"></td>
                            </tr>
                            {{ _self.showLine(fsc, '(a) ' ~ i18n.trans('passed-tax') ~ ' (477xxx)', fsc.da_impuestos['iva-repercutido']) }}
                            {{ _self.showLine(fsc, '(b) ' ~ i18n.trans('input-tax') ~ ' (472xxx)', fsc.da_impuestos['iva-soportado']) }}
                            {{ _self.showLine(fsc, '(c) ' ~ i18n.trans('tax-return-previous-quarters') ~ ' (470xxx)', fsc.da_impuestos['iva-devolver']) }}
                            {{ _self.showLine(fsc, i18n.trans('result-tax')|upper ~ ' (MOD 303)', fsc.da_impuestos['resultado_iva-mod303']) }}
                            <tr>
                                <td class=\"text-center\" colspan=\"2\">
                                    <strong>{{ i18n.trans('current-exercise')|upper }}</strong>
                                </td>
                            </tr>
                            {{ _self.showLine(fsc, i18n.trans('sales'), fsc.da_impuestos['ventas_totales']) }}
                            {{ _self.showLine(fsc, i18n.trans('expenses'), fsc.da_impuestos['gastos_totales']) }}
                            {{ _self.showLine(fsc, i18n.trans('result'), fsc.da_impuestos['resultado']) }}
                            {{ _self.showLine(fsc, '(a) ' ~ i18n.trans('corporate-tax'), fsc.da_impuestos['sociedades']) }}
                            {{ _self.showLine(fsc, '(b) ' ~ i18n.trans('payment-previous-periods'), fsc.da_impuestos['pago-ant']) }}
                            {{ _self.showLine(fsc, i18n.trans('fractional-payment-corporation-tax') ~ ' (MOD 202)', fsc.da_impuestos['pagofraccionado-mod202']) }}
                            <tr>
                                <td class=\"text-center\" colspan=\"2\">
                                    <strong>{{ i18n.trans('previous-exercise')|upper }}</strong>
                                </td>
                            </tr>
                            {{ _self.showLine(fsc, i18n.trans('result') ~ ' (129xxx)', fsc.da_impuestos['resultado_ejanterior']) }}
                            {{ _self.showLine(fsc, i18n.trans('negative-results-other-exercises') ~ ' (121xxx)', fsc.da_impuestos['resultado_negotros']) }}
                            {{ _self.showLine(fsc, i18n.trans('total-result'), fsc.da_impuestos['total']) }}
                            {{ _self.showLine(fsc, '(a) ' ~ i18n.trans('corporate-tax'), fsc.da_impuestos['sociedades_ant']) }}
                            {{ _self.showLine(fsc, '(b) ' ~ i18n.trans('corporate-tax-advances') ~ ' (4709xxx)', fsc.da_impuestos['sociedades_adelantos']) }}
                            {{ _self.showLine(fsc, i18n.trans('total-pay-return-corporate-tax') ~ ' (MOD 200)', fsc.da_impuestos['total-mod200']) }}
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"card border-success shadow mb-3\">
                    <div class=\"card-header bg-success text-white text-center\">
                        <strong>{{ i18n.trans('short-situation-results')|upper }}</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table mb-0\">
                            {{ _self.showLine(fsc, i18n.trans('total') ~ ' (' ~ i18n.trans('treasury') ~ ' + ' ~ i18n.trans('expenses-charges') ~ ' + MOD 111 + MOD 115 + MOD 303 + MOD 202 + MOD 200)', fsc.da_resultadosituacion['total']) }}
                        </table>
                    </div>
                </div>
                <div class=\"card border-dark shadow mb-3\">
                    <div class=\"card-header bg-dark text-white text-center\">
                        <strong>{{ i18n.trans('reserves-results-exercises')|upper }}</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            {{ _self.showLine(fsc, '(a) ' ~ i18n.trans('legal-reserve') ~ ' (112xxx)', fsc.da_reservasresultados['reservalegal']) }}
                            {{ _self.showLine(fsc, '(b) ' ~ i18n.trans('voluntary-reserves') ~ ' (113xxx)', fsc.da_reservasresultados['reservasvoluntarias']) }}
                            {{ _self.showLine(fsc, '(c) ' ~ i18n.trans('previous-exercise-result') ~ ' (129xxx + 121xxx)', fsc.da_reservasresultados['resultadoejercicioanterior']) }}
                            {{ _self.showLine(fsc, i18n.trans('total'), fsc.da_reservasresultados['total_reservas']) }}
                        </table>
                    </div>
                </div>
                <div class=\"card border-primary shadow mb-3\">
                    <div class=\"card-header bg-primary text-white text-center\">
                        <strong>{{ i18n.trans('current-exercise-results')|upper }}</strong>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped mb-0\">
                            {{ _self.showLine(fsc, i18n.trans('sales'), fsc.da_resultadoejercicioactual['total_ventas']) }}
                            {{ _self.showLine(fsc, i18n.trans('expenses'), fsc.da_resultadoejercicioactual['total_gastos']) }}
                            {{ _self.showLine(fsc, i18n.trans('result-exploitation'), fsc.da_resultadoejercicioactual['resultadoexplotacion']) }}
                            <tr>
                                <td colspan=\"2\"></td>
                            </tr>
                            {{ _self.showLine(fsc, i18n.trans('amortization-intangible-assets') ~ ' (680xxx)', fsc.da_resultadoejercicioactual['amortizacioninmovintang']) }}
                            {{ _self.showLine(fsc, i18n.trans('amortization-intangible-material') ~ ' (681xxx)', fsc.da_resultadoejercicioactual['amortizacioninmovmat']) }}
                            {{ _self.showLine(fsc, i18n.trans('total-amortizations'), fsc.da_resultadoejercicioactual['total_amort']) }}
                            {{ _self.showLine(fsc, i18n.trans('result-before-taxes-rai'), fsc.da_resultadoejercicioactual['resultado_antes_impuestos']) }}
                            {{ _self.showLine(fsc, i18n.trans('corporate-tax'), fsc.da_resultadoejercicioactual['impuesto_sociedades']) }}
                            {{ _self.showLine(fsc, i18n.trans('result-after-taxes-rdi'), fsc.da_resultadoejercicioactual['resultado_despues_impuestos']) }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}

    <style>
        #selectYear {
            max-width: 300px;
        }

        .money {
            white-space: nowrap;
            text-align: right;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        \$(document).ready(function () {
            \$(document).on('change', '#selectYear', function () {
                window.location = '{{ fsc.url() }}?code=' + \$('#selectYear option:selected').val();
            });
        });
    </script>
{% endblock %}

{% macro showLine(fsc, title, price) %}
    <tr>
        <td>{{ title }}</td>
        <td class=\"money\">{{ fsc.show_precio(price)|raw }}</td>
    </tr>
{% endmacro %}", "ReportTreasury.html.twig", "C:\\xampp\\htdocs\\public\\Plugins\\Informes\\View\\ReportTreasury.html.twig");
    }
}
