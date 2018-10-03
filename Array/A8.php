<?php

   $arr1 = array('1','7','9','6','4','5');
  
   foreach ($arr1 as $x) {
   		echo $x. "\n";
   }
     $arr2 = '$';
   array_splice($arr1, 0, 2, $arr2);// The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.


    foreach ($arr1 as $x) {
   		echo $x;
   }

?>