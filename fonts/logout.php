<?php
   require_once('includes/dbmanager.php');
   require_once('includes/helper.php');
   require_once("includes/alert.php");

   session_name("Assignment4");
   session_start();
   alter_record($_SESSION['player'],$_SESSION['win'],$_SESSION['loss']);
   set_alerts("success","You log out successfully."."You loss is". $_SESSION['loss']);
   unset($_SESSION['word_choice']);
   unset($_SESSION['player']);
   unset($_SESSION['win']);
   unset($_SESSION['loss']);
   unset($_SESSION['password']);
   unset($_SESSION['wrongguess']);
   unset($_SESSION['wordbank']);
   unset($_SESSION['usedword']);
   unset($_SESSION['times']);
   createNewTextTable();
   setcookie(session_name(),'',time()-86400);
   session_destroy();
   redirect("index.php");


?>