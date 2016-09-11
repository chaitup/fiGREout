<html>
<head>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.tipsy.js"></script>
<script type="text/javascript">
	$(function() {
		$('#tip').tipsy();
		$('#fade').tipsy({fade: true});
		$('.south').tipsy({gravity: 's'});
		$('#east').tipsy({gravity: 'e'});
		$('#west').tipsy({gravity: 'w'});
		$('#south-fade').tipsy({gravity: 's', fade: true});
		
	});
</script>
<link rel="stylesheet" type="text/css" href="wtfdiary.css" media="screen" />
<link rel="stylesheet" type="text/css" href="tipsy_title.css" media="screen" />

</head>

<title>Facebook/twitter like tooltips using Tipsy</title>
<body>
<h2>Facebook/Twitter like Tooltip using tipsy </h2>
<div>by <a href="http://www.wtfdiary.com" class="south" title="WTFdiary.com">_ _ _ _ _ _</a></div><br/><br/>

<div><a href="http://www.wtfdiary.com" id="tip" title="wtfdiary.com - Best programming Blog">Basic tooltip</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.wtfdiary.com" class="south" title="wtfdiary.com - Best programming Blog">Top tooltip</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.wtfdiary.com" id="east" title="wtfdiary.com - We give you the best tutorial to accomplish difficult objectives very easily">East tooltip</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.wtfdiary.com" id="west" title="wtfdiary.com - We also bring in for you reviews of latest Apps, Softwares and some interesting Silicon valley news">West tooltip</a></div><br/>

<div class="info">So this is it, simply adding a javascript, changes your title attribute forever. You can even change the look of the tooltip, just reach the tipsy_title.css in the folder, and edit it as per your needs, you can change the size of font, color of font, padding etc.</div>


</body>
</html>