<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Recurso_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function dblistarrecurso($tipo, $nidvalor) {
        $this->adampt->setParam($tipo);
        $this->adampt->setParam($nidvalor);
        $query = $this->adampt->consulta('shm_inc.USP_INC_S_RECURSO');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    function dbregistrar($cbotiporecurso, $txtcodigopatrimonial, $txtserie, $cbomarca, $txtmodelo, $cboambiente, $txtfechacompra, $txtfechagarantia, $txtcaracteristicas, $txtobservaciones, $txtfechavida, $txtruta, $txthost, $txtip) {
        $this->adampt->setParam($cbotiporecurso);
        $this->adampt->setParam($txtcodigopatrimonial);
        $this->adampt->setParam($txtserie);
        $this->adampt->setParam($cbomarca);
        $this->adampt->setParam($txtmodelo);
        $this->adampt->setParam($cboambiente);
        $this->adampt->setParam($txtfechacompra);
        $this->adampt->setParam($txtfechagarantia);
        $this->adampt->setParam($txtcaracteristicas);
        $this->adampt->setParam($txtobservaciones);
        $this->adampt->setParam($txtfechavida);
        $this->adampt->setParam($txtruta);
        $this->adampt->setParam($txthost);
        $this->adampt->setParam($txtip);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_inc.USP_INC_I_RECURSO');
        $result = $this->adampt->ejecuta();
        return $this->adampt->getParamOut1();
    }

}
