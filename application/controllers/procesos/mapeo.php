<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mapeo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('procesos/mapeo_model');
        $this->load->model('mantenedor/recurso_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('esta_logeado');
        $nidusuario = $this->session->userdata('IDUsu');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['main_content'] = 'procesos/mapeo/panel_view';
        $data['listarMapeo'] = $this->mapeo_model->dblistarmapeo('qry_all', '1');
        $data['listarRecurso'] = $this->recurso_model->dblistarrecurso('qry_ntreid', '2');
        
        $data['titulo'] = 'Mapeo | Monitoreo';
        $this->load->view('dashboard/template', $data);
    }

    function listarclient() {
        
        $nidvalor = $_POST['cidvalor'];
        $host = $_POST['host'];
        $data['direccionip'] = $nidvalor;
        $data['nombre'] = $host;
        $data['listarClient'] = $this->mapeo_model->dblistarmapeo('qry_id', $nidvalor);
        $this->load->view('procesos/mapeo/qry_view', $data);
    }

    function guardarEditar() {

        $validar = $this->ambiente_model->dbregistrareditar($_POST['txtidambiente'], $_POST['cbotipoambiente'], $_POST['txtnombreambiente'], $_POST['txtnombredescripcion'], $_POST['cboestado']);

        if ($validar) {
            echo "1";
        } else {
            echo "0";
        }
    }

}
