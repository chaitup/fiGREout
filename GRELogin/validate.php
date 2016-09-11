<?php 

  
 require_once("config.php");
 
	if(isset($_POST['submit'])){
		$username=trim($_POST['username']);
		$pwd=$_POST['pass'];
		
		$qry=mysql_query("SELECT * FROM users where username='$username' AND pass='$pwd' ");
			if($qry && mysql_num_rows($qry)>0)
			{
					$row = mysql_fetch_object($qry);
					$_SESSION['sess']= session_id();
					$_SESSION['USER']=$row->username;
					$_SESSION['id'] = $row->UniqueID;
					header("location:home.html");
				
			} 
			
			else{
				  
			      header("location:index.php");
				  echo'Invalid Username or Password';
			}
	}
	
?>