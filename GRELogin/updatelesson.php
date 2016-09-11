<?php	
//Solved questions info is updated into the userxml sheet
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {
    

  		  $uid = $_SESSION['user_id'];
          $data = $_POST['data'];
	      $data= json_decode($data,true);
          $mainCategory = $data['lessonCategory'];
		  $subCategory = $data['subCategory'];
		  $directory = 'lessons/'.$mainCategory;
		  $lessonname = sha1($mainCategory).microtime(true).'.svg';
	      $order = (int)2;

	//function Upload Image..!	

	     if($data['imageData'] != 'null'){
		 
		 	$lessonpath = $directory.'/'. $lessonname;
		 
            $fp=fopen($directory.'/'.$lessonname, 'a+') or die('could not open/create file');
			
            $Written = fwrite($fp , $data['imageData']);
			
			if($Written == false)
			{
			   exit('Image Not Uploaded');
		 
		    }
	        fclose($fp);	
			
			}
			
			else  {
			
			            exit();
			
			    }

	
	

						
  if ($stmt = $mysqli->prepare("INSERT INTO gremathlessons (id , ord , lessonid , maincategory , subcategory )
               VALUES (? ,?, ? ,? ,?)"))
           {
		   		
	        	
		     $stmt->bind_param('iisss', $uid , $order , $lessonpath, $mainCategory , $subCategory); 
             $stmt->execute();
		     echo "fine";
			 
			 

		   }			   
												
									
		   
		   }
	

	     
    
  
else{
echo "Unauthorized to view this page";
	 }
  ?>