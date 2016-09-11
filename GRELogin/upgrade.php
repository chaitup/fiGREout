<?
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();

if(login_check($mysqli) == true) {

     $user_id =  $_SESSION['user_id'];
	 
     if ($stmt = $mysqli->prepare("SELECT  registeredstatus , email , username  , hashed_user_id FROM members
	         WHERE id = ?  LIMIT 1")) { 
        $stmt->bind_param('i', $user_id); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
	    $stmt->bind_result($status, $mailaddress, $name ,$hashed); // get variables from result.
        $stmt->fetch();
		

echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="XSQ6J8BCGAFT4">
      <input name="notify_url" value="http://localhost/GRELogin/ipn.php" type="hidden">
      <INPUT TYPE="hidden" NAME="first_name" VALUE="'.$name.'">
      <INPUT TYPE="hidden" NAME="email" VALUE="'.$mailaddress.'">
	  <INPUT TYPE="hidden" NAME="custom" VALUE="'.$hashed.'">
      <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
      </form>';
		
		
		
		
		

       }








}