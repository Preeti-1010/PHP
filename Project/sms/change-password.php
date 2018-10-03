
<?php
ob_start();
session_start();
    if(empty($_SESSION['sa_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['sa_name'];
$pwd=$_SESSION['sa_password'];
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://allsentsms.in/appforms/changepassword.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>All Sent sms | Welcome</title>
<link href="css/style-default.css" rel="stylesheet" type="text/css"><style type="text/css">
<!--
.style2 {
	font-size: 14px;
	color: #FF6666;
}
-->
</style>
<style type="text/css">
#passwordStrength
{
        height:10px;
        display:block;
        float:left;
}
.strength0
{
       width:250px;
       background:#cccccc;
}
.strength1
{
        width:50px;
        background:#ff0000;
}
.strength2
{
       width:100px;    
       background:#ff5f5f;
}
.strength3
{
       width:150px;
        background:#56e500;
}
.strength4
{
       background:#4dcd00;
        width:200px;
}
.strength5
{
       background:#003900;
       width:200px;
}
</style>
<script language="javascript" type="text/javascript">
function passwordStrength(password)

{
        var desc = new Array();
        desc[0] = "Very Weak";
        desc[1] = "Weak";
        desc[2] = "Better";
        desc[3] = "Medium";
        desc[4] = "Strong";
        desc[5] = "Strongest";
        var score   = 0;
        //if password bigger than 6 give 1 point
        if (password.length > 6) score++;
        //if password has both lower and uppercase characters give 1 point      
        if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;
        //if password has at least one number give 1 point
        if (password.match(/\d+/)) score++;
        //if password has at least one special caracther give 1 point
        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;
        //if password bigger than 12 give another 1 point
        if (password.length > 12) score++;
         document.getElementById("passwordDescription").innerHTML = desc[score];
         document.getElementById("passwordStrength").className = "strength" + score;
}
</script>
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
<div class="headng"><div class="fleft">Change Password</div><div class="align_center"></div>
</div>
<div class="text_area">
<form name="frmpass" id="frmpass" method="post">
<div class="red margin_btm">Update your account password. Always set a strong password, which helps to prevent unauthorized access to your account.</div>
<div class="width30"><span class="red">*</span> Current Password:</div>
<div class="width70"><input name="cpwd" id="cpwd" type="password" class="input_fields margin_btm" style=" width:200px;" maxlength="20"></div>
<div class="clear"></div>
<div class="width30"><span class="red">*</span> New Password:</div>
<div class="width70"><input name="npwd" id="npwd" type="password" class="input_fields margin_btm" style=" width:200px;" onkeyup="passwordStrength(this.value);" maxlength="20" title="Maximum 20 Characters"></div>
<div class="clear"></div>
<div class="width30"><span class="red">*</span> Re Enter Password:</div>
<div class="width70"><input name="confirm" id="npwd2" type="password" class="input_fields margin_btm" style=" width:200px;" maxlength="20" title="Maximum 20 Characters"></div>
<div class="clear"></div>
<div class="width30">Password Strength:</div>
<div class="width70"><div id="passwordDescription" style="font-weight:bold">Password not entered</div></div>
<div class="clear"></div>
<div class="width30">&nbsp;</div>
<div class="width70"><div id="passwordStrength" class="strength0" style="width:150px"></div></div>
<div class="clear"></div>
<div style="text-align:center"><input name="update" is="cmdupdate" type="submit" class="big_grey_btn margintop" value="Update"></div>
</form>
</div><!-- End Text Area -->
</div><!--End Right Main Box-->
</div><!--END RIGHT AREA -->
<div class="clear"></div>
</div>
<div class="black_bottom">
	<div class="inner1000">Copyright allsentsms.in, All rights reserved.</div>
</div>
<script type="text/javascript" language="javascript">
	document.getElementById("cpwd").focus();
</script>        


</body></html>




<?php
if(isset($_POST['update'])){
	
include("inc/db.php");
$current=$_POST['cpwd'];
$new=$_POST['npwd'];
$confirm=$_POST['confirm'];
	
$result=$con->prepare("select * from profile where sa_password='$current' ");
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();
$run=$result->fetch();
	
if($run['sa_password'] == $current && $new == $confirm){
 

$up=$con->prepare("UPDATE profile SET sa_password='$new' WHERE sa_name='$sa_name'");	
		
if($up->execute()){
	

				echo "<script>alert('Password is Changed')</script>";
	
			}
			else{
				echo "<script>alert('not changed');</script>";
			}	
}
}
	?>