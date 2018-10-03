
<?php 

	include('header.php');
?>

<!--End Menu -->
<div class="right_area">
<div class="top_right_txt">
<span class="purple">Welcome <?php echo $row['a_name']?>. Profile ID:<?php echo $row['a_id']?></span><br>
</div>
	
<div class="clear"></div>
<!--Start Upper Menu -->

<!--End Upper Menu -->
<div class="right_main_box">
<div class="headng">
<div class="fleft">Reseller Interface</div><div class="align_center"></div>
<div class="clear"></div>
</div>
<form  id="frmaddjoin" action="" method="post">
<div class="text_area">
<div class="width50">
<div class="width30"><span class="red">*</span> User :</div>
<div class="width60"><input name="user" id="user" maxlength="20" title="Valid User Name" type="text" class="input_fields margin_btm" style=" width:100px;" value=""></div>
<div class="clear"></div>
<div class="width30"><span class="red">*</span> Email :</div>
<div class="width60"><input name="email" id="email" maxlength="50" title="Valid Email Address" type="text" class="input_fields margin_btm" style=" width:200px;" value=""></div>
<div class="clear"></div>
<div class="width30"><span class="red">*</span> Password :</div>
<div class="width60"><input name="pwd" id="pwd" maxlength="50" title="Valid Pwd" type="text" class="input_fields margin_btm" style=" width:200px;" value=""></div>
<div class="clear"></div>
<div class="width30"><span class="red">*</span> Name :</div>
<div class="width60"><input name="name" id="name" maxlength="30" type="text" title="Client Name" class="input_fields margin_btm" style=" width:150px;" value=""></div>
<div class="clear"></div>
<div class="width30"><span class="red">*</span> Mobile: 91-</div>
<div class="width60"><input name="mobile" id="mobile" maxlength="10" type="text" title="10 digit Mobile Number" class="input_fields margin_btm" value="" style=" width:150px;"></div>
<div class="clear"></div>
<div class="width30"><span class="red">*</span>Sender ID:</div>
<div class="width60"><input name="sender" id="sender" maxlength="6" type="text" class="input_fields margin_btm" title="Sender (Maximum 6 digit alpa only)" style="width:150px;" value="BUSNSS" disabled="disabled"></div>
<div class="clear"></div>
<div class="width30">Expiry After</div>
<div class="width60">
<input type="date" name="validity"  class="input_fields margin_btm" style="width:100px;" maxlength="4" title="max 2000 days" value="">
Days</div>
<div class="clear"></div>

<div class="margin_btm"><label><input name="chksendmail" id="chksendmail" type="checkbox" class="check_input" checked="checked" title="Check To Send Mail to Client"> Send Mail</label> <label><input name="chksendsms" id="chksendsms" type="checkbox" class="check_input marginleft" checked="checked" title="Check To Send SMS to Client">Send SMS To Client</label></div>
</div>
<div class="width50">
<div class="width40">Client Type:</div>
<div class="width60">
	<select name="usertype" id="usertype" class="input_fields margin_btm" style="width:150px">
			<option value="client">Client</option>
		</select>
</div>
<div class="clear"></div>
<div class="width40">Company:</div>
<div class="width60"><input name="company" id="company" type="text" class="input_fields margin_btm" value="" style=" width:180px;" maxlength="40"></div>
<div class="clear"></div>
<div class="width40">Land Line:</div>
<div class="width60"><input name="std" id="std" type="text" class="input_fields margin_btm" value="" style=" width:40px;" maxlength="8" title="STD Code">&nbsp;<input name="landline" id="landline" type="text" class="input_fields margin_btm" value="" style=" width:120px;" maxlength="8" title="Phone Number ">
</div>
<div class="clear"></div>
<div class="width40">Max Sender ID :</div>
<div class="width60"><input name="s_id" id="maxsender" type="text" class="input_fields margin_btm" value="" style=" width:50px;" maxlength="4" title="Max Sender allowed to user">&nbsp;Cost/Sms&nbsp;<input name="cost" id="cost" type="text" class="input_fields margin_btm" value="" style=" width:50px;" maxlength="5" title="Cost/Sms">
</div>
<div class="clear"></div>
<div class="width40">SMS Credit :</div>
<div class="width60"><input name="sms_credit" id="credit" type="text" class="input_fields margin_btm" value="" maxlength="7" style="width:70px;" title="Enter sms credits."> 
SMS Credits</div>
<div class="clear"></div>
<div class="width40">Voice Credit :</div>
<div class="width60"><input name="voice_credit" id="vcredit" type="text" class="input_fields margin_btm" value="" maxlength="7" style="width:70px;" title="Enter voice credits."> 
Voice Credits</div>
<div class="clear"></div>
<div class="margin_btm">
</div>
</div>
<div class="clear"></div>
<input name="add" id="cmdadd" type="submit" class="big_grey_btn margintop" value="Add New Member Now">
</div></form>
<div class="clear"></div>
</div><!--End Right Main Box-->
</div><!--END RIGHT AREA -->
<div class="clear"></div>
</div>

<?php 

	include('footer.php');
?>


<?php
if(isset($_POST['add'])){
	
include("inc/db.php");
	
$user=$_POST['user'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$expiry=$_POST['validity'];
$comp=$_POST['company'];
$s_id=$_POST['s_id'];
$land=$_POST['landline'];
$std=$_POST['std'];
$cost=$_POST['cost'];	
$sc=$_POST['sms_credit'];
$vc=$_POST['voice_credit'];


$conn=$con->prepare("INSERT INTO profile(sa_user,sa_email,sa_password,sa_name,mobile,expiry_after,company,std,landline,sender_id,cost,sms_credit,voice_credit) VALUES('$user','$email','$pwd','$name','$mobile','$expiry','$comp','$std','$land','$s_id','$cost','$sc','$vc')");
	
if($conn->execute()){
	
	echo "<script>alert('User successfully added');</script>";	
			}
			else{
				echo "<script>alert('Data Not Added');</script>";
			}	
}

?>