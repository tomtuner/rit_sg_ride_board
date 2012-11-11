<?php

class Login_model extends CI_Model {
	
	function login($email, $password){
		
		$this -> db -> select('id, email, password');
		$this -> db -> from ('users');
		$this -> db -> where ('email = ' . "'" . $email . "'");
		$this -> db -> where ('password = ' . "'" . sha1($password) . "'");
		$this -> db -> limit(1);
		
		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function activated($email){
		
		$this -> db -> select('id');
		$result = $this->db->get_where('users', array('activated' => '1', 'email' => $email));
		
		if($result -> num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
}