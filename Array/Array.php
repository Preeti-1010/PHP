<?php 

	$arr = array(66, 34 ,12, 0, 13);
	$arr1 =array(20, 22,33,1,5);

	for($i=0;$i>count($arr);$i++){
		if($arr[$i]> $arr[$i+1]){
			$arr[$i] .= $arr[$i+1];
			$arr[$i+1] .=$arr[$i];
		}else{
			$arr[$i]= $arr[$i];
		}
	}
 ?>
