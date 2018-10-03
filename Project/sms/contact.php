<?php
ob_start();
session_start();
    if(empty($_SESSION['sa_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['sa_name'];

?>

 <?php
		include("inc/db.php");
			$data=$con->prepare("select * from admin ");
			$data->setFetchMode(PDO::FETCH_ASSOC);
			$data->execute();
            $row1=$data->fetch();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039)http://allsentsms.in/appforms/profile.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>All sent sms | My Profile</title>
<link href="css/style-default.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Start Header -->
<div class="black_top">
<?php include("include/top-header.php"); ?>
</div>
<!--End Header -->
<div class="inner1000">
<!--Start Menu -->
<?php include("include/left-sidebar.php"); ?>

<!--End Menu -->
<div class="right_area">
<?php include("include/top-content.php"); ?>
<div class="clear"></div>
<!--Start Upper Menu -->

<!--End Upper Menu -->
<div class="right_main_box">
<div class="headng"><div class="fleft">CONTACT US</div>
</div>
<div class="text_area">
<div class="sorting_div">
  <div class="width10">&nbsp;</div><div class="width10">Mobile</div><div class="width10">-</div><div class="width50 margin_btm">&nbsp;<?php echo $row1['a_phone']; ?></div>
  <div class="clear"></div>
  <div class="width10">&nbsp;</div><div class="width10">Email</div><div class="width10">-</div><div class="width50 margin_btm">&nbsp; <?php echo $row1['a_email']; ?></div>
  <div class="clear"></div>
  <div class="width10">&nbsp;</div><div class="width10">Website</div><div class="width10">-</div><div class="width50 margin_btm">&nbsp; <?php echo $row1['a_website']; ?></div>
  <div class="clear"></div>
  <div class="width10">&nbsp;</div><div class="width10">Company</div><div class="width10">-</div><div class="width50 margin_btm">&nbsp; <?php echo $row1['company']; ?></div>
  <div class="clear"></div>
  <div class="width10">&nbsp;</div><div class="width10">Landline</div><div class="width10">-</div><div class="width50 margin_btm">&nbsp; <?php echo $row1['landline']; ?></div>
  <div class="clear"></div>
</div>
</div><!-- End Text Area -->
</div>
</div> <!-- End Main Box -->
</div><!-- End Right Area -->
<div class="clear"></div>
<!--End Inner Area -->
<div class="black_bottom">
	<div class="inner1000">Copyright allsentsms.in, All rights reserved.</div>
</div>      


</body></html>