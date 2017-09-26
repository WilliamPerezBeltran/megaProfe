<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controladorPrincipal extends CI_Controller {

    public function mapa() {
        $this->load->view('viewUsuario/mapaDePrueba');
    }

    public function listarTemas() {
        $this->load->model('model_temas');
        $info['temas']=$this->model_temas->listarTemas();
        $this->load->view('viewUsuario/templateUsuario/header');
        $this->load->view('viewUsuario/paginaPrincipal', $info);
        $this->load->view('viewUsuario/templateUsuario/footer');
    }

    public function listarSubtemas($temasId) {
        $this->load->model('model_Subtemas');
        $info['subtemas'] = $this->model_Subtemas->listarSubTemas($temasId);
        $this->load->view('viewUsuario/templateUsuario/header');
        $this->load->view('viewUsuario/listarSubtema', $info);
    }
     public function listarProfe($subTemaId) {
         
          $this->load->model('model_Subtemas');
        $info['infoDelSubtema']= $this->model_Subtemas->TraerUnaFilaSubTemas($subTemaId);
         $info['nombreSubtemas']=$info['infoDelSubtema']['Nombre'];//nombre del subtema       
          $this->load->model('model_profesores_subTema');
        $infoProfesores= $this->model_profesores_subTema->traerProfe($subTemaId);
//        foreach ($infoProfesores as $profe_imten){
//            $idprofe=$profe_imten['profesores_ID'];
//        }
        if($infoProfesores==NULL){
            $this->load->view('viewUsuario/vistaNoHayProfesoresDisponibles');

        }else{
            $sizeofArray=count($infoProfesores);
            for ($i = 0; $i <$sizeofArray; $i++) {
                $infoProfeSubtema[$i]=$infoProfesores[$i]['profesores_ID'];
            }
        
        var_dump($infoProfeSubtema); 
        $this->load->model('model_registroProfe');
        $info['profesores'] = $this->model_registroProfe->traerProfeSubtema($infoProfeSubtema);
       //$info['profesores'] = $this->model_registroProfe->listarProfe();
//       $we=$info[0]['ID'];
//         echo "<pre>";
//       var_dump($we);
//       echo "</pre>";
//       $
//       $NumProfetot=count($info['profesores']);
//       for ($i = 0; $i <$sizeofArray; $i++) {
//           for ($x = 0; $x <$NumProfetot; $x++) {}
//               if(  $infoProfeSubtema[$i]==($info[$x]['ID'])  ){}
//               
//           }
//      
//       echo "<pre>";
//       var_dump( $info['profesores'] );
//       echo "</pre>";
        $this->load->view('viewUsuario/templateUsuario/header');
        $this->load->view('viewUsuario/listarProfe',$info);
        }
        
    }

    public function crearEstudiantes() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('direccion', 'direccion', 'required');
        $this->form_validation->set_rules('correo', 'correo', 'required');
        $this->form_validation->set_rules('celular', 'celular', 'required');
        if ($this->form_validation->run()) {
            $data['Nombre'] = $this->input->post('nombre');
            $data['Direccion'] = $this->input->post('direccion');
            $data['Correo'] = $this->input->post('correo');
            $data['celular'] = $this->input->post('celular');
            $data['Latitud'] = $this->input->post('Latitud');
            $data['Longitud'] = $this->input->post('Longitud');
            $this->load->model('model_registroEstudiante');
            $this->model_registroEstudiante->crearEstudiante($data);
            redirect('ControladorUsuario/controladorPrincipal/listarTemas');
        }
        $this->load->view('viewUsuario/templateUsuario/header');
        $this->load->view('viewUsuario/crearEstudiantes');
        $this->load->view('viewUsuario/templateUsuario/footer');
    }

    public function crearProfesores() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('celular', 'celular', 'required|numeric');
        $this->form_validation->set_rules('dirección', 'dirección', 'required');
        $this->form_validation->set_rules('fecha', 'fecha', 'required');
        $this->form_validation->set_rules('tarifa', 'tarifa', 'required|numeric');
        $this->form_validation->set_rules('description', 'description', 'required|max_length[2000]');
        $this->form_validation->set_rules('idDisponibilidad[]', 'Disponibilidad', 'required');
        $this->form_validation->set_rules('tema[]', 'Tema', 'required');
        $this->form_validation->set_rules('subtema[]', 'Subtema', 'required');
//        echo '<pre>';
//        var_dump($_FILES);die;
//        echo '</pre>';
        if (empty($_FILES['foto']['name'])) {
            $this->form_validation->set_rules('foto', 'foto', 'required');
        }else{
            $nameFoto=$_FILES['foto']['name'];
            $extensionFoto=explode(".",$nameFoto);
        }
        if (empty($_FILES['cv']['name'])) {
            $this->form_validation->set_rules('cv', 'cv', 'required');
        }else{
            $nameCv=$_FILES['cv']['name'];
            $extensionCv=explode(".",$nameCv);
        }
        //buscando informacion de temas 
        $this->load->model('model_temas');
        $info['temas']=$this->model_temas->listarTemas();
        
        //buscando informacion de subtemas 
        $this->load->model('model_Subtemas');
        $info['subtemas']=$this->model_Subtemas->listarSubTemasCrearProfed();

        if ($this->form_validation->run()) {
            $this->load->library('upload');
            //carga la foto)
            $config['upload_path'] = 'public/plantillaUsuario/images/infoProfesores/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            
            $archivo = date('YmdHis');
            $config['file_name'] = 'foto'.$archivo.'.'.$extensionFoto[1];
            $config['file_ext_tolower'] = true;
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
            
            //con este codigo le hago resize a la picture 
            // Like most other classes in CodeIgniter, the image class is initialized in your controller using the $this->load->library function:
            $this->load->library('image_lib');
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'public/plantillaUsuario/images/infoProfesores/'.$config['file_name'] ;//aqui termina el codigo del resize  
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 75;
            $config['height']       = 50;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
                /*The above code tells the image_resize 
                 * function to look for an image called mypic.jpg 
                 * located in the source_image folder, then create a 
                 * thumbnail that is 75 X 50 pixels using the GD2 image_library. 
                 * Since the maintain_ratio option is enabled, the thumb will 
                 * be as close to the target width and height 
                 * as possible while preserving the original aspect ratio.
                 *  The thumbnail will be called mypic_thumb.jpg and located 
                 * at the same level as source_image.*/
               //aqui termina el codigo del resize  
            
            
            echo $this->upload->display_errors();
            //carga la hoja de vida 
            $config2['upload_path'] = 'public/plantillaUsuario/images/infoProfesores/';
            $config2['allowed_types'] = 'pdf';
            $archivo = date('YmdHis');
            $config2['file_name'] = 'cv'.$archivo.'.'.$extensionCv[1];
            $config2['file_ext_tolower'] = true;
            $this->upload->initialize($config2);
            $this->upload->do_upload('cv');
            echo $this->upload->display_errors();

            $data['nombre'] = $this->input->post('nombre');
            $data['celular'] = $this->input->post('celular');
            $data['Direccion'] = $this->input->post('dirección');
            $data['FechaNacimento'] = $this->input->post('fecha');
            $data['tarifa'] = $this->input->post('tarifa');
            $data['foto'] = $config['file_name'];
            $data['HojaDeVida'] = $config2['file_name'];
            $data['Latitud'] = $this->input->post('Latitud');
            $data['Longitud'] = $this->input->post('Longitud');
            $data['description'] = $this->input->post('description');
            $disponibilidad = $this->input->post('idDisponibilidad[]');//entra todos los datos como un vector
            $temaProfesor= $this->input->post('tema[]');
            $subTemaProfesor = $this->input->post('subtema[]');
            
            
            $this->load->model('model_registroProfe');
            $idProfe=$this->model_registroProfe->crearProfeYRetornarId($data);
            
            //inserta el id del profesor y su respectivo horario en el base de datos de horarios
            $this->load->model('model_profesores_horarios');
            foreach ($disponibilidad as $item_disponibilidad ){
                $datos['Profesores_ID']=$idProfe;
                $datos['Horarios_ID']=$item_disponibilidad;
                $this->model_profesores_horarios->insertar($datos);
            }
            //inserta el id del profesor y su respectivo tema en el base de datos de temas
            $this->load->model('model_profesores_tema');
            foreach ($temaProfesor as $item_temaProfesor ){
                $datosTema['Profesores_ID']=$idProfe;
                $datosTema['Tema_ID']=$item_temaProfesor;
                $this->model_profesores_tema->insertar($datosTema);
            }
            //inserta el id del profesor y su respectivo subTema en el base de datos de subTemas
            $this->load->model('model_profesores_subTema');
            foreach ($subTemaProfesor as $item_subTemaProfesor ){
                $datosSubTema['Profesores_ID']=$idProfe;
                $datosSubTema['subTema_ID']=$item_subTemaProfesor;
                $this->model_profesores_subTema->insertar($datosSubTema);
            }

            redirect('ControladorUsuario/controladorPrincipal/experienciaLaboralProfe');
        }
        
        $this->load->view('viewUsuario/crearProfesores',$info);
    }
    
    
    public function experienciaLaboralProfe() {
        
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('institucion', 'nombre', 'required');
        $this->form_validation->set_rules('profesion', 'celular', 'required');
        $this->form_validation->set_rules('ingreso', 'dirección', 'required');
        $this->form_validation->set_rules('finalizacion', 'fecha', 'required');
        

        if ($this->form_validation->run()) {
            
            //Obtengo el ultimo id insertado 
            $this->load->model('model_experienciaLaboralProfesor');
            $TodaLaInfoProfe=$this->model_experienciaLaboralProfesor->listarProfe();
            $Numberfilas=$this->model_experienciaLaboralProfesor->numeroDeFilas();
            $ultimaPosicion=$Numberfilas-1;
            //id del profesor 
            $idProfe=$TodaLaInfoProfe[$ultimaPosicion]['ID']; 
            //ingreso informacion a la base de datos 
            $data['institucion'] = $this->input->post('institucion');
            $data['profesion'] = $this->input->post('profesion');
            $data['ingreso'] = $this->input->post('ingreso');
            $data['finalizacion'] = $this->input->post('finalizacion');
            $data['ID_profesor'] = $idProfe;
            
            
            $this->load->model('model_experienciaLaboralProfesor');
            $this->model_experienciaLaboralProfesor->crearExperiencia($data);
            

            redirect('ControladorUsuario/controladorPrincipal/listarExperienciaLaboralProfe');
        }
        
        $this->load->view('viewUsuario/crearExperienciaLaboralProfe');
        
     
    }
    public function listarExperienciaLaboralProfe() {
        //Obtengo el ultimo id insertado 
        $this->load->model('model_experienciaLaboralProfesor');
        $TodaLaInfoProfe=$this->model_experienciaLaboralProfesor->listarProfe();
        $Numberfilas=$this->model_experienciaLaboralProfesor->numeroDeFilas();
        $ultimaPosicion=$Numberfilas-1;
        //id del profesor 
        $idProfe=$TodaLaInfoProfe[$ultimaPosicion]['ID']; 
        //ingreso informacion a la base de datos 
        $this->load->model('model_experienciaLaboralProfesor');
        $info['infoExperienciaProfe']=$this->model_experienciaLaboralProfesor->listarExperienciaLaboral($idProfe);
       
        $this->load->view('viewUsuario/listarExperienciaLaboralProfe',$info);
        
     
    }
    
    public function eliminarExperienciaLaboralProfesor($id) {
        $this->load->model('model_experienciaLaboralProfesor');
        $this->model_experienciaLaboralProfesor->eliminarExperienciaLaboral($id);
        redirect('ControladorUsuario/controladorPrincipal/listarExperienciaLaboralProfe');
        
    }
    public function editarExperienciaLaboralProfesor($id) {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('institucion', 'nombre', 'required');
        $this->form_validation->set_rules('profesion', 'celular', 'required');
        $this->form_validation->set_rules('ingreso', 'dirección', 'required');
        $this->form_validation->set_rules('finalizacion', 'fecha', 'required');
        
        

        if ($this->form_validation->run()) {
            
            //Obtengo el ultimo id insertado 
            $this->load->model('model_experienciaLaboralProfesor');
            $TodaLaInfoProfe=$this->model_experienciaLaboralProfesor->listarProfe();
            $Numberfilas=$this->model_experienciaLaboralProfesor->numeroDeFilas();
            $NumberfilasExperienciaLaboral=$this->model_experienciaLaboralProfesor->numeroDeFilasprofesores_experiencia();
            $ultimaPosicion=$Numberfilas-1;
            //id del profesor 
            $idProfe=$TodaLaInfoProfe[$ultimaPosicion]['ID']; 
            //ingreso informacion a la base de datos 
            
            $data['institucion'] = $this->input->post('institucion');
            $data['profesion'] = $this->input->post('profesion');
            $data['ingreso'] = $this->input->post('ingreso');
            $data['finalizacion'] = $this->input->post('finalizacion');
            $data['ID_profesor'] = $idProfe;
            
            
//            var_dump($id);die;
            $this->load->model('model_experienciaLaboralProfesor');
            $this->model_experienciaLaboralProfesor->editarExperienciaLaboral($id,$data);
            

            redirect('ControladorUsuario/controladorPrincipal/listarExperienciaLaboralProfe');
        }else{
            $this->load->model('model_experienciaLaboralProfesor');
            //en info esta la experiencia laboral para ser editada
            $info['editarInfoExperienciaProfe']=$this->model_experienciaLaboralProfesor->consultarExperienciaLaboral($id);
//            echo '<pre>';
//            var_dump($info['editarInfoExperienciaProfe']);die;
//            echo '</pre>';
            $this->load->view('viewUsuario/editarExperienciaLaboralProfe',$info);
        }
        
        
        
     
        
        
    }
    public function crearEstudioProfe() {
        
        //este controlador crea los estudios del profesor 
        $this->load->library('form_validation');
        $this->form_validation->set_rules('institucion', 'nombre', 'required');
        $this->form_validation->set_rules('profesion', 'celular', 'required');
        $this->form_validation->set_rules('ingreso', 'dirección', 'required');
        $this->form_validation->set_rules('finalizacion', 'fecha', 'required');
        

        if ($this->form_validation->run()) {
            
            //Obtengo el ultimo id insertado 
            $this->load->model('model_experienciaLaboralProfesor');
            $TodaLaInfoProfe=$this->model_experienciaLaboralProfesor->listarProfe();
            $Numberfilas=$this->model_experienciaLaboralProfesor->numeroDeFilas();
            $ultimaPosicion=$Numberfilas-1;
            //id del profesor 
            $idProfe=$TodaLaInfoProfe[$ultimaPosicion]['ID']; 
            //ingreso informacion a la base de datos 
            $data['institucion'] = $this->input->post('institucion');
            $data['profesion'] = $this->input->post('profesion');
            $data['ingreso'] = $this->input->post('ingreso');
            $data['finalizacion'] = $this->input->post('finalizacion');
            $data['ID_profesor'] = $idProfe;
            
            $this->load->model('model_profesoresEstudio');
            $this->model_profesoresEstudio->crearEstudio($data);
            

            redirect('ControladorUsuario/controladorPrincipal/listarEstudioProfe');
        }
        
        $this->load->view('viewUsuario/crearEstudioProfesor');
        
     
    }
    public function listarEstudioProfe() {
        //Obtengo el ultimo id insertado 
        $this->load->model('model_experienciaLaboralProfesor');
        $TodaLaInfoProfe=$this->model_experienciaLaboralProfesor->listarProfe();
        $Numberfilas=$this->model_experienciaLaboralProfesor->numeroDeFilas();
        $ultimaPosicion=$Numberfilas-1;
        //id del profesor 
        $idProfe=$TodaLaInfoProfe[$ultimaPosicion]['ID']; 
        //ingreso informacion a la base de datos 
        $this->load->model('model_profesoresEstudio');
        $info['infoExperienciaProfe']=$this->model_profesoresEstudio->listarEstudioProfesor($idProfe);
       
        $this->load->view('viewUsuario/listarEstudioProfe',$info);
        
     
    }
    public function eliminarEstudioProfe($id) {
        
        $this->load->model('model_profesoresEstudio');
        $this->model_profesoresEstudio->eliminarEstudioProfesor($id);
        redirect('ControladorUsuario/controladorPrincipal/listarEstudioProfe');
        
    }
    public function editarEstudioProfe($id) {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('institucion', 'nombre', 'required');
        $this->form_validation->set_rules('profesion', 'celular', 'required');
        $this->form_validation->set_rules('ingreso', 'dirección', 'required');
        $this->form_validation->set_rules('finalizacion', 'fecha', 'required');
        
        

        if ($this->form_validation->run()) {
            
            //Obtengo el ultimo id insertado 
            $this->load->model('model_experienciaLaboralProfesor');
            $TodaLaInfoProfe=$this->model_experienciaLaboralProfesor->listarProfe();
            $Numberfilas=$this->model_experienciaLaboralProfesor->numeroDeFilas();
            $ultimaPosicion=$Numberfilas-1;
            //id del profesor 
            $idProfe=$TodaLaInfoProfe[$ultimaPosicion]['ID']; 
            //ingreso informacion a la base de datos 
            $data['institucion'] = $this->input->post('institucion');
            $data['profesion'] = $this->input->post('profesion');
            $data['ingreso'] = $this->input->post('ingreso');
            $data['finalizacion'] = $this->input->post('finalizacion');
            $data['ID_profesor'] = $idProfe;
            
            
            $this->load->model('model_profesoresEstudio');
            $this->model_profesoresEstudio->editarEstudioProfesor($id,$data);
            

            redirect('ControladorUsuario/controladorPrincipal/listarTemas');
        }else{
            $this->load->model('model_profesoresEstudio');
            //en info esta la experiencia laboral para ser editada
            $info['estudioProfesore']=$this->model_profesoresEstudio->consultarEstudioProfesor($id);
//            echo '<pre>';
//            var_dump($info['estudioProfesore']);die;
//            echo '</pre>';
            $this->load->view('viewUsuario/editarEstudioProfesor',$info);
        }
        
        
        
     
        
        
    }
    public function detalleProfe($idProfesor) {
        var_dump($idProfesor);
        echo '<br>';
        $this->load->model('model_registroProfe');
        $info['infoProfe']=$this->model_registroProfe->traerProfe($idProfesor);
        $this->load->model('model_experienciaLaboralProfesor');
        $info['infoExperienciaProfe']=$this->model_experienciaLaboralProfesor->listarExperienciaLaboral($idProfesor);
        echo '<pre>';
        var_dump($info['infoExperienciaProfe']);
        echo '</pre>';
        echo '<br>';
        $this->load->model('model_profesoresEstudio');
        $info['infoEstudioProfe']=$this->model_profesoresEstudio->listarEstudioProfesor($idProfesor);
        echo '<pre>';
        var_dump($info['infoEstudioProfe']);
        echo '</pre>';
        $this->load->view('viewUsuario/templateUsuario/header');
        $this->load->view('viewUsuario/detalleProfesor',$info);
        $this->load->view('viewUsuario/templateUsuario/footer');
    }
    
    
}
