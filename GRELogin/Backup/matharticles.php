<?php
include 'db_connect.php';
include 'functions.php';
include 'login_check.php';


   
     if ($stmt = $mysqli->prepare("SELECT QuestionImage,AnswerImage FROM solvedquestions")
               )
			   
			
           {
		   
             $stmt->execute();
			 $stmt->bind_result($Question,$Answer); 
			 
			 
			 	while($stmt->fetch())
		{
		 echo $Question;
         echo $Answer;
		
		
		
		}
		   }




   ?>
   

   
   
   
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	
	<title>Organic Tabs</title>
	
	<link rel="stylesheet" href="Solved.css">
	
    <script src='../js/jquery.js'></script>
    <script src="../js/organictabs.jquery.js"></script>
    <script>
        $(function() {
    
    
            $("#example-two").organicTabs({
                "speed": 200
            });
    
        });
    </script>
</head>

<body>
  <div id="mainnav"> 
  <h1 style='margin-top:30px;margin-left:40px;font-size:40px;display:inline-block;font-family:"sieoge UI";font-weight:normal;color:white;border:0px solid black;'>Solve-by</h1>
	 <a style="margin-right:100px;"href="SolvedMisscilaneousQuestions.php" > <div>  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M19.671,8.11l-2.777,2.777l-3.837-0.861c0.362-0.505,0.916-1.683,0.464-2.135c-0.518-0.517-1.979,0.278-2.305,0.604l-0.913,0.913L7.614,8.804l-2.021,2.021l2.232,1.061l-0.082,0.082l1.701,1.701l0.688-0.687l3.164,1.504L9.571,18.21H6.413l-1.137,1.138l3.6,0.948l1.83,1.83l0.947,3.598l1.137-1.137V21.43l3.725-3.725l1.504,3.164l-0.687,0.687l1.702,1.701l0.081-0.081l1.062,2.231l2.02-2.02l-0.604-2.689l0.912-0.912c0.326-0.326,1.121-1.789,0.604-2.306c-0.452-0.452-1.63,0.101-2.135,0.464l-0.861-3.838l2.777-2.777c0.947-0.947,3.599-4.862,2.62-5.839C24.533,4.512,20.618,7.163,19.671,8.11z" stroke="black" fill="white" />
      </svg><p>Blog</p></div></a>
          <a href="../settings.php"><div> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M31.229,17.736c0.064-0.571,0.104-1.148,0.104-1.736s-0.04-1.166-0.104-1.737l-4.377-1.557c-0.218-0.716-0.504-1.401-0.851-2.05l1.993-4.192c-0.725-0.91-1.549-1.734-2.458-2.459l-4.193,1.994c-0.647-0.347-1.334-0.632-2.049-0.849l-1.558-4.378C17.165,0.708,16.588,0.667,16,0.667s-1.166,0.041-1.737,0.105L12.707,5.15c-0.716,0.217-1.401,0.502-2.05,0.849L6.464,4.005C5.554,4.73,4.73,5.554,4.005,6.464l1.994,4.192c-0.347,0.648-0.632,1.334-0.849,2.05l-4.378,1.557C0.708,14.834,0.667,15.412,0.667,16s0.041,1.165,0.105,1.736l4.378,1.558c0.217,0.715,0.502,1.401,0.849,2.049l-1.994,4.193c0.725,0.909,1.549,1.733,2.459,2.458l4.192-1.993c0.648,0.347,1.334,0.633,2.05,0.851l1.557,4.377c0.571,0.064,1.148,0.104,1.737,0.104c0.588,0,1.165-0.04,1.736-0.104l1.558-4.377c0.715-0.218,1.399-0.504,2.049-0.851l4.193,1.993c0.909-0.725,1.733-1.549,2.458-2.458l-1.993-4.193c0.347-0.647,0.633-1.334,0.851-2.049L31.229,17.736zM16,20.871c-2.69,0-4.872-2.182-4.872-4.871c0-2.69,2.182-4.872,4.872-4.872c2.689,0,4.871,2.182,4.871,4.872C20.871,18.689,18.689,20.871,16,20.871z" stroke="black" fill="white" />
      </svg><p>Settings</p></div></a>
	         <a href="../Teachinglesson.php"><div> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M28.952,12.795c-0.956,1.062-5.073,2.409-5.604,2.409h-4.513c-0.749,0-1.877,0.147-2.408,0.484c0.061,0.054,0.122,0.108,0.181,0.163c0.408,0.379,1.362,0.913,2.206,0.913c0.397,0,0.723-0.115,1-0.354c1.178-1.007,1.79-1.125,2.145-1.125c0.421,0,0.783,0.193,0.996,0.531c0.4,0.626,0.106,1.445-0.194,2.087c-0.718,1.524-3.058,3.171-5.595,3.171c-0.002,0-0.002,0-0.004,0c-0.354,0-0.701-0.033-1.033-0.099v3.251c0,0.742,1.033,2.533,4.167,2.533s3.955-3.701,3.955-4.338v-4.512c2.23-1.169,4.512-1.805,5.604-3.895C30.882,12.05,29.907,11.733,28.952,12.795zM21.942,17.521c0.796-1.699-0.053-1.699-1.54-0.425s-3.665,0.105-4.408-0.585c-0.743-0.689-1.486-1.22-2.814-1.167c-1.328,0.053-4.46-0.161-6.267-0.585c-1.805-0.425-4.895-3-5.15-2.335c-0.266,0.69,0.211,1.168,1.168,2.335c0.955,1.169,5.075,2.778,5.075,2.778s0,3.453,0,4.886c0,1.435,2.973,3.61,4.512,3.61s2.708-1.062,2.708-1.806v-4.512C17.775,21.045,21.146,19.221,21.942,17.521zM20.342,13.73c1.744,0,3.159-1.414,3.159-3.158c0-1.745-1.415-3.159-3.159-3.159s-3.158,1.414-3.158,3.159C17.184,12.316,18.598,13.73,20.342,13.73zM12.019,13.73c1.744,0,3.158-1.414,3.158-3.158c0-1.745-1.414-3.159-3.158-3.159c-1.745,0-3.159,1.414-3.159,3.159C8.86,12.316,10.273,13.73,12.019,13.73z" stroke="black" fill="white" />
      </svg><p>Lessons </p></div></a>
	       <a href="../friends.php"><div> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M21.053,20.8c-1.132-0.453-1.584-1.698-1.584-1.698s-0.51,0.282-0.51-0.51s0.51,0.51,1.02-2.548c0,0,1.414-0.397,1.132-3.68h-0.34c0,0,0.849-3.51,0-4.699c-0.85-1.189-1.189-1.981-3.058-2.548s-1.188-0.454-2.547-0.396c-1.359,0.057-2.492,0.792-2.492,1.188c0,0-0.849,0.057-1.188,0.397c-0.34,0.34-0.906,1.924-0.906,2.321s0.283,3.058,0.566,3.624l-0.337,0.113c-0.283,3.283,1.132,3.68,1.132,3.68c0.509,3.058,1.019,1.756,1.019,2.548s-0.51,0.51-0.51,0.51s-0.452,1.245-1.584,1.698c-1.132,0.452-7.416,2.886-7.927,3.396c-0.511,0.511-0.453,2.888-0.453,2.888h26.947c0,0,0.059-2.377-0.452-2.888C28.469,23.686,22.185,21.252,21.053,20.8zM8.583,20.628c-0.099-0.18-0.148-0.31-0.148-0.31s-0.432,0.239-0.432-0.432s0.432,0.432,0.864-2.159c0,0,1.199-0.336,0.959-3.119H9.538c0,0,0.143-0.591,0.237-1.334c-0.004-0.308,0.006-0.636,0.037-0.996l0.038-0.426c-0.021-0.492-0.107-0.939-0.312-1.226C8.818,9.619,8.53,8.947,6.947,8.467c-1.583-0.48-1.008-0.385-2.159-0.336C3.636,8.179,2.676,8.802,2.676,9.139c0,0-0.72,0.048-1.008,0.336c-0.271,0.271-0.705,1.462-0.757,1.885v0.281c0.047,0.653,0.258,2.449,0.469,2.872l-0.286,0.096c-0.239,2.783,0.959,3.119,0.959,3.119c0.432,2.591,0.864,1.488,0.864,2.159s-0.432,0.432-0.432,0.432s-0.383,1.057-1.343,1.439c-0.061,0.024-0.139,0.056-0.232,0.092v5.234h0.575c-0.029-1.278,0.077-2.927,0.746-3.594C2.587,23.135,3.754,22.551,8.583,20.628zM30.913,11.572c-0.04-0.378-0.127-0.715-0.292-0.946c-0.719-1.008-1.008-1.679-2.59-2.159c-1.584-0.48-1.008-0.385-2.16-0.336C24.72,8.179,23.76,8.802,23.76,9.139c0,0-0.719,0.048-1.008,0.336c-0.271,0.272-0.709,1.472-0.758,1.891h0.033l0.08,0.913c0.02,0.231,0.022,0.436,0.027,0.645c0.09,0.666,0.21,1.35,0.33,1.589l-0.286,0.096c-0.239,2.783,0.96,3.119,0.96,3.119c0.432,2.591,0.863,1.488,0.863,2.159s-0.432,0.432-0.432,0.432s-0.053,0.142-0.163,0.338c4.77,1.9,5.927,2.48,6.279,2.834c0.67,0.667,0.775,2.315,0.746,3.594h0.48v-5.306c-0.016-0.006-0.038-0.015-0.052-0.021c-0.959-0.383-1.343-1.439-1.343-1.439s-0.433,0.239-0.433-0.432s0.433,0.432,0.864-2.159c0,0,0.804-0.229,0.963-1.841v-1.227c-0.001-0.018-0.001-0.033-0.003-0.051h-0.289c0,0,0.215-0.89,0.292-1.861V11.572z" stroke="black" fill="white" />
      </svg><p>Friends</p></div></a>
	   
	  	  <a href="../statistics.php"><div> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M21.25,8.375V28h6.5V8.375H21.25zM12.25,28h6.5V4.125h-6.5V28zM3.25,28h6.5V12.625h-6.5V28z" stroke="black" fill="white" />
      </svg><p>Statistics</p></div></a>
		  <a href="../userpage.php"><div><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="40" width="40">
      <path  d="M24.359,18.424l-2.326,1.215c0.708,1.174,1.384,2.281,1.844,3.033l2.043-1.066C25.538,20.822,24.966,19.652,24.359,18.424zM19.143,14.688c0.445,0.84,1.342,2.367,2.274,3.926l2.414-1.261c-0.872-1.769-1.72-3.458-2.087-4.122c-0.896-1.621-1.982-3.108-3.454-5.417c-1.673-2.625-3.462-5.492-4.052-4.947c-1.194,0.384,1.237,4.094,1.876,5.715C16.73,10.147,17.991,12.512,19.143,14.688zM26.457,22.673l-1.961,1.022l1.982,4.598c0,0,0.811,0.684,1.92,0.213c1.104-0.469,0.81-1.706,0.81-1.706L26.457,22.673zM24.35,15.711c0.168,0.339,2.924,5.93,2.924,5.93h1.983v-5.93H24.35zM18.34,15.704h-4.726l-3.424,5.935h11.66C21.559,21.159,18.771,16.479,18.34,15.704zM3.231,21.613l3.437-5.902H2.083v5.93h1.133L3.231,21.613zM15.048,10.145c0-0.93-0.754-1.685-1.685-1.685c-0.661,0-1.231,0.381-1.507,0.936l2.976,1.572C14.97,10.725,15.048,10.444,15.048,10.145zM14.343,12.06l-3.188-1.684L9.62,13.012l3.197,1.689L14.343,12.06zM3.192,26.886l-0.384,1.108v0.299l0.298-0.128l0.725-0.896l2.997-2.354l-3.137-1.651L3.192,26.886zM9.02,14.044l-4.757,8.17l3.23,1.706l4.728-8.186L9.02,14.044z" stroke="black" fill="white" />
      </svg><p>Practice </p></div></a>

		
      </div> 






















<div id="Wrap">

<div id='header'>
<p style='border-bottom:double 4px #CCC;margin-top:10px;'></p>
<hr />
<p style='display:inline-block;margin-right:20px;'>All </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Math </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Verbal </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Tips </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Scores </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Lessons </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Study Schedule </p>
<hr />
<p style='display:inline-block;margin-right:20px;'>Solved Questions </p>
<hr />
<p style='border-bottom:double 4px #CCC;'></p>
</div>







	<div id="tab-wrap">

	     <div id="example-two">
					
    		<ul class="nav">
                <li class="nav-one"><a href="#featured2" class="current">Topics</a></li>
                <li class="nav-two"><a href="#core2">Types</a></li>
                <li class="nav-three"><a href="#jquerytuts2">Tips to Solve</a></li>
                <li class="nav-four last"><a href="#classics2">DataAnalysis</a></li>
            </ul>
    		
    		<div class="list-wrap">
    		
    			<ul id="featured2">
    				<li><a href="http://css-tricks.com/perfect-full-page-background-image/">Full Page Background Images</a></li>
    				<li><a href="http://css-tricks.com/designing-for-wordpress-complete-series-downloads/">Designing for WordPress</a></li>
    				<li><a href="http://css-tricks.com/build-your-own-social-home/">Build Your Own Social Home!</a></li>
    				<li><a href="http://css-tricks.com/absolute-positioning-inside-relative-positioning/">Absolute Positioning Inside Relative Positioning</a></li>
    				<li><a href="http://css-tricks.com/ie-css-bugs-thatll-get-you-every-time/">IE CSS Bugs That'll Get You Every Time</a></li>
    				<li><a href="http://css-tricks.com/404-best-practices/">404 Best Practices</a></li>
    				<li><a href="http://css-tricks.com/date-display-with-sprites/">Date Display with Sprites</a></li>
    			</ul>
        		 
        		 <ul id="core2" class="hide">
                    <li><a href="http://css-tricks.com/video-screencasts/58-html-css-the-very-basics/">The VERY Basics of HTML &amp; CSS</a></li>
                    <li><a href="http://css-tricks.com/the-difference-between-id-and-class/">Classes and IDs</a></li>
                    <li><a href="http://css-tricks.com/the-css-box-model/">The CSS Box Model</a></li>
                    <li><a href="http://css-tricks.com/all-about-floats/">All About Floats</a></li>
                    <li><a href="http://css-tricks.com/the-css-overflow-property/">CSS Overflow Property</a></li>
    				<li><a href="http://css-tricks.com/css-font-size/">CSS Font Size - (px - em - % - pt - keyword)</a></li>
    				<li><a href="http://css-tricks.com/css-transparency-settings-for-all-broswers/">CSS Transparency / Opacity</a></li>
    				<li><a href="http://css-tricks.com/css-sprites/">CSS Sprites</a></li>
    				<li><a href="http://css-tricks.com/nine-techniques-for-css-image-replacement/">CSS Image Replacement</a></li>
        		 	<li><a href="http://css-tricks.com/what-is-vertical-align/">CSS Vertial Align</a></li>
    				<li><a href="http://css-tricks.com/the-css-overflow-property/">The CSS Overflow Property</a></li>
        		 </ul>
        		 
        		 <ul id="jquerytuts2" class="hide">
        		    <li><a href="http://css-tricks.com/anythingslider-jquery-plugin/">Anything Slider jQuery Plugin</a></li>
        		    <li><a href="http://css-tricks.com/moving-boxes/">Moving Boxes</a></li>
    				<li><a href="http://css-tricks.com/simple-jquery-dropdowns/">Simple jQuery Dropdowns</a></li>
    				<li><a href="http://css-tricks.com/creating-a-slick-auto-playing-featured-content-slider/">Featured Content Slider</a></li>
    				<li><a href="http://css-tricks.com/startstop-slider/">Start/Stop Slider</a></li>
    				<li><a href="http://css-tricks.com/banner-code-displayer-thing/">Banner Code Displayer Thing</a></li>
    				<li><a href="http://css-tricks.com/highlight-certain-number-of-characters/">Highlight Certain Number of Characters</a></li>
    				<li><a href="http://css-tricks.com/auto-moving-parallax-background/">Auto-Moving Parallax Background</a></li>
        		 </ul>
        		 
        		 <ul id="classics2" class="hide">
                    <li><a href="http://css-tricks.com/css-wishlist/">Top Designers CSS Wishlist</a></li>
                    <li><a href="http://css-tricks.com/what-beautiful-html-code-looks-like/">What Beautiful HTML Code Looks Like</a></li>
                    <li><a href="http://css-tricks.com/easily-password-protect-a-website-or-subdirectory/">Easily Password Protect a Website or Subdirectory</a></li>
                    <li><a href="http://css-tricks.com/how-to-create-an-ie-only-stylesheet/">IE-Only Stylesheets</a></li>
                    <li><a href="http://css-tricks.com/ecommerce-considerations/">eCommerce Considerations</a></li>
                    <li><a href="http://css-tricks.com/php-for-beginners-building-your-first-simple-cms/">PHP: Build Your First CMS</a></li>
        		 </ul>
        		 
    		 </div> <!-- END List Wrap -->
		 
		 </div> <!-- END Organic Tabs (Example One) -->
	

	
	</div>
	
	<div style='display:inline-block;width:450px;vertical-align:top;margin-left:20px;font-family:tahoma;font-size:12px;'>
	
	<p>Algebra is an abstract language. Success with algebra involves understanding the symbols and grammar of algebra, as well as the concepts of algebra.<br/><br/>

     But students have different learning styles. For practically all students, a visual approach is helpful. Some students may need a concrete, hands-on approach. Some do well even with an abstract approach, provided it is presented clearly and logically.<br/><br/>

     Below I offer some suggestions that may enable you to provide the best algebra help to your son or daughter if you are a parent or to your students if you are a classroom teacher.<br/><br/>

     Most of the ideas will pertain to the middle school and high school years, although some will pertain to the elementary grades.
	 
	 </p>

     </div>

	
	
	
	
</div>
	

		
</body>

</html>
