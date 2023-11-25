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

/* Master/MenuBgTemplate.html.twig */
class __TwigTemplate_e584f51338d25ca25f4ba0b1b5dc1472d49c144e76e60650582b736705acc12a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
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
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/MenuBgTemplate.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <body class=\"bg-light\">
    ";
        // line 24
        $this->displayBlock('navbar', $context, $blocks);
        // line 27
        echo "    <div class=\"pt-3\">
        ";
        // line 28
        $this->displayBlock('messages', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 34
        echo "    </div>
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "    <br/>
    <br/>
    <br/>
    ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 41);
        echo "
    </body>
";
    }

    // line 24
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
    }

    // line 28
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
        ";
    }

    // line 31
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
        ";
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "Master/MenuBgTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  117 => 35,  110 => 32,  106 => 31,  99 => 29,  95 => 28,  88 => 25,  84 => 24,  77 => 41,  72 => 38,  70 => 35,  67 => 34,  64 => 31,  62 => 28,  59 => 27,  57 => 24,  54 => 23,  50 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
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

{% block fullBody %}
    <body class=\"bg-light\">
    {% block navbar %}
        {{ parent() }}
    {% endblock %}
    <div class=\"pt-3\">
        {% block messages %}
            {{ parent() }}
        {% endblock %}
        {% block bodyHeaderOptions %}
            {{ parent() }}
        {% endblock %}
    </div>
    {% block body %}
        {{ parent() }}
    {% endblock %}
    <br/>
    <br/>
    <br/>
    {{ debugBarRender.render() | raw }}
    </body>
{% endblock %}", "Master/MenuBgTemplate.html.twig", "C:\\xampp\\htdocs\\sistema2\\Core\\View\\Master\\MenuBgTemplate.html.twig");
    }
}
