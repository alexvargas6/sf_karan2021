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

/* Updater.html.twig */
class __TwigTemplate_670d92251552ddb2eea81e25ba73eaa1595fcc2caa56848af1ff983fb4bb388f extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Updater.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Updater.html.twig", 23)->unwrap();
        // line 24
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 27
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["error", "critical"], "danger"], 27, $context, $this->getSourceContext());
        echo "
                ";
        // line 28
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["warning"], "warning"], 28, $context, $this->getSourceContext());
        echo "
                ";
        // line 29
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["notice"], "success"], 29, $context, $this->getSourceContext());
        echo "
                ";
        // line 30
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["info"], "info"], 30, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a href=\"AdminPlugins\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("plugins"), "html", null, true);
        echo " </span>
                    </a>
                    <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 45), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 49), "ready", [], "method", false, false, false, 49)) {
            // line 50
            echo "                    <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("manage-installation"), "html", null, true);
            echo " </span>
                    </button>
                ";
        } else {
            // line 56
            echo "                    <button class=\"btn btn-sm btn-warning\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 62
        echo "            </div>
            <div class=\"col-sm-6 text-right\">
                <h1 class=\"h3\">
                    ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("updater"), "html", null, true);
        echo "
                    <small class=\"text-info\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 66), "html", null, true);
        echo "</small>
                    <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("component"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-right\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("action"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 82));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 83
            echo "                <tr class=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "stable", [], "any", false, false, false, 83)) ? ("table-success") : ("table-warning"));
            echo "\">
                    <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                    <td class=\"text-right\">
                        ";
            // line 87
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 87)))) {
                // line 88
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("requires-core", ["%version%" => twig_get_attribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 88)]), "html", null, true);
                echo "
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 89
$context["item"], "downloaded", [], "any", false, false, false, 89)) {
                // line 90
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 90), "html", null, true);
                echo "?action=update&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 90), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\">
                                <i class=\"fas fa-rocket fa-fw\" aria-hidden=\"true\"></i> ";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
                echo "
                            </a>
                            <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 93), "html", null, true);
                echo "?action=cancel&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 93), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\">
                                <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i> ";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
                echo "
                            </a>
                        ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 96
$context["item"], "name", [], "any", false, false, false, 96), "CORE")) && twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 96))) {
                // line 97
                echo "                            <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\"
                                    data-target=\"#coreWarningModal\">";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                echo "
                            </button>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 100
$context["item"], "stable", [], "any", false, false, false, 100)) {
                // line 101
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 101), "html", null, true);
                echo "?action=download&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\"
                               class=\"btn btn-sm btn-secondary\">";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                echo "
                            </a>
                        ";
            } else {
                // line 105
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 105), "html", null, true);
                echo "?action=download&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 105), "html", null, true);
                echo "\"
                               class=\"btn btn-sm btn-outline-warning\">";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("beta"), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 109
            echo "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "                <tr class=\"table-warning\">
                    <td colspan=\"3\"><b>";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
            echo "</b></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "            </tbody>
        </table>
    </div>
    <div class=\"modal fade\" id=\"modalTelemetry\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 122), "ready", [], "method", false, false, false, 122)) {
            // line 123
            echo "                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("registered-installation", ["%number%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 124), "id", [], "method", false, false, false, 124)]), "html", null, true);
            echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            echo "\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p>";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("registered-installation-p"), "html", null, true);
            echo "</p>
                        <p>";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("telemetry-data-to-send"), "html", null, true);
            echo "</p>
                        <div class=\"form-row\">
                            <div class=\"col\">
                                <a class=\"btn btn-primary\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 134), "html", null, true);
            echo "?action=claim-install\" target=\"_blank\">
                                    ";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("manage"), "html", null, true);
            echo "
                                </a>
                            </div>
                            <div class=\"col text-right\">
                                <form action=\"";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 139), "html", null, true);
            echo "\" method=\"post\">
                                    <input type=\"hidden\" name=\"action\" value=\"unlink\"/>
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        ";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("unlink"), "html", null, true);
            echo "
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 149
            echo "                    <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 149), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"action\" value=\"register\"/>
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-label=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <p>";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("register-installation-p"), "html", null, true);
            echo "</p>
                            <p>";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("telemetry-data-to-send"), "html", null, true);
            echo "</p>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            echo "
                            </button>
                        </div>
                    </form>
                ";
        }
        // line 167
        echo "            </div>
        </div>
    </div>
    ";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 170)) {
            // line 171
            echo "        <div class=\"modal fade\" id=\"coreWarningModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-exclamation-triangle mr-1\" aria-hidden=\"true\"></i>
                            ";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("core-update-warning"), "html", null, true);
            echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"mb-0\">
                            ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 185));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 186
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 191));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 192
                echo "                            ";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 192), "CORE")) && twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 192))) {
                    // line 193
                    echo "                                <div class=\"btn-group\">
                                    <a href=\"";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 194), "html", null, true);
                    echo "?action=download&item=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 194), "html", null, true);
                    echo "&disable=";
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 194)), ","), "html", null, true);
                    echo "\"
                                       class=\"btn btn-warning\">";
                    // line 195
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                    echo "
                                    </a>
                                    <button type=\"button\" class=\"btn btn-warning dropdown-toggle dropdown-toggle-split\"
                                            data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">";
                    // line 199
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
                    echo "</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 202), "html", null, true);
                    echo "?action=download&item=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 202), "html", null, true);
                    echo "\"
                                           class=\"btn btn-warning\">";
                    // line 203
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("do-not-disable-plugins"), "html", null, true);
                    echo "
                                        </a>
                                    </div>
                                </div>
                            ";
                }
                // line 208
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "Updater.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 209,  463 => 208,  455 => 203,  449 => 202,  443 => 199,  436 => 195,  428 => 194,  425 => 193,  422 => 192,  418 => 191,  413 => 188,  404 => 186,  400 => 185,  389 => 177,  381 => 171,  379 => 170,  374 => 167,  366 => 162,  361 => 160,  357 => 159,  349 => 154,  344 => 152,  337 => 149,  327 => 142,  321 => 139,  314 => 135,  310 => 134,  304 => 131,  300 => 130,  292 => 125,  288 => 124,  285 => 123,  283 => 122,  275 => 116,  266 => 113,  263 => 112,  256 => 109,  250 => 106,  243 => 105,  237 => 102,  230 => 101,  228 => 100,  223 => 98,  220 => 97,  218 => 96,  213 => 94,  207 => 93,  202 => 91,  195 => 90,  193 => 89,  188 => 88,  186 => 87,  181 => 85,  177 => 84,  172 => 83,  167 => 82,  160 => 78,  156 => 77,  152 => 76,  139 => 66,  135 => 65,  130 => 62,  124 => 59,  119 => 56,  113 => 53,  108 => 50,  106 => 49,  97 => 45,  92 => 43,  84 => 37,  80 => 36,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  54 => 24,  51 => 23,  47 => 22,  36 => 20,);
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
{% extends \"Master/MenuTemplate.html.twig\" %}

{% block messages %}
    {% from 'Macro/Utils.html.twig' import messageCompat as showMessage %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                {{ showMessage(log, ['error', 'critical'], 'danger') }}
                {{ showMessage(log, ['warning'], 'warning') }}
                {{ showMessage(log, ['notice'], 'success') }}
                {{ showMessage(log, ['info'], 'info') }}
            </div>
        </div>
    </div>
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a href=\"AdminPlugins\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">{{ trans('plugins') }} </span>
                    </a>
                    <a href=\"{{ fsc.url() }}\" class=\"btn btn-sm btn-secondary\" title=\"{{ trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                {% if fsc.telemetryManager.ready() %}
                    <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">{{ trans('manage-installation') }} </span>
                    </button>
                {% else %}
                    <button class=\"btn btn-sm btn-warning\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">{{ trans('register-installation') }}</span>
                    </button>
                {% endif %}
            </div>
            <div class=\"col-sm-6 text-right\">
                <h1 class=\"h3\">
                    {{ trans('updater') }}
                    <small class=\"text-info\">{{ fsc.getCoreVersion() }}</small>
                    <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">{{ trans('component') }}</th>
                <th scope=\"col\">{{ trans('description') }}</th>
                <th scope=\"col\" class=\"text-right\">{{ trans('action') }}</th>
            </tr>
            </thead>
            <tbody>
            {% for item in fsc.updaterItems %}
                <tr class=\"{{ item.stable ? 'table-success' : 'table-warning' }}\">
                    <td>{{ item.name }}</td>
                    <td>{{ item.description }}</td>
                    <td class=\"text-right\">
                        {% if item.mincore > fsc.getCoreVersion() %}
                            {{ trans('requires-core', {'%version%': item.mincore}) }}
                        {% elseif item.downloaded %}
                            <a href=\"{{ fsc.url() }}?action=update&item={{ item.id }}\" class=\"btn btn-sm btn-success\">
                                <i class=\"fas fa-rocket fa-fw\" aria-hidden=\"true\"></i> {{ trans('update') }}
                            </a>
                            <a href=\"{{ fsc.url() }}?action=cancel&item={{ item.id }}\" class=\"btn btn-sm btn-warning\">
                                <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i> {{ trans('cancel') }}
                            </a>
                        {% elseif item.name == 'CORE' and fsc.coreUpdateWarnings %}
                            <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\"
                                    data-target=\"#coreWarningModal\">{{ trans('download') }}
                            </button>
                        {% elseif item.stable %}
                            <a href=\"{{ fsc.url() }}?action=download&item={{ item.id }}\"
                               class=\"btn btn-sm btn-secondary\">{{ trans('download') }}
                            </a>
                        {% else %}
                            <a href=\"{{ fsc.url() }}?action=download&item={{ item.id }}\"
                               class=\"btn btn-sm btn-outline-warning\">{{ trans('beta') }}
                            </a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr class=\"table-warning\">
                    <td colspan=\"3\"><b>{{ trans('no-data') }}</b></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"modal fade\" id=\"modalTelemetry\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                {% if fsc.telemetryManager.ready() %}
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ trans('registered-installation', {'%number%': fsc.telemetryManager.id()}) }}</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ trans('close') }}\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p>{{ trans('registered-installation-p') }}</p>
                        <p>{{ trans('telemetry-data-to-send') }}</p>
                        <div class=\"form-row\">
                            <div class=\"col\">
                                <a class=\"btn btn-primary\" href=\"{{ fsc.url() }}?action=claim-install\" target=\"_blank\">
                                    {{ trans('manage') }}
                                </a>
                            </div>
                            <div class=\"col text-right\">
                                <form action=\"{{ fsc.url() }}\" method=\"post\">
                                    <input type=\"hidden\" name=\"action\" value=\"unlink\"/>
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        {{ trans('unlink') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <form action=\"{{ fsc.url() }}\" method=\"post\">
                        <input type=\"hidden\" name=\"action\" value=\"register\"/>
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">{{ trans('register-installation') }}</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-label=\"{{ trans('close') }}\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <p>{{ trans('register-installation-p') }}</p>
                            <p>{{ trans('telemetry-data-to-send') }}</p>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                {{ trans('register-installation') }}
                            </button>
                        </div>
                    </form>
                {% endif %}
            </div>
        </div>
    </div>
    {% if fsc.coreUpdateWarnings %}
        <div class=\"modal fade\" id=\"coreWarningModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-exclamation-triangle mr-1\" aria-hidden=\"true\"></i>
                            {{ trans('core-update-warning') }}
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"mb-0\">
                            {% for message in fsc.coreUpdateWarnings %}
                                <li>{{ message }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        {% for item in fsc.updaterItems %}
                            {% if item.name == 'CORE' and fsc.coreUpdateWarnings %}
                                <div class=\"btn-group\">
                                    <a href=\"{{ fsc.url() }}?action=download&item={{ item.id }}&disable={{ fsc.coreUpdateWarnings | keys | join(',') }}\"
                                       class=\"btn btn-warning\">{{ trans('download') }}
                                    </a>
                                    <button type=\"button\" class=\"btn btn-warning dropdown-toggle dropdown-toggle-split\"
                                            data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">{{ trans('options') }}</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"{{ fsc.url() }}?action=download&item={{ item.id }}\"
                                           class=\"btn btn-warning\">{{ trans('do-not-disable-plugins') }}
                                        </a>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "Updater.html.twig", "C:\\xampp\\htdocs\\sistema2\\Core\\View\\Updater.html.twig");
    }
}
