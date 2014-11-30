<div class="ibox-content" >
    <h2 id="cabecera_resultados">
    </h2>
    <small id="cabecera_tiempo_busqueda" ></small>
    <div class="search-form">
        <!-- <form action="#" method="post"> -->
            <label for="txttrabajador">Trabajador</label>
            <div class="input-group">
                <input type="text" placeholder="Ejem: Juan Perez" name="txttrabajador" class="form-control input-lg">
                <div class="input-group-btn">
                    <button class="btn btn-lg btn-primary" id="btnBuscarTrabajador" type="button">
                        Buscar
                    </button>
                </div>
            </div>
            <input type="hidden" value="0" id="txtcodigoPersona">
            <input type="hidden" id="txtcodigoRequerimiento" value="<?php echo $codigo; ?>">
        <!-- </form> -->
    </div>
    <div id="panel_resultados">        

    </div>
    <div id="panelAsignacion">
        
    </div>
</div>

<script src="<?php echo URL_GLOBALJS ?>/jquery-1.10.2.js"></script>
<script src="<?php echo URL_SCRIPTS ?>/requerimiento/jsAsignar.js" type="text/javascript"></script>