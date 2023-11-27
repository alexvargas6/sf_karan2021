function getRoles(nick) {
    $.ajax({
        url: "/dir_root/index.php?page=API_PermissionControllerAPI&route=getRolesUser",
        method: 'GET',
        headers: {
            'Token': 'API_TOKEN'
        },
        data: {
            nick: nick
        },
        success: function(data) {
            console.log(data);
            // Aquí puedes procesar los datos recibidos, por ejemplo creando una lista con los roles,
            // o llenando alguna tabla, etc. Dependiendo del formato de los datos que recibes de la API.
        },
        error: function(error){
            console.log('Hubo un error al obtener los roles: ', error);
        },
    });
}