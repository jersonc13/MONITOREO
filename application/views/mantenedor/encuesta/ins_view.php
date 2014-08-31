<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Nuevo registro
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmEncuesta" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Empresa:</label>
                    <div class="col-md-6">
                        <select id="cboEmpresa" name="cboEmpresa" class="form-control">
                            <option value="">Seleccione</option>
                            <?php 
                            foreach ($listarEmpresas as $key => $listar) { ?>
                            <option value="<?php echo $listar['nidperroles']?>"><?php echo $listar['capellidos'].' '.$listar['cnombres']?></option>
                            <?php }  ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Encuesta:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtEncuesta" name="txtEncuesta" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>