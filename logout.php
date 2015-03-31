<?php
   require_once('includes/dbmanager.php');
   require_once('includes/helper.php');
   require_once("includes/alert.php");

   session_name("SKI_PATROL");
   session_start();
   unset($_SESSION['u_data']);
   unset($_SESSION['alerts']);
   setcookie(session_name(),'',time()-86400);
   session_destroy();
   
   redirect("signin.php");


?>