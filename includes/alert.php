<?php

   session_name("SKI_PATROL");
   session_start();
   function display_alert(){
  	 $alert_types = array('danger','info','success','warning');
    if(empty($_SESSION['alerts'])){
        $_SESSION['alerts'] = array();
    }
    $alerts = $_SESSION['alerts'];

    $output = '';
    foreach($alert_types as $type){
        if(array_key_exists($type,$alerts)){

          for($index = 0;$index < count($alerts[$type]);$index++ ){
            $output .= '<div class="alert alert-'.$type.' alert-dismissible" role="alert">';
            $output .= '<button type="button" class="close" data-dismiss="alert" aria-label="alert">';
            $output .= '<span aria-hidden="true">&times;</span></button>';
            $output .= '<strong>'.$alerts[$type][$index].'</strong></div>';
          }
        }
    }

    return $output;
  }

  function clear_alerts(){
  	$_SESSION['alerts' ] = array();
  }
  
  function set_alerts($type, $info){
  	$_SESSION['alerts'][$type][] = $info;
   }
   function check_alerts($type){
   	return array_key_exists($type, $_SESSION['alerts']);
   }
?>