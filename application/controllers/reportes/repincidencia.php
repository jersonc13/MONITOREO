<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Repincidencia extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('mailbox/inbox_model');
        $this->load->model('procesos/recurso_model');
        $this->load->model('procesos/incidencia_model');
        $this->load->library('PHPJasperXML');
    }

    function _validaracceso() {
        $logeado = $this->session->userdata('esta_logeado');
        $nidusuario = $this->session->userdata('IDUsu');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {
        $data['main_content'] = 'reportes/cantidad_casos';
        $data['titulo'] = 'INBOX | SIM';
        $data['bandeja_count'] = $this->inbox_model->da_bandejacount();
        $data['resultado'] = $this->inbox_model->da_bandejamail();
        $this->load->view( 'dashboard/template', $data );
    }


    function vistaIncidenciasRPT( $nombre,$estado, $fechaIni, $fechafin ){
        $ip = strtoupper(convertirhexa($estado));

        $xml =  @simplexml_load_file(FCPATH."report/incidencias.jrxml");
        // print_p($ip);
        $nombre_user = $this->session->userdata('Nombres');
        $apellido_user = $this->session->userdata('Apellidos');
        $rs = $this->incidencia_model->incidenciasReport($ip,$fechaIni,$fechafin);
        $PHPJasperXML = new PHPJasperXML();
        // $PHPJasperXML->debugsql=true;
        $PHPJasperXML->arrayParameter=array("NombrePc"=>$nombre,"UsuarioEmisor"=>$apellido_user.' '.$nombre_user);
        $PHPJasperXML->xml_dismantle($xml);

        // print_p($rs);
        // exit();
        
        $PHPJasperXML->dataToArray($rs);
        // $PHPJasperXML->parametros();
        // print "<pre>".print_r($PHPJasperXML,TRUE)."</pre>";
        $PHPJasperXML->outpage("I");
        // print_p( $fechaIni );
        // print_p( $fechafin );

    }
    function vistaIncidencias( $vista ){
        $data['direccionesIP'] = $this->recurso_model->listarIps();
        // print_p( $data );exit();
        $this->load->view('reportes/INCIDENCIA_REP',$data);
    }
    function verip(){
        $data = $this->recurso_model->obtenerips();
        print_p( long2ip(substr("0X".'C0A87E25-FFFF-0000-0000-000000000000',0,10) ) );
        // print_p($data);
        // exit();
        foreach ($data as $fila) {
            // print_p( convertirhexa($fila['ClientIP']) );
            print_p( long2ip(substr("0X".$fila['ClientIP'],0,10)));

        }
    }


    function verAtendidos($fechaIni, $fechafin,$estado) {

        //display errors should be off in the php.ini file
        // ini_set('display_errors', 0);
         // echo FCPATH."report/report1.jrxml";
         // exit();
        //setting the path to the created jrxml file
        $xml =  @simplexml_load_file(FCPATH."report/report1.jrxml");
        $rs = $this->inbox_model->requerimientosAtendidos('requerimiento',$fechaIni,$fechafin, $estado);


        $nombre_user = $this->session->userdata('Nombres');
        $apellido_user = $this->session->userdata('Apellidos');
        // print_p( $rs ); exit();
        $PHPJasperXML = new PHPJasperXML();
        $PHPJasperXML->arrayParameter=array("UsuarioEmisor"=>$apellido_user.' '.$nombre_user);
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
