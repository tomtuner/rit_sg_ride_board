<?php

class Offer_ride_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function create_trip($ride_data)
	{
		$this->db->insert('trips', $ride_data);
	}
	
}