<?php
	
	$x = array(1,2,3,4,5);
	unset($x[4]);
	$x = array_values($x);
	print_r($x);
 ?>