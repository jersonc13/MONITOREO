<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    private $nUsuId = 0;
    private $nPerId = 0;
    private $cUsuNick = '';
    private $cUsuClave = '';
    private $bUsuEstado = 0;
    private $nUsuTipo = 0;

    public function setCodigoPersona($nPerId) {
        $this->nPerId = $nPerId;
    }

    public function setUserName($cUsuNick) {
        $this->cUsuNick = $cUsuNick;
    }

    public function setPassword($cUsuClave) {
        $this->cUsuClave = $cUsuClave;
    }

    public function setTipo($nUsuTipo) {
        $this->nUsuTipo = $nUsuTipo;
    }

    public function da_registrar() {

        // $this->adampt->Liberar();
        $this->adampt->setParam($this->nPerId);
        $this->adampt->setParam($this->cUsuNick);
        $this->adampt->setParam($this->cUsuClave);
        $this->adampt->setParam($this->nUsuTipo);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_seg.USP_USU_I_USUARIO');
        $result = $this->adampt->ejecuta();
        $this->nUsuId = $this->adampt->getParamOut1();
        return $this->adampt->getParamOut1();
    }

}

/* End of file usuario_model.php */
/* Location: ./application/models/mantenedor/usuario_model.php */ 