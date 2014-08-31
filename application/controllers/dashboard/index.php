<?php

if (!defined('BASEPATH'))
    exit('No esta permitido el acceso');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('dashboard/menu_model');
        $this->_Esta_logeado();
    }

    public function index() {
        $data['main_content'] = 'dashboard/cuerpo';
        $data['titulo'] = 'Panel de Administración (P.A)';
        $data['cargaropcionpadre'] = $this->menu_model->da_cargaropcionpadre();
        $data['cargaropcionhijo'] = $this->menu_model->da_cargaropcionhijo();
//        print_r($data['cargaropcionpadre']);
//        print_r($data['cargaropcionhijo']);
//        exit();
        $this->load->view('dashboard/template', $data);
    }

    function _Esta_logeado() {
        $esta_logeado = $this->session->userdata('esta_logeado');
        $nPerID = $this->session->userdata('IDPer');

        if ($esta_logeado != true OR $nPerID = '') {
            redirect('../login');
        }
    }

}
