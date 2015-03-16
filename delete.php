<?php

	 session_start();
	 session_name('a3');

	 if(isset($_SESSION['loggedIn']) === False){
	 	$_SESSION['notice'] = "You must login before you can access the page.";
	 	header("Location: index.php");
	 	die();
	 }

	 date_default_timezone_set("America/Halifax");


	 $db_host = 'localhost';
	 $db_user = 'root';
	 $db_pass = 'root';
	 $db_name = 'assignment3';

	 $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	$query = "SELECT * FROM users WHERE u_id = '".mysqli_real_escape_string($link, $_POST['userId'])."'";

	$result = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($result);

	 if ($user['u_username'] == $_SESSION['loggedIn'])
		header("Location: logout.php");	
	else header("Location: listing.php");

	if ($user['u_username'] == "admin")
		die();

 	$query = "DELETE FROM users WHERE u_id = '".mysqli_real_escape_string($link, $_POST['userId'])."'";
	mysqli_query($link, $query);

?>