<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incidencia extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->cargas->_validaracceso();
		$this->load->model('procesos/incidencia_model','objIncidencia');
	}

	public function index()
	{
		$data['FirtLoad'] = "FL";
		$data['main_content'] = 'procesos/incidencia/panel_view';
		$data['titulo'] = 'Panel de Administración Incidencias(P.A)';
		$this->objIncidencia->set_accion('copia');
		$data['incidencias'] = $this->objIncidencia->listar();
		$this->load->view('dashboard/template', $data);
	}
	function vistaGet( $accion ){
		if (!isset($V1))
			$accion = $this->input->post('accion');
		if (!isset($V2))
			$accion = $this->input->post('accion');

		$this->objIncidencia->set_accion('copia');
		// if($accion == "TODASINCIDENCIAS") {
		// }
		$data['incidencias'] = $this->objIncidencia->listar();
		// print_p($data);exit();
		$this->load->view('procesos/incidencia/qry_view',$data);
	}

}

/* End of file incidencia.php */
/* Location: ./application/controllers/procesos/incidencia.php */
?>