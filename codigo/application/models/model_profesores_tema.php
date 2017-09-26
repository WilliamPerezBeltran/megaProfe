<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_profesores_tema extends CI_Model {

	
        public function insertar($datosTema){
            $this->load->database();
            $this->db->insert('profesores_tema',$datosTema);
	}
}
?>