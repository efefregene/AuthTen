<!doctype html>
<html class="no-js" lang="en" dir="ltr">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Auth-Ten Sign Up</title>
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
                           <li role="presentation" id="projects-nav"><a href="login.php" style="color: inherit;">Sign In</a></li>
                        </ul>
                  </div>
            </nav>
               
            <div class="jumbotron" style="padding-top: 51px; align-items: center; min-height: 95vh;">
               <div class="col-md-8 col-md-offset-2 end">
                  <h2 style="text-align: center;">Create an <span style="font-family: 'Patrick Hand SC';">Auth-Ten</span> Account</h2><br>
               
                  <form class="form-horizontal well" action = "sign_up.php" method="post" style="padding-top: 4rem; padding-left: 2rem; padding-right: 2rem; padding-bottom: 4rem;">
                     <p class="lead">If you already have an <span style="font-family: 'Patrick Hand SC';">Auth-Ten</span> account, click <a href="login.php">Here</a> to go ahead and sign in.</p>
                     <label class="control-label col-md-3">Full Name  :</label><input type = "text" name = "fullname" id="fullname" class = "box col-md-6 end" value="<?php echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''; ?>" required><br><br>
                     <label class="control-label col-md-3">Username  :</label><input type = "text" name = "username" id="username" class = "box col-md-6 end" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" required><br><br>
                     <label class="control-label col-md-3">Email Address   </label><input type = "email" name = "email" id="email" class = "box col-md-6" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required><br><br>
                     <label class="control-label col-md-3">Gender  :</label>
                     <label class="radio-inline"><input class="radio-inline" type="radio" name="gender" value="male"> Male</label>
                     <label class="radio-inline"><input class="radio-inline" type="radio" name="gender" value="female"> Female</label>
                     <label class="radio-inline"><input class="radio-inline" type="radio" name="gender" value="others"> Incognito</label><br><br>
                     
                     <label class="control-label col-md-3">Password  :</label><input type = "password" name = "password" id="password" class = "box col-md-6" required><br><br>
                     <label class="control-label col-md-3">Confirm Password  :</label><input type = "password" name = "password2" id="password2" class = "box col-md-6" required><br><br>
                     <?php
                        require('config.php');
                        session_start();
                        if(isset($_SESSION['password_error'])){
                         echo $_SESSION['password_error'];
                         unset($_SESSION['password_error']);
                        }
                        if (isset($_POST['submit'])) {
                           $_SESSION['fullname'] = $_POST['fullname'];
                           $_SESSION['username'] = $_POST['username'];
                           $_SESSION['email'] = $_POST['email'];
                        }

                     ?>

                     <input class="btn btn-primary pull-right" type = "submit" value ="Submit" name="submit" onclick="storeValues(document.getElementsByTagName('form'));" style="margin: 2rem;"><br><br>
                  </form>
               
               <!-- <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div> -->
               </div>
            </div>
				
         </div>
			
      

   </body>
   <script type="text/javascript">
      
      console.log(storeValues(document.getElementsByTagName('form')));
      var expiry = Date.now() + 600000; // plus 10 mins

      function setCookie(name, value){
         document.cookie=name + "=" + escape(value);
      }

      function storeValues(form){
         setCookie("fullname", form[0].fullname.value);
         setCookie("username", form[0].username.value);
         setCookie("email", form[0].email.value);
         setCookie("gender", form[0].gender.value);
         return true;
      }
      
      /*if(field1 = getCookie("field1")) document.myForm.field1.value = field1;
      if(field2 = getCookie("field2")) document.myForm.field2.value = field2;
      if(field3 = getCookie("field3")) document.myForm.field3.value = field3;
      if(field4 = getCookie("field4")) document.myForm.field4.value = field4;*/

   </script>
</html>