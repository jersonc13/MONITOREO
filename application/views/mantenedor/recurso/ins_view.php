<form id="frmRecursoIns" action="#" class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-2 control-label">Tipo de Recurso</label>
        <div class="col-sm-10">
            <select id="cbotiporecurso" name="cbotiporecurso" class="form-control">
                <?php foreach ($listartipoRecurso as $value) { ?>
                    <option value="<?php echo $value['nTreId'] ?>"><?php echo $value['cTreDescripcion'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Código Patrimonial</label>

        <div class="col-sm-10">
            <input type="text" id="txtcodigopatrimonial" name="txtcodigopatrimonial" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Serie</label>

        <div class="col-sm-10">
            <input type="text" id="txtserie" name="txtserie" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Marca</label>
        <div class="col-sm-10">
            <select id="cbomarca" name="cbomarca" class="form-control">
                <?php foreach ($listarMarca as $value) { ?>
                    <option value="<?php echo $value['nMarId'] ?>"><?php echo $value['cMarDescripcion'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Modelo</label>
        <div class="col-sm-10">
            <input type="text" id="txtmodelo" name="txtmodelo" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Ambiente</label>
        <div class="col-sm-10">
            <select id="cboambiente" name="cboambiente" class="form-control">
                <?php foreach ($listarAmbiente as $ambiente) { ?>
                    <option value="<?php echo $ambiente['nAmbId'] ?>"><?php echo $ambiente['cAmbDescripcion'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group" id="data_1">
        <label class="col-sm-2 control-label">Fecha de Compra</label>
        <div class="input-group date col-sm-10" style="padding-left: -1px !important;padding-right: -1px !important">
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            <input type="text" class="form-control" id="txtfechacompra" name="txtfechacompra">
        </div>
    </div>
    <div class="form-group" id="data_1">
        <label class="col-sm-2 control-label">Fecha fin de Garantía</label>
        <div class="input-group date col-sm-10" style="padding-left: -1px !important;padding-right: -1px !important">
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            <input type="text" class="form-control" id="txtfechagarantia" name="txtfechagarantia">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Características</label>
        <div class="col-sm-10">
            <textarea type="text" id="txtcaracteristicas" name="txtcaracteristicas" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Observaciones</label>
        <div class="col-sm-10">
            <textarea type="text" id="txtobservaciones" name="txtobservaciones" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group" id="data_1">
        <label class="col-sm-2 control-label">Tiempo de vida</label>
        <div class="input-group date col-sm-10" style="padding-left: -1px !important;padding-right: -1px !important">
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            <input type="text" class="form-control" id="txtfechavida" name="txtfechavida">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Ruta</label>
        <div class="col-sm-10">
            <input type="text" id="txtruta" name="txtruta" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Host</label>
        <div class="col-sm-10">
            <input type="text" id="txthost" name="txthost" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Ip</label>
        <div class="col-sm-10">
            <input type="text" id="txtip" name="txtip" class="form-control">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {

        $('#data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    });


</script>