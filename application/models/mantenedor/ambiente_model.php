<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ambiente_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function dblistarambiente($tipo, $nidvalor) {
        $this->adampt->setParam($tipo);
        $this->adampt->setParam($nidvalor);
        $query = $this->adampt->consulta('shm_inc.USP_INC_S_AMBIENTE');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    function dbregistrar($txttipoambiente, $txtambiente, $txtdescripcion) {
        $this->adampt->setParam($txttipoambiente);
        $this->adampt->setParam($txtambiente);
        $this->adampt->setParam($txtdescripcion);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_inc.USP_INC_I_AMBIENTE');
        $result = $this->adampt->ejecuta();
        return $this->adampt->getParamOut1();
    }

    function dbregistrareditar($txtidambiente, $cbotipoambiente, $txtnombreambiente, $txtnombredescripcion, $cboestado) {
        $this->adampt->setParam($txtidambiente);
        $this->adampt->setParam($cbotipoambiente);
        $this->adampt->setParam($txtnombreambiente);
        $this->adampt->setParam($txtnombredescripcion);
        $this->adampt->setParam($cboestado);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_inc.USP_INC_U_AMBIENTE');
        $result = $this->adampt->ejecuta();
        return $this->adampt->getParamOut1();
    }

}
