<?php

//convierte la cadena en caracteres html 

	$str = " cambia a html "; 

	echo htmlentities($str);
	echo htmlentities($str,ENT_QUOTES);

?>