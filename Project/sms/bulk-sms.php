<?php
ob_start();
session_start();
include("inc/db.php");
    if(empty($_SESSION['sa_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['sa_name'];
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)http://allsentsms.in/appforms/sendbulksms.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>allsentsms.in Welcome</title>
<link href="css/style-default.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="css/style.css">

<script language="JavaScript">
function showDate1(id) {
	ge1=document.getElementById('enable1');
	ge2=document.getElementById('disable1');	
	if(id==1) {
		ge2.style.display="block";
		ge1.style.display="none";		
	}
	if(id==2) {
		ge1.style.display="block";
		ge2.style.display="none";
	}
}
function showDate2(id) {
	ge1=document.getElementById('enable2');
	ge2=document.getElementById('disable2');	
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
<script language="JavaScript">
function srvType(id)
{   
	ge1=document.getElementById('div1');
	ge2=document.getElementById('div2');	
	ge3=document.getElementById('div3');
	ge4=document.getElementById('div4');
	ge5=document.getElementById('div5');
	ge6=document.getElementById('div6');	
	if(id==1) {
		ge1.style.display="block";
		ge2.style.display="none";
		ge3.style.display="none";
		ge4.style.display="none";
		ge5.style.display="none";
		ge6.style.display="none";
	}
	if(id==2) {	
		ge1.style.display="none";
		ge2.style.display="block";
		ge3.style.display="none";
		ge4.style.display="none";
		ge5.style.display="none";
		ge6.style.display="none";
	}
	if(id==3) {	
		ge1.style.display="none";
		ge2.style.display="none";
		ge3.style.display="block";
		ge4.style.display="none";
		ge5.style.display="none";
		ge6.style.display="none";
	}
	if(id==4) {	
		ge1.style.display="none";
		ge2.style.display="none";
		ge3.style.display="none";
		ge4.style.display="block";
		ge5.style.display="none";
		ge6.style.display="none";
	}
	if(id==5) {	
		ge1.style.display="none";
		ge2.style.display="none";
		ge3.style.display="none";
		ge4.style.display="none";
		ge5.style.display="block"
		ge6.style.display="none";;
	}
	if(id==6) {	
		ge1.style.display="none";
		ge2.style.display="none";
		ge3.style.display="none";
		ge4.style.display="none";
		ge5.style.display="none"
		ge6.style.display="block";
	}
}
</script>
<script src="js/selecttmp.js.download" language="javascript" type="text/javascript"></script>
</head>
<body onload="srvType(1);">
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
<div class="right_main_box margintop">
<div class="headng"><div class="fleft">Send Bulk SMS</div>
</div>
<div class="align_left red"></div>
<div class="text_area">
<div class="radio_send_bulk">
						<label><input id="stype" onclick="srvType(this.value);" type="radio" checked="checked" value="1" name="stype" class="check_input margin_btm"> Phone Book</label>  
								<label><input id="stype" onclick="srvType(this.value);" type="radio" value="2" name="stype" class="check_input margin_btm"> Add To Send List</label> 
								<label><input id="stype" onclick="srvType(this.value);" type="radio" value="3" name="stype" class="check_input margin_btm"> Send SMS Now</label> 
								<label><input id="stype" onclick="srvType(this.value);" type="radio" value="4" name="stype" class="check_input margin_btm"> Result SMS</label> 
								<label><input id="stype" onclick="srvType(this.value);" type="radio" value="5" name="stype" class="check_input margin_btm"> Quick Send</label> 
				</div>
<div name="div1" id="div1" class="hide" style="display: block;">
<form name="frm1" enctype="multipart/form-data" method="post" action="">
<div class="headng">
<div class="fleft">Phone Book</div>
</div>
<div class="fleft green">Instructions to Upload File [ mobile, name ]</div>
<div class="clear"></div>
<div class="sorting_div">
<div class="red margin_btm">Select Group :
<select name="ddlgroup" is="ddlgroup" class="input_fields" style="width:95px; margin:10px 0;">
				<option value="Main">Main [0]</option>
	</select>
Upload File :<input name="cvs" id="cvs" type="file" class="input_fields"> <br>
  <label align="center">Message</label>
                                            <div class="form-group">
                                                     
                                                    <textarea  id="comments"  rows="4" name="msg" class="form-control" placeholder="Message"></textarea>
                                            </div><br>
<input name="sendnow" id="cmdupload" type="submit" class="small_grey_btn marginleft" value="Submit">
</div>
<p class="black_clr">*You can upload any .csv or .txt file which carry the information in the following text format:-
</p><p class="black_clr"><b>PhoneNumber, Name</b><br>9999......, Jordon<br>8686......, Simon<br><span class="red">Please note all Phone No's should be valid India Mobile PhoneNo's</span></p>
<p></p>
</div></form>
</div>




<!--Quick Send Interface -->

<!-- End Quick Send Interface -->
<!--Craete Campaign -->

<!-- End Create Campaign Interface -->
</div><!-- End Text Area -->
</div><!--End Right Main Box-->
</div><!--END RIGHT AREA -->
<div class="clear"></div>
</div>
<div class="black_bottom">
	<div class="inner1000">Copyright allsentsms.in, All rights reserved.</div>
</div> 
<script language="javascript">
function addNewRow(){
	var oRows = document.getElementById('tblschedule').getElementsByTagName('tr');
	var iRowCount = oRows.length;
	//alert(document.getElementById("hreqcount").value);
	if(iRowCount>10){
		alert("You can't add more than 10 requests at a time!.");
		exit();
	}
	var table = document.getElementById("tblschedule");
	var row = table.insertRow(iRowCount);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);
	var cell5 = row.insertCell(4);
	var cell6 = row.insertCell(5);
	// Add some text to the new cells:
	var currentDate = new Date();
	var currentYear = currentDate.getFullYear();
	var currentMonth = currentDate.getMonth();
	var currentDay = currentDate.getDate();
	var currentHour = currentDate.getHours();
	var currentMin = currentDate.getMinutes();
	currentMin=59;
	var x = document.createElement("SELECT");
	x.className="input_fields";
	x.id="sHour"+iRowCount;
	x.name="sHour"+iRowCount;
	for(i=0; i<24 ; i++){
		j=i;
		if(i < 10){
			j="0"+i;
		}
		if(i==currentHour){
			selIndex=i;
		}
		var option = document.createElement("option");
		option.text = j;
		option.value = j;
		x.add(option);
	}
	x.options.selectedIndex=selIndex;
	var y = document.createElement("SELECT");
	y.className="input_fields";
	y.id="sMin"+iRowCount;
	y.name="sMin"+iRowCount;
	for(i=0; i<60 ; i++){
		j=i;
		if(i < 10){
			j="0"+i;
		}
		if(i==currentMin){
			selIndex=i;
		}
		var option = document.createElement("option");
		option.text = j;
		option.value = j;
		y.add(option);
	}
	y.options.selectedIndex=selIndex;
	var objDay = document.createElement("SELECT");
	objDay.className="input_fields";
	objDay.id="sDay"+iRowCount;
	objDay.name="sDay"+iRowCount;
	for(i=1; i<=31 ; i++){
		j=i;
		if(i < 10){
			j="0"+i;
		}
		if(i==currentDay){
			selIndex=i-1;
		}
		var option = document.createElement("option");
		option.text = j;
		option.value = j;
		objDay.add(option);
	}
	objDay.options.selectedIndex=selIndex;
	var objMonth = document.createElement("SELECT");
	objMonth.className="input_fields";
	objMonth.id="sMonth"+iRowCount;
	objMonth.name="sMonth"+iRowCount;
	for(i=0; i<12 ; i++){
		
		j=eval(i+1);
		if(j < 10){
			j="0"+j;
		}
		if(i==currentMonth){
			selIndex=i;
		}
		var option = document.createElement("option");
		option.text = j;
		option.value = j;
		objMonth.add(option);
	}
	objMonth.options.selectedIndex=selIndex;
	
	var objYear = document.createElement("SELECT");
	objYear.className="input_fields";
	objYear.id="sYear"+iRowCount;
	objYear.name="sYear"+iRowCount;
	var option = document.createElement("option");
	option.text = "2017";
	option.value = "2017";
	objYear.add(option);
	
	var objCount = document.createElement("INPUT");
	objCount.setAttribute("type", "text");
	objCount.className="input_fields";
	objCount.id="txtCount"+iRowCount;
	objCount.name="txtCount"+iRowCount;
	objCount.style.width="100px";
	objCount.setAttribute("placeholder", "Sms Count");
	objCount.setAttribute("maxlength", "5");
	
	cell1.appendChild(x);
	cell2.appendChild(y);
	cell3.appendChild(objDay);
	cell4.appendChild(objMonth);
	cell5.appendChild(objYear);
	cell6.appendChild(objCount);
	document.getElementById("hreqcount").value=iRowCount;
}
</script> 
<script language="javascript" type="text/javascript">
	srvType(1);
	//addNewRow();
</script> 


</body></html>



<?php
	if(isset($_POST['sendnow']))
	{
		
		
		$phone=$_FILES['cvs']['name'];
			$phone_tmp=$_FILES['cvs']['tmp_name'];
			
			
			
			$location="file/$phone";
			move_uploaded_file($phone_tmp,"file/$phone");
		
		$msg=$_POST['msg'];
		$status="Sending";
		
		$add_message=$con->prepare("insert into bulk_sms(sender_id,phone,msg,status,s_date)
			values('$sa_email', '$location','$msg','$status',NOW())");
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
		        echo"<meta http-equiv=\"refresh\" content=\"0; URL= bulk-sms.php\">";
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
		     	echo"<meta http-equiv=\"refresh\" content=\"0; URL= bulk-sms.php\">";
				}
				}
			}
			else{
				echo "<script>alert(' Failed !!!!');</script>";
			}
		
	}


?>