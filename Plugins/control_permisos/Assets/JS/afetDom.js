
  $(document).on("click", ".btn-primary", function () {
    var codrole = $(this).closest("tr").find("th:eq(1)").text();
    if (!codrole) {
      Swal.fire(
        "Error",
        "No se ha podido obtener el valor de codrole",
        "error"
      );
      return;
    }
    var baseUrl = window.location.origin;
    var url = baseUrl + "/public/editrole";
    window.location.href = url + "?code=" + codrole;
    /*  try {
      var codrole = $(this).closest("tr").find("th:eq(1)").text();

      if (!codrole) {
        Swal.fire(
          "Error",
          "No se ha podido obtener el valor de codrole",
          "error"
        );
        return;
      }

      var baseUrl = window.location.origin;
      var url = baseUrl + "/public/SelectUser_rol";

      $.get(url, { codrole: codrole })
        .done(function (data) {
          var response = JSON.parse(data);

          if (response.error) {
            Swal.fire("Error", response.error, "error");
            return;
          }
          $("#modalPagina").modal("show");
          // Desactivar todos los checkboxes al abrir el modal
          $(".form-check-input").prop("checked", false);

          // Iterar sobre los registros devueltos por la API
          response.forEach(function (roleRecord) {
            var pagename = roleRecord.pagename;

            // Marcar los checkboxes según los permisos del rol para esa página
            for (var key in roleRecord) {
              if (
                roleRecord[key] &&
                key !== "id" &&
                key !== "codrole" &&
                key !== "pagename"
              ) {
                var checkboxId = key + "_" + pagename; // ID del checkbox
                var checkbox = $("#" + checkboxId);
                if (checkbox.length) {
                  checkbox.prop("checked", true);
                } else {
                  console.log("no existe: " + checkboxId);
                }
                // Si alguno de los permisos está marcado, también se marca 'Mostrar'
                if (key !== "onlyownerdata") {
                  $("#mostrar_" + pagename).prop("checked", true);
                }
              }
            }
          });
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
          console.error(
            "Error al obtener datos: ",
            textStatus,
            ", Detalles: ",
            errorThrown
          );
          console.error("Respuesta: ", jqXHR.responseText);
          Swal.fire(
            "Error",
            "Hubo un problema con la petición: " + textStatus,
            "error"
          );
        });
    } catch (error) {
      console.error("Ha ocurrido un error:", error.message);
      Swal.fire("Error", error.message, "error");
    }*/
  });
