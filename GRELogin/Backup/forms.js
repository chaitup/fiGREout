

function formhash(form, password) {
   // Create a new element input, this will be out hashed password field.
   
   checkEmail() ;
   checkUsername();
   checkPassword();
  
     if (globalEmailcheck == true && globalPasswordcheck == true  && globalUsernamecheck == true){
	 
		  var p = document.createElement("input");
   
   p.name = "p";
   p.type = 'hidden';
   p.value = hex_sha512(password.value);

   // Add the new element to our form.
   form.appendChild(p);
 
   password.value = "";
   // Finally submit the form.
  form.submit();
		  
		  
	    
	 }
   
     else{
	 
	 alert("All false");
	 
	 }
   
   

     // alert(form.email.value);
  


   
}





function formhashLogin(form, password) {
   // Create a new element input, this will be out hashed password field.
   
   
	 
   var p = document.createElement("input");
   
   p.name = "p";
   p.type = 'hidden';
   p.value = hex_sha512(password.value);

   // Add the new element to our form.
   form.appendChild(p);
 
   password.value = "";
   // Finally submit the form.
  form.submit();
		  
		  
	    
	 
   
   
  
   
}
















