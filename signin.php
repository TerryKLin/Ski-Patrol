<?
   require_once("template/header.tpl.php");
   require_once("includes/dbmanager.php");
   require_once("includes/helper.php");
   require_once("includes/alert.php");
   
     if(isset($_POST['submit_login'])){
      if(isset($_POST['CSPNumber'])&&isset($_POST['password'])&& isset($_POST['Name'])){

        $userinfo = validate_user_info($_POST['CSPNumber']);
        
        if(!empty($userinfo)){
          if($userinfo['password'] == sha1($_POST['password'])){
            $_SESSION['u_data']['u_name'] = $userinfo['name'];
            $_SESSION['u_data']['u_CSPNumber'] = $userinfo['csp_no'];
            $_SESSION['u_data']['u_password'] = $userinfo['password'];
            $_SESSION['u_data']['u_level']= $userinfo['level'];
            set_alerts("success","Successfully login.");
            redirect("index.php");
            echo "hi";
          }else{
            set_alerts("danger","wrong password");
          }
        }else{
          set_alerts("danger","User do not exist");
        }
      }

     }
     


    echo display_alert();

    
    if(empty($_SESSION['u_data']['u_level'])){

?>

      <div class="col-md-12" id="login">
        <div class="panel panel-default" style="clear: both;">
          <div class="panel-heading">
            <h2 class="panel-title">Login</h2>
          </div>
          <div class="panel-body">  

            <form action="signin.php" method="post" class="form-horizontal">
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
              <label for="password" class="col-sm-4 control-label">Password:</label>
              <div class="col-sm-8">
                <input type="password" name="password" id="password" autocomplete="off">
              </div>
            </div>
            <div class="form-group">  
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="submit_login" value="Login" class="btn btn-default">
                <a href="register.php" class="btn btn-link">(Do not have an account?)</a>
              </div>
              
            </div>
            
            </form>


          </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
      </div> <!-- /#login -->

      



<?php
    }else{
      redirect("index.php");
    }
   require_once("template/footer.tpl.php");
   require_once("includes/clean.php");

?>