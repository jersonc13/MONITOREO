<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Recurso extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/recurso_model');
        $this->load->model('mantenedor/ambiente_model');
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
        $data['main_content'] = 'mantenedor/recurso/panel_view';
        $data['titulo'] = 'Recurso | Monitoreo';
        $data['listartipoRecurso'] = $this->recurso_model->dblistartiporecurso('qry_all', '1');
        $data['listarMarca'] = $this->marca_model->dblistarmarca('qry_all', '1');
        $data['listarAmbiente'] = $this->ambiente_model->dblistarambiente('qry_all', '1');
        $this->load->view('dashboard/template', $data);
    }

    function registrar() {

        $cbotiporecurso = $_POST['cbotiporecurso'];
        $txtcodigopatrimonial = $_POST['txtcodigopatrimonial'];
        $txtserie = $_POST['txtserie'];
        $cbomarca = $_POST['cbomarca'];
        $txtmodelo = $_POST['txtmodelo'];
        $cboambiente = $_POST['cboambiente'];
        $txtfechacompra = $_POST['txtfechacompra'];
        $txtfechagarantia = $_POST['txtfechagarantia'];
        $txtcaracteristicas = $_POST['txtcaracteristicas'];
        $txtobservaciones = $_POST['txtobservaciones'];
        $txtfechavida = $_POST['txtfechavida'];
        $txtruta = $_POST['txtruta'];
        $txthost = $_POST['txthost'];
        $txtip = $_POST['txtip'];
        $validar = $this->recurso_model->dbregistrar($cbotiporecurso, $txtcodigopatrimonial, $txtserie, $cbomarca, $txtmodelo, $cboambiente, $txtfechacompra, $txtfechagarantia, $txtcaracteristicas, $txtobservaciones, $txtfechavida, $txtruta, $txthost, $txtip);

        if ($validar) {
            echo "1";
        } else {
            echo "0";
        }
    }

    function listarRecurso() {

        $data['listarRecurso'] = $this->recurso_model->dblistarrecurso('qry_all', '1');
        $this->load->view('mantenedor/recurso/qry_view', $data);
    }

    function editarRecurso() {
        $nidvalor = $_POST['nidvalor'];
        $data['listartipoRecurso'] = $this->recurso_model->dblistartiporecurso('qry_all', '1');
        $data['listarMarca'] = $this->marca_model->dblistarmarca('qry_all', '1');
        $data['listarAmbiente'] = $this->ambiente_model->dblistarambiente('qry_all', '1');
        $data['editarRecurso'] = $this->recurso_model->dblistarrecurso('qry_id', $nidvalor);
        $this->load->view('mantenedor/recurso/upd_view', $data);
    }

    function guardarEditar() {

        $validar = $this->recurso_model->dbregistrareditar($_POST['txtidrecurso'], $_POST['cbotiporecurso'], $_POST['txtcodigopat'], $_POST['txtserie'], $_POST['cbomarca'], $_POST['txtmodelo'], $_POST['cboambiente'], $_POST['txtfechacompra'], $_POST['txtfechagarantia'], $_POST['txtcaracteristicas'], $_POST['txtobservaciones'], $_POST['txtfechavida'], $_POST['txtruta'], $_POST['txthost'], $_POST['txtip'], $_POST['cboestado']);

        if ($validar) {
            echo "1";
        } else {
            echo "0";
        }
    }

}
