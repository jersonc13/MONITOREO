<form id="frmMarcaUpd" action="#" class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-2 control-label">Nombre</label>

        <div class="col-sm-10">
            <input type="text" id="txtnombremarca" name="txtnombremarca" class="form-control">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Estado</label>

        <div class="col-sm-10">
            <select class="form-control m-b" name="cboestado" id="cboestado">
                <option id="1">Activo</option>
                <option id="0">Inactivo</option>
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
