<?php
class Rideboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('rideboard_view');
	}
}
