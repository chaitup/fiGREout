
		

 var TrackingArray =[];
 var nAns;
 var tag;
 var Qtext;
 function Ajaxrequest(url,Javascriptdata)
{




 var CheckBoxesString ="";						  
						  

var labelarray =["A " , "B ", "C ","D " ,"E ", "F " , "G ", "H ", "I ","J "];
var value;
var xhttp;
var txt,xx,i,x;



	  Jobject ={"TypeOfQuestion":Javascriptdata.split('=')[1]};
	
      var Jstring = JSON.stringify(Jobject);
	  
	  var jqxhr = $.post("getnextquestion.php", "receiveddata="+encodeURIComponent(Jstring),function(data) {
	  
	
               if(data.status == 'stop') {
  
                          clearLists();
						  
						  
             $('#tagLine').html("<a id ='tagLineLink'><label id='tagNavigation'>Your trial account consists of 10 only questions of each category !</label></a>");
                       
                          
				 document.getElementById('question').getElementsByTagName('p')[0].innerHTML = data.Questiondoc;   
   
                                return false;
								
								
								
                                       }
									   
									   
		

  var xmlDoc = $.parseXML(data.Questiondoc);

  Options = xmlDoc.getElementsByTagName("Option");

  RunningQuestion = xmlDoc.getElementsByTagName("QText")[0].getAttribute('RunningQuestion');
  
  tag = xmlDoc.getElementsByTagName("QText")[0].getAttribute('tag');

  Qtext = replacecharacters(xmlDoc.getElementsByTagName("QText")[0].childNodes[0].nodeValue);
  
 if(Javascriptdata.split('=')[1] == "MultipleChoiceOneAnswer" ){
    

	
	
	        clearLists();
		    tagStuff(tag);
 document.getElementById('question').getElementsByTagName('p')[0].innerHTML = Qtext  ;
		

		
		
		
		
		
		// Load image if exists
	var nodeV = xmlDoc.getElementsByTagName("Image")[0] ? xmlDoc.getElementsByTagName("Image")[0].getAttribute('src') : false ;
	if(nodeV != false){
		    document.getElementById('question').getElementsByTagName('img')[0].src = nodeV; 
		 	document.getElementById('question').getElementsByTagName('img')[0].style.display = "block";
	} else { } 
	
	
              	
   for (var i=0;i < Options.length;i++)
  {
   
     value = Options[i].getAttribute('correct');
	 mini = replacecharacters(Options[i].childNodes[0].nodeValue);
	
     document.getElementById('list1').innerHTML+= "<li> <input name='C1'  value='"+value+ "' type='radio' /><p class='CorrectAndWrongLabelsbeingptag' ></p>"+ mini +"</li>";


  }}
   

   
   
   
   
   
    
	
	
if(Javascriptdata.split('=')[1] == 'SentenceEquivalence' || Javascriptdata.split('=')[1] == 'MultipleChoiceMoreAnswers' )

{

         clearLists();
		 tagStuff(tag);
		 
 document.getElementById('question').getElementsByTagName('p')[0].innerHTML = Qtext;

			var nodeV = xmlDoc.getElementsByTagName("Image")[0] ? xmlDoc.getElementsByTagName("Image")[0].getAttribute('src') : false ;
	if(nodeV != false){
		  document.getElementById('question').getElementsByTagName('img')[0].src = nodeV; 
		  document.getElementById('question').getElementsByTagName('img')[0].style.display = "block";
		  		
	} else { } 
	
			
			
	  for (var i=0;i < Options.length;i++)
  {

      value = Options[i].getAttribute('correct');
	 mini = replacecharacters(Options[i].childNodes[0].nodeValue);
	 
	CheckBoxesString += "<li  style='margin-bottom:5px;' ><input class='checkbox' style='margin:2px;' name='cb' value='"+value+"' type='checkbox' class ='checkbox' onclick='KeepCount()' /><p class='CorrectAndWrongLabelsbeingptag' ></p>"+ mini +"</li>";
	 // alert(document.getElementsByName('cb')[i]);
       //TrackingArray.push(document.getElementsByName('cb')[i]);

	 
  }


     document.getElementById('list1').innerHTML = CheckBoxesString;


  
  }
  
  
  
  
  
  if(Javascriptdata.split('=')[1] == "NumericEntry"){
    
 
           clearLists();
		   tagStuff(tag);
		  
  document.getElementById('question').getElementsByTagName('p')[0].innerHTML = Qtext ;
			

			
      var textArea = "<textarea  id='numericEntry' maxlength='4' style='width:100px;height:25px;font-size:20px;padding:2px;'></textarea>"
			
	 document.getElementById('list1').innerHTML = textArea;
    	
		
		var nodeV = xmlDoc.getElementsByTagName("Image")[0] ? xmlDoc.getElementsByTagName("Image")[0].getAttribute('src') : false ;
	if(nodeV != false){
		  document.getElementById('question').getElementsByTagName('img')[0].src = nodeV; 
		  document.getElementById('question').getElementsByTagName('img')[0].style.display = "block";
		  		
	} else { } 
	    

	 for (var i=0;i < Options.length;i++)
     {

     nAns = Options[i].childNodes[0].nodeValue;
	  
     }
	
		
}
  
  
  
   if( Javascriptdata.split('=')[1] == "QuantitativeComparision" ){
    

	        clearLists();
	
		
		    tagStuff(tag);
		
		
	
            document.getElementById('question').getElementsByTagName('p')[0].innerHTML = Qtext ;
			
			
			
            var A = replacecharacters(xmlDoc.getElementsByTagName("A")[0].childNodes[0].nodeValue);
            var B = replacecharacters(xmlDoc.getElementsByTagName("B")[0].childNodes[0].nodeValue);
			 
		 	document.getElementById('forQuantComparision').innerHTML = '<p style="display:inline-block;width:200px;text-align:center;"><span style="border-bottom:1px solid #000;"><b>QuantityA</b></span><br/><br/>' + A + '</p>' ;
			document.getElementById('forQuantComparision').innerHTML += '<p style="display:inline-block;width:200px;text-align:center;vertical-align:top;margin-left:30px;"><span style="border-bottom:1px solid #000;"><b>QuantityB</b></span><br/><br/>' + B + '</p>' ;
		
			
			
			
		// Load image if exists
	var nodeV = xmlDoc.getElementsByTagName("Image")[0] ? xmlDoc.getElementsByTagName("Image")[0].getAttribute('src') : false ;
	if(nodeV != false){
		  document.getElementById('question').getElementsByTagName('img')[0].src = nodeV; 
		  document.getElementById('question').getElementsByTagName('img')[0].style.display = "block";
		  		
	} else { } 
	
	
              	
   for (var i=0;i < Options.length;i++)
  {
   
     value = Options[i].getAttribute('correct');
     document.getElementById('list1').innerHTML+= "<li style='vertical-align:middle;height:20px; line-height:18px;padding:0.1px;clear:both;'><input name='C1' value='"+value+"'type='radio' style='vertical-align:middle;' /><p class='CorrectAndWrongLabelsbeingptag' ></p>"+Options[i].childNodes[0].nodeValue+"</li>";


	 
  }
  
  	 
  
  
  }
  
  
                          $('#directsubmit').css({"display":"inline-block"});
				   	      $('#withanswer').css({"display":"none"});
     
	  
	  },"json");


  

}
								  
								  
								  
	//limit no of checkboxes to two							  
						  
								  
								  
								  
								  
								  
		function clearLists()
		
		{
		

	 document.getElementById('question').getElementsByTagName('img')[0].style.display = "none";
	 document.getElementById('list1').innerHTML = "";
	 document.getElementById('list2').innerHTML = "";
	 document.getElementById('list3').innerHTML = "";
	 document.getElementById('forQuantComparision').innerHTML = "";
	
                         $('#directsubmit').css({"display":"none"});
				   	      $('#withanswer').css({"display":"none"});
     
		
		}						  
								  
				  
		function KeepCount()
		
		
        {
		
                 var $b = $('input[name=cb]');
               // alert($b.filter(':checked').length); // works
				
				
				if($b.filter(':checked').length > 7){
				
				         
				    $(event.target).attr('checked', false);
	
				
				                                   }
		
		
		
	
		
		}

		
		
		function replacecharacters(str){
		
		
		return str.replace(/lessthan/g, '<').replace(/greaterthan/g, '>').replace(/super0/g, '\u2070').replace(/super1/g, '\u00B9').replace(/super2/g,'\u00B2').replace(/super3/g, '\u00B3').replace(/super4/g,'\u2074').replace(/super5/g,'\u2075').replace(/super6/g,'\u2076').replace(/super7/g,'\u2077').replace(/super8/g,'\u2078').replace(/super9/g,'\u2079').replace(/superx/g,'\u02e3').replace(/superplus/g,'\u207A').replace(/superminus/g,'\u207B').replace(/supern/g,'\u207F').replace(/mathpi/g,'\u03C0').replace(/lessequal/g,'\u2264').replace(/root/g,'\u221A').replace(/superm/g,'\u1d50').replace(/mathminus/g,'-');;
		

		}
