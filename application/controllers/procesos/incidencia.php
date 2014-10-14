<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incidencia extends CI_Controller {

	public function index()
	{
		$data['main_content'] = 'procesos/incidencia/panel_view';
		$data['titulo'] = 'Panel de Administración (P.A)';
		$this->load->view('dashboard/template', $data);
	}

}

/* End of file incidencia.php */
/* Location: ./application/controllers/procesos/incidencia.php */
?>