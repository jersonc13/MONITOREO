<table class="table table-striped table-bordered table-hover " id="incidencias_table" >
	<thead>
		<tr>
			<th>Recurso Solicitado</th>
			<th>Motivo</th>
			<th>Estado</th>
			<th>Fecha a Separar</th>
			<th>Responsable</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php if ( $incidencias ) { ?>
		<?php foreach ($incidencias as $key => $listar) { ?>
		<tr>
			<td><?php echo $listar['cTreDescripcion'] ?></td>
			<td><?php echo $listar['cReMotivo'] ?></td>
			<td><?php echo $listar['estado'] ?></td>
			<td><?php echo $listar['fechas'] ?></td>
			<td><?php echo $listar['nombre'] ?></td>
			<td>
				<a href="asignar/<?php echo $listar['nReId'] ?>" class="btn btn-sm blue" >
					<i class="fa fa-bookmark-o"></i>
				</a>
			</td>
		</tr>
		<?php } ?>
		<?php } ?>
	</tbody>
</table>