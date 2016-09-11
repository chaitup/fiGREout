<?php
require 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.elasticemail.com';  // Specify main and backup server
$mail->SMTPAuth = true;     
$mail->Port = "2525";                          // Enable SMTP authentication
$mail->Username = 'info@grenation.com';                            // SMTP username
$mail->Password = '2d45a87e-85e1-4e7d-bfc1-92fb0c320890';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@grenation.com';
$mail->FromName = 'GRE nation';
$mail->AddAddress('abi.abilash89@gmail.com', 'Self');  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional
//$mail->AddReplyTo('info@grenation.com', 'Information');
//$mail->AddCC('cc@example.com');
///$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('images/draw.png', 'draw.png');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Registration';
$mail->Body    = '<p style="background:-webkit-linear-gradient(top, black, black);height:30px;border:1px solid black;">
<a href="register.php"><span style="color:white;float:right;margin-right:300px;margin-top:5px;font-family:tahoma;background:#000;padding:2px;border:1px solid #000;">Register</span></a>
</p>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';

?>