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
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$row=$con->prepare("SELECT * FROM profile where sa_id='$id'");
	$row->setFetchMode(PDO::FETCH_ASSOC);
	$row->execute();
	
	$con1=$row->fetch();
			}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039)http://allsentsms.in/appforms/profile.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="content-Type" content="text/html; charset=UTF-8">

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
<div class="headng">
<div class="fleft">My Profile Settings</div><div class="align_center"></div>
<div class="clear"></div>
</div>
<div class="text_area">
<form name="frmprofile" method="post" action="">
<div class="width50"><!--Start First Half -->
<div class="width40"><span class="red">*</span> Name:</div>
<div class="width60"><input name="name" id="name" type="text" class="input_fields margin_btm" value="<?php echo $con1['sa_name']?>" style=" width:150px;" maxlength="30" title="Enter Name"></div>
<div class="clear"></div>
<div class="width40"><span class="red">*</span> Mobile:</div>
<div class="width60"><input name="mobile" id="mobile" type="text" class="input_fields margin_btm" value="<?php echo $con1['mobile']?>" style=" width:150px;" maxlength="10" title="Enter 10 digit Indian Mobile Number"></div>
<div class="clear"></div>
<div class="width40">Host:</div>
<div class="width60"><input name="host" id="host" type="text" class="input_fields margin_btm" value="<?php echo $con1['host']?>" style=" width:150px;" maxlength="50" placeholder="yourdomain.com" title="Enter your domain name"></div>
<div class="clear"></div>
<div class="width40">SMS Signature </div>
<div class="width60"><input name="signature" id="signature" type="text" class="input_fields margin_btm" value="<?php echo $con1['signature']?>" style=" width:150px;" maxlength="20" title="You can add this signature at the end of SMS while composing SMS."></div>
<div class="clear"></div>
<div class="width40">GSM Sender ID:</div>
<div class="width60 margin_btm">BUSNSS</div>
<div class="clear"></div>
<div class="width40">CDMA Sender ID:</div>
<div class="width60 margin_btm">BUSNSS</div>
<div class="clear"></div>
<div class="width40">Email:</div>
<div class="width60 margin_btm">dksolutions18@gmail.com</div>
<div class="clear"></div>
</div><!-- End First Half -->
<div class="width50">
<div class="width40">Company:</div>
<div class="width60"><input name="company" id="company" type="text" class="input_fields margin_btm" value="<?php echo $con1['company']?>" style=" width:180px;" maxlength="40" title="Enter Company Name"></div>
<div class="clear"></div>
<div class="width40">Landline:</div>
<div class="width60"><input name="std" id="std" type="text" class="input_fields margin_btm" value="<?php echo $con1['std']?>" style=" width:40px;" maxlength="8" title="Enter STD Code">&nbsp;<input name="landline" id="landline" type="text" class="input_fields margin_btm" value="<?php echo $con1['landline']?>" style=" width:120px;" maxlength="8" title="Enter Landline Phone Number"></div>
<div class="clear"></div>
<div class="width40">Website:</div>
<div class="width60"><input name="website" id="website" type="text" class="input_fields margin_btm" value="<?php echo $con1['website']?>" style=" width:180px;" maxlength="50" placeholder="http://www.yourdomain.com" title="Enter Your Website"></div>


<div class="clear"></div>
<div class="width40"></div>
<div class="width60">
</div>
<div class="clear"></div>
<div class="width40"></div>
<div class="width60">
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<input name="submit" type="submit" class="big_grey_btn margintop" value="Update">
</form>
</div>
<div class="clear"></div>
</div>
</div> <!-- End Main Box -->
</div><!-- End Right Area -->
<div class="clear"></div>
<!--End Inner Area -->
<div class="black_bottom">
	<div class="inner1000">Copyright allsentsms.in, All rights reserved.</div>
</div>      


</body></html>





<?php
if(isset($_POST['submit'])){
	
$name=$_POST['name'];
$mob=$_POST['mobile'];
$host=$_POST['host'];
$sign=$_POST['signature'];
$comp=$_POST['company'];
$std=$_POST['std'];
$landline=$_POST['landline'];
$web=$_POST['website'];	
$logout=$_POST['logouturl'];
	
$up=$con->prepare("UPDATE profile SET sa_name='$name',mobile='$mob',host='$host',signature='$sign',company='$comp',std='$std',landline='$landline',website='$web',logout_url='$logout'  WHERE sa_id='$id'");	

	
if($up->execute()){
				echo "<script>alert('Updated Your Profile')</script>";
	
			}
			else{
				echo "<script>alert('data Not  updated');</script>";
			}	
}
						 ?>