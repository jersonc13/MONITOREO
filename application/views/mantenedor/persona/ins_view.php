<div class="ibox-content">
    <form id="frmPersonaIns" action="#" class="form-horizontal">
        <fieldset>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido Paterno *</label>
                        <div class="col-sm-10">
                            <input id="txtapepaterno" name="txtapepaterno" type="text" class="form-control required">
                        </div>
                    </div>                   
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido Materno *</label>
                        <div class="col-sm-10">
                            <input id="txtapematerno" name="txtapematerno" type="text" class="form-control required">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre *</label>
                        <div class="col-sm-10">
                            <input id="txtnombre" name="txtnombre" type="text" class="form-control required">
                        </div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
            </div>
        </fieldset>
        <fieldset>
            <h2>Informaci&oacute;n de Cuenta</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Username *</label>
                        <div class="col-sm-6">
                            <input id="txtuserName" name="txtuserName" type="text" class="form-control required">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password *</label>
                        <div class="col-sm-6">
                            <input id="txtpassword" name="txtpassword" type="text" class="form-control required">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Confirmar Password *</label>
                        <div class="col-sm-6">
                            <input id="txtconfirm" name="txtconfirm" type="text" class="form-control required">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tipo Usuario</label>

                        <div class="col-sm-6">
                            <select name="cboUserTipo" class="form-control m-b">
                                <option value="1">Administrador</option>
                                <option value="2">Docente</option>
                            </select>
                        </div>
                    </div>
                </div>                    
            </div>
            <div class="hr-line-dashed"></div>

        </fieldset>
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-white" type="submit">Cancelar</button>
                <button class="btn btn-primary" type="submit">Registrar</button>
            </div>
        </div>
    </form>
</div>

<script src="<?php echo URL_GLOBALJS ?>/jquery-1.10.2.js"></script>
<script src="<?php echo URL_SCRIPTS ?>/mantenedor/persona/jsPersonaIns.js" type="text/javascript"></script>