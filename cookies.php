<?php
	$cookieName = "user";
	$cookieValue = "tarif";
	$time = 5;
	echo "time: ".time()$"\n";
	setcookie($cookieName,$cookieValue,var_dump(json_decode(time()+5)),"/");
	
?>

