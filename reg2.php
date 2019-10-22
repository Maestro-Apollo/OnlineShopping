<?php
require 'connection.php';
	if(isset($_POST['submit'])){
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$fullname = trim($_POST['fullname']);
		$age = trim($_POST['age']);
		$created = date('Y-m-d H:i:s');
		if($user->isExistUserByEmail($email)){
			echo "Already there is a user with this email";
		}
		else{
			$user->addUser($email,$password,$fullname,$age,$created);
		echo "Successfully Registered";

		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3/css/bootstrap.min.css">
</head>
<body style="background-color: 	#90EE90">
	<form method="POST" style="font-size: 30px; text-align: center; margin-top: 70px">
		Email: <input type="email" name="email" placeholder="Enter email address"><br><br>

		Password: <input type="password" name="password" placeholder="Enter password"><br><br>

		Name: <input type="text" name="fullname" placeholder="Enter your full name"><br><br>

		Age: <input type="number" name="age" placeholder="Enter your age"><br><br>

		<input type="submit" name="submit" value="Register">
	</form>
	<script type="text/javascript" src="bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
