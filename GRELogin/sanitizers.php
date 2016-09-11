<?php

function Sanitize($Catogery){

  $input  = $Catogery ;
  
$Catogery = strtolower(cleanInput($input));

switch ($Catogery) {
    case "multiplechoiceoneanswer":
          return true;
          break;
    case "multiplechoicemoreanswers":
         return true;
         break;
    case "quantitativecomparision":
         return true;
         break;
    case "numericentry":
         return true;
         break;
    default:
      return false;
}

}



  function cleanInput($in) {
 
  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );
     $output = preg_replace($search, '', $in);
        return $output;
      }


 
?>