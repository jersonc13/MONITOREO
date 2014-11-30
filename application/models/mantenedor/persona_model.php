<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Persona_model extends CI_Model {

    private $nPerId = 0;
    private $cPerApellidoPaterno = '';
    private $cPerApellidoMaterno = '';
    private $cPerNombres = '';
    private $bPerEstado = 0;
    private $cPerMail = 0;
    private $fPerFechaRegistro = '1979/08/13';

    public function setMail($cPerMail) {
        $this->cPerMail = $cPerMail;
    }

    public function setApellidoPaterno($cPerApellidoPaterno) {
        $this->cPerApellidoPaterno = $cPerApellidoPaterno;
    }

    public function setApellidoMaterno($cPerApellidoMaterno) {
        $this->cPerApellidoMaterno = $cPerApellidoMaterno;
    }

    public function setNombres($cPerNombres) {
        $this->cPerNombres = $cPerNombres;
    }

    public function setEstado($bPerEstado) {
        $this->bPerEstado = $bPerEstado;
    }

    public function getCodigo() {
        return $this->nPerId;
    }

    public function da_registrar() {

        // $this->adampt->Liberar();
        $this->adampt->setParam($this->cPerApellidoPaterno);
        $this->adampt->setParam($this->cPerApellidoMaterno);
        $this->adampt->setParam($this->cPerNombres);
        $this->adampt->setParam($this->cPerMail);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_per.USP_PER_I_PERSONA');
        $result = $this->adampt->ejecuta();
        $this->nPerId = $this->adampt->getParamOut1();
        return $this->adampt->getParamOut1();
    }

    function dblistarpersona($accion, $criterio) {
        $this->adampt->setParam($accion);
        $this->adampt->setParam($criterio);
        $query = $this->adampt->consulta('shm_per.USP_PER_S_PERSONA');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    function dbregistrareditar($txtidper, $txtapellidopater, $txtapellidomater, $txtnombre, $txtemail, $cboestado) {
        $this->adampt->setParam($txtidper);
        $this->adampt->setParam($txtapellidopater);
        $this->adampt->setParam($txtapellidomater);
        $this->adampt->setParam($txtnombre);
        $this->adampt->setParam($txtemail);
        $this->adampt->setParam($cboestado);
        $this->adampt->setParamOut1();
        $this->adampt->prepara('shm_per.USP_PER_U_PERSONA');
        $result = $this->adampt->ejecuta();
        return $this->adampt->getParamOut1();
    }

}

/* End of file persona_model.php */
/* Location: ./application/models/mantenedor/persona_model.php */
?>