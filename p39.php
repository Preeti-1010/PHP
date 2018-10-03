<?php
	
    $myfile = realpath('p1.php');
    //$open = fopen($myfile, "w");
	$fsize = filesize($myfile);
	echo $fsize;
?>