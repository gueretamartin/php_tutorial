<?php 
	echo substr("Hello World!", 6); //world!
	echo substr("Hello World!", 6,5); //world

	//tambien se le puede dar valores negativos, y cuenta de atras para adelante

	//SUBSTR_COUNT()

	//cuenta la cantidad de veces que aparece una cadena dentro de otra
	echo substr_count("Hello world. the world is nice","world");

?>