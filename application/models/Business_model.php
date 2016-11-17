<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function selectAllTypeBusiness(){
		$this->db->select("*");
		$this->db->from("TIPO_NEGOCIO");
		$this->db->order_by("NOMBRE");
		$result = $this->db->get();
		if(count($result) > 0){
			return $result->result_array();
		} else{
			return false;
		}
	} 

	function validateCodeUser($code){
		$this->db->select("*");
		$this->db->from("CODIGO_REGISTRO");
		$this->db->where("CODIGO",$code);
		$result = $this->db->get()->result_array();
		if(count($result) > 0){
			if($result[0]["DISPONIBLE"] == 1){
				return true;
			} else{
				return false;
			}
		} else{
			return false;
		}
	}

	function updateCodeUser($code){
		$data = array(
		               'DISPONIBLE' => 0
		            );

		$this->db->where('CODIGO', $code);
		$this->db->update('CODIGO_REGISTRO', $data);
		if($this->db->affected_rows() > 0){
			return true;
		} else{
			return false;
		}
	}


	function registerBusiness($user,$business){
		//$business["typeBusiness"]
		$data = array(
			"ID_TIPO_NEGOCIO" => 1,
			"NIT" => $business["nit"], 
		   	"IDENTIFICACION" => $user["identification"] ,
		   	"NOMBRE" => $business["nameBusiness"] ,
		   	"DIRECCION" => $business["address"],
		   	"CIUDAD" => $business["city"],
		   	"DEPARTAMENTO" => $business["department"],
		   	"TELEFONO" => $business["telephone"],
		   	"ESTADO" => 1,
		   	"LOGO" => $business["logo"],
		   	"IMAGEN_PORTADA" => $business["portada"],
		   	"ID_HORARIO" => NULL,
		);

		$this->db->insert('NEGOCIO', $data);
		echo $this->db->last_query();

		if($this->db->affected_rows() > 0){
			return true;
		} else{
			return false;
		}
	}

}

/* End of file Business_model.php */
/* Location: ./application/models/Business_model.php */