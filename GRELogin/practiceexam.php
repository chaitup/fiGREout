<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
require_once '/phpthumb/ThumbLib.inc.php'; 

// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {

$testNumber =  practiceTestNumber($mysqli , $_SESSION['user_id']);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<style>
</style>
    <link rel="stylesheet" type="text/css" href="login.css" media="screen" />
    <script type='text/javascript' src='js/jquery.js'></script>
    <script src='js/loadExamQuestions.js' type='text/javascript'></script>
	<script src='js/validateExamAnswers.js' type='text/javascript'></script>
 
  <style>
  #center
  
  
  {
  
    width:1000px;
	margin:auto;
	height:500px;
	border : 1px solid #eee;
	border-radius:5px;
	margin-top:20px;

  
  
  }
  
 .heading{
 
 width:700px;
 margin-left:100px;
 margin-top:20px;
 font-family:verdana;
 font-size:13px;

 

 } 
  

#RWrap  
{ 
 width:700px;
 margin-left:100px;
 margin-top:20px;
 font-family:verdana;
 font-size:13px;
 }

  
 .heading input , #RWrap  input{
 
 
 padding:5px;
 background: -webkit-linear-gradient(top,white,#eee);
 color:#000;
 cursor:pointer;
 border: 1px solid #888;
 border-radius:3px;
 
 
 } 
  
   .heading input:hover{
   
    background: -webkit-linear-gradient(top,#eee,white);
   
   }
  
 #center hr{
  
 width:700px;
 margin-left:100px;



 }
  
 #list1 ,#list2,#list3{
	margin-right:20px;
    display:inline-block;
	margin-top:20px;
	
} 
  
  
  
  
  
  
  #list1 li ,#list2 li,#list3 li {
    
  list-style-type:none;
  margin-bottom:5px;


}
  
  
  
 #directsubmit 

 {
 
 margin-top:20px;
 
 }
  
  
  #testsLeft{
  
  background:#eee;padding-left:5px;border:1px solid #000;padding-right:5px;
  
  
  }
  
  #totalTests {
  background:#eee;padding-left:5px;border:1px solid #000;padding-right:5px;
  
  }
  
  </style>

  
  
  <link rel="stylesheet" type="text/css" href="css/headerlogin.css" media="screen" />
</head>
<body>
 
 <script type='text/javascript'>
 
var testNumber =  <? echo $testNumber; ?> ;
 
 alert(testNumber);
 
</script>
 
 
 
 
 
 
 
<div class='enclosure'>
<div id='mainNavigation'>

<div >
<h1> fi<b>GRE</b>out </h1>
</div>



<div id='Mainlinks' >
<ul>
<li><a href="./userpage.php">Practice</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./statistics.php">Statistics</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./settings.php">Settings</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./teachinglesson.php">Lessons</a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </li>
</ul>
</div>


<div id='AccountStatus' >
<ul>

</ul>
</div>




</div>
</div>
 
 
 
 
 
 
<div id='center'>
<p class='heading'> Total Available Practice Tests : <span id='totalTests'>  </span> </p>
<p class='heading'> Total Solved Practice Tests &nbsp;&nbsp;&nbsp;: <span id='testsLeft'> 0 </span> </p>
<p class='heading'> Your practice test is about to start , please make sure that you have atleast 30min reserved as u cannot discontinue in the middle of the test .You cannot go back while attempting the test , doing so would cancel the test in the middle. </p>
<br/>



<div class='heading'>
<input type='button' value='Start Practice Test' onclick='startTheTest(runningQuestion,testNumber);'/>
</div>


<div id="RWrap" style='margin:auto;width:600px;display:none;'>
<p>Question <span id='current'> 1 </span> of 20</p>
<hr id='QuestionHeading' style='margin:10px;width:100%;height:1px;margin-left:0px;
    border: 0;
    height: 0px;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
'/>
<div id="question">
    <p id="Textarea">Server Request Error....Try Reloading the Page </p><br/>
    <img style="margin-left:130px;"></img>
	<div id='forQuantComparision' style='margin-top:10px;'>
	<p style='display:inline-block'>QuantityA</p>
    <p style='display:inline-block'>QuantityB</p>
	</div>
<div id="OptionsContainer">
   <div id="list1"></div>
   <div id="list2"></div>
   <div id="list3"></div>
</div>

 <div id="ButtonHolder">
  <input  class='btn' type="button" id="directsubmit" value="Submit"  onclick = 'runningQuestion = runningQuestion + 1; $("#current").text(runningQuestion); validateExamQuestions(questionNumber, TestNumber , categoryType); >


</div>
</div>
</div>



</div>
  

 </body>
</html>
<?php

}

else{


}
/* runningQuestion = runningQuestion + 1; $("#current").text(runningQuestion); startTheTest(runningQuestion) */
?>
