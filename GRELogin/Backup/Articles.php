<?php
include 'db_wconnect.php';
include 'functions.php';
include 'login_check.php';

   ?>
   

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<head>

	<meta charset="UTF-8">
	
	<title>Organic Tabs</title>
	
	<link rel="stylesheet" href="Solved.css" media="screen"  type='text/css'>
	
	<style>
	

	
	
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
  <h1 style='margin-top:20px;margin-left:40px;font-size:40px;display:inline-block;font-family:"sieoge UI";font-weight:normal;color:white;border:0px solid black;'>Solveby | Blog <h1>
  </div> 






















<div id="Wrap">

<div id='header'>
<p style='border-bottom:double 4px #CCC;margin-top:10px;'></p>
<hr />
<p style='display:inline-block;margin-right:20px;'>All </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Math </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Verbal </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Tips </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Scores </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Lessons </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Study Schedule </p>
<hr />
<p style='display:inline-block;margin-right:20px;text-decoration:underline;'>Solved Questions </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Solveby.com</p>
<p style='border-bottom:double 4px #CCC;'></p>
</div>






<div id='SpriteContainer'>

 <?  
$post_status = 'publish';
$post_title = 'firstSolvebyArticle';

 if ($stm = $mysqli->prepare("SELECT post_content FROM  wp_posts WHERE post_status = ? AND post_title = ?")){
        $stm->bind_param('ss',$post_status,$post_title);
        $stm->execute(); // Execute the prepared query.
        $stm->bind_result($post_content);
    	
		
		while($stm->fetch())
{ 
       echo "
                 <p style='font:13px verdana ;width:600px;'>".nl2br($post_content)."</p>

             ";
			 
			 }
}

?>




</div>
	



</body>
<script>

function clobber(obj)

{

window.location.href = 'SolvedMisscilaneousQuestions.php?num=' + obj.id;

}


</script>
</html>















