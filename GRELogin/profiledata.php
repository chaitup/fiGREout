<?php
header('Content-type: application/json');
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';



// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {


    $data = $_POST['data'];
	$data= json_decode($data,true);
	
	
    $id = $data['id'];  
	   

    if ($stmt = $mysqli->prepare("SELECT  Displaypicture,username,email  FROM members WHERE id = ? LIMIT 1")) { 
        $stmt->bind_param('i', $id); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
 
        if($stmt->num_rows == 1) { // If the user exists
           $stmt->bind_result($image,$name,$email); // get variables from result.
           $stmt->fetch();
		   
		  
		   		$arra = array ('pic' => $image, 'name'  => $name , 'email' => $email); 
			                  echo json_encode($arra);
							  
                                 }



                                                                                                 }
}

else{

    header("Location:http://localhost/GRElogin/securelogout.php");
}

?>

