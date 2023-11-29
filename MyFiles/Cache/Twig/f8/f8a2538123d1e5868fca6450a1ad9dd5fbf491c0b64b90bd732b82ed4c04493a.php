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
class __TwigTemplate_bef76ab726212b6fa6e48732bd52ce9b48bb2c34921ade2466a33db58a87a200 extends Template
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
    <table id=\"\" class=\"table table-bordered dataTable\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">ROL</th>
          <th scope=\"col\">Descripcion</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 14));
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
            // line 15
            echo "        <tr>
          <th scope=\"row\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16), "html", null, true);
            echo "</th>
          <th>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "codrole", [], "any", false, false, false, 17), "html", null, true);
            echo "</th>
          <th>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "descripcion", [], "any", false, false, false, 18), "html", null, true);
            echo "</th>
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
        // line 21
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
        return array (  96 => 21,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  51 => 14,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# components/tabla.html.twig #}
<div class=\"card\">
  <div class=\"card-header\">Asignación de Permisos</div>
  <div class=\"card-body\">
    <table id=\"\" class=\"table table-bordered dataTable\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">ROL</th>
          <th scope=\"col\">Descripcion</th>
        </tr>
      </thead>
      <tbody>
        {% for role in fsc.roles %}
        <tr>
          <th scope=\"row\">{{ loop.index }}</th>
          <th>{{ role.codrole }}</th>
          <th>{{ role.descripcion }}</th>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>
", "componentes/tabla.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\control_permisos\\View\\componentes\\tabla.html.twig");
    }
}
