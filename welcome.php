<!doctype html>
<html class="no-js" lang="en" dir="ltr">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>>Auth-Ten Login Page</title>
       <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Pacifico|Lato|Patrick+Hand+SC">
       <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   </head>
   <body>
         <div class="col-md-12">
            <nav id="navi-bar" class="navbar navbar-default navbar-fixed-top">
                  <div class="container-fluid">
                     <div class="navbar-header">
                           <a class="navbar-brand" href="index.html">
                           <div class="brand-font" id="brand-name" style="font-family: 'Patrick Hand SC', san-serif; font-size: 21px;">AUTH-Ten</div>
                        </a>
                     </div>

                    <!-- Collect the nav content on the right -->
                        <ul class="nav nav-pills navbar-right nav-font navbar-profile  pull-right" style="font-family: 'Lato', san-serif; font-size: 21px; color: #707070; text-decoration: none;">
                           <li role="presentation"><a href="logout.php" style="color: inherit;">Logout</a></li>
                        </ul>
                  </div>
            </nav>
            <div class="jumbotron" style="padding-top: 51px; align-items: center; min-height: 95vh;">
               <div class="col-md-8 col-md-offset-2 end">
     				<?php
     					require('session.php');
	     				echo "<h2>Welcome ".$username."</h2>"; 
	     				$date = "SELECT date from loginview WHERE username = '$username' ";
	     				$data = mysqli_query($conn, $date);
	     				$result = mysqli_fetch_assoc($data);
	     				echo "<h3>Date of Account Creation: " .$result['date']."</h3>";
	     			?>

   </body>
   
</html>