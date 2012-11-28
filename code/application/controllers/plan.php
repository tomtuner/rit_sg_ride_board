<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plan extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$data = array('title' => "Plan a trip", 'main_content' => 'plan_view');
		$this->load->view('template', $data);
	}

}