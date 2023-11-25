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

/* MegaSearch.html.twig */
class __TwigTemplate_2604df37863bd1275ee6fb26fb1ff3dbdbe0fac7adb07c6b4967c9a00bf32196 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("Master/MenuBgTemplate.html.twig", "MegaSearch.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 24
            echo "        <script>
            \$(document).ready(function () {
                searchOnSection(\"";
            // line 26
            echo $context["section"];
            echo "\");
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3\"></div>
            <div class=\"col-sm-6\">
                <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 34), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"query\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "query", [], "any", false, false, false, 37), "html", null, true);
        echo "\" class=\"form-control form-control-lg\"
                                   autocomplete=\"off\" autofocus=\"\"/>
                            <span class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-3 col-xl-2\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\">
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "results", [], "any", false, false, false, 52));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["result"]) {
            // line 53
            echo "                        ";
            $context["active"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53), 1))) ? ("nav-link active") : ("nav-link"));
            // line 54
            echo "                        <a class=\"";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" data-toggle=\"pill\" href=\"#v-pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" role=\"tab\"
                           aria-controls=\"v-pills-";
            // line 55
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" aria-expanded=\"true\">
                            <span class=\"badge badge-secondary float-right\">";
            // line 56
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "results", [], "any", false, false, false, 56)), "html", null, true);
            echo "</span>
                            <i class=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "icon", [], "any", false, false, false, 57), "html", null, true);
            echo " fa-fw\"></i>
                            ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [twig_get_attribute($this->env, $this->source, $context["result"], "title", [], "any", false, false, false, 58)], "method", false, false, false, 58), "html", null, true);
            echo "
                        </a>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </div>
            </div>
            <div class=\"col-sm-9 col-xl-10\">
                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "results", [], "any", false, false, false, 65));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["result"]) {
            // line 66
            echo "                        ";
            $context["active"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66), 1))) ? (" show active") : (""));
            // line 67
            echo "                        <div class=\"tab-pane fade";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"v-pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" role=\"tabpanel\"
                             aria-labelledby=\"v-pills-";
            // line 68
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "-tab\">
                            <div class=\"card shadow\">
                                ";
            // line 70
            echo twig_call_macro($macros["_self"], "macro_showSearchResults", [$context["result"], ($context["i18n"] ?? null)], 70, $context, $this->getSourceContext());
            echo "
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 80
    public function macro_showSearchResults($__result__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "result" => $__result__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 81
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "columns", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 86
                echo "                    ";
                if ((0 === twig_compare($context["key"], "icon"))) {
                    // line 87
                    echo "                        <th>
                        </th>
                    ";
                } else {
                    // line 90
                    echo "                        <th>
                            ";
                    // line 91
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [$context["column"]], "method", false, false, false, 91)), "html", null, true);
                    echo "
                        </th>
                    ";
                }
                // line 94
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "            </tr>
            </thead>
            <tbody>
            ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "results", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 99
                echo "                ";
                $context["link"] = ((twig_get_attribute($this->env, $this->source, $context["line"], "link", [], "any", false, false, false, 99)) ? (twig_get_attribute($this->env, $this->source, $context["line"], "link", [], "any", false, false, false, 99)) : ("#"));
                // line 100
                echo "                <tr class=\"clickableRow\" data-href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\" data-target=\"_blank\">
                    ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "columns", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 102
                    echo "                        ";
                    if ((0 === twig_compare($context["key"], "icon"))) {
                        // line 103
                        echo "                            <td class=\"text-center\">
                                <i class=\"";
                        // line 104
                        echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["line"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                        echo " fa-fw\"></i>
                            </td>
                        ";
                    } elseif ((0 !== twig_compare(                    // line 106
$context["key"], "link"))) {
                        // line 107
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["line"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 109
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "MegaSearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 112,  313 => 110,  307 => 109,  301 => 107,  299 => 106,  294 => 104,  291 => 103,  288 => 102,  284 => 101,  279 => 100,  276 => 99,  272 => 98,  267 => 95,  261 => 94,  255 => 91,  252 => 90,  247 => 87,  244 => 86,  240 => 85,  234 => 81,  220 => 80,  212 => 74,  194 => 70,  189 => 68,  182 => 67,  179 => 66,  162 => 65,  156 => 61,  139 => 58,  135 => 57,  131 => 56,  127 => 55,  120 => 54,  117 => 53,  100 => 52,  82 => 37,  76 => 34,  70 => 30,  60 => 26,  56 => 24,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "MegaSearch.html.twig", "C:\\xampp\\htdocs\\sistema2\\Dinamic\\View\\MegaSearch.html.twig");
    }
}
