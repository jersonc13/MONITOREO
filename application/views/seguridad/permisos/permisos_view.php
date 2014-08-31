<script src="<?php echo URL_SCRIPTS ?>/seguridad/permisos/jsAsignarPermisos.js" type="text/javascript"></script>
<div class="row  border-bottom white-bg dashboard-header">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="#" id="frmPersonaNatural" class="form-horizontal form-row-seperated">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Ingrese Nombre:</label>
                                <div class="col-md-6">
                                    <input type="text" id="txtPersona" name="txtPersona" class="form-control" />
                                </div>
                                <div>
                                    <input type="button" id="btnbuscarPersona" name="btnbuscarPersona" onclick="buscarPersona()" value="Buscar" class="btn blue"/>
                                </div>
                            </div>
                            <div id="detalle_lista"></div>
                        </div>  
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
    <!-- END DASHBOARD STATS -->
    <div class="clearfix">
    </div>
</div>
<!--<script src="<?php // echo URL_ADMINPJS    ?>/table-advanced.js"></script>
<script>
    jQuery(document).ready(function() {
        TableAdvanced.init();
    });
</script>-->
