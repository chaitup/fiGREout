<?php
header('Content-type: application/json');
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();

if(login_check($mysqli) == true) {
  
  	      $uid = $_SESSION['user_id'];
		
          $data = $_POST['data'];
	      $data= json_decode($data,true);
	
	

      if(isset($data['examdate'])){
	  
	  
	        $examdate = $data['examdate'];
   
        	if ($stmt2 = $mysqli->query("UPDATE members  SET examdate = '$examdate' WHERE id = $uid "))
                 
				 {
		   
		             
			 	 $arra = array ('status' => "successdate" ); 
			            echo json_encode($arra);
			             
			              exit();
			 
			     }
   
   
   
              }
	

	
	 if(isset($data['p']) && isset($data['u'])  ){
	
	      $enteredpass = $data['p'];
		  $enteredname = mysql_escape_string($data['u']);
	
	if ($stmt = $mysqli->prepare("SELECT salt,password FROM members WHERE id = ?"))
           {
		   
		     $stmt->bind_param('i',$uid); 
             $stmt->execute();
			 $stmt->store_result();
			 
			if($stmt->num_rows == 1) {
			
			$stmt->bind_result($sall,$pass);
			$stmt->fetch();
			
			
			$password = hash('sha512',  $enteredpass.$sall);
			
		        if($pass == $password)
				
				   {
				  
		      			  	if ($stmt2 = $mysqli->query("UPDATE members  SET username = '$enteredname' WHERE id = $uid "))
                  {
		   
		             
			 	$arra = array ('status' => "success" ); 
			            echo json_encode($arra);
			             
			 
			 
			     }
				  
			
				}
				else
				
				{
				
						 	$arra = array ('status' => "nomatch"); 
			                      echo json_encode($arra);
				
				
				}
				
				
			
			}
			
			

			 
	
				 }
				 
				 
				 
				 
		 
       else   {
			 	       $arra = array ('status' => "servererror"); 
			                      echo json_encode($arra);
	   
	   }  

					
}
					
  
  
  
  
  
  
  
  
  
  
  	
	 if(isset($data['p']) && isset($data['np'])  ){
	
	      $enteredpass = $data['p'];
		  $newenteredpass = mysql_escape_string($data['np']);
	
	if ($stmt = $mysqli->prepare("SELECT salt,password FROM members WHERE id = ?"))
           {
		   
		     $stmt->bind_param('i',$uid); 
             $stmt->execute();
			 $stmt->store_result();
			 
			if($stmt->num_rows == 1) {
			
			$stmt->bind_result($sall,$pass);
			$stmt->fetch();
			
			
			$password = hash('sha512',  $enteredpass.$sall);
			
		        if($pass == $password)
				
				   {
				  
				 $newpassword = hash('sha512',  $newenteredpass.$sall);
				  
				 
			if ($stmt2 = $mysqli->query("UPDATE members  SET password = '$newpassword ' WHERE id = $uid "))
                  
				  
				  {

		   
		             
			 	$arra = array ('status' => "success" ); 
			            echo json_encode($arra);
			             
			 
			 
			     }
				  
			
				}
				else
				
				{
				
						 	$arra = array ('status' => "nomatch"); 
			                      echo json_encode($arra);
				
				
				}
				
				
			
			}
			
			

			 
	
				 }
				 
				 
				 
				 
		 
       else   {
			 	       $arra = array ('status' => "servererror"); 
			                      echo json_encode($arra);
	   
	   }  

					
}
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  }
  
  else{
	 header("location:index.php"); 
	 }
  ?>