<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';

sec_session_start();


if(login_check($mysqli) == true) {
  
  	      $uid = $_SESSION['user_id'];
          $data = $_POST['data'];
	      $data= json_decode($data,true);
		 
          
		  $category = $data['Type'];
		  $questionnumber = $data['QuestionNumber'];
		  $Imagelink= $data['Imagelink'];


		 
   if($insert = $mysqli->query("INSERT INTO members (id ,imagelink ,category ,questionnumber)
   SELECT $uid, '$Imagelink','$category',$questionnumber FROM dual 
   WHERE not exists (SELECT * FROM likes WHERE  imagelink = '$Imagelink' AND id = '$uid') ")){
				 
				 
		         	echo $mysqli_insert_id();
	
				 

				 
				 }
		 
       else   {
	   
	   echo   "EPIC FAIL" ;
	   
	   }  

					
		
  
  }
  
  else{
	 header("location:index.php"); 
	 }
  ?>