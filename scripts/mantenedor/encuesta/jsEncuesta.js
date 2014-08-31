$(function() {
    
    listarEncuesta();
    
    $("#frmEncuesta").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "encuesta/ingresarEncuesta",
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
            cboEmpresa: {
                required: true
            },
            txtEncuesta: {
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

function listarEncuesta() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "encuesta/listarEncuesta",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function estadoEncuesta(nidvalor) {
    if (confirm('Esta seguro de editar este registro?')) {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "encuesta/estadoEncuesta",
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
                        listarEncuesta();
                        break;
                }            
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
    }
}
