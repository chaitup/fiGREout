<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {
  
   echo "This one is the for only privilaged Users who have registered on Our Site";
   echo "<a href='SecureLogout.php'>Logout Here</a><br/>";
 
}
 else {
   echo 'You are not authorized to access this page, please login. <br/>';
}

?>