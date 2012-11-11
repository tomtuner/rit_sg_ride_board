<?php
class SignUp_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function register_user($user_array)
	{
		/*
$data = array(
			'email'	=> $user_array['email'],
			'password'	=>	$user_array['password'],
			'first_name'	=>	$user_array['first_name'],
			'last_name'	=>	$user_array['last_name'],
			'school_address'	=>	$user_array['school_address'],
			'home_address'	=>	$user_array['home_address'],
			'ph_num'	=>	$user_array['ph_num'],
			'deaf'	=>	$user_array['deaf']
		);
*/
		$this->db->insert('users', $user_array);
	
	}

}