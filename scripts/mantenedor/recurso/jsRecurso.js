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
            txttipoambiente: {
                required: true
            },
            txtambiente: {
                required: true
            },
            txtdescripcion: {
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