<!--<div class="form-group">
    <label class="control-label col-md-3">Correo Electrónico:</label>
    <div class="col-md-6">
        <input type="text" id="txtDetalleCorreo" name="txtDetalleCorreo" class="form-control"/>
    </div>
</div>-->

<div class="form-group">
    <label class="control-label col-md-3">Correo Electrónico:</label>
    <div class="col-md-6">
        <input type="text" id="txtDetalleCorreo" name="txtDetalleCorreo" class="form-control"/>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3">Departamento:</label>
    <div class="col-md-6">
        <select id="cbo_departamento" name="cbo_departamento" class="form-control" onchange='cargaProvincia()'>
            <option value="" disabled="true" selected="true">Seleccione</option>
            <?php foreach ($listarDepartamento as $key => $listar) { ?>
                <option value="<?php echo $listar['idDepa'] ?>"><?php echo $listar['departamento'] ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3">Provincia:</label>
    <div class="col-md-6" id="div_provincia">
        <select class="form-control">
            <option>Debe seleccionar departamento</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3">Distrito:</label>
    <div class="col-md-6" id="div_distrito">
        <select class="form-control">
            <option>Debe seleccionar provincia</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Rol:</label>
    <div class="col-md-6">
        <select id="cbo_roles" name="cbo_roles" class="form-control">
            <option value="" disabled="true" selected="true">Seleccione</option>
            <?php foreach ($listarRoles as $key => $listar) { ?>
                <option value="<?php echo $listar['nidroles'] ?>"><?php echo $listar['croles'] ?></option>
            <?php } ?>
        </select>
    </div>
</div>