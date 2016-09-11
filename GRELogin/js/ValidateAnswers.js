 function validate() 
	{
	


	

	
	
	
	
	// $('.what').css({"display":"none"});
	//alert($('#svgContainer').height());

	  
	      var   maintag = tag.split('#')[1];

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
			
	
	
	
	
	//MultipleChoiceOneAnswer    or QuantitativeComparision
	
	
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
	
    ImageString = 'null';	 
		 
		 
	Jobject = { "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered ,"maintag":maintag};
	
	       var Jstring = JSON.stringify(Jobject);
	
	     var jqxhr = $.post("updateansweredquestion.php", "data="+encodeURIComponent(Jstring),function(data) {

	             for(i = 0; i < radiosC1.length; i++) 
			        {
			
				//$(‘ul li:eq(n)’);
				    $('#list1 li input :eq('+i+')').attr('disabled',"true");
					
				    $('#list1 li p :eq('+i+')').css({"width":"20px","height":"20px","background":"url(images/wrong.png)","opacity" : "1","background-repeat":"no-repeat"});
				 
				      if(radiosC1[i].value == '1')
				   {
				   
				   
				    $('#list1 li p :eq('+i+')').css({"width":"20px","height":"20px","background":"url(images/correct.png)","opacity" : "1","background-repeat":"no-repeat"});
				   

				   }
				   
				   }
				   
				   
				  $('#directsubmit').css({"display":"none"});
				  
				  	   if(IsCorrectlyAnswered == "true") {
				  
					   $('#withanswer').css({"display":"inline-block"}); 
					   }
					   
					   
					    
				  	   if(IsCorrectlyAnswered == "false") {
						   
						   	   $('#withanswer').css({"display":"none"}); 
						   
						   
					   }
					   
					   
					   
					   
					   
 
                                  })
.fail(function() { alert("Sorry not deleted,Check your conection or your session might have expired"); });

   


 

  


	       }  
		   
 else{
		   	attempt();
	
		   
		   
 }
	
	
	
	}   	
    
	

    
	
	
	
	
	
	
	
	
	
	
	
       //	MultipleChoiceMoreAnswers

	
	
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
							 
							                  UserAnswerC1 =    UserAnswerC1 + String(index);
							 
							                         }
							 
							 
							 
                            }
                                    );
		
		
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
	
	ImageString = 'null';	 
		 
				                           
	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered,"maintag":maintag};
	
	var Jstring = JSON.stringify(Jobject);
	
	     var jqxhr = $.post("updateansweredquestion.php", "data="+encodeURIComponent(Jstring),function(data) {

	             for(i = 0; i < $checkBoxsC1.length; i++) 
			        {
			
				    $('#list1 li input :eq('+i+')').attr('disabled',"true");
				    $('#list1 li p :eq('+i+')').css({"width":"20px","height":"20px","background":"url(images/wrong.png)","opacity" : "1","background-repeat":"no-repeat"});
				 
				      if($checkBoxsC1[i].value == '1')
				   {
				   
				   
				    $('#list1 li p :eq('+i+')').css({"width":"20px","height":"20px","background":"url(images/correct.png)","opacity" : "1","background-repeat":"no-repeat"});
				   

				   }
				   
				   }
				   
	                    
				       $('#directsubmit').css({"display":"none"});
					   
					  	   if(IsCorrectlyAnswered == "true") {
				  
					   $('#withanswer').css({"display":"inline-block"}); 
					   }
					   
					   
					    
				  	   if(IsCorrectlyAnswered == "false") {
						   
						   	   $('#withanswer').css({"display":"none"}); 
						   
						   
					   }
					   
                                  })
.fail(function() { alert("Sorry not deleted,Check your conection or your session might have expired"); });


		 	 
		 
		 }




else{

attempt();

}

		 }
	
	
	
	
	//NumericEntry.........................

		 if(Type == 'NumericEntry')
	 { 
	 


    UserAnswerPattern = $('#list1').find('textarea').val();

	  if(UserAnswerPattern == ""){
	  
	         attempt();
	  
	         return false;
	  
	  }
	
	
	
				  
   ImageString = 'null';	  
		 
					
	nAns = Number(nAns);
	
	UserAnswerPattern = Number(UserAnswerPattern);

    var IsCorrectlyAnswered =  (nAns == UserAnswerPattern)? "true" :"false"; 
	
	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": nAns,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered ,"maintag":maintag};
	
		var Jstring = JSON.stringify(Jobject);
	     var jqxhr = $.post("updateansweredquestion.php", "data="+encodeURIComponent(Jstring),function(data) {

				      
				       $('#directsubmit').css({"display":"none"});
					   
					   
		
	  	   if(IsCorrectlyAnswered == "true") {
				  
					   $('#withanswer').css({"display":"inline-block"}); 
					   }
					   
					   
					    
				  	   if(IsCorrectlyAnswered == "false") {
						   
						   	   $('#withanswer').css({"display":"none"}); 
						   
						   
					   }
				   
				   
			
                                  })
.fail(function() { alert("Sorry  error occurred ,Check your conection or your session might have expired"); });


	
	
	
	
	
	
		 	}
	
	
	
	
	
	
	
	


}	
	
	
function attempt(){
  	
	new Messi("<p style='font:14px Trebuchet MS;'> Please choose the answer </p>" , {modal: true , titleClass:'success' });

}	
	
	
	
	
	
	
	
//	updateexplnation
	
	

function  updateexplnation(){

	R.setSize("100%", $('#svgContainer').height());

        $('#svgContainer div').remove();
  

  
new Messi("<h2 style='font:20px Trebuchet MS'>Your solution &darr;</h2> <br/><br/>" + document.getElementById('svgContainer').innerHTML, {buttons: [{id:"no",label:"Make Changes",val:"no","class":"btn-danger"},{id:"yes", label:"Submit", val:"yes", "class":"btn-success"}] , width : '800px' , callback: function(val) { 



            if(val == 'no'){
			
			
			       return false;
			
			}
               

			   
     ImageString = document.getElementById('svgContainer').innerHTML;

	
	
    Jobject = { "Category": Type , "AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString };
	
	     var Jstring = JSON.stringify(Jobject);
	
	     var jqxhr = $.post("updateexplanation.php", "data="+encodeURIComponent(Jstring),function(data) {
				   
			   	   $('#withanswer').css({"display":"none"});
 
                                  })
.fail(function() { alert("Sorry not deleted,Check your conection or your session might have expired"); }); 



}



});
  
  
/*   
       Messi.ask(document.getElementById('svgContainer').innerHTML, function(val) { 
	
  

                });
				 */
				
				
  
      


}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
/* 	 if(Type == 'SentenceEquivalence')
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

	ImageString = "null";

	Jobject ={ "Category": Type,"UserAnswerPattern":  UserAnswerPattern,
	"CorrectAnswerPattern": CorrectAnswerPattern,"AnsweredQuestionNumber":RunningQuestion,
	"Imagedata":ImageString,"IsCorrectlyAnswered":IsCorrectlyAnswered,"maintag":maintag};
	
	var Jstring = JSON.stringify(Jobject);
	
   AjaxrequestPNG("updateansweredquestion.php","data="+encodeURIComponent(Jstring)); 
		 	 
		 
		 }	
		 
		 
	else {
	
	attempt();
	
	
	}	 
		 
		 
		 
		 
 
		 } */