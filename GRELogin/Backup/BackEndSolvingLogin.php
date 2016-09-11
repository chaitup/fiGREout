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

<style>
.signinbutton{

height:30px;
border-radius:3px;
background: -webkit-gradient(linear, center top, center bottom, from(#568835), to(#568835));
background: -moz-linear-gradient(linear, center top, center bottom, from(#568835), to(#568835));
font-size:13px;
color:#fff;
cursor:pointer;
font-family:verdana;
vertical-align:top;
border:1px solid #888;
padding:6px;
display:block;
border-color: #097601 #097601 #032A00;
 background: #7CD54B; /* Old browsers */
    background: -moz-linear-gradient(top, #7CD54B 0%, #589534 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#7CD54B), color-stop(100%,#589534)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #589534 100% ,#7CD54B 0%,); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #7CD54B 0%,#589534 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #7CD54B 0%,#589534 100%); /* IE10+ */
    background: linear-gradient(top, #7CD54B 0%,#589534 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7CD54B', endColorstr='#589534',GradientType=0 ); /* IE6-9 */
    border: 1px solid #5C9C36;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.4) inset;
    -moz-box-shadow: 0 1px 0 rgba(255,255,255,0.4) inset;
    box-shadow: 0 1px 0 rgba(255,255,255,0.4) inset;
    color: #FFC;
    font: bold 14px/1.1em sans-serif;
    outline: none;
    position: relative;
    text-decoration: none;
    text-shadow: 0 -1px 0 #438320;
    -webkit-transition: all 0.4s linear;
    -moz-transition: all 0.4s linear;
    -o-transition: all 0.4s linear;
    -ms-transition: all 0.4s linear;
    transition: all 0.4s linear;
    zoom: 1;
    vertical-align:top;


  }
  
  
.signinbutton:hover
  
  {
    background:-webkit-gradient(linear, center top, center bottom, from(#568835), to(#568835));
    background: -moz-linear-gradient(linear, center top, center bottom, from(#568835), to(#568835));
    background: #6BB640; /* Old browsers */
    background: -moz-linear-gradient(top, #7CD54B 0%, #589534 75%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#7CD54B), color-stop(75%,#589534)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #7CD54B 0%,#589534 75%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #7CD54B 0%,#589534 75%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #7CD54B 0%,#589534 75%); /* IE10+ */
    background: linear-gradient(top, #7CD54B 0%,#589534 75%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6BB640', endColorstr='#589534',GradientType=0 ); /* IE6-9 */
    border-color: #438320;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.3) inset, 0 1px 3px rgba(0,0,0,0.4);
    -moz-box-shadow: 0 1px 0 rgba(255,255,255,0.3) inset, 0 1px 3px rgba(0,0,0,0.4);
    box-shadow: 0 1px 0 rgba(255,255,255,0.3) inset, 0 1px 3px rgba(0,0,0,0.4);
    color: #FFF;
  }
  
.signinbutton:active
  
  {
border:1px solid #000;
  
  }
  
 .logininput 
 {
 
display:block;
margin-bottom:30px;
height:25px;
padding:3px;
border-radius:3px;
 
 }
  
  
  
  #container {width:250px;margin:auto; margin-top:200px;border:2px solid #eee;padding:20px; border-radius:4px;}
  
  
  
  
  
  
  
  
  
</style>







  <script type='text/javascript' src='../js/formValidator.js'></script>
  <script type="text/javascript" src="../sha512.js"></script>
  <script type="text/javascript" src="../forms.js"></script>
  <script type='text/javascript' src='../js/jquery.js'></script>
  
  
 <hr style='height:20px;background:black;'/> 
  
  
  
  
  
    <div id='container'>  
	  
	  

	  <form   action="process_login.php" method="post" name="login_form" >
	   
	  <h3 style='font :18px tahoma;'>Blog Login</h3>
	  <hr/>
	  <input  class="logininput" type="text" name="email" value="Email" tabindex = 1 AUTOCOMPLETE="OFF" onFocus="if(this.value == 'Email') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Email';}" />
	  <input  class="logininput" type="password" name="password" id="password" value="Password" tabindex = 2 onFocus="if(this.value == 'Password') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Password';}" />
	  <input  class="signinbutton" type="button" value="Login" onclick="formhashLogin(this.form, this.form.password);" tabindex = 3 />
      </form>
	</div>
	 
	 
	 
 </head>
 
 <body>
 </body>

 </html>
