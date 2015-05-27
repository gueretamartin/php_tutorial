<?php
// sirve para pasarle un dia como parametro  mktime(hour, minutes, seconds, month, day, year)

	$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
	echo "Tomorrow is " . date("Y/m/d",$tomorrow);
?>