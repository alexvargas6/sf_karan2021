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

/* componentes/modal.html.twig */
class __TwigTemplate_accebede600ea1e086e99ca08766ce228c7c69b154a3a554f7e9f46c038e66dc extends Template
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
        echo "<!-- components/modal.html.twig -->
<!-- Modal para asignar/quitar permisos -->
<div class=\"modal fade\" id=\"permisosModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"permisosModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"permisosModalLabel\">Asignar/Quitar Permisos | ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "nick", [], "any", false, false, false, 7), "html", null, true);
        echo "</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"form-group\">
              <label for=\"selectPermiso\">Seleccionar Permiso:</label>
              <select id=\"selectPermiso\" class=\"form-control\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 17
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "codrol", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "descripcion", [], "any", false, false, false, 17), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "              </select>
             
            </div>
            
            <!-- Caja de etiquetas de permisos -->
            <div id=\"permisosBox\" class=\"border p-2 mb-3\">
              <!-- Etiquetas de permisos -->
              <span class=\"badge badge-primary mr-2 mb-2\">Permiso 1 <i class=\"fas fa-times ml-1 eliminar-permiso\"></i></span>
              <span class=\"badge badge-primary mr-2 mb-2\">Permiso 2 <i class=\"fas fa-times ml-1 eliminar-permiso\"></i></span>
              <!-- ... (más etiquetas de permisos) ... -->
            </div>
          </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" class=\"btn btn-primary\">Guardar cambios</button>
          <!-- Botones u opciones para realizar acciones en el modal -->
        </div>
      </div>
    </div>
  </div>
  <!-- Agrega el script al final de tu archivo para manejar el evento de eliminación -->
<!-- Agrega el script al final de tu archivo para manejar el evento del select -->
<script>
  \$(document).ready(function() {
    // Manejar el evento de cambio en el select para añadir permisos
    \$('#selectPermiso').change(function() {
      var permisoSeleccionado = \$(this).val(); // Obtener el permiso seleccionado

      // Agregar una nueva etiqueta de permiso al permisosBox
      \$('#permisosBox').append('<span class=\"badge badge-primary mr-2 mb-2\">' + permisoSeleccionado + ' <i class=\"fas fa-times ml-1 eliminar-permiso\"></i></span>');
    });

    // Manejar el evento de clic en la \"tachita\" para eliminar el permiso
    \$('#permisosBox').on('click', '.eliminar-permiso', function() {
      \$(this).parent().remove(); // Elimina la etiqueta del permiso al hacer clic en el ícono
    });
  });

  // Manejar el evento de abrir el modal.
\$('#permisosModal').on('shown.bs.modal', function (event) {
    // Obtenemos el botón que disparó el modal
    var button = \$(event.relatedTarget);

    // Obtenemos el nick del usuario a través del atributo data-nick
    var nick = button.data('nick');
    var baseUrl = window.location.origin;
    // Llamar a la función AJAX que devuelve los roles de usuario
    \$.ajax({
        url: baseUrl + \"/sistema2/RolesUsuarios\",
        method: 'GET',
        headers: {
            'Token': 'API_TOKEN'
        },
        data: {
            nick: nick
        },
        success: function(data) {
            // Limpiar el permisosBox
            \$('#permisosBox').empty();
            var dataArray = JSON.parse(data); // Convertir la cadena de texto a un array

            // Agregar cada rol del usuario al permisosBox
            dataArray.forEach(function (role) {
                \$('#permisosBox').append('<span class=\"badge badge-primary mr-2 mb-2\">' + role.codrole + ' <i class=\"fas fa-times ml-1 eliminar-permiso\"></i></span>');
            });
        },
        error: function(error){
            console.log('Hubo un error al obtener los roles: ', error);
        },
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "componentes/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  61 => 17,  57 => 16,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- components/modal.html.twig -->
<!-- Modal para asignar/quitar permisos -->
<div class=\"modal fade\" id=\"permisosModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"permisosModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"permisosModalLabel\">Asignar/Quitar Permisos | {{ usuario.nick }}</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"form-group\">
              <label for=\"selectPermiso\">Seleccionar Permiso:</label>
              <select id=\"selectPermiso\" class=\"form-control\">
                {% for role in roles %}
                <option value=\"{{ role.codrol }}\">{{ role.descripcion }}</option>
              {% endfor %}
              </select>
             
            </div>
            
            <!-- Caja de etiquetas de permisos -->
            <div id=\"permisosBox\" class=\"border p-2 mb-3\">
              <!-- Etiquetas de permisos -->
              <span class=\"badge badge-primary mr-2 mb-2\">Permiso 1 <i class=\"fas fa-times ml-1 eliminar-permiso\"></i></span>
              <span class=\"badge badge-primary mr-2 mb-2\">Permiso 2 <i class=\"fas fa-times ml-1 eliminar-permiso\"></i></span>
              <!-- ... (más etiquetas de permisos) ... -->
            </div>
          </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" class=\"btn btn-primary\">Guardar cambios</button>
          <!-- Botones u opciones para realizar acciones en el modal -->
        </div>
      </div>
    </div>
  </div>
  <!-- Agrega el script al final de tu archivo para manejar el evento de eliminación -->
<!-- Agrega el script al final de tu archivo para manejar el evento del select -->
<script>
  \$(document).ready(function() {
    // Manejar el evento de cambio en el select para añadir permisos
    \$('#selectPermiso').change(function() {
      var permisoSeleccionado = \$(this).val(); // Obtener el permiso seleccionado

      // Agregar una nueva etiqueta de permiso al permisosBox
      \$('#permisosBox').append('<span class=\"badge badge-primary mr-2 mb-2\">' + permisoSeleccionado + ' <i class=\"fas fa-times ml-1 eliminar-permiso\"></i></span>');
    });

    // Manejar el evento de clic en la \"tachita\" para eliminar el permiso
    \$('#permisosBox').on('click', '.eliminar-permiso', function() {
      \$(this).parent().remove(); // Elimina la etiqueta del permiso al hacer clic en el ícono
    });
  });

  // Manejar el evento de abrir el modal.
\$('#permisosModal').on('shown.bs.modal', function (event) {
    // Obtenemos el botón que disparó el modal
    var button = \$(event.relatedTarget);

    // Obtenemos el nick del usuario a través del atributo data-nick
    var nick = button.data('nick');
    var baseUrl = window.location.origin;
    // Llamar a la función AJAX que devuelve los roles de usuario
    \$.ajax({
        url: baseUrl + \"/sistema2/RolesUsuarios\",
        method: 'GET',
        headers: {
            'Token': 'API_TOKEN'
        },
        data: {
            nick: nick
        },
        success: function(data) {
            // Limpiar el permisosBox
            \$('#permisosBox').empty();
            var dataArray = JSON.parse(data); // Convertir la cadena de texto a un array

            // Agregar cada rol del usuario al permisosBox
            dataArray.forEach(function (role) {
                \$('#permisosBox').append('<span class=\"badge badge-primary mr-2 mb-2\">' + role.codrole + ' <i class=\"fas fa-times ml-1 eliminar-permiso\"></i></span>');
            });
        },
        error: function(error){
            console.log('Hubo un error al obtener los roles: ', error);
        },
    });
});
</script>", "componentes/modal.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\asignacion_usuarios\\View\\componentes\\modal.html.twig");
    }
}
