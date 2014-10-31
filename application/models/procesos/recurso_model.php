<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recurso_model extends CI_Model {

	public function listarTipos(){
		// $this->adampt->setParam( $this->_cAccion );
		$query = $this->adampt->consulta('shm_inc.USP_INC_S_TIPO_RECURSO');
		if (count($query) > 0) {
		    return $query;
		} else {
		    return null;
		}		
	}

}

/* End of file recurso_model.php */
/* Location: ./application/models/procesos/recurso_model.php */