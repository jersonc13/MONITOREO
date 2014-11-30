<form id="frmMarcaUpd" action="#" class="form-horizontal">
    <input type="hidden" id="txtidper" name="txtidper" class="form-control" value="<?php echo $editarPersona[0]['nPerId'] ?>">

    <div class="form-group">
        <label class="col-sm-2 control-label">Apellido Paterno</label>

        <div class="col-sm-10">
            <input type="text" id="txtapellidopater" name="txtapellidopater" class="form-control" value="<?php echo $editarPersona[0]['cPerApellidoPaterno'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Apellido Materno</label>

        <div class="col-sm-10">
            <input type="text" id="txtapellidomater" name="txtapellidomater" class="form-control" value="<?php echo $editarPersona[0]['cPerApellidoMaterno'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nombres</label>

        <div class="col-sm-10">
            <input type="text" id="txtnombre" name="txtnombre" class="form-control" value="<?php echo $editarPersona[0]['cPerNombres'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">email</label>

        <div class="col-sm-10">
            <input type="text" id="txtemail" name="txtemail" class="form-control" value="<?php echo $editarPersona[0]['cPerEmail'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Estado</label>

        <div class="col-sm-10">
            <select class="form-control m-b" name="cboestado" id="cboestado">
                <?php if ($editarPersona[0]['bPerEstado'] == 1) { ?>
                    <option value="1" selected="true">Activo</option>
                    <option value="0">Inactivo</option>
                <?php } else { ?>
                    <option value="0" selected="true">Inactivo</option>
                    <option value="1">Activo</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <button class="btn btn-white" onclick="listarPersona()">Cancelar</button>
            <input class="btn btn-primary" type="button" value="Guardar" onclick="editarGuardar()">
        </div>
    </div>
</form>




