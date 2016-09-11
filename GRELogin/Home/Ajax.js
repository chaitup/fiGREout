var xhttp;
var Response="1";
function Ajax(url,data,bool)
{


  
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
		   
		   
          Response = xhttp.responseText;
		  alert(xhttp.responseText);
		  
           }
								  
			  
															  					
}
								 
								  
												  
xhttp.open("POST",url,false);
xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhttp.send(data);						  
									  
								  
								  
								  
}