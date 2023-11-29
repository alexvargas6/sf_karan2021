
    
    // Función que se ejecutará al hacer clic en el botón guardar
    $("#btn-guardar").click(function() {
        // toma el token
        const token = 'tu_token_de_la_api';

        // toma el usuario
        const usuario = $('#nick').val();
        var baseUrl = window.location.origin;
        // toma la url para la petición AJAX
        const url = baseUrl + "/sistema2/InsertRolesUsuarios";

       // toma los roles actuales
       const rolesActuales = $('#rolesActuales').val();

        // prepara el objeto de datos para pasar a la solicitud AJAX
        var data = {
            nick: usuario,
            rolesActuales: rolesActuales,
            rolesNuevos: getNewRoles(),
        };

        // Agrega token al objeto de la cabecera
        var headers = {
            'Token': token
        }

        // realiza la solicitud AJAX
        $.ajax({
            url: url,
            headers: headers,
            method: 'POST',
            data: data,
            success: function(response) {
                console.log(response);
                $("#permisosModal").modal('hide'); // cierra el modal
                Swal.fire(
                    '¡Exitoso!',
                    'Roles actualizados con éxito.',
                    'success'
                )
               
            },
            error: function(error) {
                console.error(error);
                $("#permisosModal").modal('hide'); // cierra el modal
                alert('Ocurrió un error al actualizar los roles.');
                Swal.fire(
                    '¡Error!',
                    'Ocurrió un error al actualizar los roles.',
                    'error'
                )
            }
        });
    });

    // Función de ayuda para obtener roles nuevos
    function getNewRoles() {
        var arr = [];
    
        // Recoger todas los roles del permisosBox
        $('#permisosBox').children().each(function(index, element){
            arr.push($(element).attr('data-value'));
        });
    
        // Devuelve los roles como una cadena, separados por comas
        return arr.join(',');
    }
