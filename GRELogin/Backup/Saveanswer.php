<?php	
header('Content-type: application/json');
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

		  

		  
          $tag =                   $data['tag'];
		  $directory =            'AnswersasImages/';
		  $imagename =             sha1($tag).microtime(true).'.svg';
          $mainCategory =  $data['lessonCategory'];
          $subCategory =  $data['subCategory'];
          $Null = 'null';
		  
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

                mysqli_autocommit($mysqli, FALSE);				
						
  if ($stmt = $mysqli->query("UPDATE solvedquestions SET AnswerImage = '$imagepath' WHERE AnswerImage = 'null'"))
       
	         {

	               if(mysqli_commit($mysqli))
					 {
					$arra = array ('Status' => 'Done'); 
			        echo json_encode($arra);
					 }	
      
             }
  }
  
else{
echo "Unauthorized to view this page";
	 }
  ?>