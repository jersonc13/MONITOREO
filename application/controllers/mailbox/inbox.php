<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inbox extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mailbox/inbox_model');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('esta_logeado');
        $nidusuario = $this->session->userdata('IDUsu');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['main_content'] = 'mailbox/inbox/panel_view';
        $data['titulo'] = 'INBOX | SIM';
        $data['bandeja_count'] = $this->inbox_model->da_bandejacount();
        $data['resultado'] = $this->inbox_model->da_bandejamail();
        $this->load->view('dashboard/template', $data);
    }

    function nuevoinbox() {
        $this->load->view('mailbox/inbox/nuevoinbox_view');
    }

    function bandejainbox() {
        $data['resultado'] = $this->inbox_model->da_bandejamail();
        $this->load->view('mailbox/inbox/bandeja_qry', $data);
    }

    function enviadosinbox() {
        $data['resultado'] = $this->inbox_model->da_enviadosmail();
        $this->load->view('mailbox/inbox/bandeja_qry', $data);
    }

    function enviarinbox() {
        $txtemailreceptor = $_POST['txtemailreceptor'];
        $txtasunto = $_POST['txtasunto'];
        $txtcontenido = $_POST['txtcontenido'];
        $result = $this->inbox_model->da_registrarmail($txtemailreceptor, $txtasunto, $txtcontenido);
        $this->load->view('mailbox/inbox/nuevoinbox_view');
    }

    function detallemensaje() {

        $data['result'] = $this->inbox_model->da_detalleemail($_POST['nidvalor']);
        $this->load->view('mailbox/inbox/bandejadetalle_qry', $data);
    }

}
