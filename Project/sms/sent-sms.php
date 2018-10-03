<?php
ob_start();
session_start();
    if(empty($_SESSION['sa_name'])){
        echo "<script>window.open('index.php','_self')</script>";
    }
	
	$sa_name=$_SESSION['sa_name'];
$email=$_SESSION['sa_email'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039)http://allsentsms.in/appforms/sentsms.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
    
	#hide_name1{overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
</style>
  
<title>allsentsms.in Welcome</title>
<link href="css/style-default.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link href="css/calendar-win2k-1.css" type="text/css" rel="stylesheet"> 
<script language="javascript" type="text/javascript" src="js/calendar.js.download"></script>
<script type="text/javascript" src="js/calendar-en.js.download"></script>
<script type="text/javascript" src="js/calendar-setup.js.download"></script>
<script language="javascript" type="text/javascript">
function gotoSubmit1(v)
{	
	document.getElementById("rqno").value=v;
	document.frmrpt.submit();
}
function gotoSubmit2(v)
{	
	document.frmsearch.txtsender.value=v;
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
<div class="right_main_box margintop">
<div class="headng"><div class="fleft">Sent SMS Report</div><div class="align_center"></div>
</div>
<div class="text_area">
<form name="frmsearch" method="post" action="">
<div class="sorting_div">
<!--Start Caption Row-->
<div>
	<div class="marginleft fleft" style="width:100px">From Date</div>
	<div class="marginleft fleft" style="width:100px">To Date</div>
	<div class="marginleft fleft" style="width:90px">Remark</div>
	<div class="marginleft fleft" style="width:80px">Sender</div>
	<div class="marginleft fleft" style="width:80px">Mobile</div>
	<div class="marginleft fleft" style="width:80px">&nbsp;</div>
	<div class="clear"></div> 
</div>
<!--End Caption Row-->
<div>
	<div class="marginleft fleft" style="margin-top:1px; width:100px">
		<input type="text" class="input_fields" name="date1" id="date1" readonly="true" value="03-11-2017" style="width:80px"><img src="icon/cal.JPG" name="trigger" width="18" height="18" align="absmiddle" id="trigger">
	</div>
	<div class="marginleft fleft" style="margin-top:1px; width:100px">
		<input type="text" class="input_fields" name="date2" id="date2" readonly="true" value="03-11-2017" style="width:80px"><img src="icon/cal.JPG" name="trigger1" width="18" height="18" align="absmiddle" id="trigger1"></div>
	<div class="marginleft fleft purple" style="margin-top:1px; width:90px">
	   <select id="ddlremark" name="ddlremark" class="input_fields">
		   <option value="">ALL</option>
		   	   </select>
   </div>
   <div class="marginleft fleft purple" style="margin-top:1px; margin-left:1px ;width:80px">
   		<input name="txtsender" id="txtsender" type="text" style="width:80px; margin-top:1px;" class="input_fields" value="" maxlength="8">
   </div>
    <div class="marginleft fleft purple" style="margin-top:1px; width:80px">
   		<input name="txtmobile" id="txtmobile" type="text" style="width:80px; margin-top:1px; margin-left:1px" class="input_fields" value="" maxlength="10">
   </div>
   <div class="marginleft fleft purple" style="margin-top:1px; margin-left:1px; width:80px">
   		<input name="cmdsearch" type="submit" class="small_grey_btn" value="   Search   ">
   </div>
	<div class="clear"></div> 
</div>
<script type="text/javascript">
			Calendar.setup(
			{
			inputField : "date1", // ID of the input field
			ifFormat : "%d-%m-%Y", // the date format
			button : "trigger" // ID of the button
			}
			);
</script>
<script type="text/javascript">
			Calendar.setup(
			{
			inputField : "date2", // ID of the input field
			ifFormat : "%d-%m-%Y", // the date format
			button : "trigger1" // ID of the button
			}
			);
</script>
<div class="margintop">
	<div class="marginleft fleft green" style="margin-top:1px; width:120px">Total Sms: 0</div>
	<div class="marginleft fleft purple" style="margin-top:1px; width:120px">Total Credit: 0</div>
	<div class="marginleft fleft" style="margin-top:1px; width:110px">
				&nbsp;		<input type="radio" name="rdo" id="rdo" class="check_input" value="csv" checked="checked">  csv
						<input type="radio" name="rdo" id="rdo" class="check_input" value="txt">  txt
			</div>
	<div class="marginleft fleft">
		<input name="cmddownload" type="submit" class="small_grey_btn" value=" Download ">&nbsp;&nbsp;
		<input name="cmddownloadsummary" type="submit" class="small_grey_btn" value=" Download Summary ">
		</div>
	<div class="clear"></div> 
</div>
</div></form>
<form name="frmrpt" id="frmrpt" method="post" action="">
<input type="hidden" name="senderid" value="">
<input type="hidden" name="cpgno" value="1">
<div class="heading_row">
<div class="table_column" style="width:50px;">Sr.No.</div>
<div class="table_column" style="width:150px;">Sender</div>
<div class="table_column" style="width:180px;">Mobile</div>
<div class="table_column" style="width:180px;">Message</div>
<div class="table_column" style="width:100px;">SMS_Date</div>
<div class="table_column" style="width:120px;">Status</div>
<div class="clear"></div>
</div>
		<div class="white_row">
		<table id="example1" class="table_column" style="width:540px;">
		 
		 <tbody>
			 <?php
			 
			 	include("inc/db.php");	
	 include("pagination/function.php");
                                             $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                                	$limit =10; //if you want to dispaly 10 records per page then you have to change here
                                                	$startpoint = ($page * $limit) - $limit;
                                                    $statement = "send_sms where sender_id='$email' order by s_id DESC"; //you have to pass your query over here
                                            
                                            	
                                            		 $res=$con->prepare("select * from {$statement} LIMIT {$startpoint} , {$limit}");
                                                        $res->setFetchMode(PDO::FETCH_ASSOC);
                                                        $res->execute();
	
			 
			 
					
			
					$i=1;
					while($row=$res->fetch()) :
						
						echo "
						<tr>
                        <td style='max-width:50px'><p id='hide_name1'>".$i++."</p></td>
						<td style='max-width:150px;padding-left:35px'><p id='hide_name1'>".$row['sender_id']."</p></td>
                        <td style='max-width:120px;padding-left:52px'>
						 <p id='hide_name1'>".$row['phone']."</p></td>
						
                        <td style='max-width:120px;padding-left:120px'><p id='hide_name1'>".$row['msg']."</p></td>
						
						
			 <td style='max-width:150px;padding-left:50px'><p id='hide_name1'>".$row['sms_date']."</p></td>";
						if($row['status']=='Sending'){
							echo "<td style='max-width:150px;padding-left:50px'><span style='color:red'>".$row['status']."</td>";
						}
						if($row['status']=='Delivered'){
							echo "<td style='max-width:150px;padding-left:50px'><span style='color:green'>".$row['status']."</td>";
						}
                        
                      
					echo"	
                      </tr>
						";
					endwhile;?>
													
													
			
                                       
			
			</tbody>
			
			</table>
			
			
		</div>
		
		<div class="clear"></div>
		<br>
		 <div class='row 'style="padding-left:500px;" >
									   <?php
                                            echo "<div id='pagingg'>" ;
                                            echo "<ul class='pags' type='none'><li>";
                                            echo pagination($statement,$limit,$page);
                                            echo "</li></ul>";
				                        ?>
              </div>
		</div>
	</form>
</div><!--End Text Area-->
</div><!--End Right Main Box-->

<div class="clear"></div>
<div class="right_main_box">
<div class="text_area">
 <div class="heading_row">
<div class="table_column">SMS Summary </div>
<div class="clear"></div>
</div>
<div class="grey_row">
 <div class="table_column" style="width:130px;">web single SMS:</div>
<div class="table_column" style="width:80px;">0</div>
<div class="table_column" style="width:130px;">http single SMS: </div>
<div class="table_column">0</div>
<div class="clear"></div>
 </div>
 <div class="white_row">
 <div class="table_column" style="width:130px;">web long SMS: </div>
<div class="table_column" style="width:80px;">0</div>
<div class="table_column" style="width:130px;">http long SMS:</div>
<div class="table_column">0</div>
<div class="clear"></div>
 </div>
<div class="grey_row">
 <div class="table_column" style="width:130px;">web long SMS Credit: </div>
<div class="table_column" style="width:80px;">0</div>
<div class="table_column" style="width:130px;">http long SMS Credit: </div>
<div class="table_column">0</div>
<div class="clear"></div>
 </div>
 <div class="white_row">
 <div class="table_column" style="width:130px;">Total SMS by web: </div>
<div class="table_column" style="width:80px;">0</div>
<div class="table_column" style="width:130px;">Total SMS by http: </div>
<div class="table_column">0</div>
<div class="clear"></div>
 </div>
 <div class="grey_row">
 <div class="table_column" style="width:130px;">Total Credit by web:  </div>
<div class="table_column" style="width:80px;">0</div>
<div class="table_column" style="width:130px;">	Total Credit by http: </div>
<div class="table_column">0</div>
<div class="clear"></div>
 </div>
 <div class="foot_row">
 <div class="table_column" style="width:130px;">Total SMS: </div>
<div class="table_column" style="width:80px;">0</div>
<div class="table_column" style="width:130px;">Total Credit:  </div>
<div class="table_column">0</div>
<div class="clear"></div>
 </div>
 <div class="clear"></div>
 <form name="frm2" id="frm2" method="post"> 
 <div class="sorting_div">
 Records per page
  <input name="txtreccount" type="text" class="input_fields marginleft marginright" style="width:50px;" value="25">
  Message Length 
  <input name="txtmsglength" type="text" class="input_fields marginleft" style="width:50px;" value="100">
  <input name="cmdshow" type="submit" class="small_grey_btn" value="Show">
 </div></form>
 <div class="clear"></div>
</div>
<div class="clear"></div>
</div><!-- End Text Area -->
</div><!--End Right Main Box-->
</div><!--END RIGHT AREA -->
<div class="clear"></div>

<div class="black_bottom">
	<div class="inner1000">Copyright allsentsms.in, All rights reserved.</div>
</div>        


</body></html>