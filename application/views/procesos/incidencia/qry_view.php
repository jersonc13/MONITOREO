<?php if( $incidencias ){?>
<able class="table table-striped table-bordered table-hover " id="incidencias_table" >
	<thead>
		<tr>
			<th>Estado</th>
			<th>Usuario</th>
			<th>Incidencia</th>
			<th>Fecha</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($incidencias) { ?>
		<?php foreach ($incidencias as $key => $listar) { ?>
		<tr>
			<td><?php echo $listar['cEinDescripcion'] ?></td>
			<td><?php echo $listar['Usuario'] ?></td>
			<td><?php echo $listar['cIncAsunto'] ?></td>
			<td><?php echo $listar['fIncFechaRegistro'] ?></td>
			<td>
				<a href="#" class="btn btn-sm blue" onclick="verDetalle(<?php echo $listar['nIncId'] ?>)" >
					<i class="fa fa-edit"></i>
				</a>
			</td>
		</tr>
		<?php } ?>
		<?php } ?>
	</tbody>
</table>
<?php } ?>