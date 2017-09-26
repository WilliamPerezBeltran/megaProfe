<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_profesores_subTema extends CI_Model {

	
        public function insertar($datosSubTema){
            $this->load->database();
            $this->db->insert('profesores_subTema',$datosSubTema);
	}
        public function traerProfe($subTemaId){
            $this->load->database();
            $this->db->where('subTema_ID', $subTemaId);
            $query=$this->db->get('profesores_subtema');
             return $query->result_array();  
	}
}
?>