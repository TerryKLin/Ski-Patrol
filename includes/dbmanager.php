<?php
    require_once("config.php");
    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


    // retrive all the user's information 
    function validate_user_info($CSPNumber){
    	global $link;
    	$query = "SELECT * FROM patroller WHERE csp_no='".$CSPNumber."'";
    	$query = mysqli_query($link,$query);
    	$result = mysqli_fetch_assoc($query);
        return $result;
    }   


    function create_newuser_account($name,$CSPNumber, $password,$level){
    	global $link;
    	$query = "INSERT INTO patroller (csp_no,level,password,name ) VALUES (";
	    $query .= "'".$CSPNumber."',";
	    $query .= "'".$level."',";
        $query .= "'".$password."',";
        $query .= "'".$name."')";
	    //$query .= "'".$email."')";
	    $result = mysqli_query($link, $query);
	    echo $result;
	 }

	 function all_user_info(){
	 	global $link;
    	$query = "SELECT * FROM patroller ";
    	$query = mysqli_query($link,$query);
        return $query;
	 }

     function delete_from_table($CSPNumber){
       global $link;
       $query="DELETE FROM patroller where csp_no='".$CSPNumber."'";
       $query = mysqli_query($link, $query);
     }

     function accident_form_insertion($accidentNumber){
        $query = "INSERT INTO accident (accident_no) VALUES (";
        $query .= "'".mysqli_real_escape_string($link, $accidentNumber)."'";
        $query .= ")";
        $result = mysqli_query($link, $query);
     }
     function insertion($accidentNumber, $patrollersNum1,$incidentDate, $onSceneTime, $transportTime, $incidentTime, $accidentLocation, $skierInfo, $gender, $accidentLocation, $runClassification, $activity, $involvement, $weather, $lighting, $temp, $snow, $surface, $equipment, $bindingRelease, $transportToFirstAid, $collision, $collisionInfo, $nonCollision, $liftRelated, $nonSkiingRelated, $transportFromBase, $transportDestination, $formCompletedBy, $incidentType, $injuredArea,$injuredSide,$other_Injured_Area, $fillInDate){
        global $link;
        $query = "INSERT INTO report SET ";
        $query .= "accident_no = '".mysqli_real_escape_string($link,$accidentNumber)."',";
        $query .= "csp_no = '".mysqli_real_escape_string($link, $patrollersNum1)."',";
        $query .= "accident_date = '".mysqli_real_escape_string($link, $incidentDate)."',";
        $query .= "scene_time = '".mysqli_real_escape_string($link, $onSceneTime)."',";
        $query .= "transport_time = '".mysqli_real_escape_string($link, $transportTime)."',";
        $query .= "accident_time = '".mysqli_real_escape_string($link, $incidentTime)."',";
        $query .= "resort = '".mysqli_real_escape_string($link, $accidentLocation)."',";
        $query .= "age = '".mysqli_real_escape_string($link, $skierInfo)."',";
        $query .= "gender = '".mysqli_real_escape_string($link, $gender)."',";
        $query .= "location = '".mysqli_real_escape_string($link, $accidentLocation)."',";
        $query .= "run_classification = '".mysqli_real_escape_string($link, $runClassification)."',";
        $query .= "activity = '".mysqli_real_escape_string($link, $activity)."',";
        $query .= "involvement = '".mysqli_real_escape_string($link, $involvement)."',";
        $query .= "weather = '".mysqli_real_escape_string($link, $weather)."',";
        $query .= "light = '".mysqli_real_escape_string($link, $lighting)."',";
        $query .= "temperature = '".mysqli_real_escape_string($link, $temp)."',";
        $query .= "snow = '".mysqli_real_escape_string($link, $snow)."',";
        $query .= "surface = '".mysqli_real_escape_string($link, $surface)."',";
        $query .= "equipment = '".mysqli_real_escape_string($link, $equipment)."',";
        $query .= "binding_release = '".mysqli_real_escape_string($link, $bindingRelease)."',";
        $query .= "first_aid = '".mysqli_real_escape_string($link, $transportToFirstAid)."',";
        $query .= "collision = '".mysqli_real_escape_string($link, $collision)."',";
        $query .= "collision_info = '".mysqli_real_escape_string($link, $collisionInfo)."',";
        $query .= "non_collision = '".mysqli_real_escape_string($link, $nonCollision)."',";
        $query .= "lift_related = '".mysqli_real_escape_string($link, $liftRelated)."',";
        $query .= "non_skiing_related = '".mysqli_real_escape_string($link, $nonSkiingRelated)."',";
        $query .= "from_base = '".mysqli_real_escape_string($link, $transportFromBase)."',";
        $query .= "destination = '".mysqli_real_escape_string($link, $transportDestination)."',";
        $query .= "completed_by = '".mysqli_real_escape_string($link, $formCompletedBy)."',";
        $query .= "type = '".mysqli_real_escape_string($link, $incidentType)."',";
        $query .= "injured_area = '".mysqli_real_escape_string($link, $injuredArea)."',";
        $query .= "injury_side = '".mysqli_real_escape_string($link, $injuredSide)."',";
        $query .= "other_injured_areas = '".mysqli_real_escape_string($link, $other_Injured_Area)."',";
        $query .= "signature_date = '".mysqli_real_escape_string($link, $fillInDate)."'";
        $result = mysqli_query($link, $query);

     }
?>