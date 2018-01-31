<?php 
//set url as a cookie
$exlink =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";



    setcookie('saveexperice', $exlink, time()+(60*60*24*30), '/');

?>
