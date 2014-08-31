<!--<script src="<?php echo URL_ADMINPJS ?>/mantenedor/persona/jsPersonaNatural.js" type="text/javascript"></script>-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&;amp;language=es"></script>
<script src="<?php echo URL_ADMINPJS ?>/mantenedor/persona/jsPersonaMap.js" type="text/javascript"></script>
<style type="text/css">
#mapa-latitud { 
    width: 550px;
    height: 400px;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue" id="form_wizard_1">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> Registro de Personas - <span class="step-title">
                        Paso 1 de 4 </span>
                </div>
                <div class="tools hidden-xs">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <form action="#" class="form-horizontal" id="submit_form">
                    <div class="form-wizard">
                        <div class="form-body">
                            <ul class="nav nav-pills nav-justified steps">
                                <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                        <span class="number">
                                            1 </span>
                                        <span class="desc">
                                            <i class="fa fa-check"></i> Datos Generales </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab" class="step">
                                        <span class="number">
                                            2 </span>
                                        <span class="desc">
                                            <i class="fa fa-check"></i> Detalle </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab" class="step active">
                                        <span class="number">
                                            3 </span>
                                        <span class="desc">
                                            <i class="fa fa-check"></i> GPS </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab4" data-toggle="tab" class="step">
                                        <span class="number">
                                            4 </span>
                                        <span class="desc">
                                            <i class="fa fa-check"></i> Confirmar </span>
                                    </a>
                                </li>
                            </ul>
                            <div id="bar" class="progress progress-striped" role="progressbar">
                                <div class="progress-bar progress-bar-success">
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Ingrese los datos solicitados</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Apellidos <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtapellidos" id="txtapellidos"/>
                                            <span class="help-block">
                                                Ingrese Apellidos </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nombre <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtnombres" id="txtnombres"/>
                                            <span class="help-block">
                                                Ingrese Nombre </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tipo Documento <span class="required">
                                                * </span>
                                        </label>
                                        <div class="radio-list">
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="radio" name="tipo_documento" value="18" data-title="DNI"/>
                                                    DNI </label>
                                                <label>
                                                    <input type="radio" name="tipo_documento" value="19" data-title="RUC"/>
                                                    RUC </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">DNI/RUC <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtdniruc" id="txtdniruc"/>
                                            <span class="help-block">
                                                Ingrese DNI/RUC. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <h3 class="block">Detalle de Persona</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Correo Electrónico <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="email" value="j@h.com"/>
                                            <span class="help-block">
                                                Ingrese correo electrónico </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Celular <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="phone" value="123"/>

                                            <span class="help-block">
                                                Ingrese número de Celular </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Operador <span class="required">
                                                * </span>
                                        </label>
                                        <div class="radio-list">
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="radio" name="operador" value="15" data-title="Claro"/>
                                                    Claro </label>
                                                <label>
                                                    <input type="radio" name="operador" value="14" data-title="Movistar"/>
                                                    Movistar </label>
                                                <label>
                                                    <input type="radio" name="operador" value="16" data-title="Nextel"/>
                                                    Nextel </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Estado Civil <span class="required">
                                                * </span>
                                        </label>
                                        <div class="radio-list">
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="radio" name="estadocivil" value="21" data-title="Soltero"/>
                                                    Soltero </label>
                                                <label>
                                                    <input type="radio" name="estadocivil" value="22" data-title="Casado"/>
                                                    Casado </label>
                                                <label>
                                                    <input type="radio" name="estadocivil" value="23" data-title="Conviviente"/>
                                                    Conviviente </label>
                                                <label>
                                                    <input type="radio" name="estadocivil" value="24" data-title="Divorciados"/>
                                                    Divorciados </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Sexo <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="radio-list">
                                                <label>
                                                    <input type="radio" name="sexo" value="11" data-title="Hombre"/>
                                                    Hombre </label>
                                                <label>
                                                    <input type="radio" name="sexo" value="12" data-title="Mujer"/>
                                                    Mujer </label>
                                            </div>
                                            <div id="form_gender_error">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Dirección <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="address" value="petalos"/>
                                            <span class="help-block">
                                                Ingrese Dirección Actual </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Departamento <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <select id="cbo_departamento" name="cbo_departamento" class="form-control" onchange='cargaProvincia()'>
                                                <option value="" disabled="true" selected="true">Seleccione</option>
                                                <?php foreach ($listarDepartamento as $key => $listar) { ?>
                                                    <option value="<?php echo $listar['idDepa'] ?>"><?php echo $listar['departamento'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Provincia <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4" id="div_provincia">
                                            <select class="form-control">
                                                <option>Debe seleccionar departamento</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Distrito <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4" id="div_distrito">
                                            <select class="form-control">
                                                <option>Debe seleccionar provincia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <h3 class="block">GPS</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Latitud</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtlatitud"/>
                                            <span class="help-block">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Longitud</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtlongitud"/>
                                            <span class="help-block">
                                            </span>
                                        </div>
                                    </div>
                                    <div style="height:100%; width:100%;">
                                        <div id="mapa-latitud"></div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirma tu Registro</h3>
                                    <h4 class="form-section">Datos Generales</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tipo Persona:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static"> Persona Natural
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Apellidos:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="txtapellidos">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nombres:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="txtnombres">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tipo Documento:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="tipo_documento">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">DNI/RUC:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="txtdniruc">
                                            </p>
                                        </div>
                                    </div>
                                    <h4 class="form-section">Detalle Persona</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="email">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Celular:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="phone">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Operador:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="operador">
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Estado Civil:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="estadocivil">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Sexo:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="sexo">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Dirección:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="address">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Departamento:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="cbo_departamento">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Provincia:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="cbo_provincia">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Distrito:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="cbo_distrito">
                                            </p>
                                        </div>
                                    </div>

                                    <h4 class="form-section">GPS</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">GPS latitud:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="txtlatitud">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">GPS longitud:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="txtlongitud">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="javascript:;" class="btn default button-previous">
                                            <i class="m-icon-swapleft"></i> Back </a>
                                        <a href="javascript:;" class="btn blue button-next">
                                            Continue <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                        <!--                                        <a href="javascript:;" class="btn green button-submit" onclick="RegistrarDatos()">
                                                                                    Submit <i class="m-icon-swapright m-icon-white"></i>
                                                                                </a>-->
                                        <button type="submit" class="btn green button-submit">Submit <i class="m-icon-swapright m-icon-white"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo URL_MAIN ?>/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--<script type="text/javascript" src="<?php echo URL_MAIN ?>/assets/global/plugins/select2/select2.min.js"></script>-->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL_MAIN ?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo URL_MAIN ?>/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo URL_MAIN ?>/assets/admin/pages/scripts/form-wizard.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
                                                jQuery(document).ready(function() {
                                                    // initiate layout and plugins                                                 
                                                    FormWizard.init();
                                                });
</script>
<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->

</html>