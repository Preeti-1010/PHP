<!-- Create a simple HTML form and accept the user name and display the name through PHP echo statement. Go to the editor
-->

<!DOCTYPE html>
<html>
<head>
	<title>HTML form</title>
</head>
<body>
		Name: <input type="text" name="name" style="width:300px">
		<input type="Submit" value="Submit">
		<?php
			$username = $_POST['name'];
			echo $username;
		?>
</body>
</html>