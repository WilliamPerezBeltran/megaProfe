<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_experienciaLaboralProfesor extends CI_Model {

	public function listarProfe(){
            $this->load->database();
            $query=$this->db->get('profesores');
             return $query->result_array(); 
	}
        public function numeroDeFilas(){
            $this->load->database();
            return $this->db->count_all('profesores');
	}
        public function numeroDeFilasprofesores_experiencia(){
            $this->load->database();
            return $this->db->count_all('profesores_experiencia');
	}
        public function crearExperiencia($data){
            $this->load->database();
            $query=$this->db->insert('profesores_experiencia',$data);
	}
        public function listarExperienciaLaboral($idProfe){
            $this->load->database();
            $this->db->where('ID_profesor', $idProfe);
            $query=$this->db->get('profesores_experiencia');
             return $query->result_array();  
	}
        public function eliminarExperienciaLaboral($id){
            $this->load->database();
            $this->db->where('ID', $id);
            $this->db->delete('profesores_experiencia');
	}
        public function consultarExperienciaLaboral($id){
        $this->load->database();
        $this->db->where('ID', $id);
        $query=$this->db->get('profesores_experiencia');
        return $query->row_array();
    }
        public function editarExperienciaLaboral($id,$data){
            $this->load->database();
            $this->db->update('profesores_experiencia', $data, "id =".$id);
	}
       
       
        
}
?>