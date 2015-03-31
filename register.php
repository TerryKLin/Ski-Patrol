<?
   require_once("template/header.tpl.php");
   require_once("includes/dbmanager.php");
   require_once("includes/helper.php");
   require_once("includes/alert.php");
   // session_name("SKI_PATROL");
   // session_start();
    
     if(isset($_POST['submit_register'])){
       
          if(isset($_POST['CSPNumber'])&& isset($_POST['password']) && isset($_POST['email'])&&strlen($_POST['email']) > 0&& strlen($_POST['password']) > 0 &&isset($_POST['Name'])){
                if($_POST['password'] == $_POST['re_password']){
                      $player_info = validate_user_info($_POST['CSPNumber']);
                      if(isset($player_info)!=0){
                        set_alerts('danger', 'This user already exists. Please try another username.');
                      }else{
                         
                        create_newuser_account($_POST['Name'],$_POST['CSPNumber'],sha1($_POST['password']),$_POST['email'],5);
                        set_alerts('success', 'User created. Please proceed to login.');
                        redirect("signin.php");
                        }
                    }else{
                      set_alerts('warning',"Two password do not match!");
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
              <label for="Name" class="col-sm-4 control-label">Name</label> 
              <div class="col-sm-8">
                <input type="text" name="Name" id="Name" autofocus autocomplete="off">
              </div>
            </div>
            <div class="form-group">        
              <label for="CSPNumber" class="col-sm-4 control-label">CSP Number:</label> 
              <div class="col-sm-8">
                <input type="text" name="CSPNumber" id="CSPNumber" autofocus autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-4 control-label">Email:</label>
              <div class="col-sm-8">
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
              </div>
            </div>
            <div class="form-group">  
              <label for="password" class="col-sm-4 control-label">Password:</label>
              <div class="col-sm-8">
                <input type="password" name="password" id="password" autocomplete="off">
              </div>
            </div>
            <div class="form-group">  
              <label for="re_password" class="col-sm-4 control-label">Re-enter Password:</label>
              <div class="col-sm-8">
                <input type="password" name="re_password" id="re_password" autocomplete="off">
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