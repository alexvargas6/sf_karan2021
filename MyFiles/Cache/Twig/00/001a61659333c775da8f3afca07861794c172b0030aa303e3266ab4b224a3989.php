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
          <h5 class=\"modal-title\" id=\"permisosModalLabel\">Asignar/Quitar Permisos</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"form-group\">
              <label for=\"selectPermiso\">Seleccionar Permiso:</label>
              <select id=\"selectPermiso\" class=\"form-control\">
                <option value=\"permiso1\">Permiso 1</option>
                <option value=\"permiso2\">Permiso 2</option>
                <!-- ... (más opciones de permisos) ... -->
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
</script>";
    }

    public function getTemplateName()
    {
        return "componentes/modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- components/modal.html.twig -->
<!-- Modal para asignar/quitar permisos -->
<div class=\"modal fade\" id=\"permisosModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"permisosModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"permisosModalLabel\">Asignar/Quitar Permisos</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"form-group\">
              <label for=\"selectPermiso\">Seleccionar Permiso:</label>
              <select id=\"selectPermiso\" class=\"form-control\">
                <option value=\"permiso1\">Permiso 1</option>
                <option value=\"permiso2\">Permiso 2</option>
                <!-- ... (más opciones de permisos) ... -->
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
</script>", "componentes/modal.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\asignacion_usuarios\\View\\componentes\\modal.html.twig");
    }
}
