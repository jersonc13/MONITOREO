<div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Información de Asignación</h5>
                    <input type="hidden" id="txtnPeridSolicita" value="<?php echo $infoPersona['nPerId'] ?>">
                </div>
                <div>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="image" class="img-responsive" src="http://www.stkittsandnevisrealestate.com/wp-content/uploads/2013/04/blank-profile.jpg">
                        <!-- <img alt="image" class="img-responsive" src="img/profile_big.jpg"> -->
                    </div>
                    <div class="ibox-content profile-content">
                        <h4><strong><?php echo $infoPersona['cPerApellidoPaterno'].' '.$infoPersona['cPerApellidoMaterno'].' '.$infoPersona['cPerNombres'] ?></strong></h4>
                        <p><i class="fa fa-map-marker"></i> <?php echo $infoPersona['cPerEmail'] ?></p>
                        <p><i class="fa-newspaper-o"></i> <?php echo $infoPersona['estado'] ?></p>
                        <h5>
                            <strong>Tipo Requerimiento:</strong> <?php echo $infoRequerimiento['cTreDescripcion']; ?>
                        </h5>
                        <p>
                            <?php echo $infoRequerimiento['cReMotivo']; ?>
                        </p>
                        <div class="media-body ">
                            <!-- <small class="pull-right"><?php echo timeago( strtotime( $infoRequerimiento['fechas'] ) ); ?></small> -->
                            <strong>Solicitante</strong> <?php echo $infoRequerimiento['solicitante'] ; ?> <br>
                            <small class="text-muted">Registrado <?php echo timeago( strtotime( $infoRequerimiento['fechas'] ) ); ?></small>
                        </div>
                        <div class="row m-t-lg">
                            <div class="col-md-4">
                                <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                <h5><strong>169</strong> Requerimientos</h5>
                            </div>
                            <div class="col-md-4">
                                <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                <h5><strong>28</strong> Solucionando</h5>
                            </div>
                            <div class="col-md-4">
                                <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                <h5><strong>240</strong> Conformes</h5>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Observación</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtobserva">
                            </div>
                        </div>       
                        <br>
                        <div class="hr-line-dashed"></div>                 
                        <div class="user-button">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" onclick="AsignarRequerimiento()" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Asignar</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" onclick="cancelarAsigna()" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo URL_GLOBALJS ?>/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo URL_GLOBALJS ?>/demo/peity-demo.js"></script>