<?php 

class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->helpers('url');
		$this->load->helpers('form');
		$this->load->view('login_view');
	}
	
}
