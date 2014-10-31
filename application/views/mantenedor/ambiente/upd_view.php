<form id="frmMarcaUpd" action="#" class="form-horizontal">
    <input type="hidden" id="txtidmarca" name="txtidmarca" class="form-control" value="<?php echo $editarAmbiente[0]['nAmbId'] ?>">
    <div class="form-group">
        <label class="col-sm-2 control-label">Tipo de Ambiente</label>
        <div class="col-sm-10">
            <select id="txttipoambiente" name="txttipoambiente" class="form-control">
                <option value="Interno">Interno</option>
                <option value="Externo">Externo</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Ambiente</label>

        <div class="col-sm-10">
            <input type="text" id="txtnombreambiente" name="txtnombreambiente" class="form-control" value="<?php echo $editarAmbiente[0]['cAmbiente'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Descripcion</label>

        <div class="col-sm-10">
            <input type="text" id="txtnombredescripcion" name="txtnombredescripcion" class="form-control" value="<?php echo $editarAmbiente[0]['cAmbDescripcion'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Estado</label>

        <div class="col-sm-10">
            <select class="form-control m-b" name="cboestado" id="cboestado">
                <?php if ($editarAmbiente[0]['cAmbEstado'] == 1) { ?>
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
            <button class="btn btn-white" onclick="listarMarca()">Cancelar</button>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </div>
</form>
