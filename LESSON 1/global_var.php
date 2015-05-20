<?php
	$a = 2;
	$b= 10;

	function myTest(){ 
		global $a, $b;
		$b=$a+$b;
	}

	myTest();
	echo $b;

//OTRA FORMA

	$c = 2;
	$d= 10;

	function myTest1(){ 
	 $GLOBALS["d"] = $GLOBALS["c"] + $GLOBALS["d"];
	}

	myTest2();
	echo $d;
?>

