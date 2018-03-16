<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			 <input type="text" name="username" placeholder="Enter UserName">
		</div>
		<div class="input-group">
			<input type="text" name="Email" placeholder="Enter Email">
		</div>
		<div class="input-group">
			<input type="password" name="password_1" placeholder="Enter Password">
		</div>
		<div class="input-group">
			<input type="password" name="password_2" placeholder="Enter Confirm Password">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
	</form>
</body>
</html>
