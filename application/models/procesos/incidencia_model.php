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
}

/* End of file incidencia_model.php */
/* Location: ./application/models/procesos/incidencia_model.php */