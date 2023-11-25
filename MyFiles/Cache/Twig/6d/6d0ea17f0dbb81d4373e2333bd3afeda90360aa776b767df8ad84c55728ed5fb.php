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

/* Macro/Utils.html.twig */
class __TwigTemplate_2f31b56444f5ab3e8eb844189be046a00504c15ce1be002f3ee2a4ad3a249fcc extends Template
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
        echo "
";
        // line 35
        echo "
";
        // line 49
        echo "
";
    }

    // line 22
    public function macro_message($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 23
            echo "    ";
            $context["messages"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "read", ["master", ($context["levels"] ?? null)], "method", false, false, false, 23), twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "read", ["database", ($context["levels"] ?? null)], "method", false, false, false, 23));
            // line 24
            echo "    ";
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["messages"] ?? null)), 0))) {
                // line 25
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
                echo "\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 30
                    echo "                <div>";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 30);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
    public function macro_messageCompat($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 38
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "read", [], "method", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "        ";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "level", [], "any", false, false, false, 39), ($context["levels"] ?? null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 39), "master")))) {
                    // line 40
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
                    echo "\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div>";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 44);
                    echo "</div>
            </div>
        ";
                }
                // line 47
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 51
    public function macro_popoverTitle($__msg__ = null, $__position__ = "auto", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "msg" => $__msg__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 52
            echo "    ";
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["msg"] ?? null)), 0))) {
                echo "data-toggle=\"popover\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
                echo "\" data-trigger=\"hover\" data-content=\"";
                echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
                echo "\"";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Macro/Utils.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 52,  151 => 51,  138 => 47,  132 => 44,  124 => 40,  121 => 39,  116 => 38,  101 => 37,  90 => 32,  81 => 30,  77 => 29,  69 => 25,  66 => 24,  63 => 23,  48 => 22,  43 => 49,  40 => 35,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2022 Carlos Garcia Gomez <carlos@facturascripts.com>
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
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
#}

{# Muestra todos los mensajes con alguno de los niveles dados #}
{% macro message(log, levels, style) %}
    {% set messages = log.read('master', levels) | merge(log.read('database', levels)) %}
    {% if messages | length > 0 %}
        <div class=\"alert alert-{{ style }}\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            {% for item in messages %}
                <div>{{ item.message | raw }}</div>
            {% endfor %}
        </div>
    {% endif %}
{% endmacro %}

{# Muestra todos los mensajes de los niveles dados, de forma que sea compatible con versiones antiguas de MiniLog #}
{% macro messageCompat(log, levels, style) %}
    {% for item in log.read() %}
        {% if item.level in levels and item.channel == 'master' %}
            <div class=\"alert alert-{{ style }}\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div>{{ item.message | raw }}</div>
            </div>
        {% endif %}
    {% endfor %}
{% endmacro %}

{# Muestra los parámetros necesarios para el popover #}
{% macro popoverTitle(msg, position = 'auto') %}
    {% if msg | length > 0 %}data-toggle=\"popover\" data-placement=\"{{ position }}\" data-trigger=\"hover\" data-content=\"{{ msg }}\"{% endif %}
{% endmacro %}
", "Macro/Utils.html.twig", "C:\\xampp\\htdocs\\sistema2\\Core\\View\\Macro\\Utils.html.twig");
    }
}
