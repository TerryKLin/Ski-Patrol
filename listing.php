

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

	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{

		
	}



?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Listing</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
			<nav class="navbar navbar-default">
	  		<div class="container" style="max-width: 800px;">
	    		<div class="navbar-header">
	    			<a class="navbar-brand" href="index.php"></a>
	    		</div>
				<ul class="nav navbar-nav navbar-left">
			        <li><a href="welcome.php">Welcome page</a></li>
			        <li class="active"><a href="listing.php">Users</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
			        <li><a href="logout.php" class="col-md-offset-12">logout</a></li>
				</ul>

			</div>
		</nav>



			<fieldset class="col-xs-3">
				<legend> Users List</legend>
				
						<div class="container">	

							<table class="table table-striped">
							<th> users </th>
							<th> Created </th>
							<th> Options </th>

							<?php

							$query = "SELECT * FROM users";
							
							$result = mysqli_query($link, $query);
						
							while($row = mysqli_fetch_assoc($result)) {


						
								echo "<tr style='border-bottom: 1px solid #ececec;'>";


								echo "<td>". $row['u_username']."</td>";		
								echo "<td>". $row['u_timeStamp']."</td>";

								if($row['u_username'] != 'admin'){
									echo "<td><form action='delete.php' method='post'><input name='userId' type='hidden' value='{$row['u_id']}'><button type='submit' class='btn btn-link'>Delete</button></form></td>";
								}
								else{
									echo "<td></td>";
								}												

								echo "</tr>";

						
							}
							echo "</table>";

							?>


							
							



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>


</html>