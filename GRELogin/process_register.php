<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<head>


  <link rel="stylesheet" type="text/css" href="css/headerlogout.css" media="screen" />
  
  <link rel="stylesheet" type="text/css" href="css/register.css" media="screen" />


</head>

<body>
<div class='enclosure'>
<div id='mainNavigation'>

<div >
<h1 style='margin-top:20px;'> fi<b><span>GRE</span></b>out</h1>
</div>



<div id='Mainlinks' >
<ul>
<li><a href="./login.php">Home</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./sampletest.php"> Sample Test</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./aboutTheTest.php"> About GRE<sup>&#174;</sup></a></li>
</ul>
</div>


<div id='AccountStatus' >
<ul>

</ul>
</div>




</div>
</div>




</div>
</div>
<?php
include ('db_connect.php');
require ('PHPMailer/class.phpmailer.php');



if(isset($_POST['truemail'], $_POST['p'],$_POST['truename'])){


$password = mysqli_real_escape_string($mysqli,$_POST['p']); 
$username = mysqli_real_escape_string($mysqli,$_POST['truename']);
$email =    mysqli_real_escape_string($mysqli,$_POST['truemail']);



if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("<div id='Wrap'><p class='Outcome'>".$email." $nbsp; is not a valid email address.</p></div> ");
}

if (empty($password)) {
     exit("Password is empty..<br/>");
}


//if ($insert_stmt = $mysqli->prepare("SELECT email FROM  members")) {    
   // Execute the prepared query.
            
          //  $insert_stmt->execute();
                                                                 
	///	}

	
$hashed_id   = hash('sha512', $password.$email.$username);
$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
// Create salted password (Careful not to over season)
$password = hash('sha512', $password.$random_salt);

$key = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
$activationlink = 'http://figreout.com/GRELogin/activation.php?email='.$email.'&key='.$key;
// Add your insert to database script here. 
// Make sure you use prepared statements!

if ($select_stmt = $mysqli->query("SELECT COUNT(*) as c FROM members WHERE email = '$email'")){

  $count = $select_stmt ->fetch_object()->c;
  $select_stmt->free();

                  if((int)$count !== 0){
   
                               echo exit("<div id='Wrap'><p class='Outcome'> There is  an account already registered with this email..!</p></div>");

                                         }

                 }
				 
				 
    mysqli_autocommit($mysqli, FALSE);
				 
	$insert_stmt1 = $mysqli->prepare("INSERT INTO members (hashed_user_id ,username, email, password, salt , activation) VALUES (?, ?, ?, ?, ? ,?)");
	
	
	$insert_stmt2 = $mysqli->prepare("INSERT INTO statistics (hashed_user_id) VALUES (?)");
	
	
    $insert_stmt3 = $mysqli->prepare("INSERT INTO practiceexams (hashed_user_id) VALUES (?)");
	
	
if ($insert_stmt1 && $insert_stmt2 && $insert_stmt3) 
	
{    

       $insert_stmt1->bind_param('ssssss',$hashed_id,$username, $email, $password, $random_salt, $key); 
       $insert_stmt2->bind_param('s',$hashed_id); 
	   $insert_stmt3->bind_param('s',$hashed_id); 
	   
	   
       $insert_stmt1->execute(); 
	   $insert_stmt2->execute();
  	   $insert_stmt3->execute();
   
       if(!mysqli_commit($mysqli)){ exit("error...try registering again..");}
   
                                                          
														 
																			 
$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.figreout.com';  // Specify main and backup server
$mail->SMTPAuth = true;     
$mail->Port = "25";                          // Enable SMTP authentication
$mail->Username = 'info@figreout.com';                            // SMTP username
$mail->Password = 'RohitSharma@89';                           // SMTP password
//$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@figreout.com';
$mail->FromName = 'figreout';
$mail->AddAddress($email, 'Self');  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional
$mail->AddReplyTo('info@figreout.com', 'Information');
//$mail->AddCC('cc@example.com');
/* ///$mail->AddBCC('bcc@example.com'); */

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('images/draw.png', 'draw.png');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Registration';
$mail->Body    = '<p> Click on the link provided below to activate your account.....</p>
<a href="'.$activationlink.'"> activation link </a> 
<br/> <br/> ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


if(!$mail->Send()) {

exit("<div id ='Wrap'><p class='Outcome'> Message could not be sent.! Mailer Error: " .$mail->ErrorInfo."</p></div>");

}


echo 

"<div id ='Wrap'><p id='Outcome'><p style='margin-top:20px;'> You have Successfully registered ".$username." . We have sent you an activation link to your email. (Note :Check the Spam folder  if you don't find the activation link in your in-box) !</p></p></div>";


}

else
    {


   echo 
   "<div id ='Wrap'><p class='Outcome'>OOps.. something went wrong...try registering again..sorry for the inconvenience..</p></div> ";


    }




}

else{
echo "<div id='Wrap'><p class='Outcome'>Fill in the details in the fields correctly ,, try registering again.!</p></div>";

}
?>

</body>

</html>