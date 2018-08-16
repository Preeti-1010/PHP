<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<h3>Form</h3>
<form>
	Name: <input type="text" name="username" placeholder="Enter a name">
	<input type="submit" name="submit" value="submit">
	<?php 
		$username = $_POST['username'];

		echo $username;
	?>
</form>
</body>
</html>