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
	      $data=      json_decode($data,true);
		  $Imagelink= clean($data['Imagelink'],$mysqli);
		  $comment =  clean($data['UserComment'],$mysqli);
		  $type =     clean($data['Type'],$mysqli);
          $comment = nl2br($comment);
		  $questionnumber = (int)$data['QuestionNumber'];
		//echo "hi";
        


	function UpdateComment($mysqli, $user_id , $Imagelink ,   $comment,    $type ,  $questionnumber)
{		  		

						
				
  if ($stmt = $mysqli->prepare("INSERT INTO  comments (id ,imagelink, comment,category,questionnumber)
               VALUES (? ,?, ?,?,? )"))
           {
		    

			 $stmt->bind_param('isssi', $user_id , $Imagelink , $comment, $type, $questionnumber); 
             $stmt->execute();
			// $insertid = mysqli_insert_id($mysqli);
		     if($stmt->affected_rows == 1)
			   {
			  
	   
			    return true;
			   
			   }
            }
		  
		  
	}	  

      if(UpdateComment($mysqli, $user_id , $Imagelink , $comment , $type,  $questionnumber) == true){
	  
	          if(mysqli_insert_id($mysqli)){
			    $arra = array ('cid' => mysqli_insert_id($mysqli) ,'isSuccessful'=>'true','comment' => $comment); 
			    mysqli_close($mysqli);
			                              
			    echo json_encode($arra);				  
										  
										  }
			   
			  else{
			
			$arra = array ('cid' => 'error' ,'isSuccessful'=>'false'); 
			  echo json_encode($arra);
			  
			  } 
	   
		
	  
	                                }
   
   

   
	 
	 }



  
  
  else{
  
echo "Oops ! Something wrong The session might have expired Login again..1";

	 }
  ?>