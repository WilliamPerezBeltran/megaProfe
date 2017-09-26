<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controladorEstudiantes extends CI_Controller {

	public function listarEstudiantes(){
		$this->load->view('viewAdministrador/templateAdmin/header');
                $this->load->view('viewAdministrador/templateAdmin/aside');
                $this->load->view('viewAdministrador/plantilla');
                $this->load->view('viewAdministrador/templateAdmin/footer');
                
	}
}
