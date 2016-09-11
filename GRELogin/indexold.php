<?php
 require_once("config.php");
 	if(isset($_SESSION['sess']))
	{	
	header("location:home.html");
	
 }
 
 else{
 ?>
<form name="login" method="post" action="validate.php"> 
<label>Username</label> 
<input type="text" name="username"class="input"/> <br />
<label>Password </label> <input type="password" name="pass" class="input"/> <br />
<input type="submit" name="submit" value="Login" class="submit"/>
</form>
<div id="fb-root"></div><div id="fb-root"></div>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like-box" data-href="http://www.facebook.com/pages/The-fourth-law/199640780163570?ref=tn_tnmn" data-width="500" data-show-faces="true" data-stream="true" data-header="true"></div>

<?php
	} ?>