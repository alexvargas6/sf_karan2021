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

/* componentes/tabla.html.twig */
class __TwigTemplate_3e5fe6b933dc4c483f5a61e77a52d6ca4d93a8f187ce93b5108c96f14229b596 extends Template
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
  <div class=\"card-header\">Asignación de Usuarios</div>
  <div class=\"card-body\">
    <table id=\"tablaUsuarios\" class=\"table table-bordered\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>

          <th scope=\"col\">Nick</th>
          <!-- Agregamos nueva columna para el Nick -->
          <th scope=\"col\">Permisos</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuarios"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 17
            echo "        <tr>
          <th scope=\"row\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18), "html", null, true);
            echo "</th>

          <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nick", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
          <!-- Mostramos el nick del usuario -->
          <td>
            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#permisosModal\"
            data-nick=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nick", [], "any", false, false, false, 24), "html", null, true);
            echo "\">Asignar o quitar</button>
            <!-- Botón para Asignar -->
            <!-- Puedes añadir lógica aquí para asignar permisos -->
          </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "componentes/tabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  85 => 24,  78 => 20,  73 => 18,  70 => 17,  53 => 16,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# components/tabla_bootstrap.html.twig #}
<div class=\"card\">
  <div class=\"card-header\">Asignación de Usuarios</div>
  <div class=\"card-body\">
    <table id=\"tablaUsuarios\" class=\"table table-bordered\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>

          <th scope=\"col\">Nick</th>
          <!-- Agregamos nueva columna para el Nick -->
          <th scope=\"col\">Permisos</th>
        </tr>
      </thead>
      <tbody>
        {% for usuario in usuarios %}
        <tr>
          <th scope=\"row\">{{ loop.index }}</th>

          <td>{{ usuario.nick }}</td>
          <!-- Mostramos el nick del usuario -->
          <td>
            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#permisosModal\"
            data-nick=\"{{ usuario.nick }}\">Asignar o quitar</button>
            <!-- Botón para Asignar -->
            <!-- Puedes añadir lógica aquí para asignar permisos -->
          </td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>
", "componentes/tabla.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\asignacion_usuarios\\View\\componentes\\tabla.html.twig");
    }
}
