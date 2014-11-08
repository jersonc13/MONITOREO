function nuevomensaje() {
    $.ajax({
        type: "POST",
        url: "inbox/nuevoinbox",
        cache: false,
        success: function(data) {
            $("#divinboxx").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}
function reenviarmensaje() {
    $.ajax({
        type: "POST",
        url: "inbox/reenviarinbox",
        cache: false,
        data: {
            txtcorreo: $('#txtcorreo').val(),
            txtcontenido: document.getElementById('txtcontenido').innerHTML
        },
        success: function(data) {
            $("#divinboxx").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}
function respondermensaje() {
    $.ajax({
        type: "POST",
        url: "inbox/responderinbox",
        cache: false,
        data: {
            txtcorreo: $('#txtcorreo').val(),
            txtcontenido: document.getElementById('txtcontenido').innerHTML
        },
        success: function(data) {
            $("#divinboxx").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}
function bandejamensaje() {
    $.ajax({
        type: "POST",
        url: "inbox/bandejainbox",
        cache: false,
        success: function(data) {
            $("#divinboxx").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function eliminadosmensaje() {
    $.ajax({
        type: "POST",
        url: "inbox/eliminadosinbox",
        cache: false,
        success: function(data) {
            $("#divinboxx").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function enviadosmensaje() {
    $.ajax({
        type: "POST",
        url: "inbox/enviadosinbox",
        cache: false,
        success: function(data) {
            $("#divinboxx").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function enviarmensaje() {
    $.ajax({
        type: "POST",
        url: "inbox/enviarinbox",
        cache: false,
        data: {
            txtemailreceptor: $('#txtemailreceptor').val(),
            txtasunto: $('#txtasunto').val(),
            txtcontenido: document.getElementById('txtcontenido').innerHTML
        },
        success: function(data) {
            alert("Envio de mensaje Exitoso");
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function bandejadetallemensaje(nidvalor) {
    $.ajax({
        type: "POST",
        url: "inbox/detallemensaje",
        cache: false,
        data: {
            nidvalor: nidvalor
        },
        success: function(data) {
            $("#divinboxx").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}
function imprimir() {
    if (window.print)
        window.print()
    else
        alert("Disculpe, su navegador no soporta esta opción.");
}

function eliminarcorreo() {
    $.ajax({
        type: "POST",
        url: "inbox/eliminarinbox",
        cache: false,
        data: {
            txtid: $('#txtid').val()
        },
        success: function(data) {
            alert("Mensaje Eliminado.");
            $("#divinboxx").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}