<!DOCTYPE html>
<html>
<head>
	<title>Email Validation</title>
</head>
<body>
	<form>
		<input type="text" name="email"><br> <input type="submit" name="submit">
		<br>
		
		<?php
			$email = 'abc@gmail.com';/*isset($_POST['email']) ? $_POST['name'] : ''*/;
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "Email is valid: " .$email;
			} else
			{
				echo "Invalid: " .$email;
			}
		?>
	</form>
</body>
</html>