<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Persona extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->cargas->_validaracceso();
        $this->load->model('mantenedor/persona_model','objPersona');
        $this->load->model('mantenedor/usuario_model','objUsuario');
    }

    function index() {
        // $data['listarPersonaNatural'] = $this->persona_model->da_listarPersona('qry_personaN');
        // $data['listarDepartamento'] = $this->persona_model->dblistardepartamento();
        $data['main_content'] = 'mantenedor/persona/panel_view';
        $data['titulo'] = 'Registro de Persona';
        $this->load->view('dashboard/template', $data);
    }

    function registrar() {
        $respuesta = 1;
        $this->objPersona->setApellidoPaterno( $this->input->post('txtapepaterno') );
        $this->objPersona->setApellidoMaterno( $this->input->post('txtapematerno') );
        $this->objPersona->setNombres( $this->input->post('txtnombre') );

        if ( $this->objPersona->da_registrar() ) {
            $this->objUsuario->setCodigoPersona( $this->objPersona->getCodigo() );
            $this->objUsuario->setUserName( $this->input->post('txtuserName') );
            $this->objUsuario->setPassword( $this->input->post('txtpassword') );
            $this->objUsuario->setTipo( $this->input->post('cboUserTipo') );
            if ( !$this->objUsuario->da_registrar( ) )
                $respuesta = 3;
        } else {
            $respuesta = 0;
        }
        echo $respuesta;
    }
}
