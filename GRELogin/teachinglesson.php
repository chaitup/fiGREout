<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {

   ?>
   
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <head >
    <meta charset="utf-8">
    <title>The complete online math practice for revised GRE exam - AIM GRE</title>

    <link rel="stylesheet" type="text/css" href="css/messi.css" media="screen" />
    <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="setstatteach.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/headerlogin.css" media="screen" />

	  	
      <script type='text/javascript' src='js/jquery.js'></script>
      <script src="js/raphael.js"></script>
	  <script src="js/UI.js"></script>	
	  <script src="js/raphaelobjects.js"></script>  
	  <script type="text/javascript" src="js/raphael.free_transformUI.js"></script>
      <script src="js/DisplayObjects.js"></script>
      <script type='text/javascript' src='js/messi.min.js'></script>
	  <script type='text/javascript' src='js/messi.min.js'></script>


<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>
	  
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
margin-right:20px;
margin-bottom:20px;
WIDTH:100PX;
height:100px;
border:1px solid #eee;
background:#eee;
border-radius:4px;
cursor:pointer;
background:-webkit-linear-gradient(top,#fff 0%,#eee 100%);
background:-o-linear-gradient(top,#fff 0%,#eee 100%);
background:-ms-linear-gradient(top,#fff 0%,#eee 100%);
background:linear-gradient(top,#fff 0%,#eee 100%);
}

.lessonCover p

{

font : 25px verdana;
padding-left:40px;
padding-top:30px;
color:#888;
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
width:950px;
margin:auto;
padding-left:25px;
}


.title
{

display:inline;
margin-left:20px;


}



sup{

font-size:8px;

}





</style>   


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
<script type="text/javascript" >

var colors = ['#eee' , '#eee' ,'#eee', '#eee' , '#eee' ,'#eee' ,  '#eee' ]



function arrangeColors()


{


$('.lessonCover').each(function(index) {
   
   $(this).css('background', colors[index]);

});

}












function Submitlesson(){


	 var category = $("#submitArea  :selected").val();
	 var subSubmittableCategory = $("#submitSub  :selected").val();


     if(category == undefined)
	 {
	 
	 return false;
	 
	 }
  
	

	R.setSize($('#svgContainer').width(), $('#svgContainer').height());
  
	//alert(document.getElementById('popupArea').innerHTML);
  

  
	var ImageString = document.getElementById('svgContainer').innerHTML ;
    var Jdata = {"imageData":ImageString ,"lessonCategory" : category ,"subCategory" : subSubmittableCategory };
    var Jstring = JSON.stringify(Jdata);
   // AjaxrequestPNG("DeleteComment.php","data="+encodeURIComponent(Jstring));
   
     var jqxhr = $.post("UpdateLesson.php", "data="+encodeURIComponent(Jstring),function(data) {

	                   alert(data);
	 
	 
                        })
.fail(function() { alert("Cannot fetch Sorry"); });

          jqxhr();

}


</script>



		  
<div id="Wrap" >

<div id='allSelectContainer'>
<span class='title'>MainCategory :<span>
<div id='mainSelectConatiner'> 
<select id='mainCategory' onchange="if (this.selectedIndex) arrangeSubCategories(this.selectedIndex ,'subCategory');">
  <option class='none' value="select">Select</option>
  <option value="Algebra">Algebra</option>
  <option value="Arithmetic">Arithmetic</option>
  <option value="Geometry">Geometry</option>
  <option value="Statistics">Data Analysis</option>
</select>
</div>


<span class='title'>&nbsp;&nbsp;&nbsp;SubCategory :<span>
<div id='subSelectConatiner'>
<select id='subCategory'>

</select>
</div>

<input class ='btn small getlessons' value='Get Lessons'  type='button'  id='getLessons' onclick ='getLessons()'/>

</div>

<div id = 'lessonsContainer'>




<script type="text/javascript">
	
	var arithmeticSub =  '<option value="Integers">Integers</option>'+
	                     '<option value="Fractions">Fractions</option>'+
						 '<option value="ExponentsandRoots">Exponents and Roots</option>'+
						 '<option value="Sequences and series">Sequences and series</option>' +
						 '<option value="Decimals">Decimals</option>'+
						 '<option value="RealNumbers">Real Numbers</option>'+
						 '<option value="Ratio">Ratio</option>'+
						 '<option value="Percent">Percent</option>';
	
		var algebraSub =   '<option value="OperationswithAlgebricExpressions">Operations with Algebric Expressions</option>'+
	                     '<option value="RulesofExponents">Rules of Exponents</option>'+
						 '<option value="SolvingLinearEquations">Solving Linear Equations</option>'+
						 '<option value="SolvingQuadraticEquations">Solving Quadratic Equations</option>'+
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
						 '<option value="Distributions od Data , Random Variables, and Probabilty Distributions"> Distributions of Data , Random Variables, and Probabilty Distributions</option>';

	
	
	
   function pop(obj)
   {
   
    Messi.img($(obj).attr('data-src'));
  
   }	
	
	
	
	
	
	
	
	
	function Showup(obj)
	
	{
	

        //var source = obj.src;
	   
	    //$('#Mainimage').attr('src',$(obj).attr('data-src'));
	  
           	Messi.img($(obj).attr('data-src'),{modal: true , modalOpacity : "0.5",titleClass:"eee" });
   
              
   
  
                  $('html').click(function() {
                        $('.messi-closebtn').trigger('click');
                    });

             
                     $('.messi').click(function(event){
                                event.stopPropagation();
                           });
   
   
   
   
   
   
   
   
		
		
	 }
	
	
	
	
	function getLessons(){
	
	
	 var mainCategory = $("#mainCategory   :selected").val();
	 var subCategory =  $("#subCategory    :selected").val();

	 
	 
	 if(subCategory == undefined || mainCategory == undefined)
	 
	 {

	  return false;
	  
	  
	 }
	 
	 
	 
	 
    var Jdata = {"mainCategory" : mainCategory ,"subCategory" : subCategory };
    var Jstring = JSON.stringify(Jdata);
   // AjaxrequestPNG("DeleteComment.php","data="+encodeURIComponent(Jstring));
   
     var jqxhr = $.post("getsortedlessons.php", "data="+encodeURIComponent(Jstring),function(data) {
	           
			   
			   $('#lessonsContainer').html(data);
			   
			         
			   
	 
                        })
.fail(function() { alert("Cannot fetch Sorry"); });

          jqxhr();
	                }
	
	
	
	
	

   	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</script>
	
<?php





if(isset($_GET['mainCategory'] , $_GET['subCategory']))
         {



echo     "<script type='text/javascript'>   var  main = '".$_GET['mainCategory']."';   var  sub = '".$_GET['subCategory']."'; </script>";
		   
		   }


else

     {


					 

	    echo "<p class='informationbox'>Here you could Search lessons by Category . The lessons are organised in an order .Try to Study the lessons number wise .</p> ";

	
	                 

                                                                       

    }












?>



</div>








    

	

	 <script type="text/javascript">

	 




</script>
  
	

	
	<script type="text/javascript">
        
  
    
  // Code that uses other library's $ can follow here.

		var Jsonstring;
		var Type="";
	

	
	
		
	window.onload= function()
	{
	  //alert(document.defaultView.getComputedStyle
	  //(document.getElementById('svgContainer'),null).getPropertyValue('margin-top'));
	  DisplayPanel();
	  UIinterface();
	 // AllowLineDrawing();


		
	     
    }
			


   $(document).ready(function ()
   {
   

	
      $("#btnShowSimple").click(function (e)
      {
         ShowDialog(false);
         e.preventDefault();
      });

 
      $("#btnClose").click(function (e)
      {
         HideDialog();
         e.preventDefault();
      });


	  
	  
	  
	    var element = document.getElementById('mainCategory');
        element.value = main;
		

		
		var index =  (main == "Algebra")?1 : (main == "Arithmetic")?2 : (main == "Geometry")?3:(main == "dataAnalysis")?4: none ;
	  
		
	    arrangeSubCategories(index, 'subCategory');
	
 
        var element = document.getElementById('subCategory');
		
        element.value  = sub ;

	
	   
	   
	    $('#getLessons').trigger('click');
	  
	  
	  
	  


   });

   function ShowDialog(modal)
   {
      $("#overlay").show();
      $("#dialog").fadeIn(300);

      if (modal)
      {
         $("#overlay").unbind("click");
      }
      else
      {
         $("#overlay").click(function (e)
         {
            HideDialog();
         });
      }
   }

   function HideDialog()
   {
      $("#overlay").hide();
      $("#dialog").fadeOut(300);
	  
	  
	  
   } 
        
		
		

	
 </script>
	

 </head>
  
 <body>



		   
		   
 </body>
</html>
<?php


 
}
 else {
      header("Location:http://localhost/GRELogin/securelogout.php");
}

?>
			