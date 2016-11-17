<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function validateLogin($data){
		$this->db->select("*");
		$this->db->from("INGRESO");
		$this->db->where("CORREO",$data["user"]);
		$this->db->or_where("IDENTIFICACION",$data["user"]);
		$this->db->where("CONTRASEÑA",$data["password"]);
		$result = $this->db->get()->result_array();


		if(count($result) == 1){
			return $result[0]["ID_PERFIL"];
		} else{
			return false;
		}
	}

	function registerUser($user){

		$data = array(
			"ID_TIPO_IDENTIFICACION" => $user["typeIdentification"],
			"IDENTIFICACION" => $user["identification"], 
		   	"NOMBRE" => $user["name"] ,
		   	"CORREO" => $user["email"] ,
		   	"FECHA_DE_NACIMIENTO" => $user["birthdate"],
		   	"GENERO" => $user["genero"],
		   	"ID_PERFIL" => 2	
		);

		$this->db->insert('USUARIO', $data);
		echo $this->db->last_query();
		if($this->db->affected_rows() > 0){
			return true;
		} else{
			return false;
		}
	}

}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */