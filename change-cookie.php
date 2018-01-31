<?php
	$current_location = $_SERVER['REQUEST_URI'];
	
		if(isset($_COOKIE['last_visited_url'])){
		 $cookie_location = $_COOKIE['last_visited_url']; 
		

		 if($current_location != $cookie_location){ 

		 	setcookie('last_visited_url', $current_location, time()+60*60*24*30, '/'); 
		 } 
		} else {
		 setcookie('last_visited_url', $current_location, time()+60*60*24*30, '/'); 
		} 
  ?>
