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

          $Category = clean($data['Category'],$mysqli);
		  $answer =   clean($data['answerlink'],$mysqli);

  
 switch($Category) {
    case "MultipleChoiceMoreAnswers":
        break;
    case "MultipleChoiceOneAnswer":
        break;
    case "QuantitativeComparision":
        break;
	case  "NumericEntry":
		break;
    default:
       exit('Sorry Something Wrong');
}
		  
		  
                mysqli_autocommit($mysqli, FALSE);				
						
  if ($stmt = $mysqli->prepare("INSERT INTO  reportspamdanswerata (prid , imagepath , category)
               VALUES (? ,?, ?)"))
           {
		     $stmt->bind_param('iss', $prid ,$imagepath,$category); 
             $stmt->execute();



			     $UpdateNumberofCategory =         $Category.'_CurrentQuestion';
		         $UpdateNumberCorrectofCategory =  $Category.'_CorrectAnswers';
			 
			 
			 if($ismatched == "true"){
		   
            $mysqli->query("UPDATE statistics
                        SET $UpdateNumberofCategory = $NextQuestion,
						    $UpdateNumberCorrectofCategory =  $UpdateNumberCorrectofCategory + 1
                         WHERE ref_consistency_id = $uid
						 ");  

	                }
					
	       else if ($ismatched == "false"){
		   
		       $mysqli->query("UPDATE statistics
                         SET   $UpdateNumberofCategory = $NextQuestion
                         WHERE ref_consistency_id = $uid
						 ");  
	                }
		   
		   }			   
												
							
              if(mysqli_commit($mysqli)){
			  
			  		                      echo "Answered Data Uploaded";
										  
										  
			                            }
        
		   
		   
		   
		   
		   
		   }
	

	     
      
 
  
  
else{
echo "Unauthorized to view this page";
	 }
  ?>
  