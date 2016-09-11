

 var TrackingArray =[];
 var nAns;
 var tag;
 
 function Ajaxrequest(url,data)
{


 var CheckBoxesString ="";						  
						  

var labelarray =["A " , "B ", "C ","D " ,"E ", "F " , "G ", "H ", "I ","J "];
var value;
var xhttp;
var txt,xx,i,x;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xhttp=new XMLHttpRequest();
  
  }
  
else
  {// code for IE6, IE5
  xhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
xhttp.onreadystatechange=function()
{
  
  if (xhttp.readyState==4 && xhttp.status==200)
          
		  {



		   //alert(data);
		   
		   
  var xmlDoc = xhttp.responseXML;

  Options = xmlDoc.getElementsByTagName("Option");

  RunningQuestion = xmlDoc.getElementsByTagName("QText")[0].getAttribute('RunningQuestion');
  
  tag = xmlDoc.getElementsByTagName("QText")[0].getAttribute('tag');


   
  
 if(  data.split('=')[1] == "MultipleChoiceOneAnswer" ){
    

	
	
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
     document.getElementById('list1').innerHTML+= "<li> <input name='C1'  value='"+value+ "' type='radio' /><p class='CorrectAndWrongLabelsbeingptag' ></p>"+Options[i].childNodes[0].nodeValue+"</li>";

	//  alert(document.getElementsByName('C1')[i].);
  }}
   

   
   
   
   
   
    
	
	
if(data.split('=')[1] == 'SentenceEquivalence' || data.split('=')[1] == 'MultipleChoiceMoreAnswers' )

{

        clearLists();
 document.getElementById('question').getElementsByTagName('p')[0].childNodes[0].nodeValue =
            xmlDoc.getElementsByTagName("QText")[0].childNodes[0].nodeValue

		
	
			
			
	  for (var i=0;i < Options.length;i++)
  {

      value = Options[i].getAttribute('correct');

	CheckBoxesString += "<li  style='margin-bottom:5px;' ><input class='checkbox' style='margin:2px;' name='cb' value='"+value+"' type='checkbox' class ='checkbox' onclick='KeepCount()' /><p class='CorrectAndWrongLabelsbeingptag' ></p>"+Options[i].childNodes[0].nodeValue+"</li>";
	 // alert(document.getElementsByName('cb')[i]);
       //TrackingArray.push(document.getElementsByName('cb')[i]);

	 
  }


     document.getElementById('list1').innerHTML = CheckBoxesString;


  
  }
  
  
  
  
  
  if(data.split('=')[1] == "NumericEntry"){
    

           clearLists();
  document.getElementById('question').getElementsByTagName('p')[0].childNodes[0].nodeValue =
            xmlDoc.getElementsByTagName("QText")[0].childNodes[0].nodeValue;
			

			
      var textArea = "<textarea  id='numericEntry' maxlength='4' style='width:100px;height:25px;font-size:20px;padding:2px;'></textarea>"
			
	 document.getElementById('list1').innerHTML = textArea;

	 

	 for (var i=0;i < Options.length;i++)
     {

     nAns = Options[i].childNodes[0].nodeValue;
	  
     }

		
}
  
  
  
   if( data.split('=')[1] == "QuantitativeComparision" ){
    

	        clearLists();
	
			$('#tagLine').html("<a><label id='tagNavigation'>"+ tag +"</label><label id='quickStats' style='float:right;font-weight:normal;'>MyquickStats</label></a>");
		
		

                           
			   
			$(function() {

    var hoverUserDetails = '<div class="hover-details"></div>';

    $("#quickStats").hovercard({
        detailsHTML: hoverUserDetails,
        width: 300, 
		openOnRight :true,
        onHoverIn: function () {

            $.ajax({
                url:'http://localhost/GRElogin/rukma.html',
                type: 'GET',
                success: function (data) {
		
                    $(".hover-details").empty();
                    $(data).appendTo(".hover-details");
                }
         
            });
        }
    }); 

});		   
					   
					   
					   
					 
					   
			    $("#tagNavigation").hovercard({
                             showCustomCard: true, 
                             customCardJSON: tagDesc,
                             width: 300,
	                         background: '#fff',

                                       });

		

		    tag1 = tag.split('#')[1].toString();
		    tag2 = tag.split('#')[2].toString();	


			
			
				$('#tagLine').click(function(){
	
				
	    window.location.href = "http://localhost/GRElogin/Teachinglesson.php?mainCategory="+tag1+"&subCategory="+tag2;
				
				})
			
			
			
            document.getElementById('question').getElementsByTagName('p')[0].childNodes[0].nodeValue =
            (xmlDoc.getElementsByTagName("QText")[0].childNodes[0].nodeValue).replace(/lessthan/g, '<');
			
			
			


		 	document.getElementById('forQuantComparision').innerHTML = '<p style="display:inline-block;width:200px;text-align:center;"><span style="border-bottom:1px solid #000;"><b>QuantityA</b></span><br/><br/>' + xmlDoc.getElementsByTagName("A")[0].childNodes[0].nodeValue + '</p>' ;
			document.getElementById('forQuantComparision').innerHTML += '<p style="display:inline-block;width:200px;text-align:center;vertical-align:top;margin-left:30px;"><span style="border-bottom:1px solid #000;"><b>QuantityB</b></span><br/><br/>' + xmlDoc.getElementsByTagName("B")[0].childNodes[0].nodeValue + '</p>' ;
		
			
			
			
		// Load image if exists
	var nodeV = xmlDoc.getElementsByTagName("Image")[0] ? xmlDoc.getElementsByTagName("Image")[0].getAttribute('src') : false ;
	if(nodeV != false){
		  document.getElementById('question').getElementsByTagName('img')[0].src = nodeV; 
		  document.getElementById('question').getElementsByTagName('img')[0].style.display = "block";
		  		
	} else { } 
	
	
              	
   for (var i=0;i < Options.length;i++)
  {
   
     value = Options[i].getAttribute('correct');
     document.getElementById('list1').innerHTML+= "<li style='vertical-align:middle;'><input name='C1' value='"+value+"'type='radio' style='vertical-align:middle;' /><p class='CorrectAndWrongLabelsbeingptag' ></p>"+Options[i].childNodes[0].nodeValue+"</li>";

	// <li><p style='display:inline-block;height:28px;width:25px;background:url(images/correct.PNG);vertical-align:middle;'></p>"+Options[i].childNodes[0].nodeValue+"</li>
//	alert(document.getElementsByName('C1')[i].);
  }
  
  
  
  
  }
  
  
                   $('#withanswer').css({"display":"inline-block"});
				   $('#directsubmit').css({"display":"inline-block"});

      getHoverCard();
  

  
           }
						
  
      }
 


xhttp.open("POST",url,true);
xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhttp.send(data);
 
}
								  
								  
								  
	//limit no of checkboxes to two							  
						  
								  
								  
								  
								  
								  
		function clearLists()
		
		{
		
	 document.getElementById('question').getElementsByTagName('img')[0].style.display = "none";
	 document.getElementById('list1').innerHTML = "";
	 document.getElementById('list2').innerHTML = "";
	 document.getElementById('list3').innerHTML = "";
	 document.getElementById('forQuantComparision').innerHTML ="";
	

		
		}						  
								  
				  
		function KeepCount()
		
		
        {
		
                 var $b = $('input[name=cb]');
               // alert($b.filter(':checked').length); // works
				
				
				if($b.filter(':checked').length > 7){
				
				         
				    $(event.target).attr('checked', false);
	
				
				                                   }
		
		
		
	
		
		}