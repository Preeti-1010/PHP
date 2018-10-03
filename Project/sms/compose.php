<?php
ob_start();
session_start();
    if(empty($_SESSION['sa_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['sa_name'];
$email=$_SESSION['sa_email'];
?>
<?php
		include("inc/db.php");
			$fetch_user=$con->prepare("select * from profile where sa_name='$sa_name'");
			$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_user->execute();
			$row=$fetch_user->fetch();
?>


 





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!--	<script>
	
		   public function getBalance()
    {
        $http = new Http();

        $response = $http->sendHttp('GET', 'balance', $this->headers);

        if ($response->status == 200) {
            $data = json_decode($response->message);

            return $data->balance;
        } else {
            throw new RequestFail($response->message, $response->status);
        }
    }
	
	</script>-->

   
    <title>allsentsms.in Welcome</title>
<link href="icon/style-default.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="icon/style.css">
<script language="javascript" type="text/javascript" src="js/composen.js.download"></script>
<script language="javascript" type="text/javascript">
//Function: To remove spaces in the field
	function EliminateSpace(aField)
	{
		var i, sVal, sNewVal;
		sNewVal = '';
		sVal = aField.value;
		for (i = 0; i < sVal.length; i++) 
		{
			if (sVal.charAt(i) != ' ')
			{
				sNewVal = sNewVal + sVal.charAt(i);
			}
		}
		if (sNewVal != aField.value) 
		{
			aField.value = sNewVal;
		}
	}	
	<!--Check Mobile No. -->
    function verify()
	{	
		EliminateSpace(document.myform.pno);
		sval=document.myform.pno.value;		
		for(i=0;i<sval.length;i++)
		{
			if((sval.charAt(i)>='0' && sval.charAt(i)<='9') || sval.charAt(i)==',' || sval.charAt(i)=='\r' || sval.charAt(i)=='\n' || sval.charAt(i)=='\t')
				{        
					
				}
			else
				{
					window.alert("Enter only Numeric value Mobile Mumbers.");
					return false;
				}  
		}
		if(document.myform.message.value=="")
		{
			alert("Please Enter Text Message");
			document.myform.message.focus();
			return false;
		}
		else
		{
			//savecredits();
			return updateTextBoxCounter();
		}	
}
</script>
<script language="JavaScript">
function showDate(id) {
	ge1=document.getElementById('enable');
	ge2=document.getElementById('disable');	
	if(id==1) {
		ge2.style.display="block";
		ge1.style.display="none";		
	}
	if(id==2) {
		ge1.style.display="block";
		ge2.style.display="none";
	}
}
</script>
<script language="javascript" type="text/javascript">
function savecredits2()
{
	 msgCount=0;
	 msgCount = document.myform.message.value.length;
	 if (msgCount <= 70) {
         msgCount = 1;
      }
      else {
         msgCount += (63-1);
         msgCount -= (msgCount % 63);
         msgCount /= 63;
      }
	  document.getElementById("hcredits").value=msgCount;
}
</script>
<script src="js/selecttmp.js.download" language="javascript" type="text/javascript"></script>
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
<div class="margintop"></div>
<!--End Upper Menu -->
<div class="right_main_box">
<div class="headng"><div class="fleft">Compose SMS</div>
</div>
<div class="align_left green bold" style="font-weight:bold"></div>
<div class="text_area">
<form method="post" name="myform" id="myform">
<input type="hidden" name="hcredits" id="hcredits">
<div class="width50"><span class="font13 green">GSM Sender ID</span> <a href="#" class="question_hint"><img src="img/question.gif" border="0"><span><h6 class="green">Sender ID</h6>Sender ID, also known as Originating Address (OA) or sender identity, is the number or name that is displayed on the recipient's mobile phone when an SMS is received.</span></a><br>
<select name="ddlsender" id="ddlsender" class="input_fields margintop" style="width:200px;">
		<option value="BUSNSS" selected="selected">BUSNSS</option>
		</select>
</div>
<div class="width50"><span class="font13 purple">&nbsp;</span> <br>
  <select name="select" class="input_fields margintop" style="width:200px; display:none">
    <option>9800000000</option>
  </select>
</div>
<div class="clear"></div>
<label><input name="chkSender" id="chkSender" type="checkbox" class="margintop check_input" onclick="updateTextBoxCounter();"><span class="purple">Add Sender in Message</span></label>
  <div class="divider"></div>
  <a class="small_grey_btn" href="Addsender.php" class="rv_button closed">Add Sender ID</a>&nbsp;&nbsp;
  <a class="small_grey_btn" href="#">Manage Sender ID</a>
  <div class="divider"></div>
 
  
  
  
  <p class="margin_btm">You have the option to send SMS to Mobile Number or Group or Both.</p>
  <div class="width50"><span class="font13 green">Mobile Number</span><br>
<textarea name="phone" id="pno" style="width:280px; height:50px;" class="input_fields margintop"></textarea>
</div>
<div class="width50">
<div class="yellow_bg" style="margin-bottom:8px;">Example to send more than one mobile number
980000000,9191919191,90000125456,9890000000</div>
<label><input name="chkduplicate" id="chkduplicate" type="checkbox" class="check_input" checked="checked"> <span class="purple">Remove Duplicate Number</span></label>
<label><input name="chkinvalid" id="chkinvalid" type="checkbox" class="check_input" checked="checked"> <span class="purple">Remove Invalid Numbers</span></label>
</div>
<div class="clear"></div>
<div class="divider"></div>
<div class="width50"><span class="font13 green">Message </span><br>
<textarea name="msg" id="message" style="width:280px; height:80px;" class="input_fields margintop margin_btm" onclick="updateTextBoxCounter();" onkeyup="updateTextBoxCounter();" onchange="updateTextBoxCounter();"></textarea>


<br>
<input name="setdate" id="setdate" onclick="showDate(1);" type="radio"  value="now" checked="checked">Now&nbsp;&nbsp;
<input name="setdate" id="setdate" onclick="showDate(2);" type="radio"  value="schedule">Schedule
								<div id="enable" class="hide">
								<input value="sms2" name="frm" type="hidden">
								<table class="border" cellpadding="5" cellspacing="0" width="100%">
								<tbody>
									<tr><td colspan="5" class="font13 green">Schedule Date Time</td></tr>
									<tr><td class="text">Time</td><td class="text">
									<input type="time" name="starttime" class="form-control">
									</td>
								</tr>
								<tr>
									<td class="text">Date</td><td class="text">					
								 <input type="date" name="startdate" class="form-control">
                                   
                                   							
									</td>
								  </tr>
								</tbody>
								</table>
								</div>	
								<div id="disable"></div>
<!-- End Radio Buttons -->
<div class="margintop" style="text-align:center"><input name="send" class="big_grey_btn" value="Send SMS Now" type="submit" onclick="return verify();"></div>



<br><span class="font13 green">Signature</span><label>
<input type="checkbox" name="chkSig" id="chkSig" class="marginleft checkinput" onclick="updateTextBoxCounter();" onkeyup="updateTextBoxCounter();" onchange="updateTextBoxCounter();"><span class="purple">Add Signature in Message</span></label><br>
<input name="sig" id="sig" type="text" style="width:280px;" class="input_fields margintop margin_btm" value=""><br>
<span class="font13 green">Remark</span><br>
<input type="text" id="remark" name="remark" class="input_fields margintop margin_btm" maxlength="12">
<!--Message Type -->
<div class="white_bg border_btm_n">
<div class="width50">
<input type="radio" name="rdo" id="rdo" class="check_input" value="0" checked="checked">  Text
<input type="radio" name="rdo" id="rdo" class="check_input" value="1">  Flash
</div>
<div class="width50">&nbsp;</div>
<div class="clear"></div>
</div>
<!--End Input Message Type -->
<div class="white_bg border_btm_n">
<div class="width50"><label><input name="longsms" id="longsms" value="1" type="checkbox" class="check_input"> <span class="purple">Allow Long SMS</span></label></div>
<div class="width50"><label><input name="unicodesms" id="unicodesms" value="1" type="checkbox" class="check_input"> <span class="purple">Allow Unicode</span></label></div>
<div class="clear"></div>
</div>
<div class="full_border red">Counts 70 Chars as 1 sms unit (Only if body contains unicode characters.) </div>
<div class="width30">
<div class="grey_row column green"><span id="chars" name="units" style="color:#FF0000; font-weight:bold">0</span> characters</div>
</div>
<div class="width70">
<div class="white_row column"><strong>For Text Message</strong><br>
  1-160 characters = 1 SMS Credit.<br>
  161-306 characters = 2 SMS Credits.<br>
  307-459 characters = 3 SMS Credits.</div>
</div>
<div class="width30">
<div class="grey_row column green"><span id="credits" name="units" style="color:#FF0000; font-weight:bold">0</span> SMS Credit(s)</div>
</div>
<div class="width70">
<div class="white_row column"><strong>For Unicode Message</strong><br>
  1-70 characters = 1 SMS Credit.<br>
  71-134 characters = 2 SMS Credits.<br>
  127-201 characters = 3 SMS Credits.</div>
</div>
<div class="clear"></div>
<!--Start Radio Buttons -->


</div>
<div class="width50">
<div class="width46" style="border:1px solid #dcdcdc;">
<span class="font13 purple" style="line-height:30px">Message Templates</span><a href="" class="question_hint"><img src="img/question.gif" border="0"><span><h6 class="purple">Message Template</h6>A Message Template  is a pre-formatted file type that can be used to quickly create a specific message file. Users have the option to create and save their own message templates and edit them as &amp; when required.</span></a>
	
</div>
<div class="width3">&nbsp;</div>
<div class="width46" style="border:1px solid #dcdcdc;">
<span class="font13 purple" style="line-height:30px">Group List</span><a href="" class="question_hint"><img src="img/question.gif" border="0"><span><h6 class="purple">Group List</h6>The Group List is a concise list of multiple numbers on which you can send any message at once.</span></a>
	
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</form>
</div><!-- End Text Area -->
</div><!--End Right Main Box-->
</div><!--END RIGHT AREA -->
<div class="clear"></div>
</div>
<div class="black_bottom">
	<div class="inner1000">Copyright allsentsms.in, All rights reserved.</div>
</div>


</body></html>



<?php
	if(isset($_POST['send']))
	{
		
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
		$status="Sending";
		$digit="10";
		$cht="160";
		
		$setradio=$_POST['setdate'];
			if($setradio == 'schedule')	
			{
								
				$time=$_POST['starttime'];
				$date=$_POST['startdate'];
				$add_message=$con->prepare("insert into send_sms(sender_id,phone,msg,status,sms_date,s_date,s_time)
				values('$email', '$phone','$msg','$status',NOW(),'$date','$time')");
				if($add_message->execute()){
			
			
				if(strlen($msg)<=160){
								$res=$con->prepare("SELECT * FROM profile WHERE sa_name='$sa_name'");
     $res->setFetchMode(PDO::FETCH_ASSOC);
	 $res->execute();
    while( $rs=$res->fetch() ) {

			$remaining=$rs['sms_credit']-1;
	  
    $qupdate = $con->prepare("UPDATE profile SET sms_credit = '$remaining' WHERE sa_name = '$sa_name'");
   
	$qupdate->execute();
	
			
				echo "<script>alert('Message will deliver after few minutes..');</script>";
				}
				}
				else{
					$res=$con->prepare("SELECT * FROM profile WHERE sa_name='$sa_name'");
     $res->setFetchMode(PDO::FETCH_ASSOC);
	 $res->execute();
    while( $rs=$res->fetch() ) {

			$remaining=$rs['sms_credit']-2;
	  
    $qupdate = $con->prepare("UPDATE profile SET sms_credit = '$remaining' WHERE sa_name = '$sa_name'");
   
	$qupdate->execute();
	
			
				echo "<script>alert('Message will deliver after few minutes..');</script>";
		     	echo"<meta http-equiv=\"refresh\" content=\"0; URL= compose.php\">";
				}
				}
				}
				else{
					echo "<script>alert(' Failed !!!!');</script>";
				}

			}
		else{
			
			$add_message=$con->prepare("insert into send_sms(sender_id,phone,msg,status,sms_date)
			values('$sa_email', '$phone','$msg','$status',NOW())");
			if($add_message->execute()){
		
			
				if(strlen($msg)<=160){
								$res=$con->prepare("SELECT * FROM profile WHERE sa_name='$sa_name'");
     $res->setFetchMode(PDO::FETCH_ASSOC);
	 $res->execute();
    while( $rs=$res->fetch() ) {

			$remaining=$rs['sms_credit']-1;
	  
    $qupdate = $con->prepare("UPDATE profile SET sms_credit = '$remaining' WHERE sa_name = '$sa_name'");
   
	$qupdate->execute();
	
			
				echo "<script>alert('Message will deliver after few minutes..');</script>";
				}
				}
				else{
					$res=$con->prepare("SELECT * FROM profile WHERE sa_name='$sa_name'");
     $res->setFetchMode(PDO::FETCH_ASSOC);
	 $res->execute();
    while( $rs=$res->fetch() ) {

			$remaining=$rs['sms_credit']-2;
	  
    $qupdate = $con->prepare("UPDATE profile SET sms_credit = '$remaining' WHERE sa_name = '$sa_name'");
   
	$qupdate->execute();
	
			
				echo "<script>alert('Message will deliver after few minutes..');</script>";
		     	echo"<meta http-equiv=\"refresh\" content=\"0; URL= compose.php\">";
				}
				}}
			else{
				echo "<script>alert(' Failed !!!!');</script>";
			}
			
		}
		
	}


?>

