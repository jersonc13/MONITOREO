function editarGuardar() {
//    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "marca/guardarEditar",
        cache: false,
        data: {
            txtidmarca: $('#txtidmarca').val(),
            txtnombremarca: $('#txtnombremarca').val(),
            cboestado: $('#cboestado').val()
        },
        success: function(data) {
            if (data == '1') {
                alert("Datos ingresados correctamente");
            } else {
                alert("Error General!! al ingresar los datos");
            }
        },
        error: function(data) {
            alert("Error al ingresar los datos");
        }
    });
}