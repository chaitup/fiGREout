<?php
header("Content-Type:text/xml");

  
  	
          $data = $_POST['data'];
	      $data= json_decode($data,true);
		  $QuestionNumber =  (int)$data['num'];

            
 
                    $string = file_get_contents("practicetests/homepageexam.xml");
			       
                    $xml = new SimpleXMLElement($string); 
	                
                    echo '<Question>';
	         
				    foreach ($xml->Question[$QuestionNumber]->QText as $QText)
						
						{		
						
							echo  '<QText RunningQuestion="'.$QuestionNumber.'" tag="'.$QText['tag'].'"  correct="'.$QText['correct'].'" type="'.$QText['type'].'">'.$QText.'</QText>';
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
	 
	  
	            	
											
								
			 

		


	 
	 ?>
