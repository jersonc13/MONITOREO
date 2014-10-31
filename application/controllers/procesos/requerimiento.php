<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requerimiento extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('procesos/incidencia_model','objIncidencia');
		$this->load->model('procesos/recurso_model','objRecurso');
	}

	public function index()
	{
		$data['FirtLoad']     = "FL";
		$data['main_content'] = 'procesos/requerimiento/panel_view';
		$data['titulo']       = 'Panel de Administración Incidencias(P.A)';
		$this->objIncidencia->set_accion('nuevos');
		$data['tiposRecurso']  = $this->objRecurso->listarTipos();
		$data['incidencias']  = $this->objIncidencia->listar();
		$this->load->view('dashboard/template', $data);
	}
	function vistaGet( $accion ){
		if (!isset($V1))
			$accion = $this->input->post('accion');
		if (!isset($V2))
			$accion = $this->input->post('accion');

		if($accion == "TODASINCIDENCIAS") {
			$this->objIncidencia->set_accion('nuevos');
		}
		$data['incidencias'] = $this->objIncidencia->listar();
		$this->load->view('procesos/requerimiento/qry_view',$data);
	}

}

/* End of file requerimiento.php */
/* Location: ./application/controllers/procesos/requerimiento.php */