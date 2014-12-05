<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Repincidencia extends CI_Controller {

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
        $this->load->view('reportes/cantidad_casos');
    }
    function ver() {

        $this->load->library('PHPJasperXML');
        //display errors should be off in the php.ini file
        // ini_set('display_errors', 0);
         // echo FCPATH."report/report1.jrxml";
         // exit();
        //setting the path to the created jrxml file
        $xml =  @simplexml_load_file(FCPATH."report/report1.jrxml");
        $rs = $this->inbox_model->reportes('requerimiento');
        // print_p( $rs ); exit();
        $PHPJasperXML = new PHPJasperXML();
        // $PHPJasperXML->debugsql=true;
        // $PHPJasperXML->arrayParameter=array("parameter1"=>1);
        $PHPJasperXML->xml_dismantle($xml);

        // print_p($PHPJasperXML);
        // exit();
        
        $PHPJasperXML->dataToArray($rs);
        // $PHPJasperXML->parametros();
        // print "<pre>".print_r($PHPJasperXML,TRUE)."</pre>";
        $PHPJasperXML->outpage("I");
        // show_error();
         
         
    }

}
