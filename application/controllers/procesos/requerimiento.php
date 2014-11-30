<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requerimiento extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->cargas->_validaracceso();
		$this->load->model('procesos/incidencia_model','objIncidencia');
		$this->load->model('procesos/recurso_model','objRecurso');
		$this->load->model('procesos/requerimiento_model','objRequerimiento');
	}
	public function testfecha(){
		echo date('d/m/Y');
	}
	public function index()
	{
		$data['FirtLoad']     = "FL";
		$data['main_content'] = 'procesos/requerimiento/panel_view';
		$data['titulo']       = 'Panel de Administración Incidencias(P.A)';
		$this->objRecurso->set_accion('nuevos');
		$data['tiposRecurso']  = $this->objRecurso->listarTipos();
		$data['incidencias']  = $this->objRecurso->listar();
		$this->load->view('dashboard/template', $data);
	}
	function vistaGet( $accion ){
		if (!isset($accion)){
			$accion = $this->input->post('accion');
		}

		$this->objRecurso->set_accion( $accion );
		$this->objRecurso->set_persona( $this->session->userdata('IDPer') );
		$data['accionx'] = $accion;
		$data['incidencias'] = $this->objRecurso->listar();
		// print_p($this->objRecurso);exit();
		if ( $accion == 'BANDEJA' ) {
			$ruta = 'procesos/requerimiento/qry_bandeja_view';
		}else{
			$ruta = 'procesos/requerimiento/qry_view';
		}
		$this->load->view( $ruta,$data);
	}
	function bandeja( ){
		$data['FirtLoad']     = "FL";
		$data['main_content'] = 'procesos/requerimiento/bandeja_view';
		$data['titulo']       = 'Panel de Administración Incidencias(P.A)';

		$this->objRecurso->set_accion( 'BANDEJA' );
		$this->objRecurso->set_persona( null );
		$data['incidencias'] = $this->objRecurso->listar();
		// print_p( $data );
		$this->load->view('dashboard/template',$data);
	}
	function bandejaMisCasos( ){
		$data['main_content'] = 'procesos/requerimiento/bandeja_view';
		$this->objRecurso->set_accion( 'MISCASOS' );
		$this->objRecurso->set_persona( null );
		$data['incidencias'] = $this->objRecurso->listar();
		// print_p( $data );
		$this->load->view('dashboard/template',$data);
	}	

	function registrar(){
		$nPerId       = $this->session->userdata('IDPer');
		$tipo         = $this->input->post('cboTipoRec');
		$txtcontenido = $this->input->post('txtcontenido');
		$txtfecha     = $this->input->post('txtfecha');
		$rpt = 0;
		if( $this->objRecurso->registrar($nPerId,$tipo,$txtcontenido,$txtfecha) ){
			$rpt = 1;
		}else{
			$rpt = 0;
		}
		echo $rpt;
	}
	function asignar( $codRequerimiento ){
		$data['main_content'] = 'procesos/requerimiento/asignar_view';
		$data['titulo']       = 'Asignar Requisitos';
		$data['codigo']       = $codRequerimiento;
		$this->load->view('dashboard/template', $data);
	}
	function buscarTrabajador(){
		$tiempo_inicio = microtime(true);
		$info = Array();
		$accion = 'qry_tec';
		$criterio = $this->input->post('name');
		$criterio = $this->input->post('name');
		$info['personas'] = $this->objIncidencia->buscarTrabajador($accion,$criterio);
		$info['cantidad'] = count($info['personas']);
		$tiempo_fin = microtime(true);
		$info['tiempo'] = round($tiempo_fin - $tiempo_inicio,4);
		echo json_encode( $info );
	}
	function verasignarTrabajador(){
		$this->load->model('mantenedor/persona_model','objPersona');
		$nPerId = $this->input->post('idPerResp');
		$data['infoPersona'] = $this->objPersona->dblistarpersona('qry_det',$nPerId)[0];
		
		$this->objRecurso->set_accion( 'DETALLE' );
		$this->objRecurso->set_persona( $this->input->post('idReq') );
		$data['infoRequerimiento'] = $this->objRecurso->listar()[0];

		$this->load->view('procesos/requerimiento/perfil_trabajador_view', $data);
		// print_p($data);
	}
	function AsignarRequerimiento(){
		$respuesta = 3;
		$idPer = $this->input->post('idPer');
		$idPerSolicit = $this->input->post('idPerSolicit');
		$idReq = $this->input->post('idReq');
		$observa = $this->input->post('observa');

		if ( $this->objRequerimiento->asignarAtencion( $idPer, $idPerSolicit, $idReq, $observa) ) {
			if($this->objRecurso->CambiarEstado($idReq,ASIGNADO_REQUERIMIENTO))
				$respuesta = 1;
		} else {
			$respuesta = 0;
		}
		echo $respuesta;
	}
}

/* End of file requerimiento.php */
/* Location: ./application/controllers/procesos/requerimiento.php */