<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
sec_session_start();
if(login_check($mysqli) == true) {
 
 
  header("location:userpage.php");
  
  
                               }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
  <script type='text/javascript' src='js/formValidator.js'></script>
  <script type="text/javascript" src="sha512.js"></script>
  <script type="text/javascript" src="forms.js"></script>
  <script type='text/javascript' src='js/jquery.js'></script>
  <script type='text/javascript' src="js/raphael.js"></script>
  <script type="text/javascript" src="js/raphael.free_transform.js"></script>
  <script type='text/javascript' src='js/UI.js'></script>
  <title>Solve by - The online GRE math preperation with hundreds of practice questions</title>
<meta content='AimGre offers comprehensive online New GRE practice questions and New GRE prep with hundreds of videos' name='description'>
<meta content='gre prep, gre videos, gre math,  gre practice questions, gre exams, revised gre, new gre, new exam, revised exam' name='keywords'>


 <link rel="stylesheet" type="text/css" href="login.css" media="screen" />
 
 
 
 
 <style>
 
 .hidden {
    display: none;
}
 
 
 #mainnav form span{ vertical-align:middle; font: 13px verdana;  }
  #mainnav form span :first-child{ margin-left:200px;  }
 #mainnav form img{ vertical-align:middle; font: 12px verdana;  }
 
 </style>
 
 

</head>
<body>

<div id="mainnav">
      

      
	  <form   action="process_login.php" method="post" name="login_form" style='background:#ffff;' >
	  
	  <img src='images/hash.png' STYLE='MARGIN-LEFT:40PX;width:300px;height:100px;'></img>
	  <span style='margin-left:100px;'>GRE &nbsp;&nbsp; |</span>
	  <span>GMAT&nbsp; &nbsp;|</span>
	  <span>SAT &nbsp;&nbsp;|</span>
	  <span>ACT &nbsp;&nbsp;|</span>
	  <span>PSAT &nbsp;&nbsp;</span>
	  <input  class="signinbutton" type="button" value="Login" onclick="formhashLogin(this.form, this.form.password);" tabindex = 3  style='background:orange;' />
	  <input  class="logininput" type="password" name="password" id="password" value="Password" tabindex = 2 onFocus="if(this.value == 'Password') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Password';}" />
	  
	  <input  class="logininput" type="text" name="email" value="Email" tabindex = 1 AUTOCOMPLETE="OFF" onFocus="if(this.value == 'Email') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Email';}" />
       
      </form>
	 


	  
	  
	  </h1>
	  

	



  </div> 


<div id="display" >

<div  id='upperDesignHolder' >

<div id='home_banner'><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Improve your <b>math</b> score.
</h1>
</div>

<div id="LeftDisplay" >

<div class= "leftAlignedHeadings">
<h1 class ='showInterface' onclick='$(".flowerBrackets").css("margin-top","20px");' >Solve and Discuss
</h1>

<h4>
Your solutions are open to everyone for discussion. Share, Discuss and Gain vital insights into concepts and learn innovative shortcuts.</h4>
</div>



<div class= "leftAlignedHeadings">
<h1 class ='showInterface' onclick='$(".flowerBrackets").css("margin-top","100px");' >Unique interface
</h1>

<h4 style=''>
Our unique user interface provide you with the tools to solve math questions and also share the solution for review.</h4>
</div>


<div class= "leftAlignedHeadings">

<h1 class ='showInterface' onclick='$(".flowerBrackets").css("margin-top","210px");'>Lessons with tags
</h1>

<h4>
Stuck with a question? Need assistance? Click Tags and dive deep into relevant lessons. Equip yourself to take on any question with ease. Tag- Click- Go!</h4>
</div>

</div>



<div id="MidDisplay" >
</div>


</div>

</div>

<div id="signin">

<form action="process_register.php" method="post" name="register_form">

    <h1 style='color:black;font-weight:normal'>Dont have an account..Sign up here its fast and easy.</h1>
	
	<div class='loginCredentials'>
    <input id='emailAddress' class="signininput" type="text" name="email" value="Email" AUTOCOMPLETE="OFF" onFocus="if(this.value == 'Email') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Email';}  checkEmail(); " />
	<p>This email is not valid.Please enter the valid email</p>
    </div>
	
	
	<div  class='loginCredentials'>
	<input id='userName' class="signininput" type="text" name="username" value='Username' onFocus="if(this.value == 'Username') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Username';}  checkUsername(); "/>
    <p>The username should contain atleast 5 characters.</p>
	</div>
	
	
	<div  class='loginCredentials'>
    <input id='passWord' class="signininput" type="password" name="password" id="password" value="Passw" onFocus="if(this.value == 'Passw') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Passw'} checkPassword();"  />
	<p>The password should contain atleast 5 characters.</p>
	</div>
	
	
    <input  class="signinbutton" type="button" value="Create account" onclick="formhash(this.form, this.form.password);" />
   
	
</form>



</div>






<div id="Mainwrap">

<div >
 <a style='float:right;padding-top:10px;'></a>
<img src='images/outline.png'></img>
<span >Our unique user interface provide you with the tools to solve math questions and also share the solution for review
</span>

</div>

<div>

<img src='images/draw.png'></img>

  <a style='float:right;padding-top:10px;'></a>
<span >Our practice questions are carefully written and edited to give you the most accurate practice possible.</span>

</div>
<div>

<img src='images/barchart.jpg'></img>

  <a style='float:right;padding-top:10px;'></a>
<span>The solution you have shared is open to everyone and you could know the vital concepts, shortcuts and pitfalls shown by others</span>

</div>
<div style='margin-left:0px;'> 


<img src='images/piechart.jpg'></img>
  <a style='float:right;padding-top:10px;'></a>
<span>You don’t need expensive classes and private tutors. Studying online is easier and we pass the savings on to you.</span>

</div>

<div > 

<img src='images/pencilonpaper.png'></img>
  <a style='float:right;padding-top:10px;'></a>
<span>You don’t need expensive classes and private tutors. Studying online is easier and we pass the savings on to you.</span>

</div>
<div > 

<img src='images/toolclip.jpg'></img>
  <a style='float:right;padding-top:10px;'></a>
<span>You don’t need expensive classes and private tutors. Studying online is easier and we pass the savings on to you.</span>

</div>



</div>


<script>



var Globalattr = {"fill": "#fff" , "fill-opacity":1,"stroke" :"white","stroke-width":2,"cursor" :"pointer" ,"font-size":"60","font-family" :"verdana"}

 function supportsSvg() {
    return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Shape", "1.0")
                        }


			
						

		
		     var R = Raphael(document.getElementById('MidDisplay'),650,400);	
                 
		 
function drawpath( canvas, pathstr, duration, attr, callback )
{
    var guide_path = canvas.path( pathstr ).attr( { stroke: "none", fill: "none" } );
    var path = canvas.path( guide_path.getSubpath( 0, 1 ) ).attr( attr );
    var total_length = guide_path.getTotalLength( guide_path );
    var last_point = guide_path.getPointAtLength( 0 );
    var start_time = new Date().getTime();
    var interval_length = 50;
    var result = path;        

    var interval_id = setInterval( function()
    {
        var elapsed_time = new Date().getTime() - start_time;
        var this_length = elapsed_time / duration * total_length;
        var subpathstr = guide_path.getSubpath( 0, this_length );            
        attr.path = subpathstr;

        path.animate( attr, interval_length );
        if ( elapsed_time >= duration )
        {
            clearInterval( interval_id );
            if ( callback != undefined ) callback();
                guide_path.remove();
        }                                       
    }, interval_length );  
    return result;
}





var hoverClassName = "showInterface" ;

     $('.' + hoverClassName).click(
        function() {
		R.clear();
     drawpath(R,"M0,0L0,400M0,400L630,400M630,400L630,0M630,0L0,0",2000 ,{ stroke: "white", "stroke-width":3,'stroke-dasharray': '','stroke-linecap': "round"});
	   showObjects();
        });
		 

		 
function showObjects(){
		
      var strokeColor = "#fff";
      var fillOpacity  = 1;
	  var strokeWidth = 2;
	  var fillColor = "#fff";
	  

	    R.rect(30, 25,590 ,30).attr({"fill" : "#7b4" ,"fill-opacity":1, "stroke": strokeColor,"stroke-width":1})
			
	    R.path ("M30 65L600 65").attr({ stroke: "white", "stroke-width":1});	
	    R.text(150, 40, "Tag :#DataAnalysis#Probability").attr({"font-size": 13,"font-family": "verdana","font-weight":"normal",fill:"white","cursor" :"pointer"}).click(function(){
	  
	     R.clear();
	  
	  
	    R.path("M0,0L0,400M0,400L620,400M620,400L620,0M620,0L0,0").attr({ stroke: "white", "stroke-width":3,'stroke-dasharray': '','stroke-linecap': "round"});
	  
	  
	  
	  
	var st1 = R.set();
st1.push(
 
   	R.rect(50, 40, 120 ,80).attr({"fill-opacity":0,"stroke" :"white","fill":"white"}),
	R.text(110, 80, "1").attr(Globalattr)
	
);
	  	st1.click(function(){
	  
	    $('#Mainimage').attr('src',"lessons/statistics/2086b21f8f49274138c38d476bee317a84a8aecc1364276260.5893.svg");
	  
        $('#btnShowSimple').trigger('click');

	  }) 	



var st2 = R.set();
st2.push(
 
   	R.rect(250, 40, 120 ,80).attr({"fill-opacity":0,"stroke" :"white","fill":"white"}),
	R.text(310, 80, "2").attr(Globalattr)
	
);



	st2.click(function(){
	  
	    $('#Mainimage').attr('src',"lessons/statistics/2086b21f8f49274138c38d476bee317a84a8aecc1364277349.987.svg");

        $('#btnShowSimple').trigger('click');

	  }) 	 
	  
	  


var st3 = R.set();
st3.push(
 
   	R.rect(450, 40, 120 ,80).attr({"fill-opacity":0,"stroke" :"white","fill":"white"}),
	R.text(510, 80, "3").attr(Globalattr)
	
);
	
	  
	  
	 st3.click(function(){
	  
	    $('#Mainimage').attr('src',"lessons/statistics/2086b21f8f49274138c38d476bee317a84a8aecc1364913648.5339.svg");

        $('#btnShowSimple').trigger('click');

	  }) 
	  
	  
	  
	  
	  
	  


	  
	  
	  });

	     //   R.popup(100,100,"Hi I m a Circle...:");
			
            R.text(327, 80, "A certain jar contains 80 jelly beans  26 white, 18 black, 14 orange, 12 red, and 10 green. ").attr({fill:"white","font-size": 13,"font-family": "verdana","font-weight":"normal"});
		
		     R.text(321, 100, "If a jelly bean is to be chosen at random, what is the probability that the jelly bean will   ").attr({fill:"white","font-size": 13,"font-family": "verdana","font-weight":"normal"});
			 		
		     R.text(120, 120, "be neither orange nor green ").attr({fill:"white","font-size": 13,"font-family": "verdana","font-weight":"normal"});
			 
			 
			 
		//OPTIONS	
		   R.text(70, 150, "O . 1/2").attr({fill:"white","font-size": 13,"font-family": "verdana","font-weight":"normal"});
			
		   R.text(70, 180, "O . 1/4").attr({fill:"white","font-size": 13,"font-family": "verdana","font-weight":"normal"});
	   
     	   R.text(74, 210, "O . 3/10").attr({fill:"white","font-size": 13,"font-family": "verdana","font-weight":"normal"});
		   
		   
		   R.text(74, 240, "O . 7/10").attr({fill:"white","font-size": 13,"font-family": "verdana","font-weight":"normal"});
					  

		   R.text(70, 270, "O . 3/4").attr({fill:"white","font-size": 13,"font-family": "verdana","font-weight":"normal"});
			//OPTIONS
			
			
			
			//Stuck up
			
			
		  //  R.rect(30, 300, 620 ,40).attr({"fill":"#7b4","fill-opacity":1, "stroke": strokeColor,"stroke-width":1})
		    R.text(340, 320, "Stuck with the question?  ").attr({"font-size": 22,"font-family": "verdana","font-weight":"normal","fill":"white"});
		    R.text(340, 350, "Click the tag above the question to navigate to relevant lessons.").attr({"font-size": 13,"font-family": "verdana","font-weight":"normal","fill":"white"});


					 
    
				 
		}			 
					 
					 
/*	 

    <li><input  class="signininput" type="text" name="email" value="Email" AUTOCOMPLETE="OFF"/></li>
    <li><input  class="signininput" type="password" name="password" id="password" value="Password"/></li>
    <li><input class="signinbutton" type="button" value="Create Account" onclick="formhash(this.form, this.form.password);" /></li>
   
	
</form>


	
						
	var Formula = ["(a+b)\u00B2 = a\u00B2 + b\u00B2" ,"y =mx+b","x\u207B\u207F = 1/xn","Area of a Triangle is ½bh"];
		
	$(document).ready(function() {
	var bouncy_ball = R.rect(120, 115,40,40).attr({"fill":"white"});

	function bounce_up() {
	     
		bouncy_ball.animate({y: 150}, 500, '<',bounce_drop);
		
	}	
	function bounce_drop() {
		bouncy_ball.animate({y: 15}, 600, '>', bounce_up);

	}
	bounce_drop();
});		 

var DisplayRect = R.rect(0, 0, 34, 34).attr({fill:"WHITE"})
	                    .click(function(){
						
						       Largerrect = R.rect(200, 200, 100, 100);
                               Largerrect.freeT = R.freeTransform(Largerrect.attr({'fill': 'white',"fill-opacity":0.5})
	                                	 .click(function(){
		                                  SelectedRaphaelItemOnTheStage = this;
	                                      //ft.showHandles();
					                 
									 	  	$('body').keydown(function(e) {
			 
                    if(e.keyCode == 8){
					                     // alert(Node);
					                       SelectedRaphaelItemOnTheStage.freeT.unplug();
                                           SelectedRaphaelItemOnTheStage.remove();   
					         
					     }
                                });	
	  
		                            
										            
		                         
                                           }) ).setOpts({draw: [ 'bbox' ],attrs: { fill: "#eee", stroke: "#000" },size:5, drag:true});
										     


		     //ft.setOpts({ attrs: { fill: "#FFF", stroke: "#000" },size:5,distance: 1.1,rotate:false});
		   
					        // UIinterface();
						});
   DisplayRect.transform("t10,10 s0.8");
	
    var cpath = R.circle(0,0,15).attr({fill:"white"})
	                 .click(function(){
					 
					function newrect()
					
					{   
					 
					  Largecirc =  R.circle(100, 100, 50)    	   
	                  Largecirc.freeT = R.freeTransform(Largecirc.attr({fill:"white","fill-opacity":0.5}).click(function( ){
				 
				      SelectedRaphaelItemOnTheStage = this;
					
						  
	        	    $('body').keydown(function(e) {
			 
                     if(e.keyCode == 8){
					       // R.freeTransform(SelectedRaphaelItemOnTheStage.clone()).setOpts({draw: [ 'bbox' ],attrs: { fill: "#7b4", stroke: "#000" },size:5, drag:true});
					        SelectedRaphaelItemOnTheStage.freeT.unplug();
                            SelectedRaphaelItemOnTheStage.remove();
					
					                   }
                    });	
					
					
				
					this.node.parentNode.onclick = function(){
					
					                       
					
					
					};
				 
				 })).setOpts({draw: [ 'bbox'],attrs: { fill: "#eee", stroke: "#000" },size:5, drag:true});
             
			   }
			   
			   newrect();
						   
						});

   cpath.transform("t50,10 s1");
	
	
	
	var Pencil = R.path("M25.31,2.872l-3.384-2.127c-0.854-0.536-1.979-0.278-2.517,0.576l-1.334,2.123l6.474,4.066l1.335-2.122C26.42,4.533,26.164,3.407,25.31,2.872zM6.555,21.786l6.474,4.066L23.581,9.054l-6.477-4.067L6.555,21.786zM5.566,26.952l-0.143,3.819l3.379-1.787l3.14-1.658l-6.246-3.925L5.566,26.952z").attr({stroke: "black",fill:"white",cursor:"pointer"});
	  Pencil.transform("t140,10 s1");
	  Pencil.click(function()
	                {
					   paperstroke ="#000";
	                   AllowScribble();
	
	                 });
	

		
	var 	TA = R.text(0, 15, "T").attr({cursor:"pointer","font-size": 30, "font-family": "Tahoma, Helvetica, sans-serif",fill:"#fff"});
	  TA.transform("t210,10 s1.1");
	  TA.click(function(){
	  
	  document.getElementById('fname').style.display = "inline-block";
	        document.getElementById('fname').value = "All the Best"
			
									 	  	$('#fname').keydown(function(e) {
			  
                        if(e.keyCode == 8){
						      e.stopPropagation();
					              
					         
					                      }
                                });	
			
			
			
			
			

	             Newtextfield();
	                 });

					 
					 
					 
					 
		 
	  var Line = R.path("M4.082,4.083v2.999h22.835V4.083H4.082zM4.082,20.306h22.835v-2.999H4.082V20.306zM4.082,13.694h22.835v-2.999H4.082V13.694zM4.082,26.917h22.835v-2.999H4.082V26.917z").attr({stroke: "#000",fill:"white",cursor:"pointer" });
		 	  Line.transform("t250,10 s1");
  
     Line.click(function()
	  {
	    AllowLineDrawing();
	  });*/



	   
	  

</script>

 <script type='text/javascript'>



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



<input type="button" id="btnShowSimple" value="Simple Dialog" style='display:none;' />

    
<br /><br />       
    
<div id="output"></div>
    
<div id="overlay" class="web_dialog_overlay"></div>
    
<div id="dialog" class="web_dialog">
   <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
      <tr>
         <td class="web_dialog_title">fiGREout</td>
         <td class="web_dialog_title align_right">
            <a href="#" id="btnClose">X</a>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td id = 'popupArea' colspan="2" style="padding-left: 15px;">
              <img id='Mainimage' src='images/drawingblackborder.png'/>
         </td>
      </tr>

   
   </table>
</div>
















<div id='footer'>

<div><a>fiGREout</a><a>BLOG.</a><a>ABOUT.</a><a>SUPPORT.</a><a>CONTACT.</a></div>
  <p class='copyright'>
     2012 &copy; Goodness me educational solutuons.
    <span class="links"><a >Terms of Service</a> | <a>Privacy Policy</a></span>
  </p>
</div>


</body>


</html>

