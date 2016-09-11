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

          $Category =             clean( $data['Category'],$mysqli);
		  $UserAnswerPattern =    clean($data['UserAnswerPattern'],$mysqli);
		  $CorrectAnswerPattern = clean($data['CorrectAnswerPattern'],$mysqli);
          $questionnumber =       clean($data['AnsweredQuestionNumber'],$mysqli); 
		  $ismatched =            clean($data['IsCorrectlyAnswered'],$mysqli);  
     	  $NextQuestion =         clean((int)($data['AnsweredQuestionNumber']) + 1,$mysqli);
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
		  
		  

		   
   if ($stmt2 = $mysqli->query("SELECT  answereddata.ImagePath  WHERE Category = '$type' AND QuestionNumber = $num AND answereddaat.id = $id AND  answereddata.ImagePath != 'null' LIMIT 1")){
      
        $i=0;
	  while ($row = $stmt2->fetch_row()){
	  
	  
	  
	  
	  
	  }
		   
		   
		   
		   
		   }
	

	     
      
 
  
  
else{
echo "Unauthorized to view this page";
	 }
  ?>