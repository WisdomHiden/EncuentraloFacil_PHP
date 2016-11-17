<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Business_model");
		$this->load->model("Users_model");
	}
	public function index()
	{
		/*$data["title"] ="Registro de usuario"; 	
		$this->load->view("header",$data);
		$this->load->view("register");
		$this->load->view("footer");*/
	}

	public function register()
	{
		$data["title"] ="Registro de usuario";
		$business["typesBusiness"] = $this->Business_model->selectAllTypeBusiness(); 
		$this->load->view("header",$data);
		$this->load->view("register",$business);
		$this->load->view("footer");
	}


	public function registerUser(){
		
		$user["name"] = $this->input->post("username");
		$user["email"] = $this->input->post("email");
		$user["typeIdentification"] = $this->input->post("typeIdentification");
		$user["identification"] = $this->input->post("identification");
		$user["birthdate"] = str_replace("/", "-", $this->input->post("birthdate"));
		$user["genero"] = $this->input->post("genero");

		$business["nit"] = $this->input->post("nit");
		$business["typeBusiness"] = $this->input->post("typeBusiness");
		$business["nameBusiness"] = $this->input->post("nameBusiness");
		$business["address"] = $this->input->post("address");
		$business["telephone"] = $this->input->post("telephone");
		$business["department"] = $this->input->post("department");
		$business["city"] = $this->input->post("city");
		$business["logo"] = $_FILES["logo"]["name"];
		$business["portada"] = $_FILES["portada"]["name"];

		if($business["logo"] != "" && $business["portada"] != ""){
		  $response = $this->upload_file($business["logo"],'logo');
		  $response1 = $this->upload_file($business["portada"],'portada');
		}

		$resultUser = $this->Users_model->registerUser($user);
		if($resultUser){
			$resultBusiness = $this->Business_model->registerBusiness($user,$business);
			if($resultBusiness){
				echo "Registro correcto";
			}
		}


	}

	function validateCodeUser($code){
		$result = $this->Business_model->validateCodeUser($code);
		if($result){
			$update = $this->Business_model->updateCodeUser($code);
			if($update){
				echo true;
			} else{
				echo false;
			}
		}else{
			echo false;
		}
	}

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

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */