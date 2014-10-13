<div class="mail-box-header">

    <!--<form method="get" action="index.html" class="pull-right">-->
    <!--<div class="input-group">-->
        <!--<input type="text" class="form-control input-sm" name="search" placeholder="Search email">-->
    <!--<div class="input-group-btn">-->
    <!--<button type="submit" class="btn btn-sm btn-primary">-->
    <!--Search-->
    <!--</button>-->
    <!--</div>-->
    <!--</div>-->
    <!--</form>-->
    <!--    <h2>
            Inbox (16)
        </h2>-->
    <div class="mail-tools tooltip-demo m-t-md">
        <div class="btn-group pull-right">
            <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
            <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>

        </div>
        <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>
        <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
        <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as important"><i class="fa fa-exclamation"></i> </button>
        <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>

    </div>
</div>
<div class="mail-box">
    <table class="table table-hover table-mail">
        <tbody>
            <?php if($resultado){ ?>
            <?php foreach ($resultado as $lista) { ?>
                <?php if ($lista['cReqEstado'] == 'P') { ?>
                    <tr class="unread" hre>
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="#" onclick="bandejadetallemensaje(<?php echo $lista['nReqId'] ?>)"><?php echo $lista['nombre'] ?></a></td>
                        <td class="mail-subject"><a href="#" onclick="bandejadetallemensaje(<?php echo $lista['nReqId'] ?>)"><?php echo $lista['cReqAsunto'] ?></a></td>
                        <td class=""><i class="fa fa-paperclip"></i></td>
                        <td class="text-right mail-date"><?php echo $lista['dReqFechaRegistro'] ?></td>
                    </tr>
                <?php } elseif ($lista['cReqEstado'] == 'L') { ?>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="#" onclick="bandejadetallemensaje(<?php echo $lista['nReqId'] ?>)"><?php echo $lista['nombre'] ?></a></td>
                        <td class="mail-subject"><a href="#" onclick="bandejadetallemensaje(<?php echo $lista['nReqId'] ?>)"><?php echo $lista['cReqAsunto'] ?></a></td>
                        <td class=""><i class="fa fa-paperclip"></i></td>
                        <td class="text-right mail-date"><?php echo $lista['dReqFechaRegistro'] ?></td>
                    </tr>
                <?php } ?>
            <?php } }?>
                    
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });


</script>