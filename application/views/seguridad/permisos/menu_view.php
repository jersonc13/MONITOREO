<div class="page-container">
    <div class="page-sidebar-wrapper">
        <div>
            <input type="hidden" id="txtidusuario" name="txtidusuario" value="<?php echo $nUsuId ?>" class="form-control" />
            <ul>
                <?php
                foreach ($opcionesp as $oppadre) {
                    ?>
                    <li>
                        <?php echo $oppadre['cAplNombre'] ?> 
                        <ul>
                            <?php
                            foreach ($opcionesh as $ophijo) {
                                $x = 0;
                                if ($oppadre['nAplId'] == $ophijo['nAplId']) {
                                    ?>
                                    <li>

                                        <?php
                                        if($opcioneshijo){
                                        foreach ($opcioneshijo as $ophijo2) {
                                            if ($ophijo['nObjId'] == $ophijo2['nObjId']) {
                                                $x = 1;
                                            }
                                            ?>
                                            <?php
                                        }
                                        }
                                        if ($x == 1) {
                                            ?>
                                            <input type="checkbox" checked="true" id="<?php echo $ophijo['nObjId'] ?>" name="chk_opcioneshijos"> 
                                            <?php
                                        } else {
                                            ?>
                                            <input type="checkbox" id="<?php echo $ophijo['nObjId'] ?>" name="chk_opcioneshijos"> 
                                            <?php
                                        }
                                        echo $ophijo['cObjNombre']
                                        ?> </a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </li>
                <?php } ?>
                <input type="button" id="btngrabarpermisos" name="btngrabarpermisos" onclick="registrarPermisos()" value="Grabar" class="btn blue"/>
            </ul>
        </div>
    </div>
</div>