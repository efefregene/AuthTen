<?php
   require('session.php');
   
   if(session_destroy()) {
      header("Location: login.html");
   }
?>