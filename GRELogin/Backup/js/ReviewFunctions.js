	
	
	function Del(obj){

	//alert(obj.nextSibling.nodeName);
	
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
				   
				   
   // AjaxrequestPNG("DeleteComment.php","data="+encodeURIComponent(Jstring));


     var jqxhr = $.post("DeleteComment.php", "data="+encodeURIComponent(Jstring),function(data) {

	alert('sucess');
	        // alert(evt.srcElement.parentNode.parentNode.parentNode.innerHTML);
	 
            $(obj.parentNode).css({"display":"none"});
 
                        })
.fail(function() { alert("Sorry not deleted,Check your conection or your session might have expired"); });

jqxhr();
   
 
   
    }


	
function Comment(obj)

                 {

  var comment = obj.parentNode.getElementsByTagName('textarea')[0].value;

     if(comment == "")
        {
      return false;
        }
   

   else {

    var SendableimageLink = obj.parentNode.parentNode.getElementsByClassName('answer')[0].getAttribute('src');
    //alert(SendableimageLink);
    var Jdata = {"UserComment" :comment,"Imagelink":SendableimageLink, "Type" :type,"QuestionNumber":Qnum };
	var Jstring = JSON.stringify(Jdata);
	//AjaxrequestPNG("UpdateComments.php","data="+encodeURIComponent(Jstring));
	
	
  var appender = obj.parentNode.parentNode.getElementsByClassName('totalcommentsection')[0];
	
  var jqxhr = $.post("UpdateComments.php", "data="+encodeURIComponent(Jstring),function(data) {
   


  if(data.cid != "error"){
 
  // $('body').append('<div id="alert"  style="position:fixed;left:40%;top:30%;background:white;border:10px solid //#000;color:black;height:100px;width:200px;vertical-align:middle;">Comment has been posted succesfully</div>');
  // $('#alert').fadeOut("fast");
   
 
        
 var appendant = "<div class='commentsection' ><img  class='smalldp' src='"+Dp+"' ></img><p class='comment' ><span>"+data.comment+"</span></p><img class='deleteComment' src='images/deleteIcon.svg' onclick='Del(this)'></img><input type='hidden'  value ='"+data.cid + "' /></div>";



		$(appendant).appendTo(appender);
   
            //  appendant.show('slow')   ;            
   
   
   }
   
 
})
.fail(function() { alert("Sorry Your could not be posted,,Check your conection or your session might have expired"); })

jqxhr();

$(document).ajaxStop(function() {

});

	
        }
                                                    }

function Like(obj)

{
          
     var SendableimageLink = obj.parentNode.getElementsByClassName('answer')[0].getAttribute('src') ;
	 
	 alert(SendableimageLink);
	 
     var Jdata = {"Imagelink":SendableimageLink, "Type" :type , "QuestionNumber":Qnum};
	 
     var Jstring = JSON.stringify(Jdata);


     var jqxhr = $.post("UpdateLikes.php", "data="+encodeURIComponent(Jstring),function(data) {
	 
	 alert(data);
	 
                        })
.fail(function() { alert("Sorry not deleted,Check your conection or your session might have expired"); });

jqxhr();
}	  
	
	
	


	
	
	
	
	
	
	
	
	
	