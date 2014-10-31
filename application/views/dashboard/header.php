
<!DOCTYPE html>
<html>


    <!-- Mirrored from webapplayers.com/inspinia_admin-v1.2/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 04 Aug 2014 00:45:28 GMT -->
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>INSPINIA | Dashboard</title>
        <script src="<?php echo URL_GLOBALJS ?>/jquery-1.10.2.js"></script>
        <link href="<?php echo URL_GLOBALCSS ?>/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL_GLOBALCSS ?>/font-awesome.css" rel="stylesheet">

        <!-- Morris -->
        <link href="<?php echo URL_GLOBALCSS ?>/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

        <!-- Gritter -->
        <link href="<?php echo URL_GLOBALJS ?>/plugins/gritter/jquery.gritter.css" rel="stylesheet">

        <link href="<?php echo URL_GLOBALCSS ?>/animate.css" rel="stylesheet">
        <link href="<?php echo URL_GLOBALCSS ?>/style.css" rel="stylesheet">

        <link href="<?php echo URL_GLOBALCSS ?>/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="<?php echo URL_GLOBALCSS ?>/plugins/summernote/summernote.css" rel="stylesheet">
        <link href="<?php echo URL_GLOBALCSS ?>/plugins/summernote/summernote-bs3.css" rel="stylesheet">

        <link href="<?php echo URL_GLOBALCSS ?>/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="<?php echo URL_GLOBALCSS ?>/plugins/datapicker/datepicker3.css" rel="stylesheet">
        <script language="JavaScript">
            function mueveReloj() {
                momentoActual = new Date()
                hora = momentoActual.getHours()
                minuto = momentoActual.getMinutes()
                segundo = momentoActual.getSeconds()
                str_segundo = new String(segundo)
                if (str_segundo.length == 1)
                    segundo = "0" + segundo

                str_minuto = new String(minuto)
                if (str_minuto.length == 1)
                    minuto = "0" + minuto

                str_hora = new String(hora)
                if (str_hora.length == 1)
                    hora = "0" + hora

                horaImprimible = hora + " : " + minuto + " : " + segundo

                document.form_reloj.reloj.value = horaImprimible

                setTimeout("mueveReloj()", 1000)
            }
        </script> 
        <!-- <link href="<?php echo URL_GLOBALCSS ?>/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet"> -->
        <link href="<?php echo URL_GLOBALCSS ?>/plugins/datapicker/datepicker3.css" rel="stylesheet">

    </head>

    <body onload="mueveReloj()">
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="nav-header">

                            <div class="dropdown profile-element"> <span>
                                    <img alt="image" class="img-circle" src="<?php echo URL_GLOBALIMG ?>/profile_small.jpg" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('Nombres') ?></strong>
                                        </span> <span class="text-muted text-xs block">Administrador <b class="caret"></b></span> </span> </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="profile.html">Perfil</a></li>
                                    <li><a href="contacts.html">Contacto</a></li>
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login.html">Desconectar</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                UCV
                            </div>

                        </li>
                        <?php
                        $cargaropcionpadre = $this->cargas->cargaropcionpadre();
                        $cargaropcionhijo = $this->cargas->cargaropcionhijo();
                        if ($cargaropcionpadre) {
                            foreach ($cargaropcionpadre as $oppadre) {
                                ?>
                                <li>
                                    <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label"><?php echo $oppadre['cAplNombre'] ?></span> <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <?php
                                        foreach ($cargaropcionhijo as $ophijo) {
                                            if ($oppadre['nAplId'] == $ophijo['nAplId']) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo URL_MAIN . '/' . $ophijo['cOdetNombreArchivo'] ?>">
                                                        <?php echo $ophijo['cObjNombre'] ?> </a>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>

                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            <form role="search" class="navbar-form-custom" method="post" action="http://webapplayers.com/inspinia_admin-v1.2/search_results.html">
                                <div class="form-group">
                                    <!--<input type="label" placeholder="Bienvenidos al Sistema" disabled="true"  class="form-control" name="top-search" id="top-search">-->
                                </div>
                            </form>
                        </div>
                        
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">Bienvenidos al Sistema de Monitoreo : <?php echo $this->session->userdata('Nombres') ?>
                                </span>
                                
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <a href="profile.html" class="pull-left">
                                                <img alt="image" class="img-circle" src="<?php echo URL_GLOBALIMG ?>/a7.jpg">
                                            </a>
                                            <div class="media-body">
                                                <small class="pull-right">46h ago</small>
                                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <a href="profile.html" class="pull-left">
                                                <img alt="image" class="img-circle" src="<?php echo URL_GLOBALIMG ?>/a4.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right text-navy">5h ago</small>
                                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <a href="profile.html" class="pull-left">
                                                <img alt="image" class="img-circle" src="<?php echo URL_GLOBALIMG ?>/profile.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">23h ago</small>
                                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="text-center link-block">
                                            <a href="mailbox.html">
                                                <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    <li>
                                        <a href="mailbox.html">
                                            <div>
                                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                                <span class="pull-right text-muted small">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="profile.html">
                                            <div>
                                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                                <span class="pull-right text-muted small">12 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="grid_options.html">
                                            <div>
                                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                                <span class="pull-right text-muted small">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="text-center link-block">
                                            <a href="notifications.html">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <form name="form_reloj"> 
                                    <input type="text" name="reloj" size="10" style="background-color : Black; color : White; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()"> 
                                </form> 
                            </li>
                            <li>
                                <a href="../login">
                                    <i class="fa fa-sign-out"></i>Cerrar Sesión
                                </a>
                            </li>
                        </ul>

                    </nav>
                </div>
