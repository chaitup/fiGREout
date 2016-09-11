	
	
	function Del(obj){


       Messi.ask('<p>Do you want to delete the comment ?</p>', function(val) { 
	   
	   
	          
							
					        if(obj.nextSibling.nodeName == "INPUT")
	                   {
			
			
			     var Cid = obj.nextSibling.value;
	
	                    }
					   
			else {
			
			     var Cid = obj.nextSibling.nextSibling.value;

			
			    }		   
					   
    // window.confirm("Are you sure  you want to delete this comment ?");
                 
	// nextSibling gives Textnode...so 2 times nextSibling gives next tag

                   var Jdata = {"commentid": Cid};
                   var Jstring = JSON.stringify(Jdata);
				   
				  
     var jqxhr = $.post("deletecomment.php", "data="+encodeURIComponent(Jstring),function(data) {
  
	 
	       
            $(obj.parentNode).hide('slow', function() {
   
  });
 
                        })
.fail(function() { alert("Sorry not deleted,Check your conection or your session might have expired"); });			
							
							
			
	               });
 




   
 
   
    }


	
function Comment(e , obj)

                 {
				 
  var comment = obj.parentNode.getElementsByTagName('textarea')[0].value;
  
	if(e.keyCode != 13 || comment == "" )	
	                {
	
	           return false;
	
	                 }		 
					 
					
   else {

     comment = $.trim(comment).replace("\n", ""); 
     
    var SendableimageLink = obj.parentNode.parentNode.getElementsByClassName('answer')[0].getAttribute('src');
    //alert(SendableimageLink);
    var Jdata = {"UserComment" :comment,"Imagelink":SendableimageLink, "Type" :type,"QuestionNumber":Qnum };
	var Jstring = JSON.stringify(Jdata);
	//AjaxrequestPNG("UpdateComments.php","data="+encodeURIComponent(Jstring));
	
	
  var appender = obj.parentNode.parentNode.getElementsByClassName('totalcommentsection')[0];
	
  var jqxhr = $.post("updatecomments.php", "data="+encodeURIComponent(Jstring),function(data) {
   

             
  if(data.cid != "error"){
 
  // $('body').append('<div id="alert"  style="position:fixed;left:40%;top:30%;background:white;border:10px solid //#000;color:black;height:100px;width:200px;vertical-align:middle;">Comment has been posted succesfully</div>');
  // $('#alert').fadeOut("fast");
   
 
        
 var appendant = "<div class='commentsection' style='display: none;' ><img  class='smalldp' src='"+Dp+"' ></img><p class='comment' ><span>"+data.comment+"</span></p><img class='deleteComment' src='images/deleteIcon.svg' onclick='Del(this)'></img><input type='hidden'  value ='"+data.cid + "' /></div>";



		$(appendant).appendTo(appender).show('slow');
   
            //  appendant.show('slow')   ;            
   
   
   }
   
 
})
.fail(function() { alert("Sorry Your could not be posted,,Check your conection or your session might have expired"); })




	
        }
                                                    }

function Like(obj)

{
          
     var SendableimageLink = obj.parentNode.getElementsByClassName('answer')[0].getAttribute('src') ;

	 
     var Jdata = {"Imagelink":SendableimageLink, "Type" :type , "QuestionNumber":Qnum};
	 
     var Jstring = JSON.stringify(Jdata);


     var jqxhr = $.post("updatelikes.php", "data="+encodeURIComponent(Jstring),function(data) {
	 
	                 alert(data[1]);
	 
	 
                        },"json")
.fail(function() { console.log("Sorry,Error!") });


}	  
	
	
	
function answerDelete(obj){

var answer = $($(obj).parent().parent()).find('.answer').attr('src');
    
var sektion = $(obj).parent().parent().parent();


var r = confirm("Do you want to delete");
if (r==true)
  {
  x = "You pressed OK!";
  console.log(x);
  }
else
  {
  x = "You pressed Cancel!";
  return false;
  }











	var Jdata = {"Imagelink" : answer, "Type" : type , "QuestionNumber": Qnum };
	 
	 
	   console.log(answer);
	   console.log(type);
	   console.log(Qnum);
	 
	 
     var Jstring = JSON.stringify(Jdata);


     var jqxhr = $.post("deleteanswer.php", "data="+encodeURIComponent(Jstring),function(data) {
	 
	               console.log(data.token);
	                $(sektion).hide();
	 
                        })
.fail(function() { console.log("Sorry,Error!") });

}

	
	
	
	
	
		  


function replacecharacters(str){
		
		
 return str.replace(/lessthan/g, '<').replace(/greaterthan/g, '>').replace(/super0/g, '\u2070').replace(/super1/g, '\u00B9').replace(/super2/g,'\u00B2').replace(/super3/g, '\u00B3').replace(/super4/g,'\u2074').replace(/super5/g,'\u2075').replace(/super6/g,'\u2076').replace(/super7/g,'\u2077').replace(/super8/g,'\u2078').replace(/super9/g,'\u2079').replace(/superx/g,'\u02e3').replace(/superplus/g,'\u207A').replace(/supern/g,'\u207F');
		
	
}
	
	
	
	
	
	
	
	
	
	