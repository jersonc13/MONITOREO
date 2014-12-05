<script src="<?php echo URL_GLOBALJS ?>/jquery-1.10.2.js"></script>
<script src="<?php echo URL_SCRIPTS ?>/procesos/jsSolucionIns.js" type="text/javascript"></script>
<div class="ibox-content">
    <form id="frmSolucionIns" action="#" class="form-horizontal">
        <fieldset>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Solución(Diagnostico)</label>
                        <div class="col-sm-10">
                            <textarea id="txtsolucion" name="txtsolucion"></textarea>
                            <input type="hidden" value="<?php echo $codx ?>" id="txtcodx">
                        </div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
            </div>
        </fieldset>
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-white" onclick="regresa_pantalla()">Cancelar</button>
                <button id="btnregistro" class="btn btn-primary" type="submit">Solucionar</button>
            </div>
        </div>
    </form>
</div>

