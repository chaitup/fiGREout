<?php
header('Content-type: application/json');
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {
  
 
  		      $user_id = (int)$_SESSION['user_id'];
              $data = $_POST['data'];
		       
	          $data= json_decode($data,true);
		  	
		 	  $imagelink =     $data['Imagelink'];
		      $type =          $data['Type'];
		      $num =           $data['QuestionNumber'];
		      $setdata =   "null";



     
 
	function DeleteComment($mysqli, $setdata, $user_id , $imagelink)
{		  		

						 

  if ($stmt = $mysqli->prepare("UPDATE answereddata  SET  ImagePath  = ? WHERE id = ? and ImagePath = ?"))
           {
		
			 $stmt->bind_param('sis',$setdata , $user_id , $imagelink); 
             $stmt->execute();

		       if($stmt->affected_rows == 1)
			   {
			  
		
			        return true;

			   
			   }
            }
		  
		  
	}	  

      if(DeleteComment($mysqli, $setdata, $user_id , $imagelink ) == true)
	  {
	  
	
			
	        $array = array ('token' => 'success'); 
			  echo json_encode($array);

			  

			
	  
	                    
	     }



  }
  
  else

    {
  



	 }
  ?>