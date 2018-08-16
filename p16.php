<?php
	
	$file = basename($_SERVER['PHP_SELF']);
	$no_of_line = count(file($file));
	echo "The no of line: ". $no_of_line; 
?>