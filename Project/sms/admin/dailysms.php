
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
<div class="headng">Daily Credit Allocation Details
</div>
<div class="text_area">
<form name="frmsearch" method="post" action="">
<div class="sorting_div">
Date Search : From&nbsp;<input type="text" class="input_fields" name="date1" id="date1" readonly value="03/11/2017"><img src="img/cal.JPG" name="trigger" width="18" height="18" align="absmiddle" id="trigger">&nbsp;
To&nbsp;<input type="text" class="input_fields" name="date2" id="date2" readonly value="03/11/2017"><img src="img/cal.JPG" name="trigger1" width="18" height="18" align="absmiddle" id="trigger1">
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
  <a href="#" class="fleft" style="margin-top:7px;">&nbsp;</a>
  <div class="marginleft fleft green" style="margin-top:7px;">&nbsp;</div>
  <div class="marginleft fleft purple" style="margin-top:7px;">&nbsp;</div>
  <div class="fright">Profile Id :<input name="txtpid" id="txtpid" type="text" style="width:100px; margin-top:1px;" class="input_fields" value="" maxlength="6">
  <input name="cmdsearch" type="submit" class="small_grey_btn" value=" Search "></div>
 <div class="clear"></div> 
</div>
</div></form>
<!-- start Credit Details -->
		  <table cellspacing="0" cellpadding="3" style="width:100%">
                <tbody><tr class="heading_row">
                <td class="table_column" align="left" style="width:30px;">Sr.No.</td>
				<td class="table_column" align="left" style="width:120px;">Date</td>
                <td class="table_column" align="right" style="width:70px;">Profile ID</td>
				<td class="table_column" align="left" style="width:120px;">Name</td>
				<td class="table_column" align="left" style="width:120px;">Company</td>
				<td class="table_column" align="right" style="width:80px;">Credit</td>
              </tr>
										<tr class="white_row">
						<td class="table_column" style="width:40px;">&nbsp;</td>
						<td class="table_column" style="width:90px;">&nbsp;</td>
						<td class="table_column" style="width:70px;" align="right">&nbsp;</td>
						<td class="table_column" style="width:120px;" align="left">&nbsp;</td>
						<td class="table_column" style="width:140px;" align="left">&nbsp;</td>
						<td class="table_column" style="width:80px;" align="right">&nbsp;</td>
						</tr>
					              <tr class="foot_row">
				<td class="table_column" style="width:80px;">&nbsp;</td>
				<td class="table_column" style="width:150px;" align="right">&nbsp;</td>
				<td class="table_column" style="width:200px;" align="right" colspan="2">Page Total : 0</td>
              </tr>
</tbody></table>
<div class="paginator">&nbsp;</div>
<!-- End Credit details -->
</div>
</div><!--End Right Main Box-->
</div><!--END RIGHT AREA -->
<div class="clear"></div>
</div>

<?php 

	include('footer.php');
?>