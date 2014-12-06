<form id="frmMarcaUpd" action="#" class="form-horizontal">
    <input type="hidden" id="txtidusuarios" name="txtidusuarios" class="form-control" value="<?php echo $idusuario ?>">
    <div class="form-group">
        <label class="col-sm-2 control-label">Ingrese Nueva Contraseña</label>

        <div class="col-sm-10">
            <input type="text" id="txtcontrasena" name="txtcontrasena" class="form-control" value="">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <button class="btn btn-white" onclick="listarUsuarios()">Cancelar</button>
            <input class="btn btn-primary" type="button" value="Guardar" onclick="editarGuardarContra()">
        </div>
    </div>
</form>
