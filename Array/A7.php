<?php

   $arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    asort($arr);
    foreach( $arr as $key=> $value){
        echo "Age of ". $key. " ". "is ". $value . "\n";
    
    }
    
?>