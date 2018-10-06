<?php 

	$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

	foreach ($Color as $key => $value){
		$lower = strtoupper($value);
		echo $lower. "\n";
	 }
	 
	 foreach($Color as $key => $value){
		$upper = strtolower($value);
		echo $upper. "\n";
	}
 ?>