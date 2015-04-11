<?php
   require_once("template/header.tpl.php");
   require_once("includes/alert.php");
   require_once("includes/helper.php");
   require_once('includes/config.php');
   require_once('includes/dbmanager.php');


   
   if($_SESSION['u_data']['u_level'] == '5'){


   	if($_POST['accidentNumber'] != "" && $_POST['patrollersNum1'] != "" && $_POST['incidentDate'] != "")
   	{	
   		if(isset($_POST['Submit_Button'])){
	   	  	
   			insertion($_POST['accidentNumber'],$_POST['patrollersNum1'],$_POST['incidentDate'],$_POST['onSceneTime'],$_POST['transportTime'], $_POST['incidentDate'],$_POST['accidentLocation'], $_POST['SkierInfo'],$_POST['gender'],$_POST['accidentLocation'],$_POST['runClassfication'],$_POST['activity'],$_POST['involvement'],$_POST['weather'],$_POST['lighting'],$_POST['temp'],$_POST['snow'],$_POST['surface'],$_POST['equipment'],$_POST['bindingRelease'],$_POST['transportToFirstAid'],$_POST['collision'],$_POST['collisionInfo'],$_POST['nonCollision'],$_POST['liftRelated'],$_POST['nonSkiingRelated'],$_POST['transportFromBase'],$_POST['transportDestination'],$_POST['formCompletedBy'],$_POST['incidentType'],$_POST['injuredArea'],$_POST['injuredSide'],$_POST['fillInDate']);
   			//Your form has been submitted
	
   		}else{
   			redirect("signin.php");
   		}
   	}
   	else
   	{
		set_alerts("danger", "Please fill in the required fields before submitting");
	
	}

 	  echo display_alert();


?>
  

	<form action="index.php" method="post" id="infoForm">

	    <h1>Skier Information</h1>
	    <div class = "Skier Info"></div>
		    <div class = "col-xs-12 col-md-6 ">	
				<h5>Skier's Age</h5>
				<input type = "number" name = "SkierInfo" required>
			</div>    

		<div class = "Skier Gender"></div>
		    <div class = "col-xs-12 col-md-6 "> 				
				<h5>Skier's Gender</h5>
					<select class="Skier info" name="gender" required>
						<option>Select</option>
						<option>Female</option>
						<option>Male</option>
						<option>Other</option>
					</select>
			</div>

		<h1>&nbsp;</h1>
	    <h1>Injury Information</h1>
	    <div class = "Accident Number"></div>
			<div class = "col-xs-12 col-md-6 ">
				<h5>Accident Number</h5>
				<input type = "number" name = "accidentNumber" required>
	        </div>

	        <div class = "Accident Date"></div>
	        	<div class = "col-xs-12 col-md-6 ">
		        	<h5>Accident Date</h5>
		        <input type = "date" name = "incidentDate" id = "datepicker">
	   		</div>
	        
	        <hr>
	       	<div class = "Incident Type"></div>
		      	<div class = "col-xs-12 col-md-6 ">
			        <h5>Incident Type </h5>
				        <select class="form-control" name="incidentType">  
				            <option>Select</option>
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
			    </div>

		<div class = "Injured Area"></div>
	     	<div class = "col-xs-12 col-md-6 ">
			    <h5>Injured Area</h5>
			        <select class="form-control" name="injuredArea">
				            <option>Select</option>
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

	            <label class="radio-inline">
	                <input type="radio" name="injuredSide" id="inlineRadio1" value="Left"> Left </label>
	            <label class="radio-inline">
	                <input type="radio" name="injuredSide" id="inlineRadio2" value="Right"> Right </label>
	            <label class="radio-inline">
	                <input type="radio" name="injuredSide" id="inlineRadio3" value="Both"> Both</label>
		    </div>
		
	    <h1>&nbsp;</h1>
	    <h1>Location  Information</h1>
	    <hr>
	    <div class = "Accident Location"></div>
			<div class = "col-xs-12 col-md-6 ">
				<h5>Accident Location</h5>
				<input type = "text" name = "accidentLocation">
	        </div>
		<div class ="Run Classification"></div>
		    <div class = "col-xs-12 col-md-6 ">
		        <h5>Run Classification</h5>
			        <select class="form-control" name="runClassfication">
			          	<option>Select</option>
			          	<option>Easiest</option>
				        <option>More Difficult</option>
				        <option>Most Difficult</option>
				        <option>Extreme</option>
				        <option>N/A</option>
			        </select>
		    </div>  
		<div class = "Accident contributing factor"></div>
			<div class = "col-xs-12 col-md-6 ">
				<h5>Are drugs and alcohol suspected to have contributed to the accident?</h5>
			        <select class="form-control" name="drugsOrAlcohol">
			              <option>Select</option>
			              <option>Yes</option>
			              <option>No</option>
			        </select>
		</div>
			        
		    

		<div class = "Activity"></div>
		    <div class = "col-xs-12 col-md-6 ">
		        <h5>Activity</h5>
		        <select class="form-control" name="activity">
		            <option>Select</option>
		            <option>Alpine</option>
		            <option>Snowboard</option>
		            <option>Telemark</option>
		            <option>Nordic</option>
		            <option>Touring</option>
		            <option>Tubing</option>
		            <option>Non-skiing</option>
		            <option>Other</option>
		        </select>
		    </div>

		<div class = "Involement"></div>
		    <div class = "col-xs-12 col-md-6 ">
		        <h5>Involvement</h5>
		        <select class="form-control" name="involvement">
		          <option>Select</option>
		          <option>Recreation Skiing / Riding</option>
		          <option>Recreation Jumping</option>
		          <option>Competition</option>
		          <option>Training</option>
		          <option>In Lesson</option>
		          <option>Tube Slide</option>
		          <option>Unknown</option>
		          <option>Other</option>
		        </select>
		    </div>
	              
	    <div class = "Weather Information"></div>      
		    <div class = "col-xs-12 col-md-6 ">
		        <h5>Weather</h5>
		        <select class="form-control" name="weather">
			        <option>Select</option>
			        <option>Clear</option>
			        <option>Overcast</option>
			        <option>Snowing</option>
			        <option>Raining</option>
			        <option>Fog</option>
			        <option>Unknown</option>
			        <option>N/A</option>
			        <option>Other</option>
		        </select>
		    </div>

		 <div class = "Lighting Conditions"></div>
		    <div class = "col-xs-12 col-md-6 ">
			    <h5>Lighting Conditions</h5>
			    <select class="form-control" name="lighting">
			        <option>Select</option>
			        <option>Sharp</option>
			        <option>Flat</option>
			        <option>Whiteout</option>
			        <option>Lights</option>
			        <option>Dark</option>
			        <option>Uknown</option>
			        <option>N/A</option>
		        </select>
		    </div>

		<div class = "Temperature in Celcius"></div> 
		    <div class = "col-xs-12 col-md-6 ">
		      <h5>Temp in Celcius</h5>
		        <select class="form-control" name="temp">
		          <option>Select</option>
		          <option>Above 10</option>
		          <option>0 to 10</option>
		          <option>-10 to 0</option>
		          <option>-20 to -11 </option>
		          <option>Below 20</option>
		          <option>Uknown</option>
		          <option>N/A</option>
		        </select>
		    </div>

	    <div class = "Snow Amount"></div> 
		    <div class = "col-xs-12 col-md-6 ">
		      <h5>Snow Amount</h5>
		        <select class="form-control" name="snow">
		          <option>Select</option>
		          <option>No</option>
		          <option>0 to 5</option>
		          <option>5 to 10</option>
		          <option>10 to 15 </option>
		          <option>Over 15</option>
		          <option>Uknown</option>
		          <option>N/A</option>
		        </select>
		    </div>


	    <div class = "Surface"></div> 
		    <div class = "col-xs-12 col-md-6 ">
		      <h5>Surface</h5>
		        <select class="form-control" name="surface">
		          <option>Select</option>
		          <option>Groomed</option>
		          <option>Moguls</option>
		          <option>Powder</option>
		          <option>Variable </option>
		          <option>Granular</option>
		          <option>Hard</option>
		          <option>Unknown</option>
		          <option>N/A</option>
		        </select>
		    </div>



		<div class = "Equipment"></div> 
		    <div class = "col-xs-12 col-md-6 ">
		      <h5>Equipment</h5>
		        <select class="form-control" name="equipment">
		          <option>Select</option>
		          <option>Owned</option>
		          <option>Area rental</option>
		          <option>Other rental</option>
		          <option>Unknown</option>
		          <option>N/A</option>
		        </select>
		    </div>

		<div class = "Binding Release"></div> 
		    <div class = "col-xs-12 col-md-6 ">
		      <h5>Binding Release</h5>
		        <select class="form-control" name="bindingRelease">
		          <option>Select</option>
		          <option>None</option>
		          <option>Left Only</option>
		          <option>Right Only</option>
		          <option>Both</option>
		          <option>Pre-Released</option>
		          <option>Unknown</option>
		          <option>N/A</option>
		        </select>
		    </div>


		<div class="Collision"></div>
			<div class = "col-xs-12 col-md-6">
			    <h5>Collision</h5>
			    <select class="form-control" name="collision">
			    	<option>Select</option>
			    	<option>Yes</option>
			    	<option>No</option>
			    </select>
			</div>


		<div class="Collision Information"></div>
			<div class="col-xs-12 col-md-6">
				<h5>Collision Information</h5>
				<input type="text" name="collisionInfo" class="collisionInfo">
			</div>

		<div class = "Run Type"></div>
			<div class = "col-xs-12 col-md-6 ">
				<h5>Run Type</h5>
				<select class="form-control" name="runType">
				    <option>Select</option>
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
		    </div>

		<h1>&nbsp;</h1>
		<h1>&nbsp;</h1>
	    <h1>Accident Information</h1>
	    <hr>
		<div class = "Accident Detail"></div>
		    <div class = "col-xs-12 col-md-6 ">
		       	<h5>Incident Time</h5>
		       		<input type = "time" name = "incidentTime" id = "datepicker">
		       	<h5>On Scene Time</h5>
		       		<input type = "time" name = "onSceneTime" id = "datepicker2">
		       	<h5>Transport Time</h5>
		       		<input type = "time" name = "transportTime" id = "datepicker3">
		   	</div>

		<div class = "Transportation From Base"></div>
		    <div class = "col-xs-12 col-md-6 ">
		        <h5>Transport From Base</h5>
		          	<select class="form-control" name="transportFromBase">
		          		<option>Select</option>
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
		    </div>


		<div class = "Transportation Destination"></div>
		    <div class = "col-xs-12 col-md-6 ">  
		        <h5>Transport Destination</h5>
		           <select class="form-control" name="transportDestination">
				        <option>Select</option>
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
		    </div>

		            
		<div class = "Collision"></div>
		    <div class = "col-xs-12 col-md-6 ">
		        <h5>Non-collision</h5>
		          	<select class="form-control" name="nonCollision">
				        <option>Select</option>
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
		    </div>


		<div class = "Lift realted"></div>
		    <div class = "col-xs-12 col-md-6 ">
		        <h5>Lift Related</h5>
		          	<select class="form-control" name="liftRelated">
			            <option>Select</option>
			            <option>Clothing caught on lift</option>
			            <option>Fall while loading</option>
			            <option>Fall after unload</option>
			            <option>Fall from lift</option>
			            <option>Jump chair lift</option>
			            <option>Injured by restraining bar</option>
			            <option>Struck by chair</option>
		          	</select>
		    </div>


		<div class = "Non-skiing related"></div>
		    <div class = "col-xs-12 col-md-6 ">
		        <h5>Non-skiing related</h5>
		          <select class="form-control" name="nonSkiingRelated">
		            <option>Select</option>
		            <option>Slip & fall</option>
		            <option>Cold/weather related</option>
		            <option>Not otherwise classified</option>
		            <option>Other</option>
		          </select>
		    </div>

	    <div class = "Transport to first aid"></div>
			<div class = "col-xs-12 col-md-6 ">
			    <h5>Transport to First Aid</h5>
			        <select class="form-control" name="transportToFirstAid">
			            <option>Select</option>
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
			</div>
			
			     
	    <h1>&nbsp;</h1>
		<h1>&nbsp;</h1>
	    <h1>Patroller  Information</h1>
	    <hr>
	    <div class = "Patroller Information"></div>
			<div class = "col-xs-4 col-md-4 ">
			    <p>Patroller's Name</p>
			        <input type = "text" name = "patrollersName1">
			    <p>Patroller's Number</p>
			        <input type = "number" name = "patrollersNum1">     
			</div>
			<!--
			<div class = "col-xs-4 col-md-4 ">
			    <p>Patroller's Name</p>
			        <input type = "text" name = "patrollersName2">
			    <p>Patroller's Number</p>
			        <input type = "number" name = "patrollersNum2">   
			</div>
			<div class = "col-xs-4 col-md-4 ">
			    <p>Patroller's Name</p>
			        <input type = "text" name = "patrollersName3">
			    <p>Patroller's Number</p>
			        <input type = "number" name = "patrollersNum3">   
			</div>-->

			<h1>&nbsp;</h1>
			<h1>&nbsp;</h1>


		<h2>Signature</h2>
		<hr>
	    <div class = "Signature"></div>
			<div class = "col-xs-12 col-md-6 ">
			    <p>Form completed by</p>
			       <input type = "text" name = "formCompletedBy">
			    <p>Date</p>
			        <input type = "date" name = "fillInDate" id="datepicker4">
			</div>
					
	    
					
		<h1>&nbsp;</h1>
		<div class="center-block" style="margin-top:10px;">
			   <label class="col-md-4 control-label" for="submit_Button"></label>
			   		<div class="col-xs-12 center-block">
			            	<button id="submit_Button" name="Submit_Button" class="btn btn-primary center-block">
			                	Submit
			            	</button>
			        	</div>
			    	</div>
			    	<h1>&nbsp;</h1>
			</form>
			

<?php 
  }

   require_once("template/footer.tpl.php");
   require_once("includes/clean.php");
?>