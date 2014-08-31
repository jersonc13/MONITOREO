$(function() {
    listarUsuarios();

    $("#frmUsuarios").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "usuarios/registrarUsuarios",
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
            txtdniruc: {
                required: true
            },
            txtusuario: {
                required: true
            },
            txtcontrasena: {
                required: true
            },
            cbo_tipousuarios: {
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

function listarUsuarios() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "usuarios/listarUsuarios",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function estadoUsuarios(nidusuarios) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "usuarios/estadoUsuarios",
            cache: false,
            data: {
                nidusuarios: nidusuarios
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

function buscarUsuarios() {
    $.ajax({
        type: "POST",
        url: "usuarios/buscarUsuarios",
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

