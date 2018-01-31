<?php 
// if set cookie then remove.
$cookieurl =  $_SERVER['REQUEST_URI'];

setcookie('last_visited_url', $current_location, time()-60*60*24*30, '/'); 

header('location: https://farm2.me');

?>
