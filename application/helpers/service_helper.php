<?php

// CREA UN SELECT SIMPLE (COMBO)
function creaCombo($query) {
    $array = toArrayNumerico($query);
    foreach ($array as $fila) {
        $data[utf8_encode($fila[0])] = mb_convert_encoding($fila[1], "UTF-8");
    }

    return $data;
}

//Convertir a Hexa
function convertirhexa($variable) {
    $ip = explode('.', $variable);
    $ip = sprintf('%02x%02x%02x%02x', $ip[0], $ip[1], $ip[2], $ip[3]);
    $hexa = $ip . "-FFFF-0000-0000-000000000000";
    return $hexa;
}


// CREA UN SELECT (COMBO) CON:  Seleccionar 
function creaComboCSO($query) {
    $array = toArrayNumerico($query);
    $data[''] = 'Seleccionar';
    foreach ($array as $fila) {
        $data[utf8_encode($fila[0])] = mb_convert_encoding($fila[1], "UTF-8");
    }

    return $data;
}

// CREA UN SELECT (COMBO) CON PRIMERA OPCION EN BLANCO (con data-placeholder)
function creaComboCPH($query) {
    $array = toArrayNumerico($query);
    $data[''] = '';
    foreach ($array as $fila) {
        $data[utf8_encode($fila[0])] = mb_convert_encoding($fila[1], "UTF-8");
    }

    return $data;
}

// CREA UN SELECT (COMBO) NUMERICO ASCENDENTE 
function comboNumAsc($liminf, $limsup, $atributos) {
    $result = "";
    $result .= "<select " . $atributos . ">";

    for ($i = $liminf; $i <= $limsup; $i++) {
        $result .= "<option value=$i>" . $i . "</option>";
    }

    $result .= "</select>";

    return $result;
}

// CREA UN SELECT (COMBO) NUMERICO DESCENDENTE
function comboNumDesc($limsup, $liminf, $atributos) {
    $result = "";
    $result .= "<select " . $atributos . ">";

    for ($i = $limsup; $i >= $liminf; $i--) {
        $result .= "<option value=$i>" . $i . "</option>";
    }

    $result .= "</select>";

    return $result;
}

// CREA UN SELECT (COMBO) NUMERICO DESCENDENTE CON OPCION SELECCIONADA
function comboNumDescCOS($limsup, $liminf, $selected, $atributos) {
    $result = "";
    $result .= "<select " . $atributos . ">";

    for ($i = $limsup; $i >= $liminf; $i--) {
        if ($i == $selected) {
            $result .= "<option selected='' value=$i>" . $i . "</option>";
        } else {
            $result .= "<option value=$i>" . $i . "</option>";
        }
    }

    $result .= "</select>";

    return $result;
}

// CREA UN SELECT (COMBO) NUMERICO ASCENDENTE (LIMITE INFERIOR HASTA AÑO ACTUAL: LIAA) 
function comboNumLIAA($liminf, $atributos) {
    $anioactual = date("Y");
    $result = "";
    $result .= "<select " . $atributos . ">";

    for ($i = $liminf; $i <= $anioactual; $i++) {
        $result .= "<option value=$i>" . $i . "</option>";
    }

    $result .= "</select>";

    return $result;
}

// CREA UN SELECT (COMBO) NUMERICO DESCENDENTE (AÑO ACTUAL HASTA LIMITE INFERIOR: AALI) 
function comboNumAALI($liminf, $atributos) {
    $anioactual = date("Y");
    $result = "";
    $result .= "<select " . $atributos . ">";

    for ($i = $anioactual; $i >= $liminf; $i--) {
        $result .= "<option value=$i>" . $i . "</option>";
    }

    $result .= "</select>";

    return $result;
}

// CREA UN SELECT (COMBO) NUMERICO DESCENDENTE (AÑO ACTUAL HASTA LIMITE INFERIOR: AALI)  (CON OPCION SELECCIONADA)
function comboNumAALICOS($liminf, $atributos, $selected) {
    $anioactual = date("Y");
    $result = "";
    $result .= "<select " . $atributos . ">";

    for ($i = $anioactual; $i >= $liminf; $i--) {
        if ($i == $selected) {
            $result .= "<option selected value=$i>" . $i . "</option>";
        } else {
            $result .= "<option value=$i>" . $i . "</option>";
        }
    }

    $result .= "</select>";

    return $result;
}

// CREA UNA TABLA SENCILLA 
function creaTabla($query, $header, $atributos) {
    $array = toArrayNumerico($query);
    $result = "";
    $result .= '<table  ' . $atributos . '>';
    $result .= '<thead>';
    $result .='<tr>';
    foreach ($header as $title => $valor) {
        $result .='<th>' . utf8_encode($valor) . '</th>';
    }
    $result .='</tr>';
    $result .= '</thead>';
    $result .= '<tbody>';
    foreach ($array as $fila => $row) {
        $result.='<tr>';
        foreach ($row as $key => $value) {
            $campo = $value; // sin adampt: utf8_encode($value)
            $result.='<td>';
            if ($campo == null) {
                $result.='&nbsp;';
            } else {
                $result.=htmlspecialchars($campo);
            }
            $result.='</td>';
        }
        $result.='</tr>';
        unset($row);
    }
    $result.='</tbody>';
    $result .= '</table>';

    return $result;
}

// CONVIERTE UN ARRAY A NUMERICO (PSEUDO-EQUIVALENTE A mysql_fetch_row)
function toArrayNumerico($query) {
    $array = array();
    $fila = $col = 0;

    foreach ($query as $row) {
        $col = 0;
        foreach ($row as $key => $value) {
            $array[$fila][$col] = $value;
            $col++;
        }
        $fila++;
    }
    return $array;
}

/* FUNCION PARA IMPRIMIR DATOS DE UN ARRAY CON FORMATO ENTENDIBLE PARA HUMANOS */

function print_p($lista) {
    print("<pre>" . print_r($lista, true) . "</pre>");
}

//CONVIERTE UNA CADENA QUE CONTIENE CARACTERES CODIFICADOS COMO  http://www.e-planning.net/es/soporte/codificacion_caracteres_en_url.html
//a codigo ASCII (Utilizado con el envio via url)
function hextoascii($String) {
    //%23Juan%23Augusto%23Paulino%20Saldaña

    $String = ltrim(rtrim($String));
    $Cadena = explode('%', "%20".$String);
    $String = ltrim(rtrim(""));;
    for ($i = 0; $i < count($Cadena); $i++) {

//        if (is_numeric(substr($Cadena[$i], 0, 2))) {
        $String = $String . hex2bin(substr($Cadena[$i], 0, 2)) . substr($Cadena[$i], 2);
//        } else {
//            $String = $String . $Cadena[$i];
//        }
    }
    return ltrim(rtrim($String));
}


//Convertir fechas en Marcas de Tiempo Unix para comparaciones - jvinceso probando
function datetounix($fecha_operar,$separator_date){
    // separamos los valores de la fecha con la que queremos operar
    // la fecha debe llegar en formato dia mes año
    list($dia,$mes,$anio) = explode('/',$fecha_operar); //separator_date '-'
    // almacenamos el valor unix en $fecha_unix
    $fecha_unix = mktime(0,0,0,$dia,$mes,$anio);
    return $fecha_unix;
}

function unixtodate($unix){
    $fecha_human = date( 'd/m/Y',$unix ); 
    return $fecha_human;
}
/**
    * Humanize by delta.
    *
    * @time the unix timestamp 
    * @return the human time text since time 
*/
function timeago($time) {
    $delta = time() - $time;

    if ($delta < 1 * MINUTE)
    {
        return $delta == 1 ? "en este momento" : "hace " . $delta . " segundos ";
    }
    if ($delta < 2 * MINUTE)
    {
        return "hace un minuto";
    }
    if ($delta < 45 * MINUTE)
    {
        return "hace " . floor($delta / MINUTE) . " minutos";
    }
    if ($delta < 90 * MINUTE)
    {
        return "hace una hora";
    }
    if ($delta < 24 * HOUR)
    {
        return "hace " . floor($delta / HOUR) . " horas";
    }
    if ($delta < 48 * HOUR)
    {
        return "ayer";
    }
    if ($delta < 30 * DAY)
    {
        return "hace " . floor($delta / DAY) . " dias";
    }
    if ($delta < 12 * MONTH)
    {
        $months = floor($delta / DAY / 30);
        return $months <= 1 ? "el mes pasado" : "hace " . $months . " meses";
    }
    else
    {
        $years = floor($delta / DAY / 365);
        return $years <= 1 ? "el a&ntilde;o pasado" : "hace " . $years . " a&ntilde;os";
    }

}
?>
