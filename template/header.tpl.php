<?php
   require_once("includes/alert.php");
   session_name("SKI_PATROL");
   session_start();
?>
<html lang="en">
	 <head>
	 	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<title>CANADIAN SKI PATROL</title>
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	 </head>
	 <body>
	 	<nav class="navbar navbar-default" >
	 		<div class="container">
	 			<div class="navbar-header">
	 				<a href="index.php" class="navbar-brand"><img src="images/CSP.jpg" alt="Canadian Ski Patrol" style="height:30px; margin-bottom:10px;"></a>
	 			</div>
	 			<?php
	 			if($_SESSION['u_data']['u_level'] == 1){
	 			?>
	 			<ul class="nav navbar-nav navbar-right">
	 				<li><a href="index.php">Welcome, <?php echo $_SESSION['u_data']['u_username'];?></a></li>
	 				<li><a href="listing.php">User Listing</a></li>
	 				<li><a href="logout.php">Logout</a></li>
	 			</ul>
	 			<?php
	 			}elseif($_SESSION['u_data']['u_level']>1){
	 			?>
	 			<ul class="nav navbar-nav navbar-right">
	 				<li><a href="index.php">Welcome, <?php echo $_SESSION['u_data']['u_username'];?></a></li>
	 				<li><a href="logout.php">Logout</a></li>
	 			</ul>
	 			<?php 
	 		     }else{
	 			?>
	 			<ul class="nav navbar-nav navbar-right">
	 				<li><a href="signin.php">Sign In</a></li>
	 			</ul>
	 			<?php }?>
	 		</div>
	 	</nav> <!-- end of the navbar section  -->

	 	<div class="container">
	 