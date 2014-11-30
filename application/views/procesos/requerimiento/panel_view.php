<script src="<?php echo URL_SCRIPTS ?>/requerimiento/jsPedido.js" type="text/javascript"></script>
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                Requerimientos
            </h3>
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">
                        Inicio </a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">
                        Procesos </a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">
                        Incidencias </a>
                    <i class="fa fa-angle-right"></i>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN DASHBOARD STATS -->
    <div class="row">

        <div class="col-md-12">
            <div class="tabbable tabbable-custom boxless tabbable-reversed">
                <ul class="nav nav-tabs">

                    <li class="active">
                        <a href="#tab_1" data-toggle="tab">
                            Solicitar </a>
                    </li>
                    <li>
                        <a href="#tab_0" data-toggle="tab" id="listar_anc">
                            Mis requerimientos Generadas </a>
                    </li>
                    <!-- <li >
                        <a href="#tab_2" data-toggle="tab">
                            Editar </a>
                    </li> -->
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="tab_1">
                        <?php $this->load->view('procesos/requerimiento/ins_view'); ?>
                    </div>
                    <div class="tab-pane " id="tab_0">
                        <div id="wrapper">
                            <div class="wrapper wrapper-content animated fadeInRight">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content">
                                                <div id="mostrar_qry" >
                                                    <?php 
                                                    // $this->load->view('procesos/requerimiento/qry_view') 
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="tab-pane" id="tab_2">Otro</div> -->

                </div>
            </div>
        </div>

    </div>
    <!-- END DASHBOARD STATS -->
    <div class="clearfix">
    </div>

</div>
<!-- Contadores de Filas -->
<input type="hidden" id="hid_primera_entrada" name="hid_primera_entrada" value="<?php echo $FirtLoad?>">
<input id="n_filas_anterior" name="n_filas_anterior" type="hidden" value="0"/>
<input id="n_filas_anterior_creadas" name="n_filas_anterior_creadas" type="hidden" value="0"/>

<div id="cnt_qry_bangen_repmus" style=" text-align:  center"></div>
<div id="cnt_fila_musica" style=" text-align:  center"></div>

<script src="<?php echo URL_SCRIPTS ?>/table-advanced.js"></script>
<!-- Librerias de PopUp -->
<!-- Add fancyBox main JS and CSS files -->
<!-- <script type="text/javascript" src="<?php echo URL_SCRIPTS ?>/source-fancy/jquery.fancybox.js?v=2.1.5"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo URL_SCRIPTS ?>/source-fancy/jquery.fancybox.css?v=2.1.5" media="screen" /> -->

<!-- Add Button helper (this is optional) -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo URL_SCRIPTS ?>/source-fancy/helpers/jquery.fancybox-buttons.css?v=1.0.5" /> -->
<!-- <script type="text/javascript" src="<?php echo URL_SCRIPTS ?>/source-fancy/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script> -->
