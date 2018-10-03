   
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
<div class="right_main_box margintop">
<div class="headng"><div class="fleft">SMS Credit Allocation Summary</div><div class="align_center"></div>
</div>
<div class="text_area">
<form name="frmsearch" method="post" action="">
<div class="sorting_div">
<div class="margintop">
<a href="#" class="fleft" style="margin-top:7px;">&nbsp;</a>
<div class="marginleft fleft green" style="margin-top:7px;">&nbsp;</div>
<div class="marginleft fleft purple" style="margin-top:7px;">&nbsp;</div>
<!--<div class="fright">
Profile Id <input name="txtpid" id="txtpid" type="text" style="width:100px; margin-top:1px;" class="input_fields" value="" maxlength="6">
<input name="cmdsearch" type="submit" class="small_grey_btn" value=" Search "></div>-->
<div class="clear"></div> 
</div>
</div></form>


<form name="frmrpt" id="frmrpt" method="post" action="">
<input type="hidden" name="senderid" value="">
<input type="hidden" name="cpgno" value="1">
<div class="heading_row">
<div class="table_column" style="width:70px;">
<input type="checkbox" name="select_all"  onclick="toggle(this);" / >
</div>
<div class="table_column" style="width:50px;">Sr.No.</div>
<div class="table_column" style="width:90px;">Sender_ID</div>
<div class="table_column" style="width:150px;">Mobile No</div>
<div class="table_column" style="width:120px;">Message</div>
<div class="table_column" style="width:80px;">SMS_Date</div>
<div class="table_column" style="width:80px;">Status</div>
<div class="table_column" style="width:70px;">Action</div>
<div class="clear"></div>
</div>
		<div class="white_row">
		<table id="example1" class="table_column" style="width:540px">
		 
		 <tbody>
			 <?php
	
				
	 include("pagination/function.php");
                                             $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                                	$limit =10; //if you want to dispaly 10 records per page then you have to change here
                                                	$startpoint = ($page * $limit) - $limit;
                                                    $statement = "send_sms where status='Sending' order by s_id ASC"; //you have to pass your query over here
                                            
                                            	
                                            		 $res=$con->prepare("select * from {$statement} LIMIT {$startpoint} , {$limit}");
                                                        $res->setFetchMode(PDO::FETCH_ASSOC);
                                                        $res->execute();
			
	
		/*	$fetch_message=$con->prepare("select * from send_sms where status='Sending' order by s_id ASC  ");
					$fetch_message->setFetchMode(PDO::FETCH_ASSOC);
					$fetch_message->execute();
//$row1=$fetch_message->fetch();	*/
	               $i=1;	 
				while($row1=$res->fetch()) :
						
						echo "
						<tr>
						<td>  <input type='checkbox' name='check_list[]' value='".$row1['s_id']."'></td>
                        <td style='max-width:30px;padding-left:55px'><p id='hide_name1'>".$i++."</p></td>
						<td style='max-width:150px;padding-left:35px'><p id='hide_name1'>".$row1['sender_id']."</p></td>
                        <td style='max-width:120px;padding-left:42px'>
						  <textarea class='form-control' rows='5' id='hide_name1' id='comment'>".$row1['phone']."</textarea></td>
						
                        <td style='max-width:120px'><textarea class='form-control' id='hide_name1' rows='5' id='comment'>".$row1['msg']."</textarea></td>
						
						
			 <td style='max-width:80px;padding-left:55px'><p id='hide_name1'>".$row1['sms_date']."</p></td>";
						if($row1['status']=='Sending'){
							echo "<td style='max-width:120px;padding-left:15px'><span style='color:red'>".$row1['status']."</td>";
						}
				echo "<td style='max-width:180px;padding-left:55px'><a href='edit-status.php?edit=".$row1['s_id']."' role='button' class='btn btn-info' >Update Status</a></td>";		
                     
					echo"	
                      </tr>
						";
					endwhile;
												
					?>
			
			</tbody>
			
			</table>
			
			<div class="clear"></div>
			<div class="row "  style="padding-left:500px; ">   
                                            <?php
                                            echo "<div id='pagingg' >";
                                            echo "<ul class='pags' type='none'><li>";
                                            echo pagination($statement,$limit,$page);
                                            echo "</li></ul>";
                                            echo "</div>";
                                            ?>
            </div>
			
		
		</div>
		</div>
		
		<div class="margintop">&nbsp;</div>
<div class="sorting_div">
<input name="cmddelete" id="cmddelete" type="submit" class="small_grey_btn marginright" value="Delete Selected Schedule" onclick="return confirmDelete();">&nbsp;



</div>



		
		<?php
	
	
	
	
		if(isset($_POST['cmddelete'])){
			$delete=$_POST['check_list'];
			
   foreach ($delete as $id){
   $sql = $con->prepare("DELETE FROM send_sms WHERE s_id='$id'");
	   
	   $sql->execute();
   //Here you are missing below statement
	
	}
		if($sql){
			
			echo"<meta http-equiv=\"refresh\" content=\"0; URL= smsallocation.php\">";
		}
			
		}
	
	?>
	
		<script>
	function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
	</script>	
		
	</form>


		   <div class="foot_row">
<div class="table_column" style="width:100px;"></div>
<div class="table_column" style="width:250px;">Grand Total - 0</div>
<div class="table_column" style="width:130px;">Pg Total - 0</div>
<div class="table_column" style="width:70px;">&nbsp;</div>
 <div class="clear"></div>
 </div>
 
</div>
</div><!--End Right Main Box-->
</div><!--END RIGHT AREA -->
<div class="clear"></div>
</div>
   
<?php 

	include('footer.php');
?>
