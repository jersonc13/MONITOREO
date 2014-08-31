function buscarPersona() {
    $.ajax({
        type: "POST",
        url: "permisos/buscarPersona",
        cache: false,
        data: {
            txtPersona: $('#txtPersona').val()
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

function RegistrarDatos() {
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

function asignarPermisos(nidvalor) {
    msgLoading("#detalle_lista");
    $.ajax({
        type: "POST",
        url: "permisos/opciones",
        cache: false,
        data: {
            nidvalor: nidvalor
        },
        success: function(data) {
            $("#detalle_lista").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });

}

function registrarPermisos() {
    var chk_parametros_prohibiciones = "";
    $("input[name='chk_opcioneshijos']:checked").each(function(index, value) {
        chk_parametros_prohibiciones += this.id + "-";
        ;
    });
    chk_parametros_prohibiciones = chk_parametros_prohibiciones.substring(0, chk_parametros_prohibiciones.length - 1);
    if (chk_parametros_prohibiciones == '') {
        chk_parametros_prohibiciones = '0';
    }

    get_page('permisos/registrarOpciones/', 'detalle_lista', {
        chk_parametros_prohibiciones: chk_parametros_prohibiciones
    })

}