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

/* AsignacionUsuariosController.html.twig */
class __TwigTemplate_5d7fede2feca483b740a3b102e922f396331c829578c6d75d8aba3475fa7c74a extends Template
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
        // line 1
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "AsignacionUsuariosController.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 6
        echo "        ";
        // line 7
        echo "        ";
        $this->loadTemplate("componentes/tabla.html.twig", "AsignacionUsuariosController.html.twig", 7)->display(twig_array_merge($context, ["usuarios" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "users", [], "any", false, false, false, 7)]));
        // line 8
        echo "    </div>
  </div>
</div>
<script>
        \$(document).ready(function() {
            \$('#tablaUsuarios').DataTable(); // Inicializa la DataTable
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AsignacionUsuariosController.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  56 => 7,  54 => 6,  49 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuBghTemplate.html.twig\" %} {% block body %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      {# Definimos los usuarios directamente en el código #}
        {# Incluimos el componente de la tabla Bootstrap y pasamos la lista de usuarios #}
        {% include 'componentes/tabla.html.twig' with { 'usuarios': fsc.users } %}
    </div>
  </div>
</div>
<script>
        \$(document).ready(function() {
            \$('#tablaUsuarios').DataTable(); // Inicializa la DataTable
        });
    </script>
{% endblock %}
", "AsignacionUsuariosController.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\asignacion_usuarios\\View\\AsignacionUsuariosController.html.twig");
    }
}
