$(function() {
    // alert("fsdf");
    $("#txtnombre").bind({
        blur:function(evt){
            evt.preventDefault();
            var nick = $("#txtnombre").val().charAt(0);
            nick = nick+$("#txtapepaterno").val();
            nick = nick+$("#txtapematerno").val().charAt(0);   
            $("#txtuserName").val(nick);
        }  
    })       
    $("#frmPersonaIns").validate({
        errorPlacement: function (error, element)
        {
            element.before(error);
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "persona/registrar",
                data: $(form).serialize(),
                success: function(data) {
                    if (data == '1') {
                        alert("Datos ingresados correctamente");
                    } else if(data=='3'){
                        alert("Ocurrio un Error al crear el Usuario");
                    }else{
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
            txtapepaterno: {
                minlength: 5,
                required: true
            },
            txtapematerno: {
                minlength: 5,
                required: true
            },
            txtnombre: {
                minlength: 5,
                required: true
            },
            //profile
            txtuserName: {
                required: true
            },
            txtpassword: {
                required: true
            },
            txtconfirm: {
                required: true,
                equalTo: "#txtpassword"
            }
        }
        // highlight: function(element) { // hightlight error inputs
        //     $(element)
        //             .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
        // },
        // unhighlight: function(element) { // revert the change done by hightlight
        //     $(element)
        //             .closest('.form-group').removeClass('has-error'); // set error class to the control group
        // }
    });

});
function generaNick(){
    var nick = $("#txtnombre").val().charAt(0);
    nick = nick+$("#txtapepaterno").val();
    nick = nick+$("#txtapematerno").val().charAt(0);   
    $("#txtuserName").val(nick);
}
function listarPersonas() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "personanatural/listarPersonas",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}