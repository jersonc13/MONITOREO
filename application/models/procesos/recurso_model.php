<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recurso_model extends CI_Model {
    private $_cAccion = 'nuevos';
    private $_idPer = 0;
    public function set_accion( $accion = 'nuevos' ){
        $this->_cAccion = $accion;
    }   
    public function set_persona( $idPer = 0 ){
        $this->_idPer = $idPer;
    }   

	public function listarTipos(){
		// $this->adampt->setParam( $this->_cAccion );
		$query = $this->adampt->consulta('shm_inc.USP_INC_S_TIPO_RECURSO');
		if (count($query) > 0) {
		    return $query;
		} else {
		    return null;
		}		
	}
    public function registrar($nPerId,$tipo,$txtcontenido,$txtfecha) {
        $this->adampt->setParam($tipo);
        $this->adampt->setParam($txtfecha);
        $this->adampt->setParam($txtcontenido);
        $this->adampt->setParam($nPerId);
        $this->adampt->setParam($tipo);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_inc.USP_INC_I_REQUERIMIENTO');
        $result = $this->adampt->ejecuta();
        return $this->adampt->getParamOut1();
    }

    public function listar(){
        $this->adampt->setParam( $this->_cAccion );
        $this->adampt->setParam( $this->_idPer );
        // print_p($this->adampt);exit();
        $query = $this->adampt->consulta('shm_inc.USP_INC_S_REQUERIMIENTO');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }       
    }

    public function CambiarEstado($nRecId,$estado) {
        $this->adampt->setParam($nRecId);
        $this->adampt->setParam($estado);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_inc.USP_REQ_U_REQUERIMIENTO');
        $result = $this->adampt->ejecuta();
        return $this->adampt->getParamOut1();
    }
}

/* End of file recurso_model.php */
/* Location: ./application/models/procesos/recurso_model.php */