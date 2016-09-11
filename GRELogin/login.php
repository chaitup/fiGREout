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

<title> fiGREout - The Online GRE Math Preperation with Hundreds of Practice Questions and Lessons</title>
<meta content='Solveby offers comprehensive online New GRE practice questions and New GRE prep with hundreds of Lessons and explanations' name='description'>
<meta content='GRE prep, GRE videos, GRE math,  GRE practice questions, GRE exams, revised GRE, new GRE, new exam, revised exam' name='keywords'>

  <link rel="stylesheet" type="text/css" href="login.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/headerlogout.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/messi.css" media="screen" />
  <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
  <script type='text/javascript' src='js/formValidator.js'></script>
  <script type="text/javascript" src="sha512.js"></script>
  <script type="text/javascript" src="forms.js"></script>
  <script type='text/javascript' src='js/jquery.js'></script>
  <script type='text/javascript' src="js/raphael.js"></script>
  <script type="text/javascript" src="js/raphael.free_transform.js"></script>
  <script type='text/javascript' src='js/UI.js'></script>
  <script type='text/javascript' src='js/messi.min.js'></script>
  <script  type='text/javascript' src="js/donut.js"></script>
  <script src="js/jquery-ui-1.8.18.custom.min.js"></script>
  <script src="js/jquery.smooth-scroll.min.js"></script>
  <script src="js/lightbox.js"></script>
 


</head>



<body>
<a id='one' href='lessons/statistics/2086b21f8f49274138c38d476bee317a84a8aecc1372324970.0821.svg' rel='lightbox[lessons]'></a>
<a id='two' href='lessons/statistics/2086b21f8f49274138c38d476bee317a84a8aecc1372329467.3991.svg' rel='lightbox[lessons]'></a>
<a id='three' href='lessons/statistics/2086b21f8f49274138c38d476bee317a84a8aecc1368447016.2741.svg' rel='lightbox[lessons]'></a> 


<div class='enclosure'>
<div id='mainNavigation'>

<div >
<h1 style='margin-top:20px;'> <img G src='images/logo_pic.jpg'></img></h1>
</div>



<div id='Mainlinks' >
<ul>
<li><a href="./login.php">Home</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./sampletest.php"> Sample Test</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./aboutTheTest.php"> About GRE &#174;</a></li>
</ul>
</div>


<div id='AccountStatus' >
<ul>
<input  class='btn small orange' onclick='register();' type='button' value='Sign up'/>
<input  class='btn small gray'   onclick='Log();'       type='button' value='Log in'/>
</ul>
</div>




</div>
</div>



<div id="display"  >
<br/>
<div  id='upperDesignHolder' >

<div id='home_banner'>
</div>

<div id="LeftDisplay" >


<div class= "leftAlignedHeadings">

<h1 class ='showInterface' onclick='$(".flowerBrackets").css("margin-top","210px");'> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M3.739,13.619c0,0,3.516-4.669,5.592-3.642c2.077,1.027-0.414,2.795,1.598,3.719c2.011,0.924,5.048-0.229,4.376-2.899c-0.672-2.67-1.866-0.776-2.798-2.208c-0.934-1.432,4.586-4.59,4.586-4.59s3.361,6.651,4.316,4.911c1.157-2.105,3.193-4.265,5.305-1.025c0,0,1.814,2.412,0.246,3.434s-2.917,0.443-3.506,1.553c-0.586,1.112,3.784,4.093,3.784,4.093s-2.987,4.81-4.926,3.548c-1.939-1.262,0.356-3.364-2.599-3.989c-1.288-0.23-3.438,0.538-3.818,2.34c-0.13,2.709,1.604,2.016,2.797,3.475c1.191,1.457-4.484,4.522-4.484,4.522s-1.584-3.923-3.811-4.657c-2.227-0.735-0.893,2.135-2.917,2.531c-2.024,0.396-4.816-2.399-3.46-4.789c1.358-2.391,3.275-0.044,3.441-1.951C7.629,16.087,3.739,13.619,3.739,13.619z" stroke="black" fill="white"  transform="scale(1)" />
      </svg> &nbsp;    Lessons with tags 
</h1>

<h4>
Stuck with a question? Need assistance&nbsp;?  &nbsp;&nbsp;Click 
Tags and dive deep into relevant lessons . Equip
yourself to take on any question with ease. Tag- 
Click- Go!</h4>
</div>



<div class= "leftAlignedHeadings">
<h1 class ='showInterface' onclick='$(".flowerBrackets").css("margin-top","20px");' > <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M15.985,5.972c-7.563,0-13.695,4.077-13.695,9.106c0,2.877,2.013,5.44,5.147,7.108c-0.446,1.479-1.336,3.117-3.056,4.566c0,0,4.015-0.266,6.851-3.143c0.163,0.04,0.332,0.07,0.497,0.107c-0.155-0.462-0.246-0.943-0.246-1.443c0-3.393,3.776-6.05,8.599-6.05c3.464,0,6.379,1.376,7.751,3.406c1.168-1.34,1.847-2.892,1.847-4.552C29.68,10.049,23.548,5.972,15.985,5.972zM27.68,22.274c0-2.79-3.401-5.053-7.599-5.053c-4.196,0-7.599,2.263-7.599,5.053c0,2.791,3.403,5.053,7.599,5.053c0.929,0,1.814-0.116,2.637-0.319c1.573,1.597,3.801,1.744,3.801,1.744c-0.954-0.804-1.447-1.713-1.695-2.534C26.562,25.293,27.68,23.871,27.68,22.274z" stroke="black" fill="white"  transform="scale(1)" />
      </svg> &nbsp;   Solve and Discuss
</h1>

<h4>
Your "shared" solutions are open to everyone for 
discussion. Share, Discuss and Gain vital insights
 into concepts and learn innovative shortcuts.</h4>
</div>









<div class= "leftAlignedHeadings">
<h1 class ='showInterface' onclick='$(".flowerBrackets").css("margin-top","100px");' > <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M27.87,7.863L23.024,4.82l-7.889,12.566l4.842,3.04L27.87,7.863zM14.395,21.25l-0.107,2.855l2.527-1.337l2.349-1.24l-4.672-2.936L14.395,21.25zM29.163,3.239l-2.532-1.591c-0.638-0.401-1.479-0.208-1.882,0.43l-0.998,1.588l4.842,3.042l0.999-1.586C29.992,4.481,29.802,3.639,29.163,3.239zM25.198,27.062c0,0.275-0.225,0.5-0.5,0.5h-19c-0.276,0-0.5-0.225-0.5-0.5v-19c0-0.276,0.224-0.5,0.5-0.5h13.244l1.884-3H5.698c-1.93,0-3.5,1.57-3.5,3.5v19c0,1.93,1.57,3.5,3.5,3.5h19c1.93,0,3.5-1.57,3.5-3.5V11.097l-3,4.776V27.062z" stroke="black" fill="white"  transform="scale(1)" />
      </svg>  &nbsp;   Unique interface 
</h1>

<h4 style=''>
Our unique user interface provides you with &nbsp;the 
"Canvas" to solve math questions and also share the 
solution for review.</h4>
</div>

















</div>



<div id="MidDisplay" >
</div>


</div>

</div>


<div id='Why'> 
<h1> Why you’ll love studying with us </h1>
<p> Lessons, Tags, User explanations, finding solutions is so easier now.</p>
</div>



<div id="Mainwrap">

<div>
<p><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M21.25,8.375V28h6.5V8.375H21.25zM12.25,28h6.5V4.125h-6.5V28zM3.25,28h6.5V12.625h-6.5V28z"   transform="scale(1)" />
      </svg></p>
<h5> Statistics & Analysis</h5>
<span >Category and Subject wise Analysis gives you an overview of which questions you are best at, and which questions you should study for.
</span>
</div>

<div>
<p><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M27.87,7.863L23.024,4.82l-7.889,12.566l4.842,3.04L27.87,7.863zM14.395,21.25l-0.107,2.855l2.527-1.337l2.349-1.24l-4.672-2.936L14.395,21.25zM29.163,3.239l-2.532-1.591c-0.638-0.401-1.479-0.208-1.882,0.43l-0.998,1.588l4.842,3.042l0.999-1.586C29.992,4.481,29.802,3.639,29.163,3.239zM25.198,27.062c0,0.275-0.225,0.5-0.5,0.5h-19c-0.276,0-0.5-0.225-0.5-0.5v-19c0-0.276,0.224-0.5,0.5-0.5h13.244l1.884-3H5.698c-1.93,0-3.5,1.57-3.5,3.5v19c0,1.93,1.57,3.5,3.5,3.5h19c1.93,0,3.5-1.57,3.5-3.5V11.097l-3,4.776V27.062z"  transform="scale(1)" />
      </svg></p>
<h5> Accurate Practice</h5>
<span >Our practice questions are carefully written and edited to give you the most accurate practice possible.</span>
</div>


<div>
<p><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M29.548,3.043c-1.081-0.859-2.651-0.679-3.513,0.401L16,16.066l-3.508-4.414c-0.859-1.081-2.431-1.26-3.513-0.401c-1.081,0.859-1.261,2.432-0.401,3.513l5.465,6.875c0.474,0.598,1.195,0.944,1.957,0.944c0.762,0,1.482-0.349,1.957-0.944L29.949,6.556C30.809,5.475,30.629,3.902,29.548,3.043zM24.5,24.5h-17v-17h12.756l2.385-3H6C5.171,4.5,4.5,5.171,4.5,6v20c0,0.828,0.671,1.5,1.5,1.5h20c0.828,0,1.5-0.672,1.5-1.5V12.851l-3,3.773V24.5z"   transform="scale(1)" />
      </svg></p>
<h5>Multiple approaches</h5>
<span> Since each user's explanation for a particular question is open to every one, you can get to know and choose best explanation.</span>
</div>




</div>


<script>

	var textProperties = {"fill":"white","font-size": 13,"font-family": "verdana","font-weight":"normal" ,'text-anchor': 'start'}
	
	$(document).ready(function() {
	
	 $('.showInterface:eq(0)').trigger('click');
	
	 
	});

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


     $(".showInterface:eq(0)").click(
        function() {
		//$(this).css({"text-decoration" : "underline"});
	 R.clear();
   drawpath(R,"M0,0L0,400M0,400L577,400M577,400L577,0M577,0L0,0", 2000 ,{ stroke: "white", "stroke-width":6,'stroke-dasharray': '','strokelinecap': "round"});
	 showObjects();
	                 
        });

     $(".showInterface:eq(2)").click(
        function() {
		//$(this).css({"text-decoration" : "underline"});
	 R.clear();
     drawpath(R,"M0,0L0,400M0,400L577,400M577,400L577,0M577,0L0,0", 2000 ,{ stroke: "white", "stroke-width":6,'stroke-dasharray': '','strokelinecap': "round"});
	
	                 
        });
		 
     $(".showInterface:eq(1)").click(
        function() {
		//$(this).css({"text-decoration" : "underline"});
	 R.clear();
     drawpath(R,"M0,0L0,400M0,400L577,400M577,400L577,0M577,0L0,0", 2000 ,{ stroke: "white", "stroke-width":6,'stroke-dasharray': '','strokelinecap': "round"});
	 solveAndDiscuss();
	                 
        });
		 
function showObjects(){
		
      var strokeColor = "#fff";
      var fillOpacity  = 1;
	  var strokeWidth = 2;
	  var fillColor = "#fff";
	  

	 
			
	    R.path ("M30 65L560 65").attr({ stroke: "white", "stroke-width":1});
		R.path("M3.739,13.619c0,0,3.516-4.669,5.592-3.642c2.077,1.027-0.414,2.795,1.598,3.719c2.011,0.924,5.048-0.229,4.376-2.899c-0.672-2.67-1.866-0.776-2.798-2.208c-0.934-1.432,4.586-4.59,4.586-4.59s3.361,6.651,4.316,4.911c1.157-2.105,3.193-4.265,5.305-1.025c0,0,1.814,2.412,0.246,3.434s-2.917,0.443-3.506,1.553c-0.586,1.112,3.784,4.093,3.784,4.093s-2.987,4.81-4.926,3.548c-1.939-1.262,0.356-3.364-2.599-3.989c-1.288-0.23-3.438,0.538-3.818,2.34c-0.13,2.709,1.604,2.016,2.797,3.475c1.191,1.457-4.484,4.522-4.484,4.522s-1.584-3.923-3.811-4.657c-2.227-0.735-0.893,2.135-2.917,2.531c-2.024,0.396-4.816-2.399-3.46-4.789c1.358-2.391,3.275-0.044,3.441-1.951C7.629,16.087,3.739,13.619,3.739,13.619z").attr({ stroke: "white" ,fill:"#fff"}).transform("t20,25 s0.8")
		
		
		
		
	    R.text(60, 40, "[ #DataAnalysis#Probability]").attr({"fill":"white","font-size": 16,"font-family": "verdana","font-weight":"bold" ,'text-anchor': 'start' , "cursor":"pointer"}).click(function(){
	  
	    R.clear();
	  
	    drawpath(R,"M0,0L0,400M0,400L577,400M577,400L577,0M577,0L0,0", 2000 ,{ stroke: "white", "stroke-width":6,'stroke-dasharray': '','strokelinecap': "round"});
	  
	  
 	R.text(30, 40, "Lessons related to this quesiton..").attr({"fill":"white","font-size": 13,"font-family": "verdana" ,'text-anchor': 'start'})
	  
	var st1 = R.set();
 st1.push(
 
   	R.rect(30, 60, 120 ,80).attr({"fill-opacity":0,"stroke" :"white","fill":"white"}),
	R.text(90, 100, "1").attr(Globalattr)
	
);
	  	st1.click(function(){
	  
         $('#one').trigger('click');
      //  Messi.img('lessons/statistics/2086b21f8f49274138c38d476bee317a84a8aecc1364276260.5893.svg');



	  }) 	



var st2 = R.set();
st2.push(
 
   	R.rect(230, 60, 120 ,80).attr({"fill-opacity":0,"stroke" :"white","fill":"white"}),
	R.text(290, 100, "2").attr(Globalattr)
	
);



	st2.click(function(){
	  
           $('#two').trigger('click');

       // Messi.img('lessons/statistics/2086b21f8f49274138c38d476bee317a84a8aecc1364277349.987.svg');
	  }) 	 
	  
	  


var st3 = R.set();
st3.push(
 
   	R.rect(430, 60, 120 ,80).attr({"fill-opacity":0,"stroke" :"white","fill":"white"}),
	R.text(490, 100, "3").attr(Globalattr)
	
);
	
	  
	  
	 st3.click(function(){
	  
	          $('#three').trigger('click');
      
   

	  }) 
	  
	  
	  
	  
	  });

	     //   R.popup(100,100,"Hi I m a Circle...:");
			
             R.text(25, 85, "A certain jar contains 80 jelly beans  26 white, 18 black, 14 orange, 12 red and  ").attr(textProperties);
		
		     R.text(25, 102, " 10 green. If a jelly bean is to be chosen at random, what is the probability that    ").attr(textProperties);
			 		
		     R.text(25, 119, "the jelly bean will be neither orange nor green ? ").attr(textProperties);
			 
			 
			     //  R.image('images/confusion.svg', 100, 220, 128, 146);
				  // R.image('images/questionmark.svg',  130, 160, 300, 130);
	
		   R.text(50,  150, "A . 1").attr(textProperties);
			
		   R.text(130, 150, "B . 8").attr(textProperties);
	   
     	   R.text(210, 150, "C . 3").attr(textProperties);
		   R.text(290, 150, "D . 7").attr(textProperties);
		   R.text(370, 150, "E . 3").attr(textProperties);

     
		  
		  
		        R.path ("M16,4.938c-7.732,0-14,4.701-14,10.5c0,1.981,0.741,3.833,2.016,5.414L2,25.272l5.613-1.44c2.339,1.316,5.237,2.106,8.387,2.106c7.732,0,14-4.701,14-10.5S23.732,4.938,16,4.938zM16.982,21.375h-1.969v-1.889h1.969V21.375zM16.982,17.469v0.625h-1.969v-0.769c0-2.321,2.641-2.689,2.641-4.337c0-0.752-0.672-1.329-1.553-1.329c-0.912,0-1.713,0.672-1.713,0.672l-1.12-1.393c0,0,1.104-1.153,3.009-1.153c1.81,0,3.49,1.121,3.49,3.009C19.768,15.437,16.982,15.741,16.982,17.469z").attr({ stroke: "white", "stroke-width":1, fill:"0-#fff:5-#eee:100"}).transform("t264,205 s3") 
		  
		  
		  
		  
		  
		  
			
			R.text(150, 300, "Stuck with the Question ? Need help ? \n Click the tag above the question and \n navigate to relevant lessons. ").attr({"fill":"white","font-size": 15 , "font-family": "Tahoma","font-weight":"normal" ,'text-anchor': 'start','letter-spacing':'1px'});

				 
		}			 
					 
					 
	  
function solveAndDiscuss(){


	 R.clear();
     drawpath(R,"M0,0L0,400M0,400L577,400M577,400L577,0M577,0L0,0",2000 ,{ stroke: "white", "stroke-width":6,'stroke-dasharray': '','strokelinecap': "round"});

      R.image('images/solveand.svg', 10, 10, 550, 350).attr({"opacity":0}).show().animate({ opacity : 1 }, 1500);

}	  
	  
	  

</script>






<script type='text/javascript'>

  function register()
   {
   
   
new Messi('<form action="process_register.php" method="post" name="register_form">'
 +
 
'<h2 style="font:25px Cambria "><b>Sign up.. its fast and easy !</b></h2><hr/><br/>'

+

'<div class="loginCredentials"><input  id="truemail" class="signininput" type="text" name="truemail" value="Email" /><p> This email is not valid.Please enter the valid email.</p></div>'

+

'<div  class="loginCredentials"><input id="truename" class="signininput" type="text" name="truename" value="Name" /><p> The username should contain atleast 6 characters.</p></div>'

 +
 
'<div  class="loginCredentials"><input id="truepass" class="signininput" type="password" name="truepass"  value="Pasor" /><p> The password should contain atleast 6 characters.</p></div>' 
 
 
+
 
'<input  class="fb" type="button" value="Create account" id="create" />'

+

'</form>', { modal: true , modalOpacity : "0.4" });



    $('#create').click(function(){formhash(this.form ,this.form.truepass); });

    $('#truemail').click(function(){if(this.value == 'Email') this.value = "";});
   
    $('#truemail').blur(function(){if(this.value == '') this.value = "Email" ;});
   
    $('#truepass').click(function(){if(this.value == 'Pasor') this.value = "" ;});
   
    $('#truepass').blur(function(){if(this.value == '') this.value = "Pasor" ;});

  
    $('#truename').click(function(){if(this.value == 'Name') this.value = "" ;});
   
    $('#truename').blur(function(){if(this.value == '') this.value = "Name" ;});




     
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   

function Log()
   {
new Messi('<form  action="process_login.php" method="post" name="login_form" style="background:#eef2f7;display:block;" ><h2 >Can I see some ID ?<br/></h2><p>Log in using the form below</p><hr/><br/>'  +

'<span>Email:<br/></span><input style="background:#ffff;display:inline-block;"  class="logininput"   id="mailfield" type="text" name="email" value="email" tabindex = 1 AUTOCOMPLETE="OFF" /><br/><br/>'   +

'<span>Password:<br/></span><input  style="background:#ffff;display:inline-block;" class="logininput" type="password"  name="password" id="passfield" value="password" tabindex = 2  /><br/><br/> '            +

'<input class = "fb"  type="button" value="Log in" onclick="formhashLogin(this.form, this.form.password);" tabindex = 3  /> <span style="font-size:11px;"><a>&nbsp;&nbsp;&nbsp;&nbsp;Forgot password ?</a></span><br/><hr/>' +


'</form>', { modal: true , modalOpacity : "0.4" });


    $('#mailfield').click(function(){if(this.value == 'email') this.value = "" ;});
   
    $('#mailfield').blur(function(){if(this.value == '') this.value = "email" ;});
   
    $('#passfield').click(function(){if(this.value == 'password') this.value = "" ;});
   
    $('#passfield').blur(function(){if(this.value == '') this.value = "password" ;});

     
   }   
   
 




 
 
 
</script>


 <div id='footer'>

               <div>
                 
				 <a>fi<b>GRE</b>out</a><a>BLOG</a><a>ABOUT</a><a>CONTACT</a>
				  
			   </div>
                  
				  
			<p class='copyright'>
                     GRE® is a registered trademark of Educational Testing Service (ETS). This website is not endorsed or approved by ETS . Practice questions available on fiGREout are not official GRE Test questions. The practice tests on this website are simulations.
             </p>
  </div> 


 
 
</body>
<script type='text/javascript'>



document.getElementById("text1").text = "<tspan>e = mc <tspan baseline-shift = 'super'>x</tspan>" ;
 
 
 
</script>










</html>
<?


	 if(isset($_GET['popmessi']) && $_GET['popmessi'] = 1)	
	
	{
	
           echo "<script type='text/javascript'>
		                
						  Log();
	
		        </script>";
	
	}	


        randomUserStats($mysqli);


?>
