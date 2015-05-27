<?php

/* CON EL METODO REQUEST, TOMO LOS DATOS IGUAL 
Y DESPUES EN EL FORMULARIO LE DEFINO EL METODO POR EL CUAL
QUIERO PASAR LOS DATOS, FUNCIONA TANTO COMO PARA GET COMO PARA POST	*/ 
	
	if($_REQUEST["enviar"]){
		echo $_REQUEST["nombre"];
	} else {
		?>
		<form action = "method_post.php" method ="post">
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
	