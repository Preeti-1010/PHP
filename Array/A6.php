<?php 
	
	function myfunction($value, $key){

		echo "$key : $value"."\n";
	}

	$json_format = '{
		"Title" : "Anoymous",
		"Author": "Robert",
		"Detail":{
			"Publisher": "Golu Singh"
		}
	}';
//	echo $json_format;
	$j1 = json_decode($json_format, true);
//	echo print_r($j1);
	array_walk_recursive($j1, "myfunction");// used to run each element of array in user defined function.
 ?>