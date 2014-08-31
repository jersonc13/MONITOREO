<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Listado de Personas Natural
        </div>
        <div class="tools">
            <a href="#" onclick="listarPersonas()" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Razon Social</th>
                    <th>RUC</th>           
                    <th>Opciones</th>          
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarpersonajuridica as $key => $listar) { ?>
                    <tr>
                        <td><?php echo $listar['cnomcomercial'] ?></td>
                        <td><?php echo $listar['cdniruc'] ?></td>
                        <td><a href="#" class="btn btn-sm blue">Editar <i class="fa fa-edit"></i></a>
                            <a href="#" onclick="estadoPersona(<?php echo $listar['nidpersona'] ?>)" class="btn btn-sm red"><?php if ($listar['nestado'] == '1') { ?>Dar de baja <?php } else { ?> Dar de alta <?php } ?> <i class="fa fa-refresh"></i></a></td>
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