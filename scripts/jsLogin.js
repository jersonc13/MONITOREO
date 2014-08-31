$(function() {
    $("#frm_login").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "login/enviardatos",
                data: $(form).serialize(),
                success: function(data) {
                    if (data == 1) {
                        $('#mensaje').html('<div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button><strong>Listo!</strong> Bienvenido(a) al sistema.</div>');
                        administracion();
                    } else {
                        $('#mensaje').html('<div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button><strong>Error!</strong> Valide sus credenciales.</div>');
                    }
                },
                error: function(data) {
                    $('#mensaje').html('<div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button><strong>Error!</strong> Valide sus credenciales.</div>');
                }
            });
        },
        rules: {
            txt_usuario: {
                required: true
            },
            txt_contrasena: {
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

function administracion() {
    location.href = "dashboard/index";
}