<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';

sec_session_start();

if(login_check($mysqli) == true) {


?>
   
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <head >
    <meta charset="utf-8">
    <title>The complete online math practice for revised GRE exam - AIM GRE</title>

<link rel="stylesheet" type="text/css" href="question.css" media="screen" />
      
	  
	  <script type='text/javascript' src='js/jquery.js'></script>
      <script src="js/raphael.js"></script>
	  <script src="js/UI.js"></script>	
	  <script src="js/raphaelobjects.js"></script>  
	  <script type="text/javascript" src="js/raphael.free_transformO.js"></script>
	  <script src="js/jquery-ui-1.10.3.custom.min.js"></script> <!-- resize canvas  -->
	  
	  <link rel="stylesheet" type="text/css" href="css/headerlogout.css" media="screen" />
	  <script src="js/jquery-ui-1.10.3.custom.min.js"></script> <!-- resize canvas  -->
	  <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.min.css" media="screen" />
	  
<style> 
	
	


	
	
	
	
	
	
	
	
	
	
	
	
	#submitArea {
	 
	 margin-top:20px;
	 background:#eee;
	 }
	 
	 #submitArea input {
	 
	 margin-left:10px;
	 vertical-align:middle;
	 text-align:bottom;


	 }
	 


hr{



width: 1200px;
margin:auto;
margin-bottom:20px;


}



	 
	 .submitButton{
	 padding:5px;
	 vertical-align:center;
     margin:5px;
	 cursor:pointer;
	 }
	 


select
{
  cursor :pointer;
  font-family:verdana;
}




.lessonCover
{


display:inline-block;
margin-right:20px
margin-top:20px;
margin-bottom:10px;
margin-left:10px;

}












</style>   
	  
	  

<script type="text/javascript" >


function SubmitAnswer(){


	var questionnumber = $("#submitArea").val();
	var category = $("#submitSub").val();
	 
    R.setSize("800", $('#svgContainer').height());

	var ImageString = document.getElementById('svgContainer').innerHTML ;
	
	
    var Jdata = {"Imagedata":ImageString ,"Category" : category , "QuestionNumber":questionnumber };
    
	var Jstring = JSON.stringify(Jdata);
 
   
     var jqxhr = $.post("resubmitquery.php", "data="+encodeURIComponent(Jstring),function(data) {

	                          alert(data);
	 
	 
                        })
.fail(function() { alert("Cannot fetch Sorry"); });

          jqxhr();

}
</script>
<div id='mainNavigation'>

<div >
<h1> <span style='font-style:italic;'>f</span>i<b>GRE</b>out </h1>
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

<hr/>
<br/>


	
	
<div id="Wrap" >


<div id ="lowerWrap" >

<div id="panel">
     
	 <img src='images/pencil_red.jpg' id ='oneimage'></img>
	 <img src='images/Texticon.png' id ='twoimage'></img><br/>

     <textarea id="fname" onkeyup="myFunction()"  rows="4" cols="50" ></textarea>	
  
</div>
<br/>
<div style='display:inline-block;border:8px solid #eee;' id='moma'>
<div id="svgContainer">
</div>
</div>
<div id="propertiespanel" >
<input type='button' class ='btn small rosy ' value='clear' onclick='R.clear(); masterBackground = R.rect(0,0,"100%","100%").attr({"stroke":"#eee","stroke-width":1}).attr("fill", "#fff").toBack();'/>
</div> 

</div>
 
 
 
<div style='margin:auto;width:960px;'><br/>
&nbsp; Q.no:
<input id='submitArea' value=''/>


<select id='submitSub'>
  <option value="MultipleChoiceMoreAnswers">MultipleChoiceMoreAnswers</option>
  <option value="MultipleChoiceOneAnswer">MultipleChoiceOneAnswer</option>
  <option value="QuantitativeComparision">QuantitativeComparision</option>
  <option value="NumericEntry">NumericEntry</option>
</select>



<input type='button' class='submitButton' value='reSubmitAnswer'  onclick='SubmitAnswer()'/>
</div>

</div>




    
      <script src="js/DisplayObjects.js"></script><!-- Panel objects -->
	

	 <script type="text/javascript">

	 

  $(function(){
   
   /*
     * this swallows backspace keys on any non-input element.
     * stops backspace -> back
     */
    var rx = /INPUT|SELECT|TEXTAREA/i;

    $(document).bind("keydown keypress", function(e){
        if( e.which == 8 ){ // 8 == backspace
            if(!rx.test(e.target.tagName) || e.target.disabled || e.target.readOnly ){
                e.preventDefault();
            }
        }
    });
});




</script>
  
	

	
<script type="text/javascript">
        
  
	window.onload= function()
	
	{
	
	  DisplayPanel();
	  UIinterface();
	     
    }
			


  </script>

		   
		   
 </body>
</html>
<?


}

else 

{
        header("location:login.php");

}



?>
