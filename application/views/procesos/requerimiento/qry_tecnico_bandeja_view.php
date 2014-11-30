<?php
 // print_p($accionx);
?>
<table class="table table-striped table-bordered table-hover " id="incidencias_table" >
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Recurso Solicitado</th>
			<th>Motivo</th>
			<th>Fecha a Separar</th>
			<th>Solicitante</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php if ( $incidencias ) { ?>
		<?php foreach ($incidencias as $key => $listar) { ?>
		<tr>
			<td><?php echo $listar['nAReqId'] ?></td>
			<td><?php echo $listar['cTreDescripcion'] ?></td>
			<td><?php echo $listar['cReMotivo'] ?></td>
			<td><?php echo $listar['fechas'] ?></td>
			<td><?php echo $listar['solicitante'] ?></td>
			<td>
				<?php 
				if ($accionx == 'BANDEJAMISCASOS') {
					?>
					<a href="#" class="btn btn-sm blue"  onclick="getsolucionar(<?php echo $listar['nAReqId'] ?>)" >
						<i class="fa fa-envelope"></i>
					</a>
					<?php 
				}else{
				 ?>
				<!-- <a href="#" class="btn btn-sm blue"  onclick="detalleRequerimiento(<?php echo $listar['nAReqId'] ?>)" >
					<i class="fa fa-bookmark-o"></i>
				</a> -->
				<a data-placement="top" onclick="tomarCaso(<?php echo $listar['nAReqId'] ?>)" data-toggle="tooltip" type="button" data-original-title="Tomar Requerimiento" href="#" class="btn btn-sm blue" >
					<i class="fa fa-plus-square"></i>
				</a>
				<?php } ?>
			</td>
		</tr>
		<?php } ?>
		<?php } ?>
	</tbody>
</table>