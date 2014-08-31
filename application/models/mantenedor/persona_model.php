<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persona_model extends CI_Model {
	private $nPerId = 0;
	private $cPerApellidoPaterno = '';
	private $cPerApellidoMaterno = '';
	private $cPerNombres = '';
	private $bPerEstado = 0;
	private $fPerFechaRegistro = '1979/08/13';

	public function setApellidoPaterno( $cPerApellidoPaterno ){
		$this->cPerApellidoPaterno = $cPerApellidoPaterno;
	}
	public function setApellidoMaterno( $cPerApellidoMaterno ){
		$this->cPerApellidoMaterno = $cPerApellidoMaterno;
	}
	public function setNombres( $cPerNombres ){
		$this->cPerNombres = $cPerNombres;
	}
	public function setEstado( $bPerEstado ){
		$this->bPerEstado = $bPerEstado;
	}

	public function getCodigo(){ return $this->nPerId; }

	public function da_registrar(){
		
		// $this->adampt->Liberar();
		$this->adampt->setParam( $this->cPerApellidoPaterno );
		$this->adampt->setParam( $this->cPerApellidoMaterno );
		$this->adampt->setParam( $this->cPerNombres );
		$this->adampt->setParamOut1();
        $this->adampt->prepara('shm_per.USP_PER_I_PERSONA');
        $result = $this->adampt->ejecuta();	
        $this->nPerId = $this->adampt->getParamOut1();
		return $this->adampt->getParamOut1();
	}
}

/* End of file persona_model.php */
/* Location: ./application/models/mantenedor/persona_model.php */
 ?>