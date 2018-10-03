<?php
function without_mod($a, $b){
	$div = (int)($a/$b);
	$mod = $a-$b*$div;
	return $mod; 
 }

 echo without_mod(13,5);
?>