$(document).ajaxComplete(function( event, xhr, settings ){
	console.log("termino de cargar");
	cantidad_filas_sonido();
});

window.onload = function() {
    setInterval(actualizargrilla, 6000);
}

function actualizargrilla() {
    get_page('vistaGet/BANDEJA', 'mostrar_qry');
}

function cantidad_filas_sonido() {
    var anterior =0;
    var actual = 0;
    anterior = $("#n_filas_anterior_creadas").val();
    actual = $('#incidencias_table >tbody >tr').length;

    console.log("Anterior : "+anterior);
    console.log("Actual : "+actual);

    var primeracarga = $("#hid_primera_entrada").val()
    if (primeracarga == "FL")
    {
        anterior = 0;
        actual = 0;
        $("#hid_primera_entrada").val("SL");
    }

    if (actual > anterior)
    {
        $("#cnt_fila_musica").html('<audio  id="auto_play_creadas" name="auto_play_creadas" autoplay src="../sound/whistle_down1.wav" controls ><p><b>Título</b><source src="../sound/whistle_down1.wav" type="audio/wav"/><source src="../sound/whistle_down1.wav" type="audio/mpeg"/><a href="../sound/whistle_down1.wav">wav</a></p></audio>');
        $("#auto_play_creadas").hide();
        $("#n_filas_anterior_creadas").val( $('#incidencias_table >tbody >tr').length );
    }
    else
    {
        $("#n_filas_anterior_creadas").val( $('#incidencias_table >tbody >tr').length );
    }
}


function asignarRequerimiento() {
    console.log("Vamos a pasarle la posta a otra persona");
}