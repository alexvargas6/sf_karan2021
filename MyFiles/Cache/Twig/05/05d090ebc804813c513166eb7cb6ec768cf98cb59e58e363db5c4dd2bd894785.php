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

/* componentes/tablaP.html.twig */
class __TwigTemplate_e4425e474d67e40af45974ebd1c3c82fefae2917534cb6895ef4065c26203537 extends Template
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
        // line 2
        echo "<div class=\"card\">
  <div class=\"card-header\">Asignación de Permisos</div>
  
  <div class=\"card-body\">
    <button id=\"agregarPermisoBtn\" class=\"btn btn-primary btn-sm mb-3\">Agregar permiso</button> ";
        // line 7
        echo "    <table id=\"\" class=\"table table-bordered dataTable\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">ROL</th>
          <th scope=\"col\">Descripcion</th>
          <th scope=\"col\">Acciones</th> ";
        // line 14
        echo "        </tr>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 18));
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
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 19
            echo "        <tr>
          <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20), "html", null, true);
            echo "</th>
          <th>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "codrole", [], "any", false, false, false, 21), "html", null, true);
            echo "</th>
          <th>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "descripcion", [], "any", false, false, false, 22), "html", null, true);
            echo "</th>
          <th>
            <button type=\"button\" class=\"btn btn-danger btn-sm\">Eliminar</button> ";
            // line 25
            echo "          </th>
        </tr>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "componentes/tablaP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  90 => 25,  85 => 22,  81 => 21,  77 => 20,  74 => 19,  57 => 18,  51 => 14,  43 => 7,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# components/tabla.html.twig #}
<div class=\"card\">
  <div class=\"card-header\">Asignación de Permisos</div>
  
  <div class=\"card-body\">
    <button id=\"agregarPermisoBtn\" class=\"btn btn-primary btn-sm mb-3\">Agregar permiso</button> {# Agregamos un margen inferior al botón #}
    <table id=\"\" class=\"table table-bordered dataTable\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">ROL</th>
          <th scope=\"col\">Descripcion</th>
          <th scope=\"col\">Acciones</th> {# Nueva columna para las acciones #}
        </tr>
        </tr>
      </thead>
      <tbody>
        {% for role in fsc.roles %}
        <tr>
          <th scope=\"row\">{{ loop.index }}</th>
          <th>{{ role.codrole }}</th>
          <th>{{ role.descripcion }}</th>
          <th>
            <button type=\"button\" class=\"btn btn-danger btn-sm\">Eliminar</button> {# Nuevo botón de eliminar #}
          </th>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>
", "componentes/tablaP.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\control_permisos\\View\\componentes\\tablaP.html.twig");
    }
}
