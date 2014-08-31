<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Nuevo registro
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmUsuarios" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Ingrese DNI/RUC:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtdniruc" name="txtdniruc" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Usuario:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtusuario" name="txtusuario" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Contraseña:</label>
                    <div class="col-md-6">
                        <input type="password" id="txtcontrasena" name="txtcontrasena" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Tipo de Usuario:</label>
                    <div class="col-md-6">
                        <select class="form-control" name="cbo_tipousuarios">
                            <option value="" disabled="true" selected="true">Seleccione</option>
                            <?php foreach ($listarRoles as $key => $listar) { ?>
                                <option value="<?php echo $listar['nidroles'] ?>"><?php echo $listar['croles'] ?></option>
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