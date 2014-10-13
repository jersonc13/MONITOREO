<script src="<?php echo URL_SCRIPTS ?>/mantenedor/marca/jsMarca.js" type="text/javascript"></script>
<div class="col-lg-10">
    <div class="panel blank-panel">
        <div class="panel-heading">
            <div class="panel-options">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Buscar</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-2">Registrar</a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div id="mostrar_qry" name="mostrar_qry"></div>
                </div>
                <div id="tab-2" class="tab-pane">
                    <?php $this->load->view('mantenedor/marca/ins_view') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END DASHBOARD STATS -->
<div class="clearfix">