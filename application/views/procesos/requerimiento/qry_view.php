<table class="table table-striped table-bordered table-hover " id="incidencias_table" >
	<thead>
		<tr>
			<th>Recurso Solicitado</th>
			<th>Motivo</th>
			<th>Fecha a Separar</th>
			<th>Responsable</th>
			<th>Estado</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php if ( $incidencias ) { ?>
		<?php foreach ($incidencias as $key => $listar) { ?>
		<tr>
			<td><?php echo $listar['cTreDescripcion'] ?></td>
			<td><?php echo $listar['cReMotivo'] ?></td>
			<td><?php echo $listar['fechas'] ?></td>
			<td><?php echo $listar['nombre'] ?></td>
			<td><?php echo $listar['estado'] ?></td>
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
				<a href="#" class="btn btn-sm blue" onclick="verDetalle(<?php echo $listar['nReId'] ?>)" >
					<i class="fa fa-edit"></i>
				</a>
				<?php } ?>
			</td>
		</tr>
		<?php } ?>
		<?php } ?>
	</tbody>
</table>