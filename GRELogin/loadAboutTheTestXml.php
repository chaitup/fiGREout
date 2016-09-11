<?php

      $string = file_get_contents("aboutTheTest.xml");
			       
      $xml = new SimpleXMLElement($string); 
	                
  $GlobalQuestiondata =  $GlobalQuestiondata.'<TestContent>';
	         
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
	  
	

	  

	 ?>
