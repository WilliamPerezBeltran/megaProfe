<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_temas extends CI_Model {

	public function listarTemas(){
            $this->load->database();
            $query=$this->db->get('tema');
             return $query->result_array();  
	}
        
        public function crearTemas($tema){
            $this->load->database();
            $query=$this->db->insert('tema',$tema);
	}
        
         public function eliminarTemas($id){
            $this->load->database();
            $this->db->where('id', $id);
            $this->db->delete('tema');

	}
       
}
?>