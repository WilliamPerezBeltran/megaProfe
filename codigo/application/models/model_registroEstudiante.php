<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_registroEstudiante extends CI_Model {

	public function crearEstudiante($data){
            $this->load->database();
            $query=$this->db->insert('estudiantes',$data);
	}
        
        
}
?>