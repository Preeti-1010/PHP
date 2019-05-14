<?php 
include 'db.php';

$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

    $sql =  "DELETE FROM states WHERE id='".$id."'";
    $result =  mysqli_query($db,$sql);

    

?> 

 ?>