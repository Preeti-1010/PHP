<?php

	$fileinfo = file($_SERVER['PHP_SELF']);
	$last_modify = filemtime($fileinfo);
	echo "Last Modification done: " .date('DD-MM-YYYY', $last_modify)."\n";
?>