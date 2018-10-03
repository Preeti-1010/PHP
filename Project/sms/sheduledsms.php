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
<div class="right_main_box margintop">
<div class="headng"><div class="fleft">Scheduled SMS Report</div><div class="align_center"></div>
</div>
<div class="text_area">
<form name="frmrptschedule" id="frmrptschedule" method="post">
<div class="heading_row">
<div class="table_column" style="width:50px;">Sr.No.</div>
<div class="table_column" style="width:150px;">Sender</div>
<div class="table_column" style="width:120px;">Mobile</div>
<div class="table_column" style="width:120px;">Message</div>
<div class="table_column" style="width:120px;">Sheduled_Date</div>
<div class="table_column" style="width:100px;">Sheduled_Time</div>
<div class="table_column" >Status</div>
<div class="clear"></div>
</div>
		<div class="white_row">
			<div class="table_column" style="width:540px;"><span class="red"></span>
			
			<form name="frmrpt" id="frmrpt" method="post" action="">
<input type="hidden" name="senderid" value="">
<input type="hidden" name="cpgno" value="1">

		<div class="white_row">
		<table id="example1" class="table_column" style="width:540px;">
		 
		 <tbody>
			 <?php
					include("inc/db.php");
			 
			 				
	 include("pagination/function.php");
                                             $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                                	$limit =5; //if you want to dispaly 10 records per page then you have to change here
                                                	$startpoint = ($page * $limit) - $limit;
                                                    $statement = "send_sms where sender_id='$email' and s_date and s_time order by s_id DESC "; //you have to pass your query over here
                                            
                                            	
                                            		 $res=$con->prepare("select * from {$statement} LIMIT {$startpoint} , {$limit}");
                                                        $res->setFetchMode(PDO::FETCH_ASSOC);
                                                        $res->execute();
	
			 
			 
			 
			/*$fetch_message=$con->prepare("select * from send_sms where sender_id='$email' and s_date and s_time order by s_id DESC ");
					$fetch_message->SetFetchMode(PDO::FETCH_ASSOC);
					$fetch_message->execute();*/
					$i=1;
					while($row=$res->fetch()) :
						
						echo "
						<tr>
                        <td style='max-width:50px'><p id='hide_name1'>".$i++."</p></td>
						<td style='max-width:150px;padding-left:35px'><p id='hide_name1'>".$row['sender_id']."</p></td>
                        <td style='max-width:100px;padding-left:51px'>
						 <p id='hide_name1'>".$row['phone']."</p></td>
						
                        <td style='max-width:140px;padding-left:58px'><p id='hide_name1'>".$row['msg']."</p></td>
						<td style='max-width:200px;padding-left:78px'><p id='hide_name1'>".$row['s_date']."</p></td>
					 <td style='max-width:150px;padding-left:82px'><p id='hide_name1'>".$row['s_time']."</p></td>";
						if($row['status']=='Sending'){
							echo "<td style='max-width:83px;padding-left:55px'><span style='color:red'>".$row['status']."</td>";
						}
						if($row['status']=='Delivered'){
							echo "<td style='max-width:83px;padding-left:55px'><span style='color:green'>".$row['status']."</td>";
						}
                        
                       
					echo"	
                      </tr>
						";
					endwhile;	?>
					
								
			</tbody>
			
			</table>
		</div>
		<div class="clear"></div>
		
		 <div class="row " style="padding-left:250px;">
									    <?php
                                            echo "<div id='pagingg' >";
                                            echo "<ul class='pags' type='none'><li>";
                                            echo pagination($statement,$limit,$page);
                                            echo "</li></ul>";
                                            echo "</div>";
                                            ?>
                                        </div>
			
		</div>
	</form>
			
		</div>
		<div class="clear"></div>
		</div>
	
</form>
</div><!-- End Text Area -->
</div><!--End Right Main Box-->

<div class="clear"></div>
</div><!--END RIGHT AREA -->
<div class="clear"></div>
</div>
<div class="black_bottom">
	<div class="inner1000">Copyright allsentsms.in, All rights reserved.</div>
</div>        


</body></html>