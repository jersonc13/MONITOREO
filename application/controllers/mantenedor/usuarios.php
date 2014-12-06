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
        $logeado = $this->session->userdata('esta_logeado');
        $nidusuario = $this->session->userdata('IDUsu');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['listarUsuarios'] = $this->usuarios_model->dblistarUsuarios('qry_all', '1');
//        $data['listarRoles'] = $this->usuarios_model->da_listarRoles();
        $data['main_content'] = 'mantenedor/usuarios/panel_view';
        $data['titulo'] = 'Usuarios | SIM';
        $this->load->view('dashboard/template', $data);
    }

    function listarUsuarios() {

        $data['listarUsuarios'] = $this->usuarios_model->dblistarUsuarios('qry_all', '1');
        $this->load->view('mantenedor/usuarios/qry_view', $data);
    }

    function registrarUsuarios() {

        $validar = $this->usuarios_model->da_registrarUsuarios($_POST['txtdniruc'], $_POST['txtusuario'], $_POST['txtcontrasena'], $_POST['cbo_tipousuarios']);

        if ($validar) {
            echo $validar['msg'];
        } else {
            echo $validar['msg'];
        }
    }

    function editarUsuarios() {
        $nidvalor = $_POST['nidvalor'];
        $data['editarUsuario'] = $this->usuarios_model->dblistarUsuarios('qry_id', $nidvalor);
        $this->load->view('mantenedor/usuarios/upd_view', $data);
    }
    
    function editarContrasena() {
        $nidvalor = $_POST['nidvalor'];
        $data['idusuario'] = $nidvalor;
        $this->load->view('mantenedor/usuarios/updcontrasena_view', $data);
    }

    function guardarEditar() {

        $validar = $this->usuarios_model->dbregistrareditar($_POST['txtidusuarios'], $_POST['txtcusunick'], $_POST['cboestado']);

        if ($validar) {
            echo "1";
        } else {
            echo "0";
        }
    }
    
    function guardarEditarContra() {

        $validar = $this->usuarios_model->dbregistrareditarcontra($_POST['txtidusuarios'], $_POST['txtcontrasena']);

        if ($validar) {
            echo "1";
        } else {
            echo "0";
        }
    }

}
