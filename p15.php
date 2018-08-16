<?php

	$fileinfo = basename($_SERVER['PHP_SELF']);
	$last_modify = filemtime($fileinfo);
	echo "Last Modification done: " .date('d-M-Y h:ia', $last_modify)."\n";
?>