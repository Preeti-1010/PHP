<?php
	
	$n = 371;
	$len =strlen($n);	
	$cube = 0;
	$num = str_split($n); 
	for($i=0 ;$i<=$len; $i++){
	$cube = $cube + $num[$i]*$num[$i]*$num[$i]."<br>";	
	//echo $cube;
	}
	
	if($cube == $n){
		echo "The no is Armstrong :".$cube;

	}
	else{
		echo "NOt an Armstrong";
	}	

?>
