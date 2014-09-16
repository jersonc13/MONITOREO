

<div class="mail-box-header">
    <div class="pull-right tooltip-demo">
        <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Borrador</a>
        <a href="mailbox.html" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Cancelar</a>
    </div>
    <h2>
        Nuevo Correo
    </h2>
</div>
<div class="mail-box">


    <div class="mail-body">

        <form class="form-horizontal" method="get">
            <div class="form-group"><label class="col-sm-2 control-label">Para:</label>

                <div class="col-sm-10"><input type="text" class="form-control" disabled="true" value="admin123@corporat.com"></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Asunto:</label>

                <div class="col-sm-10"><input type="text" class="form-control" value=""></div>
            </div>
        </form>

    </div>

    <div class="mail-text h-200">

        <div class="summernote">
            <h3>Señor Administrador! </h3>
            dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
            <br/>
            <br/>

        </div>
        <div class="clearfix"></div>
    </div>
    <div class="mail-body text-right tooltip-demo">
        <a href="mailbox.html" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Enviar</a>
        <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Cancelar</a>
        <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Borrador</a>
    </div>
    <div class="clearfix"></div>



</div>
<!-- SUMMERNOTE -->

<script>
    $(document).ready(function() {
//        $('.i-checks').iCheck({
//            checkboxClass: 'icheckbox_square-green',
//            radioClass: 'iradio_square-green',
//        });


        $('.summernote').summernote();

    });
    var edit = function() {
        $('.click2edit').summernote({focus: true});
    };
    var save = function() {
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();
    };

</script>