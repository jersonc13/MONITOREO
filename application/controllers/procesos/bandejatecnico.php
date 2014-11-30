<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bandejatecnico extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->cargas->_validaracceso();
		$this->load->model('procesos/incidencia_model','objIncidencia');
		$this->load->model('procesos/recurso_model','objRecurso');
		$this->load->model('procesos/requerimiento_model','objRequerimiento');
	}

	public function index()
	{
		$data['FirtLoad']     = "FL";
		$data['main_content'] = 'procesos/requerimiento/tecnico_bandeja_view';
		$data['titulo']       = 'Panel de Administración Incidencias(P.A)';

		$this->objRecurso->set_accion( 'MISCASOS' );
		$nperid = $this->session->userdata('IDPer');
		$this->objRecurso->set_persona( $nperid );
		$data['accionx']  = 'accion';
		$data['incidencias'] = $this->objRecurso->listar();
		$this->load->view('dashboard/template',$data);
	}
	function vistaGet( $accion ){
		if (!isset($accion)){
			$accion = $this->input->post('accion');
		}
		$data['accionx'] = $accion;
		$this->objRecurso->set_persona( $this->session->userdata('IDPer') );

		if ( $accion == 'BANDEJA' ) {
			$accion = 'MISCASOS';
			$data['accionx']  = $accion;
			$ruta = 'procesos/requerimiento/qry_tecnico_bandeja_view';
		}else{
			$ruta = 'procesos/requerimiento/qry_view';
		}
		$this->objRecurso->set_accion( $accion );
		$data['incidencias'] = $this->objRecurso->listar();
		// print_p($data);exit();
		$this->load->view( $ruta,$data);
	}
	function cambiarEstado(){
		$json = $this->input->post('json');
		echo $this->objRequerimiento->TomarCaso($json['id'],2);
	}
	function getsolucionar(){
		$json = $this->input->post('json');
		$data['codx'] = $json['id'];
		$this->load->view( 'procesos/requerimiento/ins_solucionar_view', $data);
	}
	function solucionar(){
		$respuesta = 1;
		$id = $this->input->post('cod');
		$solucion = $this->input->post('solucion');
		if ( $this->objRequerimiento->solucionar($id,$solucion) ) {
		        $respuesta = 1;
		} else {
		    $respuesta = 0;
		}
		echo $respuesta;;
		// $this->load->view( 'procesos/requerimiento/ins_solucionar_view', $data);
	}
}

/* End of file bandejatecnico.php */
/* Location: ./application/controllers/procesos/bandejatecnico.php */