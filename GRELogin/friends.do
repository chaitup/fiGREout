

<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<style>
</style>
 <link rel="stylesheet" type="text/css" href="loadimages.css" media="screen" />

 

   <div id="mainnav"> 
  <h1 style='margin-top:30px;margin-left:40px;font-size:40px;display:inline-block;font-family:"sieoge UI";font-weight:normal;color:white;'>Aim GRE<sup>&reg;</sup></h1>
	      <a style="margin-right:100px;"href="SecureLogout.php"> <div>  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M19.671,8.11l-2.777,2.777l-3.837-0.861c0.362-0.505,0.916-1.683,0.464-2.135c-0.518-0.517-1.979,0.278-2.305,0.604l-0.913,0.913L7.614,8.804l-2.021,2.021l2.232,1.061l-0.082,0.082l1.701,1.701l0.688-0.687l3.164,1.504L9.571,18.21H6.413l-1.137,1.138l3.6,0.948l1.83,1.83l0.947,3.598l1.137-1.137V21.43l3.725-3.725l1.504,3.164l-0.687,0.687l1.702,1.701l0.081-0.081l1.062,2.231l2.02-2.02l-0.604-2.689l0.912-0.912c0.326-0.326,1.121-1.789,0.604-2.306c-0.452-0.452-1.63,0.101-2.135,0.464l-0.861-3.838l2.777-2.777c0.947-0.947,3.599-4.862,2.62-5.839C24.533,4.512,20.618,7.163,19.671,8.11z" stroke="black" fill="white" />
      </svg><p>Sign out</p></div></a>
          <a href="settings.php"><div> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M31.229,17.736c0.064-0.571,0.104-1.148,0.104-1.736s-0.04-1.166-0.104-1.737l-4.377-1.557c-0.218-0.716-0.504-1.401-0.851-2.05l1.993-4.192c-0.725-0.91-1.549-1.734-2.458-2.459l-4.193,1.994c-0.647-0.347-1.334-0.632-2.049-0.849l-1.558-4.378C17.165,0.708,16.588,0.667,16,0.667s-1.166,0.041-1.737,0.105L12.707,5.15c-0.716,0.217-1.401,0.502-2.05,0.849L6.464,4.005C5.554,4.73,4.73,5.554,4.005,6.464l1.994,4.192c-0.347,0.648-0.632,1.334-0.849,2.05l-4.378,1.557C0.708,14.834,0.667,15.412,0.667,16s0.041,1.165,0.105,1.736l4.378,1.558c0.217,0.715,0.502,1.401,0.849,2.049l-1.994,4.193c0.725,0.909,1.549,1.733,2.459,2.458l4.192-1.993c0.648,0.347,1.334,0.633,2.05,0.851l1.557,4.377c0.571,0.064,1.148,0.104,1.737,0.104c0.588,0,1.165-0.04,1.736-0.104l1.558-4.377c0.715-0.218,1.399-0.504,2.049-0.851l4.193,1.993c0.909-0.725,1.733-1.549,2.458-2.458l-1.993-4.193c0.347-0.647,0.633-1.334,0.851-2.049L31.229,17.736zM16,20.871c-2.69,0-4.872-2.182-4.872-4.871c0-2.69,2.182-4.872,4.872-4.872c2.689,0,4.871,2.182,4.871,4.872C20.871,18.689,18.689,20.871,16,20.871z" stroke="black" fill="white" />
      </svg><p>Settings</p></div></a>
	  	  <a href="statistics.php"><div> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M21.25,8.375V28h6.5V8.375H21.25zM12.25,28h6.5V4.125h-6.5V28zM3.25,28h6.5V12.625h-6.5V28z" stroke="black" fill="white" />
      </svg><p>Statistics</p></div></a>
		  <a href="userpage.php"><div><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M27.87,7.863L23.024,4.82l-7.889,12.566l4.842,3.04L27.87,7.863zM14.395,21.25l-0.107,2.855l2.527-1.337l2.349-1.24l-4.672-2.936L14.395,21.25zM29.163,3.239l-2.532-1.591c-0.638-0.401-1.479-0.208-1.882,0.43l-0.998,1.588l4.842,3.042l0.999-1.586C29.992,4.481,29.802,3.639,29.163,3.239zM25.198,27.062c0,0.275-0.225,0.5-0.5,0.5h-19c-0.276,0-0.5-0.225-0.5-0.5v-19c0-0.276,0.224-0.5,0.5-0.5h13.244l1.884-3H5.698c-1.93,0-3.5,1.57-3.5,3.5v19c0,1.93,1.57,3.5,3.5,3.5h19c1.93,0,3.5-1.57,3.5-3.5V11.097l-3,4.776V27.062z" stroke="black" fill="white" />
      </svg><p>Practice </p></div></a>
	  
      </div> 
  <style>

  
 input[type = button]{
  
   width:30px;
   height:30px;
  
  }
  
  
h2 {
display: block;
font-size: 1.5em;
-webkit-margin-before: 0.83em;
-webkit-margin-after: 0.83em;
-webkit-margin-start: 0px;
-webkit-margin-end: 0px;
font-weight: normal;
}






  </style>


        <script src="js/Raphael.js"></script>
        <script src="js/graphael.js"></script>
        <script src="js/bar.js"></script>
		<script src="js/donut.js"></script>
  


</head>
 <body class="raphael" id="g.raphael.dmitry.baranovskiy.com">
  <div style="margin:auto;width:1000px;border:1px solid #eee;border-radius:3px;margin-top:20px;padding:10px;background:#eee;">

<?php



	    $user_id =  $_SESSION['user_id'];

    if ($stmt = $mysqli->prepare("SELECT  Displaypicture,username  FROM  members")) { 
                // Bind "$user_id" to parameter.
           $stmt->execute(); // Execute the prepared query.
           $stmt->store_result();
           $stmt->bind_result($image,$name); // get variables from result.
           while($stmt->fetch()){
		   
		  // echo $image;
		    echo "<div style='width:100px;display:inline-block;margin-top:10px;margin-left:10px;padding:10px;'>
		   <img style='width:100px;height:100px;border:5px solid white;' src='".$image."' /><p style='text-align:center;width:100px;'>Name:".$name."<p></div>";
		   
		   
		   
		   }
		   
		  
		 }


                    ?>
                                                                                              
   


 

		
		
		
	  

		
		 
	    
</div>
  
   

    
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    </body>
</html>
<?php

}

else{

	echo "Unauthorized to View This Page";
}

?>


<?php
require_once '/phpthumb/ThumbLib.inc.php'; 

	
	if(isset($_FILES["file"]["type"])){
	

$allowedExts = array("jpg", "jpeg", "gif", "png");

if (($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
	
	$thumbname = microtime(true).'.png';
 //   echo "Upload: " . $_FILES["file"]["name"] . "<br>";
 //   echo "Type: " . $_FILES["file"]["type"] . "<br>";
  //  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  //  echo "Stored in: " . $_FILES["file"]["tmp_name"];
	move_uploaded_file($_FILES["file"]["tmp_name"],
      "Displaypictures/" . $thumbname);
  //  echo "Stored in: " . "Displaypictures/" . $thumbname;
	
	echo  "<script type='text/javascript'> 
	alert('Image has beeen uploaded');
	window.location.href = '/GRElogin/settings.php';
	
	</script>";


   $thumb = PhpThumbFactory::create('Displaypictures/' .$thumbname);  
   $thumb->resize(100, 100)->save('Displaythumbs/'.$thumbname);  
	
	$DPpath =  'Displaypictures/' . $thumbname;
	$DTpath = 'Displaythumbs/'.$thumbname;
	$id = $_SESSION['user_id'];
	
			      
                                                          
	   
 if ($stm = $mysqli->prepare('UPDATE  members  SET Displaypicture = ?,
						                            Displaythumb =  ?
           WHERE id= ?')){
        $stm->bind_param('ssi',$DPpath,$DTpath,$id);
        $stm->execute(); 
			echo "succesful";
		    }

	else{
	
	
	    echo "oops Something Went Wrong..! Retry after loading the page Again..!";
	
	
	
	
	
	}

	
	/* //header("Location:http://localhost/GRElogin/settings.php"); */
	
	
	
	
	
	
	
	
	
    }
  }
  
  }
else
  {
 // echo "Invalid file";
  }
?>