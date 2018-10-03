<?php

    if(empty($_SESSION['sa_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['sa_name'];


?>

<?php
		include("inc/db.php");
			$fetch_user=$con->prepare("select * from profile where sa_name='$sa_name'");
			$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_user->execute();
			$row=$fetch_user->fetch();
				
?>

<div class="left_menu">
<ul>
<li class="heading"><img src="icon/comp_sms.png"> SMS Box</li>
<li><a href="compose.php">Compose SMS</a></li>
<li><a href="bulk-sms.php">Send Bulk SMS</a></li>
<li class="heading"><img src="icon/management.png"> Reports</li>
<li><a href="sent-sms.php">Sent SMS</a></li>
<li><a href="sheduledsms.php">Scheduled SMS</a></li>


<li class="heading"><img src="icon/sms_temp.png"> SMS Templates</li>
<li><a href="#">Manage Templates</a></li>

<li class="heading"><img src="icon/settings.png"> Settings</li>
<li><a href="profile.php?edit=<?php echo $row['sa_id']?>">Profile Setting</a></li>
<li><a href="change-password.php">Change Password</a></li>

<li class="heading"><img src="icon/help.png">Help Desk</li>
<li><a href="#">FAQs</a></li>
<li><a href="#">Support</a></li>
<li style="border-bottom:none;"><a href="contact.php">Contact Us</a></li>
</ul>
</div>