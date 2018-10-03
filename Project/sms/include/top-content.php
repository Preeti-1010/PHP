
<?php
    
    if(empty($_SESSION['sa_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['sa_name'];
$sa_email=$_SESSION['sa_email'];
?>
<?php
		include("inc/db.php");
			$fetch_user=$con->prepare("select * from profile where sa_name='$sa_name'");
			$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_user->execute();
			$exe=$fetch_user->fetch();
?>
<div class="top_right_txt">
<span class="purple">Welcome <?php echo $row['sa_name']?> . <br>Profile ID:<?php echo $row['sa_id']?><br>

Your SMS Credit is: <?php echo $row['sms_credit'] ?><br>
Expiry Date:<?php echo $exe['expiry_after']?></span>


</div>