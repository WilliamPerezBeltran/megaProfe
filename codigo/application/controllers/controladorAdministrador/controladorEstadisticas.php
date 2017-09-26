<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controladorEstadisticas extends CI_Controller {

	public function estadisticas(){
		$this->load->view('viewAdministrador/templateAdmin/header');
                $this->load->view('viewAdministrador/templateAdmin/aside');
                $this->load->view('viewAdministrador/estadistica/estadisticas');
                $this->load->view('viewAdministrador/templateAdmin/footer');
                
	}
}
