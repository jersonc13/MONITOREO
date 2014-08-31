<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Editar Áreas
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmPersonaNatural" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Ingrese Área:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtbuscarArea" name="txtbuscarArea" class="form-control" />
                    </div>
                    <div>
                        <input type="button" id="btnbuscarArea" name="btnbuscarArea" onclick="buscarAreas()" value="Buscar" class="btn blue"/>
                    </div>
                </div>
                <div id="detalle_lista"></div>
            </div>  
        </form>
        <!-- END FORM-->
    </div>
</div>
