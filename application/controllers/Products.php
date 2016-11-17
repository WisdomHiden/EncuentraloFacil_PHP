<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/libraries/REST_Controller.php';


class Products extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		echo "dffd";
	}
}

?>
