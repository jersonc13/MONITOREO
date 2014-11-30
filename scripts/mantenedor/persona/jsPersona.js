$(function() {
    listarPersona();
});

function listarPersona() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "persona/listarPersona",
        cache: false,
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
            url: "persona/editarPersona",
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
        url: "persona/guardarEditar",
        cache: false,
        data: {
            txtidper: $('#txtidper').val(),
            txtapellidopater: $('#txtapellidopater').val(),
            txtapellidomater: $('#txtapellidomater').val(),
            txtnombre : $('#txtnombre').val(),
            txtemail : $('#txtemail').val(),
            cboestado: $('#cboestado').val()
        },
        success: function(data) {
            if (data == '1') {
                alert("Datos ingresados correctamente");
                listarPersona();
            } else {
                alert("Error General!! al ingresar los datos");
            }
        },
        error: function(data) {
            alert("Error al ingresar los datos");
        }
    });
}