<?php 
require_once("config.php");
unset($_SESSION['sess']);
unset($_SESSION['USER']);
session_destroy();
header("location:index.php")

?>
 