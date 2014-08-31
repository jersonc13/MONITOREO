<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Nuevo registro
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmAreas" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Nombre Área:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtAreas" name="txtAreas" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Alias:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtAlias" name="txtAlias" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Dependencia:</label>
                    <div class="col-md-6">
                        <select id="cbo_dependencia" name="cbo_dependencia" class="form-control">
                            <option value="0" selected="true">Sin Dependencia</option>
                            <?php foreach ($listarAreas as $key => $listar) { ?>
                                <option value="<?php echo $listar['nidareas'] ?>"><?php echo $listar['careas'] ?></option>
                            <?php } ?>
                        </select>
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