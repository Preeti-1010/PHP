

<?php 

	include('header.php');
?>

<?php
include("inc/db.php");

if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$row_1=$con->prepare("SELECT * FROM admin where a_name='$sa_name'");
	$row_1->setFetchMode(PDO::FETCH_ASSOC);
	$row_1->execute();
	
	$con_1=$row_1->fetch();
			}
?>


<!--End Menu -->
<div class="right_area">
<div class="top_right_txt">
<span class="purple">Welcome  <?php echo $row['a_name']?>. Profile ID:<?php echo $row['a_id']?></span><br>
</div>
	
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
<div class="width60"><input name="name" id="name" type="text" class="input_fields margin_btm" value="<?php echo $con_1['a_name']?>" style=" width:150px;" maxlength="30" title="Enter Name"></div>
<div class="clear"></div>
<div class="width40"><span class="red">*</span> Mobile:</div>
<div class="width60"><input name="mobile" id="mobile" type="text" class="input_fields margin_btm" value="<?php echo $con_1['a_phone']?>" style=" width:150px;" maxlength="10" title="Enter 10 digit Indian Mobile Number"></div>
<div class="clear"></div>
<div class="width40">Host:</div>
<div class="width60"><input name="host" id="host" type="text" class="input_fields margin_btm" value="<?php echo $con_1['a_website']?>" style=" width:150px;" maxlength="50" placeholder="yourdomain.com" title="Enter your domain name"></div>
<div class="clear"></div>
<div class="width40">SMS Signature </div>
<div class="width60"><input name="signature" id="signature" type="text" class="input_fields margin_btm" value="<?php echo $con_1['signature']?>" style=" width:150px;" maxlength="20" title="You can add this signature at the end of SMS while composing SMS."></div>
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
<div class="width60"><input name="company" id="company" type="text" class="input_fields margin_btm" value="<?php echo $con_1['company']?>" style=" width:180px;" maxlength="40" title="Enter Company Name"></div>
<div class="clear"></div>
<div class="width40">Landline:</div>
<div class="width60"><input name="std" id="std" type="text" class="input_fields margin_btm" value="<?php echo $con_1['std']?>" style=" width:40px;" maxlength="8" title="Enter STD Code">&nbsp;<input name="landline" id="landline" type="text" class="input_fields margin_btm" value="<?php echo $con_1['landline']?>" style=" width:120px;" maxlength="8" title="Enter Landline Phone Number"></div>
<div class="clear"></div>
<div class="width40">Website:</div>
<div class="width60"><input name="website" id="website" type="text" class="input_fields margin_btm" value="<?php echo $con_1['a_website']?>" style=" width:180px;" maxlength="50" placeholder="http://www.yourdomain.com" title="Enter Your Website"></div>
<div class="clear"></div>
<div class="width40">Logout Url:</div>
<div class="width60"><input name="logouturl" id="logouturl" type="text" class="input_fields margin_btm" value="<?php echo $con_1['logout_url']?>" style=" width:150px;" maxlength="50" placeholder="http://www.yourdomain.com" title="Enter logout url on which control will be transfered on logout."></div>
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
<input name="update" type="submit" class="big_grey_btn margintop" value="Update">
</form>
</div>
<div class="clear"></div>
</div>
</div> <!-- End Main Box -->
</div><!-- End Right Area -->
<div class="clear"></div>
<!--End Inner Area -->
<?php 

	include('footer.php');
?>

<?php
if(isset($_POST['update'])){
	
$name=$_POST['name'];
$mob=$_POST['mobile'];
$host=$_POST['host'];
$sign=$_POST['signature'];
$comp=$_POST['company'];	
$std=$_POST['std'];	
$landline=$_POST['landline'];
$web=$_POST['website'];	
$logout=$_POST['logouturl'];
	
$up=$con->prepare("UPDATE admin SET a_name='$name',a_phone='$mob',host='$host',signature='$sign',company='$comp',std='$std',landline='$landline',a_website='$web',logout_url='$logout'  WHERE a_name='$sa_name'");	

	
if($up->execute()){
				echo "<script>alert('Updated Your Profile')</script>";
	
			}
			else{
				echo "<script>alert('data Not  updated');</script>";
			}	
}
						 ?>