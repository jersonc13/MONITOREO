<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Encuesta extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->_validaracceso();
        $this->load->model('mantenedor/encuesta_model');
    }
    
    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('ssnidusuario');              
        
        if ($logeado != true OR $nidusuario = null ) {
            redirect(URL_MAIN);
        }
    }
    
    function index() {
        $data['listarEmpresas'] = $this->encuesta_model->da_listarEmpresa();
        
        $data['main_content'] = 'mantenedor/encuesta/panel_view';                       
        $data['titulo'] = 'Encuesta | SIM';        
        $this->load->view('master/plantilla_view', $data);
        
    }
        
    function ingresarEncuesta() {
        
        $validar = $this->encuesta_model->da_ingresarEncuesta($_POST['cboEmpresa'],$_POST['txtEncuesta']);
        
        if ($validar){
            echo $validar['msg'];
        }else{
            echo $validar['msg'];
        }
    }
    
    function actualizarArea() {
        
        $txte_nidarea = $_POST['txte_nidarea'];
        $txte_area = $_POST['txte_area'];
        $txte_alias = $_POST['txte_alias'];
        
        $validar = $this->area_model->dbactualizarArea($txte_nidarea,$txte_area,$txte_alias);
        
        if ($validar){
            echo $validar['msg'];
        }else{
            echo $validar['msg'];
        }
    }
       
    function listarEncuesta() {
        
        $data['listarEncuesta'] = $this->encuesta_model->da_listarEncuesta();
        $this->load->view('mantenedor/encuesta/qry_view', $data);
        
    }
    
    function editarArea(){
        $nidarea = $_POST['nidarea'];        
        $data['editarArea'] = $this->area_model->dbeditarArea($nidarea);        
        $this->load->view('mante/area/upd_view', $data);
        
    }
        
    function estadoEncuesta(){
        $nidvalor = $_POST['nidvalor'];
        
        $result = $this->encuesta_model->da_estadoEncuesta($nidvalor);
        
        if ($result){
            echo 1;
        }else{
            echo 0;
        }
        
    }
    
}