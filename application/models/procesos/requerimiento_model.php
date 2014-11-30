<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requerimiento_model extends CI_Model {

	
	public function asignarAtencion($nPerId,$nPerIdSolicita,$nReqId,$observa) {
		$this->adampt->setParam($nReqId);
		$this->adampt->setParam($nPerIdSolicita);
		$this->adampt->setParam($nPerId);
		$this->adampt->setParam($observa);
		$this->adampt->setParamOut1();
		$this->adampt->prepara('shm_inc.USP_REQ_I_REQUERIMIENTO_ATENCION');
		$result = $this->adampt->ejecuta();
		return $this->adampt->getParamOut1();
	}
	public function solucionar($id,$observa) {
		$this->adampt->setParam($id);
		$this->adampt->setParam($observa);
		$this->adampt->setParamOut1();
		$this->adampt->prepara('shm_inc.USP_REQ_I_REQUERIMIENTO_ATENCION_SOLUCION');
		$result = $this->adampt->ejecuta();
		return $this->adampt->getParamOut1();
	}

	public function TomarCaso($id,$estado){
		$this->adampt->setParam($id);
		$this->adampt->setParam($estado);
		$this->adampt->setParamOut1();
		$this->adampt->prepara('shm_inc.USP_REQ_U_REQUERIMIENTO_ATENCION');
		$result = $this->adampt->ejecuta();
		return $this->adampt->getParamOut1();
	}
}

/* End of file requerimiento_model.php */
/* Location: ./application/models/procesos/requerimiento_model.php */