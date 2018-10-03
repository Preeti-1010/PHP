
<?php
ob_start();
session_start();
    if(empty($_SESSION['sa_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	$email=$_SESSION['sa_email'];
	$sa_name=$_SESSION['sa_name'];
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://allsentsms.in/appforms/scheduledsms.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>allsentsms.in Welcome</title>
<link href="css/style-default.css" rel="stylesheet" type="text/css"><link type="text/css" rel="stylesheet" href="css/style.css">
<script language="javascript" type="text/javascript">
function CheckAll(chk)
{
	for (var i=0;i < document.frmrptschedule.elements.length;i++)
		{
			var e = document.frmrptschedule.elements[i];
			if (e.type == "checkbox")
			{
				e.checked = chk.checked;
			}
		}
}
</script>
<script>
function confirmDelete()
{
result = confirm("This action will delete selected scheduled requests. Do you wish to continue?");
if(result =="1" )
  { 
	return true;
  }
else
  {
	return false;
  }  
}

function confirmDeleteAll()
{
result = confirm("This action will delete your all scheduled requests. Do you wish to continue?");
if(result =="1" )
  { 
	return true;
  }
else
  {
	return false;
  }  
}	  
</script>
<style>
    
	#hide_name1{overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
</style>

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
<div class="right_main_box margintop" >

<form name="frmaddsender" id="frmaddsender" method="post" style="margin-left: 20px; margin-right: 20px">
<div class="headng margintop">Add New Sender ID</div>
<div class="margintop">New SenderID <input name="sender" id="sender" type="text" class="input_fields marginleft" style="width:150px;" maxlength="6">Remark <textarea id="txtRemark" name="remark" class="input_fields marginleft" rows="3" style="width:200px"></textarea><input name="add" type="submit" value="Add New Sender ID" class="small_grey_btn marginleft"></div>
<div class="divider"></div>
</form>

&nbsp;
<form name="frmsender" id="frmsender" method="post" style="margin-left: 20px; margin-right: 20px">
<div class="headng margintop">Sender ID Management</div>
<div class="margintop">
<div class="width50"><span class="font13 green">Sender</span>&nbsp;
<select name="ddlsender" id="ddlsender" class="input_fields margintop" style="width:200px;">
		<option value="BUSNSS" selected="selected">BUSNSS</option>
		</select>
</div>
<div class="width50"><span class="font13 purple"><input name="cmddefault" id="cmddefault" type="submit" value="Set as Default Sender ID" class="small_grey_btn margintop"></span>
</div>
<div class="clear"></div>
</div>
<div class="divider"></div>
</form>


<div class="heading_row" style="margin-left: 20px; margin-right: 20px">
<div class="table_column" style="width:100px;">SenderID</div>
<div class="table_column" style="width:300px;">Remark</div>
<div class="table_column" style="width:50px;">Status</div>
<div class="table_column" style="width:120px;">Delete</div>
<div class="clear"></div>
</div>


<div class="white_row" style="margin-left: 20px; margin-right: 20px">
				<div class="table_column" style="width:100px;">BUSNSS</div>
				<div class="table_column" style="width:300px;"></div>
				<div class="table_column" style="width:50px;">Approved</div>
				<div class="table_column green" style="width:120px;"><span class="green">Default Sender</span></div>
				<div class="clear"></div>
				</div>
				
		</div>
		<div class="clear"></div>
		</div>
	</form>
			
		</span></div>
		<div class="clear"></div>
		</div>
	
</form>
</div><!-- End Text Area -->
</div><!--End Right Main Box-->

</div><!--END RIGHT AREA -->
<div class="clear"></div>
</div>
<div class="black_bottom">
	<div class="inner1000">Copyright allsentsms.in, All rights reserved.</div>
</div>        



<?php
if(isset($_POST['add'])){
	
include("inc/db.php");
	
$new=$_POST['sender'];
$remark=$_POST['remark'];
$status='Pending';

$conn=$con->prepare("INSERT INTO new_senderid(sa_name,newsender_id,remark,status,creation_date) VALUES('$sa_name','$new','$remark','$status',NOW())");
	
if($conn->execute()){
	
	echo "<script>alert('User successfully added');</script>";	
			}
			else{
				echo "<script>alert('Data Not Added');</script>";
			}	
	
	
		
			$fetch_user=$con->prepare("select * from new_senderid where sa_name='$sa_name'");
			$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_user->execute();
			$run=$fetch_user->fetch();


}

?>

</body></html>