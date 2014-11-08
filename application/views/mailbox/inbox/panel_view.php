<script src="<?php echo URL_SCRIPTS ?>/mailbox/inbox/jsInboxCarpetas.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-content mailbox-content">
                    <div class="file-manager">
                        <a class="btn btn-block btn-primary compose-mail" onclick="nuevomensaje()">Nuevo Correo</a>
                        <div class="space-25"></div>
                        <h5>Folders</h5>
                        <ul class="folder-list m-b-md" style="padding: 0">
                            <li><a href="<?php echo URL_MAIN?>/mailbox/inbox"> <i class="fa fa-inbox "></i> Bandeja <span class="label label-warning pull-right"><?php echo $bandeja_count[0]['bandeja_count'] ?></span> </a></li>
                            <li><a href="#" onclick="enviadosmensaje()"> <i class="fa fa-envelope-o"></i> Enviados</a></li>
<!--                            <li><a href="mailbox.html"> <i class="fa fa-certificate"></i> Importantes</a></li>
                            <li><a href="mailbox.html"> <i class="fa fa-file-text-o"></i> Borradores <span class="label label-danger pull-right">2</span></a></li>-->
                            <li><a href="#" onclick="eliminadosmensaje()"> <i class="fa fa-trash-o"></i> Eliminados</a></li>
                        </ul>
                        <h5>Categories</h5>
                        <ul class="category-list" style="padding: 0">
                            <li><a href="#"> <i class="fa fa-circle text-navy"></i> Work </a></li>
                            <li><a href="#"> <i class="fa fa-circle text-danger"></i> Documents</a></li>
                            <li><a href="#"> <i class="fa fa-circle text-primary"></i> Social</a></li>
                            <li><a href="#"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
                            <li><a href="#"> <i class="fa fa-circle text-warning"></i> Clients</a></li>
                        </ul>

                        <h5 class="tag-title">Labels</h5>
                        <ul class="tag-list" style="padding: 0">
                            <li><a href="#"><i class="fa fa-tag"></i> Family</a></li>
                            <li><a href="#"><i class="fa fa-tag"></i> Work</a></li>
                            <li><a href="#"><i class="fa fa-tag"></i> Home</a></li>
                            <li><a href="#"><i class="fa fa-tag"></i> Children</a></li>
                            <li><a href="#"><i class="fa fa-tag"></i> Holidays</a></li>
                            <li><a href="#"><i class="fa fa-tag"></i> Music</a></li>
                            <li><a href="#"><i class="fa fa-tag"></i> Photography</a></li>
                            <li><a href="#"><i class="fa fa-tag"></i> Film</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 animated fadeInRight">
            <!--<div class="col-lg-9">-->
            <div id="divinboxx" width="100%">
                <?php $this->load->view('mailbox/inbox/bandeja_qry'); ?>    
            </div>
            <!--</div>-->
        </div>
    </div>
    <!--</div>-->
</div>

<script>
    $(document).ready(function() {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>