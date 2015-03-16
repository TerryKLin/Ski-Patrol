
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

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['textarea']))
	{
					//??
					$query = "INSERT INTO posts SET ";
					$query .= "p_timeStamp = NOW(),";
					$query .= "post_info = '".mysqli_real_escape_string($link, $_POST['textarea'])."'";

					$result = mysqli_query($link, $query);



	}




?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Accident Form</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="javascript" src="js/jquery-validation-1/core.js"></script>
	</head>
	<body>


		<nav class="navbar navbar-default">
	  		<div class="container" style="max-width: 800px;">
	    		<div class="navbar-header">
	    			<a class="navbar-brand" href="index.php"></a>
	    		</div>
				<ul class="nav navbar-nav navbar-left">
			        <li class="active"><a href="welcome.php">Accident Form</a></li>
			        <li><a href="listing.php">Users</a></li>
				</ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">logout</a></li>
                </ul>
			</div>
		</nav>


        <!DOCTYPE html>
        <html>

        <body>
        <img src="uploads/skiLogo.jpg" alt="Ski Patrol Canada" style="width:350px;height:120px">
        </body>

        </html>

		<form action="welcome.php" method="post" id="form">
	        <h1>Personal Information</h1>
	        <hr>
			<div class = "Gender"</div>
	     		<div class = "col-xs-12 col-md-6 col-sm-4">
				<h5>Gender</h5>
					<label class="radio-inline">
	                <input type="radio" name="radioGender" id="inlineRadio1" value="Male"> Male</label>
	                <label class="radio-inline">
	                    <input type="radio" name="radioGender" id="inlineRadio2" value="Female"> Female</label>
	                <label class="radio-inline">
	                    <input type="radio" name="radioGender" id="inlineRadio3" value="Other"> Other</label>

	            <?php
	        		//gender validation
					if(isset($_POST['singlebutton'])){
						if(empty($_POST["radioGender"]))
						{
							echo '<p style="color:red;">Must select gender.</p>';
						}
	        		}
	        	?>

	                    <h5>Age</h5>
							<div class="col-xs-2">
		            		<input type="text" class="form-control" id="txtAge" name="age">
	        	<?php
	        		//age validation
					if(isset($_POST['singlebutton'])){
						if(empty($_POST["age"]))
						{
							echo '<p style="color:red;">Must input Age.</p>';
						}
	        		}
	        	?>

        	</div>


	    </div>
	</div>

		<div class = Accident Detail>
			<div class = "col-xs-12 col-md-6 col-sm-4">
			<h5>Accident Number</h5>
					<input type = "number" name = "accidentNumber">

			<h5>Report Number</h5>
					<input type = "number" name = "reportNumber">
			</div>
		</div>

		<h1>Injury Information</h1>
        <br>
		<div class = "Injured Area"</div>
     		<div class = "col-xs-12 col-md-6 col-sm-4">

	        <h5>Injured Area</h5>

	          <select class="form-control" name="selectInjuredArea">
	            	  <option>Please select</option>
					  <option>Foot</option>
		              <option>Ankle</option>
		              <option>Lower Leg</option>
		              <option>Knee</option>
		              <option>Thigh</option>
		              <option>Hip</option>
		              <option>Lower Ab</option>
		              <option>Upper Ab</option>
		              <option>Chest</option>
		              <option>Neck</option>
		              <option>Clavicle</option>
		              <option>Shoulder</option>
		              <option>Upper Arm</option>
		              <option>Elbow</option>
		              <option>Lower Arm</option>
		              <option>Wrist</option>
		              <option>Hand</option>
		              <option>Thumb</option>
		              <option>Finger</option>
		              <option>Upper Back</option>
		              <option>Lower Back</option>
		              <option>Tailbone</option>
		              <option>Head</option>
		              <option>Face</option>
		              <option>No Injury</option>
	          </select>

	    	<?php
        		//injured area validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectInjuredArea"]))
					{
						echo '<p style="color:red;">Must select injury area.</p>';
					}
        		}
        	?>

                <label class="radio-inline">
                    <input type="radio" name="radioInjuredArea" id="inlineRadio1" value="Left"> Left </label>
                <label class="radio-inline">
                    <input type="radio" name="radioInjuredArea" id="inlineRadio2" value="Right"> Right </label>
                <label class="radio-inline">
                    <input type="radio" name="radioInjuredArea" id="inlineRadio3" value="Both"> Both</label>


	    	<?php
        		//injury area radio button validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["radioInjuredArea"]))
					{
						echo '<p style="color:red;">Must select injury area (left, rigth or Both).</p>';
					}
        		}
        	?>


	           <h5>Injury Information</h5>
	           <textarea class="form-control" rows="5"></textarea>

	      </div>
	    </div>
        <div class = "Incident Area"></div>
	        <div class = "col-xs-12 col-md-6 col-sm-4">

	          <h5>Incident Type </h5>
	          <select class="form-control" name="selectIncidentType">
	               	 <option>Please select</option>
	                 <option>Fracture</option>
	                 <option>Sprain</option>
	                 <option>Bruise</option>
	                 <option>Laceration</option>
	                 <option>Dislocation</option>
	                 <option>Cardiac</option>
	                 <option>Stroke</option>
	                 <option>Concussion</option>
	                 <option>Hypothermia</option>
	                 <option>Frostbite</option>
	                 <option>Internal</option>
	                 <option>Illness</option>
	                 <option>Deceased</option>
	                 <option>Unknown</option>
	                 <option>N/A</option>
	                </select>

	    	<?php
        		//incident type validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectIncidentType"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select incident type.</p>';
					}
        		}
        	?>

	                <h5>Additional Information</h5>
	                 <textarea class="form-control" rows="6"></textarea>

	      </div>

        <h1>&nbsp;</h1>
        <h1>Location  Information</h1>
        <hr>
	      <div class ="Run Classification"></div>
	        <div class = "col-xs-12 col-md-6 col-sm-4">
	            <h5>Run Classification</h5>
	            <select class="form-control" name="selectRunClassification">
	              <option>Please select</option>
				  <option>Easiest</option>
	              <option>More Difficult</option>
	              <option>Most Difficult</option>
	              <option>Extreme</option>
	              <option>N/A</option>
	            </select>

	        <?php
        		//run classification type validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectRunClassification"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select run classification type.</p>';
					}
        		}
        	?>

	            <h5>Are drugs and alcohol suspected to have contributed to the accident?</h5>
	            <select class="form-control" name="selectDrugs">
	              <option>Select</option>
								<option>Yes</option>
	              <option>No</option>
	            </select>

	        <?php
        		//select drugs validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectDrugs"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        	?>

	        </div>

	      <div class = "Activity"></div>
	        <div class = "col-xs-12 col-md-6 col-sm-4">
	            <h5>Activity</h5>

	            <select class="form-control" name="selectActivity">
	              <option>Please select</option>
				  <option>Alpine</option>
	              <option>Snowboard</option>
	              <option>Telemark</option>
	              <option>Nordic</option>
	              <option>Touring</option>
	              <option>Tubing</option>
	              <option>Non-skiing</option>
	              <option>Other</option>
	            </select>

	    	<?php
        		//select activity validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectActivity"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        	?>
	        </div>

	        <div class = "Involement"></div>
	          <div class = "col-xs-12 col-md-6 col-sm-4">
	            <h5>Involvement</h5>
	            <select class="form-control" name="selectInvolvement">
	              <option>Please select</option>
				  <option>Recreation Skiing"/"Riding</option>
	              <option>Recreation Jumping</option>
	              <option>Competition</option>
	              <option>Training</option>
	              <option>In Lesson</option>
	              <option>Tube Slide</option>
	              <option>Unknown</option>
	              <option>Other</option>
	            </select>

	         <?php
        		//select involvment validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectInvolvement"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        	?>

	          </div>

	        <div class = Weather></div>
	          <div class = "col-xs-12 col-md-6 col-sm-4">
	            <h5>Weather</h5>
	            <select class="form-control" name="selectWeather">
	             <option>Please select</option>
				  <option>Clear</option>
	              <option>Overcast</option>
	              <option>Snowing</option>
	              <option>Raining</option>
	              <option>Fog</option>
	              <option>Unknown</option>
	              <option>N/A</option>
	              <option>Other</option>
	              </select>

	            <?php
        		//select weather validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectWeather"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        		?>
	          </div>

	          <div class = "Light"></div>
	            <div class = "col-xs-12 col-md-6 col-sm-4">
	              <h5>Light</h5>
	              <select class="form-control" name="selectLight">
					<option>Please select</option>
					<option>Sharp</option>
	                <option>Flat</option>
	                <option>Whiteout</option>
	                <option>Lights</option>
	                <option>Dark</option>
	                <option>Uknown</option>
	                <option>N/A</option>
	                </select>

	            <?php
        		//select light validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectLight"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        		?>
	            </div>

	           <div class = "Temperature in Celcius"></div>
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	              <h5>Temp in Celcius</h5>
	                <select class="form-control" name="selectTemp">
					  <option>Please select</option>
					  <option>Above 10</option>
	                  <option>0 to 10</option>
	                  <option>-10 to 0</option>
	                  <option>-20 to -11 </option>
	                  <option>Below 20</option>
	                  <option>Uknown</option>
	                  <option>N/A</option>
	                </select>

	        	<?php
        		//select temp validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectTemp"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        		?>

	              </div>

		        <div class = "Run Type"></div>
		        <div class = "col-xs-12 col-md-6 col-sm-4">
		        <h5>Run Type</h5>
		        <select class="form-control" name="selectRunType">
					<option>Please select</option>
					<option>Marked Run</option>
		            <option>Freestyle Terrain</option>
		            <option>Terrain/Rail Park</option>
		            <option>Competition Terrain</option>
		            <option>Half Pipe</option>
		            <option>Out of Bounds</option>
		            <option>Closed Inbounds</option>
		            <option>Off Trail</option>
		            <option>Lift Incident</option>
		            <option>Premises</option>
		            <option>Unknown</option>
		            <option>N/A</option>
		        </select>

        	    <?php
        		//select run type validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectRunType"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        		?>

            </div>
        <h1>&nbsp;</h1>
        <h1>Accident Information</h1>
        <hr>
	            <div class = "Transportation From Base"></div>
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	                <h5>Transport From Base</h5>
	                  <select class="form-control" name="selectTransport">
					  	<option>Please select</option>
					  	<option>Private Car</option>
	                  	<option>Taxi</option>
	                  	<option>Company</option>
	                  	<option>Ambulance</option>
	                  	<option>Bus</option>
	                  	<option>Helicopter</option>
	                  	<option>Walk/Ski</option>
	                  	<option>Other</option>
	                  	<option>Unknown</option>
	                  	<option>N/A</option>
	                  </select>

	            <?php
        		//select transport type validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectTransport"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        		?>

	              </div>


	            <div class = "Transportation Destination"></div>
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	                <h5>Transport Destination</h5>
	                  <select class="form-control" name="selectTransportDest">
						<option>Please select</option>
						<option>Home</option>
		                 <option>Doctor</option>
		                 <option>Hospital</option>
		                 <option>Clinic</option>
		                 <option>Hotel</option>
		                 <option>Return to Ski</option>
		                 <option>Rest</option>
		                 <option>Other</option>
		                 <option>Unknown</option>
		                 <option>N/A</option>
		               </select>

	            <?php
        		//select transport dest validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectTransportDest"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        		?>
	              </div>

	            <!-- If it was a collision-->
	            <div class = "Collision"></div>
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	                <h5>Non-collision</h5>
	                  <select class="form-control" name="selectNonCollision">
						  <option>Please select</option>
						  <option>Fall - Skier lost control</option>
		                  <option>Fall - caught an edge</option>
		                  <option>Fall & struck by own equipment</option>
		                  <option>Fall - jumping</option>
		                  <option>Fall - change of conditions</option>
		                  <option>Fall - change of terrain</option>
		                  <option>Prior medical condition</option>
		                  <option>Skied off trail</option>
		                  <option>Equipment failure</option>
		                  <option>Binding pre-released</option>
		                  <option>Hit by other's equipment</option>
		               </select>

	            <?php
        		//select non-collision validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectNonCollision"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        		?>

	              </div>


	            <div class = "Lift realted"></div>
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	                <h5>Lift Related</h5>
	                  <select class="form-control" name="selectLiftRelated">
						<option>Please select</option>
						<option>Clothing caught on lift</option>
	                  	<option>Fall while loading</option>
		                <option>Fall after unload</option>
		                <option>Fall from lift</option>
		                <option>Jump chair lift</option>
		                <option>Injured by restraining bar</option>
		                <option>Struck by chair</option>
	                  </select>

	        	 <?php
        		//select lift related validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectLiftRelated"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        		?>

	                </div>


	            <div class = "Non-skiing related"></div>
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	                <h5>Non-skiing related</h5>
	                  <select class="form-control" name="selectNonSkiing">
						<option>Please select</option>
						<option>Slip & fall</option>
	                    <option>Cold/weather related</option>
	                    <option>Not otherwise classified</option>
	                    <option>Other</option>
	                  </select>

	             <?php
        		//select non-skiing validation
				if(isset($_POST['singlebutton'])){
					if(empty($_POST["selectNonSkiing"]))
					{
						//$errors['AgeEmpty'] = "Must input Age.";
						echo '<p style="color:red;">Must select one.</p>';
					}
        		}
        		?>

	            </div>

        		<div class = "Transport to first aid"></div>
		       	 <div class = "col-xs-12 col-md-6 col-sm-4">

		            <h5>Transport to First Aid</h5>
		            <select class="form-control" name="selectFirstAid">
						<option>Please select</option>
						<option>Walk/Ski</option>
		                <option>Toboggan</option>
		                <option>Snowmobile</option>
		                <option>Helicopter</option>
		                <option>Download</option>
		                <option>On-hill</option>
		                <option>Other</option>
		                <option>Unknown</option>
		                <option>N/A</option>
		            </select>

		             <?php
		        		//select drugs validation
						if(isset($_POST['singlebutton'])){
							if(empty($_POST["selectFirstAid"]))
							{
								//$errors['AgeEmpty'] = "Must input Age.";
								echo '<p style="color:red;">Must select one.</p>';
							}
		        		}
		        		?>

        		</div>

				<div class = "Patroller Information">
		              <div class = "col-xs-12 col-md-6 col-sm-4">
		                <h5>Patroller Information</h5>
		                	<p>Patroller's Name</p><br>
		                	<input type = "text" name = "patrollersName1">
		                	<p>Patroller's Number</p><br>
		                	<input type = "number" name = "patrollersNum1">
		                	<p>Patroller's Name</p><br>
		                	<input type = "text" name = "patrollersName2">
		                	<p>Patroller's Number</p><br>
		                	<input type = "number" name = "patrollersNum2">
		                	<p>Patroller's Name</p><br>
		                	<input type = "text" name = "patrollersName3">
		                	<p>Patroller's Number</p><br>
		                	<input type = "number" name = "patrollersNum3">
		            </div>
		 		</div>

	             <div class = "Signature">
		              <div class = "col-xs-12 col-md-6 col-sm-4">
		                <h5>Signautre</h5>
		                  <p>Form completed by</p>
		                	<input type = "text" name = "formCompleter">
		                  <p>Witness/p>
		                	<input type = "text" name = "witness">
		                  <p>Date</p>
		                  	<input type = "date" name = "fillInDate">
		           	 </div>
				</div>
        <h1>&nbsp;</h1>
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4 center-block">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary center-block">
                    Submit
                </button>
            </div>
        </div>

        <h1>&nbsp;</h1>
        </form>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>


</html>
