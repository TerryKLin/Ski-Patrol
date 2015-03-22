<?php
    require_once("config.php");
    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


    // retrive all the user's information 
    function validate_user_info($username){
    	global $link;
    	$query = "SELECT * FROM useraccount WHERE username='".mysqli_real_escape_string($link,$username)."'";
    	$query = mysqli_query($link,$query);
    	$result = mysqli_fetch_assoc($query);
        return $result;
    } 


    function create_newuser_account($username, $password, $level){
    	global $link;
    	$query = "INSERT INTO useraccount (username, password, level ) VALUES (";
	    $query .= "'".$username."',";
	    $query .= "'".$password."',";
	    $query .= "'".$level."')";
	    $result = mysqli_query($link, $query);
	 }

	 function all_user_info(){
	 	global $link;
    	$query = "SELECT * FROM useraccount ";
    	$query = mysqli_query($link,$query);
        return $query;
	 }

     function delete_from_table($u_id){
       global $link;
       $query="DELETE FROM useraccount where u_id='".$u_id."'";
       $query = mysqli_query($link, $query);
     }
?>