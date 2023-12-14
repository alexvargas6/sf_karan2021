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

/* ReportBreakdown.html.twig */
class __TwigTemplate_917dc6e9378c263cb72f3b8af1484d2c10a200a3ffd23131adf3933482c589fb extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "ReportBreakdown.html.twig", 7)->unwrap();
        // line 6
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "ReportBreakdown.html.twig", 6);
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
            <input type=\"hidden\" name=\"generar\" value=\"informe_ventas\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h1 class=\"h3 mb-4\">
                        <i class=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 25), "icon", [], "any", false, false, false, 25), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "
                    </h1>
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["from-date"], "method", false, false, false, 30), "html", null, true);
        echo "</label>
                                <input type=\"date\" name=\"desde\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "desde", [], "any", false, false, false, 31), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["until-date"], "method", false, false, false, 36), "html", null, true);
        echo "</label>
                                <input type=\"date\" name=\"hasta\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasta", [], "any", false, false, false, 37), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 42
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["idempresa", "idempresa", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "idempresa", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source,         // line 43
($context["fsc"] ?? null), "getSelectValues", ["empresas", "idempresa", "nombrecorto", false], "method", false, false, false, 43), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["company"], "method", false, false, false, 43)], 42, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 48
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codalmacen", "codalmacen", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "codalmacen", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source,         // line 49
($context["fsc"] ?? null), "getSelectValues", ["almacenes", "codalmacen", "nombre", true], "method", false, false, false, 49), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["warehouse"], "method", false, false, false, 49)], 48, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 54
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codserie", "codserie", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "codserie", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source,         // line 55
($context["fsc"] ?? null), "getSelectValues", ["series", "codserie", "descripcion", true], "method", false, false, false, 55), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["serie"], "method", false, false, false, 55)], 54, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 60
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpago", "codpago", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "codpago", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source,         // line 61
($context["fsc"] ?? null), "getSelectValues", ["formaspago", "codpago", "descripcion", true], "method", false, false, false, 61), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["method-payment"], "method", false, false, false, 61)], 60, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 66
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["coddivisa", "coddivisa", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coddivisa", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source,         // line 67
($context["fsc"] ?? null), "getSelectValues", ["divisas", "coddivisa", "descripcion", false], "method", false, false, false, 67), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["currency"], "method", false, false, false, 67)], 66, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                ";
        // line 72
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codagente", "codagente", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "codagente", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source,         // line 73
($context["fsc"] ?? null), "getSelectValues", ["agentes", "codagente", "nombre", true], "method", false, false, false, 73), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["agent"], "method", false, false, false, 73)], 72, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                    </div>

                    <ul class=\"nav nav-pills mt-3 mb-3\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <a id=\"tabVentas\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\"
                               aria-controls=\"contentSaleReport\" href=\"#contentSaleReport\">
                                ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sales"], "method", false, false, false, 82), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li id=\"tabCompras\" class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"false\"
                               aria-controls=\"contentPurchaseReport\" href=\"#contentPurchaseReport\">
                                ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["purchases"], "method", false, false, false, 88), "html", null, true);
        echo "
                            </a>
                        </li>
                    </ul>

                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"contentSaleReport\"
                             aria-labelledby=\"contentSaleReport-tab\" role=\"tabpanel\">
                            <div class=\"form-row\">
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        ";
        // line 99
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "codpais", [], "any", false, false, false, 99), twig_get_attribute($this->env, $this->source,         // line 100
($context["fsc"] ?? null), "getSelectValues", ["paises", "codpais", "nombre", true], "method", false, false, false, 100), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["country"], "method", false, false, false, 100)], 99, $context, $this->getSourceContext());
        echo "
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["province"], "method", false, false, false, 105), "html", null, true);
        echo "</label>
                                        <select name=\"provincia\" class=\"form-control\" id=\"provinces\"></select>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["minimum-amount"], "method", false, false, false, 111), "html", null, true);
        echo "</label>
                                        <input type=\"number\" class=\"form-control\" name=\"sale-minimo\"
                                               placeholder=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["optional"], "method", false, false, false, 113), "html", null, true);
        echo "\"
                                               value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sale_minimo", [], "any", false, false, false, 114), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["customer"], "method", false, false, false, 119), "html", null, true);
        echo "</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"customer\"
                                                   placeholder=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["any-customer"], "method", false, false, false, 122), "html", null, true);
        echo "\"
                                                   value=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, false, false, 123), "nombre", [], "any", false, false, false, 123), "html", null, true);
        echo "\">
                                            <input type=\"hidden\" name=\"codcliente\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, false, false, 124), "codcliente", [], "any", false, false, false, 124), "html", null, true);
        echo "\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-secondary\" type=\"button\"
                                                        onclick=\"cleanCustomer()\">
                                                    <span class=\"fa fa-times\"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["billing-address"], "method", false, false, false, 136), "html", null, true);
        echo "</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"billingAddress\"
                                                   placeholder=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["any-address"], "method", false, false, false, 139), "html", null, true);
        echo "\"
                                                   value=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAddress", [twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "billingAddress", [], "any", false, false, false, 140)], "method", false, false, false, 140), "html", null, true);
        echo "\">
                                            <input type=\"hidden\" name=\"idcontactofact\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "billingAddress", [], "any", false, false, false, 141), "idcontacto", [], "any", false, false, false, 141), "html", null, true);
        echo "\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-secondary\" type=\"button\"
                                                        onclick=\"cleanBillingAddress()\">
                                                    <span class=\"fa fa-times\"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["shipping-address"], "method", false, false, false, 153), "html", null, true);
        echo "</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"shippingAddress\"
                                                   placeholder=\"";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["any-address"], "method", false, false, false, 156), "html", null, true);
        echo "\"
                                                   value=\"";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAddress", [twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "shippingAddress", [], "any", false, false, false, 157)], "method", false, false, false, 157), "html", null, true);
        echo "\">
                                            <input type=\"hidden\" name=\"idcontactoenv\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "shippingAddress", [], "any", false, false, false, 158), "idcontacto", [], "any", false, false, false, 158), "html", null, true);
        echo "\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-secondary\" type=\"button\"
                                                        onclick=\"cleanShippingAddress()\">
                                                    <span class=\"fa fa-times\"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <p class=\"text-muted\">";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sale-report-legend"], "method", false, false, false, 169), "html", null, true);
        echo "</p>
                                    <div class=\"form-group\">
                                        ";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["type"], "method", false, false, false, 171), "html", null, true);
        echo "
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"sale-unidades\"
                                                   id=\"saleUndFalse\"
                                                   value=\"0\" ";
        // line 175
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sale_unidades", [], "any", false, false, false, 175), 0))) ? ("checked") : (""));
        echo ">
                                            <label class=\"form-check-label\" for=\"saleUndFalse\">
                                                ";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["net"], "method", false, false, false, 177), "html", null, true);
        echo "
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"sale-unidades\"
                                                   id=\"saleUndTrue\"
                                                   value=\"1\" ";
        // line 183
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sale_unidades", [], "any", false, false, false, 183), 1))) ? ("checked") : (""));
        echo ">
                                            <label class=\"form-check-label\" for=\"saleUndTrue\">
                                                ";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["quantities"], "method", false, false, false, 185), "html", null, true);
        echo "
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"contentPurchaseReport\" aria-labelledby=\"contentPurchaseReport-tab\"
                             role=\"tabpanel\">
                            <div class=\"form-row\">
                                <div class=\"col-12 col-md-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["supplier"], "method", false, false, false, 198), "html", null, true);
        echo "
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"supplier\"
                                                   placeholder=\"";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["any-supplier"], "method", false, false, false, 201), "html", null, true);
        echo "\"
                                                   value=\"";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "proveedor", [], "any", false, false, false, 202), "nombre", [], "any", false, false, false, 202), "html", null, true);
        echo "\">
                                            <input type=\"hidden\" name=\"codproveedor\"
                                                   value=\"";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "proveedor", [], "any", false, false, false, 204), "codproveedor", [], "any", false, false, false, 204), "html", null, true);
        echo "\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-secondary\" type=\"button\"
                                                        onclick=\"cleanSupplier()\">
                                                    <span class=\"fa fa-times\"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["minimum-amount"], "method", false, false, false, 216), "html", null, true);
        echo "
                                        <input type=\"number\" class=\"form-control\" name=\"purchase-minimo\"
                                               placeholder=\"";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["optional"], "method", false, false, false, 218), "html", null, true);
        echo "\"
                                               value=\"";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "purchase_minimo", [], "any", false, false, false, 219), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <p class=\"text-muted\">";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["purchase-report-legend"], "method", false, false, false, 223), "html", null, true);
        echo "</p>
                                    <div class=\"form-group\">
                                        ";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["type"], "method", false, false, false, 225), "html", null, true);
        echo "
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"purchase-unidades\"
                                                   id=\"purchaseUndFalse\"
                                                   value=\"0\" ";
        // line 229
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "purchase_unidades", [], "any", false, false, false, 229), 0))) ? ("checked") : (""));
        echo ">
                                            <label class=\"form-check-label\" for=\"purchaseUndFalse\">
                                                ";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["net"], "method", false, false, false, 231), "html", null, true);
        echo "
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"purchase-unidades\"
                                                   id=\"purchaseUndTrue\"
                                                   value=\"1\" ";
        // line 237
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "purchase_unidades", [], "any", false, false, false, 237), 1))) ? ("checked") : (""));
        echo ">
                                            <label class=\"form-check-label\" for=\"purchaseUndTrue\">
                                                ";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["quantities"], "method", false, false, false, 239), "html", null, true);
        echo "
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-eye mr-2\"></i>";
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["show"], "method", false, false, false, 250), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </form>
    </div>
";
    }

    // line 258
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 259
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery-ui-dist/jquery-ui.min.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 263
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 264
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery-ui-dist/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        function cleanBillingAddress() {
            \$('#billingAddress, input[name=\"idcontactofact\"]').val('')
        }

        function cleanCustomer() {
            \$('#customer, input[name=\"codcliente\"]').val('')
        }

        function cleanShippingAddress() {
            \$('#shippingAddress, input[name=\"idcontactoenv\"]').val('')
        }

        function cleanSupplier() {
            \$('#supplier, input[name=\"codproveedor\"]').val('')
        }

        function loadProvinces() {
            let formData = {};
            formData[\"action\"] = \"get-provinces\";
            formData[\"codpais\"] = \$(\"#codpais option:selected\").val();
            formData[\"provincia\"] = '";
        // line 288
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "provincia", [], "any", false, false, false, 288), "html", null, true);
        echo "';
            \$('#provinces').html('');

            \$.ajax({
                method: \"POST\",
                url: \"";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 293), "html", null, true);
        echo "\",
                data: formData,
                dataType: \"json\",
                success: function (results) {
                    \$('#provinces').html(results);
                },
                error: function (msg) {
                    alert(msg.status + \" \" + msg.responseText);
                }
            });
        }

        \$(document).ready(function () {
            loadProvinces();

            \$(document).on('click', '#tabVentas', function () {
                \$('input[name=\"generar\"]').val('informe_ventas');
            });

            \$(document).on('click', '#tabCompras', function () {
                \$('input[name=\"generar\"]').val('informe_compras');
            });

            \$('#codpais').change(function () {
                loadProvinces();
            });

            \$(\"#customer\").autocomplete({
                source: function (request, response) {
                    let formData = {};
                    formData[\"action\"] = \"autocomplete-customer\";
                    formData[\"query\"] = \$(\"#customer\").val();
                    \$('input[name=\"codcliente\"]').val('');

                    \$.ajax({
                        method: \"POST\",
                        url: \"";
        // line 329
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 329), "html", null, true);
        echo "\",
                        data: formData,
                        dataType: \"json\",
                        success: function (results) {
                            let values = [];
                            results.forEach(function (element) {
                                if (element.key === null || element.key === element.value) {
                                    values.push(element);
                                } else {
                                    values.push({key: element.key, value: element.key + \" | \" + element.value});
                                }
                            });
                            response(values);
                        },
                        error: function (msg) {
                            alert(msg.status + \" \" + msg.responseText);
                        }
                    });
                },
                select: function (event, ui) {
                    if (ui.item.key !== null) {
                        \$('input[name=\"codcliente\"]').val(ui.item.key);

                        let value = ui.item.value.split(\" | \");
                        if (value.length > 1) {
                            ui.item.value = value[1];
                        } else {
                            ui.item.value = value[0];
                        }
                    }
                }
            });

            \$(\"#billingAddress\").autocomplete({
                source: function (request, response) {
                    let formData = {};
                    formData[\"action\"] = \"autocomplete-billing-address\";
                    formData[\"query\"] = \$(\"#billingAddress\").val();
                    formData[\"customer\"] = \$('input[name=\"codcliente\"]').val();
                    \$('input[name=\"idcontactofact\"]').val('');

                    if (formData[\"customer\"] === '') {
                        return;
                    }

                    \$.ajax({
                        method: \"POST\",
                        url: \"";
        // line 376
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 376), "html", null, true);
        echo "\",
                        data: formData,
                        dataType: \"json\",
                        success: function (results) {
                            let values = [];
                            results.forEach(function (element) {
                                if (element.key === null || element.key === element.value) {
                                    values.push(element);
                                } else {
                                    values.push({key: element.key, value: element.key + \" | \" + element.value});
                                }
                            });
                            response(values);
                        },
                        error: function (msg) {
                            alert(msg.status + \" \" + msg.responseText);
                        }
                    });
                },
                select: function (event, ui) {
                    if (ui.item.key !== null) {
                        \$('input[name=\"idcontactofact\"]').val(ui.item.key);

                        let value = ui.item.value.split(\" | \");
                        if (value.length > 1) {
                            ui.item.value = value[1];
                        } else {
                            ui.item.value = value[0];
                        }
                    }
                }
            });

            \$(\"#shippingAddress\").autocomplete({
                source: function (request, response) {
                    let formData = {};
                    formData[\"action\"] = \"autocomplete-shipping-address\";
                    formData[\"query\"] = \$(\"#shippingAddress\").val();
                    formData[\"customer\"] = \$('input[name=\"codcliente\"]').val();
                    \$('input[name=\"idcontactoenv\"]').val('');

                    if (formData[\"customer\"] === '') {
                        return;
                    }

                    \$.ajax({
                        method: \"POST\",
                        url: \"";
        // line 423
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 423), "html", null, true);
        echo "\",
                        data: formData,
                        dataType: \"json\",
                        success: function (results) {
                            let values = [];
                            results.forEach(function (element) {
                                if (element.key === null || element.key === element.value) {
                                    values.push(element);
                                } else {
                                    values.push({key: element.key, value: element.key + \" | \" + element.value});
                                }
                            });
                            response(values);
                        },
                        error: function (msg) {
                            alert(msg.status + \" \" + msg.responseText);
                        }
                    });
                },
                select: function (event, ui) {
                    if (ui.item.key !== null) {
                        \$('input[name=\"idcontactoenv\"]').val(ui.item.key);

                        let value = ui.item.value.split(\" | \");
                        if (value.length > 1) {
                            ui.item.value = value[1];
                        } else {
                            ui.item.value = value[0];
                        }
                    }
                }
            });

            \$(\"#supplier\").autocomplete({
                source: function (request, response) {
                    let formData = {};
                    formData[\"action\"] = \"autocomplete-supplier\";
                    formData[\"query\"] = \$(\"#supplier\").val();
                    \$('input[name=\"codproveedor\"]').val('');

                    \$.ajax({
                        method: \"POST\",
                        url: \"";
        // line 465
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 465), "html", null, true);
        echo "\",
                        data: formData,
                        dataType: \"json\",
                        success: function (results) {
                            let values = [];
                            results.forEach(function (element) {
                                if (element.key === null || element.key === element.value) {
                                    values.push(element);
                                } else {
                                    values.push({key: element.key, value: element.key + \" | \" + element.value});
                                }
                            });
                            response(values);
                        },
                        error: function (msg) {
                            alert(msg.status + \" \" + msg.responseText);
                        }
                    });
                },
                select: function (event, ui) {
                    if (ui.item.key !== null) {
                        \$('input[name=\"codproveedor\"]').val(ui.item.key);

                        let value = ui.item.value.split(\" | \");
                        if (value.length > 1) {
                            ui.item.value = value[1];
                        } else {
                            ui.item.value = value[0];
                        }
                    }
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ReportBreakdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 465,  667 => 423,  617 => 376,  567 => 329,  528 => 293,  520 => 288,  494 => 265,  489 => 264,  485 => 263,  479 => 260,  474 => 259,  470 => 258,  459 => 250,  445 => 239,  440 => 237,  431 => 231,  426 => 229,  419 => 225,  414 => 223,  407 => 219,  403 => 218,  398 => 216,  383 => 204,  378 => 202,  374 => 201,  368 => 198,  352 => 185,  347 => 183,  338 => 177,  333 => 175,  326 => 171,  321 => 169,  307 => 158,  303 => 157,  299 => 156,  293 => 153,  278 => 141,  274 => 140,  270 => 139,  264 => 136,  249 => 124,  245 => 123,  241 => 122,  235 => 119,  227 => 114,  223 => 113,  218 => 111,  209 => 105,  201 => 100,  200 => 99,  186 => 88,  177 => 82,  165 => 73,  164 => 72,  156 => 67,  155 => 66,  147 => 61,  146 => 60,  138 => 55,  137 => 54,  129 => 49,  128 => 48,  120 => 43,  119 => 42,  111 => 37,  107 => 36,  99 => 31,  95 => 30,  85 => 25,  77 => 20,  71 => 18,  67 => 17,  56 => 10,  52 => 9,  47 => 6,  45 => 7,  38 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
* Copyright (C) 2019-2022 Carlos Garcia Gomez <carlos@facturascripts.com>
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
            <input type=\"hidden\" name=\"generar\" value=\"informe_ventas\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h1 class=\"h3 mb-4\">
                        <i class=\"{{ fsc.getPageData().icon }}\"></i> {{ fsc.title }}
                    </h1>
                    <div class=\"form-row\">
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">{{ i18n.trans('from-date') }}</label>
                                <input type=\"date\" name=\"desde\" class=\"form-control\" value=\"{{ fsc.desde }}\"/>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">{{ i18n.trans('until-date') }}</label>
                                <input type=\"date\" name=\"hasta\" class=\"form-control\" value=\"{{ fsc.hasta }}\"/>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('idempresa', 'idempresa', fsc.idempresa,
                                    fsc.getSelectValues('empresas', 'idempresa', 'nombrecorto', false), i18n.trans('company')) }}
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('codalmacen', 'codalmacen', fsc.codalmacen,
                                    fsc.getSelectValues('almacenes', 'codalmacen', 'nombre', true), i18n.trans('warehouse')) }}
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('codserie', 'codserie', fsc.codserie,
                                    fsc.getSelectValues('series', 'codserie', 'descripcion', true), i18n.trans('serie')) }}
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('codpago', 'codpago', fsc.codpago,
                                    fsc.getSelectValues('formaspago', 'codpago', 'descripcion', true), i18n.trans('method-payment')) }}
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('coddivisa', 'coddivisa', fsc.coddivisa,
                                    fsc.getSelectValues('divisas', 'coddivisa', 'descripcion', false), i18n.trans('currency')) }}
                            </div>
                        </div>
                        <div class=\"col-12 col-md-3\">
                            <div class=\"form-group\">
                                {{ forms.simpleSelect('codagente', 'codagente', fsc.codagente,
                                    fsc.getSelectValues('agentes', 'codagente', 'nombre', true), i18n.trans('agent')) }}
                            </div>
                        </div>
                    </div>

                    <ul class=\"nav nav-pills mt-3 mb-3\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <a id=\"tabVentas\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\"
                               aria-controls=\"contentSaleReport\" href=\"#contentSaleReport\">
                                {{ i18n.trans('sales') }}
                            </a>
                        </li>
                        <li id=\"tabCompras\" class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"false\"
                               aria-controls=\"contentPurchaseReport\" href=\"#contentPurchaseReport\">
                                {{ i18n.trans('purchases') }}
                            </a>
                        </li>
                    </ul>

                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"contentSaleReport\"
                             aria-labelledby=\"contentSaleReport-tab\" role=\"tabpanel\">
                            <div class=\"form-row\">
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        {{ forms.simpleSelect('codpais', 'codpais', fsc.codpais,
                                            fsc.getSelectValues('paises', 'codpais', 'nombre', true), i18n.trans('country')) }}
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">{{ i18n.trans('province') }}</label>
                                        <select name=\"provincia\" class=\"form-control\" id=\"provinces\"></select>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">{{ i18n.trans('minimum-amount') }}</label>
                                        <input type=\"number\" class=\"form-control\" name=\"sale-minimo\"
                                               placeholder=\"{{ i18n.trans('optional') }}\"
                                               value=\"{{ fsc.sale_minimo }}\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">{{ i18n.trans('customer') }}</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"customer\"
                                                   placeholder=\"{{ i18n.trans('any-customer') }}\"
                                                   value=\"{{ fsc.cliente.nombre }}\">
                                            <input type=\"hidden\" name=\"codcliente\" value=\"{{ fsc.cliente.codcliente }}\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-secondary\" type=\"button\"
                                                        onclick=\"cleanCustomer()\">
                                                    <span class=\"fa fa-times\"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">{{ i18n.trans('billing-address') }}</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"billingAddress\"
                                                   placeholder=\"{{ i18n.trans('any-address') }}\"
                                                   value=\"{{ fsc.getAddress(fsc.billingAddress) }}\">
                                            <input type=\"hidden\" name=\"idcontactofact\" value=\"{{ fsc.billingAddress.idcontacto }}\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-secondary\" type=\"button\"
                                                        onclick=\"cleanBillingAddress()\">
                                                    <span class=\"fa fa-times\"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-4\">
                                    <div class=\"form-group\">
                                        <label class=\"mb-1\">{{ i18n.trans('shipping-address') }}</label>
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"shippingAddress\"
                                                   placeholder=\"{{ i18n.trans('any-address') }}\"
                                                   value=\"{{ fsc.getAddress(fsc.shippingAddress) }}\">
                                            <input type=\"hidden\" name=\"idcontactoenv\" value=\"{{ fsc.shippingAddress.idcontacto }}\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-secondary\" type=\"button\"
                                                        onclick=\"cleanShippingAddress()\">
                                                    <span class=\"fa fa-times\"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <p class=\"text-muted\">{{ i18n.trans('sale-report-legend') }}</p>
                                    <div class=\"form-group\">
                                        {{ i18n.trans('type') }}
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"sale-unidades\"
                                                   id=\"saleUndFalse\"
                                                   value=\"0\" {{ fsc.sale_unidades == 0 ? 'checked' : '' }}>
                                            <label class=\"form-check-label\" for=\"saleUndFalse\">
                                                {{ i18n.trans('net') }}
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"sale-unidades\"
                                                   id=\"saleUndTrue\"
                                                   value=\"1\" {{ fsc.sale_unidades == 1 ? 'checked' : '' }}>
                                            <label class=\"form-check-label\" for=\"saleUndTrue\">
                                                {{ i18n.trans('quantities') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"contentPurchaseReport\" aria-labelledby=\"contentPurchaseReport-tab\"
                             role=\"tabpanel\">
                            <div class=\"form-row\">
                                <div class=\"col-12 col-md-3\">
                                    <div class=\"form-group\">
                                        {{ i18n.trans('supplier') }}
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"supplier\"
                                                   placeholder=\"{{ i18n.trans('any-supplier') }}\"
                                                   value=\"{{ fsc.proveedor.nombre }}\">
                                            <input type=\"hidden\" name=\"codproveedor\"
                                                   value=\"{{ fsc.proveedor.codproveedor }}\">
                                            <div class=\"input-group-append\">
                                                <button class=\"btn btn-secondary\" type=\"button\"
                                                        onclick=\"cleanSupplier()\">
                                                    <span class=\"fa fa-times\"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-md-3\">
                                    <div class=\"form-group\">
                                        {{ i18n.trans('minimum-amount') }}
                                        <input type=\"number\" class=\"form-control\" name=\"purchase-minimo\"
                                               placeholder=\"{{ i18n.trans('optional') }}\"
                                               value=\"{{ fsc.purchase_minimo }}\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <p class=\"text-muted\">{{ i18n.trans('purchase-report-legend') }}</p>
                                    <div class=\"form-group\">
                                        {{ i18n.trans('type') }}
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"purchase-unidades\"
                                                   id=\"purchaseUndFalse\"
                                                   value=\"0\" {{ fsc.purchase_unidades == 0 ? 'checked' : '' }}>
                                            <label class=\"form-check-label\" for=\"purchaseUndFalse\">
                                                {{ i18n.trans('net') }}
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"purchase-unidades\"
                                                   id=\"purchaseUndTrue\"
                                                   value=\"1\" {{ fsc.purchase_unidades == 1 ? 'checked' : '' }}>
                                            <label class=\"form-check-label\" for=\"purchaseUndTrue\">
                                                {{ i18n.trans('quantities') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
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
{% endblock %}

{% block css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('node_modules/jquery-ui-dist/jquery-ui.min.css') }}\"/>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('node_modules/jquery-ui-dist/jquery-ui.min.js') }}\"></script>

    <script>
        function cleanBillingAddress() {
            \$('#billingAddress, input[name=\"idcontactofact\"]').val('')
        }

        function cleanCustomer() {
            \$('#customer, input[name=\"codcliente\"]').val('')
        }

        function cleanShippingAddress() {
            \$('#shippingAddress, input[name=\"idcontactoenv\"]').val('')
        }

        function cleanSupplier() {
            \$('#supplier, input[name=\"codproveedor\"]').val('')
        }

        function loadProvinces() {
            let formData = {};
            formData[\"action\"] = \"get-provinces\";
            formData[\"codpais\"] = \$(\"#codpais option:selected\").val();
            formData[\"provincia\"] = '{{ fsc.provincia }}';
            \$('#provinces').html('');

            \$.ajax({
                method: \"POST\",
                url: \"{{ fsc.url() }}\",
                data: formData,
                dataType: \"json\",
                success: function (results) {
                    \$('#provinces').html(results);
                },
                error: function (msg) {
                    alert(msg.status + \" \" + msg.responseText);
                }
            });
        }

        \$(document).ready(function () {
            loadProvinces();

            \$(document).on('click', '#tabVentas', function () {
                \$('input[name=\"generar\"]').val('informe_ventas');
            });

            \$(document).on('click', '#tabCompras', function () {
                \$('input[name=\"generar\"]').val('informe_compras');
            });

            \$('#codpais').change(function () {
                loadProvinces();
            });

            \$(\"#customer\").autocomplete({
                source: function (request, response) {
                    let formData = {};
                    formData[\"action\"] = \"autocomplete-customer\";
                    formData[\"query\"] = \$(\"#customer\").val();
                    \$('input[name=\"codcliente\"]').val('');

                    \$.ajax({
                        method: \"POST\",
                        url: \"{{ fsc.url() }}\",
                        data: formData,
                        dataType: \"json\",
                        success: function (results) {
                            let values = [];
                            results.forEach(function (element) {
                                if (element.key === null || element.key === element.value) {
                                    values.push(element);
                                } else {
                                    values.push({key: element.key, value: element.key + \" | \" + element.value});
                                }
                            });
                            response(values);
                        },
                        error: function (msg) {
                            alert(msg.status + \" \" + msg.responseText);
                        }
                    });
                },
                select: function (event, ui) {
                    if (ui.item.key !== null) {
                        \$('input[name=\"codcliente\"]').val(ui.item.key);

                        let value = ui.item.value.split(\" | \");
                        if (value.length > 1) {
                            ui.item.value = value[1];
                        } else {
                            ui.item.value = value[0];
                        }
                    }
                }
            });

            \$(\"#billingAddress\").autocomplete({
                source: function (request, response) {
                    let formData = {};
                    formData[\"action\"] = \"autocomplete-billing-address\";
                    formData[\"query\"] = \$(\"#billingAddress\").val();
                    formData[\"customer\"] = \$('input[name=\"codcliente\"]').val();
                    \$('input[name=\"idcontactofact\"]').val('');

                    if (formData[\"customer\"] === '') {
                        return;
                    }

                    \$.ajax({
                        method: \"POST\",
                        url: \"{{ fsc.url() }}\",
                        data: formData,
                        dataType: \"json\",
                        success: function (results) {
                            let values = [];
                            results.forEach(function (element) {
                                if (element.key === null || element.key === element.value) {
                                    values.push(element);
                                } else {
                                    values.push({key: element.key, value: element.key + \" | \" + element.value});
                                }
                            });
                            response(values);
                        },
                        error: function (msg) {
                            alert(msg.status + \" \" + msg.responseText);
                        }
                    });
                },
                select: function (event, ui) {
                    if (ui.item.key !== null) {
                        \$('input[name=\"idcontactofact\"]').val(ui.item.key);

                        let value = ui.item.value.split(\" | \");
                        if (value.length > 1) {
                            ui.item.value = value[1];
                        } else {
                            ui.item.value = value[0];
                        }
                    }
                }
            });

            \$(\"#shippingAddress\").autocomplete({
                source: function (request, response) {
                    let formData = {};
                    formData[\"action\"] = \"autocomplete-shipping-address\";
                    formData[\"query\"] = \$(\"#shippingAddress\").val();
                    formData[\"customer\"] = \$('input[name=\"codcliente\"]').val();
                    \$('input[name=\"idcontactoenv\"]').val('');

                    if (formData[\"customer\"] === '') {
                        return;
                    }

                    \$.ajax({
                        method: \"POST\",
                        url: \"{{ fsc.url() }}\",
                        data: formData,
                        dataType: \"json\",
                        success: function (results) {
                            let values = [];
                            results.forEach(function (element) {
                                if (element.key === null || element.key === element.value) {
                                    values.push(element);
                                } else {
                                    values.push({key: element.key, value: element.key + \" | \" + element.value});
                                }
                            });
                            response(values);
                        },
                        error: function (msg) {
                            alert(msg.status + \" \" + msg.responseText);
                        }
                    });
                },
                select: function (event, ui) {
                    if (ui.item.key !== null) {
                        \$('input[name=\"idcontactoenv\"]').val(ui.item.key);

                        let value = ui.item.value.split(\" | \");
                        if (value.length > 1) {
                            ui.item.value = value[1];
                        } else {
                            ui.item.value = value[0];
                        }
                    }
                }
            });

            \$(\"#supplier\").autocomplete({
                source: function (request, response) {
                    let formData = {};
                    formData[\"action\"] = \"autocomplete-supplier\";
                    formData[\"query\"] = \$(\"#supplier\").val();
                    \$('input[name=\"codproveedor\"]').val('');

                    \$.ajax({
                        method: \"POST\",
                        url: \"{{ fsc.url() }}\",
                        data: formData,
                        dataType: \"json\",
                        success: function (results) {
                            let values = [];
                            results.forEach(function (element) {
                                if (element.key === null || element.key === element.value) {
                                    values.push(element);
                                } else {
                                    values.push({key: element.key, value: element.key + \" | \" + element.value});
                                }
                            });
                            response(values);
                        },
                        error: function (msg) {
                            alert(msg.status + \" \" + msg.responseText);
                        }
                    });
                },
                select: function (event, ui) {
                    if (ui.item.key !== null) {
                        \$('input[name=\"codproveedor\"]').val(ui.item.key);

                        let value = ui.item.value.split(\" | \");
                        if (value.length > 1) {
                            ui.item.value = value[1];
                        } else {
                            ui.item.value = value[0];
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}
", "ReportBreakdown.html.twig", "C:\\xampp\\htdocs\\public\\Plugins\\Informes\\View\\ReportBreakdown.html.twig");
    }
}
