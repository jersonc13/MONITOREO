<!DOCTYPE html>
<html>
    <!-- Mirrored from webapplayers.com/inspinia_admin-v1.2/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 04 Aug 2014 00:47:59 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INSPINIA | Login</title>
        <link href="<?php echo URL_GLOBALCSS ?>/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL_GLOBALCSS ?>/font-awesome.css" rel="stylesheet">
        <link href="<?php echo URL_GLOBALCSS ?>/animate.css" rel="stylesheet">
        <link href="<?php echo URL_GLOBALCSS ?>/style.css" rel="stylesheet">
    </head>
    <body class="gray-bg">
        <div class="middle-box text-center loginscreen  animated fadeInDown">
            <div>
                <div>
                    <h1 class="logo-name">UCV</h1>
                </div>
                <h3>BIENVENIDOS AL SISTEMA DE MONITOREO v1.0</h3>
                <p>Monitoreo de Incidencias
                    <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
                </p>
                <p>ACCESO AL SISTEMA</p>
                <form id="frm_login" class="m-t" role="form" action="" method="post">
                    <div class="form-group">
                        <input id="txt_usuario" name="txt_usuario" class="form-control" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <input id="txt_contrasena" name="txt_contrasena" type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div id="mensaje" class="form-group"></div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                    <a href="#"><small>Olvidaste tu contraseña?</small></a>
                    <p class="text-muted text-center"><small>No estás registrado?</small></p>
                    <a class="btn btn-sm btn-white btn-block" href="register.html">Crear una cuenta</a>
                </form>
                <p class="m-t"> <small>Todos los derechos Reservados &copy; 2014</small> </p>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="<?php echo URL_GLOBALJS ?>/jquery-1.10.2.js"></script>
        <script src="<?php echo URL_GLOBALJS ?>/bootstrap.min.js"></script>
        <script src="<?php echo URL_SCRIPTS ?>/jsLogin.js" type="text/javascript"></script>
        
        <!-- Scripts Generales -->
        <script src="<?php echo URL_SCRIPTSGENERALES ?>/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        
        
    </body>


    <!-- Mirrored from webapplayers.com/inspinia_admin-v1.2/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 04 Aug 2014 00:47:59 GMT -->
</html>
