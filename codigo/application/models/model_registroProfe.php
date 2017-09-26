<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_registroProfe extends CI_Model {

	public function crearProfe($data){
            $this->load->database();
            $query=$this->db->insert('profesores',$data);
	}
        
        public function listarProfe(){
            $this->load->database();
            //$this->db->where('Tema_ID', $temasId);
            $query=$this->db->get('profesores');
             return $query->result_array();  
	}
         public function traerProfe($temasId){
            $this->load->database();
            $this->db->where('ID', $temasId);
            $query=$this->db->get('profesores');
             return $query->result_array();  
	}
         public function traerProfeSubtema($temasId){
            $this->load->database();
            $this->db->where_in('ID', $temasId);
            $query=$this->db->get('profesores');
             return $query->result_array();  
	}
        
        public function crearProfeYRetornarId($data){
            $this->load->database();
            $query=$this->db->insert('profesores',$data);
             return $this->db->insert_id();
	}
        
        
}
?>