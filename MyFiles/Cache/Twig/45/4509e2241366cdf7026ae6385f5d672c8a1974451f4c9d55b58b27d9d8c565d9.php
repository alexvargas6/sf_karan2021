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

/* Master/htmlChart.html.twig */
class __TwigTemplate_5dcd5e7219d8ffb80524c28bb5a8e4fe32e2dc5a6e65450e83c316479830dedd extends Template
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
        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 3
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 3));
        // line 4
        $context["model"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 4);
        // line 5
        echo "
<div class=\"card shadow\">
    ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getChart", [], "method", false, false, false, 7), "render", [], "method", false, false, false, 7);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "Master/htmlChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ asset('node_modules/chart.js/dist/Chart.min.js') }}\"></script>

{% set firstView = fsc.views | first %}
{% set model = firstView.model %}

<div class=\"card shadow\">
    {{ model.getChart().render() | raw }}
</div>", "Master/htmlChart.html.twig", "C:\\xampp\\htdocs\\public\\Plugins\\Informes\\View\\Master\\htmlChart.html.twig");
    }
}
