<?php

if (!defined('BASEPATH'))
    exit('No esta permitido el acceso');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mailbox/inbox_model');
        $this->_Esta_logeado();
    }

    public function index() {
        $data['bandeja_count'] = $this->inbox_model->da_bandejacount();
        $data['main_content'] = 'dashboard/cuerpo';
        $data['titulo'] = 'Panel de Administración (P.A)';
        $this->load->view('dashboard/template', $data);
    }

    function _Esta_logeado() {
        $esta_logeado = $this->session->userdata('esta_logeado');
        $nPerID = $this->session->userdata('IDPer');

        if ($esta_logeado != true OR $nPerID = '') {
            redirect('../login');
        }
    }


    function verificarContadores(){
        // $data['bandeja_count']         = $this->inbox_model->da_bandejacount();
        $data['bandeja_count']         = $this->inbox_model->da_bandejacount();
        $data['cargarincidencias']     = $this->cargas->cargarincidencias();
        $data['cargarincidenciasasig'] = $this->cargas->cargarincidenciasasig();
        echo json_encode( $data );
    }

}
