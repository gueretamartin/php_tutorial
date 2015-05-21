
<?php
	echo "The sum of the first 10 number is: ";

	$sum = 0 ;

	for($i=1; $i <= 10; $i++){

		$sum += 1;
		echo $i;

		echo($i == 10) ? "=" : "+" ;
		}
		echo "<strong>$sum</strong>"

?>