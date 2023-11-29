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

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<!-- Etiqueta para cargar jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- Etiqueta para cargar DataTables -->
<script
  type=\"text/javascript\"
  charset=\"utf8\"
  src=\"https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js\"
></script>
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 16
        echo " ";
        // line 17
        echo " ";
        // line 18
        $this->loadTemplate("componentes/tabla.html.twig", "AsignacionUsuariosController.html.twig", 18)->display(twig_array_merge($context, ["usuarios" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "users", [], "any", false, false, false, 18)]));
        // line 19
        echo "    </div>
  </div>
</div>
";
        // line 22
        $this->loadTemplate("componentes/modal.html.twig", "AsignacionUsuariosController.html.twig", 22)->display(twig_array_merge($context, ["roles" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 22)]));
        // line 23
        echo "<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<script>
  \$(document).ready(function () {
    \$(\"#tablaUsuarios\").DataTable(); // Inicializa la DataTable
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
        return array (  87 => 23,  85 => 22,  80 => 19,  78 => 18,  76 => 17,  74 => 16,  69 => 13,  65 => 12,  50 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuBghTemplate.html.twig\" %} {% block head %}
{{ parent() }}
<!-- Etiqueta para cargar jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- Etiqueta para cargar DataTables -->
<script
  type=\"text/javascript\"
  charset=\"utf8\"
  src=\"https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js\"
></script>
{% endblock %} {% block body %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      {# Definimos los usuarios directamente en el código #} {# Incluimos el
      componente de la tabla Bootstrap y pasamos la lista de usuarios #} {%
      include 'componentes/tabla.html.twig' with { 'usuarios': fsc.users } %}
    </div>
  </div>
</div>
{% include 'componentes/modal.html.twig' with { 'roles': fsc.roles } %}
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<script>
  \$(document).ready(function () {
    \$(\"#tablaUsuarios\").DataTable(); // Inicializa la DataTable
  });
</script>
{% endblock %}
", "AsignacionUsuariosController.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\asignacion_usuarios\\View\\AsignacionUsuariosController.html.twig");
    }
}
