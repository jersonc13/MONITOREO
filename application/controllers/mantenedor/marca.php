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

    function guardarEditar() {

        $validar = $this->marca_model->dbregistrareditar($_POST['txtidmarca'], $_POST['txtnombremarca'], $_POST['cboestado']);

        if ($validar) {
            echo "1";
        } else {
            echo "0";
        }
    }

    function viewMarca() {

        $data['listarMarca'] = $this->marca_model->dblistarmarca('qry_all', '1');
        $this->load->view('mantenedor/marca/ins_view', $data);
    }

    function listarMarca() {

        $data['listarMarca'] = $this->marca_model->dblistarmarca('qry_all', '1');
        $this->load->view('mantenedor/marca/qry_view', $data);
    }

    function editarMarca() {
        $nidvalor = $_POST['nidvalor'];
        $data['editarMarca'] = $this->marca_model->dblistarmarca('qry_id', $nidvalor);
        $this->load->view('mantenedor/marca/upd_view', $data);
    }

}
