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
        <!-- Card para la tabla -->
        <div class=\"card\">
          <div class=\"card-body\">
            <!-- Tabla -->
            <div class=\"table-responsive\">
              <table class=\"table table-bordered dataTable\" id=\"tableMPaginas\">
                <thead>
                  <tr>
                    <th>Menú</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "pages", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            echo "                  <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "\">
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "menu", [], "any", false, false, false, 39), "html", null, true);
            echo ">>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"mostrar_";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "\"
                        />
                        <label class=\"form-check-label\" for=\"mostrar_";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                          Mostrar
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"onlyownerdata_";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 57), "html", null, true);
            echo "\"
                        />
                        <label class=\"form-check-label\" for=\"onlyownerdata_";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
                          Mostrar solo registros del usuario
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"allowupdate_";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "\"
                        />
                        <label class=\"form-check-label\" for=\"allowupdate_";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
                          Permitir modificar
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"allowimport_";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "\"
                        />
                        <label class=\"form-check-label\" for=\"allowimport_";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "\">
                          Permitir importar
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"allowexport_";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 90), "html", null, true);
            echo "\"
                        />
                        <label class=\"form-check-label\" for=\"allowexport_";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 92), "html", null, true);
            echo "\">
                          Permitir exportar
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"allowdelete_";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 101), "html", null, true);
            echo "\"
                        />
                        <label class=\"form-check-label\" for=\"allowdelete_";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "\">
                          Permitir eliminar
                        </label>
                      </div>
                    </td>

                   
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                </tbody>
              </table>
            </div>
          </div>
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
        return array (  201 => 112,  186 => 103,  181 => 101,  169 => 92,  164 => 90,  152 => 81,  147 => 79,  135 => 70,  130 => 68,  118 => 59,  113 => 57,  101 => 48,  96 => 46,  84 => 39,  79 => 38,  75 => 37,  37 => 1,);
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
        <!-- Card para la tabla -->
        <div class=\"card\">
          <div class=\"card-body\">
            <!-- Tabla -->
            <div class=\"table-responsive\">
              <table class=\"table table-bordered dataTable\" id=\"tableMPaginas\">
                <thead>
                  <tr>
                    <th>Menú</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  {% for page in fsc.pages %}
                  <tr id=\"{{ page.name }}\">
                    <td>{{ page.menu }}>>{{ page.title }}</td>
                    <td>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"mostrar_{{ page.name }}\"
                        />
                        <label class=\"form-check-label\" for=\"mostrar_{{ page.name }}\">
                          Mostrar
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"onlyownerdata_{{ page.name }}\"
                        />
                        <label class=\"form-check-label\" for=\"onlyownerdata_{{ page.name }}\">
                          Mostrar solo registros del usuario
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"allowupdate_{{ page.name }}\"
                        />
                        <label class=\"form-check-label\" for=\"allowupdate_{{ page.name }}\">
                          Permitir modificar
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"allowimport_{{ page.name }}\"
                        />
                        <label class=\"form-check-label\" for=\"allowimport_{{ page.name }}\">
                          Permitir importar
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"allowexport_{{ page.name }}\"
                        />
                        <label class=\"form-check-label\" for=\"allowexport_{{ page.name }}\">
                          Permitir exportar
                        </label>
                      </div>
                      <div class=\"form-check\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          value=\"\"
                          id=\"allowdelete_{{ page.name }}\"
                        />
                        <label class=\"form-check-label\" for=\"allowdelete_{{ page.name }}\">
                          Permitir eliminar
                        </label>
                      </div>
                    </td>

                   
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </div>
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
