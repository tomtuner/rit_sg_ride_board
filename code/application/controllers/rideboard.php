<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rideboard extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$data = array('title' => "Ride Board", 'main_content' => 'rideboard_view');
		$this->load->view('template', $data);
	}
}
