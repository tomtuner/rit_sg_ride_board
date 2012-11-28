<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rideboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('rideboard_model');
	}
	
	function check_database(){
			
		$result = $this->rideboard_model->popular_cities();
		/*
			foreach ($result as $city){
		$data = $this->rideboard_model->destinations($city);
		}*/
	
	
	}
	
	function index()
	{
		$result = $this->rideboard_model->popular_cities();
		$data = array('title' => "Ride Board", 'main_content' => 'rideboard_view', 'cities' => $result);
		$this->load->view('template', $data);
	}
	

}
