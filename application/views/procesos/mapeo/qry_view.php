<div id="wrapper">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <h3><?php echo $nombre ?></h3>
                <h3><?php echo long2ip(substr("0X".$direccionip,0,10)) ?></h3>
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <table class="table table-striped table-bordered table-hover " id="editable" >
                            <thead>
                                <tr>
                                    <th>IP</th>
                                    <th>URL</th>
                                    <th>Fecha</th>
                                    <th>Laboratorio</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($listarClient) { ?>
                                    <?php foreach ($listarClient as $key => $listar) { ?>
                                        <tr>
                                             <td><?php echo long2ip(substr("0X".$listar['ClientIP'],0,10)) ?></td>
                                            <td><?php echo $listar['uri'] ?></td>
                                            <td><?php echo $listar['logTime'] ?></td>
                                            <td><?php echo $listar['SrcNetwork'] ?></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                        <a onclick="listarClient('C0A87E28-FFFF-0000-0000-000000000000',<?php echo "'".$nombre."'" ?>)" style="cursor: pointer"><i class="fa fa-refresh"></i>ACTUALIZAR</a>
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