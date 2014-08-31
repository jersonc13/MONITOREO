<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Permisos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function dblistarpersonas($txtPersona) {
        $this->adampt->setParam($txtPersona);
        $query = $this->adampt->consulta('shm_seg.USP_SEG_S_APLICACION_USUARIO');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    function da_cargaropcionp() {
        $this->adampt->setParam($this->session->userdata('IDUsu'));
        $this->adampt->setParam('aplxall');
        $query = $this->adampt->consulta('shm_seg.USP_SEG_S_APLICACION_USUARIO');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    function da_cargaropcionh() {
        $this->adampt->setParam($this->session->userdata('IDUsu'));
        $this->adampt->setParam('objxall');
        $query = $this->adampt->consulta('shm_seg.USP_SEG_S_APLICACION_USUARIO');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

}
