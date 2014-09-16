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
