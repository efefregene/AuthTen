<!DOCTYPE html>
<html>
   
   <head>
      <title>Login Page</title>
   
   </head>
   
   <body bgcolor = "#FFFFFF">

	

		<?php

			require('config.php');
			session_start();

			$username = $_POST['username'];
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			if ($_POST['password'] != $_POST['password2']){
				$_SESSION['password_error'] = '<div class="alert alert-danger" role="alert">Re-type your Password</div>';
				header("location: register.php");
			}else{
				$password = md5($_POST['password']);
				$input = "INSERT INTO login(vUsername, vFullname, vEmail, vGender, vPassword) VALUES('$username', '$fullname', '$email', '$gender', '$password')";

				if (mysqli_query($conn, $input)){
					$_SESSION['account-created'] = '<div class="alert alert-success" role="alert">Account Created!!!</div>';
					header("location: login.php");
				}
				else {
					echo "Error :".mysqli_error($conn);
					header("location: register.php");
				}
			}
		?>
   </body>
</html>