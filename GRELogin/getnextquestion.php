<?php
header('Content-type: application/json');
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {
  
        $GlobalQuestiondata = "";
        $data = $_POST['receiveddata'];
	    $data= json_decode($data,true);
	    $type =     $data['TypeOfQuestion'];
	    $user_id =  $_SESSION['user_id'];
		
 switch(mysqli_real_escape_string($mysqli,$data['TypeOfQuestion'])) {
    case    "NumericEntry":
        break;
    case   "MultipleChoiceOneAnswer":
        break;
	case  "MultipleChoiceMoreAnswers":
		break;
    case  "QuantitativeComparision":
		break;
    default:
       exit('Sorry Something Wrong');
}
	 
        $QuestionNumber;
        $ColumnName = 'statistics.'.$type.'_'.'CurrentQuestion';
  
  
     if ($stmt = $mysqli->prepare("SELECT  $ColumnName , members.registeredstatus  FROM statistics , members WHERE statistics.ref_consistency_id = ? AND members.id = ? ")) { 
        $stmt->bind_param('ii', $user_id ,$user_id); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
 
        if($stmt->num_rows == 1) { // If the user exists
           $stmt->bind_result($QuestionNumber ,$registeredstatus); // get variables from result.
           $stmt->fetch();
  
                 
/* 	 if($QuestionNumber  > 10  &&  $registeredstatus != 'exclusive'){
				   
				                            
			         
  $arra = array ('Questiondoc' => "<div id='container'>
    
	
	<div class='pricingtable'>
      <div class='top'>
        <h2>Basic</h2>
      </div>
      <ul>
        <li><strong>Over 250</strong> Questions &nbsp;&nbsp;&nbsp;<span style='color:#7b4;font-size:20px;'>&#10004;</span></li>
        <li><strong>Over 100</strong> Lessons&nbsp;&nbsp;&nbsp;<span style='color:#7b4;font-size:20px;'>&#10004;</span></li>
        <li><strong>12 months</strong> Validity&nbsp;&nbsp;&nbsp;<span style='color:#7b4;font-size:20px;'>&#10004;</span></li>
		<li><strong>Strong /Weak areas</strong> Analysis &nbsp;&nbsp;&nbsp;<span style='color:#7b4;font-size:20px;'>&#10004;</span></li>

      </ul>
    
   
      
      <h1><sup>$</sup>19</h1>
  
         <hr />
		 
      <a href=''>Upgrade</a>
    </div>
    
   
    


</div>" ,"status" => "stop" ); 
			                       echo json_encode($arra);

                        exit();

					  
				   
				                                             } */
				 
				 
				 
  
 
                    $string = file_get_contents("Questiontype/".$type.".xml");
			       
                    $xml = new SimpleXMLElement($string); 
	                
                    $GlobalQuestiondata =  $GlobalQuestiondata.'<Question>';
	         
				    foreach ($xml->Question[$QuestionNumber]->QText as $QText)
						
						{		
						
							 $GlobalQuestiondata =  $GlobalQuestiondata.'<QText RunningQuestion="'.$QuestionNumber.'" tag="'.$QText['tag'].'">'.$QText.'</QText>';
						}
	
				   foreach ($xml->Question[$QuestionNumber]->Option as $Option)
						{
								 $GlobalQuestiondata =  $GlobalQuestiondata.'<Option correct ="'.$Option['correct'].'">'.$Option.'</Option>';
						}
	 
	               foreach ($xml->Question[$QuestionNumber]->Image as $Image)
						{
								 $GlobalQuestiondata =  $GlobalQuestiondata.'<Image src ="'.$Image['src'].'">'.$Image.'</Image>';
						}
						
	              foreach ($xml->Question[$QuestionNumber]->A as $A)
						{
								 $GlobalQuestiondata =  $GlobalQuestiondata.'<A>'.$A.'</A>';
						}
			      foreach ($xml->Question[$QuestionNumber]->B as $B)
						{
								 $GlobalQuestiondata =  $GlobalQuestiondata.'<B>'.$B.'</B>';
						}
	 
	 
	 
				     $GlobalQuestiondata =  $GlobalQuestiondata.'</Question>';
					 
					
	               $arra = array ('Questiondoc' =>  $GlobalQuestiondata ,"status" => "goahead" ); 
			                       echo json_encode($arra);
	  
	            }	
											
								
			 
	 }	
			
			

  
 }

	  
 else{
	 
	    header("Location:http://solveby.com/GRELogin/userpage.php");
	 }
	 
	 ?>
