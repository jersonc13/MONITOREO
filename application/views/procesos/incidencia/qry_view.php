<?php if( $incidencias ){?>
<table class="table table-striped table-bordered table-hover " id="editable"   >
	<thead>
		<tr>
			<th>IP</th>
			<th>Usuario</th>
			<th>Agente</th>
			<th>URI</th>
			<th>srcNetwork</th>
			<th>Opcion</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($incidencias) { ?>
		<?php foreach ($incidencias as $key => $listar) { ?>
		<tr>
			<td><?php echo $listar['ip'] ?></td>
			<td><?php echo $listar['usuario'] ?></td>
			<td><?php echo $listar['agente'] ?></td>
			<td><?php echo $listar['uri'] ?></td>
			<td><?php echo $listar['srcNetwork'] ?></td>
			<td>
				<a href="#" class="btn btn-sm blue" onclick="verDetalle(13)" >
					<i class="fa fa-edit"></i>
				</a>
			</td>
		</tr>
		<?php } ?>
		<?php } ?>
	</tbody>
</table>

<script>
    $(document).ready(function() {
        $('.dataTables-example').dataTable();

        /* Init DataTables */
        var oTable = $('#editable').dataTable();

        /* Apply the jEditable handlers to the table */
//        oTable.$('td').editable('http://webapplayers.com/example_ajax.php', {
//            "callback": function(sValue, y) {
//                var aPos = oTable.fnGetPosition(this);
//                oTable.fnUpdate(sValue, aPos[0], aPos[1]);
//            },
//            "submitdata": function(value, settings) {
//                return {
//                    "row_id": this.parentNode.getAttribute('id'),
//                    "column": oTable.fnGetPosition(this)[2]
//                };
//            },
//            "width": "90%"
//        });


    });

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData([
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row"]);

    }
</script>
<?php } ?>