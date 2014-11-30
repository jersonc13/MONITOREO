<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        $this->load->view('login_view');
    }

    public function enviardatos() {
        $txt_usuario = trim($_POST['txt_usuario']);
        $txt_contrasena = trim($_POST['txt_contrasena']);

        $result = $this->login_model->da_enviardatos($txt_usuario, $txt_contrasena);
        if ($result) {
            $sesion_data = array(
                'esta_logeado' => true,
                'IDUsu' => $result[0]['nUsuId'],
                'nick' => $result[0]['cUsuNick'],
                'IDPer' => $result[0]['nPerId'],
                'Tipo' => $result[0]['nUsuTipo'],
                'Apellidos' => $result[0]['cPerApellidoPaterno'] . ' ' . $result[0]['cPerApellidoMaterno'],
                'Nombres' => $result[0]['cPerNombres'],
            );

            $this->session->set_userdata($sesion_data);


            echo 1;
        } else {

            echo 0;
        }
    }

    function redireccionar() {
        $this->load->view("login_view");
    }

    function logout() {
        $this->session->sess_destroy();
        redirect("login");
    }

}
