<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<head>



<style>

html,body{
padding:0;
margin:0;
font-size:13px;
line-height: 1.38em;
font-weight: normal;
font-family: verdana, Arial, Sans-Serif;


}

#mainnav
{
top:0;
left:0;
height:81px;
width:100%;
background:-webkit-linear-gradient(top,#3b5970, #3b5998);
background:-moz-linear-gradient(left,#983b59,#f06e97, #983b59);
border-bottom :1px solid black;

}


#mainnav div{

padding:0px;
display:inline-block;
margin-top:1px;
padding:10px;
height:70px;
width:80px;
border-right:1px solid #fff;
margin-bottom:0px;
padding-bottom:0px;
text-shadow: 1px 1px 1px #000;

}


 
 
.Centerbox{

width:800px;
margin:auto;
height:600px;
border:1px solid #eee;
border-radius:4px;
margin-top:30px;
padding:20px;
}


.Outcome{

font-size:13px;
}
</style>


</head>

<body>
  <div id="mainnav"> 
  <h1 style='margin-top:30px;margin-left:40px;font-size:40px;display:inline-block;font-family:"sieoge UI";font-weight:normal;color:white;font-style:italic;border:0px solid black;'>Solveby</h1>
  </div> 
  


<?php

include ('db_connect.php');

if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',

 $_GET['email'])) {

 $email = $_GET['email'];

}

if (isset($_GET['key']) && (strlen($_GET['key']) == 128))

 //The Activation key will always be 32 since it is MD5 Hash

 {

 $key = $_GET['key'];

}

 

if (isset($email) && isset($key)) {

 

 // Update the database to set the "activation" field to null

 

 $query_activate_account = "UPDATE members SET activation = 'success'  WHERE(Email ='$email' AND activation='$key') LIMIT 1";

 $result_activate_account = mysqli_query($mysqli, $query_activate_account);

 

 // Print a customized message:

 if (mysqli_affected_rows($mysqli) == 1) //if update query was successfull

 {

 echo '<div class="Centerbox"> Your account is now active. You may now Log in <br/><br/>
 <a href ="login.php?popmessi=1"> Click here to login <a/>
 </div>';

 
   
 
 
 
 
 

 } else {

 echo '<div class="Centerbox"> Oops !This link might have expired.Contact the System administrator.</div>';

 

 }


 mysqli_close($mysqli);
 

} else {

 echo '<div class="Centerbox">Error Occured .</div>';

}

?>

</body>

</html>