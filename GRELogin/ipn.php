<?php 
include 'db_connect.php';
$req = 'cmd=_notify-validate';

foreach ($_POST as $key => $value) {
    $value = urlencode(stripslashes($value));
    $req .= "&$key=$value";
}




//post back to PayPal system to validate (replaces old headers)
$header = "POST /cgi-bin/webscr HTTP/1.1\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Host: www.paypal.com\r\n";
$header .= "Connection: close\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ('ssl://www.sanbox.paypal.com', 443, $errno, $errstr, 30);
//

//error connecting to paypal
if (!$fp) {
      
}
    
//successful connection    
if ($fp) {

 
	   
	   
    fputs ($fp, $header . $req);
    
    while (!feof($fp)) {
        $res = fgets ($fp, 1024);
        $res = trim($res); //NEW & IMPORTANT
                
        if (strcmp($res, "VERIFIED") == 0) {
		
		   $hashed = $_POST['custom'];
		   $status = 'usual';
            
			$stmt = $mysqli->query("UPDATE members SET registeredstatus = '$status'  WHERE 
                hashed_user_id = '$hashed '");
        
           
        }
    
        if (strcmp ($res, "INVALID") == 0) {
                 //insert into DB in a table for bad payments for you to process later
			  $fp = fopen('rohitsharma.txt', 'a+') or die('could not open/create file');
        }
    }

    fclose($fp);
}

?>