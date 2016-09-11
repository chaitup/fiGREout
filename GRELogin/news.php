<?php


$people = array("1" , "2");
	
	
	   if (in_array("1", $people)) {
	
               echo "1";
           }
	
	     array_push($people, "6");
	
	
		
	   if (in_array("6", $people)) {
	
               echo "6";
           }
	
	   echo count($people);
	

	echo serialize($people);
	
	
	echo  unserialize(serialize($people));
?>