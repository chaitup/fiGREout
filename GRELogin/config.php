<?php 
ob_start();
session_cache_expire();
ini_set('session.cookie_httponly',true);
session_start();
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'mine';                       
$dbConn = mysql_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysql_error());
mysql_select_db($dbName) or die('Database Error ' . mysql_error());
 ?>
 
