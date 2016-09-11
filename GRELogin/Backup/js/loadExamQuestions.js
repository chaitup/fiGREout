function startTheTest(){



    var Jstring = {property : "123"};

  var jqxhr = $.post("http://localhost/GRElogin/getExamQuestions.php", "data="+encodeURIComponent(Jstring),function(data) {

          alert(data);
		  
		  return false;
		  
 if(data.split('=')[1] == "MultipleChoiceOneAnswer" ){
    

	        clearLists();
            document.getElementById('question').getElementsByTagName('p')[0].childNodes[0].nodeValue =
            xmlDoc.getElementsByTagName("QText")[0].childNodes[0].nodeValue    
		
			
		// Load image if exists
	var nodeV = xmlDoc.getElementsByTagName("Image")[0] ? xmlDoc.getElementsByTagName("Image")[0].getAttribute('src') : false ;
	if(nodeV != false){
		    document.getElementById('question').getElementsByTagName('img')[0].src = nodeV; 
		 	document.getElementById('question').getElementsByTagName('img')[0].style.display = "block";
	} else { } 
	
	
              	
   for (var i=0;i < Options.length;i++)
  {
   
     value = Options[i].getAttribute('correct');
     document.getElementById('list1').innerHTML+= "<li> <input name='C1'  value='"+value+ "' type='radio' />"+Options[i].childNodes[0].nodeValue+"</li>";

	//  alert(document.getElementsByName('C1')[i].);
  }}
   
   
   //TYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY

  
  //YHJUJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJ
   
   
   
   
   
      

  /////////////////
if(data.split('=')[1] == 'SentenceEquivalence' || data.split('=')[1] == 'MultipleChoiceMoreAnswers' )

{

        clearLists();
 document.getElementById('question').getElementsByTagName('p')[0].childNodes[0].nodeValue =
            xmlDoc.getElementsByTagName("QText")[0].childNodes[0].nodeValue


			
			
	  for (var i=0;i < Options.length;i++)
  {

      value = Options[i].getAttribute('correct');

	CheckBoxesString += "<li  style='margin-bottom:5px;' ><input class='checkbox' style='margin:2px;' name='cb' value='"+value+"' type='checkbox' class ='checkbox' onclick='KeepCount()' />"+Options[i].childNodes[0].nodeValue+"</li>";
	 // alert(document.getElementsByName('cb')[i]);
       //TrackingArray.push(document.getElementsByName('cb')[i]);

	 
  }


     document.getElementById('list1').innerHTML = CheckBoxesString;


  
  }
  
  
  
  
  
  if(data.split('=')[1] == "NumericEntry"){
    

     clearLists();
  document.getElementById('question').getElementsByTagName('p')[0].childNodes[0].nodeValue =
            xmlDoc.getElementsByTagName("QText")[0].childNodes[0].nodeValue

			






		
}
  
  
  
   if( data.split('=')[1] == "QuantitativeComparision" ){
    

	        clearLists();
            document.getElementById('question').getElementsByTagName('p')[0].childNodes[0].nodeValue =
            (xmlDoc.getElementsByTagName("QText")[0].childNodes[0].nodeValue).replace(/lessthan/g, '<');
			
			
			

		 	document.getElementById('forQuantComparision').innerHTML = '<p style="display:inline-block;width:250px;text-align:center;"><span style="border-bottom:1px solid #000;"><b>QuantityA</b></span><br/><br/>' + xmlDoc.getElementsByTagName("A")[0].childNodes[0].nodeValue + '</p>' ;
			document.getElementById('forQuantComparision').innerHTML += '<p style="display:inline-block;width:250px;text-align:center;vertical-align:top;margin-left:30px;"><span style="border-bottom:1px solid #000;"><b>QuantityB</b></span><br/><br/>' + xmlDoc.getElementsByTagName("B")[0].childNodes[0].nodeValue + '</p>' ;
		
			
			
			
		// Load image if exists
	var nodeV = xmlDoc.getElementsByTagName("Image")[0] ? xmlDoc.getElementsByTagName("Image")[0].getAttribute('src') : false ;
	if(nodeV != false){
		  document.getElementById('question').getElementsByTagName('img')[0].src = nodeV; 
		  document.getElementById('question').getElementsByTagName('img')[0].style.display = "block";
		  		
	} else { } 
	
	
              	
   for (var i=0;i < Options.length;i++)
  {
   
     value = Options[i].getAttribute('correct');
     document.getElementById('list1').innerHTML+= "<li style='vertical-align:middle;'><input name='C1' value='"+value+"'type='radio' style='vertical-align:middle;' /><p style='display:inline-block;width:10px;height:10px;vertical-align:middle;' ></p>"+Options[i].childNodes[0].nodeValue+"</li>";

	// <li><p style='display:inline-block;height:28px;width:25px;background:url(images/correct.PNG);vertical-align:middle;'></p>"+Options[i].childNodes[0].nodeValue+"</li>
//	alert(document.getElementsByName('C1')[i].);
  }}
  
   
   
	 
                        },"text")
      .fail(function() { alert("Cannot fetch Sorry"); });

      jqxhr();
  


      

	}						  
								  
								  
	//limit no of checkboxes to two							  
						  
								  
								  
								  
								  
								  

		