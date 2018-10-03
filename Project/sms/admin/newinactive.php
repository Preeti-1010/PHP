   
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
<div class="headng"><div class="fleft">New Inactive Client List</div><div class="align_center"></div>
</div>
<div class="text_area">
<!--Start List -->
<div class="heading_row">
<div class="table_column" style="width:50px; text-align:center">Prof ID</div>
<div class="table_column" style="width:150px; text-align:center">User</div>
<div class="table_column" style="width:100px; text-align:center">Password</div>
<div class="table_column" style="width:70px; text-align:center">Cr.Date</div>
<div class="table_column" style="width:140px; text-align:center">Action</div>
<div class="clear"></div>
</div>
<!--End List -->
</div><!-- End Text Area -->
</div><!--End Right Main Box-->
</div><!--END RIGHT AREA -->
<div class="clear"></div>
</div>
   
<?php 

	include('footer.php');
?>
