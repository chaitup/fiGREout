<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {

    	  $uid = $_SESSION['user_id'];
          $data = $_POST['data'];
	      $data= json_decode($data,true);
          $mainCategory = $data['mainCategory'];
		  $subCategory = $data['subCategory'];

	//CREATE TABLE products_bak LIKE products	  
	
   if ($stmt2 = $mysqli->query("SELECT lessonId FROM gremathlessons WHERE mainCategory = '$mainCategory' AND subCategory = '$subCategory' ORDER BY ord")){
         	$iterative = 1;	
			
	  while ($row = $stmt2->fetch_row())

	  {

	    echo "<a href='".$row[0]."' rel='lightbox[plants]'><div class='lessonCover'   >
              <p>".$iterative."</p>
		      </div></a>";

	      $iterative = $iterative + 1;
	   }


}


  ?>
   
   
   
   
   
   
 
 <?php

 
}
 else {
     header("Location:http://localhost/GRElogin/securelogout.php");
}

?>