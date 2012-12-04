<?php

class Trip_Model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	function current_future_date($date_string)
	{
		list($return_month,$return_day,$return_year) = explode('-', $date_string);
		$date = mktime(0,0,0,$return_month,$return_day,$return_year);
		$today=mktime(0,0,0,date("m"),date("d"),date("y"));
		if($date<$today){
			return false;
		}
		else
		{
			return true;
		}
	}
	
	function verify_dates($depart, $return)
	{
		list($ret_month, $ret_day, $ret_year) = explode('-', $return);
		list($dep_month, $dep_day, $dep_year) = explode('-', $depart);
		$return_date = mktime(0,0,0,$ret_month,$ret_day,$ret_year);
		$depart_date = mktime(0,0,0,$dep_month,$dep_day,$dep_year);
		if($return_date < $depart_date)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	function parse_address($address)
	{
		$string_exist = stristr($address, ',');
		if(empty($string_exist))
		{
			return array('error','error','error');
		}
		else
		{
			list($city, $rest_string) = explode(',', $address);
			$state = substr($rest_string, 0, 3);
			$zip = substr($rest_string, 4);
			$error_string = 'error';
			if(empty($state) || empty($zip) || strlen($zip) != 5 || strlen($state) != 3)
			{
				return array($error_string, $error_string, $error_string);
			}
			else
			{
				return array($city, $state, $zip);
			}
			
		}
	}
	
	function format_date($date)
	{
		list($month, $day, $year) = explode('-', $date);
		$return_date = $year . '-' . $month . '-' . $day;
		return $return_date;
	}
}
