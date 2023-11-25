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

/* Master/PanelControllerTop.html.twig */
class __TwigTemplate_ee48c1171d82d2f4a0a3fc93c05a6a526d1837daf2780e11f59073732c44e385 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Master/PanelControllerTop.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    ";
        // line 24
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 24);
        // line 25
        echo "    ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 25));
        // line 26
        echo "    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 30
        echo "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 33)), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 35)) {
            // line 36
            echo "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 37)), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 40
        echo "                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 41), "url", ["list"], "method", false, false, false, 41), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 41)), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 44)) {
            // line 45
            echo "                                ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 45), "primaryDescription", [], "method", false, false, false, 45);
            echo "
                            ";
        } else {
            // line 47
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            echo "
                            ";
        }
        // line 49
        echo "                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 56
        echo "            <div class=\"col-md-8 mb-2\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 58), "url", ["list"], "method", false, false, false, 58), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
        echo "</span>
                    </a>
                    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 62), "url", ["edit"], "method", false, false, false, 62), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\"
                       title=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 68
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_optionsButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 68, $context, $this->getSourceContext());
        echo "
                ";
        // line 70
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 70) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 70), "btnNew", [], "any", false, false, false, 70))) {
            // line 71
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 71), "url", ["new"], "method", false, false, false, 71), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 76
        echo "                ";
        // line 77
        echo "                ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getRow", ["actions"], "method", false, false, false, 77), "renderTop", [], "method", false, false, false, 77);
        echo "
                ";
        // line 79
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 79) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 79), "btnPrint", [], "any", false, false, false, 79))) {
            // line 80
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 80, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 82
        echo "            </div>
            ";
        // line 84
        echo "            <div class=\"col-md d-none d-md-inline-block text-right\">
                ";
        // line 85
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getImageUrl", [], "method", false, false, false, 85);
        // line 86
        echo "                ";
        if (twig_test_empty(($context["image"] ?? null))) {
            // line 87
            echo "                    <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 87), "html", null, true);
            echo " fa-3x pl-3 float-right\" aria-hidden=\"true\"></i>
                ";
        } else {
            // line 89
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 89), "html", null, true);
            echo "\" class=\"img-thumbnail ml-3 mb-2 float-right\"/>
                ";
        }
        // line 91
        echo "                <h1 class=\"h5 mb-0\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 91)), "html", null, true);
        echo "</h1>
                ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 92)) {
            // line 93
            echo "                    <p class=\"text-info mb-3\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 93), "primaryDescription", [], "method", false, false, false, 93);
            echo "</p>
                ";
        } else {
            // line 95
            echo "                    <p class=\"text-info mb-3\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            echo "</p>
                ";
        }
        // line 97
        echo "            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs d-print-none\" id=\"mainTabs\" role=\"tablist\">
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 102
            echo "            <li class=\"nav-item\">
                ";
            // line 103
            $context["active"] = (((0 === twig_compare($context["viewName"], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 103)))) ? (" active") : (""));
            // line 104
            echo "                ";
            $context["disable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 104), "active", [], "any", false, false, false, 104)) ? ("") : (" disabled"));
            // line 105
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" class=\"nav-link";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tab\" role=\"tab\"
                   aria-controls=\"";
            // line 106
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\">
                    <i class=\"";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 107), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 108), "html", null, true);
            echo "</span>
                    ";
            // line 109
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 109), 0))) {
                // line 110
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 110), "numbers", [], "method", false, false, false, 110), "format", [twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 110), 0], "method", false, false, false, 110), "html", null, true);
                echo "</span>
                    ";
            }
            // line 112
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "    </ul>
";
    }

    // line 118
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "    <div class=\"tab-content pt-3\" id=\"mainTabsContent\">
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 120));
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
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 121
            echo "            ";
            $context["active"] = (((0 === twig_compare($context["viewName"], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 121)))) ? ("tab-pane show active") : ("tab-pane"));
            // line 122
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\">
                ";
            // line 123
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [$context["viewName"]], "method", false, false, false, 123);
            // line 124
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 124));
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    </div>
";
    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input:visible,textarea:visible\").filter(\":not([readonly='readonly']):not([disabled='disabled']):not([type='hidden'])\").first().focus();
            }
        });
    </script>
";
    }

    // line 141
    public function macro_optionsButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 142
            echo "    ";
            $context["show"] = false;
            // line 143
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 143));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 144
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 144), "active", [], "any", false, false, false, 144) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 144)))) {
                    // line 145
                    echo "            ";
                    $context["show"] = true;
                    // line 146
                    echo "        ";
                }
                // line 147
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "    ";
            if ((($context["show"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 148), "btnOptions", [], "any", false, false, false, 148))) {
                // line 149
                echo "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary mr-3 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
                echo "</span>
                </button>
                <div class=\"dropdown-menu\">
                    ";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 157));
                foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                    // line 158
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 158), "active", [], "any", false, false, false, 158) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 158)))) {
                        // line 159
                        echo "                            <a class=\"dropdown-item\"
                               href=\"EditPageOption?code=";
                        // line 160
                        echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                        echo "&url=";
                        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 160), "url", [], "method", false, false, false, 160)), "html", null, true);
                        echo "\">
                                <i class=\"";
                        // line 161
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 161), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 161), "html", null, true);
                        echo "
                                ";
                        // line 162
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 162), "customized", [], "any", false, false, false, 162)) {
                            // line 163
                            echo "                                    <i class=\"fas fa-user-pen ml-2\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("personalized"), "html", null, true);
                            echo "\"></i>
                                ";
                        }
                        // line 165
                        echo "                            </a>
                        ";
                    }
                    // line 167
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 174
    public function macro_printButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 175
            echo "    <div class=\"btn-group\">
        <a href=\"";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 176), "url", [], "method", false, false, false, 176), "html", null, true);
            echo "&action=export&option=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 176), "defaultOption", [], "method", false, false, false, 176), "html", null, true);
            echo "\"
           target=\"_blank\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("print"), "html", null, true);
            echo "</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
            echo "</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
            ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 186), "options", [], "method", false, false, false, 186));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 187
                echo "                ";
                if ((0 !== twig_compare($context["key"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 187), "defaultOption", [], "method", false, false, false, 187)))) {
                    // line 188
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 188), "url", [], "method", false, false, false, 188), "html", null, true);
                    echo "&action=export&option=";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 189), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 190
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 190)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 193
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#advancedExportModal\">
                <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                ";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            echo "
            </a>
            ";
            // line 199
            $context["tools"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 199), "tools", [], "method", false, false, false, 199);
            // line 200
            echo "            ";
            if ( !twig_test_empty(($context["tools"] ?? null))) {
                // line 201
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 203
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 203), "html", null, true);
                    echo "\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 204
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 204), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 205
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 205)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "            ";
            }
            // line 209
            echo "        </div>
    </div>
    <form action=\"";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 211), "url", [], "method", false, false, false, 211), "html", null, true);
            echo "\" method=\"post\" target=\"_blank\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                            ";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <div class=\"form-group\">
                            <select name=\"option\" class=\"form-control\">
                                ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 228), "options", [], "method", false, false, false, 228));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 229
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 229)), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("format"), "html", null, true);
            echo "
                            <select name=\"idformat\" class=\"form-control\">
                                <option value=\"\">";
            // line 236
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            echo "</option>
                                <option value=\"\">------</option>
                                ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 238), "getFormats", [twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 238)], "method", false, false, false, 238));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 239
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["format"], "id", [], "any", false, false, false, 239), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["format"], "nombre", [], "any", false, false, false, 239), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("language"), "html", null, true);
            echo "
                            <select name=\"langcode\" class=\"form-control\">
                                <option value=\"\">";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            echo "</option>
                                <option value=\"\">------</option>
                                ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "getAvailableLanguages", [], "method", false, false, false, 248));
            foreach ($context['_seq'] as $context["code"] => $context["lang"]) {
                // line 249
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "                            </select>
                        </div>
                        <div class=\"text-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 255
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("accept"), "html", null, true);
            echo "
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/PanelControllerTop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 255,  684 => 251,  673 => 249,  669 => 248,  664 => 246,  659 => 244,  654 => 241,  643 => 239,  639 => 238,  634 => 236,  629 => 234,  624 => 231,  613 => 229,  609 => 228,  597 => 219,  586 => 211,  582 => 209,  579 => 208,  570 => 205,  566 => 204,  561 => 203,  557 => 202,  554 => 201,  551 => 200,  549 => 199,  544 => 197,  539 => 194,  533 => 193,  527 => 190,  523 => 189,  516 => 188,  513 => 187,  509 => 186,  503 => 183,  496 => 179,  488 => 176,  485 => 175,  470 => 174,  457 => 168,  451 => 167,  447 => 165,  441 => 163,  439 => 162,  433 => 161,  427 => 160,  424 => 159,  421 => 158,  417 => 157,  411 => 154,  404 => 149,  401 => 148,  395 => 147,  392 => 146,  389 => 145,  386 => 144,  381 => 143,  378 => 142,  363 => 141,  349 => 131,  345 => 130,  340 => 127,  322 => 124,  320 => 123,  313 => 122,  310 => 121,  293 => 120,  290 => 119,  286 => 118,  281 => 115,  273 => 112,  267 => 110,  265 => 109,  261 => 108,  257 => 107,  253 => 106,  245 => 105,  242 => 104,  240 => 103,  237 => 102,  233 => 101,  227 => 97,  221 => 95,  215 => 93,  213 => 92,  208 => 91,  200 => 89,  194 => 87,  191 => 86,  189 => 85,  186 => 84,  183 => 82,  177 => 80,  174 => 79,  169 => 77,  167 => 76,  161 => 73,  155 => 71,  152 => 70,  147 => 68,  140 => 63,  136 => 62,  131 => 60,  126 => 58,  122 => 56,  114 => 49,  108 => 47,  102 => 45,  100 => 44,  92 => 41,  89 => 40,  83 => 37,  80 => 36,  78 => 35,  73 => 33,  68 => 30,  63 => 26,  60 => 25,  58 => 24,  53 => 23,  49 => 22,  38 => 20,);
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
{% extends \"Master/MenuBghTemplate.html.twig\" %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    {% set pageData = fsc.getPageData() %}
    {% set firstView = fsc.views | first %}
    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {# -- Hidden alternative page info -- #}
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">{{ trans(pageData.menu) }}</a>
                        </li>
                        {% if pageData.submenu %}
                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">{{ trans(pageData.submenu) }}</a>
                            </li>
                        {% endif %}
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ firstView.model.url('list') }}\">{{ trans(pageData.title) }}</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            {% if fsc.hasData %}
                                {{ firstView.model.primaryDescription() | raw }}
                            {% else %}
                                {{ trans('new') }}
                            {% endif %}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            {# -- Top left buttons -- #}
            <div class=\"col-md-8 mb-2\">
                <div class=\"btn-group\">
                    <a href=\"{{ firstView.model.url('list') }}\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ trans('all') }}</span>
                    </a>
                    <a href=\"{{ firstView.model.url('edit') }}\" class=\"btn btn-sm btn-secondary\"
                       title=\"{{ trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                {# -- Options button -- #}
                {{ _self.optionsButton(fsc, firstView, i18n) }}
                {# -- New button -- #}
                {% if fsc.hasData and firstView.settings.btnNew %}
                    <a href=\"{{ firstView.model.url('new') }}\" class=\"btn btn-sm btn-success\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ trans('new') }}</span>
                    </a>
                {% endif %}
                {# -- Action buttons -- #}
                {{ firstView.getRow('actions').renderTop() | raw }}
                {# -- Print button -- #}
                {% if fsc.hasData and firstView.settings.btnPrint %}
                    {{ _self.printButton(fsc, firstView, i18n) }}
                {% endif %}
            </div>
            {# -- Top right text -- #}
            <div class=\"col-md d-none d-md-inline-block text-right\">
                {% set image = fsc.getImageUrl() %}
                {% if image is empty %}
                    <i class=\"{{ pageData.icon }} fa-3x pl-3 float-right\" aria-hidden=\"true\"></i>
                {% else %}
                    <img src=\"{{ image }}\" alt=\"{{ fsc.title }}\" class=\"img-thumbnail ml-3 mb-2 float-right\"/>
                {% endif %}
                <h1 class=\"h5 mb-0\">{{ trans(pageData.title) }}</h1>
                {% if fsc.hasData %}
                    <p class=\"text-info mb-3\">{{ firstView.model.primaryDescription() | raw }}</p>
                {% else %}
                    <p class=\"text-info mb-3\">{{ trans('new') }}</p>
                {% endif %}
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs d-print-none\" id=\"mainTabs\" role=\"tablist\">
        {% for viewName, view in fsc.views %}
            <li class=\"nav-item\">
                {% set active = (viewName == fsc.active) ? ' active' : '' %}
                {% set disable = view.settings.active ? '' : ' disabled' %}
                <a href=\"#{{ viewName }}\" class=\"nav-link{{ active }}{{ disable }}\" data-toggle=\"tab\" role=\"tab\"
                   aria-controls=\"{{ viewName }}\">
                    <i class=\"{{ view.icon }}\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">{{ view.title }}</span>
                    {% if view.count > 0 %}
                        <span class=\"badge badge-secondary\">{{ fsc.toolBox().numbers().format(view.count, 0) }}</span>
                    {% endif %}
                </a>
            </li>
        {% endfor %}
    </ul>
{% endblock %}

{% block body %}
    <div class=\"tab-content pt-3\" id=\"mainTabsContent\">
        {% for viewName, view in fsc.views %}
            {% set active = (viewName == fsc.active) ? 'tab-pane show active' : 'tab-pane' %}
            <div class=\"{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\">
                {% do fsc.setCurrentView(viewName) %}
                {{ include(view.template) }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input:visible,textarea:visible\").filter(\":not([readonly='readonly']):not([disabled='disabled']):not([type='hidden'])\").first().focus();
            }
        });
    </script>
{% endblock %}

{% macro optionsButton(fsc, firstView, i18n) %}
    {% set show = false %}
    {% for viewName, view in fsc.views %}
        {% if view.settings.active and view.columns is not empty %}
            {% set show = true %}
        {% endif %}
    {% endfor %}
    {% if show and firstView.settings.btnOptions %}
        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary mr-3 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">{{ trans('options') }}</span>
                </button>
                <div class=\"dropdown-menu\">
                    {% for viewName, view in fsc.views %}
                        {% if view.settings.active and view.columns is not empty %}
                            <a class=\"dropdown-item\"
                               href=\"EditPageOption?code={{ viewName }}&url={{ firstView.model.url() | url_encode }}\">
                                <i class=\"{{ view.icon }} fa-fw\" aria-hidden=\"true\"></i> {{ view.title }}
                                {% if view.settings.customized %}
                                    <i class=\"fas fa-user-pen ml-2\" title=\"{{ trans('personalized') }}\"></i>
                                {% endif %}
                            </a>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro printButton(fsc, firstView, i18n) %}
    <div class=\"btn-group\">
        <a href=\"{{ firstView.model.url() }}&action=export&option={{ fsc.exportManager.defaultOption() }}\"
           target=\"_blank\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">{{ trans('print') }}</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">{{ trans('more') }}</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
            {% for key, option in fsc.exportManager.options() %}
                {% if key != fsc.exportManager.defaultOption() %}
                    <a href=\"{{ firstView.model.url() }}&action=export&option={{ key }}\" class=\"dropdown-item\">
                        <i class=\"{{ option.icon }} fa-fw\" aria-hidden=\"true\"></i>
                        {{ trans(option.description) }}
                    </a>
                {% endif %}
            {% endfor %}
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#advancedExportModal\">
                <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                {{ trans('advanced') }}
            </a>
            {% set tools = fsc.exportManager.tools() %}
            {% if tools is not empty %}
                <div class=\"dropdown-divider\"></div>
                {% for key, tool in tools %}
                    <a href=\"{{ tool.link }}\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"{{ tool.icon }} fa-fw\" aria-hidden=\"true\"></i>
                        {{ trans(tool.description) }}
                    </a>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    <form action=\"{{ firstView.model.url() }}\" method=\"post\" target=\"_blank\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                            {{ trans('advanced') }}
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <div class=\"form-group\">
                            <select name=\"option\" class=\"form-control\">
                                {% for key, option in fsc.exportManager.options() %}
                                    <option value=\"{{ key }}\">{{ trans(option.description) }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            {{ trans('format') }}
                            <select name=\"idformat\" class=\"form-control\">
                                <option value=\"\">{{ trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for format in fsc.exportManager.getFormats(firstView.model) %}
                                    <option value=\"{{ format.id }}\">{{ format.nombre }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            {{ trans('language') }}
                            <select name=\"langcode\" class=\"form-control\">
                                <option value=\"\">{{ trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for code, lang in i18n.getAvailableLanguages() %}
                                    <option value=\"{{ code }}\">{{ lang }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"text-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                {{ trans('accept') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endmacro %}", "Master/PanelControllerTop.html.twig", "C:\\xampp\\htdocs\\sistema2\\Core\\View\\Master\\PanelControllerTop.html.twig");
    }
}
