<?php
   require_once("dbmanager.php");



   function redirect($destination) {
   header ('Location: '.$destination);
   exit();
}


?>