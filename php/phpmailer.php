<?php
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 0;
   $mail->Host = 'smtp.hostinger.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'contact@ianiemeka-cv.site';
   $mail->Password = 'C@niemeka!4';
   $mail->setFrom('contact@ianiemeka-cv.site', 'Isaiah Aniemeka');
   $mail->addReplyTo('contact@ianiemeka-cv.site', 'Isaiah Aniemeka');
   $mail->addAddress('contact@ianiemeka-cv.site', 'Isaiah Aniemeka');
   $mail->Subject = 'Checking if PHPMailer works';
   $mail->msgHTML(file_get_contents('message.html'), __DIR__);
   $mail->Body = 'This is just a plain text message body';
   //$mail->addAttachment('attachment.txt');
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'The email message was sent.';
   }
?>