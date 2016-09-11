<?php
header('Content-type: application/json');
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {

          $numChange = 0;
  		  $user_id = (int)$_SESSION['user_id'];
          $data = $_POST['data'];
	      $data= json_decode($data,true);
		  $next=  (int)$data['flow'];
		  $type = $data['type'];
		  $num =  $data['Qnum'];
          $Globaldata = "";
          $i = $next;
		  $availability = 0;
		  
		  
 if ($stmt2 = $mysqli->query("SELECT  answereddata.ImagePath, answereddata.IsMatched, members.Displaythumb,members.username ,answereddata.numlikes, members.id FROM  answereddata,members WHERE Category = '$type' AND QuestionNumber = $num AND members.id = answereddata.id AND  answereddata.ImagePath != 'null' ORDER BY answereddata.numlikes DESC LIMIT $next ,10")){
      
  
	  while ($row = $stmt2->fetch_row())

	  {
	   
$availability =   $availability + 1;

$Globaldata = $Globaldata."<hr style='
border:1px solid #eee;width:900px;box-shadow:  0px -2px 5px #eee;'/><br/>
<div class='section'>

<img class='Thumb' src=".$row[2]." />


<div class='headLineandanswer'>";

  if($row[5] == $_SESSION['user_id'] ){
  
    $Globaldata = $Globaldata."<p class='headLine'><span><b>".$row[3]." </span></b><img src = 'images/delete.png' style='float:right;display:inline-block;' onclick='answerDelete(this)'></img></p>" ;
  
  
  }
else

{

 $Globaldata = $Globaldata."<p class='headLine'><span><b>".$row[3]." </span></b><span></span></p>";



}


$Globaldata = $Globaldata."<img class ='answer'  src=".$row[0]." /><br/><br/>
<img  class = 'plusminus' src='images/plus.png' onclick='Like(this)'></img>&nbsp;&nbsp;&nbsp;&nbsp;
<img  class = 'plusminus' src='images/minus.png'></img>
</div>

<div class ='totalcommentsection'>";

     
   if ($stmt3 = $mysqli->query("SELECT Comments.comment,members.Displaythumb,members.id,Comments.comment_id FROM comments,members WHERE Comments.category = '$type' AND Comments.questionnumber = $num  AND Comments.imagelink = '$row[0]' AND members.id = comments.id ORDER BY Comments.comment_id")){
        while ($row2 = $stmt3->fetch_row()) {
       
	   
	           $numChange =  $numChange + 1;
	   
	          if($row2[2] == $_SESSION['user_id'] ){
			  
			     $Globaldata= $Globaldata."<div class='commentsection'>
				         <img  class='smalldp' src='".$row2[1]."'></img>";
				 $Globaldata = $Globaldata."<p class='comment' ><span>".$row2[0]."</span></p>
		                <img class ='deleteComment' src='images/deleteIcon.svg' onclick='Del(this)'></img>
				        <input type='hidden'  value ='".$row2[3]."'/>
						
				  </div>";
			  
			                                      }
	   
	   
	             else{
	              $Globaldata = $Globaldata."<div class='commentsection'>
				 <img  class='smalldp' src='".$row2[1]."'></img>";
				   $Globaldata =$Globaldata."<p class='comment'><span style='font-size:13px;font-weight:bold;'>Abilash</span><br/>".$row2[0]."</p>
				 <input type='hidden'  value ='".$row2[3]."'/>
				 </div>";}
			
                                      }
				 $Globaldata = $Globaldata."</div>"	;				  
									  
	             }
	
	



 $Globaldata = $Globaldata."
<div class='inputSection'>
<textarea onkeyup = 'Comment(event , this);' style='resize: none;' cols='10' rows='3'></textarea>
</div>




</div>";


$i = $i+1;   
                
				
				
				
		        } //while fetch
	

///echo  $peopleansweredthisanswercorrectly ;
//echo  $i - $peopleansweredthisanswercorrectly;

		      } //image path..
			  
	
			  
			  
			  
			$arra = array ('NextFew' => $Globaldata , 'SolutionNumberRunning'  => $i ,'availability' => $availability ); 
			 echo json_encode($arra);
			  
		}	  
			  ?>