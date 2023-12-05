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

/* EditPageOption.html.twig */
class __TwigTemplate_5e55d6e4788b8ef5d8b6f08fbd411aa1f7b30b881751ff79d366511ddc2134bd extends Template
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
        // line 20
        return "Master/MenuBgTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["__internal_parse_0"] = $this->macros["__internal_parse_0"] = $this->loadTemplate("Macro/Forms.html.twig", "EditPageOption.html.twig", 21)->unwrap();
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuBgTemplate.html.twig", "EditPageOption.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid mb-3\">
        ";
        // line 26
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
        <div class=\"row\">
            <div class=\"col-4 d-print-none\">
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "backPage", [], "any", false, false, false, 29), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\">
                    <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-md-inline-block\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["back"], "method", false, false, false, 31), "html", null, true);
        echo " </span>
                </a>
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 33) . "?code=") . twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 33)), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\"
                   title=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["refresh"], "method", false, false, false, 34), "html", null, true);
        echo "\">
                    <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                </a>
            </div>
            <div class=\"col text-right\">
                <h1 class=\"h4\">
                    ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 40), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
";
    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header\">
                        <span class=\"text-info\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 54), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"code\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 58), "html", null, true);
        echo "\"/>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <p>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["page-option-info"], "method", false, false, false, 61), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"input-group mb-3\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-users\"></i>
                                            </span>
                                        </div>
                                        ";
        // line 70
        $context["userList"] = twig_array_merge(["" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["all"], "method", false, false, false, 70)], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getUserList", [], "method", false, false, false, 70));
        // line 71
        echo "                                        ";
        echo twig_call_macro($macros["__internal_parse_0"], "macro_simpleSelect", ["nick", "nick", twig_get_attribute($this->env, $this->source,         // line 74
($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 74),         // line 75
($context["userList"] ?? null), false, false, ["onChange" => "this.form.submit()"]], 71, $context, $this->getSourceContext());
        // line 78
        echo "
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <form method=\"post\" name=\"main_form\">
                        <input type=\"hidden\" name=\"action\" value=\"save\"/>
                        <input type=\"hidden\" name=\"code\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 86), "html", null, true);
        echo "\"/>
                        <input type=\"hidden\" name=\"nick\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 87), "html", null, true);
        echo "\"/>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["title"], "method", false, false, false, 92), "html", null, true);
        echo "</th>
                                    <th class=\"text-center\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["display"], "method", false, false, false, 93), "html", null, true);
        echo "</th>
                                    <th>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["level"], "method", false, false, false, 94), "html", null, true);
        echo "</th>
                                    <th>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["readonly"], "method", false, false, false, 95), "html", null, true);
        echo "</th>
                                    <th width=\"150\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["decimals"], "method", false, false, false, 96), "html", null, true);
        echo "</th>
                                    <th>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["width"], "method", false, false, false, 97), "html", null, true);
        echo "</th>
                                    <th class=\"text-right\" width=\"130\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sort"], "method", false, false, false, 98), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "columns", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 103
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "columns", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 104
                echo "                                        ";
                echo twig_call_macro($macros["_self"], "macro_editGroupColumn", [$context["col"], ($context["i18n"] ?? null)], 104, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                                </tbody>
                            </table>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "model", [], "any", false, false, false, 112), "exists", [], "method", false, false, false, 112)) {
            // line 113
            echo "                                    <div class=\"col\">
                                        <button class=\"btn btn-sm btn btn-danger\" type=\"button\"
                                                onclick=\"deleteOptions();\">
                                            <i class=\"fas fa-trash-alt fa-fw\"
                                               aria-hidden=\"true\"></i> ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["delete"], "method", false, false, false, 117), "html", null, true);
            echo "
                                        </button>
                                    </div>
                                ";
        }
        // line 121
        echo "                                <div class=\"col text-right\">
                                    <button class=\"btn btn-sm btn btn-secondary\" type=\"reset\">
                                        <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i> ";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["undo"], "method", false, false, false, 123), "html", null, true);
        echo "
                                    </button>
                                    <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["save"], "method", false, false, false, 126), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 138
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function deleteOptions() {
            bootbox.confirm({
                title: \"";
        // line 152
        echo twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["confirm-delete"], "method", false, false, false, 152);
        echo "\",
                message: \"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["are-you-sure"], "method", false, false, false, 153), "html", null, true);
        echo "\",
                closeButton: false,
                buttons: {
                    cancel: {
                        label: \"<i class='fas fa-times'></i> ";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["cancel"], "method", false, false, false, 157), "html", null, true);
        echo "\"
                    },
                    confirm: {
                        label: \"<i class='fas fa-check'></i> ";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["delete"], "method", false, false, false, 160), "html", null, true);
        echo "\",
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result) {
                        document.main_form.action.value = 'delete';
                        document.main_form.submit();
                    }
                }
            });
        }
    </script>
";
    }

    // line 175
    public function macro_editGroupColumn($__col__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "col" => $__col__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 176
            echo "    <tr>
        <td title=\"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["title"], "method", false, false, false, 177), "html", null, true);
            echo "\">
            <input type=\"text\" class=\"form-control\" name=\"";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 178), "html", null, true);
            echo "-title\"
                   placeholder=\"";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "title", [], "any", false, false, false, 179)], "method", false, false, false, 179), "html", null, true);
            echo "\" autocomplete=\"off\"/>
        </td>
        <td class=\"text-center\">
            ";
            // line 182
            echo twig_call_macro($macros["_self"], "macro_editGroupColumnDisplay", [($context["col"] ?? null), ($context["i18n"] ?? null)], 182, $context, $this->getSourceContext());
            echo "
        </td>
        <td title=\"";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["level"], "method", false, false, false, 184), "html", null, true);
            echo "\">
            <input type=\"number\" class=\"form-control\" name=\"";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 185), "html", null, true);
            echo "-level\" min=\"0\" max=\"99\" step=\"1\"
                   value=\"";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "level", [], "any", false, false, false, 186), "html", null, true);
            echo "\"/>
        </td>
        <td title=\"";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["readonly"], "method", false, false, false, 188), "html", null, true);
            echo "\">
            ";
            // line 189
            echo twig_call_macro($macros["__internal_parse_0"], "macro_simpleSelect", [(twig_get_attribute($this->env, $this->source,             // line 190
($context["col"] ?? null), "name", [], "any", false, false, false, 190) . "-readonly"), (twig_get_attribute($this->env, $this->source,             // line 191
($context["col"] ?? null), "name", [], "any", false, false, false, 191) . "-readonly"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 192
($context["col"] ?? null), "widget", [], "any", false, false, false, 192), "readonly", [], "any", false, false, false, 192), ["true" => twig_get_attribute($this->env, $this->source,             // line 193
($context["i18n"] ?? null), "trans", ["yes"], "method", false, false, false, 193), "false" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["no"], "method", false, false, false, 193), "dinamic" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["auto"], "method", false, false, false, 193)], false, false, []], 189, $context, $this->getSourceContext());
            // line 196
            echo "
        </td>
        <td title=\"";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["decimals"], "method", false, false, false, 198), "html", null, true);
            echo "\">
            ";
            // line 199
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "widget", [], "any", false, false, false, 199), "gridFormat", [], "method", false, false, false, 199))) {
                // line 200
                echo "                <input type=\"number\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 200), "html", null, true);
                echo "-decimal\" min=\"0\" max=\"7\" step=\"1\"
                       value=\"";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "widget", [], "any", false, false, false, 201), "decimal", [], "any", false, false, false, 201), "html", null, true);
                echo "\" class=\"form-control\"/>
            ";
            }
            // line 203
            echo "        </td>
        <td title=\"";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["width"], "method", false, false, false, 204), "html", null, true);
            echo "\">
            ";
            // line 205
            echo twig_call_macro($macros["__internal_parse_0"], "macro_simpleSelect", [(twig_get_attribute($this->env, $this->source,             // line 206
($context["col"] ?? null), "name", [], "any", false, false, false, 206) . "-numcolumns"), (twig_get_attribute($this->env, $this->source,             // line 207
($context["col"] ?? null), "name", [], "any", false, false, false, 207) . "-numcolumns"), twig_get_attribute($this->env, $this->source,             // line 208
($context["col"] ?? null), "numcolumns", [], "any", false, false, false, 208), ["0" => twig_get_attribute($this->env, $this->source,             // line 209
($context["i18n"] ?? null), "trans", ["auto"], "method", false, false, false, 209), "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12"], false, false, []], 205, $context, $this->getSourceContext());
            // line 212
            echo "
        </td>
        <td title=\"";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sort"], "method", false, false, false, 214), "html", null, true);
            echo "\">
            <input type=\"number\" name=\"";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 215), "html", null, true);
            echo "-order\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "order", [], "any", false, false, false, 215), "html", null, true);
            echo "\" class=\"form-control text-right\"/>
        </td>
    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 220
    public function macro_editGroupColumnDisplay($__col__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "col" => $__col__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 221
            echo "    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
        ";
            // line 222
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 222), "left"))) {
                // line 223
                echo "            <label class=\"btn btn-outline-secondary active\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["left"], "method", false, false, false, 223), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 224
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 224), "html", null, true);
                echo "-display\" value=\"left\" checked=\"\">
                <i class=\"fas fa-align-left\"></i>
            </label>
        ";
            } else {
                // line 228
                echo "            <label class=\"btn btn-outline-secondary\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["left"], "method", false, false, false, 228), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 229
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 229), "html", null, true);
                echo "-display\" value=\"left\">
                <i class=\"fas fa-align-left\"></i>
            </label>
        ";
            }
            // line 233
            echo "
        ";
            // line 234
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 234), "center"))) {
                // line 235
                echo "            <label class=\"btn btn-outline-secondary active\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["center"], "method", false, false, false, 235), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 236
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 236), "html", null, true);
                echo "-display\" value=\"center\" checked=\"\">
                <i class=\"fas fa-align-center\"></i>
            </label>
        ";
            } else {
                // line 240
                echo "            <label class=\"btn btn-outline-secondary\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["center"], "method", false, false, false, 240), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 241
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 241), "html", null, true);
                echo "-display\" value=\"center\">
                <i class=\"fas fa-align-center\"></i>
            </label>
        ";
            }
            // line 245
            echo "
        ";
            // line 246
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 246), "right"))) {
                // line 247
                echo "            <label class=\"btn btn-outline-secondary active\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["right"], "method", false, false, false, 247), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 248), "html", null, true);
                echo "-display\" value=\"right\" checked=\"\">
                <i class=\"fas fa-align-right\"></i>
            </label>
        ";
            } else {
                // line 252
                echo "            <label class=\"btn btn-outline-secondary\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["right"], "method", false, false, false, 252), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 253
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 253), "html", null, true);
                echo "-display\" value=\"right\">
                <i class=\"fas fa-align-right\"></i>
            </label>
        ";
            }
            // line 257
            echo "
        ";
            // line 258
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 258), "none"))) {
                // line 259
                echo "            <label class=\"btn btn-outline-secondary active\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["hide"], "method", false, false, false, 259), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 260
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 260), "html", null, true);
                echo "-display\" value=\"none\" checked=\"\">
                <i class=\"fas fa-eye-slash\"></i>
            </label>
        ";
            } else {
                // line 264
                echo "            <label class=\"btn btn-outline-secondary\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["hide"], "method", false, false, false, 264), "html", null, true);
                echo "\">
                <input type=\"radio\" name=\"";
                // line 265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 265), "html", null, true);
                echo "-display\" value=\"none\">
                <i class=\"fas fa-eye-slash\"></i>
            </label>
        ";
            }
            // line 269
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "EditPageOption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 269,  575 => 265,  570 => 264,  563 => 260,  558 => 259,  556 => 258,  553 => 257,  546 => 253,  541 => 252,  534 => 248,  529 => 247,  527 => 246,  524 => 245,  517 => 241,  512 => 240,  505 => 236,  500 => 235,  498 => 234,  495 => 233,  488 => 229,  483 => 228,  476 => 224,  471 => 223,  469 => 222,  466 => 221,  452 => 220,  437 => 215,  433 => 214,  429 => 212,  427 => 209,  426 => 208,  425 => 207,  424 => 206,  423 => 205,  419 => 204,  416 => 203,  411 => 201,  406 => 200,  404 => 199,  400 => 198,  396 => 196,  394 => 193,  393 => 192,  392 => 191,  391 => 190,  390 => 189,  386 => 188,  381 => 186,  377 => 185,  373 => 184,  368 => 182,  362 => 179,  358 => 178,  354 => 177,  351 => 176,  337 => 175,  319 => 160,  313 => 157,  306 => 153,  302 => 152,  294 => 148,  290 => 147,  278 => 139,  274 => 138,  259 => 126,  253 => 123,  249 => 121,  242 => 117,  236 => 113,  234 => 112,  227 => 107,  221 => 106,  212 => 104,  207 => 103,  203 => 102,  196 => 98,  192 => 97,  188 => 96,  184 => 95,  180 => 94,  176 => 93,  172 => 92,  164 => 87,  160 => 86,  150 => 78,  148 => 75,  147 => 74,  145 => 71,  143 => 70,  131 => 61,  125 => 58,  118 => 54,  108 => 48,  104 => 47,  92 => 40,  83 => 34,  79 => 33,  74 => 31,  69 => 29,  63 => 26,  57 => 24,  53 => 23,  48 => 20,  46 => 21,  39 => 20,);
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
{% extends \"Master/MenuBgTemplate.html.twig\" %}
{% from 'Macro/Forms.html.twig' import simpleSelect as simpleSelect %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    <div class=\"container-fluid mb-3\">
        {{ parent() }}
        <div class=\"row\">
            <div class=\"col-4 d-print-none\">
                <a href=\"{{ fsc.backPage }}\" class=\"btn btn-sm btn-secondary\">
                    <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-md-inline-block\">{{ i18n.trans('back') }} </span>
                </a>
                <a href=\"{{ fsc.url() ~ '?code=' ~ fsc.selectedViewName }}\" class=\"btn btn-sm btn-secondary\"
                   title=\"{{ i18n.trans('refresh') }}\">
                    <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                </a>
            </div>
            <div class=\"col text-right\">
                <h1 class=\"h4\">
                    {{ fsc.title }} <i class=\"{{ fsc.getPageData()['icon'] }}\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
{% endblock %}

{% block body %}
    {{ parent() }}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header\">
                        <span class=\"text-info\">{{ fsc.selectedViewName }}</span>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"code\" value=\"{{ fsc.selectedViewName }}\"/>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <p>{{ i18n.trans('page-option-info') }}</p>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"input-group mb-3\">
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-users\"></i>
                                            </span>
                                        </div>
                                        {% set userList = {'': i18n.trans('all')} | merge(fsc.getUserList()) %}
                                        {{ simpleSelect(
                                            'nick',
                                            'nick',
                                            fsc.selectedUser,
                                            userList,
                                            FALSE,
                                            FALSE,
                                            {'onChange': 'this.form.submit()'}) }}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <form method=\"post\" name=\"main_form\">
                        <input type=\"hidden\" name=\"action\" value=\"save\"/>
                        <input type=\"hidden\" name=\"code\" value=\"{{ fsc.selectedViewName }}\"/>
                        <input type=\"hidden\" name=\"nick\" value=\"{{ fsc.selectedUser }}\"/>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th>{{ i18n.trans('title') }}</th>
                                    <th class=\"text-center\">{{ i18n.trans('display') }}</th>
                                    <th>{{ i18n.trans('level') }}</th>
                                    <th>{{ i18n.trans('readonly') }}</th>
                                    <th width=\"150\">{{ i18n.trans('decimals') }}</th>
                                    <th>{{ i18n.trans('width') }}</th>
                                    <th class=\"text-right\" width=\"130\">{{ i18n.trans('sort') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for group in fsc.columns %}
                                    {% for col in group.columns %}
                                        {{ _self.editGroupColumn(col, i18n) }}
                                    {% endfor %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                {% if fsc.model.exists() %}
                                    <div class=\"col\">
                                        <button class=\"btn btn-sm btn btn-danger\" type=\"button\"
                                                onclick=\"deleteOptions();\">
                                            <i class=\"fas fa-trash-alt fa-fw\"
                                               aria-hidden=\"true\"></i> {{ i18n.trans('delete') }}
                                        </button>
                                    </div>
                                {% endif %}
                                <div class=\"col text-right\">
                                    <button class=\"btn btn-sm btn btn-secondary\" type=\"reset\">
                                        <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i> {{ i18n.trans('undo') }}
                                    </button>
                                    <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> {{ i18n.trans('save') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function deleteOptions() {
            bootbox.confirm({
                title: \"{{ i18n.trans('confirm-delete')|raw }}\",
                message: \"{{ i18n.trans('are-you-sure') }}\",
                closeButton: false,
                buttons: {
                    cancel: {
                        label: \"<i class='fas fa-times'></i> {{ i18n.trans('cancel') }}\"
                    },
                    confirm: {
                        label: \"<i class='fas fa-check'></i> {{ i18n.trans('delete') }}\",
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result) {
                        document.main_form.action.value = 'delete';
                        document.main_form.submit();
                    }
                }
            });
        }
    </script>
{% endblock %}

{% macro editGroupColumn(col, i18n) %}
    <tr>
        <td title=\"{{ i18n.trans('title') }}\">
            <input type=\"text\" class=\"form-control\" name=\"{{ col.name }}-title\"
                   placeholder=\"{{ i18n.trans(col.title) }}\" autocomplete=\"off\"/>
        </td>
        <td class=\"text-center\">
            {{ _self.editGroupColumnDisplay(col, i18n) }}
        </td>
        <td title=\"{{ i18n.trans('level') }}\">
            <input type=\"number\" class=\"form-control\" name=\"{{ col.name }}-level\" min=\"0\" max=\"99\" step=\"1\"
                   value=\"{{ col.level }}\"/>
        </td>
        <td title=\"{{ i18n.trans('readonly') }}\">
            {{ simpleSelect(
                col.name ~ '-readonly',
                col.name ~ '-readonly',
                col.widget.readonly,
                {'true':i18n.trans('yes'), 'false':i18n.trans('no'), 'dinamic':i18n.trans('auto')},
                FALSE,
                FALSE,
                {}) }}
        </td>
        <td title=\"{{ i18n.trans('decimals') }}\">
            {% if col.widget.gridFormat() is not empty %}
                <input type=\"number\" name=\"{{ col.name }}-decimal\" min=\"0\" max=\"7\" step=\"1\"
                       value=\"{{ col.widget.decimal }}\" class=\"form-control\"/>
            {% endif %}
        </td>
        <td title=\"{{ i18n.trans('width') }}\">
            {{ simpleSelect(
                col.name ~ '-numcolumns',
                col.name ~ '-numcolumns',
                col.numcolumns,
                {'0':i18n.trans('auto'), '1':'1', '2':'2', '3':'3', '4':'4', '5':'5', '6':'6', '7':'7', '8':'8', '9':'9', '10':'10', '11':'11', '12':'12'},
                FALSE,
                FALSE,
                {}) }}
        </td>
        <td title=\"{{ i18n.trans('sort') }}\">
            <input type=\"number\" name=\"{{ col.name }}-order\" value=\"{{ col.order }}\" class=\"form-control text-right\"/>
        </td>
    </tr>
{% endmacro %}

{% macro editGroupColumnDisplay(col, i18n) %}
    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
        {% if col.display == 'left' %}
            <label class=\"btn btn-outline-secondary active\" title=\"{{ i18n.trans('left') }}\">
                <input type=\"radio\" name=\"{{ col.name }}-display\" value=\"left\" checked=\"\">
                <i class=\"fas fa-align-left\"></i>
            </label>
        {% else %}
            <label class=\"btn btn-outline-secondary\" title=\"{{ i18n.trans('left') }}\">
                <input type=\"radio\" name=\"{{ col.name }}-display\" value=\"left\">
                <i class=\"fas fa-align-left\"></i>
            </label>
        {% endif %}

        {% if col.display == 'center' %}
            <label class=\"btn btn-outline-secondary active\" title=\"{{ i18n.trans('center') }}\">
                <input type=\"radio\" name=\"{{ col.name }}-display\" value=\"center\" checked=\"\">
                <i class=\"fas fa-align-center\"></i>
            </label>
        {% else %}
            <label class=\"btn btn-outline-secondary\" title=\"{{ i18n.trans('center') }}\">
                <input type=\"radio\" name=\"{{ col.name }}-display\" value=\"center\">
                <i class=\"fas fa-align-center\"></i>
            </label>
        {% endif %}

        {% if col.display == 'right' %}
            <label class=\"btn btn-outline-secondary active\" title=\"{{ i18n.trans('right') }}\">
                <input type=\"radio\" name=\"{{ col.name }}-display\" value=\"right\" checked=\"\">
                <i class=\"fas fa-align-right\"></i>
            </label>
        {% else %}
            <label class=\"btn btn-outline-secondary\" title=\"{{ i18n.trans('right') }}\">
                <input type=\"radio\" name=\"{{ col.name }}-display\" value=\"right\">
                <i class=\"fas fa-align-right\"></i>
            </label>
        {% endif %}

        {% if col.display == 'none' %}
            <label class=\"btn btn-outline-secondary active\" title=\"{{ i18n.trans('hide') }}\">
                <input type=\"radio\" name=\"{{ col.name }}-display\" value=\"none\" checked=\"\">
                <i class=\"fas fa-eye-slash\"></i>
            </label>
        {% else %}
            <label class=\"btn btn-outline-secondary\" title=\"{{ i18n.trans('hide') }}\">
                <input type=\"radio\" name=\"{{ col.name }}-display\" value=\"none\">
                <i class=\"fas fa-eye-slash\"></i>
            </label>
        {% endif %}
    </div>
{% endmacro %}", "EditPageOption.html.twig", "C:\\xampp\\htdocs\\sistema2\\Core\\View\\EditPageOption.html.twig");
    }
}
