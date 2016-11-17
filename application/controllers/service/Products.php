<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/libraries/REST_Controller.php';


class Products extends REST_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('products_model');
	}

	/*Select All Products*/
	public function index_get(){
		$headers = getallheaders();
		if(!isset($headers["Autorize"])){
			$this->response(array('response' => "Access forbiden"),403);
		}else{
			$descryption = checkPass($headers["Autorize"],"encuentralofacil.co");

			if($descryption == "anjojo"){
				$result = $this->products_model->allProducts();
				if($result){
					$response = array(
						"list" => $result
						);
					$this->response($response,200);
				} else{
					$this->response(array('error' => 'No se encontraron productos'),404);
				}		
			} else{
				$this->response(array('response' => "Access protected"),404);
			}
		}
	}

	/*Select Product by Id*/
	public function find_get($id){
		$headers = getallheaders();
		if(!isset($headers["Autorize"])){
			$this->response(array('response' => "Access forbiden"),403);
		}else{
			$descryption = checkPass($headers["Autorize"],"encuentralofacil.co");
			if($descryption == "anjojo"){
				$result = $this->products_model->selectProductById($id);
				if($result){
					$response = array(
						"list" => $result
						);
					$this->response($response,200);
				}else{
					$this->response(array('error' => 'No se encontro información para el producto con id: '.$id),404);
				}	
			} else{
				$this->response(array('response' => "Access protected"),404);
			}
		}
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
