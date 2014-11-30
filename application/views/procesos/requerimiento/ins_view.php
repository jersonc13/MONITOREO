

<!-- <div class="mail-box-header">
    <div class="pull-right tooltip-demo">
        <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Borrador</a>
        <a href="mailbox.html" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Cancelar</a>
    </div>
    <h2>
        Nuevo Correo
    </h2>
</div> -->
<div class="mail-box">


	<div class="mail-body">

		<form class="form-horizontal" method="get" id="frmRequisitos">
			<div class="form-group">
				<label class="col-sm-2 control-label">Tipo Recurso</label>
				<div class="col-sm-10">
					<select name="cboTipoRec" id="cboTipoRec">
						<?php foreach ($tiposRecurso as $fila): ?>
							<option value="<?php echo $fila['nTreId'] ?>"><?php echo $fila['cTreDescripcion'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="form-group" id="data_1">
				<label class="col-sm-2 control-label">Fecha Separación</label>
				<div class="input-group date col-sm-10">
					<span class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</span>
					<input type="text" id="txtfecha" name="txtfecha" class="form-control" value="<?php echo  date('d/m/Y'); ?>">
				</div>
			</div>
			<div class="mail-text h-200">
				<div class="summernote"></div>
				<div class="clearfix"></div>
			</div>
		</form>

	</div>
	<div class="mail-body text-right tooltip-demo">
		<a onclick="enviarrequerimiento()" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Confirmar</a>
		<a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Cancelar</a>
		<a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Borrador</a>
	</div>
	<div class="clearfix"></div>



</div>
<!-- SUMMERNOTE -->
<script>
	$(document).ready(function() {
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});


		$('.summernote').summernote();

	});
	var edit = function() {
		$('.click2edit').summernote({focus: true});
	};
	var save = function() {
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();
    };

</script>