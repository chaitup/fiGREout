<?
header("Content-Type:text/xml");
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {
  
  
  
    $uid = $_SESSION['user_id'];
    $data = $_POST['data'];
	$data= json_decode($data,true);
	
	
    $QuestionNumber = $data['questionNumber'];  


  /*  if ($stmt = $mysqli->prepare("SELECT  $ColumnName  FROM statistics WHERE ref_consistency_id = ? LIMIT 1")) { 
        $stmt->bind_param('i', $user_id); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
 
        if($stmt->num_rows == 1) { // If the user exists
           $stmt->bind_result($QuestionNumber); // get variables from result.
           $stmt->fetch();   */
  

  
  
                    $string = file_get_contents("practicetests/PracticeTest1.xml");
			       
                    $xml = new SimpleXMLElement($string); 
	                
                    echo '<Question>';
	         
				    foreach ($xml->Question[$QuestionNumber]->QText as $QText)
						
						{		
						
							echo  '<QText RunningQuestion="'.$QuestionNumber.'" tag="'.$QText['tag'].'"  type="'.$QText['type'].'">'.$QText.'</QText>';
						}
	
				   foreach ($xml->Question[$QuestionNumber]->Option as $Option)
						{
								echo '<Option correct ="'.$Option['correct'].'">'.$Option.'</Option>';
						}
	 
	               foreach ($xml->Question[$QuestionNumber]->Image as $Image)
						{
								echo '<Image src ="'.$Image['src'].'">'.$Image.'</Image>';
						}
						
	              foreach ($xml->Question[$QuestionNumber]->A as $A)
						{
								echo '<A>'.$A.'</A>';
						}
			      foreach ($xml->Question[$QuestionNumber]->B as $B)
						{
								echo '<B>'.$B.'</B>';
						}
	 
	 
	 
				     echo '</Question>';
	 
	  
	            }	
											
								
			 

		

	  
 else{
	 
	    header("Location:http://localhost/GRElogin/securelogout.php");
	 }
	 
	 ?>
