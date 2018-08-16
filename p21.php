<?php 
	
	function cond_ternary(){

		$a = 50;
		if ($a>=30) {

			echo "No is greater than 30" ."<br>";
		}else {
			echo "No is small" ."<br>";
			}
		if ($a>=20 && $a>=10) {
			echo "No is greater than both 20 and 10" ."<br>";
		}
		else {
			echo "No is small"."<br>";
			}
		echo "The no : ".$a;
	}

	cond_ternary();

?>