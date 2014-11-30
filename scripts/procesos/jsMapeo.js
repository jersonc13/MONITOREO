$(function() {
 
});

function listarClient(cidvalor,host) {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "mapeo/listarclient",
        cache: false,
        data: {
                cidvalor: cidvalor,
                host: host
            },
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}


function editarAmbiente(nidvalor) {
    if (confirm('¿Desea Editar el registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "ambiente/editarAmbiente",
            cache: false,
            data: {
                nidvalor: nidvalor
            },
            success: function(data) {
                $("#mostrar_qry").html(data);
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}

function editarGuardar() {
//    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "ambiente/guardarEditar",
        cache: false,
        data: {
            txtidambiente: $('#txtidambiente').val(),
            cbotipoambiente: $('#cbotipoambiente').val(),
            txtnombreambiente: $('#txtnombreambiente').val(),
            txtnombredescripcion : $('#txtnombredescripcion').val(),
            cboestado: $('#cboestado').val()
        },
        success: function(data) {
            if (data == '1') {
                alert("Datos ingresados correctamente");
                listarAmbiente();
            } else {
                alert("Error General!! al ingresar los datos");
            }
        },
        error: function(data) {
            alert("Error al ingresar los datos");
        }
    });
}