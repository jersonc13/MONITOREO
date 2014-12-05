<script src="<?php echo URL_SCRIPTS ?>/procesos/jsMapeo.js" type="text/javascript"></script>

<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <br><br>
        <div id='mostrar_qry'>
            <div class="col-md-6">
                <?php $conteo = 0; ?>
                <table width="80%">                
                    <tr>
                        <?php foreach ($listarRecurso as $key => $listar) { ?>
                            <td style="width: 25%">
                        <center> 
                            <img alt="image" width="50%" class="img-circle" src="<?php echo URL_GLOBALIMG ?>/compu.jpg" />
                            <br>
                            <?php
                            echo $listar['cRecHost'];
                            $ip = explode('.', $listar['cRecIp']);
                            $ip = sprintf('%02x%02x%02x%02x', $ip[0], $ip[1], $ip[2], $ip[3]);
                            $hexa = $ip . "-FFFF-0000-0000-000000000000";
                            ?>
                            <br>
                            <a href="#" onclick="listarClient(<?php echo "'" . $hexa . "'" ?>,<?php echo "'" . $listar['cRecHost'] . "'" ?>)">
                                <?php echo $listar['cRecIp'];
                                ?>
                            </a>
                        </center>

                        </td>
                        <?php
                        $conteo = $conteo + 1;
                        if ($conteo > 3) {
                            ?>
                            </tr>
                            <tr>
                                <?php
                            }
                            ?>
                        <?php } ?>
                    </tr>
                </table>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>

            <div class="col-md-6">
                <table class="table table-striped table-bordered table-hover" width="50%" id="sample_1">
                    <thead>
                        <tr>
                            <th>IP</th>
                            <th>URL</th>
                            <th>FECHA</th>
                            <th>Laboratorio</th>                  
                            <!--<th>Opciones</th>-->          
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarMapeo as $key => $listar) { ?>
                            <tr>
                                <td><?php echo long2ip(substr("0X" . $listar['clientIP'], 0, 10)) ?></td>
                                <td><?php echo $listar['uri'] ?></td>
                                <td><?php echo $listar['logTime'] ?></td>
                                <td><?php echo $listar['SrcNetwork'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS -->
        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>
    </div>
</div>
