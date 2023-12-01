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
        echo "
<div class=\"card\">
  <div class=\"card-header\">    <button id=\"agregarPermisoBtn\" class=\"btn btn-primary btn-sm mb-3\"  data-toggle=\"modal\" data-target=\"#modalRoles\">Agregar permiso</button> ";
        // line 5
        echo "  </div>
</div>

<div class=\"card\">
  <div class=\"card-header\">Asignación de Permisos</div>
  
  <div class=\"card-body\">
    <table id=\"tablaDRoles\" class=\"table table-bordered dataTable\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">ROL</th>
          <th scope=\"col\">Descripcion</th>
          <th scope=\"col\">Accesos</th> ";
        // line 19
        echo "          <th scope=\"col\">Acciones</th> ";
        // line 20
        echo "        </tr>
        </tr>
      </thead>
      <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 24));
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
            // line 25
            echo "        <tr>
          <th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26), "html", null, true);
            echo "</th>
          <th>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "codrole", [], "any", false, false, false, 27), "html", null, true);
            echo "</th>
          <th>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "descripcion", [], "any", false, false, false, 28), "html", null, true);
            echo "</th>
          <th>
            <button type=\"button\" class=\"btn btn-primary btn-sm\">Accesos</button> ";
            // line 31
            echo "          </th>
          <th>  
            <button type=\"button\" class=\"btn btn-danger btn-sm\">Eliminar</button> ";
            // line 34
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
        // line 37
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
        return array (  117 => 37,  101 => 34,  97 => 31,  92 => 28,  88 => 27,  84 => 26,  81 => 25,  64 => 24,  58 => 20,  56 => 19,  41 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# components/tabla.html.twig #}

<div class=\"card\">
  <div class=\"card-header\">    <button id=\"agregarPermisoBtn\" class=\"btn btn-primary btn-sm mb-3\"  data-toggle=\"modal\" data-target=\"#modalRoles\">Agregar permiso</button> {# Agregamos un margen inferior al botón #}
  </div>
</div>

<div class=\"card\">
  <div class=\"card-header\">Asignación de Permisos</div>
  
  <div class=\"card-body\">
    <table id=\"tablaDRoles\" class=\"table table-bordered dataTable\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">ROL</th>
          <th scope=\"col\">Descripcion</th>
          <th scope=\"col\">Accesos</th> {# Nueva columna para las acciones #}
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
            <button type=\"button\" class=\"btn btn-primary btn-sm\">Accesos</button> {# Nuevo botón de Accesos #}
          </th>
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
