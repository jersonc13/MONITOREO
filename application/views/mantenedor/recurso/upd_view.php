<form id="frmMarcaUpd" action="#" class="form-horizontal">
    <input type="hidden" id="txtidrecurso" name="txtidrecurso" class="form-control" value="<?php echo $editarRecurso[0]['nRecId'] ?>">
    <div class="form-group">
        <label class="col-sm-2 control-label">Tipo de Recurso</label>

        <div class="col-sm-10">
            <select id="cbotiporecurso" name="cbotiporecurso" class="form-control">
                <?php foreach ($listartipoRecurso as $value) { ?>
                    <?php if ($value['nTreId'] == $editarRecurso[0]['nTreId']) { ?>
                        <option value="<?php echo $value['nTreId'] ?>"  selected="true"><?php echo $value['cTreDescripcion'] ?></option>
                    <?php }else{ ?>
                    <option value="<?php echo $value['nTreId'] ?>"><?php echo $value['cTreDescripcion'] ?></option>
                <?php }} ?>
            </select>
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Codigo Patrimonial</label>

        <div class="col-sm-10">
            <input type="text" id="txtcodigopat" name="txtcodigopat" class="form-control" value="<?php echo $editarRecurso[0]['cRecCodigoPatrimonial'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Serie</label>

        <div class="col-sm-10">
            <input type="text" id="txtserie" name="txtserie" class="form-control" value="<?php echo $editarRecurso[0]['cRecSerie'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Marca</label>
        <div class="col-sm-10">
            <select id="cbomarca" name="cbomarca" class="form-control">
                <?php foreach ($listarMarca as $value) { ?>
                    <?php if ($value['nMarId'] == $editarRecurso[0]['nMarId']) { ?>
                        <option value="<?php echo $value['nMarId'] ?>"  selected="true"><?php echo $value['cMarDescripcion'] ?></option>
                    <?php }else{ ?>
                    <option value="<?php echo $value['nMarId'] ?>"><?php echo $value['cMarDescripcion'] ?></option>
                <?php }} ?>
            </select>
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Modelo</label>

        <div class="col-sm-10">
            <input type="text" id="txtmodelo" name="txtmodelo" class="form-control" value="<?php echo $editarRecurso[0]['cRecSerie'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Ambiente</label>
        <div class="col-sm-10">
            <select id="cboambiente" name="cboambiente" class="form-control">
                <?php foreach ($listarAmbiente as $value) { ?>
                    <?php if ($value['nAmbId'] == $editarRecurso[0]['nAmbId']) { ?>
                        <option value="<?php echo $value['nAmbId'] ?>"  selected="true"><?php echo $value['cAmbDescripcion'] ?></option>
                    <?php }else{ ?>
                    <option value="<?php echo $value['nAmbId'] ?>"><?php echo $value['cAmbDescripcion'] ?></option>
                <?php }} ?>
            </select>
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group" id="data_1">
        <label class="col-sm-2 control-label">Fecha de Compra</label>
        <div class="input-group date col-sm-10" style="padding-left: -1px !important;padding-right: -1px !important">
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            <input type="text" class="form-control" id="txtfechacompra" name="txtfechacompra" value="<?php echo $editarRecurso[0]['dRecFechaCompra'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed" ></div>
    <div class="form-group" id="data_1">
        <label class="col-sm-2 control-label">Fecha fin de Garantía</label>
        <div class="input-group date col-sm-10" style="padding-left: -1px !important;padding-right: -1px !important">
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            <input type="text" class="form-control" id="txtfechagarantia" name="txtfechagarantia" value="<?php echo $editarRecurso[0]['dRecFechaFinGarantia'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Características</label>
        <div class="col-sm-10">
            <textarea type="text" id="txtcaracteristicas" name="txtcaracteristicas" class="form-control"><?php echo $editarRecurso[0]['cRecCaracteristicas'] ?></textarea>
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Observaciones</label>
        <div class="col-sm-10">
            <textarea type="text" id="txtobservaciones" name="txtobservaciones" class="form-control"><?php echo $editarRecurso[0]['cRecObservacion'] ?></textarea>
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group" id="data_1">
        <label class="col-sm-2 control-label">Tiempo de vida</label>
        <div class="input-group date col-sm-10" style="padding-left: -1px !important;padding-right: -1px !important">
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            <input type="text" class="form-control" id="txtfechavida" name="txtfechavida" value="<?php echo $editarRecurso[0]['dRecFechaTiempoVida'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Ruta</label>
        <div class="col-sm-10">
            <input type="text" id="txtruta" name="txtruta" class="form-control" value="<?php echo $editarRecurso[0]['cRecRutaArchivo'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Host</label>
        <div class="col-sm-10">
            <input type="text" id="txthost" name="txthost" class="form-control" value="<?php echo $editarRecurso[0]['cRecHost'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Ip</label>
        <div class="col-sm-10">
            <input type="text" id="txtip" name="txtip" class="form-control" value="<?php echo $editarRecurso[0]['cRecIp'] ?>">
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Estado</label>

        <div class="col-sm-10">
            <select class="form-control m-b" name="cboestado" id="cboestado">
                <?php if ($editarRecurso[0]['cRecEstado'] == 1) { ?>
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
            <button class="btn btn-white" onclick="listarRecurso()">Cancelar</button>
            <input class="btn btn-primary" type="button" value="Guardar" onclick="editarGuardar()">
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
