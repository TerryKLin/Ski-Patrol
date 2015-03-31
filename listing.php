<?php 
   require_once("template/header.tpl.php");
   require_once("includes/helper.php");
   require_once("includes/dbmanager.php");
   session_name("SKI_PATROL");
   session_start();
   if(isset($_POST['u_id'])){
   	if($_POST['u_id'] != 1){
   	
   		delete_from_table($_POST['u_id'] );
   	}
   }
   if($_SESSION['u_data']['u_level'] ==1 ){
    $user_data = all_user_info();
?>


    <div class="panel panel-default" style="clear: both;">
          <div class="panel-heading">
            <h2 class="panel-title">User Managerment</h2>
          </div>
          <div class="panel-body">  
            <form action="listing.php" method="post">
			<table class="table table-hover table-bordered">
			<thead>
			<tr><th>Username</th><th>Password</th><th>Operation</th></tr>
			</thead>
			<tbody>
			<?php

				while($row=mysqli_fetch_assoc($user_data)){
		          		echo "<tr style='border-bottom : 1px solid $ececec;'>";
		          		echo "<td>".$row['username']."</td>";
		          		echo "<td>".$row['password']."</td>";
		          		echo "<td><form action='listing.php' method='post'><input name='u_id' type='hidden' value='{$row['u_id']}'><button type='submit' class='btn btn-link'>Delete</button></form></td>";
		          		echo "</tr>";
		          	}
				
			?>
			</tbody>
			</table>
			</form>
		  </div> <!--! /.panel-body -->
	  </div> <!--! /.panel -->


<?php
   }else{
   	redirect("index.php");
   }
   require_once("template/footer.tpl.php");
?>