<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
sec_session_start();
if(login_check($mysqli) == true) {
 
 
           
  
  
                               }
							  
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>

<title> fiGREout - GRE Sample Test</title>
<meta content='Solveby offers comprehensive online New GRE practice questions and New GRE prep with hundreds of Lessons and explanations' name='description'>
<meta content='GRE prep, GRE videos, GRE math,  GRE practice questions, GRE exams, revised GRE, new GRE, new exam, revised exam' name='keywords'>

  <link rel="stylesheet" type="text/css" href="css/headerlogout.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/sampletest.css" media="screen" />
  <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
   <script type='text/javascript' src='js/formValidator.js'></script>
  <script type="text/javascript" src="sha512.js"></script>
  <script type="text/javascript" src="forms.js"></script>
  <script type='text/javascript' src='js/jquery.js'></script>
  <script type='text/javascript' src='js/UI.js'></script>


 
 
 
 
 
 
 
 
 
 
 
 


</head>



<body>

<div class='enclosure'>
<div id='mainNavigation'>

<div >
<a href='login.php'><h1 style='margin-top:20px;'> <img G src='images/logo_pic.jpg'></img></h1></a>
</div>



<div id='Mainlinks' >
<ul>
<li><a href="./login.php">Home</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./sampletest.php"> Sample Test</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./aboutTheTest.php"> About GRE&#174;</a></li>
</ul>
</div>

<!--
 <div id='AccountStatus' >
<ul>
<input  class='btn small orange' onclick='register();' type='button' value='Sign up'/>
<input  class='btn small gray'   onclick='Log();'       type='button' value='Log in'/>
</ul>
</div>  --->




</div>
</div>

<br/>
<hr/>

<div class ='Wrap'>
<div id="big" ><h4 id="tagLine"></h4>
<br/>
<p id="Ques">Sample GRE Quant practice test.Please try to Answer all the questions.Total number of questions are 16.</p><br/>
<img id='mage'></img><br/>
<br/>
</div>
<br/>

<div ID='buttoncontainer'>
<input type="button" class="btn small greenFloatLeft" value="StartTheTest" onclick='startTest();$(this).hide(); $(this).next().css("display","block");$(this).next().trigger("click")';  />
<input type="button" class="btn small magentaFloatLeftHide" value="Submit" id='sub' />
</div>
</div>



 <script type='text/javascript'>

 
 function destroyvariables(){
  
 ARITHMETIC  = 0;
 ALGEBRA  = 0; 
 GEOMETRY  = 0; 
 DATAANALYSIS = 0; 
 
  UserAnswerC1 = null;
  CorerctAnswerC1 = null;
  TAG = null;
 
  isStarted = false;
 
 
 
 }
 
 
 
 
 var ARITHMETIC  = 0;
 var ALGEBRA  = 0; 
 var GEOMETRY  = 0; 
 var DATAANALYSIS = 0; 
 
 var  UserAnswerC1;
 var  CorerctAnswerC1;
 var  TAG;
 currentquestion  = 1 ;
 var isStarted = false;
 
 
function checktagandscore(t)

{

//console.log(t);

if(t == 'Algebra'){ALGEBRA = ALGEBRA + 1 ;}
if(t == 'Arithmetic'){ARITHMETIC = ARITHMETIC + 1;}
if(t == 'Geometry'){GEOMETRY = GEOMETRY + 1;}
if(t == 'Dataanalysis'){DATAANALYSIS = DATAANALYSIS + 1;}

//alert(t);
}
 
 
 
 
 
 
 
 
 
 
 
 function Evaluate()
 
 
 {
 
 	$("input[name=C1]").each(
                  function(index) {
                             
							 
							 if(this.checked == true){
							 
							 
							                console.log(CorerctAnswerC1);
							 
							 
												if(index == CorerctAnswerC1)
												{
												  
				                                   
				                                    
				                                       
													   
													 checktagandscore(TAG);
   
				 
												      
												}
													
													         
							                       
							 
							                         }
							 
							 
							 
                            }
                                    );
 

 
 }
 
 
 
 
 
 
 
 
 
 
 
var currentquestion = 1;
   



   
   function startTest()
   {
   

   
   $('#sub').click(function(e){
   
   
   
   if($("input[name=C1]:checked").length == 0 && isStarted == true)
   {
    
	     
	
         alert('Please choose the answer')
         return false;
   
   }
   
   
 
   
 
     Evaluate();
	  
  
     Jobject = {"num": currentquestion}
        
		
	 var Jstring = JSON.stringify(Jobject); 
   
  
      var jqxhr = $.post("homepageexam.php", "data="+encodeURIComponent(Jstring), function(data) {
      
	  
	  if(currentquestion >= 16){
	  	 
		 $('#sub').hide();
	    $('#big li').remove();
		
		$('#big').html('<table class="gridtable"><tr><th>Section</th><th>% Correct</th></tr><tr><td>Arithmetic</td><td>'+ (ARITHMETIC/4)*100 +'%</td></tr><tr><td>Algebra</td><td>'+ (ALGEBRA/4)*100 +'%</td></tr><tr><td>Geometry</td><td>'+ (GEOMETRY/4)*100 +'%</td></tr><tr><td>DataAnalysis</td><td>'+ (DATAANALYSIS/4)*100 +'%</td></tr></table><br/><br/><br/><p>Join our network of GRE test takers and access hundreds of questions ,lessons and explanations.</p>');
		
         var  val1 =  ARITHMETIC + ALGEBRA + GEOMETRY + DATAANALYSIS;
		
		  var val2 = 16 - val1;
		   
		    if (val2 == 0)  {val2 = 0.01}
		
		
		  	var n = Raphael("big", 400 ,220);  
  
	  		
		     n.text(100, 20, "Summary").attr({"font-size": 23,"font-family": "Tahoma","font-weight":"normal"});
			 
			 	 var values = [val1, val2],
                 labels = [val1 * 100/16 , 100 - (val1 * 100/16)];
		   
		      var pie = n.donutChart(100, 127, 70, 0, values, labels, "#fff");
			   	 pie.attr({ "font-size": 13, "font-family": "Tahoma, Helvetica, sans-serif" });
				 
				 
				 
		
				 destroyvariables(); 
				
				
			return false;
	  
	      }
	  
	  
	  

	  
	 
       $('#big li').remove();
	  
       var Options = data.getElementsByTagName("Option");

	   
	  
	    $('#tagLine').html('#' + data.getElementsByTagName("QText")[0].getAttribute('tag'));
	   
	    TAG = data.getElementsByTagName("QText")[0].getAttribute('tag');
		
		CorerctAnswerC1 = data.getElementsByTagName("QText")[0].getAttribute('correct');
		
		
		
		
        $('#Ques').html(replacecharacters(data.getElementsByTagName("QText")[0].childNodes[0].nodeValue));
		
	   var nodeV = data.getElementsByTagName("Image")[0] ? data.getElementsByTagName("Image")[0].getAttribute('src') : false ;
 
		  	if(nodeV != false){
			
			                $('#mage').css("display" ,'block');
		                    $('#mage').attr("src" , nodeV );
		 	
	                 } else {
					 
				             $('#mage').css("display" ,'none');
					 
					 }
 
 
 
   for (var i=0;i < Options.length ;i++)
  {
  
       var opt = replacecharacters(Options[i].childNodes[0].nodeValue);
       document.getElementById('big').innerHTML += "<li  style='list-style-type:none;margin-bottom:5px;'> <input name='C1' type='radio' />"+ opt +"</li>";


  }

               isStarted = true;
               currentquestion = currentquestion + 1 ;
		
  }

 
                                  ,"xml")
								 
         .fail(function() { 
alert("Sorry  error occurred ,Check your conection or your session might have expired"); });


  
  

   
   
   
   })
   
   }
   
  

</script>


 


<script type='text/javascript'>

  function register()
   {
   
   
new Messi('<form action="process_register.php" method="post" name="register_form">'
 +
 
'<h2 style="font:21px Trebuchet MS bold;">Sign up.. its fast and easy !</h2><p style="font:13px Trebuchet MS ;">Sign in using the form below.</p><hr/><br/>'

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
   
 		function replacecharacters(str){
		
		
		return str.replace(/lessthan/g, '<').replace(/greaterthan/g, '>').replace(/super1/g, '\u00B9').replace(/super2/g,'\u00B2').replace(/super3/g, '\u00B3').replace(/super4/g,'\u2074').replace(/super5/g,'\u2075').replace(/super6/g,'\u2076').replace(/super7/g,'\u2077').replace(/super8/g,'\u2078').replace(/super9/g,'\u2079').replace(/superx/g,'\u02e3').replace(/superplus/g,'\u207A').replace(/superminus/g,'\u207B').replace(/supern/g,'\u207F').replace(/mathpi/g,'\u03C0').replace(/lessequal/g,'\u2264').replace(/root/g,'\u221A').replace(/superm/g,'\u1d50').replace(/mathminus/g,'-');;
		

		}  
 
</script>


<div id='footer'>

<div><a>fiGREout</a><a>BLOG.</a><a>ABOUT.</a><a>SUPPORT.</a><a>CONTACT.</a></div>
  <p class='copyright'>
GRE  is a registered trademark of Educational Testing Service (ETS). This website is not endorsed or approved by ETS.
Practice questions available on localhost are not official GRE Test questions. The practice tests on this website are simulations.
  </p>
</div>


 
 
</body>


</html>
<?


	 if(isset($_GET['starttest']))	
	
	{
	
           echo "<script type='text/javascript'>
		                
						  startTest();
	
		      </script>";
	
	}	









?>
