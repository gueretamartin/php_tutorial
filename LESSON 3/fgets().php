<?php 

/* Abro el archivo, leo y muestro linea por linea del archivo 
	Lo abro como solo lectura
	*/

	$file = fopen("myfile.txt", "r") or exit ("Unable to open file!");

	while(!feof($file)){
		echo fgets($file) . "<br />";
	} fclose($file);
?>