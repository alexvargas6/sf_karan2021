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

/* Master/PanelControllerBottom.html.twig */
class __TwigTemplate_b0945450fc7827e6f187e2458c2be169dbe8beb56398c0e34518557f5a514f96 extends Template
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
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/PanelController.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "Master/PanelControllerBottom.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 27
        echo "                ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 27));
        // line 28
        echo "                ";
        $context["firstViewName"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 28);
        // line 29
        echo "                ";
        twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [($context["firstViewName"] ?? null)], "method", false, false, false, 29);
        // line 30
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "template", [], "any", false, false, false, 30));
        echo "
            </div>
        </div>
        ";
        // line 33
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 33)), 2))) {
            // line 34
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <ul class=\"nav nav-pills mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
                        ";
            // line 37
            $context["contActiveTab"] = 0;
            // line 38
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 38), 1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 38))));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 39
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 39), "active", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "                                ";
                    $context["contActiveTab"] = (($context["contActiveTab"] ?? null) + 1);
                    // line 41
                    echo "                                <li class=\"nav-item\">
                                    ";
                    // line 42
                    $context["active"] = ((((0 === twig_compare($context["viewName"], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 42))) || ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 42), ($context["firstViewName"] ?? null))) && (0 === twig_compare(($context["contActiveTab"] ?? null), 1))))) ? (" active") : (""));
                    // line 43
                    echo "                                    <a href=\"#";
                    echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                    echo "\" class=\"nav-link";
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                    echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"";
                    echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                    echo "\">
                                        <i class=\"";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 44), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">&nbsp;";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 45), "html", null, true);
                    echo "</span>
                                        ";
                    // line 46
                    if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 46), 0))) {
                        // line 47
                        echo "                                            <span class=\"badge badge-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 47), "numbers", [], "method", false, false, false, 47), "format", [twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 47), 0], "method", false, false, false, 47), "html", null, true);
                        echo "</span>
                                        ";
                    }
                    // line 49
                    echo "                                    </a>
                                </li>
                            ";
                }
                // line 52
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                    </ul>
                </div>
            </div>
        ";
        }
        // line 57
        echo "        <div class=\"tab-content\" id=\"mainTabsContent\">
            ";
        // line 58
        $context["contActiveTab"] = 0;
        // line 59
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 59), 1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 59))));
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
            // line 60
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 60), "active", [], "any", false, false, false, 60)) {
                // line 61
                echo "                    ";
                $context["contActiveTab"] = (($context["contActiveTab"] ?? null) + 1);
                // line 62
                echo "                    ";
                $context["active"] = ((((0 === twig_compare($context["viewName"], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 62))) || ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 62), ($context["firstViewName"] ?? null))) && (0 === twig_compare(($context["contActiveTab"] ?? null), 1))))) ? (" show active") : (""));
                // line 63
                echo "                    <div class=\"tab-pane";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" role=\"tabpanel\">
                        ";
                // line 64
                twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [$context["viewName"]], "method", false, false, false, 64);
                // line 65
                echo "                        ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 65));
                echo "
                    </div>
                ";
            }
            // line 68
            echo "            ";
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
        // line 69
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Master/PanelControllerBottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 69,  187 => 68,  180 => 65,  178 => 64,  171 => 63,  168 => 62,  165 => 61,  162 => 60,  144 => 59,  142 => 58,  139 => 57,  133 => 53,  127 => 52,  122 => 49,  116 => 47,  114 => 46,  110 => 45,  106 => 44,  96 => 43,  94 => 42,  91 => 41,  88 => 40,  85 => 39,  80 => 38,  78 => 37,  73 => 34,  71 => 33,  64 => 30,  61 => 29,  58 => 28,  55 => 27,  50 => 23,  46 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * This file is part of FacturaScripts
     * Copyright (C) 2017-2020 Carlos Garcia Gomez <carlos@facturascripts.com>
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
{% extends \"Master/PanelController.html.twig\" %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                {# -- First view -- #}
                {% set firstView = fsc.views | first %}
                {% set firstViewName = firstView.getViewName() %}
                {% do fsc.setCurrentView(firstViewName) %}
                {{ include(firstView.template) }}
            </div>
        </div>
        {% if fsc.views | length > 2 %}
            <div class=\"row\">
                <div class=\"col\">
                    <ul class=\"nav nav-pills mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
                        {% set contActiveTab = 0 %}
                        {% for viewName, view in fsc.views | slice(1, fsc.views | length) %}
                            {% if view.settings.active %}
                                {% set contActiveTab = contActiveTab + 1 %}
                                <li class=\"nav-item\">
                                    {% set active = (viewName == fsc.active) or (fsc.active == firstViewName and contActiveTab == 1) ? ' active' : '' %}
                                    <a href=\"#{{ viewName }}\" class=\"nav-link{{ active }}{{ disable }}\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"{{ viewName }}\">
                                        <i class=\"{{ view.icon }}\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">&nbsp;{{ view.title }}</span>
                                        {% if view.count > 0 %}
                                            <span class=\"badge badge-secondary\">{{ fsc.toolBox().numbers().format(view.count, 0) }}</span>
                                        {% endif %}
                                    </a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            </div>
        {% endif %}
        <div class=\"tab-content\" id=\"mainTabsContent\">
            {% set contActiveTab = 0 %}
            {% for viewName, view in fsc.views | slice(1, fsc.views | length) %}
                {% if view.settings.active %}
                    {% set contActiveTab = contActiveTab + 1 %}
                    {% set active = (viewName == fsc.active) or (fsc.active == firstViewName and contActiveTab == 1) ? ' show active' : '' %}
                    <div class=\"tab-pane{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\">
                        {% do fsc.setCurrentView(viewName) %}
                        {{ include(view.template) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "Master/PanelControllerBottom.html.twig", "C:\\xampp\\htdocs\\sistema2\\Core\\View\\Master\\PanelControllerBottom.html.twig");
    }
}
