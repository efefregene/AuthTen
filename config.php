<?php
	define('SERVER', 'localhost', true);
	define('USERNAME', 'root', true);
	define('PASSWORD', '', true);
	define('DATABASE', 'authusers', true);

	#Create mysql connection
	$conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

	if (!$conn){
		die("Connection failed: ".mysql_error());
	}

?>