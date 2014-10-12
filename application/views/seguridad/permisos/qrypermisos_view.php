<div id="wrapper">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <!--            <div class="">
                                    <a onclick="fnClickAddRow();" href="javascript:void(0);" class="btn btn-primary ">Add a new row</a>
                                    </div>-->
                        <table class="table table-striped table-bordered table-hover " id="editable" >
                            <thead>
                                <tr>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombres</th>
                                    <th>Estado</th>
                                    <th>Opción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($listarPersonas) { ?>
                                    <?php foreach ($listarPersonas as $key => $listar) { ?>
                                        <tr>
                                            <td><?php echo $listar['cPerApellidoPaterno'] ?></td>
                                            <td><?php echo $listar['cPerApellidoMaterno'] ?></td>
                                            <td><?php echo $listar['cPerNombres'] ?></td>
                                            <td><?php echo $listar['bPerEstado'] ?></td>
                                            <td><a href="#" class="btn btn-sm blue" onclick="asignarPermisos(<?php echo $listar['nUsuId'] ?>)"><i class="fa fa-edit"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--</div>-->


</div>

<!--     Mainly scripts 
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

     Data Tables 
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

     Custom and plugin javascript 
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>-->

<!-- Page-Level Scripts -->
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