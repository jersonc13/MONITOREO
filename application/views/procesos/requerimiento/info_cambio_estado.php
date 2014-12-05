<?php 
if ( $estado == 1 ) {
	?>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Caso Asignado</h4>
			</div>
			<div class="modal-body">
				<p>Caso Asignado Correctamente</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="window.location.href=''">regresar</button>
			</div>
		</div>
	</div>
	<?php 
}else{
	?>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Ocurrio un Error</h4>
			</div>
			<div class="modal-body">
				<p>Error al Asignar caso</p>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-primary">Iniciar Sesión</button> -->
			</div>
		</div>
	</div>
	<?php
} ?>