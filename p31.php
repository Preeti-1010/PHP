<?php
	
	$a = 20;
	$b = 40;

	//Swappiing using third variable//
	$temp = $a ;
	$a = $b;
	$b = $temp;
	echo "Swapping Done: ". $a ." and ". $b."<br>";

	//Swapping withoout third variable//
	echo "Before Swapping: ". $a. " and ". $b."<br>";
	list($a, $b) = array($b , $a);
	echo "After Swapping: ". $a . " and ". $b;

?>