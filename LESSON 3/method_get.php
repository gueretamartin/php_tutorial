<?php

/* El metodo get te muestra en la url el nombre y el valor de la variable
	El usario puede modificar facilmente el valor .
	Google utiliza el metodo get para las busquedas	*/ 
	
	if($_GET["enviar"]){
		echo $_GET["nombre"];
	} else {
		?>
		<form action = "method_get.php" method ="get">
		<p>
		 Escribe tu nombre : <input name ="nombre" type ="text"/>
		</p>

		<p>
		<input name = "enviar" type = "submit" value="Enviar datos"/>
		</p>
		</form>
		<?php
	}
?>
	