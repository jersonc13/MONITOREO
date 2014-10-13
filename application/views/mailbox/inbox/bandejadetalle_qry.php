<div class="mail-box-header">
    <div class="pull-right tooltip-demo">
        <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Reply"><i class="fa fa-reply"></i> Reenviar</a>
        <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Print email"><i class="fa fa-print"></i> </a>
        <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </a>
    </div>
    <h2>
        Contenido del Mensaje
    </h2>
    <div class="mail-tools tooltip-demo m-t-md">
        <h3>
            <span class="font-noraml">Asunto: </span><?php echo $result[0]['cReqAsunto'] ?>
        </h3>
        <h5>
            <span class="pull-right font-noraml"><?php echo $result[0]['dReqFechaRegistro'] ?></span>
            <span class="font-noraml">From: </span><?php echo $result[0]['correoemisor'] ?>
        </h5>
    </div>
</div>
<div class="mail-box">


    <div class="mail-body">
        <?php echo $result[0]['cReqDescripcion'] ?>
    </div>

    <div class="mail-body text-right tooltip-demo">
        <a class="btn btn-sm btn-white" href="mail_compose.html"><i class="fa fa-reply"></i> Reenviar</a>
        <a class="btn btn-sm btn-white" href="mail_compose.html"><i class="fa fa-arrow-right"></i> Responder</a>
        <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-sm btn-white"><i class="fa fa-print"></i> Imprimir</button>
        <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-trash-o"></i> Eliminar</button>
    </div>
    <div class="clearfix"></div>


</div>