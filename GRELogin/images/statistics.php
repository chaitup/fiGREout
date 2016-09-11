<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';
// Include database connection and functions here.
sec_session_start();
if(login_check($mysqli) == true) {

  
  	$user_id =  $_SESSION['user_id'];
	
    $NumberAnsweredQuantitative =  "QuantitativeComparision_CurrentQuestion";
    $NumberCorrectQuantitative =   "QuantitativeComparision_CorrectAnswers";
	
	$NumberAnsweredMultipleOneAnswer =  " MultipleChoiceOneAnswer_CurrentQuestion";
    $NumberCorrectMultipleOneAnswer  =   "MultipleChoiceOneAnswer_CorrectAnswers";

  
    $NumberAnsweredMultipleMoreAnswer  =  "MultipleChoiceMoreAnswers_CurrentQuestion";
    $NumberCorrectMultipleMoreAnswer  =   "MultipleChoiceMoreAnswers_CorrectAnswers";
 
  
    $NumberAnsweredNumericEntry =  "NumericEntry_CurrentQuestion";
    $NumberCorrectNumericEntry =   "NumericEntry_CorrectAnswers";
	
	
  if ($stmt = $mysqli->prepare("SELECT  $NumberAnsweredQuantitative, $NumberCorrectQuantitative , $NumberAnsweredMultipleOneAnswer,   $NumberCorrectMultipleOneAnswer ,$NumberAnsweredMultipleMoreAnswer,$NumberCorrectMultipleMoreAnswer , $NumberAnsweredNumericEntry,   $NumberCorrectNumericEntry FROM statistics WHERE ref_consistency_id = ?")) {
  
        $stmt->bind_param('i', $user_id); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
  
        if($stmt->num_rows == 1) { // If the user exists
           $stmt->bind_result($NumberAnsweredQuantitative,$NumberCorrectQuantitative ,$NumberAnsweredMultipleOneAnswer, $NumberCorrectMultipleOneAnswer,$NumberAnsweredMultipleMoreAnswer,$NumberCorrectMultipleMoreAnswer,$NumberAnsweredNumericEntry, $NumberCorrectNumericEntry); // get variables from result.
           $stmt->fetch();
		   
		   
		   }
  
  }
  


  
  

    $TotalCorrect =    $NumberCorrectQuantitative + $NumberCorrectMultipleOneAnswer  +     $NumberCorrectMultipleMoreAnswer  +                     $NumberCorrectNumericEntry ;
    $TotalWrong =    ( $NumberAnsweredQuantitative +   $NumberAnsweredMultipleOneAnswer +    $NumberAnsweredMultipleMoreAnswer +      $NumberAnsweredNumericEntry ) -   $TotalCorrect - 4;
		


   ?>
   
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<style>
</style>
 <link rel="stylesheet" type="text/css" href="teachinglesson.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/headerlogin.css" media="screen" />




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





<br/>

</div>

</div>


<br/>
  <style>
  .correctSprite {
  display:inline-block;width:15px;height:15px;border:1px solid #000;vertical-align:top;border-radius:8px;background:#5EA350;
                 }
    .wrongSprite {
  display:inline-block;width:15px;height:15px;border:1px solid #000;vertical-align:top;border-radius:8px;background:#B2473D;
                 }
  .textSprite{     
  display:inline-block;width:15px;height:15px;vertical-align:top;
  
  }
h2 {
display: block;
font-size: 1.5em;
-webkit-margin-before: 0.83em;
-webkit-margin-after: 0.83em;
-webkit-margin-start: 0px;
-webkit-margin-end: 0px;
font-weight: normal;
}

	.informationbox{

width:950px;
Background: #eceff6	;
Border :#d4dae8;
padding:10px;
margin:auto;
font :13px verdana;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
	color:#888;
}
  </style>

 	    <script src="js/jquery.js"></script>
        <script src="js/raphael.js"></script>
        <script src="js/graphael.js"></script>
        <script src="js/bar.js"></script>
		<script src="js/donut.js"></script>
        <script>
		
  var  NumberCorrectQuantitative =       <? echo $NumberCorrectQuantitative ?>, 
	   NumberCorrectMultipleOneAnswer =  <? echo $NumberCorrectMultipleOneAnswer ?>, 
	   NumberCorrectMultipleMoreAnswer = <? echo $NumberCorrectMultipleMoreAnswer ?>, 
	   NumberCorrectNumericEntry  =     <? echo $NumberCorrectNumericEntry ?>,
	   
	   NumberAnsweredQuantitative =       <? echo $NumberAnsweredQuantitative - 1 ?>,
	   NumberAnsweredMultipleOneAnswer =  <? echo $NumberAnsweredMultipleOneAnswer - 1 ?>,
	   NumberAnsweredMultipleMoreAnswer=  <? echo $NumberAnsweredMultipleMoreAnswer -1  ?>,
	   NumberAnsweredNumericEntry=        <? echo $NumberAnsweredNumericEntry -1 ?>;
		
	var TotalCorrect =    <? echo  $TotalCorrect ?>,
	    TotalWrong   =    <? echo  $TotalWrong ?>;
	
	 
	
		
		
		
		
		function barlength(attempt,correct){
		 
		 if(attempt == 0)
		 
		 {     
		  
		     attempt = 1
		   return ((correct)/(attempt))*100;
		 }   
		 
		 
		 
		 else { 
		 
		     return ((correct)/(attempt))*100;
		 
		     }	
		
		}
		

		
		//var browser=(navigator.appName.indexOf("Microsoft")!=-1)? "IE" : (navigator.appName.indexOf("Netscape")? "NS" : //"Not IE nor NS";
	     	//alert(navigator.appName);
		
            window.onload = function () {
		
		        	
				var n = Raphael("pieholder");
				
		       for(i=0;i<10;i++){
 
                         n.rect(0,i*49,'98%',0.5).attr({"stroke":"#eee"});
                         n.rect(i*49,0,0.5,'98%').attr({"stroke":"#eee"});
                }
				     
				 var values = [TotalCorrect, TotalWrong],
                 labels = [(TotalCorrect/(TotalCorrect + TotalWrong ))*100,(TotalWrong/(TotalCorrect + TotalWrong ))*100];
		   
		      var pie = n.donutChart(200, 170, 100, 0, values, labels, "#fff");
			   	 pie.attr({ "font-size": 13, "font-family": "Tahoma, Helvetica, sans-serif" });
		
                var r = Raphael("barholder"),
                    fin = function () {
	                           var percentage = Math.floor(this.bar.value) +"%";                            
                        this.flag = r.popup(this.bar.x , this.bar.y, percentage|| "0").insertBefore(this);
						    this.flag.attr({ "width":40,"height":40 });
                    },
                    fout = function () {
                        this.flag.animate({opacity: 0}, 300, function () {this.remove();});
                    },
                    fin2 = function () {
                        var y = [], res = [];
                        for (var i = this.bars.length; i--;) {
                            y.push(this.bars[i].y);
                            res.push(this.bars[i].value || "0");
                        }
                        this.flag = r.popup(this.bars[0].x, Math.min.apply(Math, y), res.join(", ")).insertBefore(this);
                    },
                    fout2 = function () {
                        this.flag.animate({opacity: 0}, 300, function () {this.remove();});
                    },
                    txtattr = { font: "12px sans-serif" };

               for(i=0;i<10;i++){
 
                          r.rect(0,i*49,'98%',0.5).attr({"stroke":"#eee"});
                          r.rect(i*49,0,0.49,'98%').attr({"stroke":"#eee"});
                }   
                
				
	// r.text(90, 330, ((NumberCorrectQuantitative)/(NumberAnsweredQuantitative ))*100 +"%").attr({ "font-size": 19, "font-family": "Verdana,Arial, Helvetica, sans-serif" });
	// r.text(170, 330, "20%").attr({ "font-size": 19, "font-family": "Verdana,Arial, Helvetica, sans-serif" });
	// r.text(240, 330, "30%").attr({ "font-size": 19, "font-family": "Verdana,Arial, Helvetica, sans-serif" });
    // r.text(310, 330, "40%").attr({ "font-size": 19, "font-family": "Verdana,Arial, Helvetica, sans-serif" });
		

var bdata = [
	    barlength(NumberAnsweredQuantitative,NumberCorrectQuantitative),
	    barlength(NumberAnsweredMultipleOneAnswer,NumberCorrectMultipleOneAnswer) ,
        barlength(NumberAnsweredMultipleMoreAnswer,NumberCorrectMultipleMoreAnswer),
	    barlength(NumberAnsweredNumericEntry, NumberCorrectNumericEntry ) 

];

	
      var bar = r.barchart(50, 10, 300, 300, 
[bdata], {colors:["#ffbf39","#7b4","#CF5F2F"]}, {stacked: true,type: "soft"}).hover(fin, fout);
				

			
				// bar.rotate();
				
	for (var i = 0; i < bar.bars[0].length; i++) {
            var bar2 = bar.bars[0][i];
        // if the value of the bar is greater or equals to 15 we change the color to red

           bar2.attr("stroke-width", 2);
         
	
		   if(bar2.value >= 65){
			
			  bar2.attr("fill", "90-#5EA350:20-#5EA350");
			  bar2.attr("stroke", 'black');

                              }
		   else if(bar2.value >= 40 && bar2.value < 65){
			
			bar2.attr("fill", "90-#3b5998:20-#3b5998");
              bar2.attr("stroke", "black");

                          }		
						  
			else if(bar2.value < 40){
			
			bar2.attr("fill", "90-#B2473D :20-#B2473D  ");
			  bar2.attr("stroke", "black");

          
                          }				  
						  
	
	  
						  
						  
				}		  
	

             //$('#barholder').animate({"height" : "450"}, 1000 );
		   
            };
        </script>


</head>
 <body class="raphael">
  <div style="margin:auto;width:1000px;border:1px solid #eee;border-radius:3px;margin-top:20px;padding:10px;background:#fff;">

 
  <p class='informationbox'>Use the below chart to quickly determine which questions you are best at, and which question you should study for. Questions that you have answered correctly less than 30% of the time are colored RED, questions that you've answered correctly 30-60% of the time are colored BLUE, and questions that you've answered correctly more than 60% of the time are colored GREEN.</p>
  
        <div id="barholder" style="margin-top:30px;width:450px;height:400px;-webkit-transform:rotate(0deg);display:inline-block;">
		</div>
	
        <div id="bardataholder" style="margin-top:10px;width:450px;height:300px;-webkit-transform:rotate(0deg);display:inline-block;vertical-align:top;padding:30px;">
		
	     <div style="padding:20px;font-family:'segoe UI';font-size:15px;border-bottom:1px solid #eee;">
		  <p style="font-size:25px;font-style:italic;">Distribution (Type of question)</p><br/>
		 </div>
	     <div style="padding:20px;font-family:'segoe UI';font-size:15px;border-bottom:1px solid #eee;">
		 <li style="display:inline-block;vertical-align:top;width:210px;">1. QuantitativeComparision :</li>
		 <p   class="correctSprite"></p>
		 <p   id = 'QC' class= "textSprite">0</p>&nbsp;
		 <p   class="wrongSprite"></p>
		 <p   id = 'QW' class= "textSprite">0</p>
		 </div>
		 <div style="padding:20px;font-family:'segoe UI';font-size:15px;border-bottom:1px solid #eee;">
		 <p style="display:inline-block;vertical-align:top;width:210px;">2. MultipleChoiceOneAnswer :</p>
		 <p   class="correctSprite"></p>
		 <p    id = 'MOC' class= "textSprite" >0</p>&nbsp;
		 <p   class="wrongSprite"></p>
		 <p    id = 'MOW' class= "textSprite">0</p>
		 </div>
		 <div style="padding:20px;font-family:'segoe UI';font-size:15px;border-bottom:1px solid #eee;">
		 <p style="display:inline-block;vertical-align:top;width:210px;">3. MultipleChoiceManyAnswers:</p>
	     <p   class="correctSprite"></p>
		 <p   id = 'MMC' class= "textSprite" >0</p>&nbsp;
		 <p   class="wrongSprite"></p>
		 <p   id = 'MMW' class= "textSprite">0</p>
		 </div>
		 
		 <div style="padding:20px;font-family:'segoe UI';font-size:15px;border-bottom:1px solid #eee;">
		 <p style="display:inline-block;vertical-align:top;width:210px;">4. NumericEntry :</p>
	     <p   class="correctSprite"></p>
		 <p    id = 'NC'  class= "textSprite" >0</p>&nbsp;
		 <p   class="wrongSprite"></p>
		 <p    id = 'NW'  class= "textSprite">0</p>
		 </div>
		 
	    
		</div>
			<p style="border-bottom:1px solid #eee;"></p>
	    <div id="pieholder" style="margin-top:30px;width:400px;height:400px;-webkit-transform:rotate(0deg);display:inline-block;">
		</div>
		
		    <div id="piedataholder" style="margin-top:10px;width:450px;height:300px;-webkit-transform:rotate(0deg);display:inline-block;vertical-align:top;padding:30px;">
		
	     <div style="padding:20px;font-family:'segoe UI';font-size:15px;border-bottom:1px solid #eee;font-style:italic;">
		  <p style="font-size:25px;">Summary</p>
		 </div>
	     <div style="padding:20px;font-family:'segoe UI';font-size:15px;border-bottom:1px solid #eee;font-style:italic;">
		 <p style="display:inline-block;vertical-align:top;width:200px;">Total</p>
		 <p   class="correctSprite"></p>
		 <p   id ='TC' class= "textSprite" >35</p>&nbsp;
		 <p   class="wrongSprite"></p>
		 <p   ID = 'TW' class= "textSprite">25</p>
		 </div>
	
		 
		 
	    
		</div>
   </div> 
   
   
   
   
   <script type= "text/javascript">
   
   
               $('#QC').html(NumberCorrectQuantitative);
	           $('#QW').html(NumberAnsweredQuantitative - NumberCorrectQuantitative);
	   
	   
	           $('#MOC').html(NumberCorrectMultipleOneAnswer); 
		       $('#MOW').html( NumberAnsweredMultipleOneAnswer - NumberCorrectMultipleOneAnswer);
		 
		 
		 
		       $('#MMC').html(NumberCorrectMultipleMoreAnswer);
		       $('#MMW').html(NumberAnsweredMultipleMoreAnswer - NumberCorrectMultipleMoreAnswer);
		   
		   
		   
		       $('#NC').html(NumberCorrectNumericEntry);
			   $('#NW').html(NumberAnsweredNumericEntry - NumberCorrectNumericEntry);
			 
			 
   

		
		
				       $('#TC').html(TotalCorrect);
		
		               $('#TW').html(TotalWrong);




   </script>
   
   
   
   
   

 <div id='footer'>

               <div>
                 
				 <a>fi<b>GRE</b>out</a><a>BLOG</a><a>ABOUT</a><a>CONTACT</a>
				  
			   </div>
                  
				  
			<p class='copyright'>
                     GRE® is a registered trademark of Educational Testing Service (ETS). This website is not endorsed or approved by ETS . Practice questions available on fiGREout are not official GRE Test questions. The practice tests on this website are simulations.
             </p>
  </div> 

   
   
   
   
   
   
   
    </body>
</html>
<?php
   

}

else{

   header("Location:http://localhost/GRELogin/securelogout.php");
}
?>    