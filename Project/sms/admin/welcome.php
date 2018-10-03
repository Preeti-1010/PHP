
<?php 

	include('header.php');

?>

<?php
		include("inc/db.php");
			$fetch_user=$con->prepare("select * from new_senderid where sa_name='$sa_name'");
			$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_user->execute();
			$run=$fetch_user->fetch();
?>
<?php
		include("inc/db.php");
			$fetch_user=$con->prepare("select * from admin where a_name='$sa_name'");
			$fetch_user->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_user->execute();
			$row=$fetch_user->fetch();
?>

<!--End Menu -->
<div class="right_area">
<div class="top_right_txt">
<span class="purple">Welcome  <?php echo $row['a_name']?>. Profile ID:<?php echo $row['a_id']?></span><br>

<!--<span class="red">Your account balance will expire on *</span><br>-->
</div>
	
<div class="clear"></div>
<!--Start Upper Menu -->
<!--End Upper Menu -->
<div class="right_main_box margintop">
<div class="headng">
<div class="fleft">Administration Panel</div>
<div class="clear"></div>
</div>
<div class="text_area">
<!--
<div class="sorting_div">
<div class="fleft green width15">SMS Purchased</div>
<div class="fleft marginleft purple width15">SMS Allocation</div>
<div class="fleft marginleft green width15">Balance SMS</div>
<div class="fleft marginleft purple width15">SenderID Used</div>
<div class="fleft marginleft green width15">SenderID Allotted</div>
<div class="fleft marginleft purple width10">Dynamic</div>
<br>
<div class="fleft green width15"><a href="#" target="_blank">10</a></div>
<div class="fleft marginleft purple width15"><a href="#" target="_blank">0</a></div>
<div class="fleft marginleft green width15"><strong>10</strong> </div>
<div class="fleft marginleft purple width15"><strong>1</strong></div>
<div class="fleft marginleft green width15">5</div>
<div class="fleft marginleft purple width10"><strong>no</strong></div>
<div class="clear"></div>
</div>-->

<div class="headng">Users Management</div>
<div class="top_icon_box" style="text-align:left">
<a href="userlist.php" class="thumb_icons"><img src="img/list.png" border="0"><br>
Users<br>List</a>
<a href="adduser.php" class="thumb_icons"><img src="img/add_client.png" border="0"><br>
ADD<br>New User</a>
<a href="smsallocation.php" class="thumb_icons"><img src="img/sms_allocation.png" border="0"><br>
SMS<br> Allocation</a>
<a href="mis.php" class="thumb_icons"><img src="img/sms_report.png" border="0"><br>
SMS<br> Reports</a>
<a href="dailysms.html" class="thumb_icons"><img src="img/daily_allocation.png" border="0"><br>
Daily SMS<br> Allocation</a>
<a href="newinactive.php" class="thumb_icons"><img src="img/sales_package.png" border="0"><br>
New Inactive<br>Clients</a>
<div class="clear"></div>
</div>
<div class="headng">Website Branding</div>
<div class="top_icon_box" style="text-align:left">
<a href="setnotice.php" class="thumb_icons"><img src="img/list.png" border="0"><br>
Set<br>Notice</a>
<a href="myprofile.php?edit=<?php echo $row['a_id']?>" class="thumb_icons"><img src="img/my_profile.png" border="0"><br>
My<br>Profile</a>
<div class="clear"></div>
</div>
</div>
   
  
  
  <div class="heading_row">
<div class="table_column" style="width:70px;">
<input type="checkbox" name="select_all"   onclick="toggle(this);" / >
</div>
<div class="table_column" style="width:70px;">
<a href="#" style="text-decoration:none; color:#FFFFFF" title="Sort Descending">Sr. No. </a>
</div>

<div class="table_column" style="width:70px;">
<a href="#" style="text-decoration:none; color:#FFFFFF" title="Sort Ascending">Name </a>
</div>	
		
	<div class="table_column" style="width:140px;">New Sender Id</div>
<div class="table_column" style="width:80px;">Remark</div>
<div class="table_column" style="width:80px;">Status</div>
<div class="table_column" style="width:100px; text-align:right">Creation Date</div>
<div class="table_column" style="width:70px;">Action</div>
<div class="clear"></div>
</div>
		<div class="white_row">
		<table id="example1" class="table_column" style="width:540px;">
		 
		 <tbody>
			<?php
					include("inc/db.php");
	
	
	 include("pagination/function.php");
                                             $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                                	$limit =5; //if you want to dispaly 10 records per page then you have to change here
                                                	$startpoint = ($page * $limit) - $limit;
                                                    $statement = "new_senderid order by sa_name DESC"; //you have to pass your query over here
                                            
                                            	
                                            		 $res=$con->prepare("select * from {$statement} LIMIT {$startpoint} , {$limit}");
                                                        $res->setFetchMode(PDO::FETCH_ASSOC);
                                                        $res->execute();
	
			
					$i=1;
					while($row=$res->fetch()) :
						
						echo "
						<tr>
						<td>  <input type='checkbox' name='check_list[]' value='".$row['id']."'></td>
						<td style='max-width:20px;padding-left:70px'><p id='hide_name1'>".$i++."</p></td>
                        <td style='max-width:50px;padding-left:65px'><p id='hide_name1'>".$row['sa_name']."</p></td>
						<td style='max-width:100px;padding-left:63px'><p id='hide_name1'>".$row['newsender_id']."</p></td>
                        <td style='max-width:130px;padding-left:120px'><p id='hide_name1'>".$row['remark']."</p></td>
                        <td style='max-width:100px;padding-left:50px'><p id='hide_name1'>".$row['status']."</p></td>
						<td style='max-width:120px;padding-left:100px'><p id='hide_name1'>".$row['creation_date']."</p></td>
						
		<td style='max-width:100px;padding-left:50px'><a href='edit-sender.php?edit=".$row['id']."' role='button' class='btn btn-info' >Update Status</a></td>
						
			 ";
	
				echo"	
                      </tr>
						";
					endwhile;	?>
								
										<div class="row ">
									    <?php
                                            echo "<div id='pagingg' >";
                                            echo "<ul class='pags' type='none'><li>";
                                            echo pagination($statement,$limit,$page);
                                            echo "</li></ul>";
                                            echo "</div>";
                                            ?>
                                        </div>
			
			
			</tbody>
			
			</table>
		</div>
		<div class="clear"></div>
  
    
		<script>
	function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
	</script>	
  
   
  
  
<div class="clear"></div>
</div><!--Right Main Box -->
</div><!-- Right Area -->
<div class="clear"></div>
</div>

<?php 

	include('footer.php');
?>