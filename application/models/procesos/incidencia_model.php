<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incidencia_model extends CI_Model {
	private $_cAccion = 'nuevos';

	public function set_accion( $accion = 'nuevos' ){
		$this->_cAccion = $accion;
	}
	public function listar(){
		$this->adampt->setParam( $this->_cAccion );
		$query = $this->adampt->consulta('shm_inc.USP_INC_S_INCIDENCIAS');
		if (count($query) > 0) {
			return $query;
		} else {
			return null;
		}		
	}
	public function buscarTrabajador( $accion, $criterio){
		$this->adampt->setParam( $accion );
		$this->adampt->setParam( $criterio );
		$query = $this->adampt->consulta('shm_inc.USP_REQ_S_TRABAJADOR');
		if (count($query) > 0) {
			return $query;
		} else {
			return null;
		}	
	}


	public function incidenciasReport( $ip, $ini, $fin){
	    
	    $this->adampt->setParam( $ip );
	    // $this->adampt->setParam( $estado );
	    $this->adampt->setParam( $ini );
	    $this->adampt->setParam( $fin );
	    $query = $this->adampt->consulta("shm_inc.USP_INC_S_REPORTE_INCIDENCIAS");
	    if (count($query) > 0) {
	        return $query;
	    } else {
	        return null;
	    }
	}

}

/* End of file incidencia_model.php */
/* Location: ./application/models/procesos/incidencia_model.php */