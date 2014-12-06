$(function() {
    listarUsuarios();

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

function cambiarContrasena(nidvalor) {
    if (confirm('¿Desea Editar el registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "usuarios/editarContrasena",
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

function editarUsuario(nidvalor) {
    if (confirm('¿Desea Editar el registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "usuarios/editarUsuarios",
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
        url: "usuarios/guardarEditar",
        cache: false,
        data: {
            txtidusuarios: $('#txtidusuarios').val(),
            txtcusunick: $('#txtcusunick').val(),
            cboestado: $('#cboestado').val()
        },
        success: function(data) {
            if (data == '1') {
                alert("Datos ingresados correctamente");
                listarUsuarios();
            } else {
                alert("Error General!! al ingresar los datos");
            }
        },
        error: function(data) {
            alert("Error al ingresar los datos");
        }
    });
}

function editarGuardarContra() {
//    msgLoading("#mostrar_qry");
    if ($('#txtcontrasena').val() != '') {
        $.ajax({
            type: "POST",
            url: "usuarios/guardarEditarContra",
            cache: false,
            data: {
                txtidusuarios: $('#txtidusuarios').val(),
                txtcontrasena: $('#txtcontrasena').val()
            },
            success: function(data) {
                if (data == '1') {
                    alert("Actualización correcta");
                    listarUsuarios();
                } else {
                    alert("Error General!! al ingresar los datos");
                }
            },
            error: function(data) {
                alert("Error al ingresar los datos");
            }
        });
    }else {
        alert("Debe ingresar una nueva contraseña");
    }
}