<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head >
    <title>fiGREout - Everything about GRE&reg;</title>
    <link rel="shortcut icon" href="pencil.ico" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="title" content="GRE Quantitative, GRE math , GRE , revised GRE , GRE online, GRE practice ,GRE free practice tests....">

    <meta name="description" content="GRE Quantitative, GRE math , GRE , revised GRE , GRE online, GRE practice ,GRE free practice tests....">

    <meta name="keywords" content="GRE Quantitative, GRE math , GRE , revised GRE , GRE online, GRE practice ,GRE free practice tests.... ">

	  <link rel="stylesheet" type="text/css" href="css/headerlogout.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="css/abouTheTest.css" media="screen" />
	  
	  
      <script type='text/javascript' src='js/jquery.js'></script>
      <script type='text/javascript' src='js/messi.min.js'></script>
	  <script src="js/dropit.js"></script>
	  
	  
	  <link rel="stylesheet" type="text/css" href="css/messi.css" media="screen" />


<style>

</style>	

  
</head>
  
<body >	
	  



<div class='enclosure'>
<div id='mainNavigation'>


<div >
<h1 style='margin-top:20px;'> <img G src='images/logo_pic.jpg'></img></h1>
</div>



<div id='Mainlinks' >
<ul>
<li><a href="./login.php">Home</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./sampletest.php"> Sample Test</a> <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> </li>
<li><a href="./aboutTheTest.php"> About GRE&#174;</a></li>
</ul>
</div>


<div id='AccountStatus' >
<ul>

</ul>
</div>




</div>
</div>



</div>
</div>
<br/>
<hr/>
<br/>
<div id="Wrap">


<div id="upperWrap"  >

<div id="LWrap">

<div id="accordion">
	<dl  class="accordion" id="slider">
	
	

		<dt id='QCdt'> GRE Exam Format, Fees. </dt>
		<dd>
        <p id='about' onclick ='loadContent(this)'> &rarr; About GRE</p>
		<p id='adaptive' onclick ='loadContent(this)'> &rarr; Format - Computer Adaptive Testing</p>
		<p id='testfee' onclick ='loadContent(this)'> &rarr; Test Fees</p>
		</dd>



		
		
		
		<dt> Registering for the GRE revised Test</dt>
		<dd>
        <p id='registration' onclick ='loadContent(this)'>&rarr; How to Register</p>
		<p id='dates' onclick ='loadContent(this)'> &rarr; Test Dates</p>

		
		</dd>
		
		
		
		
	
	   
	</dl>
</div>

</div>


<div id="RWrap">
<p>124</p>
</div>




</div> 
</div>



	
 <script type="text/javascript">

  $(document).ready(function () {

		$('#QCdt').trigger('click');	
        $('#about').trigger('click');				
 
													
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








function loadContent(obj)

{


 $('#RWrap p').html($("div").data(obj.id));


}








</script>
  
  
  
  
 <script type='text/javascript'>
 
 
 $("div").data("about", "<h1>The GRE<sup>&#174;</sup> revised General Test</h1><br/>The GRE general test is meant to measure your overall academic ability and features question types that closely reflect the kind of thinking you'll do in graduate or business school.The GRE revised General Test is the only admissions test for graduate or business school . With the GRE revised General Test, you decide which scores to send to schools.You can retake the test and then send only the scores you want schools to see.<br/><br/><h1> GRE Scores </h1><br/>For the quantitative and verbal reasoning assesments of the GRE revised General test, the scores range from 130 to 170 points. For the analytic writing section, scores range from 0.0 to 6.0, in half-point increments. There are two verbal and two math sections on the GRE revised General test. The first of both sections is not computer adaptive, but the difficulty of questions that you'll be given for the second section is dependent on how well you did on the first section. The essay section of the GRE is composed on the computer, but both writing tasks are graded by trained readers." );
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 $("div").data("registration", "<h1>GRE Registration </h1><br/> When you register for the GRE, make double sure that you print and provide your name EXACTLY as it appears on your identification document(s). <br/> <br/> The below information details how to register for the computer-based GRE revised General Exam. This section is divided into two columns, one if you are registering to take the exam in the United States, Canada, or one of the United States Territories, and the other if you are registering to take the exam at an international locatio.n" + "<br/><br/>"
+
"<table border='0'>"
+
"<tr><th>Register to take the exam in the U.S, U.S. Territory, or Canada</th><th>Register to take the exam in International Locations</th> </tr>"
+
"<tr> <td>There are three ways in which you can register to take the GRE in the U.S., U.S. Territories, or Canada. <br/><br/> To register online, use the Online registration system and pay by Credit Card.<br/> <br/>To register by phone, you'll need to pay by credit card. Call your nearest exam center Monday through Friday, 8AM - 8PM Eastern Time, or call the Candidate Services Call Center at 1-443-751-4820 or 1-800-GRE-CALL. When you call, you will be given a confirmation number, reporting time, and the examination center address. You'll need to keep this information.</td><td>To register to take the GRE in an International Location, register online, by phone, by fax, or by mail. Visit the Register for the Computer-based GRE General Exam ETS website.</td></tr>"
+
"<tr><th>How to Reschedule or Cancel a Test in the U.S., U.S. Territory, or Canada</th><th>How to Reschedule or Cancel a Test Outside of the U.S.</th> </tr>"
+
"<tr> <td>Contact the test center where you are scheduled to test or call 1-443-751-4820 or 1-800-GRE-CALL at least 10 days before your appointment. You'll be charged $50 to reschedule your test.</td><td>Contact the appropriate registration center at least 10 full days before your appointment. You'll be charged $50 to reschedule your test.</td></tr>"
+
"</table>");












 
 $("div").data("dates", " <h1>GRE Exam Dates</h1> <br/> The computer-based GRE General Test is given year-round at various exam centers in the United States, Canada, and many other countries.Use the exam center <a href='http://etsis4.ets.org/tcenter/' target='_blank'>location tool</a> on the ETS website to locate your nearest examination center. Make an appointment as soon as possible so that you can register to take the exam at a time and place of your choice.");
 
 
  
 $("div").data("adaptive", "  <h1>GRE Format </h1> <br/> The GRE revised general test is administered as a computer adaptive exam, but not all sections are adaptive. Each of the verbal and quantitative assessment portions of the exam has two parts. For both of these assessments, the first part is NOT computer adaptive, while the second is.The first of the two sections for the quantitative and verbal assessment portions of the GRE exam have questions that ETS has calculated will be answered correctly by approximately one-half of the people who take the test. Based on how well you do on the first section of the two assessment sections, you will be provided with question that are of appropriate difficulty on the second section.For example, if you answer all questions correctly on the first section of the verbal assessment, then the questions that you'll see on the second verbal section will be difficult. <br/><br/> Likewise, if you answer incorrectly most of the questions on the first section of the quantitative assessment portion of the exam, then you'll be prompted with easier question on the second section of the quantitative assessment portion of the exam. Based on your performance on the first sections of the verbal and quantitative assessment portions, the computer will select question for the second section that it thinks you have approximately a 50% chance of answering correctly.Dont worry about trying to figure out if the current question that you are trying to answer is easy or hard - just be sure to do your best. Even if you do know if the question is hard or easy, does it really matter? You have to answer the question that is presented to you, so it is irrelevant whether the question is difficult or easy");
 
   
 $("div").data("testfee", "<h1> Test Fee </h1> <br/>  The following Fee Structure for the computer-based and paper-based GRE General Test is effective January 3, 2013. A comprehensive list of fees and related services is available at the <a href='http://www.ets.org/gre/revised_general/about/fees?WT.ac=rx37'>ETS GRE General Test Fees </a> page.");
 
 
 

 </script> 
  

  
  
<div id='footer'>

<div><a>fiGREout</a><a>BLOG.</a><a>ABOUT.</a><a>SUPPORT.</a><a>CONTACT.</a></div>
  <p class='copyright'>
GRE® is a registered trademark of Educational Testing Service (ETS). This website is not endorsed or approved by ETS.
Practice questions available on localhost are not official GRE Test questions. The practice tests on this website are simulations.
  </p>
</div>
  
  
  
  
  
  
  
  
  
  

 </body>
 

</html>