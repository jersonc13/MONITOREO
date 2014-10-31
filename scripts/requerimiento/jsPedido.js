
function enviarrequerimiento() {
    $.ajax({
        type: "POST",
        url: "requerimiento/registrar",
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