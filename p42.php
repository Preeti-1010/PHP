<?php 
	
	$st = "Preeti";
	$arr = str_split($st);
	//echo print_r($arr);	
	$u_arr = array_values(array_unique($arr));

	if($u_arr){
		echo $u_arr[0];
	}
	else{
		echo "No";
	}
 ?>