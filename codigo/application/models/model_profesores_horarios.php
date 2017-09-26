<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_profesores_horarios extends CI_Model {

	public function insertar($data){
            $this->load->database();
            $this->db->insert('profesores_horarios',$data);
	}
        
       
        
        
}
?>