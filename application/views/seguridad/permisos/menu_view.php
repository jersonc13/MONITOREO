<div class="page-container">
    <div class="page-sidebar-wrapper">
        <div>
            <ul>
                <?php
                foreach ($opcionesp as $oppadre) {
                    ?>
                    <li>
                        <?php echo $oppadre['copcion'] ?> 
                        <ul>
                            <?php
                            foreach ($opcionesh as $ophijo) {
                                $x = 0;
                                if ($oppadre['nidopcion'] == $ophijo['nidhijo']) {
                                    ?>
                                    <li>

                                        <?php
                                        foreach ($opcioneshijo as $ophijo2) {
                                            if ($ophijo['nidopcion'] == $ophijo2['nidopcion']) {
                                                $x = 1;
                                            }
                                            ?>
                                            <?php
                                        }
                                        if ($x == 1) {
                                            ?>
                                            <input type="checkbox" checked="true" id="<?php echo $ophijo['nidopcion'] ?>" name="chk_opcioneshijos"> 
                                            <?php
                                        } else {
                                            ?>
                                            <input type="checkbox" id="<?php echo $ophijo['nidopcion'] ?>" name="chk_opcioneshijos"> 
                                            <?php
                                        }
                                        echo $ophijo['copcion']
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