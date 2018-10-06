<?php 

	$sample = array("abcd","abc","de","hjjj","g","wer");

    $length = array_map('strlen',$sample);
    echo "The min length of string is: " .min($length)."\n";
    echo "The max length of string: ".max($length);

 ?>