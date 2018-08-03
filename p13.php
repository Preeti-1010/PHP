<!DOCTYPE html>
<html>
<head>
	<title>
		Table
	</title>
</head>
<body>
<?php 
	$a = '1000';
	$b = '2000';
	$c = '3000';
?>
	<table border="1px" style="padding: 4px 2px 4px 2px">
	<tr><td>
			Salary of Mr. A
		</td> 
		<td>
			<?php echo $a; ?>
		</td>
	</tr>
	<tr><td>
			Salary of Mr. B
		</td>
		<td>
			<?php echo $b?>
		</td>
	</tr>
	<tr><td>
			Salary of Mr. C
		</td>
		<td>
			<?php echo $c?>
		</td>
	</tr>
	</table>

</body>
</html>