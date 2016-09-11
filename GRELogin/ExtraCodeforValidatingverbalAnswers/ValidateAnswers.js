 function validate() 
	{
	
	

	      var radiosC1;
		  var radiosC2;
		  var radiosC3;

		  var  C1checked = false;
		  var  C2checked;
		  var  C3checked;
		
		  var  UserAnswerC1;  var CorrectAnswerC1;
		  var  UserAnswerC2;  var CorrectAnswerC2;
		  var  UserAnswerC3;  var CorrectAnswerC2;
		
		var UserAnswerPattern;
		var CorrectAnswerPatern;
		
		
	        var Ischecked =false;
            var i;
            var right;
			var corerctAnswer;
			var UserAnswer;
			
	
	
	
	
	 if(Type == 'MultipleChoiceOneAnswer' || Type == 'QuantitativeComparision' ){ 
	
	alert(Type);
         radiosC1 = document.getElementsByName("C1");
	         
			   
            for(i = 0; i < radiosC1.length; i++) 
			{
			
			
			       if(radiosC1[i].value == '1'){
				   
				    CorrectAnswerC1 = i;
				   }
		           
		
						
						
				 if(radiosC1[i].checked == true) 
				  
				  {
				  
			              C1checked = true;
						  UserAnswerC1 = i;
						
						
                  }
				  
            }
 


 
 
 if(C1checked)
		
	
	       {
	
      UserAnswerPattern    =  UserAnswerC1;
    CorrectAnswerPattern   =  CorrectAnswerC1;
     var IsCorrectlyAnswered =  (UserAnswerPattern == CorrectAnswerPattern)? "true" :"false"; 
	
	
	ImageString = document.getElementById('svgContainer').innerHTML;
	
	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered};
	
	var Jstring = JSON.stringify(Jobject);
	
   AjaxrequestPNG("UpdateAnsweredQuestion.php","data="+encodeURIComponent(Jstring));
  //fire the ajax request;

	       }  
		   
 else{
		   
		alert(RunningQuestion) ;  
		   
		   
 }
	
	
	
	}   	
    
	

	 if(Type == 'TextCompletionTwoOption')
	 { 
	
	
	 
	
          radiosC1 = document.getElementsByName("C1");
		  radiosC2 = document.getElementsByName("C2");
	    for(i = 0; i < radiosC1.length; i++) 
			{
			
			
			       if(radiosC1[i].value == '1')
				   {
				   
				    CorrectAnswerC1 = i;
				   }
		           
		
						
						
				 if(radiosC1[i].checked == true) 
				  
				  {
			              C1checked = true;
						  UserAnswerC1 = i;
						
                  }
				  
            }
 
	 
	 
	     for(i = 0; i < radiosC2.length; i++) 
			{
			
			
			       if(radiosC2[i].value == '1'){
				   
				    CorrectAnswerC2 = i;
				   }
		           
		
						
						
				 if(radiosC2[i].checked == true) 
				  
				  {
				  
			              C2checked = true;
						  UserAnswerC2 = i;
						
						
                  }
				  
            }
			
			
		 if(C1checked && C2checked){
		 
		
 UserAnswerPattern    =  (UserAnswerC1.toString()).concat(UserAnswerC2.toString());
 CorrectAnswerPattern =  (CorrectAnswerC1 .toString()).concat(CorrectAnswerC2.toString());

     
    var IsCorrectlyAnswered =  (UserAnswerPattern  == CorrectAnswerPattern)? "true" :"false"; 
	
	ImageString = document.getElementById('svgContainer').innerHTML;
	
	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered};
	
	var Jstring = JSON.stringify(Jobject);
	
   AjaxrequestPNG("UpdateAnsweredQuestion.php","data="+encodeURIComponent(Jstring));
		 	 
		 
		 }	
	
   }
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 if(Type == 'TextCompletionThreeOption')
	 { 
	
	
	 
	
           radiosC1 = document.getElementsByName("C1");
		   radiosC2 = document.getElementsByName("C2");
		   radiosC3 = document.getElementsByName("C3");
	    for(i = 0; i < radiosC1.length; i++) 
			{
			
			
			       if(radiosC1[i].value == '1')
				   {
				   
				    CorrectAnswerC1 = i;
				   }
		           
		
						
						
				 if(radiosC1[i].checked == true) 
				  
				  {
			              C1checked = true;
						  UserAnswerC1 = i;
						
                  }
				  
            }
 
	 
	 
	     for(i = 0; i < radiosC2.length; i++) 
			{
			
			
			       if(radiosC2[i].value == '1'){
				   
				    CorrectAnswerC2 = i;
				   }
		           
		
						
						
				 if(radiosC2[i].checked == true) 
				  
				  {
				  
			              C2checked = true;
						  UserAnswerC2 = i;
						
						
                  }
				  
            }
			
			
			
			
			  for(i = 0; i < radiosC3.length; i++) 
			{
			
			
			       if(radiosC3[i].value == '1'){
				   
				    CorrectAnswerC3 = i;
				   }
		           
		
						
						
				 if(radiosC3[i].checked == true) 
				  
				  {
				  
			              C3checked = true;
						  UserAnswerC3 = i;
						
						
                  }
				  
            }
				
			

			
		 if(C1checked && C2checked && C3checked){
		 
		
 UserAnswerPattern    =  ((UserAnswerC1.toString()).concat(UserAnswerC2.toString())).concat(UserAnswerC3.toString());
 CorrectAnswerPattern =  ((CorrectAnswerC1 .toString()).concat(CorrectAnswerC2.toString())).concat(CorrectAnswerC3.toString());

     alert(UserAnswerPattern);
	 alert(CorrectAnswerPattern);
    var IsCorrectlyAnswered =  (UserAnswerPattern  == CorrectAnswerPattern)? "true" :"false"; 
	
	ImageString = document.getElementById('svgContainer').innerHTML;
	
	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered};
	
	var Jstring = JSON.stringify(Jobject);
	
   AjaxrequestPNG("UpdateAnsweredQuestion.php","data="+encodeURIComponent(Jstring));
		 	 
		 
		 }	
			
			
			
    }
	
	
	
	
	
	
	
	
	
	 if(Type == 'SentenceEquivalence')
	 { 
	       CorrectAnswerC1 ="";
	        UserAnswerC1 = "" ;
	            var $checkBoxsC1 = $('input[name=cb]');
       
				if($checkBoxsC1.filter(':checked').length == 2)
				{
				
				
				$("input[name=cb]").each(
                  function(index) {
                             
							      if(this.checked == true){
							 
							                  UserAnswerC1 =    UserAnswerC1 +String(index);
							 
							                         }
							 
							 
							 
                            }
                                    );
				// alert($checkBoxsC1.filter(':checked')[0].value);
				//alert($checkBoxsC1.indexOf($checkBoxsC1.filter(':checked')[0]));
				//alert($checkBoxsC1.indexOf($checkBoxsC1.filter(':checked')[1]));
		
				  C1checked = true;
				
			    }
			
			  for(i = 0; i < $checkBoxsC1.length; i++) 
			 
			 
			 {
			
			    if($checkBoxsC1[i].value == "1") 
				  
				  {
				  
						       CorrectAnswerC1 =   CorrectAnswerC1 + String(i);
						
						
                  }
			     
			
			
			 }
			
				
		
			
		 if(C1checked){
		 
		
 UserAnswerPattern    =  (UserAnswerC1.toString());
 CorrectAnswerPattern =  (CorrectAnswerC1.toString());

    var IsCorrectlyAnswered =  (UserAnswerPattern  == CorrectAnswerPattern)? "true" :"false"; 

	ImageString = document.getElementById('svgContainer').innerHTML;

	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered};
	
	var Jstring = JSON.stringify(Jobject);
	
   AjaxrequestPNG("UpdateAnsweredQuestion.php","data="+encodeURIComponent(Jstring)); 
		 	 
		 
		 }	}
	
	
	
	
	
	
	
	
	
	
	
		 if(Type == 'MultipleChoiceMoreAnswers')
	 { 
	         CorrectAnswerC1 ="";
	         UserAnswerC1 = "" ;
	            var $checkBoxsC1 = $('input[name=cb]');
       
				if($checkBoxsC1.filter(':checked').length > 0)
				{
				
				
				$("input[name=cb]").each(
                  function(index) {
                             
							      if(this.checked == true){
							 
							                  UserAnswerC1 =    UserAnswerC1 +String(index);
							 
							                         }
							 
							 
							 
                            }
                                    );
				// alert($checkBoxsC1.filter(':checked')[0].value);
				//alert($checkBoxsC1.indexOf($checkBoxsC1.filter(':checked')[0]));
				//alert($checkBoxsC1.indexOf($checkBoxsC1.filter(':checked')[1]));
		
				  C1checked = true;
				
			    }
			
			  for(i = 0; i < $checkBoxsC1.length; i++) 
			 
			 
			 {
			
			    if($checkBoxsC1[i].value == "1") 
				  
				  {
				  
						       CorrectAnswerC1 =   CorrectAnswerC1 + String(i);
						
						
                  }
			     
			
			
			 }
			
				
		
			
		 if(C1checked){
		 
		
 UserAnswerPattern    =  (UserAnswerC1.toString());
 CorrectAnswerPattern =  (CorrectAnswerC1.toString());

    var IsCorrectlyAnswered =  (UserAnswerPattern  == CorrectAnswerPattern)? "true" :"false"; 

	ImageString = document.getElementById('svgContainer').innerHTML;

	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered};
	
	var Jstring = JSON.stringify(Jobject);
	
   AjaxrequestPNG("UpdateAnsweredQuestion.php","data="+encodeURIComponent(Jstring)); 
		 	 
		 
		 }	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}	
	
	
	
	
	

	
	
	
	
	
	
	