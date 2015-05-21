<?php
	$email = 'name@example.com';
	$domain = strstr($email,'@');

	echo $domain; //devuelve desde el @ incluido hasta el com
	
	$user = strstr($email,'@',TRUE);
	// me devuelve lo anterior

	echo $user;
?>