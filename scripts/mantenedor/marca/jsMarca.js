$(function() {
    listarMarca();

    $("#frmMarcaIns").validate({
        errorPlacement: function(error, element)
        {
            element.before(error);
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "marca/registrar",
                data: $(form).serialize(),
                success: function(data) {
                    if (data == '1') {
                        alert("Datos ingresados correctamente");
                        document.getElementById("frmMarcaIns").reset();
                        listarMarca();
                    } else {
                        alert("Error General!! al ingresar los datos");
                    }
                },
                error: function(data) {
                    alert("Error al ingresar los datos");
                }
            });
        },
        rules: {
            //account
            txtnombremarca: {
                required: true
            }
        }
    });


});

function listarMarca() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "marca/listarMarca",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function viewMarca() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "marca/viewMarca",
        cache: false,
        success: function(data) {
            $("#tab-2").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}


function editarMarca(nidvalor) {
    if (confirm('¿Desea Editar el registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "marca/editarMarca",
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
                listarMarca();
            } else {
                alert("Error General!! al ingresar los datos");
            }
        },
        error: function(data) {
            alert("Error al ingresar los datos");
        }
    });
}