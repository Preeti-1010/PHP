<?php 
	
	function multiply_two_list($x1, $y2){

		 $a = explode(" ", $x1);
		 $b = explode(" ", $y2);
		 foreach ($a as $key => $value) {
		  	$multiple[$key] = $a[$key]*$b[$key];
		  }
		 return implode(' ',$multiple);
	}
	echo multiply_two_list(("12 33 4"),("0 6 7"))."\n";
 ?>