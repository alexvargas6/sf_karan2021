$(document).ready(function () {
    $("#tablaUsuarios").DataTable(); // Inicializa la DataTable
    // Manejar el evento de cambio en el select para añadir permisos
    $("#selectPermiso").change(function () {
      var permisoSeleccionado = $(this).val(); // Obtener el permiso seleccionado
      var permisoDescripcion = $("#selectPermiso option:selected").text(); // Obtener la descripción seleccionada
      if (permisoSeleccionado == 0) {
        return false;
      }
      // Agregar una nueva etiqueta de permiso al permisosBox
      $("#permisosBox").append(
        '<span class="badge badge-success mr-2 mb-2" data-value="' +
          permisoSeleccionado +
          '">' +
          permisoDescripcion +
          ' <i class="fas fa-times ml-1 eliminar-permiso"></i></span>'
      );
      // Deshabilitar la opción correspondiente en el select
      $("#selectPermiso option:selected").prop("disabled", true);
    });

    // Manejar el evento de clic en la "tachita" para eliminar el permiso
    $("#permisosBox").on("click", ".eliminar-permiso", function () {
      var permisoEliminado = $(this).parent().data("value"); // Obtener el permiso eliminado

      // Habilitar la opción correspondiente en el select
      $("#selectPermiso option[value='" + permisoEliminado + "']").prop(
        "disabled",
        false
      );

      $(this).parent().remove(); // Elimina la etiqueta del permiso al hacer clic en el ícono
    });
  });