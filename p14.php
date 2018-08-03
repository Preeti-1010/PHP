<?php

$full_line = file('https://www.w3resource.com/');

foreach($full_line as $key => $line){

	echo "Line No. {$key}". htmlspecialchars($line)."<br>";
}

?>
