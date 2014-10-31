<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inbox_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function da_registrarmail($txtemailreceptor,$txtasunto,$txtcontenido) {
        $this->adampt->setParam($txtemailreceptor);
        $this->adampt->setParam($txtasunto);
        $this->adampt->setParam($txtcontenido);
        $this->adampt->setParam($this->session->userdata('IDPer'));
        $this->adampt->setParam(1);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_inc.USP_INC_I_REQUISITO');
        $result = $this->adampt->ejecuta();
        if($result){
            return $this->adampt->getParamOut1();
        }else{
            return $this->adampt->getParamOut1();
        }
        
    }
    function da_eliminarmail($id) {
        $this->adampt->setParam($id);
        $query = $this->adampt->consulta("shm_inc.USP_INC_U_REQUISITO_eliminar");
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }
    
    function da_bandejamail() {
        $this->adampt->setParam($this->session->userdata('IDPer'));
        $query = $this->adampt->consulta("shm_inc.USP_INC_S_REQUISITO");
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }
    
    function da_enviadosmail() {
        $this->adampt->setParam($this->session->userdata('IDPer'));
        $query = $this->adampt->consulta("shm_inc.USP_INC_S_REQUISITO_enviados");
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }
    function da_eliminadosmail() {
        $this->adampt->setParam($this->session->userdata('IDPer'));
        $query = $this->adampt->consulta("shm_inc.USP_INC_S_REQUISITO_eliminados");
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }
    
    function da_detalleemail($nidvalor) {
        $this->adampt->setParam($this->session->userdata('IDPer'));
        $this->adampt->setParam($nidvalor);
        $query = $this->adampt->consulta("shm_inc.USP_INC_S_REQUISITO_detalle");
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }
    
    function da_bandejacount() {
        $this->adampt->setParam($this->session->userdata('IDPer'));
        $query = $this->adampt->consulta("shm_inc.USP_INC_S_REQUISITO_count");
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }
    

}

?>