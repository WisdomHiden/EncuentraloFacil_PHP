<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data["title"] = "Ingresar - Encuentralo Facil";
		$this->load->view('header',$data);
		$this->load->view('login');
		$this->load->view('footer');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */