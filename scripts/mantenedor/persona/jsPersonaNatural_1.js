$(function() {
    listarPersonas();

    $("#frmPersonaNatural").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "personanatural/registrarPersonaNatural",
                data: $(form).serialize(),
                success: function(data) {
                    if (data == '1') {
                        alert("Datos ingresados correctamente");
                    } else {
                        alert("Error al ingresar los datos");
                    }
                },
                error: function(data) {
                    alert("Error al ingresar los datos");
                }
            });
        },
        rules: {
            txtApellidos: {
                required: true
            },
            txtNombres: {
                required: true
            },
            txtDNI: {
                required: true
            }
        },
        highlight: function(element) { // hightlight error inputs
            $(element)
                    .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
        },
        unhighlight: function(element) { // revert the change done by hightlight
            $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
        }
    });

});

function listarPersonas() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "personanatural/listarPersonas",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function buscarDNI() {
    $.ajax({
        type: "POST",
        url: "personanatural/buscarDNI",
        cache: false,
        data: {
            txtDetalleDNI: $('#txtDetalleDNI').val()
        },
        success: function(data) {
            $("#detalle_lista").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}



function cargaProvincia() {
    $.ajax({
        type: "POST",
        url: "personanatural/cargarprovincia",
        cache: false,
        data: {
            idDepartamento: $('#cbo_departamento').val()
        },
        success: function(data) {
            $("#div_provincia").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function cargarDistrito() {
    $.ajax({
        type: "POST",
        url: "personanatural/cargardistrito",
        cache: false,
        data: {
            idProvincia: $('#cbo_provincia').val()
        },
        success: function(data) {
            $("#div_distrito").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function estadoPersona(nidvalor) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "personanatural/estadoPersona",
            cache: false,
            data: {
                nidvalor: nidvalor
            },
            success: function(data) {
                switch (data) {
                    case "0":
                        alert("Ha ocurrido un error, vuelva a intentarlo.");
                        break;
                    case "1":
                        listarPersonas();
                        break;
                }
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}
