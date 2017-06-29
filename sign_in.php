<html>
   
   <head>
      <title>>Auth-Ten Login Page</title>
      
      
   </head>
   
   <body bgcolor = "#FFFFFF">

    <?php

      session_start();

		require('config.php');
		
		  // username and password sent from form 
				  
			$username = mysqli_real_escape_string($conn,$_POST['username']);
		  	$password = mysqli_real_escape_string($conn,md5($_POST['password'])); 

			$sql = "SELECT * from loginview WHERE username = '$username' and passcode = '$password' ";
			$result = mysqli_query($conn, $sql);
			$count = mysqli_num_rows($result);

			if($count == 1) {
		         $_SESSION['login_user'] = $username;
		         
		         header("location: welcome.php");
		    }else {
		         $error = "Your Login Name or Password is invalid";
		         echo $error;
		    }
		
	?>

   </body>
</html>