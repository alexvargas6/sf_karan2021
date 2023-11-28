// Manejar el evento de abrir el modal.
$("#permisosModal").on("shown.bs.modal", function (event) {
  // Obtenemos el botón que disparó el modal
  var button = $(event.relatedTarget);

  // Obtenemos el nick del usuario a través del atributo data-nick
  var nick = button.data("nick");
  var baseUrl = window.location.origin;
  // Llamar a la función AJAX que devuelve los roles de usuario
  $.ajax({
    url: baseUrl + "/sistema2/RolesUsuarios",
    method: "GET",
    headers: {
      Token: "API_TOKEN",
    },
    data: {
      nick: nick,
    },
    success: function (data) {
      // Limpiar el permisosBox
      $("#permisosBox").empty();
      var dataArray = JSON.parse(data); // Convertir la cadena de texto a un array
      var permisosUsuario = dataArray.map(function (role) {
        return role.codrole;
      }); // crear un array con los permisos del usuario

      // Habilitar todas las opciones del select
      $("#selectPermiso option").prop("disabled", false);

      // Recorrer todas las opciones del select
      $("#selectPermiso option").each(function () {
        var permisoOption = $(this);
        var permisoValue = permisoOption.attr("value");

        // si el permiso ya está asignado al usuario
        if (permisosUsuario.includes(permisoValue)) {
          // deshabilitar la opción en el select
          permisoOption.prop("disabled", true);
        } else {
          // habilitar la opción en el select (por si antes estaba deshabilitada)
          permisoOption.prop("disabled", false);
        }
      });
      // Agregar cada rol del usuario al permisosBox
      dataArray.forEach(function (role) {
        $("#permisosBox").append(
          '<span class="badge badge-primary mr-2 mb-2" data-value="' +
            role.codrole +
            '">' +
            role.descripcion +
            ' <i class="fas fa-times ml-1 eliminar-permiso"></i></span>'
        );
      });
    },
    error: function (error) {
      console.log("Hubo un error al obtener los roles: ", error);
    },
  });
});
