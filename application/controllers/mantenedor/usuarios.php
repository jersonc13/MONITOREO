<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mantenedor/usuarios_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('ssnidusuario');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['listarUsuarios'] = $this->usuarios_model->da_listarUsuarios();
        $data['listarRoles'] = $this->usuarios_model->da_listarRoles();
        $data['main_content'] = 'mantenedor/usuarios/panel_view';
        $data['titulo'] = 'Usuarios | SIM';
        $this->load->view('master/plantilla_view', $data);
    }

    function registrarUsuarios() {

        $validar = $this->usuarios_model->da_registrarUsuarios($_POST['txtdniruc'], $_POST['txtusuario'], $_POST['txtcontrasena'], $_POST['cbo_tipousuarios']);

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

    function listarUsuarios() {

        $data['listarUsuarios'] = $this->usuarios_model->da_listarUsuarios();
        $this->load->view('mantenedor/usuarios/qry_view', $data);
    }

    function editarArea() {
        $nidarea = $_POST['nidarea'];
        $data['editarArea'] = $this->usuarios_model->dbeditarArea($nidarea);
        $this->load->view('mante/area/upd_view', $data);
    }

    function estadoAreas() {
        $nidarea = $_POST['nidusuarios'];
        $result = $this->usuarios_model->da_estadoAreas($nidarea);

        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function buscarAreas() {
        $txtbuscarArea = $_POST['txtbuscarArea'];
        $data['listarAreaxId'] = $this->usuarios_model->dblistarareaxid($txtbuscarArea);
        $data['listarAreas'] = $this->usuarios_model->da_listarAreas();
        $this->load->view('mantenedor/usuarios/upd_view', $data);
    }

}
