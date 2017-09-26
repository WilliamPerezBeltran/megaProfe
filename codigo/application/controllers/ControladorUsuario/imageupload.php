<?php 
class Imageupload extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    function index(){
        $this->load->view('viewUsuario/uploadform_view', array('error' => ' ' ));
    }
    function doupload() {
        var_dump($_FILES);
        echo "<br>";
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
            var_dump ($value);
        echo "<br>";
        for($s=0; $s<=$count-1; $s++) {
        $_FILES['userfile']['name']=$value['name'][$s];
        $_FILES['userfile']['type']    = $value['type'][$s];
        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
        $_FILES['userfile']['error']       = $value['error'][$s];
        $_FILES['userfile']['size']    = $value['size'][$s];   
            $config['upload_path'] = 'public/plantillaUsuario/images/infoProfesores/';
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
      
        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $name_array[] = $data['file_name'];
            }
            $names= implode(',', $name_array);
/*            $this->load->database();
            $db_data = array('id'=> NULL,
                             'name'=> $names);
        $this->db->insert('testtable',$db_data);
*/            print_r($names);
    }
}

?>