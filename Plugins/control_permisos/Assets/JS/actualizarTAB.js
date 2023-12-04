function actualizarTabla() {
    // Obtener la instancia de la DataTable
    var tablaDRoles = $("#tablaDRoles").DataTable();
  
    // Recargar los datos de la DataTable desde la fuente original
    tablaDRoles.ajax.reload();
  }
  