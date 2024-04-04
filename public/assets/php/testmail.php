<?php
$to = 'sauvagehugopro@gmail.com';
$subject = 'Test Mail';
$message = 'This is a test mail.';
$headers = 'From: hugosauvage59510@gmail.com' . "\r\n" .
    'Reply-To: hugosauvage59510@gmail.com';

if(mail($to, $subject, $message, $headers)){
    echo "Mail sent successfully.";
}else{
    echo "Mail sending failed.";
}
?>