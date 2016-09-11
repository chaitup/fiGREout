<?php

require ('PHPMailer/class.phpmailer.php');

$activationlink = 'www.google.com';                                       																	 
$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.localhost';  // Specify main and backup server
$mail->SMTPAuth = true;     
$mail->Port = "25";                          // Enable SMTP authentication
$mail->Username = 'abilash@localhost';                            // SMTP username
$mail->Password = 'RohitSharma@77';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'abilash@localhost';
$mail->FromName = 'Solveby';
$mail->AddAddress('abi.abilash89@gmail.com', 'Self');  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional
$mail->AddReplyTo('feedback@localhost', 'Information');
//$mail->AddCC('cc@example.com');
/* ///$mail->AddBCC('bcc@example.com'); */

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('images/draw.png', 'draw.png');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Registration';
$mail->Body    = '<p style="height:40px;background:#3b5998;"></p><p style="font: 13px verdana;color:red;">It has been the tale of our season, fighting, scrapping away, then bowl well to win this. Parthiv saw the innings through, then Perera put the icing on the cake. It was pretty even, but we need to bowl well in the first six and with Steyn, who are likely to do that. We still need to keep winning as many games as possible</p>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


if(!$mail->Send()) {

exit("<div class='Centerbox'><p class='Outcome'>Message could not be sent.! Mailer Error: " .$mail->ErrorInfo."</p></div>");

}




?>
