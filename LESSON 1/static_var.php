<?php
	function foo(){
		static $index=0;

		$index++;

		echo "$index";
		} 

		foo();
		foo();
		foo();
		?>