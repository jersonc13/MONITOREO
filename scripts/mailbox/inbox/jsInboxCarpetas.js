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