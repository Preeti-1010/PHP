<?php 
		
	$arr  = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

	$tot_arr = 0;
	$tot_length = count($arr);

	foreach ($arr as $x) {

		$tot_arr += $x;
	}
	$avg_temp = $tot_arr/$tot_length ;

	$sorted = sort($arr);

	for($i = 1; $i<5; $i++){

		echo "The lowest Temp : ". $arr[$i]."\n" ;
	}

	for($i = $tot_length - 5; $i< $tot_length; $i++){

		echo "The Highest Temp: ". $arr[$i]."\n";
	}
	
 ?>