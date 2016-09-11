
//Load Word from XML
function CreateTable() 
{


     if(event.srcElement.innerHTML = "LetterAforApple")
	 {

   var array = ['Ebullient' , 'Abeyance' ,'Aedolent', 'Aaroxysm','Aecuniary',
   'Aclectic','Adify','Alleivate','Erudite','Eclectic','Effuse','Evanascent','Exile','Edify',
   'Evanascent','Exile','Edify'];
   
   
    var table = document.createElement('table');
	   var str = '<input class= "search" type="text" value="SEARCH ME"/>'
    str += '<table id="Wordlist" border="1" >'; 
    str += '<tr><th>Word List</th></tr>';
    for ( var i=0; i< array.length; i++)
	{
        str += '<tr><td onclick="GetTheWord()"  id = "table'+ i +'">' + array[i] + '</td><tr>'
    }
    str += '</table>';
	document.getElementById('right').innerHTML = str;
	}
	
	    var FirsttdElement;
        FirsttdElement = document.getElementById('table0');
	    var mouseclickEvent = document.createEvent ("MouseEvent");
        mouseclickEvent.initMouseEvent("click");
		FirsttdElement.dispatchEvent(mouseclickEvent);
		
	   
	
}


function GetTheWord()

{
	
     var wordNameXml = event.srcElement.innerHTML + ".xml";
     loadXMLDoc(wordNameXml);
  

}





function loadXMLDoc(url)
{

var xmlhttp;
var txt,xx,i,x;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
    

  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	

	



	var xmlDoc = xmlhttp.responseXML;
    var doc = xmlDoc.getElementsByTagName("meaning");
	         
		 ClearandAdd();

  document.getElementById('titleone').innerHTML = xmlDoc.getElementsByTagName("heading")[0].childNodes[0].nodeValue+ "<br/>";
 
 for (var i=0;i<doc.length;i++)
  
  {
 
                var paragraph = document.createElement("p");
                paragraph.innerHTML = xmlDoc.getElementsByTagName("meaning")[i].childNodes[0].nodeValue;
                document.getElementById('FirstSection').appendChild(paragraph);

  
  
  }
  
  
   document.getElementById('titletwo').innerHTML = xmlDoc.getElementsByTagName("heading")[1].childNodes[0].nodeValue;
           
   var Picture = document.createElement("img");
   Picture.src =  xmlDoc.getElementsByTagName("image")[0].getAttribute('src');
   document.getElementById('SecondSection').appendChild(Picture);
   
   
   
   
   
  
   document.getElementById('titlethree').innerHTML =  xmlDoc.getElementsByTagName("heading")[2].childNodes[0].nodeValue;
  
  
    var fact = document.createElement("p");
    fact.innerHTML = xmlDoc.getElementsByTagName("fact")[0].childNodes[0].nodeValue;
	document.getElementById('ThirdSection').appendChild(fact);
  }
  


  
  

}



xmlhttp.open("POST","Gettheword.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("Wordnamexml="+url);

 }

 
 
 
 
 // load Questions.........................


 function ClearandAdd()
 {
 
	var strtwo = '<div id="FirstSection"><h3 id="titleone"></h3></div>';
	strtwo += '<div id="SecondSection"><h3 id="titletwo"></h3></div>';
    strtwo += '<div id="ThirdSection"><h3 id="titlethree"></h3></div>';
 
 	 document.getElementById('center').innerHTML = strtwo ;
 }
 

 
 
 
 
 
 