<?php
ob_start();
session_start();
	include("inc/db.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039)http://allsentsms.in/appforms/welcome.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>All SENTSMS IN-Welcome</title>
<link href="css/style-default.css" rel="stylesheet" type="text/css"><link href="css/style.css" rel="stylesheet" type="text/css">
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

<div class="clear"></div>
<!--Start Upper Menu -->
<div class="top_icon_box">
<a href="compose.php" class="thumb_icons"><img src="icon/compose.png" border="0"><br>
Compose<br>SMS</a>
<a href="Addsender.php" class="thumb_icons"><img src="icon/add_sender.png" border="0"><br>
Add<br>Sender Id</a>
<a href="#" class="thumb_icons"><img src="icon/buy_cr.png" border="0"><br>
Buy<br>Credit</a>
<a href="#" class="thumb_icons"><img src="icon/query_help.png" border="0"><br>
Query<br>Help Desk</a>
<a href="#" class="thumb_icons"><img src="icon/view_report.png" border="0"><br>
View<br>Reports</a>
<a href="change-password.php" class="thumb_icons"><img src="icon/change_pw.png" border="0"><br>
Change<br>Password</a>
<div class="clear"></div>
</div>
<!--End Upper Menu -->
<div class="right_main_box">
<div class="headng"><div class="fleft">Notice Board</div><div class="align_center"></div></div>
<div class="text_area">
<p></p>
<div class="divider"></div>
<p></p>
</div>
</div>
<div class="red">*Please recharge your account before the account expiry date to retain your balance.</div> 
</div>
<div class="clear"></div>
</div>
<div class="black_bottom">
	<div class="inner1000">Copyright allsentsms.in, All rights reserved.</div>
</div>        


</body></html>