$(function() {
    listarCargos();

    $("#frmCargos").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "cargos/registrarCargos",
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

function listarCargos() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "cargos/listarCargos",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function estadoCargos(nidcargos) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "cargos/estadoCargos",
            cache: false,
            data: {
                nidcargos: nidcargos
            },
            success: function(data) {
                switch (data) {
                    case "0":
                        alert("Ha ocurrido un error, vuelva a intentarlo.");
                        break;
                    case "1":
                        listarAreas();
                        break;
                }
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}

function buscarCargos() {
    $.ajax({
        type: "POST",
        url: "cargos/buscarCargos",
        cache: false,
        data: {
            txtbuscarCargos: $('#txtbuscarAreaCargos').val()
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

