<div id="wrapper">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <table class="table table-striped table-bordered table-hover " id="editable" >
                            <thead>
                                <tr>
                                    <th>Codigo Patrimonial</th>
                                    <th>Serie</th>
                                    <th>Modelo</th>
                                    <th>Estado</th>
                                    <th>Opción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($listarRecurso) { ?>
                                    <?php foreach ($listarRecurso as $key => $listar) { ?>
                                        <tr>
                                            <td><?php echo $listar['cRecCodigoPatrimonial'] ?></td>
                                            <td><?php echo $listar['cRecSerie'] ?></td>
                                            <td><?php echo $listar['cRecModelo'] ?></td>
                                            <td><?php echo $listar['estado'] ?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm blue" onclick="editarAmbiente(<?php echo $listar['nRecId'] ?>)"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                        <a onclick="listarRecurso()" style="cursor: pointer"><i class="fa fa-refresh"></i>ACTUALIZAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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