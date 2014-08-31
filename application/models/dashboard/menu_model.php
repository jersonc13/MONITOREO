<?php

class Menu_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_cargaropcionpadre() {
        $this->adampt->setParam($this->session->userdata('IDUsu'));
        $this->adampt->setParam('aplxusu');
        $query = $this->adampt->consulta('shm_seg.USP_SEG_S_APLICACION_USUARIO');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    function da_cargaropcionhijo() {
        $this->adampt->setParam($this->session->userdata('IDUsu'));
        $this->adampt->setParam('objxusu');
        $query = $this->adampt->consulta('shm_seg.USP_SEG_S_APLICACION_USUARIO');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

}
