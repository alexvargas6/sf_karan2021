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

/* PermisosControl.html.twig */
class __TwigTemplate_58d2d9b43b80a1eaeb87b6265a69cb53f177e4ebd694dec78cc37569bc86a72e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "PermisosControl.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<link
  rel=\"stylesheet\"
  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/control_permisos/Assets/DataTables/datatables.css"), "html", null, true);
        // line 8
        echo "\"
/>
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
        // line 16
        $this->loadTemplate("componentes/tablaP.html.twig", "PermisosControl.html.twig", 16)->display(twig_array_merge($context, ["usuarios" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 16)]));
        // line 17
        echo "      </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PermisosControl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  74 => 16,  69 => 12,  65 => 11,  59 => 8,  57 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuBghTemplate.html.twig\" %}
{% block head %}
{{ parent() }}
<link
  rel=\"stylesheet\"
  href=\"{{
    asset('Plugins/control_permisos/Assets/DataTables/datatables.css')
  }}\"
/>
{% endblock %}
{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        {%
            include 'componentes/tablaP.html.twig' with { 'usuarios': fsc.roles }%}
      </div>
    </div>
</div>
{% endblock %}", "PermisosControl.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\control_permisos\\View\\PermisosControl.html.twig");
    }
}
