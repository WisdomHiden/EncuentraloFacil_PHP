<?php
      //************ CARGA DE ARCHIVOS  ****************   
      function upload_file($name,$input) { 
        $this->load->library('upload');
        $response = "false";    

        $config['upload_path'] = "assets/uploads/";
        $config['file_name'] = $name;
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";
        $config['overwrite'] = true;
        $config['remove_spaces'] = true;

        $this->upload->initialize($config);
        if (!$this->upload->do_upload($input)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
        } else{
            $response = "true";
        }
        return $response;
        
        //$data['uploadSuccess'] = $this->upload->data();
      }
?>
