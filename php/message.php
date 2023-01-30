<?php
$name = $_POST['name'];
$to = 'isaiah.aniemeka@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $_POST['email'];

// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully';
}
else{
    echo 'Unable to send email. Please try again.';
}

?>