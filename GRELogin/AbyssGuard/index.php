<?php 
include('config.php');
$version = "v1.7.7";
$lines = count(file("abyssguardlog.txt")); 
$httpbl = 0;
$blacklistedip = 0;
$blacklistedua = 0;
$hackattempts = 0;
$spamattempts = 0;
$headeraccept = 0;
$headerua = 0;
$refererspam = 0;
$viaproxy = 0;
$seek = file("abyssguardlog.txt");
foreach ($seek as $line) {
	if (strpos($line, "httpBL")) {
		$httpbl++;
	}
	if (strpos($line, "Blacklisted IP address")) {
		$blacklistedip++;
	}
	if (strpos($line, "Blacklisted User-Agent")) {
		$blacklistedua++;
	}
	if (strpos($line, "Hack attempt") || strpos($line, "Spam attempt") || strpos($line, "Trackback spam attempt")) {
		$hackattempts++;
	}
	if (strpos($line, "No header \"Accept\" provided")) {
		$headeraccept++;
	}
	if (strpos($line, "No User-Agent provided")) {
		$headerua++;
	}
	if (strpos($line, "Referer spam") || strpos($line, "User claimed to be ")) {
		$refererspam++;
	}
	if (strpos($line, "Proxy detected")) {
		$viaproxy++;
	}
}
$whattoecho = "";
if ($httpbl != 0) {
	$whattoecho .= "httpBL: " . $httpbl . " | ";
}
if ($blacklistedip != 0) {
	$whattoecho .= "blacklisted ip: " . $blacklistedip . " | ";
}
if ($blacklistedua != 0) {
	$whattoecho .= "blacklisted UA: " . $blacklistedua . " | ";
}
if ($hackattempts != 0) {
	$whattoecho .= "hack/spam attempts: " . $hackattempts . " | ";
}
if ($headeraccept != 0) {
	$whattoecho .= "missing accept: " . $headeraccept . " | ";
}
if ($headerua != 0) {
	$whattoecho .= "missing UA: " . $headerua . " | ";
}
if ($refererspam != 0) {
	$whattoecho .= "referer spam: " . $refererspam . " | ";
}
if ($viaproxy != 0) {
	$whattoecho .= "via proxy: " . $viaproxy;
}
?>
<?php
if ($password != "") {
	$form = '<form method="post" style="text-align: center;">';
	$form .= '<h3>This page is password protected</h3>';
	$form .= '<input name="password" type="password">';
	$form .= '<input value="Login" type="submit">';
	$form .= '</form>';
}
if (isset($_POST['password']) && $_POST['password'] != $password) {
	echo $form;
	echo '<h3 style="color: maroon; text-align: center;">Wrong password!</h3>';
} elseif (!isset($_POST['password']) && $password != "") {
	echo $form;
} elseif (isset($_POST["password"]) && $_POST["password"] == $password || $password == "") { 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>AbyssGuard Statistics</title>
	<meta name="robots" content="noindex, nofollow" />
	<style type="text/css">
		html {margin: 7px 7px 7px;}
		body {background-color: #cccccc; line-height: 1.3em;}
		#table {width: 100%; border-collapse: collapse; vertical-align: top; font-size: 14px; border: 1px solid #DDDDDD; box-shadow: 1px 1px 5px black;}
		#table td {vertical-align: top; padding: 5px;}
		#table td:first-child {width: 220px;}
		#table td:last-child {word-break: break-all; min-width: 200px; max-width: 800px;}
		#table tr {border: 1px solid #DDDDDD;}
		#table tr:nth-child(even) {background-color: white;}
		#table tr:nth-child(odd) {background-color: #F8F8F8;}
		a {color: #005C9C;}
		#header {font-weight: bold; font-size: medium; background-color: #F8F8F8; text-shadow: 1px 1px 1px white;}
		#header td {padding: 8px; border-bottom: 1px solid grey;}
		#footer {background-color: #F8F8F8;}
		#footer td {padding: 8px; text-align: right; border-top: 1px solid grey;}
		#footer a {color: maroon; text-decoration: none; text-shadow: 1px 1px 1px white; font-weight: bold; font-size: 15px;}
		.threat {color: maroon;}
		.date a {color: black; text-decoration: none; border-bottom: 1px dotted currentColor;}
		.gradient {background: -moz-linear-gradient(bottom, #cccccc, #F8F8F8); background: -ms-linear-gradient(bottom, #cccccc, #F8F8F8); background: -o-linear-gradient(bottom, #cccccc, #F8F8F8);
			background: -webkit-linear-gradient(bottom, #cccccc, #F8F8F8); background: -webkit-gradient(bottom, #cccccc, #F8F8F8); background: linear-gradient(bottom, #cccccc, #F8F8F8);
			filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, startColorStr='#cccccc', EndColorStr='#F8F8F8');	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=0, startColorStr='#cccccc', EndColorStr='#F8F8F8')"}
		#preheader a {color: maroon; text-decoration: none; text-shadow: 1px 1px 1px white; font-weight: bold; font-size: 15px;}
		#count {color: grey; text-align: left !important; width: auto; float: left;}
	</style>
</head>
<body>
<table id="table">
	<tr id="preheader">
		<td><?php if ($lines == 1) {echo("$lines record");} else {echo("$lines records");} ?></td>
		<td style="text-align: right; font-size: small;">
			<?php echo("<div id=\"count\">" . $whattoecho . "</div>"); ?>
			<a href="http://www.abyss-arts.co.uk/php/abyssguard-php-anti-spam-script/">AbyssGuard <?php echo($version); ?></a>
		</td>
	</tr>
	<tr id="header" class="gradient">
		<td>IP/Date/Reason</td><td>Request/URI/Protocol/Accept/User-Agent/Host/Referer</td>
	</tr>
	<?php require('abyssguardlog.txt'); ?>
	<tr id="footer" class="gradient">
		<td></td>
		<td><a href="http://www.abyss-arts.co.uk/php/abyssguard-php-anti-spam-script/">AbyssGuard <?php echo($version); ?></a></td>
	</tr>
</table>
</body>
</html>
<?php } ?>