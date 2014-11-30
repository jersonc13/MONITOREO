<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ambiente extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/ambiente_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('esta_logeado');
        $nidusuario = $this->session->userdata('IDUsu');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['main_content'] = 'mantenedor/ambiente/panel_view';
        $data['titulo'] = 'Ambiente | Monitoreo';
        $this->load->view('dashboard/template', $data);
    }

    function registrar() {

        $validar = $this->ambiente_model->dbregistrar($_POST['txttipoambiente'],$_POST['txtambiente'],$_POST['txtdescripcion']);

        if ($validar) {
            echo "1";
        } else {
            echo "0";
        }
    }

    function listarAmbiente() {

        $data['listarAmbiente'] = $this->ambiente_model->dblistarambiente('qry_all', '1');
        $this->load->view('mantenedor/ambiente/qry_view', $data);
    }

    function editarAmbiente() {
        $nidvalor = $_POST['nidvalor'];
        $data['editarAmbiente'] = $this->ambiente_model->dblistarambiente('qry_id', $nidvalor);
        $this->load->view('mantenedor/ambiente/upd_view', $data);
    }
    
    function guardarEditar() {

        $validar = $this->ambiente_model->dbregistrareditar($_POST['txtidambiente'], $_POST['cbotipoambiente'], $_POST['txtnombreambiente'],$_POST['txtnombredescripcion'], $_POST['cboestado']);

        if ($validar) {
            echo "1";
        } else {
            echo "0";
        }
    }

}
