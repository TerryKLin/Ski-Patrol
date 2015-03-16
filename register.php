<?php

	
	date_default_timezone_set("America/Halifax");


	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = 'root';
	$db_name = 'assignment3';

	$errors = array();

	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);




	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{

		if ((strlen($_POST["rusername"])) >= 25)
		{

			$errors['long'] = "The username must be less than 25 characters long.";

		}
		if (!ctype_alnum($_POST["rusername"]))
		{

			$errors['alnum'] = "The username must only contain letters and numbers."; 
		}

		if(preg_match('/[!@#$]/', $_POST["rpassword"]) === 0) 
		{
			$errors['symbol'] = "The password must contain of the following characters: $, #, @, !."; 
		}

		if((strcmp(($_POST["rpassword"]),($_POST["rrpassword"]))) != 0 ) 
		{
			$errors['pass_match'] = "Both passwords must match."; 
		}

	}



?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>

			<?php foreach ($errors as $message): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $message; ?>
				</div>
			<?php endforeach ?>

			<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)): ?>
				<div class="alert alert-success" role="alert">
					<?php echo "successfully Registered!"; ?>
				</div>
				<?php 


					$query = "INSERT INTO users SET ";
					$query .= "u_timeStamp = NOW(),";
					$query .= "u_username = '".mysqli_real_escape_string($link, $_POST['rusername'])."',";
					$query .= "u_password = '".mysqli_real_escape_string($link, md5($_POST['rpassword']))."'";

					$result = mysqli_query($link, $query);

				?>
			<?php endif ?>


			<fieldset class="col-xs-3">
				<legend> Register</legend>
					<form action="#" class="form" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="rusername" class="control-label">Username</label>
							<input type="text" name="rusername" class="form-control">
						</div>

						<div  class="form-group">
							<label for="rpassword" class="control-label">Password</label>
							<input type="password" name="rpassword" class="form-control">
						</div>

						<div  class="form-group">
							<label for="rrpassword" class="control-label">Confirm  Password</label>
							<input type="password" name="rrpassword" class="form-control">
						</div>

						<div  class="form-group">
							<input type="submit" class="btn btn-primary btn-block" name="submit">
						</div>

						<div  class="form-group">
							back to <a href="index.php">Login</a>
						</div>

					</form>

			</fieldset>










<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>


</html>