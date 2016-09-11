 function validate() 
	{
	

	
	
	//alert($('#svgContainer').height());
	R.setSize("100%", $('#svgContainer').height());
	
      //  alert(R.height);
	 
	//document.getElementById('svgContainer').childNodes.length);
	
	  $('#svgContainer').children()[3].remove();
	  $('#svgContainer').children()[2].remove();
     $('#svgContainer').children()[1].remove();

        //return false;

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
	

	
         radiosC1 = document.getElementsByName("C1");
	         
			   
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
 


 
 
 if(C1checked)
		
	
	       {
	
    UserAnswerPattern      =  UserAnswerC1;
    CorrectAnswerPattern   =  CorrectAnswerC1;
    var IsCorrectlyAnswered =  (UserAnswerPattern == CorrectAnswerPattern)? "true" :"false"; 
	
	
         if(event.target.id == 'withanswer'){
		 
	     ImageString = document.getElementById('svgContainer').innerHTML;

	                                        }
				  
				  
		 else   {

		 ImageString = 'null';	 
		 
				     }
					 
				 
	
	Jobject = { "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered};
	
	       var Jstring = JSON.stringify(Jobject);
	
	     var jqxhr = $.post("UpdateAnsweredQuestion.php", "data="+encodeURIComponent(Jstring),function(data) {

	             for(i = 0; i < radiosC1.length; i++) 
			        {
			
				//$(‘ul li:eq(n)’);
				    $('#list1 li input :eq('+i+')').attr('disabled',"true");
				    $('#list1 li p :eq('+i+')').css({"width":"25px","height":"27px","background":"url(images/wrongtick.png)","opacity" : "1","background-repeat":"no-repeat"});
				 
				      if(radiosC1[i].value == '1')
				   {
				   
				   
				    $('#list1 li p :eq('+i+')').css({"width":"25px","height":"27px","background":"url(images/tick.png)","opacity" : "1","background-repeat":"no-repeat"});
				   

				   }
				   
				   }
				   
				   
				   $('#withanswer').css({"display":"none"});
				   $('#directsubmit').css({"display":"none"});
 
                                  })
.fail(function() { alert("Sorry not deleted,Check your conection or your session might have expired"); });

    jqxhr();

  //fire the ajax request;
  
 

  
  
  
  
  

	       }  
		   
 else{
		   
		alert(RunningQuestion) ;  
		   
		   
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
	
	
	
	
	        if(event.target.id == 'withanswer'){
		 
	                             ImageString = document.getElementById('svgContainer').innerHTML;

	                                           }
				  
				  
		    else                               {

		                       ImageString = 'null';	 
		 
				                               }
	


	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered};
	
	var Jstring = JSON.stringify(Jobject);
	
	     var jqxhr = $.post("UpdateAnsweredQuestion.php", "data="+encodeURIComponent(Jstring),function(data) {

	             for(i = 0; i < $checkBoxsC1.length; i++) 
			        {
			
				    $('#list1 li input :eq('+i+')').attr('disabled',"true");
				    $('#list1 li p :eq('+i+')').css({"width":"25px","height":"27px","background":"url(images/wrongtick.png)","opacity" : "1","background-repeat":"no-repeat"});
				 
				      if($checkBoxsC1[i].value == '1')
				   {
				   
				   
				    $('#list1 li p :eq('+i+')').css({"width":"25px","height":"27px","background":"url(images/tick.png)","opacity" : "1","background-repeat":"no-repeat"});
				   

				   }
				   
				   }
				   
				   
				   $('#withanswer').css({"display":"none"});
				   $('#directsubmit').css({"display":"none"});
 
                                  })
.fail(function() { alert("Sorry not deleted,Check your conection or your session might have expired"); });

    jqxhr();
		 	 
		 
		 }	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		 if(Type == 'NumericEntry')
	 { 
	 


    UserAnswerPattern = $('#list1').find('textarea').val();

	
	
	         if(event.target.id == 'withanswer'){
		 
	     ImageString = document.getElementById('svgContainer').innerHTML;

	                                        }
				  
				  
		 else       {

		 ImageString = 'null';	  
				     }
					 
					 
      document.getElementById('directsubmit').disabled = true;
      document.getElementById('withanswer').disabled = true;		
	
	


	nAns = Number(nAns);
	
	UserAnswerPattern = Number(UserAnswerPattern);

    var IsCorrectlyAnswered =  (nAns == UserAnswerPattern)? "true" :"false"; 
	
	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": nAns,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered};
	
		var Jstring = JSON.stringify(Jobject);
	     var jqxhr = $.post("UpdateAnsweredQuestion.php", "data="+encodeURIComponent(Jstring),function(data) {

				   
				   $('#withanswer').css({"display":"none"});
				   $('#directsubmit').css({"display":"none"});
 
                                  })
.fail(function() { alert("Sorry  error occurred ,Check your conection or your session might have expired"); });

    jqxhr();
	
	
	
	
	
	
		 	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}	
	
	
	
	
	

	
	
	
	
	
	
	