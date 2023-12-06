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
            'javascripts' => [$this, 'block_javascripts'],
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
<link
  rel=\"stylesheet\"
  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/asignacion_usuarios/Assets/DataTables/datatables.css"), "html", null, true);
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
        echo " ";
        // line 14
        echo " ";
        // line 15
        $this->loadTemplate("componentes/tabla.html.twig", "AsignacionUsuariosController.html.twig", 15)->display(twig_array_merge($context, ["usuarios" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "users", [], "any", false, false, false, 15)]));
        // line 16
        echo "    </div>
  </div>
</div>
";
        // line 19
        $this->loadTemplate("componentes/modal.html.twig", "AsignacionUsuariosController.html.twig", 19)->display(twig_array_merge($context, ["roles" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 19)]));
        // line 20
        echo "<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<script></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/asignacion_usuarios/Assets/DataTables/datatables.js"), "html", null, true);
        // line 24
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/asignacion_usuarios/Assets/JS/dom.js"), "html", null, true);
        // line 27
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/asignacion_usuarios/Assets/JS/getRoles.js"), "html", null, true);
        // line 30
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/asignacion_usuarios/Assets/JS/insertUs.js"), "html", null, true);
        // line 33
        echo "\"></script>

";
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
  var fsRouteJS = \"";
        // line 38
        echo twig_escape_filter($this->env, ($context["fs_route"] ?? null), "html", null, true);
        echo "\";
  console.log(fsRouteJS);
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
        return array (  123 => 38,  118 => 36,  114 => 35,  108 => 33,  106 => 31,  103 => 30,  101 => 28,  98 => 27,  96 => 25,  93 => 24,  91 => 22,  87 => 20,  85 => 19,  80 => 16,  78 => 15,  76 => 14,  74 => 13,  69 => 10,  65 => 9,  59 => 7,  57 => 5,  51 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuBghTemplate.html.twig\" %} {% block head %}
{{ parent() }}
<link
  rel=\"stylesheet\"
  href=\"{{
    asset('Plugins/asignacion_usuarios/Assets/DataTables/datatables.css')
  }}\"
/>
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
<script></script>
<script src=\"{{
    asset('Plugins/asignacion_usuarios/Assets/DataTables/datatables.js')
  }}\"></script>
<script src=\"{{
    asset('Plugins/asignacion_usuarios/Assets/JS/dom.js')
  }}\"></script>
<script src=\"{{
    asset('Plugins/asignacion_usuarios/Assets/JS/getRoles.js')
  }}\"></script>
<script src=\"{{
    asset('Plugins/asignacion_usuarios/Assets/JS/insertUs.js')
  }}\"></script>

{% endblock %} {% block javascripts %}
{{ parent() }}
<script>
  var fsRouteJS = \"{{ fs_route }}\";
  console.log(fsRouteJS);
</script>
{% endblock %}
", "AsignacionUsuariosController.html.twig", "C:\\xampp\\htdocs\\public\\Plugins\\asignacion_usuarios\\View\\AsignacionUsuariosController.html.twig");
    }
}
