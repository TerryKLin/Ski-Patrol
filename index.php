<?php
   require_once("template/header.tpl.php");
   require_once("includes/alert.php");
   require_once("includes/helper.php");
   session_name("SKI_PATROL");
   session_start();
   echo display_alert();
   if($_SESSION['u_data']['u_level'] >= 1){
?>
  
    <h1 >Injury Information</h1>
    <div class = "Accident Detail"></div>
			<div class = "col-xs-12 col-md-6 col-sm-4">
			<h5>Accident Number</h5>
					<input type = "number" name = "accidentNumber">
             </div>
             <div class = "col-xs-12 col-md-6 col-sm-4">
			<h5>Report Number</h5>
					<input type = "number" name = "reportNumber">
			</div>
		


   
        <hr>
		<div class = "Injured Area"</div>
     		<div class = "col-xs-12 col-md-6 col-sm-4">

	        <h5>Injured Area</h5>

	          <select class="form-control">
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
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Left"> Left </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Right"> Right </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Both"> Both</label>

	           <h5>Injury Information</h5>
	           <textarea class="form-control" rows="5"></textarea>

	      </div>
	    </div>
        <div class = "Incident Area"></div>
	        <div class = "col-xs-12 col-md-6 col-sm-4">

	          <h5>Incident Type </h5>
	          <select class="form-control">
	               
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

	                <h5>Additional Information</h5>
	                 <textarea class="form-control" rows="6"></textarea>

	      </div>

        <h1>&nbsp;</h1>
        <h1 class = "row col-sm-12">Location  Information</h1>
        <hr>
	      <div class ="Run Classification"></div>
	        <div class = "col-xs-12 col-md-6 col-sm-4">
	            <h5>Run Classification</h5>
	            <select class="form-control">
	              <option>Easiest</option>
	              <option>More Difficult</option>
	              <option>Most Difficult</option>
	              <option>Extreme</option>
	              <option>N/A</option>
	            </select>
	      
	            <h5>Are drugs and alcohol suspected to have contributed to the accident?</h5>
	            <select class="form-control">
	              <option>Yes</option>
	              <option>No</option>
	            </select>
	        </div>

	      <div class = "Activity"></div>
	        <div class = "col-xs-12 col-md-6 col-sm-4">
	            <h5>Activity</h5>

	            <select class="form-control">
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
	          <div class = "col-xs-12 col-md-6 col-sm-4">
	            <h5>Involvement</h5>
	            <select class="form-control">
	              <option<Recreation Skiing"/"Riding</option>
	              <option>Recreation Jumping</option>
	              <option>Competition</option>
	              <option>Training</option>
	              <option>In Lesson</option>
	              <option>Tube Slide</option>
	              <option>Unknown</option>
	              <option>Other</option>
	            </select>
	          </div>
              
              <div class="row"></div>


	       
	          <div class = "col-xs-12 col-md-6 col-sm-4">
	            <h5>Weather</h5>
	            <select class="form-control">
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

	          <div class = "Light"></div>
	            <div class = "col-xs-12 col-md-6 col-sm-4">
	              <h5>Light</h5>
	              <select class="form-control">
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
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	              <h5>Temp in Celcius</h5>
	                <select class="form-control">
	                  <option>Above 10</option>
	                  <option>0 to 10</option>
	                  <option>-10 to 0</option>
	                  <option>-20 to -11 </option>
	                  <option>Below 20</option>
	                  <option>Uknown</option>
	                  <option>N/A</option>
	                </select>
	              </div>

        <div class = "Run Type"></div>
        <div class = "col-xs-12 col-md-6 col-sm-4">
        <h5>Run Type</h5>
        <select class="form-control">
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
        <h1 class = "row col-sm-12">Accident Information</h1>
        
	            <div class = "Transportation From Base"></div>
	            <div class = "col-xs-12 col-md-6 col-sm-4">
	              	<h5>Incident Time</h5>
	              	<input type = "date" name = "IncidentTime" id = "datepicker">
	              	<h5>On Scene Time</h5>
	              	<input type = "date" name = "OnSceneTime" id = "datepicker2">
	              	<h5>Transport Time</h5>
	              	<input type = "date" name = "TransportTime" id = "datepicker3">
	              </div>

	              <div class = "col-xs-12 col-md-6 col-sm-4">
	                <h5>Transport From Base</h5>
	                  <select class="form-control">
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
	              <div class = "col-xs-12 col-md-6 col-sm-4">  
	                <h5>Transport Destination</h5>
	                  <select class="form-control">
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

	            <!-- If it was a collision-->
	            <div class = "Collision"></div>
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	                <h5>Non-collision</h5>
	                  <select class="form-control">
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
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	                <h5>Lift Related</h5>
	                  <select class="form-control">
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
	              <div class = "col-xs-12 col-md-6 col-sm-4">
	                <h5>Non-skiing related</h5>
	                  <select class="form-control">
	                    <option>Slip & fall</option>
	                    <option>Cold/weather related</option>
	                    <option>Not otherwise classified</option>
	                    <option>Other</option>
	                  </select>
	            </div>

		        <div class = "Transport to first aid"></div>
		       	 <div class = "col-xs-12 col-md-6 col-sm-4">
		            <h5>Transport to First Aid</h5>
		            <select class="form-control">
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
		        
		        <div class="row"></div>	
      			  <div class = "Patroller Information"></div>
		              <div class = "col-xs-12 col-md-6 col-sm-4">
		                <h5>Patroller Information</h5>
		                	<p>Patroller's Name</p>
		                	<input type = "text" name = "patrollersName1">
		                	<p>Patroller's Number</p>
		                	<input type = "number" name = "patrollersNum1">
		                	<p>Patroller's Name</p>
		                	<input type = "text" name = "patrollersName2">
		                	<p>Patroller's Number</p>
		                	<input type = "number" name = "patrollersNum2">
		                	<p>Patroller's Name</p>
		                	<input type = "text" name = "patrollersName3">
		                	<p>Patroller's Number</p>
		                	<input type = "number" name = "patrollersNum3">      
		 		</div>

       <div class = "Signature"></div>
		              <div class = "col-xs-12 col-md-6 col-sm-4">
		                <h5>Signautre</h5>
		                  <p>Form completed by</p>
		                	<input type = "text" name = "formCompleter">
		                  <p>Witness</p>
		                	<input type = "text" name = "witness">
		                  <p>Date</p>
		                  	<input type = "date" name = "fillInDate" id="datepicker4">
		           	 </div>
				

        <h1>&nbsp;</h1>
        <div class="form-group col-xs-12" style="margin-top:10px;">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4 center-block">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary center-block">
                    Submit
                </button>
            </div>
        </div>
        <h1>&nbsp;</h1>


<?php
   }else{
   	redirect("signin.php");
   }
   require_once("footer.tpl.php");
   require_once("includes/clean.php");
?>