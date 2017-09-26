<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controladorTemas extends CI_Controller {

    public function listarTemas() {
        $this->load->model('model_temas');
        $info['temas'] = $this->model_temas->listarTemas();
        $this->load->view('viewAdministrador/templateAdmin/header');
        $this->load->view('viewAdministrador/templateAdmin/aside');
        $this->load->view('viewAdministrador/temas/listarTemas', $info);
        $this->load->view('viewAdministrador/templateAdmin/footer');
    }

    public function eliminarTemas($id) {      
        $this->load->model('model_temas');
        $this->model_temas->eliminarTemas($id);
        redirect('controladorAdministrador/controladorTemas/listarTemas');
    }

    public function crearTemas() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tema', 'tema', 'required');
        if ($this->form_validation->run()) {
            $tema['nombre'] = $this->input->post('tema');
            $this->load->model('model_temas');
            $this->model_temas->crearTemas($tema);
            redirect('controladorAdministrador/controladorTemas/listarTemas');
        } else {
            $this->load->view('viewAdministrador/templateAdmin/header');
            $this->load->view('viewAdministrador/templateAdmin/aside');
            $this->load->view('viewAdministrador/temas/crearTemas');
            $this->load->view('viewAdministrador/templateAdmin/footer');
        }
    }

}

?>