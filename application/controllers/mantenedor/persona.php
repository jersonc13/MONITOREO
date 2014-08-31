<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Persona extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->cargas->_validaracceso();
        $this->load->model('mantenedor/persona_model','objPersona');
    }

    function index() {
        // $data['listarPersonaNatural'] = $this->persona_model->da_listarPersona('qry_personaN');
        // $data['listarDepartamento'] = $this->persona_model->dblistardepartamento();
        $data['main_content'] = 'mantenedor/persona/panel_view';
        $data['titulo'] = 'Registro de Persona';
        $this->load->view('dashboard/template', $data);
    }

    function registrar() {
        $this->objPersona->setApellidoPaterno( $this->input->post('txtapepaterno') );
        $this->objPersona->setApellidoMaterno( $this->input->post('txtapematerno') );
        $this->objPersona->setNombres( $this->input->post('txtnombre') );

        if ( $this->objPersona->da_registrar() ) {
        } else {
            echo $validar['msg'];
        }
    }
}
