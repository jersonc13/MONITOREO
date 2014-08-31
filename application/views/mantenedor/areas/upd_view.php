<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Editar registro
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmAreasEdit" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Nombre Área:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtEditAreas" name="txtEditAreas" value="<?php echo $listarAreaxId[0]['careas']; ?>" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Alias:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtEditAlias" name="txtEditAlias" value="<?php echo $listarAreaxId[0]['calias']; ?>" class="form-control"/>
                        <?php $nvalor = $listarAreaxId[0]['cvalor'];
                        $count = 0;
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Dependencia:</label>
                    <div class="col-md-6">
                        <select id="cbo_dependencia" name="cbo_dependencia" class="form-control">
                            <?php foreach ($listarAreas as $key => $listar) { ?>
                                <?php
                                if ($listar['nidareas'] == $nvalor) {
                                    $count = 1;
                                    ?>
                                    <option selected="true" value="<?php echo $listar['nidareas'] ?>"><?php echo $listar['careas'] ?></option>
                                <?php } else {
                                    ?>
                                    <option value="<?php echo $listar['nidareas'] ?>"><?php echo $listar['careas'] ?></option>
                                    <?php
                                }
                            }
                            if ($nvalor == 0) {
                                ?>
                                <option selected="true" value="0">Sin Dependencia</option>
                            <?php }

                                if ($count == 1) {
                                ?>
                                <option value="0">Sin Dependencia</option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="fa fa-save"></i> Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>