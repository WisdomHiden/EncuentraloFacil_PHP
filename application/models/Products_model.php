<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
		}	

	public function allProducts(){
		$this->db->select("*");
		$this->db->from("PRODUCTO");
		$products = $this->db->get()->result_array();

		if(count($products) > 0){
			return $products;
		} else{
			return false;
		}
	}

	public function selectProductById($id){
		$this->db->select("*");
		$this->db->from("PRODUCTO");
		$this->db->where("ID_PRODUCTO",$id);
		$result = $this->db->get()->result_array();
		if(count($result) == 1){
			return $result;
		} else{
			return false;
		}
	}	

}
