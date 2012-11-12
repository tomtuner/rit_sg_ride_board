<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rideboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data = array('title' => "rideboard", 'main_content' => 'rideboard_view');
		$this->load->view('template', $data);
	}
}
