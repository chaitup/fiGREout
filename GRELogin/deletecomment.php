<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {
  
 
  		  $user_id = (int)$_SESSION['user_id'];
          $data = $_POST['data'];
		       
	      $data= json_decode($data,true);
		  	
		  $commentid = (int)$data['commentid'];
		  



     
 
	function DeleteComment($mysqli, $user_id , $commentid)
{		  		

						

  if ($stmt = $mysqli->prepare("DELETE FROM  comments WHERE id = ? and comment_id = ?"))
           {
		
			 $stmt->bind_param('ii', $user_id , $commentid); 
             $stmt->execute();

		       if($stmt->affected_rows == 1)
			   {
			  
			$array = array ('token' => 'success'); 
			  echo json_encode($array);
			    return true;

			   
			   }
            }
		  
		  
	}	  

      if(DeleteComment($mysqli, $user_id , $commentid ) == true)
	  {
	  
	
			


			  

			
	  
	                    
	     }



  }
  
  else{
  
echo "Something wRONG";

	 }
  ?>