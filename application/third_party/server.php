<?php

//$parametro_salida_uno = 0;
//$nRecId_salida = 0;
//$parametro_salida_dos = 0;
while (1 == 1) {
    $ruta_log = 'http://localhost/MONITOREO/proxy.log';
    $ruta_hash = 'C:\xampp\htdocs\MONITOREO\proxy.dll';
    $last_hash = file_get_contents($ruta_hash);
    // $LastMod = filemtime($ruta);
    $md5file = md5_file($ruta_log);
    // echo $LastMod;
    if ($md5file != $last_hash) {
        saveIncidencia($ruta_log);
        file_put_contents($ruta_hash, $md5file);
        echo "Log Update with HASH: $md5file";
    }
    sleep(2);
}

function saveIncidencia($ruta_log) {

    // $data = json_decode($ruta_log);
    $data = json_decode(file_get_contents($ruta_log));
    // var_dump($data);exit();
    $serverName = "localhost";
    $connectionInfo = array("Database" => "sigpi", "UID" => "sa", "PWD" => "1234");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if ($conn) {
        $sql = "{call shm_inc.USP_INC_I_INCIDENCIA(?, ?, ?, ?)}";

        foreach ($data as $fila) {
            $nPerId = $fila->nPerId;
            $nIncMedioDeSolicitud = $fila->nIncMedioDeSolicitud;
            $cIncAsunto = $fila->cIncAsunto;
            $nRecId_entrada = $fila->nRecId;
            if ($fila->estado != 4) {

                $param1 = $nPerId;
                $param2 = $nIncMedioDeSolicitud;
                $param3 = $cIncAsunto;
                $param4 = 0;
                $params = array(
                            array(&$param1, SQLSRV_PARAM_IN),
                            array(&$param2, SQLSRV_PARAM_IN),
                            array(&$param3, SQLSRV_PARAM_IN),
                            array(&$param4, SQLSRV_PARAM_OUT, NULL, SQLSRV_SQLTYPE_INT)
                );
                /* Create the statement. */
                $stmt = sqlsrv_prepare($conn, $sql, $params);
                if ($stmt) {
                    echo "Statement prepared.\n";
                } else {
                    echo "Error in preparing statement.\n";
                    die(print_r(sqlsrv_errors(), true));
                }
                //TODO: Resolve error, "param count and argument count don't match"
                sqlsrv_execute($stmt);
                // sleep(2);
                sqlsrv_next_result($stmt);
                // echo "Remaining vacation hours: ".$param4;
                // $nIncId = &$param4;
                // var_dump($param4);exit();
                saveIncidenciaRecurso($param4, $nRecId_entrada, $conn);
            }
        }
        //This statement will run, but no rows are returned and rowCount is false.
        //$stmt = sqlsrv_query($conn, $sql, $params);
        //$rowCount = sqlsrv_num_rows( $stmt );
        //$numFields = sqlsrv_num_fields( $stmt );
        return true;
    } else {
        return false;
    }
}

function saveIncidenciaRecurso($nIncId, $nRecId, $conn) {
    if ($conn) {
        $sql2 = "{call shm_inc.USP_INC_I_RECURSO_INCIDENCIA(?,?,?)}";
        //Passing by reference instead of value, otherwise sqlsrv_prepare is not happy
        $param12 = $nIncId;
        $param22 = $nRecId;
        $params2 = array(
                    array(&$param12, SQLSRV_PARAM_IN),
                    array(&$param22, SQLSRV_PARAM_IN),
                    array(&$parametro_salida_dos, SQLSRV_PARAM_OUT, NULL, SQLSRV_SQLTYPE_INT)
        );
        /* Create the statement. */
        // var_dump($params2);exit();
        $stmt2 = sqlsrv_prepare($conn, $sql2, $params2);
        if ($stmt2) {
            echo "Statement prepared.\n";
        } else {
            echo "Error in preparing statement.\n";
            die(print_r(sqlsrv_errors(), true));
        }
        //TODO: Resolve error, "param count and argument count don't match"
        sqlsrv_execute($stmt2);
        //This statement will run, but no rows are returned and rowCount is false.
        //$stmt = sqlsrv_query($conn $sql, $params);
        //$rowCount = sqlsrv_num_rows( $stmt );
        //$numFields = sqlsrv_num_fields( $stmt );
        return true;
    } else {
        return false;
    }
}

?>