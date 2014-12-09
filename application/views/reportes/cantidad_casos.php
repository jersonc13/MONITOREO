<div class="botonera">
	<h2>Tipos de Reporte</h2>
	<div class="row">
		<div class="col-lg-4">
			<div class="widget style1 navy-bg">
				<div class="row vertical-align">
					<div class="col-xs-3">
						<i class="fa fa-phone fa-3x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<h2 class="font-bold" id="btnrequerimientos" style="cursor:pointer">Requerimientos</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="widget style1 navy-bg">
				<div class="row vertical-align">
					<div class="col-xs-3">
						<i class="fa fa-rss fa-3x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<h2 class="font-bold" id="btnIncidencias" style="cursor:pointer">Incidencias</h2>
					</div>
				</div>
			</div>
		</div>
<!-- 		<div class="col-lg-2">
			<div class="widget style1 lazur-bg">
				<div class="row vertical-align">
					<div class="col-xs-3">
						<i class="fa fa-phone fa-3x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<h2 class="font-bold">120</h2>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</div>
<div id="carga_reportes" class="mail-box">
	<h2>Reporte de Requerimientos</h2>
	<div class="mail-body">
		<div class="ibox-content">
			<form role="form" class="form-inline">		
				<div class="input-group m-b">
					<label class="sr-only" for="txtfechaini" >Estado</label>				
					<select name="cboEstado" id="cboEstado" class="form-control m-b">
						<option value="1">Asignadas</option>
						<option value="2">En Atención</option>
						<option value="3">Atendidas</option>
					</select>
				</div>		
				<div class="input-group m-b">
					<label class="sr-only" for="txtfechaini" >Fecha Inicio</label>
					<span class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</span>					
					<input type="text" placeholder="Fecha Inicio" id="txtfechaini" name="txtfechaini"  class="form-control">
				</div>
				<div class="input-group m-b">
					<label class="sr-only" for="txtfechafin" >Fecha Fin</label>
					<span class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</span>	
					<input type="text" placeholder="Fecha Fin" id="txtfechafin" name="txtfechafin"  class="form-control">
				</div>
				<div class="input-group m-b">
					<button class="btn btn-white" type="button" onclick="verReporte()" id="btnVerReporte">Ver Reporte</button>
				</div>				
			</form>
		</div>

	</div>
	<div class="col-lg-12" id="pnlIframe"></div>
	<div class="clearfix"></div>
</div>
<script src="<?php echo URL_SCRIPTS ?>/reportes/jsAtendidos.js" type="text/javascript"></script>



<!-- Popup -->
<link rel="stylesheet" href="<?php echo URL_GLOBALJS ?>/colorbox/colorbox.css">
<script src="<?php echo URL_GLOBALJS ?>/colorbox/jquery.colorbox.js"></script>