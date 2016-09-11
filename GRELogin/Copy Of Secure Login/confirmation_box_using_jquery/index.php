<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vasplus Programming Blog | Confirmation Box using Jquery</title>


</head>
<body>
<center>
<div align="center" style="width:1000px;">




















<!--Confirmation Box Code Begins Here-->
<div style="float:left; width:590px;">&nbsp;
    <input type="hidden" id="vasplus_programming_blog_hidden_item_id" value=""><!-- This must always be on your contents page-->
	<?php 
    
    $vasplus_programming_blog_images = array(
        array('id' => 1, 'vasplus_p_blog_image' => '1.jpg'),
        array('id' => 2, 'vasplus_p_blog_image' => '2.jpg'),
        array('id' => 3, 'vasplus_p_blog_image' => '3.jpg'),
        array('id' => 4, 'vasplus_p_blog_image' => '4.jpg'),
        array('id' => 5, 'vasplus_p_blog_image' => '5.jpg'),
        array('id' => 6, 'vasplus_p_blog_image' => '6.jpg'),
        array('id' => 7, 'vasplus_p_blog_image' => '7.jpg'),
		array('id' => 8, 'vasplus_p_blog_image' => '8.jpg'),
		array('id' => 9, 'vasplus_p_blog_image' => '9.jpg'),
		array('id' => 10, 'vasplus_p_blog_image' => '10.jpg')
    );
    
    foreach($vasplus_programming_blog_images as $a_new_image)
	{
        ?>
        <center>
        <div style="-webkit-border-radius: 15px 15px; 15px 15px;-moz-border-radius: 15px 15px; 15px 15px;border-radius: 15px 15px; 15px 15px;margin-bottom:15px;width:510px; border: 1px solid #CCC;box-shadow: 0 2px 20px #DF536B;-moz-box-shadow: 0 2px 20px #DF536B;-webkit-box-shadow: 0 2px 20px #DF536B; padding-top:5px;padding-left:5px;padding-bottom:5px;" id="vpb_deletion_id<?php echo strip_tags($a_new_image['id']); ?>">
        
        <div style="float:left; width:430px;">
         <img src="images/<?php echo strip_tags($a_new_image['vasplus_p_blog_image']); ?>" width="430" height="260" border="0" style="-webkit-border-radius: 15px 15px; 15px 15px;-moz-border-radius: 15px 15px; 15px 15px;border-radius: 15px 15px; 15px 15px;" />
        </div>
        
        <div style="float:left; width:60px; margin-top:100px;" align="right" onClick="vasplus_programming_blog_confirmation_popup_box(<?php echo strip_tags($a_new_image['id']); ?>);">
        <span class="vpb_confirmation_buttons_no" title="Delete this item">X</span>
        </div>
        <br clear="all">
        
        </div>
        </center>
        <?php
    }
    
    ?>
<script type="text/javascript" src="jquery_1.5.2.js"></script>
<script type="text/javascript" src="vasplus_programming_blog_confirm.js"></script>
<link rel="stylesheet" type="text/css" href="vasplus_programming_blog_confirm.css" />
</div>
<!--Confirmation Box Code Ends Here-->














<div style="float:left; width:400px;" align="left">
<br clear="all" />
<div id="vasp" align="left" style=" font-family:Verdana, Geneva, sans-serif; font-size:20px; font-weight:bold;width:400px;">Confirmation Box using CSS and Jquery</div><br clear="all" /><br clear="all" />
<font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:black;">Please click on the red buttons infront of the images at the left to see the confirmation box in action!</font><br clear="all"><br clear="all"><br clear="all">

</div>
<br clear="all" />












</div>
</center>
<p style="padding-bottom:100px;">&nbsp;</p>




</body>
</html>