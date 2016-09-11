<?
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
sec_session_start();
if(login_check($mysqli) == true) {

  
  	$user_id =  $_SESSION['user_id'];
	
    $NumberAnsweredQuantitative =  "QuantitativeComparision_CurrentQuestion";
    $NumberCorrectQuantitative =   "QuantitativeComparision_CorrectAnswers";
	
	$NumberAnsweredMultipleOneAnswer =  "MultipleChoiceOneAnswer_CurrentQuestion";
    $NumberCorrectMultipleOneAnswer  =   "MultipleChoiceOneAnswer_CorrectAnswers";

  
    $NumberAnsweredMultipleMoreAnswer  =  "MultipleChoiceMoreAnswers_CurrentQuestion";
    $NumberCorrectMultipleMoreAnswer  =   "MultipleChoiceMoreAnswers_CorrectAnswers";
 
  
    $NumberAnsweredNumericEntry =  "NumericEntry_CurrentQuestion";
    $NumberCorrectNumericEntry =   "NumericEntry_CorrectAnswers";
	
	
  if ($stmt = $mysqli->prepare("SELECT  $NumberAnsweredQuantitative, $NumberCorrectQuantitative , $NumberAnsweredMultipleOneAnswer,   $NumberCorrectMultipleOneAnswer ,$NumberAnsweredMultipleMoreAnswer,$NumberCorrectMultipleMoreAnswer , $NumberAnsweredNumericEntry,   $NumberCorrectNumericEntry FROM statistics WHERE ref_consistency_id = ?")) {
  
        $stmt->bind_param('i', $user_id); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
  
        if($stmt->num_rows == 1) { // If the user exists
           $stmt->bind_result($NumberAnsweredQuantitative,$NumberCorrectQuantitative ,$NumberAnsweredMultipleOneAnswer, $NumberCorrectMultipleOneAnswer,$NumberAnsweredMultipleMoreAnswer,$NumberCorrectMultipleMoreAnswer,$NumberAnsweredNumericEntry, $NumberCorrectNumericEntry); // get variables from result.
           $stmt->fetch();}
  
  }
  


  
  

    $TotalCorrect =    $NumberCorrectQuantitative + $NumberCorrectMultipleOneAnswer  +     $NumberCorrectMultipleMoreAnswer  +                     $NumberCorrectNumericEntry ;
    $TotalWrong =    ( $NumberAnsweredQuantitative+   $NumberAnsweredMultipleOneAnswer +    $NumberAnsweredMultipleMoreAnswer +      $NumberAnsweredNumericEntry ) -   $TotalCorrect - 4;
	
	
	
	
	
   echo "<p style='border-bottom:1px solid #eee;font-size:15px;padding-bottom:10px;font-family:verdana'>Total Correct :".$TotalCorrect."</p>
         <p style='font-size:15px;margin-top:10px;font-family:verdana'>Total Wrong &nbsp;:". $TotalWrong."</p>" ;
 
 
 
 
}
 
 ?>