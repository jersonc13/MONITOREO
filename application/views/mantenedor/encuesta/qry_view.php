<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Listado de encuestas
        </div>
        <div class="tools">
            <a href="#" onclick="listarEncuesta()" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Empresa</th>
                    <th>Encuesta</th>
                    <th>Estado</th>
                    <th>Opción</th>                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarEncuesta as $key => $listar) {?>
                <tr>
                    <td><?php echo $listar['capellidos'].' '.$listar['cnombres'] ?></td>
                    <td><?php echo $listar['cencuesta'] ?></td>
                    <td><?php echo $listar['cestado']?></td>
                    <td><a href="#" class="btn btn-sm blue">Editar <i class="fa fa-edit"></i></a>
                        <a href="#" onclick="estadoEncuesta(<?php echo $listar['nidencuesta'] ?>)" class="btn btn-sm red"><?php if ($listar['nestado']=='1'){ ?>Dar de baja <?php }else{?> Dar de alta <?php } ?> <i class="fa fa-refresh"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    jQuery(document).ready(function() {
        TableAdvanced.init();
    });
</script>