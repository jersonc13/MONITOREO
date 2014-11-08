<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Marca_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function dblistarmarca($tipo,$nidvalor) {
        $this->adampt->setParam($tipo);
        $this->adampt->setParam($nidvalor);
        $query = $this->adampt->consulta('shm_inc.USP_INC_S_MARCA');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    function dbregistrar($txtnombremarca) {
        $this->adampt->setParam($txtnombremarca);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_inc.USP_INC_I_MARCA');
        $result = $this->adampt->ejecuta();
        return $this->adampt->getParamOut1();
    }
    
    function dbregistrareditar($txtidmarca,$txtnombremarca,$cboestado) {
        $this->adampt->setParam($txtidmarca);
        $this->adampt->setParam($txtnombremarca);
        $this->adampt->setParam($cboestado);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_inc.USP_INC_U_MARCA');
        $result = $this->adampt->ejecuta();
        return $this->adampt->getParamOut1();
    }

}
