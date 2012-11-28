<?php

class Need_ride_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	function create_request($request_data)
	{
		$this->db->insert('trips', $request_data);
	}

}