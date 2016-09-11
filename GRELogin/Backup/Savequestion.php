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
		  $directory =            'QuestionsasImages/';
		  $imagename =             sha1($tag).microtime(true).'.svg';
          $mainCategory =  $data['lessonCategory'];
          $subCategory =  $data['subCategory'];

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
						
  if ($stmt = $mysqli->prepare("INSERT INTO  solvedquestions (QuestionImage, mainCategory, subCategory, Tag)
               VALUES (? ,?, ? ,?)"))
           {
		     $stmt->bind_param('ssss',$imagepath,$mainCategory,$subCategory, $tag ); 
             $stmt->execute();
		   }
	

	                 if(mysqli_commit($mysqli)){
						
			$arra = array ('Status' => 'Pending'); 
			  echo json_encode($arra);
					 }	
      
 
  }
  
else{
echo "Unauthorized to view this page";
	 }
  ?>