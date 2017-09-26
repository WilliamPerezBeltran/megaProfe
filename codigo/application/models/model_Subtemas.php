<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_Subtemas extends CI_Model {

	public function listarSubTemas($temasId){
            $this->load->database();
            $this->db->where('Tema_ID', $temasId);
            $query=$this->db->get('subtema');
             return $query->result_array();  
	}
        public function listarSubTemasCrearProfed(){
            $this->load->database();
            $query=$this->db->get('subtema');
             return $query->result_array();  
	}
        
        public function TraerUnaFilaSubTemas($temasId){
            $this->load->database();
            $this->db->where('ID', $temasId);
            $query=$this->db->get('subtema');
             return $query->row_array();  
	}
        
        
}
?>