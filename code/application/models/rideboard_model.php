<?php

class rideboard_model extends CI_Model {

	function popular_cities(){
		
		$sql = "SELECT closest_city, COUNT(trips.closest_city) as c FROM trips GROUP BY closest_city ORDER BY c DESC LIMIT 0,5"; 
		
		return $this -> db -> query($sql);
	}
	
	function two_weeks(){	
		
		$sql = "SELECT * from trips WHERE departure_date BETWEEN now() and DATE_ADD(NOW(), INTERVAL + 14 DAY)";
		$this -> db -> query($sql);
		$query = $this -> db -> get();
		return $query;
			
	}
	
	function destinations($main_city){
		
		$this -> db -> select('destination_address');
		$this -> db -> where('closeset_city = ' . "'" . $main_city . "'");
		$this -> db -> from ('trips');
		
		$query = $this -> db -> get();
		
		return $query;
	}

}