<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function dblistarUsuarios($accion, $criterio) {
        $this->adampt->setParam($accion);
        $this->adampt->setParam($criterio);
        $query = $this->adampt->consulta('shm_seg.USP_SEG_S_USUARIOS');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    function dbregistrareditar($txtidusuarios, $txtcusunick, $cboestado) {
        $this->adampt->setParam($txtidusuarios);
        $this->adampt->setParam($txtcusunick);
        $this->adampt->setParam($cboestado);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_seg.USP_SEG_U_USUARIOS');
        $result = $this->adampt->ejecuta();
        return $this->adampt->getParamOut1();
    }

}

?>