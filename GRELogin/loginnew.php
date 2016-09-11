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
  <script type='text/javascript' src='js/formValidator.js'></script>
  <title>fiGREout- The online GRE math preperation with hundreds of practice questions</title>
<meta content='AimGre offers comprehensive online New GRE practice questions and New GRE prep with hundreds of videos' name='description'>
<meta content='gre prep, gre videos, gre math,  gre practice questions, gre exams, revised gre, new gre, new exam, revised exam' name='keywords'>


 <link rel="stylesheet" type="text/css" href="login.css" media="screen" />
 
 
 
 
 <style>
 
 .hidden {
    display: none;
}
 
 
 
 
 
 </style>
 
 
 
 
 
 

 
</head>
<body>

<div id="mainnav" style=''>


   <form   action="process_login.php" method="post" name="login_form" >
	  <input  class="signinbutton" type="button" value="Login" onclick="formhashLogin(this.form, this.form.password);" tabindex = 3 />
	  <input  class="logininput" type="password" name="password" id="password" value="Password" tabindex = 2 onFocus="if(this.value == 'Password') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Password';}" />
	  <input  class="logininput" type="text" name="email" value="Email" tabindex = 1 AUTOCOMPLETE="OFF" onFocus="if(this.value == 'Email') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Email';}" />
  </form>


  </div> 


<div id="display" >

<div id='home_banner'><h1>Improve your <b>math</b> score.</h1>
</div>

<div id="LeftDisplay" style=''>

<h1 style=''>Solve and Discuss
</h1>
<h4>
The solution you have shared is open to everyone and you could know the vital concepts, shortcuts and pitfalls shown by others.</h4>

<h1 id='showInterface' >Unique interface
</h1>
<h4 style=''>
Our unique user interface provide you with the tools to solve math questions and also share the solution for review.</h4>

<h1 style='color:white;'>Make flash cards.
</h1>
<h4>
Our unique user interface provide you with the tools to solve math questions and also share the solution for review.</h4>
</div>

<div id="MidDisplay" style='postion:fixed;margin-right:50px;'>

<div style='postion:relative;width:600px;'>
</div>



</div>




</div>
</div>
<div id='lowerDiv'>
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



<hr style='width:1000px;margin:auto;margin-top:20px;height:3px;background:#888;'/>

<div id="Mainwrap">

<div >
 <a style='float:right;padding-top:10px;'></a>
<img src='images/outline.png'></img>
<span >Our unique user interface provide you with the tools to solve math questions and also share the solution for review
</span>

</div>
<div>

<img src='images/cloud.svg'></img>

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

















 function supportsSvg() {
    return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Shape", "1.0")
                        }


			
						

		
		     var R = Raphael(document.getElementById('MidDisplay'),700,400);	
                 
		 
				 
				 
				 


	 
		






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





var hoverDivName = "showInterface";

     $('#' + hoverDivName).click(
        function() {
		R.clear();
     drawpath(R,"M30,0L30,400M30,400L700,400M700,400L700,0M700,0L30,0",2000 ,{ stroke: "white", "stroke-width":2});
	   showObjects();
        });
		 

		 
		 function showObjects(){
		 
		 
      var strokeColor = "#fff";
      var fillOpacity  = 0;
	  var strokeWidth = 2;
	  var fillColor = "#fff";
	  
	  
	  				 
				 
				var st = R.set();
st.push(
  
    R.path("M196,52L196,325M226,52L226,325M256,52L256,325M286,52L286,325M316,52L316,325M346,52L346,325M376,52L376,325M406,52L406,325M436,52L436,325").attr({ "stroke": "#888","stroke-width":1}),
	R.path("M166,294L459,294M166,264L459,264M166,234L459,234M166,204L459,204M166,174L459,174M166,144L459,144M166,114L459,114M166,84L459,84").attr({ "stroke": "#888","stroke-width":1}),
	R.path("M166,52L166,324L459,325L459,325").attr({"fill-opacity": 0,fill:"white","stroke": "#fff"}),
	R.text(150, 120, "X").attr({"fill-opacity": 0,fill:"white","stroke": "#fff"}),
    R.text(166, 335, "O").attr({"fill-opacity": 0,fill:"white","stroke": "#fff"}),
	R.text(400, 335, "Y").attr({"fill-opacity": 0,fill:"white","stroke": "#fff"})
 
		

);
st.attr({"font-size": 14});
					 
	R.freeTransform(st).setOpts({draw: [ 'bbox' ],attrs: { fill: "#eee" },size:0, drag:true});	
	  
	  
	  
            R.text(250, 20, "Drag the below objects,resize and backspace to delete").attr({fill:"white","font-size": 14,"font-family": "tahoma","font-weight":"normal"});



				     R.freeTransform( R.circle(100, 100, 50).attr({"fill":fillColor,"fill-opacity":fillOpacity, "stroke": strokeColor,"stroke-width":strokeWidth})).setOpts({draw: [ 'bbox' ],attrs: { fill: "#eee", stroke: strokeColor ,"stroke-width":strokeWidth },size:0, drag:true});	


					 
				 
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

	var accordion=function(){
	var tm=sp=10;
	function slider(n){this.nm=n; this.arr=[]}
	slider.prototype.init=function(t,c,k){
		var a,h,s,l,i; a=document.getElementById(t); this.sl=k?k:'';
		h=a.getElementsByTagName('dt'); s=a.getElementsByTagName('dd'); this.l=h.length;
		for(i=0;i<this.l;i++){var d=h[i]; this.arr[i]=d; d.onclick=new Function(this.nm+'.pro(this)'); if(c==i){d.className=this.sl}}
		l=s.length;
		for(i=0;i<l;i++){var d=s[i]; d.mh=d.offsetHeight; if(c!=i){d.style.height=0; d.style.display='none'}}
	}
	slider.prototype.pro=function(d){
		for(var i=0;i<this.l;i++){
			var h=this.arr[i], s=h.nextSibling; s=s.nodeType!=1?s.nextSibling:s; clearInterval(s.tm);
			if(h==d&&s.style.display=='none'){s.style.display=''; su(s,1); h.className=this.sl}
			else if(s.style.display==''){su(s,-1); h.className=''}
		}
	}
	function su(c,f){c.tm=setInterval(function(){sl(c,f)},tm)}
	function sl(c,f){
		var h=c.offsetHeight, m=c.mh, d=f==1?m-h:h; c.style.height=h+(Math.ceil(d/sp)*f)+'px';
		c.style.opacity=h/m; c.style.filter='alpha(opacity='+h*100/m+')';
		if(f==1&&h>=m){clearInterval(c.tm)}else if(f!=1&&h==1){c.style.display='none'; clearInterval(c.tm)}
	}
	return{slider:slider}

}();
	   


  

</script>

<div id='footer'>

<div><a>fiGREout</a><a>BLOG.</a><a>ABOUT.</a><a>JOBS.</a><a>SUPPORT.</a><a>CONTACT.</a></div>
  <p class='copyright'>
     2012 &copy; Goodness me educational solutuons.
    <span class="links"><a >Terms of Service</a> | <a>Privacy Policy</a></span>
  </p>
</div>


</body>


</html>

