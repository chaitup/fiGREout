<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';






   ?>
   

   
   
   
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<head>

	<meta charset="UTF-8">
	
	<title>Organic Tabs</title>
	
	<link rel="stylesheet" href="Solved.css" media="screen"  type='text/css'>
	
	<style>
	#header p {
	
	display:inline-block;margin-right:20px;
	
	}

	
	
	</style>
    <script src='../js/jquery.js'></script>
    <script src="../js/organictabs.jquery.js"></script>
    <script>
        $(function() {
    
    
            $("#example-two").organicTabs({
                "speed": 200
            });
    
        });
    </script>
	

</head>

<body>
  <div id="mainnav"> 
  <h1 style='margin-top:20px;margin-left:40px;font-size:40px;display:inline-block;font-family:"cool_cambria";font-weight:normal;color:white;border:0px solid black;'>Skillite<h1>
  </div> 






















<div id="Wrap">

<div id='header'>
<p style='text-decoration:underline;'>Solved Questions </p>
<hr />
<p>Solveby.com</p>

<p style='border-bottom:double 4px #CCC;'></p>
</div>






<div id='SpriteContainer'>

 <?  
     if ($stmt = $mysqli->prepare("SELECT QuestionID ,QuestionImage,AnswerImage,Tag  FROM solvedquestions")
               )
			   
			
           {
		   
             $stmt->execute();
			 $stmt->bind_result($QuestionID, $Question ,$Answer,$Tag); 
			 
		$iterative = 1;
		
			 	while($stmt->fetch())
		{
		       
			   
		   
		  
                echo "<p class='Sprites' id='".$QuestionID."' onclick='clobber(this);' >".$iterative."</p>" ;
				
				if($_GET['num']  == $QuestionID)
				
				{
				
				  $currentQuestion = $Question;
				  $currentAnswer = $Answer;
				  $currentTag = $Tag;				
				
				}
				$iterative = $iterative  + 1;
		
		
		
		   
	    }
		   }	

?>




</div>

<div id='QuestionandAnswer'>
<p id='tag'> <?echo  $currentTag ;?></p><br/>
<p style='padding:10px;font:13px verdana; '> Question :<p>
<img src='<?echo $currentQuestion;?>'></img>
<p style='padding:10px;font:13px verdana;'> Answer :<p>
<img src='<?echo $currentAnswer;?>'></img>	
</div>

<div id='solbyAd'>
<p style='text-align:center;font:16px verdana;'> Check out the Awesome</p><br/>
<iframe width="300" height="200" src="http://www.youtube.com/embed/4-KBwriCO-Q?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark"></a></td></tr></table><!-- PayPal Logo -->

</div>


</div>		



</body>
<script>

function clobber(obj)

{

window.location.href = 'SolvedMisscilaneousQuestions.php?num=' + obj.id;

}

$('img').bind('contextmenu', function(e) {
    return false;
}); 
</script>
</html>
