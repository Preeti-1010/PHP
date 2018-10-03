
	
<?php
ob_start();
session_start();
    if(empty($_SESSION['a_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['a_name'];


?>

	<?php
		include("inc/db.php");
           
			$fetch_user=$con->prepare("select * from admin where a_name='$sa_name'");
			$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_user->execute();
			$row=$fetch_user->fetch();
				
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)http://allsentsms.in/appforms/adminpanel.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
    
	#hide_name1{overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
</style>

<title>allsentsms.in-Administration</title>
<link href="css/style-default.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<!--Start Header -->
<div class="black_top">
<div class="inner1000">
    	<div class="user" title="Last Login : 03 Nov 2017 07:43:01 PM
Last Login IP : 122.161.173.20"><a href="#" class="white" style="text-decoration:none"> Hello <?php echo $row['a_name']?></a></div>
        <ul>
        	<li><a href="welcome.php"><img src="img/home.png" border="0"></a></li>
        	<li><a href="#">NDNC</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Developers API</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="clear"></div>
</div>
</div>
<!--End Header -->
<div class="inner1000">
<!--Start Menu -->
<div class="left_menu">
<ul>
<li class="heading"><img src="img/comp_sms.png"> User Management</li>
<li><a href="userlist.php">Users List</a></li>
<li><a href="adduser.php">Add New User</a></li>
<li><a href="smsallocation.php">SMS Allocation</a></li>
<li><a href="mis.php">SMS Reports</a></li>
<li><a href="Bulksmsallocation.php">Bulk SMS Allocation</a></li>
<li><a href="Bulksms Reports.php">Bulk SMS Reports</a></li>
<!--<li><a href="dailysms.php">Daily SMS Allocation</a></li>-->
<li><a href="newinactive.php">New Inactive Clients</a></li>
 
<li class="heading"><img src="img/settings.png"> Website Branding</li>
<li><a href="setnotice.php">Set Notice</a></li>
<li><a href="myprofile.php?edit=<?php echo $row['a_id']?>">My Profile</a></li>

</ul>
</div>