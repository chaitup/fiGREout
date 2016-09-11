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
    

          $Category =             clean($data['Category'],$mysqli);
          $questionnumber =       clean($data['AnsweredQuestionNumber'],$mysqli); 
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
			
		
			
	


  if ($stmt = $mysqli->prepare("UPDATE answereddata  SET ImagePath = ?
               WHERE id = ?  AND Category = ? AND QuestionNumber = ?" ))
           {
		   
		   
		        $stmt->bind_param('sisi', $imagepath, $uid ,$Category, $questionnumber); 
                $stmt->execute();
			    echo "succes";
		          
		   }			   
												
							
      
			               
		   
		   
		   
		   
		   
		   }

  
else

{


echo "Unauthorized to view this page";


}
  ?>
  