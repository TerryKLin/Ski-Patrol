
<?php


	session_start();
	session_name('a3');

	date_default_timezone_set("America/Halifax");


	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = 'root';
	$db_name = 'assignment3';

	$errors = array();

	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	$query = "INSERT INTO assignment3 SET ";
	$query .= "c_date = NOW()" ;

	$WrongPass = false;



	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{

		$query = "SELECT `u_password` FROM `users` WHERE `u_username` = '". mysqli_real_escape_string($link, $_POST['username'])."'";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_assoc($result);
		$password = $row['u_password'];
		
		if ($password === md5($_POST['password'])){

			$_SESSION['loggedIn'] = $_POST['username'];

			 header("Location: welcome.php");
			 die();
		}
		else
		{
			$WrongPass = true;
		}
	}



?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>

			<?php if($WrongPass === true): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo "Wrong username or password." ?>
				</div>
			<?php endif ?>

			<?php if ( isset( $_SESSION['notice'] ) ): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo ($_SESSION['notice']); ?>
				</div>
				<?php unset($_SESSION['notice']); ?>
			<?php endif ?>


	
			<fieldset class="col-xs-3">
				<legend> Login</legend>
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="username" class="control-label">Username</label>
							<input type="text" name="username" class="form-control" autofocus>
						</div>

						<div  class="form-group">
							<label for="password" class="control-label">Password</label>
							<input type="password" name="password" class="form-control">
						</div>

						<div  class="form-group">
							<input type="submit" name="submit" class="btn btn-primary btn-block">
						</div>

						
						<div  class="form-group">
							<p> or </p>
							<a href="register.php">Register</a>
						</div>
					    
					</form>

			</fieldset>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>


</html>