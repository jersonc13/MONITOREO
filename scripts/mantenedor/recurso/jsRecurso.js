$(function() {
    listarRecurso();

    $("#frmRecursoIns").validate({
        errorPlacement: function(error, element)
        {
            element.before(error);
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "recurso/registrar",
                data: $(form).serialize(),
                success: function(data) {
                    if (data == '1') {
                        alert("Datos ingresados correctamente");
                        document.getElementById("frmRecursoIns").reset();
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
            txtcodigopatrimonial: {
                required: true
            },
            txtserie: {
                required: true
            },
            txtmodelo: {
                required: true
            },
            txtfechacompra: {
                required: true
            },
            txtfechagarantia: {
                required: true
            },
            txtcaracteristicas: {
                required: true
            },
            txtobservaciones: {
                required: true
            },
            txtfechavida: {
                required: true
            }
        }
    });

});

function listarRecurso() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "recurso/listarRecurso",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}


function editarRecurso(nidvalor) {
    if (confirm('¿Desea Editar el registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "recurso/editarRecurso",
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
        url: "recurso/guardarEditar",
        cache: false,
        data: {
            txtidrecurso: $('#txtidrecurso').val(),
            cbotiporecurso: $('#cbotiporecurso').val(),
            txtcodigopat: $('#txtcodigopat').val(),
            txtserie : $('#txtserie').val(),
            cbomarca: $('#cbomarca').val(),
            txtmodelo: $('#txtmodelo').val(),
            cboambiente: $('#cboambiente').val(),
            txtfechacompra: $('#txtfechacompra').val(),
            txtfechagarantia: $('#txtfechagarantia').val(),
            txtcaracteristicas: $('#txtcaracteristicas').val(),
            txtobservaciones: $('#txtobservaciones').val(),
            txtfechavida: $('#txtfechavida').val(),
            txtruta: $('#txtruta').val(),
            txthost: $('#txthost').val(),
            txtip: $('#txtip').val(),
            cboestado: $('#cboestado').val()
        },
        success: function(data) {
            if (data == '1') {
                alert("Datos ingresados correctamente");
                listarRecurso();
            } else {
                alert("Error General!! al ingresar los datos");
            }
        },
        error: function(data) {
            alert("Error al ingresar los datos");
        }
    });
}