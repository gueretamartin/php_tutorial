<?php

/* El metodo POST enviar las variables internamente, no se pasan por url 
el usuario no puede modificar directamente el valor de la variable
no me concatena nada en la URL	*/ 
	
	if($_POST["enviar"]){
		echo $_POST["nombre"];
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
	