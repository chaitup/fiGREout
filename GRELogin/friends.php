<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {

if(isset($_GET['id']))
{

$personId = mysql_real_escape_string($_GET['id']);

}


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<style>
</style>
 <link rel="stylesheet" type="text/css" href="teachinglesson.css" media="screen" />




  <style>

  

  
#mainProfile{


margin:auto;
width:1000px;
margin-top:10px;
HEIGHT:0PX;
margin-bottom:10px;
border-bottom: double 4px #CCC;
overflow:hidden;
}

.nameContainer{

border:1px solid #c4cde0;
display:inline-block;
margin-top:10px;
margin-left:10px;
padding:10px;
background: -moz-linear-gradient(top,#fff ,#fff);
background: -webkit-linear-gradient(top,#fff ,#fff);
cursor:pointer;
}





.name {

inline-block;
vertical-align:top;
margin:5px;
font-size:13px;
vertical-align:center;
}

#mainProfile div
{
vertical-align:top;
display:inline-block;

}

#mainProfile div p 

{
padding:15px;
vertical-align:top;
font-size:13px;
font-family:tahoma;
border-bottom: 1px solid #eee;

}


#mainProfile div h3

{
padding:15px;
vertical-align:top;
font-size:15px;
font-family:verdana;
color : #3b5998;
}

#profilePic 

{

}



#mainReview

{
width:300px;

}


#mainReview h3

{
margin:auto;
text-align:center;
}

.Percent

{

margin:15px;
width:400px;
height:20px;
border:1px solid #888;
color:white;
font:18px verdana;


}



#loadPercent

{

background:#7b4;
width:1px;
height:20px;

}

.friendsHeader

{
padding:5px;
background:#eceff6;
border:#d4dae8;
padding:5px;
}



.friendsHeader input


{
font:13px verdana;
border:none;
height:20px;
background: none;
}

review 

{
border-bottom: 1px solid #000;
}


textarea:focus, input:focus{
    outline: none;
    border: none !important;
-moz-appearance:none;
}

  </style>


        <script src="js/raphael.js"></script>
        <script src="js/graphael.js"></script>
        <script src="js/bar.js"></script>
		<script src="js/donut.js"></script>
  	    <script src="js/jquery.js"></script>


</head>
 <body class="raphael" id="g.raphael.dmitry.baranovskiy.com">
 <div style='background:#594868;'>
<div id='mainNavigation'>

<div>
<h1> Solveby </h1>
</div>



<div id='Mainlinks'>
<ul>
<li><a href="./userpage.php">Practice</a></li>
<li><a href="./statistics.php">Statistics</a></li>
<li><a href="./settings.php">Settings</a></li>
<li><a href="./teachinglesson.php">Lessons</a></li>
</ul>
</div>


<div id='AccountStatus'>
<ul>
<input  class='btn small orange' onclick='register();' type='button' value='Sign up'/>
<input  class='btn small gray'   onclick='Log();'       type='button' value='Log in'/>
</ul>
</div>




</div>
</div>

<hr/>
<br/>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  <div style="margin:auto;width:1000px;height:700px;border:1px solid #eee;border-radius:3px;margin-top:20px;padding:10px;">
    <div  class='friendsHeader'>
	<input onkeyup='refine(this.value)' onclick='if(this.value == "Search"){
	this.value = "";
	} '  onblur = 'this.value == "Search"' type='text' value='Search'/></div>
	<div id='mainProfile'>
	
	<div>
	<img id='profilePic'></img>
	</div>
	
	
	<div>
	<h3>General</h3>
    <p id='mainName'></p>
	<p id='mainEmail'></p>
	<p id='GREdate'></p>
	</div>
	
	
	<div id='mainReview'>
	<h3>Summary</h3>
    <p id='review'></p>
	</div>
	  
	  

	
	
	</div>
      <?php



	    $user_id =  $_SESSION['user_id'];

    if ($stmt = $mysqli->prepare("SELECT  Displaythumb,username ,id FROM  members WHERE activation = 'success'")) { 
                // Bind "$user_id" to parameter.
           $stmt->execute(); // Execute the prepared query.
           $stmt->store_result();
           $stmt->bind_result($image,$name,$id); // get variables from result.
           while($stmt->fetch()){
		   
		  // echo $image;
		    echo "<div class='nameContainer' value = ".$id." onclick='showProfile(this)' >
		   <img style='width:100px;height:100px;display:inline-block' src='".$image."' /><p class='name'>".$name."</p><input type='hidden' /></div>";
		   
		    
		   
		   }
		   
		  
		 }


                    ?>
                                                                                              
   


 

		
 <form method="post" action="https://secure.payza.com/checkout" >
	<input type="hidden" name="ap_productid" value="Pq2PKvmOv6AvoU/grM3MKg=="/>
	<input type="hidden" name="ap_quantity" value="1"/>
	<input type="image" name="ap_image" src="https://secure.payza.com/PayNow/FADC007CAAD043B2ABD38B76D98E9376b4en.gif"/>
</form>
	    
</div>


   

    
   
   
   
   
   
   

   
   
   
   
   
   
   
    
   <script type='text/javascript'>
   
    var n = Raphael("review",300 ,200);  
	
   function showProfile(obj)
   
   
   {
   
     
	   
     var Jobject = {'id' : obj.getAttribute('value')}
      
      var Jstring = JSON.stringify(Jobject);
	  
      var jqxhr = $.post("profileData.php", "data="+encodeURIComponent(Jstring),function(data) {
       
				window.history.replaceState( {} , 'foo', '/GRELogin/friends.php?' + data.name );		//	 alert(data.pic)  
         		 $('#mainProfile').css("opacity" ,"0");
				 $('#profilePic').attr({"src":data.pic ,"height":"300px" , "width" : "300px"});	
	             $('#mainName').html("Name :&nbsp;" + data.name);	
	             $('#mainEmail').html("Email :&nbsp;" + data.email);
                 $('#GREdate').html("Exam date:&nbsp; 22/12/2013" );
		
					$('#mainProfile').animate({"height" : "0"}, 500 ,function(){
				    $('#mainProfile').css("opacity" ,"1");
					$('#mainProfile').animate({"height" : "350"}, 1000 , function(){
					// $('#loadPercent').css({"width" : "1px"});
				//$('#loadPercent').animate({"width" : "200"}, 1000);
						
			
  
	
			 
			 	 var values = [5, 10],
                 labels = [40,60];
		   
		      var pie = n.donutChart(140, 95, 70, 0, values, labels, "#fff");
			   	 pie.attr({ "font-size": 13, "font-family": "Tahoma, Helvetica, sans-serif" });
			
	  
						
			
						
					});
				
					
				});		
				
				},"json");
											   
			
   
   
   }
   
   

   function refine(val){
   
 $('#mainProfile').animate({"height" : "0"}, 500 );
   
   var names = $('.nameContainer p');
   
   for(i=0;i < names.length ;i++)
   
   {
   
   if(names[i].innerHTML.toLowerCase().indexOf(val.toLowerCase()) < 0)
   
   {
      names[i].parentNode.style.display = "none";
   
   }
   
      if(names[i].innerHTML.toLowerCase().indexOf(val.toLowerCase()) >= 0)
   
   {
      names[i].parentNode.style.display = "inline-block";
   
   }
   
   
   
   }
   
 // if (str.indexOf("Yes") >= 0)

   
   }
   
   
   
 //  $('.nameContainer').on( "click", function() {
   
									   
		
 // });
   
   

   
   // $('.nameContainer').trigger('click');
	
	
	
   </script>
   
   
   
    </body>
</html>
<?php

}

else{

     header("Location:http://solveby.com/GRELogin/securelogout.php");
}

?>


