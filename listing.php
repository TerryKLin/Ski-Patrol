<?php 
   require_once("template/header.tpl.php");
   require_once("includes/helper.php");
   require_once("includes/dbmanager.php");
   session_name("SKI_PATROL");
   session_start();
   if(isset($_POST['csp_no'])){
   	if($_POST['csp_no'] != 1){
   	
   		delete_from_table($_POST['csp_no'] );
   	}
   }
   if($_SESSION['u_data']['u_level'] =='5' ){
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
			<tr><th>CSPNumber</th><th>Name</th><th>Email</th><th>Action</th></tr>
			</thead>
			<tbody>
			<?php

				while($row=mysqli_fetch_assoc($user_data)){
		          		echo "<tr style='border-bottom : 1px solid $ececec;'>";
		          		echo "<td>".$row['csp_no']."</td>";
		          		echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['email']."</td>";
		          		echo "<td><form action='listing.php' method='post'><input name='csp_no' type='hidden' value='{$row['csp_no']}'><button type='submit' class='btn btn-link'>Delete</button></form></td>";
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