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
          // exit($data);

          $Category =             clean($data['Category'],$mysqli);
		  $UserAnswerPattern =    clean($data['UserAnswerPattern'],$mysqli);
		  $CorrectAnswerPattern = clean($data['CorrectAnswerPattern'],$mysqli);
          $questionnumber =       clean($data['AnsweredQuestionNumber'],$mysqli); 
		  $ismatched =            clean($data['IsCorrectlyAnswered'],$mysqli);  
     	  $NextQuestion =         clean((int)($data['AnsweredQuestionNumber']) + 1,$mysqli);
	

					

                mysqli_autocommit($mysqli, FALSE);				
						
  if ($stmt = $mysqli->prepare("INSERT INTO  answereddata (id , ImagePath ,UserAnswerpattern, CorrectAnswerpattern, IsMatched , Category , QuestionNumber , maintag)
               VALUES (? ,?, ?, ?, ? , ? ,? , ?)"))
           {
		     $stmt->bind_param('isssssis', $uid ,$imagepath,$UserAnswerPattern,$CorrectAnswerPattern,$ismatched, $Category, $questionnumber , $maintag); 
             $stmt->execute();


			 									
							
              if(mysqli_commit($mysqli)){
			  
			  		                      echo "Answered Data Uploaded";
										  
										  
			                            }
        
		   
		   
		   
		   
		   
		   }
	

	     
      
 
  
  
else{
echo "Unauthorized to view this page";
	 }
  ?>
  