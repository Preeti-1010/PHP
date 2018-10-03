
<?php
    session_start();
include("inc/db.php");
			
    if(empty($_SESSION['a_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['a_name'];


?>

<?php

if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$stat='Delivered';
	$up=$con->prepare("UPDATE bulk_sms SET status='$stat' where s_id='$id'");	

	if($up->execute()){
		
		echo"<script>window.open('Bulksmsallocation.php', '_self')</script>";
	}
	
	
			}
?>
