

<div class="mail-box-header">
    <div class="pull-right tooltip-demo">
        <!--<a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Borrador</a>-->
        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email" onclick="bandejamensaje()"><i class="fa fa-times"></i> Cancelar</a>
    </div>
    <h2>
        REENVIAR
    </h2>
</div>
<div class="mail-box">


    <div class="mail-body">

        <form class="form-horizontal" method="get">
            <div class="form-group"><label class="col-sm-2 control-label">Para:</label>

                <div class="col-sm-10"><input type="text" id="txtemailreceptor" name="txtemailreceptor" class="form-control"></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Asunto:</label>

                <div class="col-sm-10"><input type="text" id="txtasunto" name="txtasunto" class="form-control" value=""></div>
            </div>
        </form>

    </div>

    <div class="mail-text h-200">

        <div class="summernote">
            <?php
            echo $txtcontenido;
            ?>

        </div>
        <div class="clearfix"></div>
    </div>
    <div class="mail-body text-right tooltip-demo">
        <a onclick="enviarmensaje()" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Enviar</a>
        <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email" onclick="bandejamensaje()"><i class="fa fa-times"></i> Cancelar</a>
        <!--<a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Borrador</a>-->
    </div>
    <div class="clearfix"></div>



</div>
<!-- SUMMERNOTE -->

<script>
    $(document).ready(function() {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });


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