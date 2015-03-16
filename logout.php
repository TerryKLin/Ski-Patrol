<?php

	session_start();
	session_name('a3');
	unset($_SESSION['loggedIn']);

	header("Location: index.php");
	
	

?>