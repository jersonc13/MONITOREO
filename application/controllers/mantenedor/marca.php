<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Marca extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/marca_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('esta_logeado');
        $nidusuario = $this->session->userdata('IDUsu');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['main_content'] = 'mantenedor/marca/panel_view';
        $data['titulo'] = 'Marca | Monitoreo';
        $this->load->view('dashboard/template', $data);
    }

    function registrar() {

        $validar = $this->marca_model->dbregistrar($_POST['txtnombremarca']);

        if ($validar) {
            echo "1";
        } else {
            echo "0";
        }
    }

    function listarMarca() {

        $data['listarMarca'] = $this->marca_model->dblistarmarca('1');
        $this->load->view('mantenedor/marca/qry_view', $data);
    }

}
