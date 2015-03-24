<?
   require_once("template/header.tpl.php");
   require_once("includes/dbmanager.php");
   require_once("includes/helper.php");
   require_once("includes/alert.php");
   session_name("SKI_PATROL");
   session_start();
    
     if(isset($_POST['submit_register'])){
     
      if(isset($_POST['username'])&& isset($_POST['password'])&&strlen($_POST['username']) > 0&& strlen($_POST['password']) > 0){
        $player_info = validate_user_info($_POST['username']);

        if(isset($player_info)!=0){
          set_alerts('danger', 'This user already exists. Please try another username.');
        }else{
          $_SESSION['u_data']['u_username'] = $_POST['username'];
          $_SESSION['u_data']['u_password'] = sha1($_POST['password']);
          $_SESSION['u_data']['u_level'] = 5;
          create_newuser_account($_SESSION['u_data']['u_username'],$_SESSION['u_data']['u_password'],$_SESSION['u_data']['u_level']);
          set_alerts('success', 'User created. Please proceed to login.');
          redirect("index.php");
          }
          

      }else{
        set_alerts("warning","You need to input the username, password in a correct way");
      }
      }


    echo display_alert();

    
    if(empty($_SESSION['u_data']['u_level'])){

?>

      


         

      <div class="col-md-12" id="register">
        <div class="panel panel-default" style="clear: both;">
          <div class="panel-heading">
            <h2 class="panel-title">Register</h2>
          </div>
          <div class="panel-body">  

            <form action="register.php" method="post" class="form-horizontal">

            <div class="form-group">        
              <label for="username" class="col-sm-4 control-label">Username:</label> 
              <div class="col-sm-8">
                <input type="text" name="username" id="username" autocomplete="off">
              </div>
            </div>
            <div class="form-group">  
              <label for="password" class="col-sm-4 control-label">Password:</label>
              <div class="col-sm-8">
                <input type="password" name="password" id="password" autocomplete="off">
              </div>
            </div>
            <div class="form-group">  
              <div class="col-sm-offset-4 col-sm-8">
                <input type="submit" name="submit_register" value="Register" class="btn btn-default">
              </div>
            </div>
            
            </form>


          </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
      </div> <!-- /#register -->



<?php
    }else{
      redirect("index.php");
    }
   require_once("template/footer.tpl.php");
   require_once("includes/clean.php");

?>