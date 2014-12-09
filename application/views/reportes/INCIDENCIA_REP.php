<h2>Reporte de Incidencias por Fechas y Recurso</h2>
<div class="mail-body">
	<!-- <div class="ibox-content"> -->
	<form role="form" class="form-inline">		
		<div class="input-group m-b">
			<label class="sr-only" for="txtfechaini" >Estado</label>				
			<select name="cboRecurso" id="cboRecurso" class="form-control m-b">
				<?php
				foreach ($direccionesIP as $fila) {
					?>
					<option value="<?php echo $fila['cRecIp'] ?>"><?php echo $fila['cRecHost'] ?></option>
					<?php 
				}
				?>
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
			<button class="btn btn-white" type="button" onclick="verReporteIncidencia()" id="btnVerReporte">Ver Reporte</button>
		</div>				
	</form>
	<!-- </div> -->
</div>
<script>
	$(function(){
		$('#txtfechaini').datepicker({
			language: 'es'
			,format: 'dd/mm/yyyy'
		    // ,startDate: '1d'
		});
		$('#txtfechafin').datepicker({
			language: 'es'
			,format: 'dd/mm/yyyy'
		    // ,startDate: '1d'
		});
	});
	function verReporteIncidencia(){
		var find = '/';
		var re = new RegExp(find, 'g');
		// console.log(re);
		var fechaini = $('#txtfechaini').val();
		var recurso = $('#cboRecurso option:selected').val();
		var nombre = $('#cboRecurso option:selected').html();
		var fechaini2 = fechaini.replace(re, '-');
		// console.log(fechaini2);
		var fechafin = $('#txtfechafin').val();
		var fechafin2 = fechafin.replace(re, '-');
		// console.log(fechafin2);
		var hostname = window.location.host;
		var url = 'http://' + hostname + '/MONITOREO/reportes/repincidencia/vistaIncidenciasRPT/' +nombre+ '/'+recurso+ '/'+ fechaini2 + '/' + fechafin2 +'/';		
		// var url = 'http://' + hostname + '/MONITOREO/reportes/repincidencia/verAtendidos/' + fechaini2 + '/' + fechafin2 +'/'+estado+ '/';
		window.open(url,'_blank');
		// $.colorbox({
		// 	iframe: true,
		// 	// open:true,
		// 	href: url
		//     //plus any other interesting options    
		// });

}
</script>