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

          $QuestionNumber =   $data['QuestionNumber'];
          $type           =   $data['Type'];
		  $Imagelink      =   $data['Imagelink'];
		  
		   $people; 
		//Connect to likes table check whether a row exists with given id , Qno , type and imagelink  .....if exists return already liked so inform user that he has already like if doenot exist update likes table and save numlikes = numlike + 1 ;
		   

 if ($stmt2 = $mysqli->query("SELECT peopleliked FROM  answereddata WHERE Category = '$type' AND QuestionNumber = $QuestionNumber  AND ImagePath = '$Imagelink' "))
 {
 
            
		        $row = $stmt2->fetch_row();
			  
			    $people = unserialize($row[0]);
			  
			
	            if (in_array($uid , $people)) 
			   
			       {
	
                   echo json_encode(array($people  , "yes"));    
				   
				  		  
                    }
	
			  
			  else {
			  
                   
                $updatedpeopleliked =   array_push($people , $uid);
				    
					$numlikes = count($people);
					
		            $people  = serialize($people);
	
	 if ($stmt = $mysqli->prepare("UPDATE answereddata  SET  peopleliked  = ? AND numlikes =  ? WHERE ImagePath = ? and  QuestionNumber = ? AND Category = ? LIMIT 1 "))
           {
		
			 $stmt->bind_param('sisis', $people ,$numlikes ,$imagelink , $QuestionNumber , $type ); 
             $stmt->execute();

		      
			  
		
			         echo json_encode(array($people  ,(string)$people));

			   
			   
            }
	
	
	



				 
			   
                   }
 }


/*  */
					
		

			
	/* 	 if ($stmt = $mysqli->prepare("UPDATE answereddata SET numlikes  = numlikes + 1   WHERE ImagePath = ?"))
                {
		    

			 $stmt->bind_param('s' , $Imagelink); 
             $stmt->execute();
			
			 echo "success";
	
				 }
		 
       else   {
	   

	   
	          }  
 */
  
  }
  
  
  else{
	 header("location:index.php"); 
	 }
  ?>