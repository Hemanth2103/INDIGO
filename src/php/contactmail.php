<?php
if(isset($_POST['submit'])){
    $to = "sudinihemanth@gmail.com";
    $subject = "Email Received";
    $message = "First Name: ".$_POST['first-name']."\n";
    $message .= "Last Name: ".$_POST['last-name']."\n";
    $message .= "Email: ".$_POST['email']."\n";
    $message .= "Message: ".$_POST['Message']."\n";
    $headers = "From: your-email@example.com" . "\r\n" .
               "Reply-To: your-email@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
    echo "Email sent successfully!";
}
?>
