$(function() {
    listarAreas();

    $("#frmAreas").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "areas/registrarAreas",
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

function listarAreas() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "areas/listarAreas",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function estadoAreas(nidareas) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "areas/estadoAreas",
            cache: false,
            data: {
                nidareas: nidareas
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

function buscarAreas() {
    $.ajax({
        type: "POST",
        url: "areas/buscarAreas",
        cache: false,
        data: {
            txtbuscarArea: $('#txtbuscarArea').val()
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

