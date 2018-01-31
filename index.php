<?php 
// if set cookie url then redirect that link.
	if(isset($_COOKIE['last_visited_url'])){
		$redirect_url = $_COOKIE['last_visited_url'];
		header('Location: '. $redirect_url); // redirect url
	}


?>
