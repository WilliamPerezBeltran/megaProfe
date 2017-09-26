<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_profesoresEstudio extends CI_Model {

    public function listarProfe() {
        $this->load->database();
        $query = $this->db->get('profesores');
        return $query->result_array();
    }

    public function numeroDeFilas() {
        $this->load->database();
        return $this->db->count_all('profesores');
    }

    public function crearEstudio($data) {
        $this->load->database();
        $query = $this->db->insert('profesores_estudio', $data);
    }

    public function listarEstudioProfesor($idProfe) {
        $this->load->database();
        $this->db->where('ID_profesor', $idProfe);
        $query = $this->db->get('profesores_estudio');
        return $query->result_array();
    }

    public function eliminarEstudioProfesor($id) {
        $this->load->database();
        $this->db->where('ID', $id);
        $this->db->delete('profesores_estudio');
    }

    public function consultarEstudioProfesor($id) {
        $this->load->database();
        $this->db->where('ID', $id);
        $query = $this->db->get('profesores_estudio');
        return $query->row_array();
    }

    public function editarEstudioProfesor($id,$data) {
        
        $this->load->database();
        $this->db->update('profesores_estudio', $data, "id =".$id);
    }

}

?>