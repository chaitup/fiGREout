/********************************************************************************
* This script is brought to you by Vasplus Programming Blog to whom all copyrights are reserved.
* Website: www.vasplus.info
* Email: info@vasplus.info
* Do not remove this information from the top of this code.
*********************************************************************************/


/*This is the function containing the contents of the popup box*/
function vasplus_programming_blog_confirmation_popup_box(id)
{
	$('#vasplus_programming_blog_hidden_item_id').val(id);
	$.Vasplus_Programming_Blog_Confirm({
		'vpb_confirmation_heading' : 'Confirmation', /*You may change this content if you wish*/
		'vpb_confirmation_body'    : 'Are you sure that you really want to delete this item?', /*You may change this content if you wish*/
		'vpb_proceed_button'       : 'Yes',           /*You may change this content if you wish*/
		'vpb_cancel_button'        : 'Cancel'         /*You may change this content if you wish*/
	});
}


/*This function performs the user action which are either to delete an item or not depending on the user's option*/
function vasplus_programming_blog_confirmation_action(status)
{
	var id = $('#vasplus_programming_blog_hidden_item_id').val();
	if( status == "yes")
	{
		
		//You may write few lines of code here and pass the variable id to your php page to delete the item from your database if you wish
		
		
		$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){ $(this).remove(); });
		$('#vpb_deletion_id'+id).slideUp('slow');
	}
	else if( status == "no")
	{
		$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){ $(this).remove(); });
	}
	else
	{
		//Unknown status brought
	}
}


/*Do not touch the below code to avoid errors unless you know what you are doing*/
$(document).ready(function() { $.Vasplus_Programming_Blog_Confirm = function(vpb_contents){ if($('#vasplus_programming_blog_confirmation_alert_box').length) { return false; } else { var VPB_LOADER = ['<div id="vasplus_programming_blog_confirmation_alert_box">','<div id="vasplus_programming_blog_confirmation_alert_box_contents">','<div id = "vasplus_programming_blog_confirmation_alert_box_headers">'+vpb_contents.vpb_confirmation_heading+'</div>','<p>'+vpb_contents.vpb_confirmation_body+'</p>','<center><div id="vpb_confirmation_buttons"><div id="vpb_confirmation_buttons_yes" onClick="vasplus_programming_blog_confirmation_action(\'yes\');"><span class="vpb_confirmation_buttons_yes">'+vpb_contents.vpb_proceed_button+'</span></div><div id="vpb_confirmation_buttons_no" onClick="vasplus_programming_blog_confirmation_action(\'no\');"><span class="vpb_confirmation_buttons_no">'+vpb_contents.vpb_cancel_button+'</span></div></div><center></div></div>'].join(''); $(VPB_LOADER).hide().fadeIn('fast').appendTo('body'); } } });