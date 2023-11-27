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
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "AsignacionUsuariosController.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "  ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
  <!-- Etiqueta para cargar jQuery -->
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

  <!-- Etiqueta para cargar DataTables -->
  <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js\"></script>
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 15
        echo "      ";
        // line 16
        echo "      ";
        $this->loadTemplate("componentes/tabla.html.twig", "AsignacionUsuariosController.html.twig", 16)->display(twig_array_merge($context, ["usuarios" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "users", [], "any", false, false, false, 16)]));
        // line 17
        echo "    </div>
  </div>
</div>
";
        // line 20
        $this->loadTemplate("componentes/modal.html.twig", "AsignacionUsuariosController.html.twig", 20)->display(twig_array_merge($context, ["roles" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 20)]));
        // line 21
        echo "
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
        return array (  84 => 21,  82 => 20,  77 => 17,  74 => 16,  72 => 15,  67 => 11,  63 => 10,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuBghTemplate.html.twig\" %}
{% block head %}
  {{ parent() }}
  <!-- Etiqueta para cargar jQuery -->
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

  <!-- Etiqueta para cargar DataTables -->
  <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js\"></script>
{% endblock %}
{% block body %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      {# Definimos los usuarios directamente en el código #}
      {# Incluimos el componente de la tabla Bootstrap y pasamos la lista de usuarios #}
      {% include 'componentes/tabla.html.twig' with { 'usuarios': fsc.users } %}
    </div>
  </div>
</div>
{% include 'componentes/modal.html.twig' with { 'roles': fsc.roles } %}

<script>
  \$(document).ready(function() {
    \$('#tablaUsuarios').DataTable(); // Inicializa la DataTable
  });
</script>
{% endblock %}
", "AsignacionUsuariosController.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\asignacion_usuarios\\View\\AsignacionUsuariosController.html.twig");
    }
}
