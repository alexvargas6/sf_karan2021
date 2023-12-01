function insertRol() {
  const token = "tu_token_de_la_api";

  // toma el usuario
  const codrole = $("#codrole").val();
  const descripcion = $("#descripcion").val();
  var baseUrl = window.location.origin;
  // toma la url para la petición AJAX
  const url = baseUrl + "/sistema2/InserRol";

  // prepara el objeto de datos para pasar a la solicitud AJAX
  var data = {
    rolId: codrole,
    descripcion: descripcion,
  };

  // Agrega token al objeto de la cabecera
  var headers = {
    Token: token,
  };
  $.ajax({
    url: url,
    headers: headers,
    method: "POST",
    contentType: "application/json", // <---- línea añadida
    data: JSON.stringify(data), // <---- línea modificada
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
      // $("#modalRoles").modal("hide"); // cierra el modal
      Swal.fire(
        encabezado,
        mensaje, // Aquí mostramos el mensaje del response
        tipo
      );
    },
    error: function (error) {
      console.error(error);
    },
  });
}
