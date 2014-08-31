<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Agregar Detalle
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmPersonaNatural" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Ingrese DNI:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtDetalleDNI" name="txtDetalleDNI" class="form-control" />
                    </div>
                    <div>
                        <input type="button" id="btnbuscarDNI" name="btnbuscarDNI" onclick="buscarDNI()" value="Buscar" class="btn blue"/>
                    </div>
                </div>
                <div id="detalle_lista"></div>
            </div>  
        </form>
        <!-- END FORM-->
    </div>
</div>
