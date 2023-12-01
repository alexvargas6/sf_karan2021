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

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<link
  rel=\"stylesheet\"
  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/control_permisos/Assets/DataTables/datatables.css"), "html", null, true);
        // line 7
        echo "\"
/>
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 13
        $this->loadTemplate("componentes/tablaP.html.twig", "PermisosControl.html.twig", 13)->display(twig_array_merge($context, ["usuarios" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 13)]));
        // line 14
        echo "      ";
        $this->loadTemplate("componentes/modalP.html.twig", "PermisosControl.html.twig", 14)->display($context);
        // line 15
        echo "    </div>
  </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/asignacion_usuarios/Assets/DataTables/datatables.js"), "html", null, true);
        // line 21
        echo "\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/control_permisos/Assets/JS/insertarRol.js"), "html", null, true);
        // line 24
        echo "\"></script>
<script>
  \$(document).ready(function () {
    \$(\"#tablaDRoles\").DataTable(); // Inicializa la DataTable
  });
  \$(\"#formularioRoles\").on(\"submit\", function (e) {
    e.preventDefault();  
    insertRol();
  });
 
  // Llamar a la función limpiarModal al cerrar el modal usando jQuery (Bootstrap)
  \$(\"#modalRoles\").on(\"hidden.bs.modal\", function (e) {
    limpiarModal();
  });
  function limpiarModal() {
    // Obtener referencia a los campos del formulario dentro del modal
    let codigoRolInput = document.getElementById(\"codrole\");
    let descripcionInput = document.getElementById(\"descripcion\");

    // Limpiar los valores de los campos del formulario
    codigoRolInput.value = \"\";
    descripcionInput.value = \"\";
  }
</script>
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
        return array (  91 => 24,  89 => 22,  86 => 21,  84 => 19,  78 => 15,  75 => 14,  73 => 13,  68 => 10,  64 => 9,  58 => 7,  56 => 5,  50 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuBghTemplate.html.twig\" %} {% block head %}
{{ parent() }}
<link
  rel=\"stylesheet\"
  href=\"{{
    asset('Plugins/control_permisos/Assets/DataTables/datatables.css')
  }}\"
/>
{% endblock %} {% block body %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      {% include 'componentes/tablaP.html.twig' with { 'usuarios': fsc.roles }%}
      {% include 'componentes/modalP.html.twig'%}
    </div>
  </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<script src=\"{{
    asset('Plugins/asignacion_usuarios/Assets/DataTables/datatables.js')
  }}\"></script>
<script src=\"{{
    asset('Plugins/control_permisos/Assets/JS/insertarRol.js')
  }}\"></script>
<script>
  \$(document).ready(function () {
    \$(\"#tablaDRoles\").DataTable(); // Inicializa la DataTable
  });
  \$(\"#formularioRoles\").on(\"submit\", function (e) {
    e.preventDefault();  
    insertRol();
  });
 
  // Llamar a la función limpiarModal al cerrar el modal usando jQuery (Bootstrap)
  \$(\"#modalRoles\").on(\"hidden.bs.modal\", function (e) {
    limpiarModal();
  });
  function limpiarModal() {
    // Obtener referencia a los campos del formulario dentro del modal
    let codigoRolInput = document.getElementById(\"codrole\");
    let descripcionInput = document.getElementById(\"descripcion\");

    // Limpiar los valores de los campos del formulario
    codigoRolInput.value = \"\";
    descripcionInput.value = \"\";
  }
</script>
{% endblock %}
", "PermisosControl.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\control_permisos\\View\\PermisosControl.html.twig");
    }
}
