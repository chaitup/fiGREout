<?php
ob_start();
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';

   function cleanInput($input) {
 
  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );
 
    $output = preg_replace($search, '', $input);
    return $output;
	
  }
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {
 

     header("location:userpage.php");
 
 }
 
 
 
 
 else{
 

if(isset($_POST['email'], $_POST['p'])) { 
$email;
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email = $_POST['email'];
}
 
   $password = cleanInput($_POST['p']); // The hashed password.
   if(login($email,$password, $mysqli) == true) {
      // Login success
             echo "success";
	   header('Location: ./userpage.php');

   } else {
     echo "fail";
      // Login failed
      header('Location: ./login.php?error=1');
   }
} else { 
   // The correct POST variables were not sent to this page.
   echo 'Invalid Request';
}
  
  

  }
?>