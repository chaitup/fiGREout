<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
require_once 'phpthumb/ThumbLib.inc.php'; 


// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {

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
      "displaypictures/" . $thumbname);
	  
	  

  //  echo "Stored in: " . "displaypictures/" . $thumbname;
	
	echo  "<script type='text/javascript'> 

	window.location.href = '/GRELogin/settings.php';
	
	</script>";


   $thumb = PhpThumbFactory::create('displaypictures/' .$thumbname);  
   $thumb->resize(100, 100)->save('displaythumbs/'.$thumbname);  
	
	$DPpath =  'displaypictures/' . $thumbname;
	$DTpath = 'displaythumbs/'.$thumbname;
	$id = $_SESSION['user_id'];
    $_SESSION['dp'] = $DTpath;
			      
                                                          
	   
 if ($stm = $mysqli->prepare('UPDATE  members  SET displaypicture = ?,
						                            displaythumb =  ?
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














	    $user_id =  $_SESSION['user_id'];

    if ($stmt = $mysqli->prepare("SELECT  displaypicture,username,email  FROM members WHERE id = ? LIMIT 1")) { 
        $stmt->bind_param('i', $user_id); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
 
        if($stmt->num_rows == 1) { // If the user exists
           $stmt->bind_result($image,$name,$email); // get variables from result.
           $stmt->fetch();
		   
		  
		   
                                 }



                                                                                                 }
   ?>
   
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<style>
</style>
 <link rel="stylesheet" type="text/css" href="setstatteach.css" media="screen" />

  <link rel="stylesheet" type="text/css" href="css/headerlogin.css" media="screen" />

 
 
  <style>
  
  

.editarea
{

display:none;

}



 #mainwrap{
 margin:auto;width:970px;height:800px;border:1px solid #eee;border-radius:3px;margin-top:20px;padding:10px;
 
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



.Details{
padding:20px;
font-family: 'Trebuchet MS', Tahoma, Verdana, Arial, sans-serif;
font-size:15px;border-bottom:1px solid #eee;

}





.Details p:first-child {

display:inline-block;
vertical-align:top;
font-family:verdana;
font-size:12px;
width:150px;
font-weight:bold;
color:black;
}


.Details p:nth-child(2){

display:inline-block;
vertical-align:top;
font-family:verdana;
font-size:12px;
color:#666;

}

.Details input{
font-family:verdana;
font-size:12px;
color:#666;
border:none;
}



#settings{
margin-top:10px;width:450px;height:300px;display:inline-block;vertical-align:top;padding:30px;
}

.Details h1 {

font-size:25px;text-shadow: 0 1px 0 #fff;
font-weight:normal;
}

.Details span {
float:right;
color:#3b5998;
font-size:11px;

}
.Details span:hover{
text-decoration : underline;
cursor:pointer;
}


.displaypicture{
width:380px;display:inline-block;margin-top:10px;margin-left:10px;

}
.one{
padding:20px;font-family:'segoe UI';font-size:15px;border-bottom:1px solid #eee;}

.one p{
font-size:25px;margin-left:100px

}

.displaypicture img {width:200px;height:200px;margin-left:100px;border:9px solid #eee;border-radius:3px;}

.two{display:inline-block;vertical-align:top;margin-top:50px;background:#f2f2f2;border:2px solid #ccc;padding:20px;width:400px;}

#datepick{
padding:4px;border:0PX;vertical-align:top;padding-top:0px;
font-family: 'Trebuchet MS', Tahoma, Verdana, Arial, sans-serif;
font-size:15px
}



.Details p input{

font-family:verdana;
font-size:12px;

}


  </style>
  	  <script type='text/javascript' src='js/jquery.js'></script>
       <script type='text/javascript' src='js/messi.min.js'></script>
       <link rel="stylesheet" type="text/css" href="css/messi.css" media="screen" />
	   <link rel="stylesheet" href="css/datepickr.css" media="screen"  type='text/css'>
        <script src="js/Raphael.js"></script>
        <script src="js/graphael.js"></script>
	    <script src="js/bar.js"></script>
		<script src="js/donut.js"></script>
        <script src="js/datepickr.js"></script>
   	    <script src="sha512.js"></script>


















		
<script type='text/javascript'>
				
	            

			
			

   
function expand(obj){


new Messi('<div><h2>Change name</h2><br/><span>New name</span>&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="name"/><br/><br/><span>Enter password</span>&nbsp&nbsp<input type="password" id="password"/><br/><br/><input type = "button" value="Update" onclick="passit()" style="width:60px;"  /></div>', { modal: true , modalOpacity : "0.2" });
  
  
  } 
   
   function passit(){

       var Jdata = {"p" : hex_sha512($('#password').val()) , "u" :$('#name').val()};
       var Jstring = JSON.stringify(Jdata);
            
        var jqxhr = $.post("deltacredentials.php", "data="+encodeURIComponent(Jstring),function(data) {
	        
	                   if(data.status == 'success'){
					   $('.messi-closebtn').trigger('click');
                       new Messi('<div>Your Name has been changed Successfully </div>', { autoclose : 3000,center:true});
					   $('#nameinput').val($('#name').val());
					   
					   
						}
						
						
					  if(data.status == 'nomatch'){
						
                        $('.messi-closebtn').trigger('click');
                       new Messi('<div> Password didnot match. </div>', { autoclose : 3000});
					 
					   
					   
						}
						
						
						
						
						
						
						
						
						
						
						
                        },"json")
.fail(function() { alert('oops') });


jqxhr();
   
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   function expand2(obj){


new Messi('<div><h2>Change Password</h2><br/><span>Enter  New password</span>&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" id="np"/><br/><br/><span>Enter Current Password</span>&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="password"/><br/><br/><input class=="btn small rosy" type = "button" value="Update" onclick="passit2()" style="width:60px;"  /></div>', { modal: true , modalOpacity : "0.2" });
  
  
  } 
   
   function passit2(){

       var Jdata = {"p" : hex_sha512($('#password').val()) , "np" : hex_sha512($('#np').val())};
	   
	   
       var Jstring = JSON.stringify(Jdata);
            
        var jqxhr = $.post("deltacredentials.php", "data="+encodeURIComponent(Jstring),function(data) {
	        
	                   if(data.status == 'success'){
					   $('.messi-closebtn').trigger('click');
                       new Messi('<div>Your Password has been changed Successfully </div>', { autoclose : 3000,center:true});
		
					   
						}
						
						
					  if(data.status == 'nomatch'){
						
                        $('.messi-closebtn').trigger('click');
                       new Messi('<div> Entered Password is wrong. </div>', { autoclose : 3000});
					
					   
					   
						}
						
						
						
						
						
						
						
						
						
						
						
                        },"json")
.fail(function() { alert('oops') });


jqxhr();
   
   }
   
   
   
   
   
   
  </script>

</head>



<div class='enclosure'>
<div id='mainNavigation'>

<div >
<h1 style='margin-top:20px;'> <img G src='images/logo_pic_white.png'></img></h1>
</div>


<div id='Mainlinks' >
<ul>
<li><a href="./userpage.php">Practice</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./statistics.php">Statistics</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./settings.php">Settings</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./teachinglesson.php">Lessons</a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </li>
</ul>
</div>

<a id ='signout' href='securelogout.php'>
<img src='images/logout.png' ></img><br/>
<p> Signout </p>
</a>



<br/>

</div>

</div>


<br/>




 <body class="raphael" >
  <div id='mainwrap'>
 

        <div id="settings" >
		
	     <div class='Details'>
		  <h1 >General Account Details</h1>
		 </div>
		 
		 
	     <div   class='Details'>
		 <p> Name</p><input id='nameinput' value ='<?php echo $name; ?>' readonly></input><span onclick='expand(this);'>Edit</span>
		
		 </div>
		 	     <div   class='Details'>
		 <p> Password</p><input id='ninput' value ='*******' readonly></input><span onclick='expand2(this);'>Edit</span>
		
		 </div>
		 
		 <div  class='Details' >
		 <p> Email <p><?php echo $email; ?></p>
	
		 </div>
		 
		 
	

		</div>
		
		
		
	    <!-- <div class='displaypicture'>
		<div class='one'>
		  <p>Display picture</p>
		</div><br/>
		<img  src ="<? echo $image;?>" />
		<div class='two'>
	    <form  action="" method="post"  enctype="multipart/form-data">
          <label for="file">Change Picture:</label>
          <input type="file" name="file" id="file"><br>
          <input style='width:60px;margin-top:10px;' type="submit" name="submit" value="Submit">
        </form>
		</div>
		</div> -->
	 

		
		 
	    
		</div>

   
<script type='text/javascript'>
				
	            
	new datepickr('datepick');

   
   

   
  </script>

    
  

		
   
   


   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    </body>
</html>
<?php

}

else{

    header("Location:http://localhost/GRElogin/securelogout.php");
}

?>














