<?php
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
if (array_key_exists('email', $_POST)) {
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@ianiemeka-cv.site';
    $mail->Password = 'C@niemeka!4';
    $mail->setFrom('contact@ianiemeka-cv.site', 'Isaiah Aniemeka');
    $mail->addAddress('contact@ianiemeka-cv.site', 'Isaiah Aniemeka');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = $_POST['subject'];
        $mail->isHTML(false);
        $mail->Body = <<<EOT
            Email: {$_POST['email']}
            Name: {$_POST['name']}
            Message: {$_POST['message']}
EOT;
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Share it with us!';
    }
}
?>