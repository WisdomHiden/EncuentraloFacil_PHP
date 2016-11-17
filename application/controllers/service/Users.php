<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/libraries/REST_Controller.php';


class Users extends REST_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	/*All*/
	public function index_get(){
		/*$users = $this->users_model->allUsers();
		if(!is_null($users)){
			$this->response(array('response' => $users),200);
		} else{
			$this->response(array('error' => 'No se encontraron productos'),404);
		}*/
	}

	public function login_post(){
		
		$headers = getallheaders();
		if(!isset($headers["Autorize"])){
			$this->response(array('response' => "Access forbiden"),403);
		}else{
			$descryption = checkPass($headers["Autorize"],"encuentralofacil.co");
			if($descryption == "anjojo"){

				$data["user"] = $this->post("user");
				$data["password"] = $this->post("password");
				$result = $this->users_model->validateLogin($data);

				if($result){
					$this->response(array('list' => $result),200);	
				} else{
					$this->response(array('error' => "Usuario o contraseña incorrectos"),404);
				}	
			} else{
				$this->response(array('response' => "Access protected"),404);
			}
		}
	}

	/*Unique*/
	public function find_get($id){
		//$data["user"] = $this->uri->segment(3);
		//$data["password"] = $this->uri->segment(4);
	}

	/*Insert*/
	public function index_post(){
		
	}

	/*Update*/
	public function index_put(){
		
	}

	/*Delete*/
	public function index_delete(){
		
	}
}

?>
