<?php 

/* Abro el archivo, leo caracter por caracter
	Lo abro como solo lectura
	*/

	$file = fopen("myfile.txt", "r") or exit ("Unable to open file!");

	while(!feof($file)){
		echo fgetc($file) ;
	} fclose($file);
?>