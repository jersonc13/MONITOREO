<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cargos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/cargos_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('ssnidusuario');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['listarCargos'] = $this->cargos_model->da_listarCargos();
        $data['main_content'] = 'mantenedor/cargos/panel_view';
        $data['titulo'] = 'Cargos | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function registrarAreas() {

        $validar = $this->cargos_model->da_registrarAreas($_POST['txtAreas'], $_POST['txtAlias'], $_POST['cbo_dependencia']);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function actualizarArea() {

        $txte_nidarea = $_POST['txte_nidarea'];
        $txte_area = $_POST['txte_area'];
        $txte_alias = $_POST['txte_alias'];

        $validar = $this->area_model->dbactualizarArea($txte_nidarea, $txte_area, $txte_alias);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function listarCargos() {

        $data['listarCargos'] = $this->cargos_model->da_listarCargos();
        $this->load->view('mantenedor/areas/qry_view', $data);
    }

    function editarArea() {
        $nidarea = $_POST['nidarea'];
        $data['editarArea'] = $this->cargos_model->dbeditarArea($nidarea);
        $this->load->view('mante/area/upd_view', $data);
    }

    function estadoAreas() {
        $nidarea = $_POST['nidareas'];
        $result = $this->cargos_model->da_estadoAreas($nidarea);

        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }
    
    function buscarAreas() {
        $txtbuscarArea = $_POST['txtbuscarArea'];
        $data['listarAreaxId'] = $this->cargos_model->dblistarareaxid($txtbuscarArea);
        $data['listarAreas'] = $this->cargos_model->da_listarAreas();
        $this->load->view('mantenedor/areas/upd_view', $data);
    }

}
