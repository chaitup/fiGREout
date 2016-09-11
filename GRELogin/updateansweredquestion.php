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
		  $maintag =    clean($data['maintag'],$mysqli); 
		  $directory =            'assets/'.$Category;
		  $imagename =            sha1($Category).microtime(true).'.svg';

		  
		  
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
		  
		  

		  
		  
	//function Upload Image..!	#E5971B #D2A099

	     if($data['Imagedata'] != 'null'){
		 
		 	$imagepath = $directory.'/'.$imagename;
		 
            $fp = fopen($directory.'/'.$imagename, 'a+') or die('could not open/create file');
			
			if($fp == false){
			
						   exit('Image Not Uploaded, could not open the directory/file');
			
			        }
			
			
			
            $Written = fwrite($fp , $data['Imagedata']);
			
			if(!$Written)
			{
			   exit('Image Not Uploaded');
		 
		    }
	        fclose($fp);	
			
			}
			
			else  {
			
				$imagepath  = 'null';
				

			
			    }



			
										
						
//function UpdateAnsweredData//Answered Data
					

                mysqli_autocommit($mysqli, FALSE);				
						
  if ($stmt = $mysqli->prepare("INSERT INTO  answereddata (id , ImagePath ,UserAnswerpattern, CorrectAnswerpattern, IsMatched , Category , QuestionNumber , maintag)
               VALUES (? ,?, ?, ?, ? , ? ,? , ?)"))
           {
		     $stmt->bind_param('isssssis', $uid ,$imagepath,$UserAnswerPattern,$CorrectAnswerPattern,$ismatched, $Category, $questionnumber , $maintag); 
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
  