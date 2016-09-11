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
 <link rel="stylesheet" type="text/css" href="../Teachinglesson.css" media="screen" />

      <script type='text/javascript' src='../js/jquery.js'></script>
      <script src="../js/raphael.js"></script>
	  <script src="js/UI.js"></script>	
	  <script src="../js/raphaelobjects.js"></script>  
	  <script type="text/javascript" src="../js/raphael.free_transformUI.js"></script>
      <script src="../js/DisplayObjects.js"></script>

	  
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



#mainSelectConatiner
{

display:inline-block;
margin-bottom:10px;
width: 200px;
height: 25px;
overflow: hidden;
background: url(images/blackdown.png) no-repeat right #fff;
border: 1px solid #ccc;
border-radius: 3px ;
}


#mainSelectConatiner select {
   background: transparent;
   width: 228px;
   padding: 5px;
   font-size: 12px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 25px;
   -webkit-appearance: none;
   }




#subSelectConatiner{

display:inline-block;
margin-bottom:10px;
height: 25px;
overflow: hidden;
background: url(images/blackdown.png) no-repeat right #fff;
border: 1px solid #ccc;
border-radius: 3px ;
}


#subSelectConatiner select {
   background: transparent;
   width: 200px;
   padding: 5px;
   font-size: 12px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 25px;
   -webkit-appearance: none;
   }

#lessonsContainer{
width:95%;
margin:auto;
}


.title
{

display:inline;
margin-left:20px;


}









</style>   
	  
	  
	  
	  
	  
	  
	  
	  
	  
<script type="text/x-mathjax-config">
//
//  Do NOT use this page as a template for your own pages.  It includes 
//  code that is needed for testing your site's installation of MathJax,
//  and that should not be used in normal web pages.  Use sample.html as
//  the example for how to call MathJax in your own pages.
//
  MathJax.HTML.Cookie.Set("menu",{});
  MathJax.Hub.Config({
    extensions: ["tex2jax.js"],
    jax: ["input/TeX","output/HTML-CSS"],
    "HTML-CSS": {
      availableFonts:[],
      styles: {".MathJax_Preview": {visibility: "hidden"}}
    }
  });


</script>
<script type="text/javascript" >




var arithmeticSub =  '<option value="Integers">Integers</option>'+
	                     '<option value="Fractions">Fractions</option>'+
						 '<option value="ExponentsandRoots">Exponents and Roots</option>'+
						 '<option value="Decimals">Decimals</option>'+
						 '<option value="RealNumbers">Real Numbers</option>'+
						 '<option value="Ratio">Ratio</option>'+
						 '<option value="Percent">Percent</option>';
	
		var algebraSub =   '<option value="OperationswithAlgebricExpressions">Operations with Algebric Expressions</option>'+
	                     '<option value="RulesofExponents">Rules of Exponents</option>'+
						 '<option value="SolvingLinearEquations">Solving Linear Equations</option>'+
						 '<option value="SolvingQuadraticEquations<">Solving Quadratic Equations</option>'+
						 '<option value="SolvingLinearInequalities">Solving Linear Inequalities</option>'+
						 '<option value="Functions">Functions</option>'+
						 '<option value="Applications">Applications</option>'+
						 '<option value="Co-ordinateGeometry">Co-ordinate Geometry</option>'+
						 '<option value="GraphsofFunctions">Graphs of Functions</option>';
	
	var none =  '<option value="none">none</option>';
	
	
	function arrangeSubCategories(selectedIndex , obj){
         // $(".none").remove();
		 
		 
	
	
var sub = (selectedIndex == 1)? algebraSub : (selectedIndex == 2)? arithmeticSub : (selectedIndex == 3)? geometrySub:(              selectedIndex == 4)? dataAnalysisSub : none ;
	  
	    
	    $('#' + obj ).html(sub);
		
	                 
	                                }
					 

	
		var geometrySub = '<option value="LinesandAngles">Lines and Angles</option>'+
	                     '<option value="Polygons">Polygons</option>'+
						 '<option value="Triangles">Triangles</option>'+
						 '<option value="Quadrilaterals">Quadrilaterals</option>'+
						 '<option value="Circles">Circles</option>'+
						 '<option value="Three-Dimensional Figures">Three-Dimensional Figures</option>';
				
  var dataAnalysisSub =  '<option value="Graphical Methods for Describing Data">Graphical Methods for Describing Data</option>'+
	                     '<option value="Numerical Methods for Describing Data">Numerical Methods for Describing Data</option>'+
						 '<option value="Counting Methods">Counting Methods</option>'+
						 '<option value="Probability">Probability</option>'+
						 '<option value="Distributions od Data , Random Variables, and Probabilty Distributions">Distributions od Data , Random Variables, and Probabilty Distributions</option>'+
						 '<option value="DataInterpretation">Data Interpretation</option>';

























function SubmitQuestion(){


	 var category = $("#submitArea  :selected").val();
	 var subSubmittableCategory = $("#submitSub  :selected").val();


     if(category == undefined)
	 {
	 
	 return false;
	 
	 }
	 
	 
	 
	 
	 
  var tag = '#' + category + '#' + subSubmittableCategory
  alert(tag);
  alert( $('#svgContainer').height());
  R.setSize("800", $('#svgContainer').height());
  alert(R.height);
 
 //return false;
	var ImageString = document.getElementById('svgContainer').innerHTML ;
    var Jdata = {"Imagedata":ImageString ,"lessonCategory" : category , "subCategory" : subSubmittableCategory ,"tag" :tag };
    var Jstring = JSON.stringify(Jdata);
 
   
     var jqxhr = $.post("Savequestion.php", "data="+encodeURIComponent(Jstring),function(data) {

	                  $('#status').html("Status : Answer &nbsp;" + data.Status ) ;
	 
	 
                        })
.fail(function() { alert("Cannot fetch Sorry"); });

          jqxhr();

}

function SubmitAnswer(){


	 var category = $("#submitArea  :selected").val();
	 var subSubmittableCategory = $("#submitSub  :selected").val();


     if(category == undefined)
	 {
	 
	 return false;
	 
	 }
	 
	 
	 
	 
	 
  var tag = '#' + category + '#' + subSubmittableCategory
  alert(tag);

  R.setSize("800", $('#svgContainer').height());

 
 //return false;
	var ImageString = document.getElementById('svgContainer').innerHTML ;
    var Jdata = {"Imagedata":ImageString ,"lessonCategory" : category , "subCategory" : subSubmittableCategory ,"tag" :tag };
    var Jstring = JSON.stringify(Jdata);
 
   
     var jqxhr = $.post("Saveanswer.php", "data="+encodeURIComponent(Jstring),function(data) {

	                  $('#status').html("Status : Answer &nbsp;" + data.Status ) ;
	 
	 
                        })
.fail(function() { alert("Cannot fetch Sorry"); });

          jqxhr();

}
</script>
  <div id="mainnav" style='background:#3b5998;'> 
  <h1 style='margin-top:30px;margin-left:40px;font-size:40px;display:inline-block;font-family:"Georgia";font-weight:normal;color:white;border:none'>Solveby</h1>
	      <a style="margin-right:100px;" href="SecureLogout.php" > <div>  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M19.671,8.11l-2.777,2.777l-3.837-0.861c0.362-0.505,0.916-1.683,0.464-2.135c-0.518-0.517-1.979,0.278-2.305,0.604l-0.913,0.913L7.614,8.804l-2.021,2.021l2.232,1.061l-0.082,0.082l1.701,1.701l0.688-0.687l3.164,1.504L9.571,18.21H6.413l-1.137,1.138l3.6,0.948l1.83,1.83l0.947,3.598l1.137-1.137V21.43l3.725-3.725l1.504,3.164l-0.687,0.687l1.702,1.701l0.081-0.081l1.062,2.231l2.02-2.02l-0.604-2.689l0.912-0.912c0.326-0.326,1.121-1.789,0.604-2.306c-0.452-0.452-1.63,0.101-2.135,0.464l-0.861-3.838l2.777-2.777c0.947-0.947,3.599-4.862,2.62-5.839C24.533,4.512,20.618,7.163,19.671,8.11z" stroke="black" fill="white" />
      </svg><p>Sign out</p></div></a>
          <a href="SolvedMisscilaneousQuestions.php"><div> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M31.229,17.736c0.064-0.571,0.104-1.148,0.104-1.736s-0.04-1.166-0.104-1.737l-4.377-1.557c-0.218-0.716-0.504-1.401-0.851-2.05l1.993-4.192c-0.725-0.91-1.549-1.734-2.458-2.459l-4.193,1.994c-0.647-0.347-1.334-0.632-2.049-0.849l-1.558-4.378C17.165,0.708,16.588,0.667,16,0.667s-1.166,0.041-1.737,0.105L12.707,5.15c-0.716,0.217-1.401,0.502-2.05,0.849L6.464,4.005C5.554,4.73,4.73,5.554,4.005,6.464l1.994,4.192c-0.347,0.648-0.632,1.334-0.849,2.05l-4.378,1.557C0.708,14.834,0.667,15.412,0.667,16s0.041,1.165,0.105,1.736l4.378,1.558c0.217,0.715,0.502,1.401,0.849,2.049l-1.994,4.193c0.725,0.909,1.549,1.733,2.459,2.458l4.192-1.993c0.648,0.347,1.334,0.633,2.05,0.851l1.557,4.377c0.571,0.064,1.148,0.104,1.737,0.104c0.588,0,1.165-0.04,1.736-0.104l1.558-4.377c0.715-0.218,1.399-0.504,2.049-0.851l4.193,1.993c0.909-0.725,1.733-1.549,2.458-2.458l-1.993-4.193c0.347-0.647,0.633-1.334,0.851-2.049L31.229,17.736zM16,20.871c-2.69,0-4.872-2.182-4.872-4.871c0-2.69,2.182-4.872,4.872-4.872c2.689,0,4.871,2.182,4.871,4.872C20.871,18.689,18.689,20.871,16,20.871z" stroke="black" fill="white" />
      </svg><p>GRE Solved </p></div></a>
	  

	
		
      </div> 

	
	
<div id="Wrap" >
<p style='border-bottom:double 4px #CCC;margin-top:10px;'></p>



<div id ="lowerWrap" style='width:1000px;' >
<br/>
<h5>Question/Answer: </h5>
<h5 id='status'></h5>
<br/>
<div id="panel" style='width:800px;'>
<div style='display:inline-block;vertical-align:top;padding:5px;float:right;'>
<div style="display:inline-block;width:400px;background:#eee;border-radius:3px;display:none">
	<p onclick="document.getElementById('fname').value += '\u222B'; myFunction(); ">&#8747;</p>
	<p onclick="document.getElementById('fname').value += '\u221A';myFunction(); ">&#8730;</p>
	<p onclick="document.getElementById('fname').value += '\u0192';myFunction(); ">&#402;</p>
	<p onclick="document.getElementById('fname').value += '\u22A5';myFunction(); ">&#8869;</p>
	<p onclick="document.getElementById('fname').value += '\u221E';myFunction(); ">&#8734;</p>
    <p onclick="document.getElementById('fname').value += '\u221B'; myFunction(); ">&#8731;</p>
	<p onclick="document.getElementById('fname').value += '\u2234';myFunction(); ">&#8756;</p>
	<p onclick="document.getElementById('fname').value += '\u3BC';myFunction(); ">&#956;</p>
	<p onclick="document.getElementById('fname').value += '\u2202';myFunction(); ">&#8706;</p>
	<p onclick="document.getElementById('fname').value += '\u2200';myFunction(); ">&#8704;</p>
    <p onclick="document.getElementById('fname').value += '\u22C2';myFunction(); ">&#8898;</p>
	<p onclick="document.getElementById('fname').value += '\u22C3';myFunction(); ">&#8899;</p>
	<p onclick="document.getElementById('fname').value += '\u03C0';myFunction(); ">&#8736;</p>
	<p onclick="document.getElementById('fname').value += '\u2205';myFunction(); ">&#8709;</p>
    <p onclick="document.getElementById('fname').value += '\u221D';myFunction(); ">&#8733;</p>
	<p onclick="document.getElementById('fname').value += '\u03BC';myFunction(); ">&#956;</p>
	<p onclick="document.getElementById('fname').value += '\u03B8';myFunction(); ">&#952;</p>
    <p onclick="document.getElementById('fname').value += '\u03A3';myFunction(); ">&#931;</p>
    <p onclick="document.getElementById('fname').value += '\u00B1';myFunction(); ">&#177;</p>
	<p onclick="document.getElementById('fname').value += '\u00F7';myFunction(); ">&#247;</p>
    <p onclick="document.getElementById('fname').value += '\u2260';myFunction(); "> &#8800;</p>	
	<p onclick="document.getElementById('fname').value += '\u2264';myFunction(); ">&#8804;</p>	
	<p class ='entities' onclick="document.getElementById('fname').value += '\u03C0';myFunction(); ">&#8719;;</p>	
		
		<p> <a class="tooltip" href="#" onmouseover =''>Help.?<span class="classic">Click on the symbols to insert into textarea</span></a></p>

</div>

</div>
	    <textarea id="fname" style="height:40px;display:none;" onkeyup="myFunction(this)"> </textarea>	
</div>


<div id="svgContainer" style='width:800px;height:500px;' >
</div>
<div id="propertiespanel" >
<div class ="ColorPicker" style="width:100px;">
<p style="display:block;border:none;font-size:15px;text-decoration:underline;"> Properties </p>
<p style="display:block;border:none;margin-top:20px;">FillShape </p>
<div class='objectColorHolder'>
<p id ="#3b5998"  style="background:#3b5998;" onclick ="SelectedRaphaelItemOnTheStage.attr({'fill':this.id,'fill-opacity':1});" ></p>
<p id ="#7b4"     style="background:#7b4;"    onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="#C80000"  style="background:#C80000;" onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="white"    style="background:white;"   onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="orange"   style="background:orange;"  onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="violet"   style="background:violet;"  onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="yellow"   style="background:yellow;"  onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="brown"    style="background:brown;"   onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="pink"     style="background:pink;"    onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="#808000"   style="background:#808000;"  onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="#008080"    style="background:#008080;"   onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="#000080"     style="background:#000080;"    onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="purple"    style="background:purple;"   onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
<p id ="black"    style="background:black;"   onclick ="SelectedRaphaelItemOnTheStage.attr('fill',this.id);" ></p>
</div>
<p style='border-top:1px solid grey;margin-top:10px;'></p>
<select style='margin-top:10px;width:80px;' onchange ="SelectedRaphaelItemOnTheStage.attr({'font-size': event.srcElement.value});">
  <option value="10">10</option>
  <option value="13">13</option>
  <option value="20">20</option>
  <option value="25">25</option>
  <option value="30">30</option>
  <option value="40">40</option>
</select>
<p style='border-top:1px solid grey;margin-top:10px;'></p>
<p style='margin-top:10px;'>Font-family: </p>
<select style='margin-top:10px;width:80px;' onchange ="SelectedRaphaelItemOnTheStage.attr({'font-family':event.srcElement.value });">
  <option value="Arial">Arial</option>
  <option value="Tahoma">Tahoma</option>
  <option value="Comic Sans MS">Comic Sans MS</option>
  <option value="Verdana">Verdana</option>
  <option value="Courier new">Courier new</option>
</select>


<select style='margin-top:10px;width:80px;' onchange ="SelectedRaphaelItemOnTheStage.attr({'stroke-width':event.srcElement.value });">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="2">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>



<p style='border-top:1px solid grey;margin-top:10px;'></p><br/>
<div class ="ColorPicker" style="">
<p style="display:block;border:none;">BackgroundFill </p>
<p id ="#3b5998"   style="background:#3b5998;border-radius:8px;" onclick ="masterBackground.attr('fill',this.id)" >1</p>
<p id ="#3B653D"   style="background:#3B653D;border-radius:8px;" onclick ="masterBackground.attr('fill',this.id);" >2</p>
<p id ="#C80000"   style="background:#C80000;border-radius:8px;" onclick ="masterBackground.attr('fill',this.id);" >3</p>
<p id ="#fff"      style="background:#fff;border-radius:8px;"    onclick ="masterBackground.attr('fill',this.id);" >4</p>
<p id ="#7b4"      style="background:#7b4;border-radius:8px;"    onclick ="masterBackground.attr('fill',this.id);" >5</p>
<p id ="#FF6130"   style="background:#FF6130;border-radius:8px;"    onclick ="masterBackground.attr('fill',this.id);" >6</p>
</div>
</div>




<select id='setWidth' onchange="$('#svgContainer').height((this.selectedIndex)*100)">
  <option value="200">200</option>
  <option value="300">300</option>
  <option value="400">400</option>
  <option value="500">500</option>
</select>



</div>


 </div>
 <div style='margin:auto;width:1000px;'><br/>
&nbsp; Choose the tag :
<select id='submitArea' onchange="if (this.selectedIndex) arrangeSubCategories(this.selectedIndex , 'submitSub');">
  <option class='none' value="select">select</option>
  <option value="Algebra">Algebra</option>
  <option value="Arithmetic">Arithmetic</option>
  <option value="Geometry">Geometry</option>
  <option value="Statistics">Data Analysis</option>
</select>



<select id='submitSub' onchange="">

</select>
<input type='button' class='submitButton' value='SubmitQuestion' onclick='SubmitQuestion()'/>
<input type='button' class='submitButton' value='SubmitAnswer'  onclick='SubmitAnswer()'/>
</div>

</div>




    

	

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
        header("location:Login.php");

}



?>
