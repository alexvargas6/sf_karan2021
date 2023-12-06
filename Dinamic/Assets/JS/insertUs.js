// Función que se ejecutará al hacer clic en el botón guardar
$("#btn-guardar").click(function () {
  // toma el token
  const token = "tu_token_de_la_api";

  // toma el usuario
  const usuario = $("#nick").val();
  var baseUrl = window.location.origin;
  // toma la url para la petición AJAX
  const url = baseUrl + "/public/InsertRolesUsuarios";

  // toma los roles actuales
  const rolesNuevos = getNewRoles();
  const rolesActuales = $("#rolesActuales").val();

  const rolesNuevosCom = getNewRoles().split(",").sort().join(",");
  const rolesActualesCom = $("#rolesActuales")
    .val()
    .split(",")
    .sort()
    .join(",");

  // Verificar si los roles son idénticos
  if (rolesNuevosCom === rolesActualesCom) {
    // Mostrar mensaje de que no se ha realizado ninguna modificación
    Swal.fire(
      "¡No se han realizado cambios!",
      "No ha modificado ningún rol.",
      "info"
    );
    $("#selectPermiso").val(0);
    return; // Detener la ejecución aquí si no hay cambios
  }

  // prepara el objeto de datos para pasar a la solicitud AJAX
  var data = {
    nick: usuario,
    rolesActuales: rolesActuales,
    rolesNuevos: rolesNuevos,
  };

  // Agrega token al objeto de la cabecera
  var headers = {
    Token: token,
  };

  // Añadir confirmación con SweetAlert2
  Swal.fire({
    title:
      "¿Está seguro de que desea modificar los permisos de " + usuario + "?",
    showCancelButton: true,
    confirmButtonText: "Sí",
    cancelButtonText: "No",
    icon: "warning",
  }).then((result) => {
    if (result.isConfirmed) {
      // Realizar la solicitud AJAX si se hace clic en "Sí"
      // realiza la solicitud AJAX
      $.ajax({
        url: url,
        headers: headers,
        method: "POST",
        data: data,
        success: function (response) {
          var obj = JSON.parse(response);
          var mensaje = "";
          var encabezado = "";
          var tipo = "";
          console.log(obj);
          if (obj.success) {
            encabezado = "¡Exitoso!";
            tipo = "success";
            mensaje = obj.success;
          } else {
            encabezado = "¡Error!";
            tipo = "error";
            mensaje = obj.error;
          }
          $("#permisosModal").modal("hide"); // cierra el modal
          $("#selectPermiso").val(0);
          Swal.fire(
            encabezado,
            mensaje, // Aquí mostramos el mensaje del response
            tipo
          );
        },
        error: function (error) {
          console.error(error);
          $("#permisosModal").modal("hide"); // cierra el modal
          $("#selectPermiso").val(0);
          Swal.fire(
            "¡Error!",
            "Ocurrió un error al actualizar los roles.",
            "error"
          );
        },
      });
    }
  });
});

// Función de ayuda para obtener roles nuevos
function getNewRoles() {
  var arr = [];

  // Recoger todas los roles del permisosBox
  $("#permisosBox")
    .children()
    .each(function (index, element) {
      arr.push($(element).attr("data-value"));
    });

  // Devuelve los roles como una cadena, separados por comas
  return arr.join(",");
}
