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

/* componentes/modalPaginas.html.twig */
class __TwigTemplate_003965609573c0f109608d80e1a63a711f019ba6e677da22936374ceddf3034d extends Template
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
        echo "<!-- Modal -->
<div
  class=\"modal fade\"
  id=\"modalPagina\"
  tabindex=\"-1\"
  role=\"dialog\"
  aria-labelledby=\"miModalLabel\"
  aria-hidden=\"true\"
>
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"miModalLabel\">Tabla de Páginas</h5>
        <button
          type=\"button\"
          class=\"close\"
          data-dismiss=\"modal\"
          aria-label=\"Close\"
        >
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- Tabla -->
        <div class=\"table-responsive\">
          <table class=\"table table-bordered dataTable\" id=\"tableMPaginas\">
            <thead>
              <tr>
                <th>Menú</th>
                <th>Mostrar</th>
                <th>Mostrar solo registros del usuario</th>
                <th>Permitir modificar</th>
                <th>Permitir importar</th>
                <th>Permitir exportar</th>
                <th>Permitir eliminar</th>
                <th style=\"display: none;\">|||</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "pages", [], "any", false, false, false, 40));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 41
            echo "              <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td id=\"nameModalPaginas_";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49), "html", null, true);
            echo "\" style=\"display: none;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
          </table>
        </div>
        
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
          Cerrar
        </button>
        <!-- Otros botones u opciones que necesites -->
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "componentes/modalPaginas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  108 => 49,  98 => 42,  95 => 41,  78 => 40,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal -->
<div
  class=\"modal fade\"
  id=\"modalPagina\"
  tabindex=\"-1\"
  role=\"dialog\"
  aria-labelledby=\"miModalLabel\"
  aria-hidden=\"true\"
>
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"miModalLabel\">Tabla de Páginas</h5>
        <button
          type=\"button\"
          class=\"close\"
          data-dismiss=\"modal\"
          aria-label=\"Close\"
        >
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!-- Tabla -->
        <div class=\"table-responsive\">
          <table class=\"table table-bordered dataTable\" id=\"tableMPaginas\">
            <thead>
              <tr>
                <th>Menú</th>
                <th>Mostrar</th>
                <th>Mostrar solo registros del usuario</th>
                <th>Permitir modificar</th>
                <th>Permitir importar</th>
                <th>Permitir exportar</th>
                <th>Permitir eliminar</th>
                <th style=\"display: none;\">|||</th>
              </tr>
            </thead>
            <tbody>
              {% for page in fsc.pages %}
              <tr>
                <td>{{ page.title }}</td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td><input type=\"checkbox\" class=\"form-check-input\" /></td>
                <td id=\"nameModalPaginas_{{ loop.index }}\" style=\"display: none;\">{{ page.name }}</td>
              </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
        
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
          Cerrar
        </button>
        <!-- Otros botones u opciones que necesites -->
      </div>
    </div>
  </div>
</div>
", "componentes/modalPaginas.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\control_permisos\\View\\componentes\\modalPaginas.html.twig");
    }
}
