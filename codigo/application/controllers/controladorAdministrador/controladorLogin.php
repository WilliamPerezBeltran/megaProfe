<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controladorLogin extends CI_Controller {

	public function login(){
                $this->load->view('viewAdministrador/login');
                
	}
}
