<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {


 
   ?>
   
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head >
    <title>Solveby</title>
    <link rel="shortcut icon" href="pencil.ico" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="title" content="GRE Quantitative, GRE math , GRE , revised GRE , GRE online, GRE practice ,GRE free practice tests....">

    <meta name="description" content="GRE Quantitative, GRE math , GRE , revised GRE , GRE online, GRE practice ,GRE free practice tests....">

    <meta name="keywords" content="GRE Quantitative, GRE math , GRE , revised GRE , GRE online, GRE practice ,GRE free practice tests.... ">

 <link rel="stylesheet" type="text/css" href="question.css" media="screen" />
 <script type='text/javascript' src='js/jquery.js'></script>
 <script type="text/javascript" src='js/hovercard.js'></script>
      <script src="js/raphael.js"></script>
	  <script src="js/LoadQuestions.js"></script>
	  <script src="js/graphael.js"></script>
	  <script src="js/UI.js"></script>	
	  <script src="js/raphaelobjects.js"></script>  
	  <script type="text/javascript" src="js/raphael.free_transformO.js"></script>
	  <script src="js/ValidateAnswers.js" type="text/javascript"></script> 
      <script src="js/Ajax.js"></script>		   

	  <script src="js/jquery-ui-1.10.3.custom.min.js"></script> <!-- resize canvas  -->
      <script type='text/javascript' src='js/messi.min.js'></script>
	  <link rel="stylesheet" href="css/joyride-2.0.3.css" type="text/css" media="screen">
      <script type='text/javascript' src='js/jquery.joyride-2.0.3.js'></script>
	  <link rel="stylesheet" type="text/css" href="css/headerlogin.css" media="screen" />
	  <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.min.css" media="screen" />
	  <link rel="stylesheet" type="text/css" href="css/messi.css" media="screen" />
	  <link rel="stylesheet"  type="text/css" href="css/TableCSSCode.css" media="screen"/>
	  


 </head>
  
 <body >	
	  
    <div class='extremeblocks'>
	<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M10.129,22.186 16.316,15.999 10.129,9.812 13.665,6.276 23.389,15.999 13.665,25.725z" stroke="white" fill="white"  transform="scale(1.2)" />
      </svg>
	</div>
	
    <div class='extremeblocks'>
	<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M21.871,9.814 15.684,16.001 21.871,22.188 18.335,25.725 8.612,16.001 18.335,6.276z" stroke="white" fill="white"  transform="scale(1.2)" />
      </svg>
	</div>


<div class='enclosure'>
<div id='mainNavigation'>

<div >
<h1 style='margin-top:20px;'> <img G src='images/logo_pic_white.png'></img></h1>
</div>


<div id='Mainlinks' >
<ul>
<li><a href="./userpage.php">Practice</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./statistics.php">Statistics</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./settings.php">Settings</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./teachinglesson.php">Lessons</a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </li>
</ul>
</div>

<a id ='signout' href='securelogout.php'>
<img src='images/logout.png' ></img><br/>
<p> Signout </p>
</a>



<br/>

</div>

</div>


<br/>


<div id="Wrap">
	
<div id="upperWrap"  >

<div id="LWrap">

<div id="accordion" style="opacity:0;">
	<dl  class="accordion" id="slider">
	
	

		<dt id='QCdt'>Quantitative Comparison </dt>
		<dd>
	 <div id="QC" value ="QuantitativeComparision" onclick="nextquestionrequest(this);" class='reviewIcon'>
			Next <br/><br/>	<img src='images/next.svg' style='height:40px;'></img>
	  
	     </div>		

	  	<a href='loadimages.php?type=QuantitativeComparision&num=def' class='reviewIcon' ><div  value ="TextCompletionTwoOption">
			Review<br/><br/><img src='images/review.svg'></img>
	   </div></a>
	   

	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
		</dd>
		

		
		
		
		 <dt >Select One or More Answer Choices</dt>
		<dd>
		<div id="MO" value ="MultipleChoiceMoreAnswers" onclick="nextquestionrequest(this);">
			New<br/><br/>	<img src='images/next.svg' style='height:40px;'></img>
	   </div>		
	
	   	<a href = 'loadimages.php?type=MultipleChoiceMoreAnswers&num=def' class='reviewIcon'><div  value ="TextCompletionThreeOption" >
			Review<br/><br/><img src='images/review.svg'></img>
	   </div></a>
	  
		</dd>
		
		
		
		
		<dt > Select One Answer Choice</dt>
		<dd>     
  	<div id="MM" value ="MultipleChoiceOneAnswer" onclick="nextquestionrequest(this);">
			New<br/><br/><img src='images/next.svg' style='height:40px;'></img>
	 
	   </div>		
	
	 	<a href = 'loadimages.php?type=MultipleChoiceOneAnswer&num=def' class='reviewIcon'>  	<div >
			Review<br/><br/><img src='images/review.svg'></img>
	   </div></a>
	   
		<dt >Numeric Entry Questions</dt>
		<dd>     
    <div id="NE" value ="NumericEntry" onclick="nextquestionrequest(this);">
			New<br/><br/><img src='images/next.svg' style='height:40px;'></img>
      </svg>
	   </div>		
	
	  <a href = 'loadimages.php?type=NumericEntry&num=def' class='reviewIcon'>   	<div  >
			Review<br/><br/><img src='images/review.svg'></img>
	   </div><a/>
	  
		</dd>
		
			
	
		
		
		
	</dl>
</div>

</div>


<div id="RWrap">


<h4 id='tagLine'> Quantitative Comparison</h4>

<hr id='QuestionHeading' style='margin:10px;width:100%;height:1px;margin-left:0px;
    border: 0;
    height: 0px;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
'/>
<div id="question">
    <p id="Textarea">Loading the page....</p><br/>
    <img style="margin-left:130px;"></img>
	<div id='forQuantComparision' style='margin-top:10px;'>
	<p style='display:inline-block'></p>
    <p style='display:inline-block'></p>
	</div>
<div id="OptionsContainer">
   <div id="list1"></div>
   <div id="list2"></div>
   <div id="list3"></div>
</div><br/>
 <div id="ButtonHolder">
  <input  class='btn small greenFloatLeft'      type="button" id="directsubmit" value="Submit" onclick = 'validate(this)'/>
  <input  class='btn small greenFloatLeftNone'  type="button" id="withanswer"   value="Share the Solution" onclick ="updateexplnation();"/>
</div>
</div>




</div>

</div>

<br/>
<p class='informationbox'> Use the Below Canvas if you would like to Submit the Answer with the explanation. Your explanation will be open for discussion.&nbsp;&nbsp;<a class='close'>X</a></p>
<br/>
<div id ="lowerWrap" >



<div id="panel">

	 <img src='images/Texticon1.png'   id ='twoimage'></img>
	 <img src='images/pencil_red1.jpg' id ='oneimage'></img>
	 
	 
	 <br/>      
     <textarea id="fname" onkeyup="myFunction()"  rows="4" cols="50" ></textarea>	
  
</div>
<br/>
<div style='display:inline-block;border:8px solid #eee;' id='moma'>
<div id="svgContainer">
</div>
</div>
<div id="propertiespanel" >

<input type='button' class ='btn small rosy ' value='Clear Canvas' onclick='R.clear(); masterBackground = R.rect(0,0,"100%","100%").attr({"stroke":"#eee","stroke-width":1}).attr("fill", "#fff").toBack();
$("#svgContainer").css("cursor","default"); $("#fname").css("display" , "none");'/>

</div> 

</div>
     
	 
	 
	 </div>



      <script src="js/DisplayObjects.js"></script><!-- Panel objects -->
	 <script type="text/javascript">



	 
	 
	 
  $(function(){
   



   /*
     * this swallows backspace keys on any non-input element.
     * stops backspace -> back
     */
    var rx = /INPUT|SELECT|TEXTAREA/i;

    $(document).bind("keydown keypress", function(e){
        if( e.which == 8 ){ // 8 == backspace
            if(!rx.test(e.target.tagName) || e.target.disabled || e.target.readOnly ){
                e.preventDefault();
            }
        }
    });
});

$('#toggler').click(function() {


window.scrollTo(0,0 );


/*   $('#upperWrap').animate({
  height: ['toggle', 'swing']
  },1000, function()
  {
      if ($('#toggler').attr('src') == 'images/upperD.jpg'){
	  
	  $('#toggler').attr('src','images/lowerD.jpg')

	  
	         }
     else  if ($('#toggler').attr('src') == 'images/lowerD.jpg'){
	  
	  $('#toggler').attr('src','images/upperD.jpg')
	  
	         }
  
            }); */


});

	 
var accordion=function(){
	var tm=sp=10;
	function slider(n){this.nm=n; this.arr=[]}
	slider.prototype.init=function(t,c,k){
		var a,h,s,l,i; a=document.getElementById(t); this.sl=k?k:'';
		h=a.getElementsByTagName('dt'); s=a.getElementsByTagName('dd'); this.l=h.length;
		for(i=0;i<this.l;i++){var d=h[i]; this.arr[i]=d; d.onclick=new Function(this.nm+'.pro(this)'); if(c==i){d.className=this.sl}}
		l=s.length;
		for(i=0;i<l;i++){var d=s[i]; d.mh=d.offsetHeight; if(c!=i){d.style.height=0; d.style.display='none'}}
	}
	slider.prototype.pro=function(d){
		for(var i=0;i<this.l;i++){
			var h=this.arr[i], s=h.nextSibling; s=s.nodeType!=1?s.nextSibling:s; clearInterval(s.tm);
			if(h==d&&s.style.display=='none'){s.style.display=''; su(s,1); h.className=this.sl}
			else if(s.style.display==''){su(s,-1); h.className=''}
		}
	}
	function su(c,f){c.tm=setInterval(function(){sl(c,f)},tm)}
	function sl(c,f){
		var h=c.offsetHeight, m=c.mh, d=f==1?m-h:h; c.style.height=h+(Math.ceil(d/sp)*f)+'px';
		c.style.opacity=h/m; c.style.filter='alpha(opacity='+h*100/m+')';
		if(f==1&&h>=m){clearInterval(c.tm)}else if(f!=1&&h==1){c.style.display='none'; clearInterval(c.tm)}
	}
	return{slider:slider}

}();
	 
	 
	 
	 

	 
var slider1 = new accordion.slider("slider1");
slider1.init("slider");

document.getElementById('accordion').style.opacity = 1;



</script>
  
	

	
	<script type="text/javascript">
	
	
      $(document).ajaxSend(function(){
	  
      $('#RWrap').css({"background-image":"url('images/preloader.gif')" , "background-repeat":"no-repeat" ,"opacity":"0.6" ,"background-position" :"center"});
	

       }); 

	   $(document).ajaxStop(function(){
	   
	   
	   $('#RWrap').css({"background-image":"none" , "background-repeat":"no-repeat" ,"opacity":"1" ,"background-position" :"center"});
       		

	            
			if("<? echo isset($_GET['get-go']);?>" == '1')	{
 $('#joyRideTipContent').joyride({
          autoStart : true,
          postStepCallback : function (index, tip) {
          if (index == 10) {
            $(this).joyride('set_li', false, 1);
          }
        },
        modal:true
        });	
				
				
		}		
				
				
				
				
				
				
				
       }); 

  // Code that uses other library's $ can follow here.

		var Jsonstring;
		var Type="";
	

	
	
	
	$('.close').click(function(){
	
	
	$(this).parent().hide('slow');
	
	})
	
	
		
	window.onload= function()
	{
	  //alert(document.defaultView.getComputedStyle
	  //(document.getElementById('svgContainer'),null).getPropertyValue('margin-top'));
	  DisplayPanel();
	  UIinterface();
	 // AllowLineDrawing();


		
	     
    }
			
	function nextquestionrequest(obj)
	{
	 
	 Type = obj.getAttribute('value');
	 Ajaxrequest("GetNextQuestion.php","TypeOfQuestion="+Type);
	 
	
	}
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//document.getElementById("answer").onclick = validate;

  $(document).ready(function () {

     
	 

	 
		$('#QC').trigger('click');							
        $('#QCdt').trigger('click');
		
			
			$(".postionTest").bind( "clickoutside", function(event){

                                 $('.symbolsText').hide();
								
                             });
			
				$(".postionTest").bind( "click", function(event){

                                 $('.symbolsText').toggle();
								
                             });
			
									   
		
				  // $("#svgContainer").resizable({ grid: [10000, 1] });					   
					   $("#svgContainer").parent().resizable({
					                handles: 's , h' ,
									resize: function(event, ui)
									{ 
									        
											
											R.setSize("100%", $('#svgContainer').parent().height()); 
											
									}
												

												
});
									   
				
});
		
		
		
var tagDesc= {
    "name": "<p><img class ='tagIcons' src='images/yellow-tag-icon.png'></img><span style='font-family:tahoma;font-size:13px;font-weight:normal;vertical-align:top;'>Click Tags and dive deep into " + "relevant lessons. Equip yourself to take on any question with ease. Tag- Click- Go!</span></p>"
       
}

	
var submitwithexplanationDesc= {
    "name": "<p><img class ='tagIcons' src='images/pencil.png'></img><span style='font-family:tahoma;font-size:13px;font-weight:normal;'>Submit along with the explanation of how you have arrived at the solution.</span></p>"

}



	

	
function tagStuff(tag){
                     
          	$('#tagLine').html("<a id ='tagLineLink'><label id='tagNavigation' data-width ='300'>" + tag +"</label></a>");
			


					 
			    $("#tagNavigation").hovercard({
                             showCustomCard: true, 
                             customCardJSON: tagDesc,
                             width: 300,
	                         background: '#fff'
                     
                                       });

									   

				   

		    tag1 = tag.split('#')[1].toString();
		    tag2 = tag.split('#')[2].toString();	


			
			
				$('#tagLineLink').attr("href","teachinglesson.php?mainCategory="+tag1+"&subCategory="+tag2);
	
	
				
		
			
			}
	
	




	 
				 
        $('#fname').click(function(){
		
		if($(this).val() == "Math has to be praticed") $(this).val("");
		
		
		});
  
  

		
	   $("#fname").keydown(function(e) {
    if(e.keyCode === 9) { // tab was pressed
        // get caret position/selection
        var start = this.selectionStart;
        var end = this.selectionEnd;

        var $this = $(this);
        var value = $this.val();

        // set textarea value to: text before caret + tab + text after caret
        $this.val(value.substring(0, start)
                    + "\t"
                    + value.substring(end));

        // put caret at right position again (add one for the tab)
        this.selectionStart = this.selectionEnd = start + 1;

        // prevent the focus lose
        e.preventDefault();
    }
});     
	
	
	
	
	
	

 </script>
	


  
  

   


 

<div id='footer'>

<div><a>fiGREout</a><a>BLOG.</a><a>ABOUT.</a><a>SUPPORT.</a><a>CONTACT.</a></div>
  <p class='copyright'>
     2013 &copy; Goodness me educational solutuons.
    <span class="links"><a >Terms of Service</a> | <a>Privacy Policy</a></span>
  </p>
</div>




      <!-- Tip Content -->










 </body>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   
  <body>

      <!-- Tip Content -->
    <ol id="joyRideTipContent">
	  <li data-id="moma" data-button="Next" data-options="tipLocation:right">
        <h2>Direct Submit</h2>
        <p>It works right aligned.</p>
      </li>
      <li data-id="tagLineLink" data-text="Next" class="custom">
        <h2>Tag</h2><br/>
		<img src='images/box.png'></img>
        <p>You can control all the details for you tour stop. Any valid HTML will work inside of Joyride.</p>
      </li>
      <li data-id="withanswer" data-button="Next" data-options="tipLocation:top;tipAnimation:fade">
        <h2>Share the Solutio</h2>
        <p>Get the details right by styling Joyride with a custom stylesheet!</p>
      </li>
      <li data-id="directsubmit" data-button="Next" data-options="tipLocation:right">
        <h2>Direct Submit</h2>
        <p>It works right aligned.</p>
      </li>

    </ol>



  </body>
</html>
<?php

 
}
 else {
 
 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head >
    <title>Solveby</title>
    <link rel="shortcut icon" href="pencil.ico" />
	    <link rel="stylesheet" type="text/css" href="question.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/headerlogin.css" media="screen" />
 </head>
 <body>
 	
<div class='enclosure'>
<div id='mainNavigation'>

<div >
<h1 style='margin-top:20px;'> <img G src='images/logo_pic_white.png'></img></h1>
</div>


<div id='Mainlinks' >
<ul>
<li><a href="./login.php">Home</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./sampletest.php"> Sample Test</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./aboutTheTest.php"> About GRE &#174;</a></li>
</ul>
</div>



<br/>

</div>

</div>





     <p class='Message'>You have beeen logged out of the Session.!</p>


</body>
</html>
 <?php
   
}

?>