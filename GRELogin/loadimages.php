<?php
include 'db_connect.php';
include 'functions.php' ;
include 'login_check.php';
include 'Sanitizers.php';


// Include database connection and functions here.
  sec_session_start();
  
 if(login_check($mysqli) == true)
 {   	  

    
         $num     =   $_GET['num'];
         $type    =   $_GET['type'];
		 
	     $type =  clean($type,$mysqli); 
	     $num =   clean($num,$mysqli);
	   

 
         $dp =        $_SESSION['dp'];
   	     $user_id =   $_SESSION['user_id']; 
		 

	
		$databasenum = checkquestionnumber($user_id, $type ,$mysqli);

		
		   if($num == 'def'){
		
         $num = $databasenum - 1;
			 
			 }
			 
		   
			 
			 
			 
		    if ($num  > $databasenum)
		 {
		 
		     $num = $databasenum - 1 ;
		 
		 }
		 
			 
			 
	   

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title> Solve by - The online GRE math preperation with hundreds of practice questions and lessons</title>
<meta content='Solveby offers comprehensive online New GRE practice questions and New GRE prep with hundreds of Lessons and explanations' name='description'>
<meta content='GRE prep, GRE videos, GRE math,  GRE practice questions, GRE exams, revised GRE, new GRE, new exam, revised exam' name='keywords'>


<base href="http://localhost/GRELogin/" />
<link rel="stylesheet" type="text/css" href="css/messi.css" media="screen" />
<link rel="stylesheet" type="text/css" href="loadimages.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/headerlogin.css" media="screen" />  
 
 
<script src="js/jquery.js"></script>
<script src="tabs_old.js"></script>
<script type='text/javascript' src='js/messi.min.js'></script>
<script type="text/javascript" src='js/ReviewFunctions.js'></script > 
<script type="text/javascript" src='js/waypoints.min.js'></script > 

   
   
</head>
<body>


<div class='enclosure'>
<div id='mainNavigation'>

<div >
<h1 style='margin-top:20px;'> <img G src='images/logo_pic_white.png'></img></h1>
</div>


<div id='Mainlinks' >
<ul>
<li><a href="./userpage.php">Practice</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./statistics.php">Statistics</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./settings.php">Settings</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./teachinglesson.php">Lessons</a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </li>
</ul>
</div>

<a id ='signout' href='securelogout.php'>
<img src='images/logout.png' ></img><br/>
<p> Signout </p>
</a>



<br/>

</div>

</div>


<br/>


<div id='Wrap'>
<div id='upperWrap'>
  <div id="tabContainer">
    <div id="tabs">
      <ul  >
        <li id="tabHeader_1" onmouseup = "window.location.href='loadimages.php?type=QuantitativeComparision&num=def'">Quant</li>
        <li id="tabHeader_2" onmouseup = "window.location.href='loadimages.php?type=MultipleChoiceOneAnswer&num=def'">SelectOne</li>
        <li id="tabHeader_3" onmouseup = "window.location.href='loadimages.php?type=MultipleChoiceMoreAnswers&num=def'">SelectMultiple</li>
		<li id="tabHeader_4" onmouseup ="window.location.href='loadimages.php?type=NumericEntry&num=def'">Numeric entry</li>
      </ul>
    </div>
    <div id="tabscontent">
	
        <div class="tabpage" id="tabpage_1">
		
           <div id='tabpage_1_holder'>
		   </div>
		 
		   <div id='tabpage_1_pieholder'>
		    </div>
       </div>
	
	  
        <div class="tabpage" id="tabpage_2">
            <div id='tabpage_2_holder'>
			</div>
		 	<div id='tabpage_2_pieholder' >
		    </div>
        </div>
	
	   
        <div class="tabpage" id="tabpage_3">
         
		    <div id='tabpage_3_holder'>
			</div>
		 	<div id='tabpage_3_pieholder'>
		    </div>
        </div>
		
	
		
		<div class="tabpage" id="tabpage_4">
            <div id='tabpage_4_holder'>
		    </div>
		 
		    <div id='tabpage_4_pieholder'>
		   </div>

        </div>
	  
    </div>
  </div>

  

<div id="question" >
    <p style='Trebuchet MS'>Current Question</p><br/> <hr/>
    <p id="Textarea" style="width:400px;display:inline-block;margin-top:10px;font-family:verdana">Please wait...........</p><br/><br/>
    <img id='Qimage' style="margin-left:130px;"></img>
	<div id='forQuantComparision' style='margin-top:10px;'>
	
	</div>
<div id="OptionsContainer" style='margin-top:20px;'>
   <div id="list1"></div>
</div>

</div>


<br/>
<br/>

</div>



	  
<div id="Totalsection" >
<p class='informationbox'>The first answer of the answers shown below for this question is by "fiGREout" . Below to that are the explanations by different users sorted by popularity.</p><br/>

<script type="text/javascript">
 
var type = '<?php echo $type;?>';

var Dp   = '<?php  echo $_SESSION['dp'];?>';
   
 
var tabName;


switch(type)
{
case 'QuantitativeComparision':
  tabName = 'tabpage_1';
  break;
case 'MultipleChoiceOneAnswer':
  tabName = 'tabpage_2';
  break;
  case 'MultipleChoiceMoreAnswers':
  tabName = 'tabpage_3';
  break;
case 'NumericEntry':
  tabName = 'tabpage_4';
  break;

    
}	
	
 
  
  var TabtoBeSelected  = (tabName == 'tabpage_1') ? 'tabHeader_1': (tabName == 'tabpage_2') ? 'tabHeader_2' : (tabName == 'tabpage_3') ? 'tabHeader_3':(tabName == 'tabpage_4') ? 'tabHeader_4':"Nothing"; 
	
  document.getElementById(tabName).getElementsByTagName('div')[0].innerHTML  ='<h3 style="padding-bottom:10px;padding-top:10px;margin-bottom:10px;font-weight:normal;font:14px verdana">&nbsp;All Solved Questions</h3>'	 
		 
    var navitem = document.getElementById(TabtoBeSelected);
		
    //store which tab we are on
    var ident = navitem.id.split("_")[1];
		//alert(ident);
    navitem.parentNode.setAttribute("data-current",ident);
    //set current tab with class of activetabheader
    navitem.setAttribute("class","tabActiveHeader"); 
 
 

 
 
</script>
	
	

	
	   <?php
	
	///echo memory_get_usage()/1000 . "kb"; // 36640
                                                          
	   
 if ($stm = $mysqli->prepare("SELECT IsMatched,CorrectAnswerPattern,UserAnswerPattern FROM  answereddata WHERE Category = ?  AND id = ? ")){
        $stm->bind_param('si',$type,$user_id);
        $stm->execute(); // Execute the prepared query.
        $stm->bind_result($patternMatched,$Cpattern,$Upattern);
        $totalanswered = 0;
		$n = 1;
		while($stm->fetch())
		{

	     $totalanswered =   $totalanswered + 1;
		 
		if($num ==  $totalanswered ) 
		
		{
		
	 $presentUserPattern  =    str_split($Upattern);
	 $presentCorrectPattern  = str_split($Cpattern);
		    
		}

		
		 
		
	?>	       
		   
<script type="text/javascript">	   
			
			 if( '<?php echo $patternMatched ?>' == "true"){
	     document.getElementById(tabName).getElementsByTagName('div')[0].innerHTML += "<p class='para'><?php echo $n;?></p>";
		 
	                                          }
		   else		{
		     document.getElementById(tabName).getElementsByTagName('div')[0].innerHTML += "<p class='Wrongpara' ><?php echo $n;?></p>";
		   
		            }	
							
		 $(".para,.Wrongpara").bind('click', function() 
         
		 {
		 
		 
		     $(this).css("pointer-events","none");
	         window.location.href='UserAnswers/'+type+'/'+ $(this).text();
			
             //$(this).addClass("Activepara");


         });
		  
	    </script>
		
<?php	
   $n= $n +1;

		}

	
	//echo memory_get_usage()/1000 . "kb"; // 36640

		}

	  
	         //echo $num;
	  
	  
	  
	         if($totalanswered == 0){
	  
	         echo   "<script type='text/javascript'>
	   
	
	         document.getElementById('Textarea').innerHTML = '<p>Atleast one Questions has to be solved</p>';
	   
	              </script>";
	  
	          exit();
	  
	                               }
	  
	

//imp : varibales in  <?tag are accesible only in that tag only...!

	  if($num == 'def' || $num == 'default'){ $num = $totalanswered ;}


			 
         $string = file_get_contents("Questiontype/".$type.".xml");
		 
	     $xml = new SimpleXMLElement($string);
	

	       foreach ($xml->Question[(int)$num]->QText as $q)
		   {
	          

	

           }  
		
	              foreach ($xml->Question[(int)$num]->Image as $Imagee)
						{
							
										
						echo "<script type='text/javascript'>
						
						$('#Qimage').attr('src' ,'".$Imagee['src']."');
							
							
							</script>";
							
							echo  $Imagee;
							
							
						}
						
	              foreach ($xml->Question[(int)$num]->A as $Aq)
						{
						
						
						echo "<script type='text/javascript'>
						
						
				
		  
		  
		 $('#forQuantComparision').append('<p style=\"display:inline-block;width:200px;text-align:center;vertical-align:top;\"><span><b>QuantityA</b></span><br/><br/>' + replacecharacters('".$Aq."') +'</p>');
						
                                   </script>";
						
						
						}
						
						
			      foreach ($xml->Question[(int)$num]->B as $Bq)
						{
								
								
		echo "<script type='text/javascript'>
						
			 $('#forQuantComparision').append('<p style=\"display:inline-block;width:200px;text-align:center;vertical-align:top;\"><span><b>QuantityB</b></span><br/><br/>' + replacecharacters('".$Bq."') +'</p>');
						

			</script>";	
								
								
								
								
								
								
								
								
								
								
								
						}
						
						
						
		$pointofCharacter = 0;
		
	    foreach ($xml->Question[(int)$num]->Option as $o)
		{
		
	       
     
		 
	     ?>
		 
		 
		<script type="text/javascript">
		 
	
		
        var text = '<?php echo $o;?>';
		 
		text  = replacecharacters(text);
		  
	
        document.getElementById('list1').innerHTML+= "<li style='list-style:none;margin:10px;vertical-align:middle;'><p style='background-image:url(images/wrong.png);height:21px;display:inline-block;width:25px;vertical-align:top;background-repeat:no-repeat'></p>"+ text +"</li>";

		


	
		</script> 
		 

		 <?php
		 	
        }  
	
	      $php_array1 = $presentUserPattern;
		  $php_array2 = $presentCorrectPattern;
          $js_array1 = json_encode($php_array1);
		  $js_array2 = json_encode($php_array2);
		  
		
		  
        echo "<script>

		var javascript_array1 = ". $js_array1 . ";
		var javascript_array2 = ". $js_array2 . ";

		</script>";



	    ?>
		
		
    <script type="text/javascript">
	 
	 

	
	    $('#list1 li input').attr({'disabled':"true"});

	
		for( i = 0;i <= javascript_array2.length; i++)
		{

		$('#list1 li p :eq('+javascript_array2[i]+')').css({"background":"url(images/correct.png)","background-repeat":"no-repeat"});
		
	     }
						 
						 
		for( i = 0;i <= javascript_array1.length; i++)
		{

		          
	    $('#list1 li :eq('+javascript_array1[i]+')').append('&nbsp;&nbsp;<span class="youranswer"> ( your answer )</span>');
		}				 
	
	 
	 
	var Qnum =  <?php echo $num;?>;


	
	 </script >
	 
	
	
	    <?php
	
	


	//echo memory_get_usage()/1000 . "kb"; // 36640

   if ($stmt2 = $mysqli->query("SELECT  answereddata.ImagePath, answereddata.IsMatched, members.Displaythumb,members.username ,answereddata.numlikes, members.id  FROM  answereddata,members WHERE Category = '$type' AND QuestionNumber = $num AND members.id = answereddata.id AND  answereddata.ImagePath != 'null' ORDER BY answereddata.numlikes DESC LIMIT 10")){
      
        $i=0;
	  while ($row = $stmt2->fetch_row())

	  {
	 

	   
echo "
<hr style='
border:1px solid #eee;width:900px;box-shadow:  0px -2px 5px #eee;'/><br/>
<div class='section'>

<img class='Thumb' src=".$row[2]." />


<div class='headLineandanswer'>";



  if($row[5] == $_SESSION['user_id'] )
  {
  
    echo "<p class='headLine'><span><b>".$row[3]." </span></b><img src = 'images/delete.png' style='float:right;display:inline-block;' onclick='answerDelete(this)'></img></p>" ;
  
  
  }
  
else{

  echo "<p class='headLine'><span><b>".$row[3]." </span></b><span></span></p>";



}
echo "<img class ='answer'  src=".$row[0]." /><br/><br/>
<img  class = 'plusminus' src='images/Like.png' onclick='Like(this)'></img>&nbsp;
<span class='numlikes'>".$row[4]."</span></div>

<div class ='totalcommentsection'>";

     
   if ($stmt3 = $mysqli->query("SELECT comments.comment,members.Displaythumb,members.id,comments.comment_id FROM comments,members WHERE comments.category = '$type' AND comments.questionnumber = $num  AND comments.imagelink = '$row[0]' AND members.id = comments.id ORDER BY comments.comment_id")){
        while ($row2 = $stmt3->fetch_row()) {
       
	   
	            if($row2[2] == $_SESSION['user_id'] ){
			  
			      echo  "<div class='commentsection'>
				         <img  class='smalldp' src='".$row2[1]."'></img>";
				  echo  "<p class='comment' ><span>".$row2[0]."</span></p>
		                <img class ='deleteComment' src='images/deleteIcon.svg' onclick='Del(this)'></img>
				        <input type='hidden'  value ='".$row2[3]."'/>
						
				  </div>";
			  
			                                      }
	   
	   
	             else
				 {
				 
	             echo  "<div class='commentsection'>
				 <img  class='smalldp' src='".$row2[1]."'></img>";
				 echo "
				 <p class='comment'><span style='font-size:13px;font-weight:bold;'>Abilash</span><br/>".$row2[0]."</p>
				 <input type='hidden'  value ='".$row2[3]."'/>
				 </div>";}
			
                                      }
				echo "</div>"	;				  
									  
	             }
	
	



echo "
<div class='inputSection'>
<textarea onkeyup = 'Comment(event , this);' style='resize: none;' cols='10' rows='3'></textarea>
</div>




</div>";


$i = $i+1;   
                
				
		
		        } //while fetch
	//echo memory_get_peak_usage()/1000 . "kb"; // 36640
   mysqli_free_result($stmt2);
///echo  $peopleansweredthisanswercorrectly ;
//echo  $i - $peopleansweredthisanswercorrectly;

		      } //image path..
		   
		   


// Edit this number to however many links you want displaying
// Select random rows from the database

?>

</div>




</div>
<br/><br/><br/><br/><br/>
<div  class='BufferMore' title ="more solutions"><p class='moresolutions'>Click here for more solutions</p></div>

<div id='footer'>

<div><a>solveby.com</a><a>BLOG</a><a>ABOUT</a><a>SUPPORT</a><a>CONTACT</a>
  <p class='copyright'><br/>
     <span>2013 &copy; Goodness me educational solutions.&nbsp;&nbsp;&nbsp;</span>
    <span class="links"><a>Terms of Service</a>|<a>&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy</a></span>
  </p></div>

</div>	


<script type="text/javascript" >



$('#'+ tabName + ' ' + 'div p :eq('+ (Qnum - 1)+')').addClass('Activepara');
//document.getElementById(tabName).getElementsByTagName('div')[0].getElementsByTagName('p')[Qnum-1].setAttribute('class','para Activepara');

$('#Textarea').html(replacecharacters('<?php  echo $q ; ?>'));








 
$(document).ready(function() { 


    var ShownAnswers = <?php echo  $i;?>;
    var availability;
	
$('.BufferMore').click(function() {

     console.log(availability);

    var Jdata = {"flow": ShownAnswers , "type":type ,"Qnum" : Qnum};
    var Jstring = JSON.stringify(Jdata);

   
    var jqxhr = $.post("getnextfew.php", "data="+encodeURIComponent(Jstring),function(data) {

	
	 console.log(data.NextFew);
	$('#Totalsection').append(data.NextFew);
	$('#Totalsection .section').show('slow');
	
     //document.getElementById('Totalsection').innerHTML += data.NextFew;
	 
	 ShownAnswers = data.SolutionNumberRunning;
	 availability = Number(data.availability) ;
	        
			
					if(availability == 0){
				
				$('.moresolutions').text("Thats all folks.")
				 
	         new Messi('<div> Thats all folks..! </div>', { autoclose : 1500,center:true});
	
	                     return false;
						 
						 
				
	
	                          }
			   
			   
		
			
			
			
			
			
			
			
			
			
	 
			
			
                        })
    .fail(function() { console.log("Cannot fetch the solutions sorry") })
	
})

});





</script>






<?php

}


else{

	  header("Location:http://localhost/GRELogin/securelogout.php");
}



?>


</body>
</html>

