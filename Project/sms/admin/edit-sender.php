<?php
    session_start();
include("inc/db.php");
			
    if(empty($_SESSION['a_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['a_name'];


?>
<?php
		include("inc/db.php");
			$fetch_user=$con->prepare("select * from new_senderid where sa_name='$sa_name'");
			$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_user->execute();
			$run=$fetch_user->fetch();
?>


<?php

if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$stat='Approved';

	$up=$con->prepare("UPDATE new_senderid SET status='$stat' where id='$id'");	

	if($up->execute()){
		
		echo"<script>window.open('welcome.php', '_self')</script>";
	}

	
	}
?>